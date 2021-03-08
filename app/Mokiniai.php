<?php

namespace KlaseApp;
use KlaseApp\Klase;
class Mokiniai extends Klase
{
    public $vardas;
    public $pavarde;
    public static $grupe = '5B';

    public function __construct($vardas, $pavarde, $email)
    {
        parent::__construct($email);
        $this->vardas = $vardas;
        $this->pavarde = $pavarde;
    }

    public static function setGrupe()
    {
        return self::$grupe;
    }

    public function showIvertinimai()
    {
        $ivertinimai = array(5, 9, 10);
        $vidurkis = array_sum($ivertinimai) / count($ivertinimai);
        return $vidurkis;
    }

    public function showData()
    {
        return $data = date("Y-m-d H:i:s");
    }

    public function randomNumb()
    {
       return $randomNumb = rand(1000,5000);
    }

    public function setDuomenys()
    {
        return [
            $this->vardas,
            $this->pavarde,
            $this->email
        ];
    }
}