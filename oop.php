<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//abstraktní trida ustredny a v ni protected $napetí
abstract class  ustredny_Ondracek_Lukas{

    protected $napeti_Ondracek_Lukas;
    //nastavení napeti
    public function setNapeti_Ondracek_Lukas($napeti_Ondracek_Lukas){
        $this->napeti_Ondracek_Lukas = $napeti_Ondracek_Lukas;
    }
    //precteni napeti
    public function getNapeti_Ondracek_Lukas() {
        return $this-> napeti_Ondracek_Lukas;
    }
}
// class ustredna se dedi do abs. class ustredny
class  ustredna_Ondracek_Lukas extends ustredny_Ondracek_Lukas{
   public $Napeti_Ondracek_Lukas= 15;
   //nastaveni konstanty type
   const TYPE ="12";
}
//class iustredna dedi interface od abs. class ustredny
interface iustredna_Ondracek_Lukas extends ustredny_Ondracek_Lukas{
    //vypise nastavene hodnoty
    public function _contruct ($Napeti_Ondracek_Lukas);
}

//pres vardummp vypise hodnotu v type a hodnotu napeti na ustredne
 var_dump (ustredna_Ondracek_Lukas::TYPE);
 var_dump ($Napeti_Ondracek_Lukas);
?>