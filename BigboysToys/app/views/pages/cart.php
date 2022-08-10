<?php 
class cart extends view{
    public function output (){
        $title = $this->model->title;
    require APPROOT . '/views/inc/header.php';
	echo breadcrumbs(); 
    ?>
<head>

</head>
    <br><br><br>

<section class="cart-content">
<div class="row">
 <div class="cart-container" style="margin-right:10%">
 <form method="post">
    <table class="cart-table"  cellspacing="0">
    <thead>

			<tr>
                <th class="product-image">&nbsp;</th>
				<th class="cart-description">Name</th>
				<th class="cart-price">Price</th>
				<th class="cart-quantity">Quantity</th>
				<th class="cart-total">Subtotal</th>
                <th class="cart-delete">&nbsp;</th>
			</tr>
        <tbody>
			<tr class=" cart_item">
			<?php
  foreach($this->model->readCart($_SESSION['ID']) as $cart){
	foreach($this->model->readProductFromCart($cart->productID) as $product){
		$sum=$this->model->productSum($cart->quantity,$product->price);
		$this->model->insertSum($sum,$cart->id);
    ?>
				<td class="product-thumbnail">
				<a href="" class="no-lightbox"><img height="60" style="margin:20px;" src="<?php echo URLROOT . 'images/car.jpg'; ?>"></a></td>
				<td class="product-name" data-title="cart-description">
				<a href=""><?php echo  $product->name; ?></a>
				<td  data-title="Price"><span ><bdi><?php echo  $product->price; ?>&nbsp;<span>EGP</span></bdi></span>						
				</td>
				<td  data-title="Quantity"><?php echo  $cart->quantity; ?> </td>
				<td  data-title="TOTAL"><?php echo $sum;  ?><span > EGP</span></td>
				<td><button class="order-btn  btn-xs"  data-target="#delete" name="del" value=" <?php echo $cart->productID ?>"   style="margin:20px; background-color:#FF7A00; color:white;"><span class="glyphicon glyphicon-trash" ></span></button></td>	
						
           </tr>
		<?php
	}	
	}
		?>	
		   
		</tbody>   
	</thead>
	
    </table>
 </form>
 
 </div>
 
 <div class="table2"  id="table2" style="position:realtive; ">
	<table style="border-radius: 19px;"  cellspacing="0">
      <h2 class="checkot-total">Cart totals</h2>
	   <tbody >
            <tr>
		       <th >Subtotal</th>
		       <td data-title="Subtotal"><span ><bdi>
			   <?php
  			$sub=0;
			  foreach($this->model->readCart($_SESSION['ID']) as $cart){
			$sub+=$cart->sum;
			

			}
			echo $sub;
    			?>
				&nbsp;<span >EGP</span></bdi></span></td>
	       </tr>
		
		   <tr>
	           <th>Shipping</th>
	           <td data-title="Shipping">
            <ul>
            <li>
              <input type="hidden" name="shipping_method[0]" data-index="0" id="shipping_method_0_flat_rate1" value="flat_rate:1">
              <label>Flat rate: <span><bdi><?php $shipping=35; echo $shipping;  ?>&nbsp;<span >EGP</span></bdi></span></label>	
            </li>
            </ul>
              <p>Shipping to <strong>cairo, Cairo</strong>.</p>
              </td>
           </tr>

           <tr class="order-total">
           <th >Total</th>
           <td data-title="Total"><strong><span ><bdi>
		   <?php 
		   $TOTAL=$sub+$shipping; 
		   echo $TOTAL;   
		   $user=$this->model->userPoints($_SESSION['ID']);
		   $oldPoints =$user->Points;
		   $TOTAL=$TOTAL/4;
		   $points=intval($TOTAL)+$oldPoints;
		   $this->model->cartPoints($points,$_SESSION['ID'])
		   ?>
		   
		   &nbsp;<span>EGP</span></bdi></span></strong> </td>
          </tr>
       </tbody>
	  
	  </table>
	  <div>
	<strong><B style="color:#FF7A00">CONGRATULATIONS!!!</B> YOU'VE EARNED <B style="color:#FF7A00"><?php  echo intval($TOTAL);  ?></B> POINTS!!</strong>
	</div>	
	<form action="checkout" method="post" name="tocheckout">                                            
	
	<?php echo'<button id="ToCheckOut" name="ToCheckOut" class="login-btn" >Check Out</button>';?>  
	  </form>
	  
	  </div>        
	  



</div>
</section>







<?php
  require APPROOT . '/views/inc/footer.php';
  }
}
?>






