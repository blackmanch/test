<?php

class User
{
    public $email;
    public $phone;

    /**
     * User constructor.
     * @param $email
     * @param $phone
     */
    public function __construct($email, $phone)
    {
        $this->email = $email;
        $this->phone = $phone;
    }
}
