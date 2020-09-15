<?php

class stringOndracek {
    
    static public function substrOndracek($stringKterýmNahrazuji, $stringKterýNahrazuji) {
        return substr($stringKterýmNahrazuji, $stringKterýNahrazuji);
    }


    static public function substr__replaceOndracek($stringKterýmNahrazuji1, $stringKterýNahrazuji1, $začátečníBit) {
        return substr_replace($stringKterýmNahrazuji1, $stringKterýNahrazuji1, $začátečníBit);
    }

    static public function strtrOndracek($věta, $slovoKterýNahrazuji, $slovoKterýmNahrazuji) {
        return strtr($věta, $slovoKterýNahrazuji, $slovoKterýmNahrazuji);
    }

    static public function strtoupperOndracek($velkéPísmeno) {
        return strtoupper($velkéPísmeno);
    }

    static public function strtolowerOndracek($maléPísmeno) {
        return strtolower($maléPísmeno);
    }

    static public function strrposOndracek($odkudhledam, $cohledam) {
        return strrpos($odkudhledam, $cohledam);
    }

    static public function strriposOndracek($odkudhledam, $presnecohledam) {
        return strripos($odkudhledam, $presnecohledam);
    }

    static public function strposOndracek($odkudhledam, $cohledam) {
        return strpos($odkudhledam, $cohledam);
    }

    static public function strlenOndracek($délkaŘetězce) {
        return strlen($délkaŘetězce);
    }

    static public function strchrOndracek($odkudhledam, $cohledam) {
        return strchr($odkudhledam, $cohledam);
    }

    static public function str_replaceOndracek($Samohlásky, $Rozmezí, $veVětě) {
        return str_replace($Samohlásky, $Rozmezí, $veVětě);
    }

    static public function md5Ondracek($Zpráva) {
        return md5($Zpráva);
    }

    static public function implodeOndracek($Co, $Kam) {
        return implode($Co, $Kam);
    }

    static public function explodeOndracek($hranice, $Věta2) {
        return explode($hranice, $Věta2);
    }

    static public function addcslashesOndracek($vtomhleretezci, $rozmezi) {
        return addcslashes($vtomhleretezci, $rozmezi);
    }

    static public function addslashOndracek($Věta2) {
        return addslashes($Věta2);
    }

    static public function trimPOndracek($odsud, $vynechKusŘetězce) {
        return trim($odsud, $vynechKusŘetězce);
    }

    static public function ucfirstOndracek($Věta) {
        return ucfirst($Věta);
    }

    static public function ucwordsOndracek($Věta) {
        return ucwords($Věta);
    }

}

$stringKterýmNahrazuji = "kockopes";
$stringKterýNahrazuji = 2;
$stringKterýmNahrazuji1 = "pes";
$stringKterýNahrazuji1 = "kocka";
$začátečníBit = 0;
$Věta = "kocka mi snedla susenku";
$slovoKterýNahrazuji = "Kocka";
$slovoKterýmNahrazuji = "Opice";
$velkéPísmeno = "abcdefghijklmnopqrstuvwxyz";
$maléPísmeno = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$odkudhledam = "fs56jhggj7OTGZVd";
$cohledam = "j7O";
$presnecohledam = "ggj7OTG";
$délkaŘetězce = "Cego jsem tu";
$Samohlásky = array('a', 'e', 'i', 'o', 'u', 'y');
$Rozmezí = "";
$veVětě = "Mam rad rizek";
$Zpráva = "spenat";
$co = "_";
$kam = array('pes', 'kocka', 'medved');
$hranice = '""';
$Věta2 = "pes kocka medved";
$vtomhleretezci = "Mam rad rizek";
$rozmezi = 'A..z';
$odsud = "\b\bMam rad rizek\b\b";
$vynechKusŘetězce = "\b";

var_dump(stringOndracek::substrOndracek($stringKterýmNahrazuji, $stringKterýNahrazuji));
var_dump(stringOndracek::substr__replaceOndracek($stringKterýmNahrazuji1, $stringKterýNahrazuji1, $začátečníBit));
var_dump(stringOndracek::strtrOndracek($Věta, $slovoKterýNahrazuji, $slovoKterýmNahrazuji));
var_dump(stringOndracek::strtoupperOndracek($velkéPísmeno));
var_dump(stringOndracek::strtolowerOndracek($maléPísmeno));
var_dump(stringOndracek::strrposOndracek($odkudhledam, $cohledam));
var_dump(stringOndracek::strriposOndracek($odkudhledam, $presnecohledam));
var_dump(stringOndracek::strposOndracek($odkudhledam, $cohledam));
var_dump(stringOndracek::strlenOndracek($délkaŘetězce));
var_dump(stringOndracek::strchrOndracek($odkudhledam, $cohledam));
var_dump(stringOndracek::str_replaceOndracek($Samohlásky, $Rozmezí, $veVětě));
var_dump(stringOndracek::md5Ondracek($Zpráva));
var_dump(stringOndracek::implodeOndracek($co, $kam));
var_dump(stringOndracek::explodeOndracek($hranice, $Věta2));
var_dump(stringOndracek::addcslashesOndracek($vtomhleretezci, $rozmezi));
var_dump(stringOndracek::addslashOndracek($Věta2));
var_dump(stringOndracek::trimPOndracek($odsud, $vynechKusŘetězce));
var_dump(stringOndracek::ucfirstOndracek($Věta));
var_dump(stringOndracek::ucwordsOndracek($Věta));
