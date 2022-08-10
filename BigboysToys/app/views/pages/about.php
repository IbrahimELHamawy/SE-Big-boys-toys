<?php 
class About extends view{

  public function output(){
    $title = $this->model->title;
    require APPROOT . '/views/inc/header.php';
    echo breadcrumbs(); 
 ?>
<body>

<?php foreach($this->model->readAbout() as $about){
  ?>
  <div class="row">
  <div class="col-md-12">
<div class="row">
<div class="col-md-12" style="margin-bottom:5px;">
			<h2>ABOUT <b>BIGBOYSTOYS</b></h2>
</div>
<div  style="position:relative; left:20%; width:60% ;border:2px solid #FF7A00; border-radius:10px">
<p style="margin-left:20%; margin-right:20%; margin-top:3%;margin-bottom:3%; font-size:15px; "><b><?php echo $about->description; ?></b></p>		
</div>
<div class="col-md-12" style=" margin-top:5%" >
<h2>VISION /<b>/ MISSION</b></h2>
</div></div>

<h2><b>VISION</b></h2>
<div  style="position:relative; left:20%; width:60% ;border:2px solid #FF7A00;margin-bottom:5%;border-radius:10px">
<p style="margin-left:20%; margin-right:20%; margin-top:2%; font-size:15px; "><b><?php echo $about->Vision; ?></b></p>
</div>
<h2><b> MISSION</b></h2>
<div  style="position:relative; left:20%; width:60% ;border:2px solid #FF7A00;margin-bottom:5%;border-radius:10px">
<p style="margin-left:20%; margin-right:20%; margin-top:2%; font-size:15px; "><b><?php echo $about->Mission; ?></b></p>

</div>
 </div>
  </div>

 

<?php } ?>
</body>

 <?php
  require APPROOT . '/views/inc/footer.php';

  }
}
?>