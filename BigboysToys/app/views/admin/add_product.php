<?php
class contact extends view{

 public function output(){
    $title = $this->model->title;
    ?><?php require APPROOT . '/views/inc/adminHeader.php'; ?>

    <head>
    <style>
 
    </style>
    </div>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <!-- heading -->
      <h2>ADD <b>PRODUCT</b></h2>
      </div>
      </div>


      
<div class="login-container ">
    
    <form class="form" method="post" >
         <div style="margin-top:10px;">


         <div > <label >Name</label></div>
                <input class=" form-control center-block" style="width:60%;border:2px solid #FF7A00;" type="text"  required="true"  name="name" placeholder="Name" autofocus="false">
                
                <div  style=" padding-top: 30px; ">
              <div ><label >Descrption</label></div>
              <input class="form-control center-block" style="width:60% ;border:2px solid #FF7A00;" type="text" required="true" name="description" ></textarea>
            </div>

            <div > <label >Old Price</label></div>
                <input class=" form-control center-block" style="width:60% ;border:2px solid #FF7A00;" type="number"  required="true"  name="oldprice" placeholder="oldPrice" autofocus="false">
                

                <div > <label >New Price</label></div>
                <input class=" form-control center-block" style="width:60% ;border:2px solid #FF7A00;" type="number"  required="true"  name="price" placeholder="Price" autofocus="false">
                
                <div > <label >Image</label></div>
               <div class="d-flex justify-content-center ">
<input type="file"name="img" class="form-control" id="customFile" style="width:50% ;margin-bottom:30px; border:2px solid #FF7A00;  background-color: #ffffff0d; height: 33px;" >
    </div>

                <div  style=" padding-bottom: 30px; ">
        
         <div ><label >Category</label></div>
<select class="btn  dropdown-toggle" name="choice" style="width:60%; border:2px solid #FF7A00;">
  <option value="none" selected disabled hidden>Select</option>
  <option value="0">Drive & Transmission </option>
  <option value="1">Exhaust systems</option>
  <option value="2">Air cleaner</option>
  <option value="3">HANDLEBARS & CONTROLS</option>
  <option value="4">Bike protection</option>
  <option value="5">Suspension & Frame</option>
  <option value="6">Brakes</option>
  <option value="7">Engine Parts</option>
</select></div>
<div  style=" padding-bottom: 30px; ">

<div ><label >Featured</label></div>
<select class="btn  dropdown-toggle" name="featured" style="width:60%; border:2px solid #FF7A00;">
  <option value="none" selected disabled hidden>Select</option>
  <option value="1">YES</option>
  <option value="0">NO</option>

</select>

</div> </div>

          
            
            
            
          <input type="submit" class="login-btn" id="Login" name="Login"onsubmit="return false" value="Add" class="login-button">
          
        
      </form>     </div></div>

 <?php
  require APPROOT . '/views/inc/footer.php';

  }
}
?>