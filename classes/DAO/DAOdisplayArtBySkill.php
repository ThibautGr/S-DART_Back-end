<?php


namespace DAO;
use DAO\DAObase;
use domain\art;

class DAOdisplayArtBySkill extends DAObase
{
    public function __construct($config)
    {
        parent::__construct($config);
    }

    public function getArtGraphic(){
        $artsGraph =[];
        $req = $this->bdd->query("SELECT `idArt`,`idTypeArt`,`title`,`description`,`linkImg`,`idUser`,`createdAt` FROM `art` WHERE `idTypeArt` = 1 ");
        while ($data = $req ->fetch()){
            $art = new Art(
                $data["idArt"],
                $data["idTypeArt"],
                $data["title"],
                $data["description"],
                $data["linkImg"],
                $data["idUser"],
                $data["createdAt"]
            );
            $artsGraph[]= $art;
        }
        $req->closeCursor();
        return $artsGraph;
    }
}