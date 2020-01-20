<?php


namespace Domain;


class Actuality
{
    public $idArtDigital;
    public $title;
    public $linkImg;
    public $description;
    public $idUser;
    public $createdAt;

    public function __construct(
                                $idArtDigital,
                                $title,
                                $linkImg,
                                $description,
                                $idUser,
                                $createdAt
    )
    {
        $this->idArtDigital = $idArtDigital;
        $this->title = $title;
        $this->linkImg = $linkImg;
        $this->description = $description;
        $this-> idUser = $idUser;
        $this-> createdAt = $createdAt;
    }
}
/*

 idArtDigital
 title
 linkImg
 description
 idUser
 createdAt

 * */