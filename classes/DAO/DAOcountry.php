<?php


namespace DAO;
use Domain\Country;

class DAOcountry extends DAObase
{
    public function __construct($config)
    {
        parent::__construct($config);
    }
    public function getCountry(){
        $result = [];
        $country = null;
        $req = $this->bdd->query("SELECT  idCountry,name FROM country");
        while($allcountry =$req->fetch()){
                $country = new Country(
                    $allcountry["idCountry"],
                    $allcountry["name"]
                );
                $result[] = $country;
        }
        $req->closeCursor();

        return $result;
    }
}