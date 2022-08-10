<?php
class Register extends view
{
  public function output()
  {
    $title = $this->model->title;

    require APPROOT . '/views/inc/header.php';
    echo breadcrumbs(); 
    ?>
   
  

   <div class="row">
		<div class="col-md-12">
		<h2 ><a class="register-head1" href="<?php echo URLROOT . 'public/users/login'; ?>">Login</a> <li class="or">Or</li> <b> <a class="register-head2" style=" color: #FF7A00;" href="<?php echo URLROOT . 'public/users/register'; ?>">Register</a></b></h2>
     
 </div></div>


  <div class="login-container">
  <form class="form" method="post" action="" name="Login" >
       
   
  <div  style=" padding-top: 50px; ">
      
            <div><label >First Name</label>
             <input class="form-control center-block" style="width:60%" type="text"  required="true"  name="fname" placeholder="First Name" autofocus="false">
             </div>
             <div > <label >Last Name</label>
             <input class="form-control center-block"style="width:60%"  type="text"  required="true"  name="lname" placeholder="Last Name" autofocus="false">
            </div>
           
            <div > <label >Email Address</label></div>
            <input class="form-control center-block"style="width:60%"  type="text"  required="true"  name="email" placeholder="Email Address" autofocus="false">
						
            <div > <label >Age</label></div>
            <input class="form-control center-block"style="width:60%"  type="text"  required="true"  name="age" placeholder="Age" autofocus="false">
						
            <div > <label >password</label></div>
            <input class="form-control center-block"style="width:60%" type="password" required="true" name="password" placeholder="password" autofocus="false">
            
            <div > <label >confirm password</label></div>
						<input class="form-control center-block"style="width:60%" type="password" required="true" name="C_password" placeholder="confirm password" autofocus="false">
					</div>
				
					
        <input type="submit" class="login-btn" id="Login" name="Login"onsubmit="return false" value="Submit" >
            
	  </form>  </div>

<?php
    require APPROOT . '/views/inc/footer.php';
  }

 
  }?>

