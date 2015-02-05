<?php

/*
 * __construct -> class'tan yeni bir nesne oluşturulduğunda yapılacak işlemler
 * __destruct -> class sonlandığında  yapılacak işlemler
 */

class deneme{

    function __construct(){
        echo "ben doğdum <br />";
    }

    function __destruct(){
        echo "ben öldüm <br />";
    }

}

new deneme;

