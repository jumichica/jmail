<?php
/**
 * Example with Mailgun
 * @author Edwin Ariza <edwin.ariza@systemico.co>
 */
require_once (__DIR__."/../vendor/autoload.php");

use Systemico\JMail;

$jmail= new JMail();
$jmail->credentials('[PRIVATE_API_KEY]', '[DOMAIN]', '[SENDER]',JMail::$MAILGUN,'[NAME_SENDER]');
$jmail->send('[EMAIL_TO]','Hello World!','My firts Email HTML','My first mail TEXT');
