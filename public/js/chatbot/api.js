function sendMessage(message) {
    fetch('/chat-new', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ message: message }),
    })
    .then(response => response.json())
    .then(data => {
        const now = new Date();
        const hours = now.getHours();
        const minutes = now.getMinutes();
        const formattedTime = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}`;
        const botMessage = `Bot: (${formattedTime}) ${data.message}`;
        $('#chat-messages').append(`<div class="bot-message">${botMessage}</div>`);
        // Scroll to the bottom of the chat messages
        $('#chat-messages').scrollTop($('#chat-messages')[0].scrollHeight);
    })
    .catch((error) => {
        console.error('Error:', error);
        const now = new Date();
        const hours = now.getHours();
        const minutes = now.getMinutes();
        const formattedTime = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}`;
        const botMessage = `Bot: (${formattedTime}) Désolé, une erreur est survenue.`;
        $('#chat-messages').append(`<div class="bot-message">${botMessage}</div>`);
    });
}
