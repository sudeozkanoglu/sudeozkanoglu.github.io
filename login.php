<?php

$kullanici_Adi=$_POST['username'];
$sifre=$_POST['password'];

if(!empty($kullanici_Adi) && !empty($sifre))
{
   if($kullanici_Adi=="g201210034@sakarya.edu.tr" && $sifre=="g201210034")
    {
        header ("Location:loginBasarili.html");
    }
    else
    {
        header ("Location:loginBasarisiz.html");
    } 
}
else
{
    header ("Location:loginBos.html");
}


?>