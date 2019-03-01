<?php
interface SmsNotificatorInterface
{
    public function sendSms($phone, $text);
}