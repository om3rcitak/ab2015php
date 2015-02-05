<?php session_start();

/*
 * bu sayfada herhangi bir set etme işlemi yapmadan, bir önceki dosyada set ettiğimiz session ve cookie'mizi sadece çağıracaz.
 */


echo "cookie'min içindeki değer : " . $_COOKIE["bilgiler"] . "<br />";
echo "session'ımın içindeki değer : " . $_SESSION["bilgiler"] . "<br />";