<?php 
class A_orders extends view{
    public function output (){
        $title = $this->model->title;
        ?><div ><?php require APPROOT . '/views/inc/adminHeader.php';  ?></div >




<head>
<script>


    $(document).ready(function() {
    $('#datatable').dataTable();
    
     $("[data-toggle=tooltip]").tooltip();
    
} );

    </script>


<style>
  footer{
    bottom:0
  }
  </style>
</head>
<div class="main">


<div class="container">
	<div class="row" style="padding-bottom:20px">
    <div class="col-md-12">
			<h2>ALL<b> ORDERS</b></h2>
            
      <hr class="hr2" >

</div>
	</div>
    
        <div class="row">
		
            <div class="col-md-12">
            
            
<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
    				<thead>
						<tr>
                            
            <th>Product #</th>
            <th>Product Name</th>
							<th>User Name</th>
							<th>User ID</th>
							<th>Status</th>
							<th>Address</th>
							<th>Order #</th>

						</tr>
					</thead>

					<tfoot>
						<tr>
            
            
            <th>Product #</th>
            <th>Product Name</th>
							<th>User Name</th>
							<th>User ID</th>
							<th>Status</th>
							<th>Address</th>
							<th>Order #</th>
                         
						</tr>
					</tfoot>

					<tbody>

          <?php
  foreach($this->model->readorder() as $order){
    foreach($this->model->readproduct($order->productID) as $product){
    ?>

						<tr>
              
               <td><?php echo $order->productID; ?></td>
               <td><?php echo $product->name; ?></td>
               <td><?php echo $order->Fullname; ?></td>
							<td><?php echo  $order->userID; ?></td>
              <td><?php if ( $order->status==0 ) { echo 'Not Delivered';}  else{ echo 'Delivered';}?></td>
              <td><?php echo  $order->address; ?></td>
              <td><?php echo  $order->id; ?></td>


                         	</tr>
					
<?php
    }
  }
  ?>	
          
                        
					</tbody>
				</table>

	
	</div>
	</div>
</div>






</div>
   
   <?php
  require APPROOT . '/views/inc/footer.php';
  }
}
?>