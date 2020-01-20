<?php


namespace domain;


class Country
{
public $idCountry;
public $name;

public function __construct($idCountry,$name)
{
    $this->idCountry= $idCountry;
    $this->name= $name;
}
}

/*
  idCountry
  name
 * */