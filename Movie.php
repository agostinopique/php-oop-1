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
    

    // SETTER
    public function setName($_new_name){
        $this->name = $_new_name;
    }
    public function setDirector($_new_director){
        $this->director = $_new_director;
    }
    public function setProducer($_new_producer){
        $this->producer = $_new_producer;
    }
    public function setActor($_new_mainActor){
        $this->main_actor = $_new_mainActor;
    }
    // /SETTER

    // GETTER
    public function getName(){
        return $this->name;
    }
    
    
    public function getAllInfo(){
        $infoArr = [];
        $infoArr["Direttore"] = $this->director;
        $infoArr["Produttore"] = $this->producer; 
        $infoArr["Attore Principale"] = $this->main_actor;
        return $infoArr;
    }
    // /GETTER

}




?>