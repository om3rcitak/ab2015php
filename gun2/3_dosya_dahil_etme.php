<?php

/*
 * bulunduğumuz dosyaya başka bir dosyayı 2 şekilde dahil edebiliriz
 * 1- require
 * 2- include
 * include ile dahil etmeye çalışırsak, dahil etmeye çalıştığımız dosya yok ise ekrana hata basar ve sayfaki diğer işlemleri yapmaya devam eder
 * require ise tam tersidir. dahil etmek istediğimiz dosya yok ise ekrana hata basıp sonraki işlemleri yapmaz.
 */

require "dahil_edilecek_dosya.php";

echo "<br />";

include "dahil_edilecek_dosya.php";

/*
 * require_once ve include_once vardır. bunlar ise; 1 dosya 1den fala kez çağrılırsa sadece 1 kere çağrılmış gibi davranmasını sağlar. Örneğin 10 adımlık bir döngü içerisinde require_once "dahil_edilecek_dosya.php"; der isek dosyamızı 10 kez değil 1 kez çağırır. Ama _once ekini kullanmasaydık 10 kez dahil etmiş olacaktık.
 */

for($i=0; $i<=10; $i++){
    include_once "dahil_edilecek_dosya.php";
}

/*
 * yukarıdaki tüm işlemler sonucunda ekrana sadece 2 kere "dahil_edilecek_dosya.php" çağrılmıştır. sebebi ise line 11 ve 15'te normal oalrak çağırdır. sonra ise _once eki ile çağırdık. dosyamız daha önceden zaten dahil edildiğinden döngü içindeki _once eki dosyamızı hiç dahil etmedi.
 */