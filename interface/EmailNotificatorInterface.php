<?php
interface EmailNotificatorInterface
{
    public function sendEmail($email, $text);
}