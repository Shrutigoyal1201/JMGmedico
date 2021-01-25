<?php include"header.php"?>
	
<link rel="stylesheet" type="text/css" href="css/contact.css">

		<?php 
          include "dbcon.php";
          $v="SELECT * FROM sliderc";
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
	
	<br>

	<!--center start-->
	<center>
		<!--container start-->
		<div class="container">
			<!--row start-->
			<div class="row x">
				<!--col-md-12 start-->
				<div class="col-md-12 bg-secondary">
					<br>
					<center>
						<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#aa">JOIN US</button>
					</center>
					<br>
					
					<div class="modal fade" id="aa"><!-- Button trigger modal start-->
					 	<div class="modal-dialog" ><!--modal-dialog start-->
					    	<div class="modal-content"><!--modal-content start-->
					        	<div class="modal-header"><!--modal-header start-->
							        <h5 class="modal-title" style="text-align: center;">JOIN US</h5>
							        <button type="button" class="close" data-dismiss="modal">
							          <span >&times;</span>
							        </button>
						        </div><!--modal-header end-->
						        <div class="modal-body"><!--modal-body start-->
						        	<div class="card-body bg-secondary"><!--card body start-->
										
										<h3 class="b">Request Products</h3><br>
										
										<!--for start-->
										<form class="b" method="post" action="incontact.php">

						       			<div class="form-group">
						        		<input type="text" name="name" class="form-control" placeholder="Name">
						       			</div>
								
										<div class="form-group">
										<input type="text" name="email"  class="form-control" placeholder="Email">
										</div>

										<div class="form-group">
										<input type="number" name="phone"  class="form-control" placeholder="Phone">
										</div>
								
										<div class="form-group">
										<textarea rows="3" name="product"  placeholder="Product name & details" class="form-control"></textarea>
										</div>

										<input type="submit" name="submit" class="btn btn-success b" name="submit" value="Submit">
										<br><br>

										</form><!--form end-->
									</div><!--card body end-->
					    		</div><!--modal-body end-->
						    </div><!--modal-content end-->
						</div><!--modal-dialog end-->
					</div><!-- Button trigger modal end-->
				</div><!--col-md-12 end-->

				<!--col-md-12 (outer) start-->
				<div class="col-md-12">
					<center>
						<br><br>
						<h4>Address:</h4> Shatabdi Complex, Shop,G-5, Huzrat Pull, Lashkar, Gwalior, Madhya Pradesh 474001<br><br>
					  	<div class="col-md-12">
							<h4>Find us on google map</h4>
						</div>
					</center>
					<!--col-md-12 (inner) start-->
					<div class="col-md-12">
						<center>
							<br>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.9643058646284!2d78.15252451502995!3d26.19783938344067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3976c5cd1251880d%3A0x16f46a194cf92c39!2sJai%20Maa%20Gumano%20Medico%20%26%20Surgico!5e0!3m2!1sen!2sin!4v1602237514641!5m2!1sen!2sin"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="map"></iframe>
						</center>
					</div><!--col-md-12 (inner) end-->
					<br><br>
				</div><!--col-md-12 (outer) end-->

				<!--col-md-1 start-->
				<div class="col-md-1">
				</div>

				<!--col-md-5 start-->
				<div class="col-md-5">
					<h2> Join Us</h2><br>
					<p>Be a part of the family, Join us at JMG and recieve best medical facilities.
						 Do not forget to rate us on google, your reviews are highly welcomed. You can directly contact us on whatsapp or via call, you can also visit our instagram and facebook pages. 
						 Click on the icons to visit our pages -
					</p> 
				</div><!--col-md-5 end-->
				
				<!--col-md-1 start-->
				<div class="col-md-1">
				</div><!--col-md-1 end-->
				
				<!--col-md-5 start-->
				<div class="col-md-5">
					<h4>Hours:</h4> 10:00 a.m.- 9:30 p.m.<br><br><br>
					<h4>Phone:</h4> 09144480962,9826236830
					<br><br><br>
					<a href="https://m.facebook.com/HealthandmedicineatJMG/?tsid=0.3179322746523827&source=result">
						<i class="fa fa-facebook-official" style="color:grey;font-size: 30px;"></i>
					</a>
					&nbsp;&nbsp;
					<a href="https://www.instagram.com/jaimaagumano/">
						<i class="fa fa-instagram" style="color:grey;font-size: 30px;"></i>
					</a>
					&nbsp;&nbsp;
					<a href="https://wa.link/6hjrok">
					 	<i class="fa fa-whatsapp" aria-hidden="true" style="color:grey;font-size: 30px;"> </i>
					</a>
					&nbsp;&nbsp;
					<a href="tel:9144480962">
					 	<i class="fa fa-phone" aria-hidden="true" style="color:grey;font-size: 30px;"></i>
					</a>
					&nbsp;&nbsp;
					<a href="mailto:sales.jaimaagumano@gmail.com">
					 	<i class="fa fa-google" aria-hidden="true" style="color:grey;font-size: 30px;"></i>
					</a>
					<br><br>
				</div><!--col-md-5 end-->
				
				<!--col-md-12 start-->		
				<div class="col-md-12 bg-secondary" style="height: 50px;">
				</div><!--col-md-12 end-->

			</div><!--row end-->
			<br><br>
		</div><!--container end-->
	</center><!--center end-->

	<br><br><br>
	<!--footer start-->
	<?php include"footer.php"; ?>
	<!--footer end-->
