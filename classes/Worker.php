<?php

class Worker
{
    static public function getResult(AbstractNotification $abstractNotification) {
        return $abstractNotification->send() . '<br><br>';
    }
}