<?php 

$kategoriler=["Programlama", "Web Geliştirme", "Mobil Uygulamalar", "Ofis Uygulamaları"];

$kurslar =[ //Bilgileri key value şeklinde tanımladık.
   [
      "id"=> 1,
      "baslik"=> "Web Geliştirme Kursu",
      "aciklama"=> "Eğitici bir kurs",
      "resim"=> "1.jpg"
   ],

   [
    "id"=> 2,
    "baslik"=> "Python Kursu",
    "aciklama"=> "Eğitici bir kurs",
    "resim"=> "2.jpg"
   ],

   [
  "id"=> 3,
  "baslik"=> "Javascript Kursu",
  "aciklama"=> "Eğitici bir kurs",
  "resim"=> "3.jpg"
   ]]   
?>
   
 <?php include('partials/_header.php')?>
 <?php include('partials/_navbar.php')?>
 <?php include('partials/_footer.php')?>
 <?php include('partials/_kategori.php')?>

     