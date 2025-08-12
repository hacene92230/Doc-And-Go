$(document).ready(function() {
    // Afficher / masquer la div avec l'id "chat-container"
    $('#toggle-chat').click(function() {
        $('#chat-container').toggle();
        const buttonText = $('#chat-container').is(':visible') ? 'Masquer le chat' : 'Afficher le chat';
        $('#toggle-chat').text(buttonText);
        if ($('#chat-messages').children().length === 0) {
            const greeting = getGreetingMessage();
            $('#chat-messages').append(`<div class="bot-greeting">${greeting}</div>`);
        }
        // Mettre le focus sur le bouton de fermeture du chat après avoir ouvert/fermé le chat
        $('#toggle-chat').focus();
    });

    // Définir le texte initial du bouton
    $('#toggle-chat').text('Afficher le chat');

    // Nettoyer le contenu de la div #chat-messages
    $('#clear-chat').click(function() {
        $('#chat-messages').children().not('.bot-greeting').remove();
        const messageCount = $('#chat-messages').children().length;
        $('#clear-chat').prop('disabled', messageCount <= 1);
    });

    // Afficher la zone de saisie uniquement lorsque l'utilisateur clique sur le bouton "Autre"
    $('#action button:last-child').click(function() {
        $('#inputContent').show();
    });

    // Fermer le chatbot lorsque la souris quitte la zone du chatbot
    $('#chat-container').mouseleave(function() {
        $('#chat-container').hide();
        $('#toggle-chat').text('Afficher le chat');
    });

    // Fermer le chatbot lorsque l'utilisateur appuie sur la touche Échap
    $(document).keydown(function(event) {
        if (event.key === "Escape" || event.key === "Esc") {
            if ($('#chat-container').is(':visible')) {
                $('#chat-container').hide();
                $('#toggle-chat').text('Afficher le chat');
            }
        }
    });

    // Gérer l'envoi de message
    $('#send-btn').click(function() {
        const userInput = $('#user-input').val();
        if (userInput.trim() !== '') {
            // Afficher le message de l'utilisateur
            const now = new Date();
            const hours = now.getHours();
            const minutes = now.getMinutes();
            const formattedTime = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}`;
            const userMessage = `Patient: (${formattedTime}) ${userInput}`;
            $('#chat-messages').append(`<div class="patient-message">${userMessage}</div>`);

            // Envoyer le message au backend
            sendMessage(userInput);

            // Vider le champ de saisie
            $('#user-input').val('');
        }
    });

    // Gérer l'envoi de message avec la touche Entrée
    $('#user-input').keypress(function(event) {
        if (event.which === 13) { // 13 is the Enter key
            $('#send-btn').click();
        }
    });
});

// Tableau associatif des actions et de leurs liens associés
// This will be initialized from the twig template
const actionLinks = window.actionLinks || {};

// Fonction pour gérer les actions et afficher les liens associés
function handleAction(action) {
    const link = actionLinks[action] || '#';
    let actionText;
    switch(action) {
        case 'appointment':
            actionText = 'prendre rendez-vous';
            break;
        case 'symptoms':
            actionText = 'signalement de symptômes';
            break;
        case 'payment':
            actionText = 'obtenir une attestation de paiement';
            break;
        case 'else':
            actionText = 'autre';
            break;
        default:
            actionText = 'action non reconnue';
            break;
    }

    const now = new Date();
    const hours = now.getHours();
    const minutes = now.getMinutes();
    const formattedTime = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}`;

    // Afficher l'action du patient
    const patientMessage = `Patient: (${formattedTime}) ${actionText}`;
    $('#chat-messages').append(`<div class="patient-message">${patientMessage}</div>`);

    // Afficher la réponse du bot
    let botMessage;
    if (action === 'else') {
        $('#inputContent').show();
        botMessage = `Bot: (${formattedTime}) navré de n'avoir pu donner satisfaction immédiatement à votre demande, veuillez saisir ce que nous pouvons faire pour vous.`;
    } else {
        botMessage = `Bot: (${formattedTime}) Vous avez choisi : ${actionText}. <a href="${link}">Cliquez ici</a> pour continuer.`;
    }
    $('#chat-messages').append(`<div class="bot-message">${botMessage}</div>`);

    const messageCount = $('#chat-messages').children().length;
    $('#clear-chat').prop('disabled', messageCount <= 1);
}

// Fonction pour obtenir la formule de politesse en fonction de l'heure
function getGreetingMessage() {
    const now = new Date();
    const hours = now.getHours();
    const minutes = now.getMinutes();
    const formattedTime = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}`;
    const formattedDate = now.toLocaleDateString('fr-FR');
    let greeting;
    if (hours < 12) {
        greeting = 'Bonjour';
    } else if (hours < 18) {
        greeting = 'Bon après-midi';
    } else {
        greeting = 'Bonsoir';
    }
    return `Bot: (${formattedTime}) ${greeting}, nous sommes le ${formattedDate} et il est ${formattedTime}. En quoi puis-je vous aider ?`;
}
