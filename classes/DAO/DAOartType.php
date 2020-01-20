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
}