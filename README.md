# JMail
Micro library to send email notifications using different platforms like Mailgun, MailJet and others.

## Example with Mailgun
    require_once (__DIR__."/../vendor/autoload.php");

    use Jumichica\JMail;

    $jmail= new JMail();
    $jmail->credentials('[PRIVATE_API_KEY]', '[DOMAIN]', '[SENDER]',JMail::$MAILGUN,'[NAME_SENDER]');
    $jmail->send('[EMAIL_TO]','Hello World!','My firts Email HTML','My first mail TEXT');

## Example with MailJet
    require_once (__DIR__."/../vendor/autoload.php");

    use Jumichica\JMail;

    $jmail= new JMail();
    // Mensaje con MailJet
    $jmail->credentials(array('[API_KEY]','[SECRET_API_KEY]'), '[DOMAIN]', '[SENDER]',JMail::$MAILJET,'[NAME_SENDER]');
    $jmail->send('[EMAIL_TO]','Hello World!','My firts Email HTML','My first mail TEXT');

## Example with PHPMailer
    require_once (__DIR__."/../vendor/autoload.php");

    use Jumichica\JMail;

    $jmail= new JMail();
    // Mensaje con PHPMailer
    $jmail->credentials_mailer('[EMAIL_FROM]', '[EMAIL_FROM_PASSWORD]', '[NAME]', 'NAME_TO', 'SMTP SERVER');
    $jmail->send('[EMAIL_TO]','Hello World!','My firts Email HTML','My first mail TEXT');
    
    // If you need to set a opened action when the people read the email then use:
    $jmail->send('[EMAIL_TO]','Hello World!','My firts Email HTML','My first mail TEXT', "", "[URL_LINK_TO_YOUR_SCRIPT_PHP]");

# DEBUG activation
The last parameter con credentials method lect activate the debug, if you want. Let me show you a example:

    // DEBUG False
    $jmail->credentials_mailer('[EMAIL_FROM]', '[EMAIL_FROM_PASSWORD]', '[NAME]', 'NAME_TO', 'SMTP SERVER');

    // DEBUG true
    $jmail->credentials_mailer('[EMAIL_FROM]', '[EMAIL_FROM_PASSWORD]', '[NAME]', 'NAME_TO', 'SMTP SERVER', true);

## Contributors
Edwin Ariza <me@edwinariza.com>
