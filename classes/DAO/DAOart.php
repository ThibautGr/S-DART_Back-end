<?php


namespace DAO;
use Domain\Art;

class DAOart extends DAObase
{
    public function __construct($config)
    {
        parent::__construct($config);
    }
    public function getArtByArt($id){
        $art = null ;
        $allArt = [];
        $req = $this->bdd->prepare("SELECT idArt,idTypeArt,title,description,linkImg,idUser,createdAt FROM art WHERE idTypeArt = :idTypeArt");
        $req->bindParam(":idTypeArt", $id);
        if($req->execute()){
            while ($data = $req->fetch()) {
                $art = new Art(
                    $data["idArt"],
                    $data["idTypeArt"],
                    $data["title"],
                    $data["description"],
                    $data["linkImg"],
                    $data["idUser"],
                    $data["createdAt"]
                );
                $allArt[] = $art;
            }
        }
        $req->closeCursor();
        return $allArt;
    }
    public function getOneArtById($id){
        $art = null ;

        $req = $this->bdd->prepare("SELECT idArt,idTypeArt,title,description,linkImg,idUser,createdAt FROM art WHERE idArt = :idArt");
        $req->bindParam(":idArt", $id);
        if($req->execute()){
            while ($data = $req->fetch()) {
                $art = new Art(
                    $data["idArt"],
                    $data["idTypeArt"],
                    $data["title"],
                    $data["description"],
                    $data["linkImg"],
                    $data["idUser"],
                    $data["createdAt"]
                );
            }
        }
        $req->closeCursor();
        return $art;
    }
    public function getAllArtByArtistId($id){
        $art = null ;
        $allArt = [];
        $req = $this->bdd->prepare("SELECT idArt,idTypeArt,title,description,linkImg,idUser,createdAt FROM art WHERE idUser = :idUser");
        $req->bindParam(":idUser", $id);
        if($req->execute()){
            while ($data = $req->fetch()) {
                $art = new Art(
                    $data["idArt"],
                    $data["idTypeArt"],
                    $data["title"],
                    $data["description"],
                    $data["linkImg"],
                    $data["idUser"],
                    $data["createdAt"]
                );
                $allArt[] = $art;
            }
        }
        $req->closeCursor();
        return $allArt;
    }
}