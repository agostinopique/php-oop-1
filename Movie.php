<?php
class Movie {
    private $name;
    private $director;
    private $producer;
    private $main_actor;

    public function __construct($_name, $_director, $_producer, $_mainActor){
        $this->name = $_name;
        $this->director = $_director;
        $this->producer = $_producer;
        $this->main_actor = $_mainActor;
    }

    public function getAllInfo(){
        $infoArr = [];
        $infoArr["Direttore"] = $this->director;
        $infoArr["Produttore"] = $this->producer; 
        $infoArr["Attore Principale"] = $this->main_actor;
        return $infoArr;
    }

    public function getName(){
        return $this->name;
    }
    

}




?>