<?php

namespace Geekbrains\Application1\Models;

class Phone {

    private string $phone;

    public function __construct()
    {
        $this->phone = '+73256789034';
    }

    public function getPhone() {
        return $this->phone;
    }
}