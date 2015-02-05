<?php

$ad = "ömer deneme SELECT dfsdf ,sdfsdfds ";

try{

    if(strstr($ad,"SELECT")) {
        throw new Exception("ismin içinde select kelimesi var, olmaması lazım");
    }

    echo "eğer hata yok ise, yani ad değişkenin içinde SELECT kelimesi geçmiyor, yeni bit Exception oluşturulmamış ise yapıalcak işlemler";

}catch(Exception $e){

    echo "hata var! " . $e->getFile() . " dosyasının " . $e->getLine() . ". satırında yeni bir hata tespit edilmiş!. hata mesajının içeriği = " . $e->getMessage();

}