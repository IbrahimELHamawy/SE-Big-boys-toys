<?php 
class categorizedProduct extends view{
    public function output (){
        $title = $this->model->title;
    require APPROOT . '/views/inc/header.php';
	echo breadcrumbs(); 

    ?>
    <br><br><br>
    <head>
    
    <head>
    <style>
 footer{
   bottom:0
 }
  </style>
</head>
	
	</head>
<body>

<div class="container">
   
<div class="row">
		<div class="col-md-12">
			<h2><b> PRODUCTS</b></h2>
      
      <hr class="hr2">
</div>
</div></div></div>


   
            <?php
           $category=$_POST['category'];
            foreach($this->model->readrelativeProd($category) as $cat){
    $var = "window.location.href='ProductDescription?id=".$cat->category."';"; ?> 
					

                      
 <!-- Product -->
            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
       <br><br><br><div class="product">
    <article>
        <div class="thumb">
          <img class="img-fluid" src="<?php echo URLROOT . $cat->img; ?>" alt="Genuine Air Mass Sensor Seal, Ring O MAZDA 3 BL / ZL01-13-214">
        </div>
          
      <span class="tag"><?php echo $cat->name; ?></span>
     
      <div class="price">
      <p class="item-price"> <strike style="color: #999;">EGP<?php echo $cat->oldPrice?></strike> <span style="padding-left:3px"> EGP&nbsp;<?php echo  $cat->price;?></span></p> &nbsp;
      </div>
      <div class="product-hover d-none d-lg-block d-xl-block">
       
        <div class="buttons">
          <form action="ProductDescription" method="post" name="addToCart">     

              <?php 
            echo'<button id="addtocart" name="addtocart" class="btn btn-block  p-btn"  value="'.$cat->id.'">Details</button>';?>
          </form>
        </div>
      </div>

  </article>
        </div>
            </div>
            </div></div>
	<?php	}
	?>		
				</div>
           
<?php
  require APPROOT . '/views/inc/footer.php';
  }
}
?>


