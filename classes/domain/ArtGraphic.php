<?php


namespace domain;


class ArtGraphic
{
    public $idArtGraph;
    public $title;
    public $description;
    public $linkImg;
    public $idUser;
    public $createdAt;

    public function __construct(
                                $idArtGraph,
                                $title,
                                $description,
                                $linkImg,
                                $idUser,
                                $createdAt
                                )
    {
        $this->idArtGraph = $idArtGraph;
        $this->title=$title;
        $this->description=$description;
        $this->linkImg=$linkImg;
        $this->idUser=$idUser;
        $this->createdAt=$createdAt;
    }


}    /*
    idArtGraph
    title
    description
    linkImg
    idUser
    createdAt
     */