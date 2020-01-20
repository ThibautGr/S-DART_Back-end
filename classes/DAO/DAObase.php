<?php

namespace DAO;
class DAObase
{
    protected $bdd;
    public function __construct($config)
    {
        try {
            $this->bdd = new \PDO('mysql:host=' . $config[db . host] . ';dbname=' . $config[db . name] . ';charset=utf8', '.$config[db.username].', '.$config[db.password].');
        }
        catch (Exception $e){
            die('Erreur : '.$e->getMessage());
        }
    }
    public function close()
    {
        $this->bdd = null;
    }
}