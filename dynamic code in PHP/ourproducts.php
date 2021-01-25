<?php include"header.php" ?>

<link rel="stylesheet" type="text/css" href="css/ourproducts.css">

		<?php 
          include "dbcon.php";
          $v="SELECT * FROM sliderp";
          $q=mysqli_query($con,$v);
          $r=mysqli_num_rows($q);
          ?>
	<!--carousel slide start-->
	<div class="carousel slide carousel-fade" data-ride="carousel" id="myslide">
		<!--carousel inner start-->
	  	<div class="carousel-inner">
	  		<!--carousel item start-->
	  	
	  	<?php
            for($i=1; $i<=$r; $i++)
            {
            $data=mysqli_fetch_array($q);              
        ?> 
        	<?php
           		if($i==1)
            	{ 
        	?>

		    <div class="carousel-item active" data-speed="1" data-interval="4000">
		     	<img  src="admin/<?php echo $data['image']?>" class="img-fluid b2">
			</div><!--carousel item end-->
			<!--carousel item start-->
			<?php 
            	}
                else
                {
            ?>
			<div class="carousel-item" data-speed="1" data-interval="4000">
		     	<img  src="admin/<?php echo $data['image']?>" alt="Second slide" class="img-fluid b2">
			 </div><!--carousel item end-->
			<?php
                }
            ?>

        <?php
           } 
         ?>    
		</div><!-- end carousel-inner-->
		
		<!--preview slide anchor tag start-->
		<a href="#myslide" data-slide="prev" class="carousel-control-prev">
      	 	<span class="carousel-control-prev-icon"></span>
    	</a><!--preview slide anchor tag end-->
  
    	<!--next slide anchor tag start-->
	    <a href="#myslide" data-slide="next" class="carousel-control-next">
	        <span class="carousel-control-next-icon"></span>
	    </a><!--next slide anchor tag end-->
	</div><!--carousel slide end-->
	

	<!--center start-->
	<center>
		<!--container start-->
		<div class="container">
			<!--row start-->
			<div class="row x y">
				<!--col-md-12 start-->
				<div class="col-md-12">
					<center>
					<b>PRODUCT LIST</b>
					<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTbn3G8obeMA5nCRZm9tf5Tk0olFiXn3atCv0ImVmlprxyJmqXVZBfl2fCg15c8Gw/pubhtml?widget=true&amp;headers=false" class="tab mx-auto"></iframe>
					<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSMWRcL_63bPdak1Sh-ADMO-x--YLnNAQCJNguOtk3x91swHvz56usSRrGyScF5Q94P3Q6IXUw9u4yu/pubhtml?widget=true&amp;headers=false" class="tabmob mx-auto"></iframe>
					</center>
				</div><!--col-md-12 end-->
			</div><!--row end-->
		</div><!--container end-->
	</center><!--center end-->

	
	<br><br><br>
	<!--footer start-->
	<?php include"footer.php"; ?>
	<!--footer end-->

</body>
</html>