<?php
 $instance = new Ondráček;
class Ondráček { //definice class Ondráček
    public $chalky1 = 10; //definice typu funkce
    public $chalky2 = 3;
    public $chalky3 = 50;
    public $chalky4 = 11;
    public $chalky5 = 29 ;
    protected $chalky6 = 26; //definice chráněné funkce
    protected $chalky7 = 31; 
    protected $chalky8 = 36;
    private $chalky9 = 189; //definice privátní funkce
    private $chalky10 = 65;

    public function getchalky1 () { //definice veřejné funkce
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
var_dump ($instance); //vypíše hodnoty
$cisla = new Ondráček();
$cisla-> getchalky1('10');
echo $cisla-> getchalky1(); //vypíše hodnotu getchalky1
echo '<br>'; 
$cisla-> getchalky2('3');
echo $cisla-> getchalky2();
echo '<br>';
$cisla-> getchalky3('50');
echo $cisla-> getchalky3();
echo '<br>';
$cisla-> getchalky4('11');
echo $cisla-> getchalky4();
echo '<br>';
$cisla-> getchalky5('29');
echo $cisla-> getchalky5();
?>;