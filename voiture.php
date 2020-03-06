<?php
class Voiture{

    public $matricule;
    public $couleur;

    function afficherMesInfo(){
        echo $this->matricule." ".$this->couleur."<br/>";
    }

} 
?>