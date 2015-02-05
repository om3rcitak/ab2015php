<?php

/*
 * array, içinde birden fazla değer tutabilen değişken olarak tanımlarsak yanlış olmaz.
 * 2. şekil kullanımı vardır
 * 1- eski kullanım -> $degisken = array();
 * 2- modern kullanım -> $degisken = [];
 */


$dizim = []; // dizim adımda bir değişken oluşturdum ve bu değişkenin dizi olacağını belirttim.

/*
 * diziye eleman eklemenin ise en temelde 2 yöntemi vardır
 * 1- $dizim[] = "değer";
 * 2- array_push($dizim, "değer");
 */

$dizim[] = "bu 1. olarak eklediğim değer";
$dizim[] = "bu 2. olarak eklediğim değer";
$dizim[] = "bu 3. olarak eklediğim değer";

/*
 * yukarıda dizimize eleman ekledik. eklediğimiz değerlerin keyleri otomatik olarak 0'dan başlayarak kaldığı yerden artar
 * dizilerin içinde birden fazla değer olduğundan echo ile ekrana basamayız. var_dump, print_r gibi fonksiyonlar kullanmalıyız.
 */

print_r($dizim);

/*
 * eğer eklenen valueların keylerini kendimiz vermek istiyorsak diziye eleman eklerken köşeli parantez içinde belirtebiliriz.
 */

$dizim["benimkeyim"] = "keyimin değeri";


print_r($dizim);

/*
 * eğer print_r veya var_dump ile dizinin tamamını basmak istemiyorsak, sadece dizinin istediğimiz elemanına uulaşmak istiyorsak aşağıdaki gibi bir kullanım yapmalıyız.
 */

echo $dizim["benimkeyim"] . "<br />";


/*
 * bir dizideki değerleri satır satır çekmenin yolu ise foreach'tir
 */

foreach($dizim AS $dizi){
    echo $dizi . "<br />"; // döngünün ilk elemanından son elemanına kadar bir döngü misali her seferinde bi sonraki satırı basar
}

/*
 * birde dizilerde boyut dediğimiz bir kavram vardır. oda şöyle ki; diziye yeni ekleyeceğiniz yeni elemanın değeri bir dizi olursa, dizinizin boyutu artmış olur.
 */

$yenidizim = []; // tek boyut

$yenidizim[] = [ "2. boyutun 1. elemanın 1. değeri", "2. boyutun 1. elemanın 2. değeri", "2. boyutun 1. elemanın 3. değeri" ];
$yenidizim[] = [ "2. boyutun 2. elemanın 1. değeri", "2. boyutun 2. elemanın 2. değeri", "2. boyutun 2. elemanın 3. değeri" ];
$yenidizim[] = [ "2. boyutun 3. elemanın 1. değeri", "2. boyutun 3. elemanın 2. değeri", "2. boyutun 3. elemanın 3. değeri" ];


print_r($yenidizim);



