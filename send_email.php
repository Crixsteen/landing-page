<?php
// Includi PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

// Controlla se il modulo è stato inviato
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Dati provenienti dal modulo
    $name = $_POST['name'];
    $email = $_POST['email'];
    $description = $_POST['description'];
    $contact_option = $_POST['contact_option'];

    // Crea una nuova istanza di PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configurazione del server SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.libero.it'; 
        $mail->SMTPAuth = true;
        $mail->Username = 'telefonoascolto.info@libero.it'; // Il tuo indirizzo email
        $mail->Password = 'Frrcst82@'; // La tua password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Mittente e destinatario
        $mail->setFrom('telefonoascolto.info@libero.it', 'Telefono di Ascolto'); // Il mittente dell'email
        $mail->addAddress('criferrara82@gmail.com');  // Il tuo indirizzo email per ricevere la richiesta

        // Impostazioni del contenuto
        $mail->isHTML(true);  // Abilita HTML nell'email
        $mail->Subject = 'Nuova richiesta di contatto da Telefono di Ascolto';

        // Imposta il corpo dell'email con i dati del modulo
        $mail->Body = "
            <h2>Nuova richiesta da Telefono di Ascolto</h2>
            <p><strong>Nome:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Descrizione:</strong> {$description}</p>
            <p><strong>Opzione di contatto:</strong> {$contact_option}</p>
        ";

        // Invio del messaggio
        if($mail->send()) {
            echo 'Email inviata con successo';
        } else {
            echo 'Errore nell\'invio dell\'email: ' . $mail->ErrorInfo;
        }

    } catch (Exception $e) {
        echo "Errore nell'invio dell'email: {$mail->ErrorInfo}";
    }
}
?>



