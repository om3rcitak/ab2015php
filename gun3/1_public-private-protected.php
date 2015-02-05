<?php

/*
 * public -> her yerden ulaşılabilen
 * private -> sadece oluşturulduğu class içinde çağrılabilen
 * protected -> sadece oluşturuldu ve miras alınan classlarda çağrılabilen
 */

class ogrenci{

    private $adi = "omer";
    private $numarasi = "21";
    private $sifresi = "123456";

    /*
     * class içerisindeki private değişkenlere dışardan erişmek için, class içinde public olarak private değişkeni okuyan bir metod yazıyoruz. bu yönetim adı kapsülleme (encapsulation) dir.
     */

    public function adOku(){
        echo $this->adi;
    }

}

$benim_ogrencim = new ogrenci;

echo $benim_ogrencim->adOku(); // omer
echo $benim_ogrencim->adi; // hata, private değişkene dışardan ulaşamazsınız.
