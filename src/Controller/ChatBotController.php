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
        // Récupérer les données JSON envoyées depuis la requête
        $jsonData = json_decode($request->getContent(), true);
    
        // Récupérer le message envoyé depuis le client
        $message = $jsonData['message'];
    
        // Traitez le message ici (par exemple, stockez-le dans une base de données ou envoyez une réponse immédiate)
    
        // Pour l'exemple, nous allons simplement renvoyer le message envoyé
        return new Response(json_encode(['message' => $message]), Response::HTTP_OK, ['Content-Type' => 'application/json']);
    }
}