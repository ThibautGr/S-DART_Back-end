<?php


namespace Domain;


class job
{
    public $idJob;
    public $title;
    public $idCountry;
    public $retrubtionYear;
    public $studyLevelSkill;
    public $description;
    public $forWhen;
    public $idUser;

    public function __construct(
                                $idJob,
                                $title,
                                $idCountry,
                                $retrubtionYear,
                                $studyLevelSkill,
                                $description,
                                $forWhen,
                                $idUser
    )
    {
        $this-> idJob = $idJob;
        $this-> title = $title;
        $this-> idCountry = $idCountry;
        $this-> retrubtionYear = $retrubtionYear;
        $this-> studyLevelSkill = $studyLevelSkill;
        $this-> description = $description;
        $this-> forWhen = $forWhen;
        $this-> idUser = $idUser;
    }
}

/*

  idJob
  title
  idCountry
  retrubtionYear
  studyLevelSkill
  description
  forWhen
  idUser

 * */