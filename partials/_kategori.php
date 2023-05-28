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
