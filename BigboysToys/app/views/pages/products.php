<?php 
class products extends view{
    public function output (){
        $title = $this->model->title;
    require APPROOT . '/views/inc/header.php';
    echo breadcrumbs(); 
    ?>
   




<section class="products-content">
  <div class="container">
     
    <div class="products-area">
  
  <div class="row">
  <div class="col-md-12">
			<h2><b> PRODUCTS</b></h2>
    
       <hr class="hr2">
  </div>
  </div>
  
  <div class="row">
  
  <?php
  foreach($this->model->readProd() as $product){
    $var = "window.location.href='ProductDescription?id=".$product->id."';";
    ?>
        
 <!-- Product -->
            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
       <br><br><br><div class="product">
    <article>
        <div class="thumb">
          <img class="img-fluid" src="<?php echo URLROOT . $product->img; ?>" alt="Genuine Air Mass Sensor Seal, Ring O MAZDA 3 BL / ZL01-13-214">
        </div>
          
      <span class="tag"><?php echo $product->name; ?></span>
      <h2 class="title text-center">
      <?php
      if ( $product->category==0 ) { echo 'Transmission';}  else if ( $product->category==1 ){ echo 'Exhaust ';}  else if( $product->category==2 ){ echo 'Air Cleaners  ';} 
       else if  ( $product->category==3 ){ echo 'Handlebars ';} else if ( $product->category==4 ){ echo 'Bike Protection ';}else if ( $product->category==5 ){ echo 'Suspensions ';} 
       else if ( $product->category==6 ){ echo 'Brakes ';} else { echo 'Engine Parts';}
      ?></h2>
      <div class="price">
      <p class="item-price"> <strike style="color: #999;">EGP<?php echo $product->oldPrice?></strike> <span style="padding-left:3px"> EGP&nbsp;<?php echo  $product->price;?></span></p> &nbsp;
      </div>
      <div class="product-hover d-none d-lg-block d-xl-block">
       
        <div class="buttons">
          <form action="ProductDescription" method="post" name="addToCart">     

              <?php 
            echo'<button id="addtocart" name="addtocart" class="btn btn-block  p-btn"  value="'.$product->id.'">Details</button>';?>
          </form>
        </div>
      </div>

  </article>
        </div>
            </div>
      
       



<?php
  }
  ?>
       





       










       






     
         </div>
</div>
  </div>
</section>
<?php
  require APPROOT . '/views/inc/footer.php';

  }
}
?>