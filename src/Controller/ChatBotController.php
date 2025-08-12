<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class ChatBotController extends AbstractController
{
    #[Route('/chat-bot', name: 'app_chat')]
    public function index(): Response
    {
        return $this->render('chatbot/index.html.twig', [
        ]);
    }

    #[Route('/chat-new', name: 'app_chat_new', methods: ['POST'])]
    public function new(Request $request, SessionInterface $session): Response
    {
        $jsonData = json_decode($request->getContent(), true);
        $message = strtolower($jsonData['message'] ?? '');
        $responseMessage = '';

        // Get conversation context from session
        $context = $session->get('chatbot_context', null);

        if ($context && $context['state'] === 'awaiting_symptom_description') {
            // A conversation is in progress, and we are waiting for the symptom description.
            $found_specialist = false;

            // Decision tree: map symptom keywords to specialists
            $symptom_map = [
                'généraliste' => ['gorge', 'toux', 'fièvre', 'tête', 'migraine', 'fatigue', 'courbatures'],
                'orthopédiste' => ['genou', 'dos', 'épaule', 'articulation', 'os', 'fracture'],
                'dentiste' => ['dents', 'dent', 'gencive', 'carie'],
                'dermatologue' => ['peau', 'bouton', 'rougeur', 'démangeaison', 'eczéma'],
                'cardiologue' => ['coeur', 'essoufflement', 'palpitation', 'douleur thoracique'],
            ];

            foreach ($symptom_map as $specialist => $keywords) {
                if ($this->containsKeywords($message, $keywords)) {
                    // For now, we link to the general speciality page.
                    // A future improvement would be to link to a filtered list of doctors.
                    $specialityUrl = $this->generateUrl('app_speciality_index');
                    $responseMessage = 'D\'après ce que vous décrivez, je vous suggère de consulter un ' . $specialist . '. Vous pouvez trouver la liste de nos spécialistes <a href="' . $specialityUrl . '">ici</a>.';
                    $found_specialist = true;
                    $session->remove('chatbot_context'); // End conversation
                    break;
                }
            }

            if (!$found_specialist) {
                $responseMessage = "Je ne suis pas sûr de bien comprendre. Pourriez-vous préciser la partie du corps concernée ou le type de problème ? Si vous n'êtes pas sûr, un médecin généraliste est souvent un bon point de départ.";
                // We keep the state, so the user can try again.
            }

        } else {
            // No conversation in progress, use general keyword matching.
            $greetings = ['bonjour', 'salut', 'hello', 'coucou'];
            $appointment_terms = ['rendez-vous', 'rdv', 'appointment', 'docteur', 'doctor'];
            $diagnostic_terms = ['symptômes', 'symptome', 'malade', 'maladie', 'douleur', 'mal', 'aider'];
            $payment_terms = ['paiement', 'payment', 'attestation', 'facture'];

            $specialityUrl = $this->generateUrl('app_speciality_index');

            $appointmentUrl = $this->generateUrl('app_login'); // Default to login page
            if ($this->getUser()) {
                $appointmentUrl = $this->generateUrl('app_appointment_show', ['user' => $this->getUser()->getId()]);
            }

            if ($this->containsKeywords($message, $greetings)) {
                $responseMessage = 'Bonjour ! Comment puis-je vous aider ?';
            }
            elseif ($this->containsKeywords($message, $appointment_terms)) {
                $responseMessage = 'Si vous souhaitez prendre un rendez-vous, vous pouvez consulter la liste de nos spécialistes en <a href="' . $specialityUrl . '">cliquant ici</a>.';
            }
            elseif ($this->containsKeywords($message, $diagnostic_terms)) {
                $responseMessage = "Je peux vous aider à trouver le bon spécialiste. Pour commencer, pouvez-vous décrire brièvement votre symptôme principal ? (par exemple, 'mal de gorge', 'douleur au genou', 'fièvre')";
                $session->set('chatbot_context', ['state' => 'awaiting_symptom_description']);
            }
            elseif ($this->containsKeywords($message, $payment_terms)) {
                $responseMessage = 'Pour toute question relative au paiement ou pour obtenir une attestation, veuillez consulter votre page de rendez-vous <a href="' . $appointmentUrl . '">ici</a>. Vous devrez peut-être vous connecter.';
            }
            else {
                $responseMessage = "Je ne suis pas sûr de comprendre. Vous pouvez essayer de reformuler votre demande ou choisir l'une des options ci-dessous.";
            }
        }

        return new Response(json_encode(['message' => $responseMessage]), Response::HTTP_OK, ['Content-Type' => 'application/json']);
    }

    private function containsKeywords(string $message, array $keywords): bool
    {
        foreach ($keywords as $keyword) {
            if (str_contains($message, $keyword)) {
                return true;
            }
        }
        return false;
    }
}
