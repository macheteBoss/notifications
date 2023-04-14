<?php

include_once 'AbstractNotification.php';

class PhoneNotification extends AbstractNotification
{
    protected $body;
    protected $users;

    public function __construct($users, $body)
    {
        $this->users = $users;
        $this->body = $body;
    }

    public function send() {
        if (is_array($this->users)) {
            $arr = [];
            foreach ($this->users as $user) {
                $arr[] = $user->getPhone();
            }

            $phones = implode(', ', $arr);
        } else {
            $phones = $this->users->getPhone();
        }

        return "Сообщение: " . $this->body
            . "<br> Отправлено через через смс на номера: " . $phones;
    }
}