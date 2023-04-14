<?php

include_once 'AbstractNotification.php';

class PushNotification extends AbstractNotification
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
                $arr[] = $user->getApplicationId() . ' [' . $user->getPlatform()->renderType() . ']';
            }

            $ids = implode(', ', $arr);
        } else {
            $ids = $this->users->getApplicationId()  . ' [' . $this->users->getPlatform()->renderType() . ']';
        }

        return "Сообщение: " . $this->body
            . "<br> Отправлено через пуш в приложения с ids: " . $ids;
    }
}