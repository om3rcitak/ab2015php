<?php

/*
 * karşılaştırma operatörleri
 *
 * == -> eşit ise
 * != -> eşit değil ise
 * <> -> eşit değil ise
 * < -> küçük ise
 * <= -> küçük veya eşit ise
 * > -> büyük ise
 * >= -> büyük veya eşit ise
 *
 *  yukarıdaki operatörleri if içinde kullanabiirsiniz.
 */


$sayi1 = 10;
$sayi2 = 20;

if($sayi1==10){ // $sayi1 değişkenimin içindeki değer 10 ise bu bloktaki işlemleri yap
    echo "sayi 1 10muş <br />";
}else{ // 10 değil ise else bloğunun içindeki işlemleri yap
    echo "sayi 1 10 değilmiş <br />";
}


/*
 * yukarıda tek bir kontrol yaptık. ifelse bloğu ile birden fazla kontrol yaptırabiliyoruz
 */

if($sayi1==15){ // $sayi1 değişkenimin içindeki değer 15 ise bu bloktaki işlemleri yap
    echo "sayi 1 15muş <br />";
}elseif($sayi1==13){ // $sayi1 değişkenimin içindeki değer 15 değil 13 ise bu bloktaki işlemleri yap
    echo "sayi 1 13muş <br />";
}elseif($sayi1==10){ // $sayi1 değişkenimin içindeki değer 15 ve 13 değil 10 ise bu bloktaki işlemleri yap
    echo "sayi 1 10muş <br />";
}else{ // 15, 13 veya 10 değil ise else bloğunun içindeki işlemleri yap
    echo "sayi 1 10, 13 veya 15 değilmiş <br />";
}

/*
 * AND ve OR operatörleri ile if içerisinde birsen fazla kontrol sağlayabiliriz
 *
 * and, her iki koşulunda sağlandığı durumlarda true döndürür. && olarak ta kullanılır
 * or, her iki koşultan sadece 1nin bile doğru olduğu durumlarda true döndürür. || olarak ta kullanılır
 */

if( $sayi1>=5 && $sayi1<=15 ){ // sayi 1 5'e eşit veya büyük ise ve aynı zamanda 15'e eşit veya küçük ise bu bloktaki işlemler yapılacak
    echo "sayi 1 5 ile 15 arasındaymış <br />";
}else{
    echo "sayi 1 5 ile 15 arasında değilmiş <br />";
}


$isim = "ömer";

if($isim=="ömer" || $isim=="umut"){ // $isim'in içindeki değer öner veya umut ise bu bloktaki işlemler yapılır
    echo "isim değişkenim ya ömerdir ya umut <br />";
}else{
    echo "isim değişkeni ömer de değil umutta. farklı birşey <br />";
}