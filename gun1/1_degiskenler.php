<?php

$degisken1 = "deger";
$degisken2 = 2;

/*
 * yukarıda görüldüğü üzere değişken "$değişkenadı" şeklinde oluşturulup, içine değer girilebiliyor.
 * değişken oluşturmanın bazı kuralları vardır.
 * 1- rakam ile başlayamaz, harf ile başlamak zorundadır. Harf ile başlayıp rakam ile devam edebilir bunda bi sakında yoktur
 * 2- Alttire "_" dışında herhangi bir özel karakter kullanılamaz.
 * 3- İngilizce dışında harfler kullanılamaz.
 *
 * PHP'de değişken türleri yoktur. içinde girdiğiniz değere göre PHP otomatik olarak türünü tanır. Bir değişkenin tipi gettype() fonksiyonu ile çekilebilir veya settype() fonksiyonu ile değiştirilebilir.
 */

echo $degisken1;
echo "<br />";
echo $degisken2;
echo "<br />";


/*
 * echo; ekrana istediğimiz değeri basmamızı sağlar. "echo $degisken" ile $degisken değişkeninin içindeki değeri ekrana basmış oluyoruz.
 */

echo "benim değişkenimin içindeki değer şudur-> $degisken1 ";
echo "<br />";

/*
 * ekrana basılmak istenen yazı çift tırnak içinde yazılıyor ise, değişken de basılabilir. Lakin tek tırnak ise değişkenin içindeki değer ekrana basılmaz.
 */

echo " bu benim 1. kısmım " . $degisken1 .  " bu da benim 2. kısmım <br />";


echo "değeri $degisken1 olan 1. değişkenimin tipi şudur -> " . gettype($degisken1) . ", değeri $degisken2 olan 1. değişkenimin tipi şudur -> " . gettype($degisken2);

/*
 * PHP'de birleştirme operatörü "." (nokta)'dır. Nokta ile birden fazla metni, değişkeni birleştirebilirsiniz.
 */