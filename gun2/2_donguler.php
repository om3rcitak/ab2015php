<?php

/*
 *  Döngüler
 * 1- for
 * 2- while
 * 3- do-while
 */

/*
 * for($parametre1; $parametre2, $parametre3){ işlemler }
 * parametre1 = tanımlanacak değişkenler tanımlanır
 * parametre2 = bir koşul olmalı, u koşul sağlandığı sürece döngü döner
 * parametre3 = parametre 2deki koşul sağlanıyor ise yapılacak işlemler
 */
for($i=0; $i<=10; $i++){ // $i'nin ilk değeri 0'dır, $i küçük eşit 10 doşulu sağlandığı sürece $i'yi 1 artır
    echo "i'nin şuanki değeri : " . $i . "<br />";
}

/*
 * while(koşul){işlemler}
 * koşul sağlandığı sürece, yani içindeki koşulun sonucu true olduğu sürece blok içindeki işlemler yapılır.
 */

$a = 0;
while($a<=10){
    echo "a'nin şuanki değeri : " . $a . "<br />";
    $a++;
}

/*
 * do{ işlemler }while(koşul);
 * koşul kontrol edilmeden önce bloktaki işlemler yapılır, sonra koşul kon kontrol edilir.
 */

$b = 1;
do{
    echo "blok içindeki işlemler <br />";
}while($b==0);

/*
 * yukarıda $b 0'a eşit olduğu sürece döngünün dönmesi lazım. daha ilk adımdan koşul sağlanmamasına rağmen, ilk önce blok çalıştığından ekrana yazı basıldı
 */