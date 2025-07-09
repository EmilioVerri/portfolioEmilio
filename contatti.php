<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    function sanitize_header($str) {
        return trim(str_replace(array("\r", "\n", "%0a", "%0d"), '', $str));
    }


    $nome = htmlspecialchars(trim($_POST["nome"] ?? ''), ENT_QUOTES, 'UTF-8');
    $cognome = htmlspecialchars(trim($_POST["cognome"] ?? ''), ENT_QUOTES, 'UTF-8');
    $email_raw = trim($_POST["email"] ?? '');
    $messaggio = htmlspecialchars(trim($_POST["messaggio"] ?? ''), ENT_QUOTES, 'UTF-8');


    if (!filter_var($email_raw, FILTER_VALIDATE_EMAIL)) {
        echo "Email non valida.";
        exit;
    }

    $email = sanitize_header($email_raw);


    if (empty($nome) || empty($cognome) || empty($messaggio)) {
        echo "Compila tutti i campi richiesti.";
        exit;
    }


    $to = "emilioverri83@gmail.com";

    $subject = "Nuovo messaggio dal sito portfolio";


    $body = "Hai ricevuto un nuovo messaggio:\n\n"
          . "Nome: $nome\n"
          . "Cognome: $cognome\n"
          . "Email: $email\n\n"
          . "Messaggio:\n$messaggio";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";


    if (mail($to, $subject, $body, $headers)) {
        echo "Messaggio inviato con successo!";
    } else {
        echo "Errore nell'invio. Riprova più tardi.";
    }
} else {

    http_response_code(405);
    echo "Metodo non consentito.";
}
?>
