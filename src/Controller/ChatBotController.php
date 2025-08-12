<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class ChatBotController extends AbstractController
{
    #[Route('/chat-bot', name: 'app_chat')]
    public function index(): Response
    {
        return $this->render('chatbot/index.html.twig', [
        ]);
    }

    #[Route('/chat-new', name: 'app_chat_new', methods: ['POST'])]
    public function new(Request $request): Response
    {
        $jsonData = json_decode($request->getContent(), true);
        $message = strtolower($jsonData['message'] ?? '');
        $responseMessage = '';

        $greetings = ['bonjour', 'salut', 'hello', 'coucou'];
        $appointment_terms = ['rendez-vous', 'rdv', 'appointment', 'docteur', 'doctor'];
        $symptoms_terms = ['symptômes', 'symptome', 'malade', 'maladie'];
        $payment_terms = ['paiement', 'payment', 'attestation', 'facture'];

        $specialityUrl = $this->generateUrl('app_speciality_index');
        $reasonUrl = $this->generateUrl('app_reason_index');

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
        elseif ($this->containsKeywords($message, $symptoms_terms)) {
            $responseMessage = 'Si vous avez des symptômes, vous pouvez consulter les motifs de consultation <a href="' . $reasonUrl . '">ici</a>.';
        }
        elseif ($this->containsKeywords($message, $payment_terms)) {
            $responseMessage = 'Pour toute question relative au paiement ou pour obtenir une attestation, veuillez consulter votre page de rendez-vous <a href="' . $appointmentUrl . '">ici</a>. Vous devrez peut-être vous connecter.';
        }
        else {
            $responseMessage = "Je ne suis pas sûr de comprendre. Vous pouvez essayer de reformuler votre demande ou choisir l'une des options ci-dessous.";
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
