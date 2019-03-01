<?php
require_once 'class/User.php';
interface NotificationServiceInterface
{
    public function notify(User $user, $text);
}
