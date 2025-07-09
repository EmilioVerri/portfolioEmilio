<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Funzione per prevenire header injection nei campi email/nome
    function sanitize_header($str) {
        return trim(str_replace(array("\r", "\n", "%0a", "%0d"), '', $str));
    }

    // Pulizia input e prevenzione XSS
    $nome = htmlspecialchars(trim($_POST["nome"] ?? ''), ENT_QUOTES, 'UTF-8');
    $cognome = htmlspecialchars(trim($_POST["cognome"] ?? ''), ENT_QUOTES, 'UTF-8');
    $email_raw = trim($_POST["email"] ?? '');
    $messaggio = htmlspecialchars(trim($_POST["messaggio"] ?? ''), ENT_QUOTES, 'UTF-8');

    // Validazione email
    if (!filter_var($email_raw, FILTER_VALIDATE_EMAIL)) {
        echo "Email non valida.";
        exit;
    }
    // Sanitizzazione header email
    $email = sanitize_header($email_raw);

    // Validazione minima dei campi (puoi estendere se vuoi)
    if (empty($nome) || empty($cognome) || empty($messaggio)) {
        echo "Compila tutti i campi richiesti.";
        exit;
    }

    // Email destinatario - modifica con la tua reale email
    $to = "tuaemail@example.com";

    $subject = "Nuovo messaggio dal sito portfolio";

    // Corpo email - qui puoi migliorare il formato (es. usare HTML mail)
    $body = "Hai ricevuto un nuovo messaggio:\n\n"
          . "Nome: $nome\n"
          . "Cognome: $cognome\n"
          . "Email: $email\n\n"
          . "Messaggio:\n$messaggio";

    // Header email - FROM pulito per evitare header injection
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Invio email con controllo esito
    if (mail($to, $subject, $body, $headers)) {
        echo "Messaggio inviato con successo!";
    } else {
        echo "Errore nell'invio. Riprova più tardi.";
    }
} else {
    // Blocca richieste non POST
    http_response_code(405);
    echo "Metodo non consentito.";
}
?>
