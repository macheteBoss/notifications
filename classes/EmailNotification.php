<?php

include_once 'AbstractNotification.php';

class EmailNotification extends AbstractNotification
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
                $arr[] = $user->getEmail();
            }

            $emails = implode(', ', $arr);
        } else {
            $emails = $this->users->getEmail();
        }

        return "Сообщение: " . $this->body
            . "<br> Отправлено на Email: " . $emails;
    }
}