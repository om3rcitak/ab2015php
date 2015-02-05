<?php session_start(); // syfaad session ile işlem yapmak istiyorsam session_start(); demeliyim

/*
 * session ve cookie, unutulmayan değişkenlerdir. bu sayfada 1 kere tanımladıktan sonra başka sayfada istediğiniz gibi kullanabilirsiniz.
 * Farkları;
 * Cookie, browser'ınızda tutulur. 3. parametrede unix time stamp formatı ile girilen zaman geldiğinde cookie kendini unset eder yani siler
 * Session, server'da tutulur. browser kapatıldığında serverdaki session dosyası kendini unset eder
 */

/*
 * cookie oluşturma
 */

setcookie("bilgiler", "adim=omer,soyad=asd", time() + (7 * 24 * 60 * 60) );

/*
 * anahtarı 'bilgiler' olan, içince 'adim=omer,soyad=asd' değerini taşıyan ve tam 1 hafta sonra bugün bu saatte yok olacak bir cookie set ettim.
 */

echo $_COOKIE["bilgiler"] . "<br />";

/*
 * session oluşturma
 */

$_SESSION["bilgiler"] = "adım = ahmet, soyadım = mehmed";

echo $_SESSION["bilgiler"] . "<br />";