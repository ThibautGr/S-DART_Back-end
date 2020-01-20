<?php


namespace domain;


class Accueil
{
    public $idActu;
    public $art3D;
    public $artGraphic;
    public $artDigital;
    public $idRTutorial;
    public $idJob;

    public function __construct(
                                $idActu,
                                $art3D,
                                $artGraphic,
                                $artDigital,
                                $idRTutorial,
                                $idJob
    )
    {
        $this->idActu=$idActu;
        $this->art3D=$art3D;
        $this-> artGraphic=$artGraphic;
        $this->artDigital=$artDigital;
        $this->idRTutorial=$idRTutorial;
        $this->idJob=$idJob;
    }
}

/*
  idActu
  art3D
  artGraphic
  artDigital
  idRTutorial
  idJob
 * */