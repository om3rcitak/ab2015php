<?php

/*
 * Aritmetik Operatörler
 *
 * + = toplama operatörü
 * - = çıkarma operatörü
 * * = çarpma operatörü
 * / = bölme operatörü
 * % = mod operatörü
 *
 * $sayi++ = $sayi değişkenin işledikten sonra içindeki değeri 1 artır
 * $sayi-- = $sayi değişkenin işledikten sonra içindeki değeri 1 azalt
 * ++$sayi = $sayi değişkenin içindeki değeri 1 artırdıktan sonra işle
 * --$sayi = $sayi değişkenin içindeki değeri 1 azalttıktan sonra işle
 *
 */

$sayi1 = 30;
$sayi2 = 2;

echo ($sayi1 + $sayi2) . "<br />"; // 32
echo ($sayi1 - $sayi2) . "<br />"; // 28
echo ($sayi1 * $sayi2) . "<br />"; // 60
echo ($sayi1 / $sayi2) . "<br />"; // 15
echo ($sayi1 % $sayi2) . "<br />"; // 0

/*
 * Atama Operatörleri
 *
 * $sayi1 += $sayi2; ->  $sayi1 = $sayi1 + $sayi2;
 * $sayi1 -= $sayi2; ->  $sayi1 = $sayi1 - $sayi2;
 * $sayi1 *= $sayi2; ->  $sayi1 = $sayi1 * $sayi2;
 * $sayi1 /= $sayi2; ->  $sayi1 = $sayi1 / $sayi2;
 *
 */

echo ($sayi1 += $sayi2) . "<br />"; // $sayi1'in yeni değer 32 oldu
echo ($sayi1 -= $sayi2) . "<br />"; // $sayi1'in yeni değer 32 olduğundan 32 - 2 = 30. $sayi1 tekrardan 30 oldu
echo ($sayi1 *= $sayi2) . "<br />"; // 30 * 2 den $sayi1'in yeni değeri 60 oldu
echo ($sayi1 /= $sayi2) . "<br />"; // 60 / 2 işlemi yapılacağından $sayi1 tekrardan 30 oldu















