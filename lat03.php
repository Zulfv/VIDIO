<?php
//    echo 'saya belajar php';

   function belajar (){
    echo "saya belajar php ";
   }

   function luaspersegi($p = 5, $l =3){
   
    $luas = $p * $l;

    echo $luas;

   }

   function luas($p = 5, $l =3){
    $luas = $p * $l;

    return $luas;
   }

   function output(){
    return "belajar function";
   }

   echo luas(100,5) * 5;
 
?>