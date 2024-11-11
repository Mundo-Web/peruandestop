<?php

namespace App\Jobs;

use App\Helpers\EmailConfig;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class AgencyJob implements ShouldQueue
{
  use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

  private mixed $data;
  private mixed $attachtment;

  public function __construct(mixed $data, mixed $attachtment)
  {
    $this->data = $data;
    $this->attachtment = $attachtment;
  }

  public function handle()
  {
    $data = $this->data;
    $attachtment = $this->attachtment;

    $name = $data['nombre_agencia'];
    $ruc  = $data['ruc'];
    $no_registro = $data['no_registro'];
    $direccion = $data['direccion'];
    $telefono = $data['telefono'];
    $email = $data['email'];
    $pagina_web = $data['pagina_web'];
    $nombre_representante = $data['nombre_representante'];
    $identificacion_representante = $data['identificacion_representante'];
    $telefono_representante = $data['telefono_representante'];
    $email_representante = $data['email_representante'];
    $tipo_agencia = $data['tipo_agencia'];

    $mail = EmailConfig::config();
    try {
      $mail->addAddress($data['email']); // correo del administrador 
      $mail->Body = "Buenas tardes un cliente se ha puesto en contacto via correo <br>
      RUC: $ruc <br>
      N REGISTRO : $no_registro <br>
      DIRECCION: $direccion <br>
      TELEFONO: $telefono <br>
      EMAIL: $email <br>
      PAGINA WEB: $pagina_web <br>
      NOMBRE REPRESENTANTE: $nombre_representante <br>
      N IDENTIFICACION REPRESENTANTE: $identificacion_representante <br>
      N TELEFONO REPRESENTANTE: $telefono_representante <br>
      EMAIL REPRESENTANTE: $email_representante <br>
      TIPO AGENCIA REPRESENTANTE: $tipo_agencia <br>
      ";
      $mail->isHTML(true);
      if (file_exists($attachtment)) {
        $mail->addAttachment($attachtment);
      }
      $mail->send();
    } catch (\Throwable $th) {
      //throw $th;
    }
  }
}
