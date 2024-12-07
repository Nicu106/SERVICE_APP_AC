@extends('layout.base')

@section('title', 'Expert AI | SkillSource')

@section('content')
    <div class="chat-container">
        <h3 class="chat-title">SkillSource AI</h3>
        <div class="chat-box" id="chatBox">
            <!-- Mesajele vor apărea aici -->
            <p class="start-message">Începeți să discutați cu expertul nostru!</p>
        </div>
        <div class="chat-actions">
            <div class="chat-input-container">
                <input type="text" id="userInput" class="chat-input" placeholder="Scrie un mesaj..." aria-label="Scrie un mesaj">
                <button id="sendButton" class="send-button" type="button">Trimite</button>
            </div>
        <div>
    </div>

    <style>
        .chat-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            height: calc(100vh - 120px);
            padding: 0;
        }

        .chat-box {
            flex: 1;
            overflow-y: auto;
            width: 100%;
            background-color: black;
            padding: 10px 10px;
            font-size: 14px;
        }

        .chat-title {
            color: rgba(255, 255, 255, 0.5);
            text-align: center;
            font-size: 18px;
            /* font-weight: bold; */
            margin-bottom: 10px;
        }

        .start-message {
            color: rgba(255, 255, 255, 0.5);
            text-align: center;
        }

        .message:not(:last-child) {
            margin-bottom: 10px;
            display: flex;
        }

        .user-message {
            justify-content: flex-end;
        }

        .user-message .bubble {
            background-color: var(--accent-background-color);
            color: var(--accent-color);
            border-radius: 15px 15px 0 15px;
            padding: 10px;
            max-width: 80%;
            word-wrap: break-word;
            text-align: left;
            white-space: pre-wrap;
        }

        .bot-message {
            justify-content: flex-start;
        }

        .bot-message .bubble {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            border-radius: 15px 15px 15px 0;
            padding: 10px;
            max-width: 80%;
            word-wrap: break-word;
            text-align: left;
            white-space: pre-wrap;
        }

        .chat-actions {
            max-width: calc(var(--app-width) - 20px);
            width: 100%;
            padding: 0 10px;
            position: fixed;
            bottom: 60px;
            left: 50%;
            transform: translateX(-50%);
        }

        .chat-input-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            background-color: black;
            border-radius: 10px;
            height: 34px;
            font-size: 14px;
            margin-top: 10px;
        }

        .chat-input-container *:first-child {
            border-radius: 10px 0 0 10px;
        }

        .chat-input-container *:last-child {
            border-radius: 0 10px 10px 0;
        }

        .chat-input {
            background-color: rgba(48, 48, 48, 1);
            color: white;
            border: none;
            height: 100%;
            font-size: 14px;
            flex: 1;
            padding: 0 10px;
        }

        .chat-input::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        .chat-input:focus {
            color: white;
            outline: none;
        }

        .send-button {
            background-color: var(--accent-background-color);
            color: var(--accent-color);
            border: none;
            height: 100%;
            padding: 0 14px;
            font-weight: bold;
        }

        @keyframes loading {
            0% { 
                background-color: rgba(255, 255, 255, 0.1);
            }
            50% { 
                background-color: rgba(255, 255, 255, 0.15);
            }
            100% { 
                background-color: rgba(255, 255, 255, 0.1);
            }
        }

        .loading-message {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 10px;
            width: 45%;
            height: 40px;
            border-radius: 15px 15px 15px 0;
            animation: loading 1.5s infinite forwards ease-in-out;
        }
    </style>

    <script>
        document.getElementById('sendButton').addEventListener('click', sendMessage);

        const deleteStartMessage = () => {
            const startMessage = document.querySelector('.start-message');
            if (startMessage) startMessage.remove();
        }

        const displayLoadingMessage = () => {
            const chatBox = document.getElementById('chatBox');
            chatBox.insertAdjacentHTML('beforeend', '<div class="loading-message"></div>');
            const loadingMessage = document.querySelector('.loading-message');
            loadingMessage.scrollIntoView({ behavior: 'smooth' });
        }

        const hideLoadingMessage = () => {
            const loadingMessage = document.querySelector('.loading-message');
            if (loadingMessage) loadingMessage.remove();
        }

        function sendMessage() {
            const userInput = document.getElementById('userInput').value.trim();

            if (userInput === '') {
                alert("Te rog să introduci un mesaj!");
                return;
            }

            // Adaugă mesajul utilizatorului în chat
            deleteStartMessage();
            displayMessage(userInput, 'user');
            displayLoadingMessage();
            // Trimite mesajul la backend
            fetch('/chat-bot', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ message: userInput })
            })
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    hideLoadingMessage();
                    if (data.reply) {
                        // Afișează răspunsul botului
                        displayMessage(data.reply, 'bot');
                    } else if (data.error) {
                        // Afișează eroarea
                        displayMessage(data.error, 'bot');
                    }
                })
                .catch(error => {
                    console.error("Eroare:", error);
                    displayMessage("Eroare de rețea. Te rog să verifici conexiunea.", 'bot');
                });

            // Șterge câmpul de input
            document.getElementById('userInput').value = '';
        }
        document.addEventListener("keydown", function(event) {
            if (event.key === "Enter") {
                sendMessage();
            }
        });
        function displayMessage(message, sender) {
            const chatBox = document.getElementById('chatBox');
            const messageElement = document.createElement('div');
            messageElement.classList.add('message', sender === 'user' ? 'user-message' : 'bot-message');

            const bubble = document.createElement('div');
            bubble.classList.add('bubble');
            bubble.innerHTML = message;

            messageElement.appendChild(bubble);
            chatBox.appendChild(messageElement);
            // chatBox.scrollTop = chatBox.scrollHeight; // Scroll automat la ultimul mesaj
            messageElement.scrollIntoView({ behavior: 'smooth' });
        }
    </script>
@endsection
