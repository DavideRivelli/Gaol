<?php
// Inizializza la sessione
session_start();

// Dizionario associativo per memorizzare i nomi utenti con la password corretta
$valid_users = [
    "Giocatore_1" => "Gaol241",
    "Giocatore_2" => "Gaol242",
    "Giocatore_3" => "Gaol243",
    "Giocatore_4" => "Gaol244"
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ottieni i valori inseriti dall'utente
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Verifica se l'utente è valido
    if (array_key_exists($username, $valid_users) && $valid_users[$username] === $password) {
        // Imposta l'ID utente nella sessione
        $_SESSION['user_logged_in'] = true;
        $_SESSION['user_id']=$username; //salva l'username dell'utente che ha effettuato l'accesso
        

        // Reindirizza l'utente alla pagina del Menu di Gioco
        header("Location: menu.php");
        exit;
    } else {
        // Messaggio di errore per credenziali non valide
        $error_message = "Credenziali non valide. Riprova.";
        header("Location: index.html");
    }
}
?>