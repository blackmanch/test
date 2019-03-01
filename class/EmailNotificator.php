<?php

require_once  'interface/EmailNotificatorInterface.php';
class EmailNotificator implements EmailNotificatorInterface
{
    public function __constructor($config = []){

    }

    /**
     * @param $email
     * @param $text
     */
    public function sendEmail($email, $text){
        echo $email . ' - '.$text."\r\n";
    }
}
