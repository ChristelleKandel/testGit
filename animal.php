<?php 

class Animal
{
   public $ID;
   public $Nom;
   public $Age;

   function __construct($id, $nom,$age)
   {
        //dès qu'un new est fait on rentre ici automatiquement
        $this->ID = $id;
        $this->Nom = $nom;
        $this->Age = $age;
   }

   function Informations()
   {
       return "<td>".$this->ID. "</td><td> ".$this->Nom. "</td><td> ".$this->Age. " </td>";
   }

}
?>