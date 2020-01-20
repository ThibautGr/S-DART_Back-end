<?php


namespace domain;


class Market
{
    public $idVente;
    public $idUser;
    public $idProduct;
    public $price;
    public $description;
    public $matiereSupport;
    public $quantityAvailable;
    public $idCountry;

    public function __construct(
                                    $idVente,
                                    $idUser,
                                    $idProduct,
                                    $price,
                                    $description,
                                    $matiereSupport,
                                    $quantityAvailable,
                                    $idCountry
                                 )
    {
        $this->idVente= $idVente;
        $this->idUser = $idUser;
        $this->idProduct = $idProduct;
        $this->price =$price;
        $this->description =$description;
        $this->matiereSupport =$matiereSupport;
        $this->quantityAvailable =$quantityAvailable;
        $this->idCountry =$idCountry;
    }

}

/*
  idVente
  idUser
  idProduct
  price
  description
  matiereSupport
  quantityAvailable
  idCountry
 * */