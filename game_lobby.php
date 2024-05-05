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
    <title>Nuova Partita</title>
    <link rel="stylesheet" href="/stili/style_lobby.css">
</head>
<body>
    <div class="game-container">
        <div class="container">
            <h1>Nuova Partita</h1>
            <div class="menu">
                <button class="menu-button">←</button>
            </div>
            <div class="checkbox-wrapper">
                <input type="checkbox" id="multiplayer-checkbox">
                <label for="multiplayer-checkbox">Multiplayer</label>
            </div>
            <div id="nuova-partita">
                <div class="personaggio" id="stregone">
                    <img src="/immagini/stregone.png" alt="Stregone" class="character-image">
                    <div class="class-name">Stregone</div>
                    <div class="confirmation-box">✘</div>
                    <div class="level">Livello: <span class="level-number">1</span></div>
                    <div class="experience-bar"></div>
                </div>
                <div class="personaggio" id="cavaliere">
                    <img src="/immagini/cavaliere.png" alt="Stregone" class="character-image">
                    <div class="class-name">Cavaliere</div>
                    <div class="confirmation-box">✘</div>
                    <div class="level">Livello: <span class="level-number">1</span></div>
                    <div class="experience-bar"></div>
                </div>
                <div class="personaggio" id="cacciatrice">
                    <img src="/immagini/cacciatrice.png" alt="Stregone" class="character-image">
                    <div class="class-name">Cacciatrice</div>
                    <div class="confirmation-box">✘</div>
                    <div class="level">Livello: <span class="level-number">1</span></div>
                    <div class="experience-bar"></div>
                </div>
                <div class="personaggio" id="chierico">
                    <img src="/immagini/chierico.png" alt="Stregone" class="character-image">
                    <div class="class-name">Chierico</div>
                    <div class="confirmation-box">✘</div>
                    <div class="level">Livello: <span class="level-number">1</span></div>
                    <div class="experience-bar"></div>
                </div>
            </div>
            <div class="button-wrapper">
                <button id="pronto-button">Pronto</button>
            </div>
            <div class="username"><?php echo $username; ?></div>
        </div>
    </div>
    <script src="/script/script_lobby.js"></script>
    <script src="/script/script2.js"></script>
</body>
</html>