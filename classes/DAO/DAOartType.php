<?php


namespace DAO;
use Domain\TypeArt;

class DAOartType extends DAObase
{
    public function __construct($config)
    {
        parent::__construct($config);
    }

    public function getArtType(){
        $result = [];
        $typeArt= null ;
        $req = $this->bdd->query("SELECT idTypeArt, name FROM typeArt");
       while ($allartType = $req ->fetch()){
           $typeArt = new TypeArt(
               $allartType["idTypeArt"],
               $allartType["name"]
           );
           $result[] =$typeArt;
       }
       $req->closeCursor();

       return $result;
    }

    public function getTitlByid($id){

        $titleArt = null;
        $req = $this->bdd->prepare("SELECT idTypeArt, name FROM typeArt where idTypeArt = :id");
        $req->bindParam(":id", $id);
        if ($req->execute()){
            if($data = $req->fetch()){
            $titleArt = new TypeArt($data["idTypeArt"],
                                    $data["name"]);

            }

        }
        $req->closeCursor();
        return $titleArt;


    }

}