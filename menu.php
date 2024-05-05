<?php
    require 'login.php';
    if (isset($_SESSION['user_id'])) {
        $username = $_SESSION['user_id'];
    }           
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu di Gioco</title>
    <link rel="stylesheet" href="/stili/style.css">
    <link rel="stylesheet" href="/stili/chat.css"> 
</head>
<body>
    <div class="game-container">
        <div class="container">
            <h1>Menu</h1>
            <div class="menu">
                <button id="playButton" class="menu-button">Gioca Partita</button>
                <button id="classesButton" class="menu-button">Classi</button>
                <button id="progressButton" class="menu-button">Progressi</button>
                <button id="exitButton" class="menu-button">Esci</button>
            </div>
            <div class="username">
                Benvenuto <?php echo $username; ?> !
            </div>
        </div>
    </div>

    <!-- chat provvisoria (di prova per testare l'online) -->
    <div id="chatbox">
        <div id="content"></div>
    </div>
    <input type="text" id="usermsg" placeholder="Inserisci un messaggio">
    <script src="/script/script.js"></script>
    <script>
        //   setting username che compare nella chat e invio del messaggio
        document.getElementById('usermsg').addEventListener('keypress', function(event) {
            if (event.key === 'Enter') {
                var msg = this.value;
                if (msg.trim() === '') {
                    return;
                }
                this.value = '';
                var chatbox = document.getElementById('chatbox');
                chatbox.innerHTML += '<p><span class="username-msg"><?php echo $username; ?>:</span> <span class="message">' + msg + '</span></p>';
                chatbox.scrollTop = chatbox.scrollHeight;
            }
        });
    </script>
    <script src="/script/chat.js"></script>
</body>
</html>

