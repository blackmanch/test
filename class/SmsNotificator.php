<?php
require_once 'interface/SmsNotificatorInterface.php';

class SmsNotificator implements SmsNotificatorInterface
{
    public function __constructor($config = []){

    }

    /**
     * @param $phone
     * @param $text
     */
    public function sendSms($phone, $text){
        echo $phone . ' - '.$text."\r\n";
    }
}
