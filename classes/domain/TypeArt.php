<?php


namespace domain;


class TypeArt
{
public $idTypeArt;
public $name;

public function __construct(
                            $idTypeArt,
                            $name
                            )
{
    $this->idTypeArt=$idTypeArt;
    $this->name= $name;
}
}

/*
  idTypeArt
  name
 */