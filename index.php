<?php
require_once 'class/NotificationService.php';
require_once 'class/EmailNotificator.php';
require_once 'class/SmsNotificator.php';
require_once 'DI.php';
$users = [new User('test@test.ru', '+70989995566')];
$di = new DI();
$di->email = function (){
  return new EmailNotificator();
};
$di->sms = function (){
    return new SmsNotificator();
};
$service = new NotificationService($di->email, $di->sms);
$text = 'Какой-то текст';

foreach ($users as $user)
    $service->notify($user, $text);
