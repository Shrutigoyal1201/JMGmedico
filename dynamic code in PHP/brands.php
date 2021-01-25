<?php include"header.php" ?>
	
	<link rel="stylesheet" type="text/css" href="css/brands.css">

	<br>

	<?php 
          include "dbcon.php";
          $v="SELECT * FROM sliderb";
          $q=mysqli_query($con,$v);
          $r=mysqli_num_rows($q);
          ?>
	<!--carousel slide start-->
	<div class="carousel slide" data-ride="carousel" id="myslide">
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
	
	<br>

	<!--container start-->
	<div class="container">
		<!--row start-->
		<div class="row x">
			<!--col-sm-12 start-->
			<div class="col-sm-12">
				<br><br>
			<h3 style="text-align: center"> BRANDS AVAILABLE</h3><br><br>
			</div><!--col-sm-12 end-->
			
			<!--col-md-7 start-->
			<div class="col-md-7 col-sm-7">
				<!--center start-->
				<center>
					<br><br>
					<?php
					include "dbcon.php";
					$s="SELECT*FROM brandimg";
					$q=mysqli_query($con,$s);
					while($result=mysqli_fetch_array($q))
					{
					?>

					<img class="img-fluid img"  src="admin/<?php echo $result['image']?>">

				<?php } ?>
				</center><!--center end-->
				<br><br><br>			
			</div><!--col-md-7 end-->
			
			<!--col-md-5 start-->
			<div class="col-mod-5 col-sm-5 y" style="margin-top:25px">
				<!--start list tag (list of brands)-->
				<ol><br><br>
					<?php
					include "dbcon.php";
					$s="SELECT*FROM brandname";
					$q=mysqli_query($con,$s);
					while($res=mysqli_fetch_array($q))
					{
					?>
					<li><?php echo $res['name'] ?></li><hr>
				<?php } ?>
					
				</ol><!--end list tag-->
			</div><!--col-md-5 end-->
		</div><!--row end-->
	</div>
	
	<br><br><br>
	<!--footer start-->
	<?php include"footer.php"; ?>
	<!--footer end-->

</body>
</html>