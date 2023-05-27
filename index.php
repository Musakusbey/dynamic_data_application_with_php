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

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" />
</head>
  <body>  

  <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
    <div class="container">
     <a href="/" class="navbar-brand">CourseApp</a>
   <ul class="navbar-nav me-auto">
      <li class="nav-item">
        <a href="#" class="nav-link">Anasayfa</a>
      </li>
    <li class="nav-item">
    <a href="#" class="nav-link">Kurslar</a>
    </li>
      </ul> 
    </div>  
  </nav>  
         
  <div class="container">    
  <div class="row">
    <div class="col-md-4">
      <div class="card h-100" style="width: 18rem;"> 
   
       <?php foreach($kategoriler as $kategori): ?>

         <?php echo $kategori; ?>    

        <div class="card-body"> 
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
         
        <?php endforeach; ?>

      </div>
    </div>
  </div>
</div>

 
   </div>  
  </body> 
</html>   