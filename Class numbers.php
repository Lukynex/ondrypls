<?php

class numbers {

    static public function roundOndracek($zaokrouhli) {
        return round($zaokrouhli);
    }

    static public function ceilOndracek($zaokrouhlinahoru) {
        return ceil($zaokrouhlinahoru);
    }

    static public function floorOndracek($zaokrouhlidolu) {
        return floor($zaokrouhlidolu);
    }

    static public function sqrtOndracek($druhaodmocnina) {
        return sqrt($druhaodmocnina);
    }

    static public function powOndracek($mocnina, $mocnitel) {
        return pow($mocnina, $mocnitel);
    }

    static public function sinOndracek($uhel) {
        return sin($uhel);
    }

    static public function cosOndracek($uhel) {
        return cos($uhel);
    }

    static public function tanOndracek($uhel) {
        return tan($uhel);
    }

    static public function asinOndracek($zcislanauhel) {
        return asin($zcislanauhel);
    }

    static public function acosOndracek($zcislanauhel) {
        return acos($zcislanauhel);
    }

    static public function atanOndracek($zcislanauhel) {
        return atan($zcislanauhel);
    }

    static public function fmodOndracek($zaklad, $delitel) {
        return fmod($zaklad, $delitel);
    }

    static public function maxOndracek($pole) {
        return max($pole);
    }

    static public function minOndracek($pole) {
        return min($pole);
    }

    static public function absOndracek($abscislo) {
        return abs($abscislo);
    }

    static public function odecitaniOndracek($a, $b) {
        return $a - $b;
    }

    static public function scitaniOndracek($a, $b) {
        return $a + $b;
    }

    static public function deleniOndracek($a, $b) {
        return $a / $b;
    }

    static public function nasobeniOndracek($a, $b) {
        return $a * $b;
    }

    static public function number_formatOndracek($formatuje) {
        return number_format($formatuje);
    }

}

$zaokrouhli = 38.83;
$zaokrouhlinahoru = 38.83;
$zaokrouhlidolu = 38.83;
$druhaodmocnina = 16;
$mocnina = 9;
$mocnitel = 3;
$uhel = 90;
$zcislanauhel = 50;
$zaklad = 20;
$delitel = 5;
$pole = array('1', '2', '3', '4', '5', '12', '16', '25', '69');
$abscislo = 57.12;
$a = 8;
$b = 2;
$formatuje = 10;
