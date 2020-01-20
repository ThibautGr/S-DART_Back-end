<?php


namespace Domain;


class Tutorial
{
    public $title;
    public $description;
    public $support;
    public $idRef;
    public $idUser;

    public function __construct(
                                $title,
                                $description,
                                $support,
                                $idRef,
                                $idUser
    )
    {
        $this->title=$title;
        $this->description=$description;
        $this->support=$support;
        $this->idRef=$idRef;
        $this->idUser=$idUser;
    }

}
/*

  title
  description
 support
  idRef
  idUser
 */