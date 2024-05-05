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
    <title>Progressi</title>
    <link rel="stylesheet" href="/stili/style3.css">
</head>
<body>
    <div class="game-container">
        <div class="container">
            <h1>Progressi</h1>
            <div class="menu">
                <button class="menu-button">←</button>
            </div>
            <div class="username"><?php echo $username; ?></div>
        </div>
    </div>
    <script src="/script/script2.js"></script>
</body>
</html>