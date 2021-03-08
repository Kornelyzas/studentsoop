<?php

namespace KlaseApp;
class Klase
{
    public $email;

    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function setDuomenys()
    {
        return [
            $this->email
        ];
    }
}