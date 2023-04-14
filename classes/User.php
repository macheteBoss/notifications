<?php

class User
{
    private $email;
    private $phone;
    private $platform;
    private $applicationId;

    public function __construct($email, $phone, $platform, $applicationId) {
        $this->email = $email;
        $this->phone = $phone;
        $this->platform = $platform;
        $this->applicationId = $applicationId;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getPlatform() {
        return $this->platform;
    }

    public function getApplicationId() {
        return $this->applicationId;
    }
}