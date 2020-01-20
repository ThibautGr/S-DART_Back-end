<?php


namespace domain;


class Art
{
    Public $idArt;
    Public $idTypeArt;
    Public $title;
    Public $description;
    Public $linkImg;
    Public $idUser;
    Public $createdAt;
    public function __construct(
                            $idArt,
                            $idTypeArt,
                            $title,
                            $description,
                            $linkImg,
                            $idUser,
                            $createdAt
                             )
    {
        $this->idArt=$idArt;
        $this->idTypeArt=$idTypeArt;
        $this->title=$title;
        $this->description=$description;
        $this->linkImg=$linkImg;
        $this->idUser=$idUser;
        $this->createdAt=$createdAt;
    }

}
/*
  idArt
  idTypeArt
  title
  description
  linkImg
  idUser
  createdAt
*/