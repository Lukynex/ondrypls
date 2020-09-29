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

 $instance = new Ondráček;
class Ondráček {
    public $chalky1 = 10; 
    public $chalky2 = 3;
    public $chalky3 = 50;
    public $chalky4 = 11;
    public $chalky5 = 29 ;
    protected $chalky6 = 26;
    protected $chalky7 = 31; 
    protected $chalky8 = 36;
    private $chalky9 = 189;
    private $chalky10 = 65;

    public function getchalky1 () {
       return $this-> chalky1;
    }
    public function getchalky2 () {
       return $this-> chalky2;
    }
    public function getchalky3 () {
       return $this-> chalky3;
    }
    public function getchalky4 () {
       return $this-> chalky4;
    }
    public function getchalky5 () {
       return $this-> chalky5;
    }

    private function setchalky9 () {
       return $this-> chalky9; 
    }
    private function setchalky10 () {
        return $this-> chalky10;
    }
    public function _construct () {

    }

} 
var_dump ($instance);
$chalky1 = new Ondráček();
$chalky1-> getchalky1('10');
echo $chalky1-> getchalky1();
echo '<br>';
$chalky2 = new Ondráček();
$chalky2-> getchalky2('3');
echo $chalky2-> getchalky2();
echo '<br>';
$chalky3 = new Ondráček();
$chalky3-> getchalky3('50');
echo $chalky3-> getchalky3();
echo '<br>';
$chalky4 = new Ondráček();
$chalky4-> getchalky4('11');
echo $chalky4-> getchalky4();
echo '<br>';
$chalky5 = new Ondráček();
$chalky5-> getchalky5('29');
echo $chalky5-> getchalky5();
 ?>;