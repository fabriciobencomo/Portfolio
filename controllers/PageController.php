<?php

namespace Controllers;

use MVC\Router;
use PHPMailer\PHPMailer\PHPMailer;

class PageController{

    public static function index(Router $router){
        $mensaje = null;

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $respuestas = $_POST['contacto'];

            //Configuracion SMTP
            $phpmailer = new PHPMailer();
            $phpmailer->isSMTP();
            $phpmailer->Host = 'smtp.mailtrap.io';
            $phpmailer->SMTPAuth = true;
            $phpmailer->Port = 2525;
            $phpmailer->Username = '8f5c775988f8c5';
            $phpmailer->Password = 'bcb7ee6b72fb9e';
            $phpmailer->SMTPSecure = 'tls';

            //configuracion de los mails
            $phpmailer->setFrom('portfoliofabriciobencomo@gmail.com');
            $phpmailer->addAddress('fabriciobencomo.viloria@gmail.com', 'fabriciobencomo.com');
            $phpmailer->Subject = 'Tienes un Mensaje Nuevo';

            //Habilitar html
            $phpmailer->isHTML(true);
            $phpmailer->CharSet = 'UTF-8';

            $contenido = '<html>';
            $contenido .= '<p>Tienes un mensaje Nuevo </p>'  ;
            $contenido .= '<p>Nombre: ' .$respuestas['name'] . '</p>'  ;
            $contenido .= '<p>email: ' .$respuestas['mail'] . '</p>'  ;

            if($respuestas['message']){
                $contenido .= '<p>Datos Adicionales: ' .$respuestas['message'] . '</p>'  ;
            }

            $phpmailer->Body = $contenido;

            if($phpmailer->send()){
                $mensaje = "Your Message Was Submitted";
            }else{
                $mensaje = "Your Message Could not Submit";
            }


        }
        $router->render('page/index', [
            'mensaje' => $mensaje
        ]);
    }
}