<?php

/*
 * fonksiyon oluşturma;
 * function fonsiyonAdi($parametreler){
 *  yapılacak işlemler;
 * }
 *
 * aşağıda kendisine gelen 2 sayısı toplayan fonsksiyonu yazalım
 */

function topla($sayi1, $sayi2){
    $sonuc = $sayi1 + $sayi2;
    return $sonuc;
}

/*
 * yukarıda kendisine gelen 2 parametreyi toplayıp, sonuç değişkenine aktaran ve sonuç değişkenini return eden fonsktionu yazdık.
 *
 * topla(5,3); tarzında fonksiyonumuzu çağırdığımız vakit içeriğinde bize 8 değerini return edecektir
 *
 */

$toplama_isleminin_sonucu = topla(8,5);

echo $toplama_isleminin_sonucu;

