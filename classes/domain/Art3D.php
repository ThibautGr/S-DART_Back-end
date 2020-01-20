<?php


namespace domain;


class Art3D
{
    public $idArt3D;
    public $title;
    public $linkImg;
    public $description;
    public $idUser;
    public $createdAt;

    public function __construct(
                                $idArt3D,
                                $title,
                                $linkImg,
                                $description,
                                $idUser,
                                $createdAt
                                )
    {
       $this-> idArt3D = $idArt3D;
       $this->title = $title;
       $this->linkImg = $linkImg;
       $this->description = $description;
       $this->idUser = $idUser;
       $this->createdAt = $createdAt;
    }
}
/*
  idArt3D
  title
  linkImg
  description
  idUser
  createdAt
);

 */