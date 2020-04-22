<?php
namespace Systemico;

require_once dirname(__FILE__).'/../vendor/autoload.php';
use Mailgun\Mailgun;

/**
 * Clase encargada del envió masivo de correos.
 */


class JMail{
    private $api_key;
    private $domain;
    private $sender;
    private $service;
    private $name;
    public static $MAILGUN='MAILGUN';
  /**
   * Permite la definición de credenciales requeridas para la operación del la librería.
   * @param $api Key del servicio a utilizar
   * @param $domain Dominio al que está vinculada la petición.
   * @param $sender Información de quien remite el correo, y que aparecerá como remisor.
   * @param $service --> Tipo de servicio a utilizar JMail::$MAILGUN
   * @param $name Nombre de la cuenta que remite el correo.
   */
    public function credentials($api_key, $domain, $sender, $service, $name=""){
      $this->api_key=$api_key;
      $this->domain=$domain;
      $this->sender=$sender;
      $this->service=$service;
      $this->name=$name;
    }
  /**
   * @param $email_to Destinatario del mensaje.
   * @param $subject  Asunto del mensaje
   * @param $content Contenido del mensaje
   * @param string $altbody Mensaje altbody, aparece en el preview del mensaje
   * @param string $name Nombre del remitente en caso que se quiera personalizar como Carlos Ariza <carlos.ariza@systemico.co>
   * @param string $tag Etiqueta para marcar el correo.
   * @throws ErrorException
   * @throws \Mailgun\Messages\Exceptions\MissingRequiredMIMEParameters
   */
    public function send($email_to,$subject,$content,$altbody="", $tag=""){
      $mg = Mailgun::create($this->api_key);
      $domain = $this->domain;
      $params = array(
        'from'    => $this->name.' <'.$this->sender.'>',
        'to'      => $email_to,
        'subject' => $subject,
        'text'    => $altbody,
        'html'    => $content
      );
      $mg->messages()->send($domain, $params);
    }
}
?>
