<?php
require_once 'interface/NotificationServiceInterface.php';
require_once 'User.php';
class NotificationService //implements NotificationServiceInterface
{
    /** @var EmailNotificatorInterface $emailNotificator */
    private $emailNotificator;
    /** @var SmsNotificatorInterface $smsNotificator */
    private $smsNotificator;

    /**
     * NotificationService constructor.
     * @param EmailNotificatorInterface $emailNotificator
     * @param SmsNotificatorInterface $smsNotificator
     */
    public function __construct(EmailNotificatorInterface $emailNotificator, SmsNotificatorInterface $smsNotificator)
    {
        $this->emailNotificator = $emailNotificator;

        $this->smsNotificator = $smsNotificator;
    }

    /**
     * @param User $user
     * @param $text
     */
    public function notify(User $user, $text)
    {
        $this->emailNotificator->sendEmail($user->email, $text);
        $this->smsNotificator->sendSms($user->phone, $text);
    }
}
