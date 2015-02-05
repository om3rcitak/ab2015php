<?php

class hayvan{

    public function nefesAl(){
        echo "ben enfes alıyorum <br />";
    }

    public function yemekYe(){
        echo "ben yemek yiyorum <br />";
    }

    public function uyu(){
        echo "ben uyuyorum <br />";
    }

}

class kedi extends hayvan{

    private $adi;

    function __construct($gelenad){
        $this->adi = $gelenad;
        echo "ben $this->adi isminde bir kediyim ve doğdum <br />";
    }

    public function kos(){
        echo "ben koşuyorum çünkü kediyim <br />";
    }

    function __destruct(){
        echo "ben $this->adi ismindeki kediydim öldüm <br />";
    }

}

class kus extends hayvan{

    private $adi;

    function __construct($gelenad){
        $this->adi = $gelenad;
        echo "ben $this->adi isminde bir kuşum ve doğdum <br />";
    }

    public function uc(){
        echo "ben uçabiliyorum çünkü kuşum <br />";
    }

    function __destruct(){
        echo "ben $this->adi ismindeki kuştum öldüm <br />";
    }

}

$benimkedim = new kedi("tekir");
$benimkedim->yemekYe(); // hayvan class'ı miras alındığından hayvan classının methodu kullanılabilir.
$benimkedim->kos(); // kendi class'ında bir methodu kullandı
// $benimkedim->uc(); // hata! kuşa ait olan bir methodu kullandı

$benimkusum = new kus("boncuk");
$benimkusum->yemekYe(); // hayvan class'ı miras alındığından hayvan classının methodu kullanılabilir.
$benimkusum->uc(); // kendi class'ında bir methodu kullandı
// $benimkusum->kos(); // hata! kediye ait olan bir methodu kullandı