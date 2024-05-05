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
    <title>Classe: Chierico</title>
    <link rel="stylesheet" href="/stili/style_class.css">
</head>
<body>
    <div class="game-container">
        <div class="container">
            <h1>Chierico</h1>
            <div class="menu">
                <button class="menu-button">←</button>
            </div>
            <img src="/immagini/chierico.png" alt="Cleric" class="cleric-image">
            <div class="right-panel">
                <div class="status-container">
                    <div class="status-bar health"></div>
                    <div class="status-bar mana"></div>
                    <div class="attribute">
                        <img src="/immagini/vigor_icon.jpg" alt="Vigore" class="attribute-icon">
                        <span>Vigore</span>
                    </div>
                    <div class="attribute">
                        <img src="/immagini/intelligence_icon.jpg" alt="Intelligenza" class="attribute-icon">
                        <span>Intelligenza</span>
                    </div>
                    <div class="attribute">
                        <img src="/immagini/strength_icon.jpg" alt="Forza" class="attribute-icon">
                        <span>Forza</span>
                    </div>
                    <div class="attribute">
                        <img src="/immagini/resistance_icon.jpg" alt="Resistenza" class="attribute-icon">
                        <span>Resistenza</span>
                    </div>
                </div>
                <div class="spacer"></div>
                <div class="level-container">
                    <div class="level" data-level="1">1</div>
                    <span class="divider">•</span>
                    <div class="level" data-level="2">2</div>
                    <span class="divider">•</span>
                    <div class="level" data-level="3">3</div>
                    <span class="divider">•</span>
                    <div class="level" data-level="4">4</div>
                    <span class="divider">•</span>
                    <div class="level" data-level="5">5</div>
                </div>
                <div class="experience-bar"></div>
            </div>
            <div class="username"><?php echo $username; ?></div>
        </div>
    </div>
    <script src="/script/script_classi.js"></script>
</body>
</html>