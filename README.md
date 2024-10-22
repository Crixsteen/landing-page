# Landing Page - Telefono di Ascolto

Benvenuto nella landing page per il servizio **Telefono di Ascolto**, un servizio gratuito di supporto emotivo. Questa pagina è stata creata per offrire un punto di contatto a chiunque abbia bisogno di parlare con qualcuno e ricevere supporto emotivo in modo sicuro e confidenziale.

## Funzionalità

Questa landing page include le seguenti funzionalità:

- **Supporto emotivo gratuito** tramite chiamate e videochiamate.
- **Form di contatto** per inviare richieste o parlare con un operatore.
- **Integrazione con WhatsApp** per un supporto rapido e immediato.
- **Pulsante per donazioni** tramite PayPal per sostenere il servizio.
- **Sezione FAQ** per rispondere alle domande frequenti degli utenti.
- **Informazioni legali e privacy**, per garantire trasparenza agli utenti.

## Tecnologie Utilizzate

- **HTML5**: Struttura della pagina e contenuti.
- **CSS3**: Stili e layout della pagina.
- **JavaScript**: Funzionalità interattive della pagina.
- **PHPMailer**: Per gestire l'invio di email tramite form.
- **PayPal Integration**: Implementazione di un pulsante per le donazioni online.

## Come Avviare il Progetto

### Requisiti:
- Un ambiente di sviluppo locale come [XAMPP](https://www.apachefriends.org/it/index.html) o [WAMP](http://www.wampserver.com/).
- Un browser web (Chrome, Firefox, ecc.).

### Istruzioni:
1. Clona questo repository sul tuo computer:

    ```bash
    git clone https://github.com/Crixsteen/landing-page.git
    ```

2. Sposta la cartella del progetto nella directory del tuo server locale (per esempio in **htdocs** se stai usando XAMPP).

3. Avvia il server locale (Apache) e apri il browser, accedendo alla pagina:

    ```bash
    http://localhost/landing-page/index.html
    ```

4. Verifica che la pagina sia correttamente visibile e funzionante.

## Configurazione delle Email

Il progetto utilizza **PHPMailer** per inviare email dal form di contatto. Per configurarlo:

1. Vai al file `send_email.php`.
2. Sostituisci i parametri con i tuoi dati SMTP (ad esempio, se stai usando Gmail, inserisci i dati SMTP di Gmail).
   
   ```php
   $mail->Host = 'smtp.example.com'; // Il server SMTP
   $mail->Username = 'tuo_email@example.com'; // La tua email
   $mail->Password = 'la_tua_password'; // La tua password
