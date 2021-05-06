
<?php include "header.php"; ?>

<link rel="stylesheet" type="text/css" href="css/index.css">
	<!--script start-->
	<script>
	$(document).ready(function(){
		$('#mymodel').modal('show');
	});
  
	</script>
	<!--script end-->

</head>
<!--head end-->

<!--start body tag -->
<body onload="myFunction()"><!--loader function calling-->
	<div id="loading"></div>
	
	
	<?php 
          include "dbcon.php";
          $v="SELECT * FROM slideri";
          $q=mysqli_query($con,$v);
          $r=mysqli_num_rows($q);
          ?>
	<div class="carousel slide" data-ride="carousel" id="myslide"><!--carousel slide start-->

		<!--carousel inner start-->
  		<div class="carousel-inner">

  		<?php
            for($i=1; $i<=$r; $i++)
            {
            $data=mysqli_fetch_array($q);              
        ?> 
        	<?php
           		if($i==1)
            	{ 
        	?>

  			<!--carousel item 1 start-->
		    <div class="carousel-item active" data-interval="6000">
	        	<!--section start-->
	        	<section id="banner">
					<!--container fluid start-->
					<div class="container-fluid">
			 			<!--row start-->
			 			<div class="row">
							<!--col-md-12 start-->
							<div class="col-md-12">
			 					<img  src="admin/<?php echo $data['image'] ?>" alt="First slide" class="img-fluid b2">
			  				</div>
			  				<!--col-md-12 end-->
			  				<!--col-md-12 start-->
			  				<div class="col-md-12">
								<h1 class="promo-title"><?php echo $data['title'] ?></h1>
								<p style="color: white;text-align: justify;"><?php echo $data['des'] ?></p>
							</div>
							<!--col-md-12 end-->
						</div>
						<!--row end--><br>
					</div>
					<!--container fluid end-->
				</section>  
				<!--section end-->
	        </div>
	        <!--carousel item 1 end-->

	        <?php 
            	}
                elseif($i==2)
                {
            ?>
		    
		    <!--carousel item 2 start-->
	        <div class="carousel-item " data-interval="4000">
	        	<img src="admin/<?php echo $data['image'] ?>" class="img-fluid b3">
	        	<img src="img/baby.jpg" class="img-fluid b3mob">
	        	<!--carousel caption start-->
	        	<div class="carousel-caption cc1">
	         		<h1 class="promo-title text-dark"><?php echo $data['title'] ?></h2>
				</div>
				<!--carousel caption end-->
	        </div>
	        <!--carousel item 2 end-->
	         <?php 
            	}
                elseif($i==3)
                {
            ?>
		    
	        
	        <!--carousel item 3 start-->
	        <div class="carousel-item " data-interval="4000">
	        	<img src="admin/<?php echo $data['image'] ?>" class="img-fluid b3">
	        	<img src="img/ayurmob.jpg" class="img-fluid b3mob">
	        	<!--carousel caption start-->
	        	<div class="carousel-caption cc2">
	         		<h1 class="promo-title text-dark"><?php echo $data['title'] ?></h1><br>
				<p style="text-align: justify;"><?php echo $data['des'] ?></p>
				</div>
				<!--carousel caption end-->
	        </div>
	        <!--carousel item 3 end-->

	         <?php
	          	}
                elseif($i==4)
                {
            ?>
		    

	        <!--carousel item 4 start-->
	        <div class="carousel-item " data-interval="2000">
				<img  src="admin/<?php echo $data['image'] ?>" alt="Third" class="img-fluid b3">
				<img  src="img/b3mob.jpg" alt="Third" class="img-fluid b3mob">
	         	<!--carousel caption start-->
	         	<div class="carousel-caption">
	         		<b><?php echo $data['des'] ?></b>
				</div>
				<!--carousel caption end-->
	        </div>
	        <!--carousel item 4 end-->
		</div><!-- end carousel-inner-->

			<?php
            	}
            ?>

        <?php
           } 
         ?>    

		<!--list tag (carousel indicators start)-->
		<ul class="carousel-indicators">
	    	<li data-target="#myslide" data-slide-to="0" class="active"></li>
	    	<li data-target="#myslide" data-slide-to="1" class=""></li>
	    	<li data-target="#myslide" data-slide-to="2" class=""></li>
			<li data-target="#myslide" data-slide-to="3" class=""></li>
	    </ul>
	    <!--list tag (carousel indicators end)-->

	    <!--preview anchor tag start-->
	 	<a href="#myslide" data-slide="prev" class="carousel-control-prev">
	       <span class="carousel-control-prev-icon"></span>
	    </a>
	    <!--preview anchor tag end-->
		
		<!--next slide anchor tag start-->	  
	    <a href="#myslide" data-slide="next" class="carousel-control-next">
	       <span class="carousel-control-next-icon"></span>
	    </a> 
	    <!--next slide anchor tag start-->	 
	</div><!--carousel slide end-->
	
	    
	<div><!--covid care div start-->
		
		<br><br><h2 class="text-center">Covid Care</h2><br><br>

		<div class="container"><!--container-1 start-->

			<div class="modal fade" id="cc1"><!-- Button trigger modal-1 start -->
				<!--modal dialog start-->
				<div class="modal-dialog" >
					<!--modal content start-->
			    	<div class="modal-content">
			    		<!--modal header start-->
			        	<div class="modal-header">
			        		<h5 class="modal-title">Covid Care Essentials</h5>
			        		<button type="button" class="close" data-dismiss="modal">
			            		<span>&times;</span>
			        		</button>
			        	</div><!--modal header end-->

			        	<!--modal body start-->
					    <div class="modal-body">
							<!--card body start-->
							<div class="card-body" style="text-align: left">	
								<!--row start-->
								<div class="row">
									<!--col-md-6 start-->
									<div class="col-md-6">
										<img src="https://image.freepik.com/free-vector/medical-black-mask-isolated-white-background-doctor-mask-corona-virus-protection-realistic-protective-medical-face-mask-front-side-medical-mask-doctors-patients_7714-723.jpg" class="img-fluid ">
									</div><!--col-md-6 end-->
									<!--col-md-6 start-->
									<div class="col-md-6">
										<h3>Masks</h3>
											Available in wide ranges ( from surgical to fashionable we have all your needs covered )			
									</div><!--col-md-6 end-->
									
								</div><!--row end-->
								
							</div><!--card body end-->

					    </div><!--modal body end-->

					</div><!--modal content end-->
					
				</div><!--modal dialog end-->
				
			</div><!-- Button trigger modal-1 end -->
			
			<div class="modal fade" id="cc2"><!-- Button trigger modal-2 start -->
				<!--modal dialog start-->
				<div class="modal-dialog" >
					<!--modal content start-->
			    	<div class="modal-content">
			    		<!--modal header start-->
			        	<div class="modal-header">
			        		<h5 class="modal-title">Covid Care Essentials</h5>
			        		<button type="button" class="close" data-dismiss="modal">
			            		<span>&times;</span>
			        		</button>
			        	</div><!--modal header end-->

			        	<!--modal body start-->
					    <div class="modal-body">
							<!--card body start-->
							<div class="card-body" style="text-align: left">	
								<!--row start-->
								<div class="row">
									<!--col-md-6 start-->
									<div class="col-md-6">
										<img src="https://5.imimg.com/data5/CG/VV/VD/SELLER-87556224/dettol-hand-sanitizer-500x500.jpg" class="img-fluid ">
									</div><!--col-md-6 end-->
									<!--col-md-6 start-->
									<div class="col-md-6">
										<h3>Hand Sanitizers</h3>
											We have all sorts of varieties in hand sanitizers including the most promising brands like dettol, lifeboy, Dr.morepen, etc
									</div><!--col-md-6 end-->
									
								</div><!--row end-->
								
							</div><!--card body end-->

					    </div><!--modal body end-->

					</div><!--modal content end-->
					
				</div><!--modal dialog end-->
				
			</div><!-- Button trigger modal-2 end -->
			
			<div class="modal fade" id="cc3"><!-- Button trigger modal-3 start -->
				<!--modal dialog start-->
				<div class="modal-dialog" >
					<!--modal content start-->
			    	<div class="modal-content">
			    		<!--modal header start-->
			        	<div class="modal-header">
			        		<h5 class="modal-title">Covid Care Essentials</h5>
			        		<button type="button" class="close" data-dismiss="modal">
			            		<span>&times;</span>
			        		</button>
			        	</div><!--modal header end-->

			        	<!--modal body start-->
					    <div class="modal-body">
							<!--card body start-->
							<div class="card-body" style="text-align: left">	
								<!--row start-->
								<div class="row">
									<!--col-md-6 start-->
									<div class="col-md-6">
										<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ30tulg5ZlC9VhRyrtmfpnBFPD5u18iahRQw&usqp=CAU" class="img-fluid ">
									</div><!--col-md-6 end-->
									<!--col-md-6 start-->
									<div class="col-md-6">
										<h3>Gloves</h3>
											Keep Yourself safe and your hands free from virus with our varied range of covid care gloves, fabricated with utter perfection that keeps your hands protected and viruses out of your system ;)
									</div><!--col-md-6 end-->
									
								</div><!--row end-->
								
							</div><!--card body end-->

					    </div><!--modal body end-->

					</div><!--modal content end-->
					
				</div><!--modal dialog end-->
				
			</div><!-- Button trigger modal-3 end -->
		
			<div class="modal fade" id="cc4"><!-- Button trigger modal-4 start -->
				<!--modal dialog start-->
				<div class="modal-dialog" >
					<!--modal content start-->
			    	<div class="modal-content">
			    		<!--modal header start-->
			        	<div class="modal-header">
			        		<h5 class="modal-title">Covid Care Essentials</h5>
			        		<button type="button" class="close" data-dismiss="modal">
			            		<span>&times;</span>
			        		</button>
			        	</div><!--modal header end-->

			        	<!--modal body start-->
					    <div class="modal-body">
							<!--card body start-->
							<div class="card-body" style="text-align: left">	
								<!--row start-->
								<div class="row">
									<!--col-md-6 start-->
									<div class="col-md-6">
										<img src="https://www.bigvalueshop.com/wp-content/uploads/2020/04/Generic-Laminated-Water-Proof-PPE-Kit.jpg" class="img-fluid ">
									</div><!--col-md-6 end-->
									<!--col-md-6 start-->
									<div class="col-md-6">
										<h3>PPE Kit</h3>
											In this tough covid situation we stand by your side.
											We provide you with personal protective equipment (PPE kit) to prevent the invasion of virus
									</div><!--col-md-6 end-->
									
								</div><!--row end-->
								
							</div><!--card body end-->

					    </div><!--modal body end-->

					</div><!--modal content end-->
					
				</div><!--modal dialog end-->
				
			</div><!-- Button trigger modal-4 end -->
			
	  			<!--row start-->
				<div class="row">
					<!--col-md-6 start-->
					<div class="col-md-6 inner">
						<!--card start-->
						<div class="card text-center x">
							<img src="https://image.freepik.com/free-vector/medical-black-mask-isolated-white-background-doctor-mask-corona-virus-protection-realistic-protective-medical-face-mask-front-side-medical-mask-doctors-patients_7714-723.jpg" class="img-fluid itop">
							<!--card body start-->
							<div class="card-body">
								<h3>Masks</h3>
								<p>Available in wide ranges ( from surgical to fashionable we have all your needs covered )</p>
								<button type="button" class="btn btn-info" data-toggle="modal" data-target="#cc1">Readmore...</button>
							</div><!--card body end-->

						</div><!--card end-->
		
					</div><!--col-md-6 end-->
					
					<!--col-md-6 start-->
					<div class="col-md-6 inner">
						<!--card start-->
						<div class="card text-center x">
							<img src="https://5.imimg.com/data5/CG/VV/VD/SELLER-87556224/dettol-hand-sanitizer-500x500.jpg" class="img-fluid itop">
							<!--card body start-->
							<div class="card-body">
								<h3>Hand Sanitizers</h3>
								<p>We have all sorts of varieties in hand sanitizers including the most promising brands like dettol, lifeboy, Dr.morepen, etc</p>
								<button type="button" class="btn btn-info" data-toggle="modal" data-target="#cc2">Readmore...</button>
							</div><!--card body end-->

						</div><!--card end-->
		
					</div><!--col-md-6 end-->
					
				</div><!--row end-->

				<!--row start-->
				<div class="row">
					<!--col-md-6 start-->
					<div class="col-md-6 inner">
						<!--card start-->
						<div class="card text-center x">
							<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ30tulg5ZlC9VhRyrtmfpnBFPD5u18iahRQw&usqp=CAU"class="img-fluid itop">
							<!--card body start-->
							<div class="card-body">
								<h3>Gloves</h3>
								<p>Keep Yourself safe and your hands free from virus with our varied range of covid 		care gloves, fabricated with utter perfection that keeps your hands protected and 		viruses out of your system ;)
								</p>
								<button type="button" class="btn btn-info" data-toggle="modal" data-target="#cc3">
								Readmore...</button>
							</div><!--card body end-->

						</div><!--card end-->
		
					</div><!--col-md-6 end-->
					
					<div class="col-md-6 inner">
						<!--card start-->
						<div class="card text-center x">
							<img src="https://www.bigvalueshop.com/wp-content/uploads/2020/04/Generic-Laminated-Water-Proof-PPE-Kit.jpg" class="img-fluid itop">
							<!--card body start-->
							<div class="card-body">
								<h3>PPE Kit</h3>
								<p>In this tough covid situation we stand by your side.
									We provide you with personal protective equipment (PPE kit) to prevent the invasion of virus<br><br>
								</p>
								<button type="button" class="btn btn-info" data-toggle="modal" data-target="#cc4">Readmore...</button>
			
							</div><!--card body end-->

						</div><!--card end-->
		
					</div><!--col-md-6 end-->
					
				</div><!--row end-->

		</div><!--container-1 end-->
	</div><!--covid care div end-->

	<div class="container"><!--container2 surgical range slider start-->
		<br><br><h2 class="text-center">Our Surgical Range</h2><br><br>

		<div class="row"><!--row start-->
			<!--carousel slider start-->
			<div class="carousel slide" data-ride="carousel" id="myslide2">
			  	
			  	<!--carousel inner start-->
			  	<div class="carousel-inner">

			  		<!--carousel item-1 start-->
			     	<div class="carousel-item active" data-interval="2000">
		           		
						<img class="img-fluid surimg" src="https://5.imimg.com/data5/YH/XG/EQ/SELLER-4480/3m-littmann-classic-iii-stethoscope-navy-blue-tube-500x500.jpg">
						<img class="img-fluid surimg" src="https://image.shutterstock.com/image-photo/digital-glucometer-lancet-pen-on-260nw-793138105.jpg">
						<img class="img-fluid surimg" src="https://imagesvc.meredithcorp.io/v3/mm/image?q=85&c=sc&poi=face&w=1500&h=1500&url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F12%2F2020%2F06%2F16%2Fbumapo-waterproof-digital-body.jpg">
						<img class="img-fluid surimg" src="https://5.imimg.com/data5/XL/BM/NW/SELLER-11599107/bp-3bg1-dr-morepen-blood-pressure-monitor-500x500.jpg">
					
					</div><!--carousel item-1 end-->

					<!--carousel item-2 start-->
			     	<div class="carousel-item" data-interval="2000">
		           		
						<img class="img-fluid surimg" src="https://5.imimg.com/data5/JS/XX/MY-4762877/single-use-syringe-250x250.jpg">
						<img class="img-fluid surimg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTmMCjxLWVATaXnyZQHbn6ofm2EhMakVxMAzA&usqp=CAU">
						<img class="img-fluid surimg" src="https://d27zlipt1pllog.cloudfront.net/pub/media/catalog/product/d/c/dch0005.jpg">
						<img class="img-fluid surimg" src="https://www.circleone.in/images/products_gallery_images/Kit_Mockup_533_x_315.jpg">
						
					</div><!--carousel item-2 end-->

				</div><!--carousel-inner end-->
				<!--list tag start-->
				<ul class="carousel-indicators">
	     			<li data-target="#myslide2" data-slide-to="0" class="active img"></li>
	     			<li data-target="#myslide2" data-slide-to="1" class="img"></li>
	     		</ul>
	     		<!--list tag end-->
	     		<!--preview anchor tag start-->
		 		<a href="#myslide2" data-slide="prev" class="carousel-control-prev">
		       		<span class="carousel-control-prev-icon"></span>
		    	</a>
		  		<!--preview anchor tag end-->
		  		<!--next slide anchor tag start-->
		    	<a href="#myslide2" data-slide="next" class="carousel-control-next">
		       		<span class="carousel-control-next-icon"></span>
		     	</a> 
		     	<!--next slide anchor tag end-->
			</div><!--	carousel slide end-->
		</div><!--row2 end-->
	</div><!--container2 surgical range slider end-->

	<div><!--top selling products category start-->
		<br><br><h2 class="text-center">Our Top Selling Products</h2><br><br>
		<div class="container"><!--container-3 start-->
				<div class="row"><!--row start-->
					
					<div class="col-md-4"><!--col-md-4 start-->
						<div class="card text-center x"><!--card start-->
							<img src="https://5.imimg.com/data5/JB/XD/VF/SELLER-57304931/azikem-1406057054-10007577-1--500x500.JPG" class="img-fluid ibot">
							<div class="card-body"><!--card body start-->
								
								<h3>Tablets</h3>
								<p>Azikem-500</p>
								<button type="button" class="btn btn-info" data-toggle="modal" data-target="#aa">Readmore...</button>
								
								<div class="modal fade" id="aa"><!-- Button trigger modal-1 start -->
								    <div class="modal-dialog" ><!--modal dialog staart-->
								    	<div class="modal-content"><!--modal content start-->
								        	<div class="modal-header"><!--modal header start-->
								            	<h5 class="modal-title">Tablets</h5>
											        <button type="button" class="close" data-dismiss="modal">
											          <span >&times;</span>
											        </button>
										    </div><!--modal header end-->
									        <div class="modal-body"><!--modal body start-->
									        	<h3 class="text-center text-info">Azikem-500</h3>
												<div class="card-body"><!--card body start-->
													<div class="row"><!--row start-->
														<div class="col-md-6"><!--col-md-6 start-->
															<img src="https://5.imimg.com/data5/JB/XD/VF/SELLER-57304931/azikem-1406057054-10007577-1--500x500.JPG" class="img-fluid">
														</div><!--col-md-6 end-->
														<div class="col-md-6" style="text-align: left"><!--col-md-6 start-->
															Azithromycin 500mg<br><br>
															3 Tablet(s) in a Strip<br>
															Mfr: Alkem Laboratories Ltd<br>
															Country of Origin: NA<br><br>
															<a href="tel:9144480962">
															 	<button class="btn btn-info" data-target="#call">Call now</button>
															</a>
														</div><!--col-md-6 end-->
													</div><!--row end-->
												</div><!--card body end-->
											</div><!--modal body end-->
										</div><!--modal content end-->
									</div><!--modal dialog end-->
								</div><!-- Button trigger modal-1 end -->
							</div><!--card body end-->
						</div><!--card end-->
					</div><!--col-md-4 end-->

					<div class="col-md-4"><!--col-md-4 start-->
						<div class="card text-center x"><!--card start-->
							<img src="https://images-na.ssl-images-amazon.com/images/I/4188QUAOskL._SX466_.jpg" class="img-fluid ibot">
							<div class="card-body"><!--card body start-->
								
								<h3>Capsules</h3>
								<p>MultipreX multivitamin Capsules</p>
								<button type="button" class="btn btn-info" data-toggle="modal" data-target="#bb">Readmore...</button>
								
								<div class="modal fade" id="bb"><!-- Button trigger modal-1 start -->
								    <div class="modal-dialog" ><!--modal dialog staart-->
								    	<div class="modal-content"><!--modal content start-->
								        	<div class="modal-header"><!--modal header start-->
								            	<h5 class="modal-title">Capsules</h5>
											        <button type="button" class="close" data-dismiss="modal">
											          <span >&times;</span>
											        </button>
										    </div><!--modal header end-->
									        <div class="modal-body"><!--modal body start-->
									        	<h3 class="text-center text-info">MultipreX multivitamin Capsules</h3>
												<div class="card-body"><!--card body start-->
													<div class="row"><!--row start-->
														<div class="col-md-6"><!--col-md-6 start-->
															<img src="https://images-na.ssl-images-amazon.com/images/I/4188QUAOskL._SX466_.jpg" class="img-fluid">
														</div><!--col-md-6 end-->
														<div class="col-md-6" style="text-align: left"><!--col-md-6 start-->
															Pmw Multiprex Zee Drugs Multivitamin, Multimineral and Antioxidant Sofgel Capsules
															Brand: Pmw<br>
															In stock.  <br><br>				
															Multivitamin<br>
															Safe to use<br>
															No side effects<br><br>
															<a href="tel:9144480962">
															 	<button class="btn btn-info" data-target="#call">Call now</button>
															</a>
														</div><!--col-md-6 end-->
													</div><!--row end-->
												</div><!--card body end-->
											</div><!--modal body end-->
										</div><!--modal content end-->
									</div><!--modal dialog end-->
								</div><!-- Button trigger modal-1 end -->
							</div><!--card body end-->
						</div><!--card end-->
					</div><!--col-md-4 end-->
				
					<div class="col-md-4"><!--col-md-4 start-->
						<div class="card text-center x"><!--card start-->
							<img src="https://res.cloudinary.com/du8msdgbj/image/upload/l_watermark_346,w_690,h_700/a_ignore,w_690,h_700,c_pad,q_auto,f_auto/v1578077523/udjyle4atrrjrrc4ausc.jpg" class="img-fluid ibot">
							<div class="card-body"><!--card body start-->
								
								<h3>Syrups</h3>
								<p>Lycoenergy syrup</p>
								<button type="button" class="btn btn-info" data-toggle="modal" data-target="#cc">Readmore...</button>
								
								<div class="modal fade" id="cc"><!-- Button trigger modal-1 start -->
								    <div class="modal-dialog" ><!--modal dialog start-->
								    	<div class="modal-content"><!--modal content start-->
								        	<div class="modal-header"><!--modal header start-->
								            	<h5 class="modal-title">Syrups</h5>
											        <button type="button" class="close" data-dismiss="modal">
											          <span >&times;</span>
											        </button>
										    </div><!--modal header end-->
									        <div class="modal-body"><!--modal body start-->
									        	<h3 class="text-center text-info">Lycoenergy syrup</h3>
												<div class="card-body"><!--card body start-->
													<div class="row"><!--row start-->
														<div class="col-md-6"><!--col-md-6 start-->
															<img src="https://res.cloudinary.com/du8msdgbj/image/upload/l_watermark_346,w_690,h_700/a_ignore,w_690,h_700,c_pad,q_auto,f_auto/v1578077523/udjyle4atrrjrrc4ausc.jpg" class="img-fluid">
														</div><!--col-md-6 end-->
														<div class="col-md-6" style="text-align: left"><!--col-md-6 start-->
															LYCOENERGY 225ML SYP<br><br>
															Therapeutic Class<br>
															Minerals ,  Vitamins ,  Enteral/Nutritional Products<br><br>
															<a href="tel:9144480962">
															 	<button class="btn btn-info" data-target="#call">Call now</button>
															</a>
														</div><!--col-md-6 end-->
													</div><!--row end-->
												</div><!--card body end-->
											</div><!--modal body end-->
										</div><!--modal content end-->
									</div><!--modal dialog end-->
								</div><!-- Button trigger modal-1 end -->
							</div><!--card body end-->
						</div><!--card end-->
					</div><!--col-md-4 end-->
				
				</div><!--row end-->

				<div class="row"><!--row start-->
					<div class="col-md-4"><!--col-md-4 start-->
						<div class="card text-center x"><!--card start-->
							<img src="https://images-na.ssl-images-amazon.com/images/I/61tzTgaIG6L._SX466_.jpg" class="img-fluid ibot">
							<div class="card-body"><!--card body start-->
								
								<h3>Protein Powders</h3>
								<p>Whey Protein</p>
								<button type="button" class="btn btn-info" data-toggle="modal" data-target="#dd">Readmore...</button>
								
								<div class="modal fade" id="dd"><!-- Button trigger modal-1 start -->
								    <div class="modal-dialog" ><!--modal dialog staart-->
								    	<div class="modal-content"><!--modal content start-->
								        	<div class="modal-header"><!--modal header start-->
								            	<h5 class="modal-title">Powders</h5>
											        <button type="button" class="close" data-dismiss="modal">
											          <span >&times;</span>
											        </button>
										    </div><!--modal header end-->
									        <div class="modal-body"><!--modal body start-->
									        	<h3 class="text-center text-info">Whey Protein</h3>
												<div class="card-body"><!--card body start-->
													<div class="row"><!--row start-->
														<div class="col-md-6"><!--col-md-6 start-->
															<img src="https://images-na.ssl-images-amazon.com/images/I/61tzTgaIG6L._SX466_.jpg" class="img-fluid">
														</div><!--col-md-6 end-->
														<div class="col-md-6" style="text-align: left"><!--col-md-6 start-->
															Optimum Nutrition (ON) Gold Standard 100% Whey Protein Powder Double Rich Chocolate<br><br>
															Flavour<br>
															<h6 style="font-size: 10px;" class="text-secondary"> Coffee, Delicious Strawberry, Chocolate Mint, Cookies & Cream, Chocolate Hazelnut, Chocolate Peanut Butter, Chocolate Malt, Banana Cream, Rocky Road, Mocha Cappuccino, Vanilla Icecream, French Vanilla Creme, Double Rich Chocolate, Strawberry Banana, Extreme Milk Chocolate</h6>
														
															<a href="tel:9144480962">
															 	<button class="btn btn-info" data-target="#call">Call now</button>
															</a>
														</div><!--col-md-6 end-->
													</div><!--row end-->
												</div><!--card body end-->
											</div><!--modal body end-->
										</div><!--modal content end-->
									</div><!--modal dialog end-->
								</div><!-- Button trigger modal-1 end -->
							</div><!--card body end-->
						</div><!--card end-->
					</div><!--col-md-4 end-->

					<div class="col-md-4"><!--col-md-4 start-->
						<div class="card text-center x"><!--card start-->
							<img src="https://4.imimg.com/data4/HB/EQ/MY-794953/ceftriaxone-injection-500x500.jpg" class="img-fluid ibot">
							<div class="card-body"><!--card body start-->
								
								<h3>Parenteral Injections</h3>
								<p>Ceftriaxone injection</p>
								<button type="button" class="btn btn-info" data-toggle="modal" data-target="#ee">Readmore...</button>
								
								<div class="modal fade" id="ee"><!-- Button trigger modal-1 start -->
								    <div class="modal-dialog" ><!--modal dialog staart-->
								    	<div class="modal-content"><!--modal content start-->
								        	<div class="modal-header"><!--modal header start-->
								            	<h5 class="modal-title">Parenteral Injections</h5>
											        <button type="button" class="close" data-dismiss="modal">
											          <span >&times;</span>
											        </button>
										    </div><!--modal header end-->
									        <div class="modal-body"><!--modal body start-->
									        	<h3 class="text-center text-info">Ceftriaxone injection</h3>
												<div class="card-body"><!--card body start-->
													<div class="row"><!--row start-->
														<div class="col-md-6"><!--col-md-6 start-->
															<img src="https://4.imimg.com/data4/HB/EQ/MY-794953/ceftriaxone-injection-500x500.jpg" class="img-fluid">
														</div><!--col-md-6 end-->
														<div class="col-md-6" style="text-align: left"><!--col-md-6 start-->
															CEFTRIAXONE 1000MG<br><br>
															Mfr: Blue Cross Laboratories Ltd<br>
															Country of Origin: NA
															<br><br>
															<a href="tel:9144480962">
															 	<button class="btn btn-info" data-target="#call">Call now</button>
															</a>
														</div><!--col-md-6 end-->
													</div><!--row end-->
												</div><!--card body end-->
											</div><!--modal body end-->
										</div><!--modal content end-->
									</div><!--modal dialog end-->
								</div><!-- Button trigger modal-1 end -->
							</div><!--card body end-->
						</div><!--card end-->
					</div><!--col-md-4 end-->
					
					<div class="col-md-4"><!--col-md-4 start-->
						<div class="card text-center x"><!--card start-->
							<img src="https://4.imimg.com/data4/WA/FS/ANDROID-45854537/product-500x500.jpeg" class="img-fluid ibot">
							<div class="card-body"><!--card body start-->
								
								<h3>Ointments</h3>
								<p>Omnigel pain relief</p>
								<button type="button" class="btn btn-info" data-toggle="modal" data-target="#ff">Readmore...</button>
								
								<div class="modal fade" id="ff"><!-- Button trigger modal-1 start -->
								    <div class="modal-dialog" ><!--modal dialog staart-->
								    	<div class="modal-content"><!--modal content start-->
								        	<div class="modal-header"><!--modal header start-->
								            	<h5 class="modal-title">Ointments</h5>
											        <button type="button" class="close" data-dismiss="modal">
											          <span >&times;</span>
											        </button>
										    </div><!--modal header end-->
									        <div class="modal-body"><!--modal body start-->
									        	<h3 class="text-center text-info">Omnigel pain relief</h3>
												<div class="card-body"><!--card body start-->
													<div class="row"><!--row start-->
														<div class="col-md-6"><!--col-md-6 start-->
															<img src="https://4.imimg.com/data4/WA/FS/ANDROID-45854537/product-500x500.jpeg" class="img-fluid">
														</div><!--col-md-6 end-->
														<div class="col-md-6" style="text-align: left"><!--col-md-6 start-->
															Cipla Omni Gel Tube (75 g)<br><br>
															<ul>
															<li>For men and women</li>
															<li>Form: gel</li>
															<li>It is Paraben-free</li>
															<li>For skin soothing and pain relief</li></ul>
															<a href="tel:9144480962">
															 	<button class="btn btn-info" data-target="#call">Call now</button>
															</a>
														</div><!--col-md-6 end-->
													</div><!--row end-->
												</div><!--card body end-->
											</div><!--modal body end-->
										</div><!--modal content end-->
									</div><!--modal dialog end-->
								</div><!-- Button trigger modal-1 end -->
							</div><!--card body end-->
						</div><!--card end-->
					</div><!--col-md-4 end-->
					
				</div><!--row end-->
		
		</div><!--container-3 end-->
	</div><!--top selling products category end-->
		
	<br><br><hr><br><br>
	
	<div class="container"><!--container-4 start-->
		<div class="row"><!--row start-->
			<div class="col-md-3"><!--col-md-3 start-->
			</div><!--col-md-3 end-->
			<div class="col-md-4"><!--col-md-4 start-->
				<div class="card box bg-success">
					<div class="card-body">
						<br>
						Here at JMG we have all your needs covered.<br> 
						And so we bring you a variety of products<br>
						<br>				
					</div>
				</div>
			</div><!--col-md-4 end-->
			<div class="col-md-5"><!--col-md-5 start-->
			</div><!--col-md-5 end-->
		</div><!--row end-->
		<div class="row"><!--row start-->
			<div class="col-md-5"><!--col-md-5 start-->
			</div><!--col-md-5 end-->
			<div class="col-md-4"><!--col-md-4 start-->
				<div class="card box bg-light">
					<div class="card-body">
						<br>
						<ul>
						<li>Baby Care Products</li>
						<li>Derma Skin Care</li>
						<li>Women Hygiene/Pregnancy Test Kits </li>
						<li>Personal/Hair Care Products</li>
						<li>Acne/Night Creams and Gels</li>
						<br></ul>
					</div>
				</div>
			</div><!--col-md-4 end-->
			<div class="col-md-3"><!--col-md-3 start-->
			</div><!--col-md-3 end-->
		</div><!--row end-->
		<div class="row"><!--row start-->
			<div class="col-md-3">
			</div>
			<div class="col-md-4">
				<div class="card box bg-info">
					<div class="card-body">
						<br> 
						Your well being is our utmost priority.<br>
						Our goal is to see our customers happy and satisfied.<br>
						Join our family.<br>
						<br>				
					</div>
				</div>
			</div>
			<div class="col-md-5">
			</div>
		</div><!--row end-->
	</div><!--container-4 end-->
	
	<br><br><br>

	<center><!--center start-->

		<div class="container"><!--container-4 start-->
			<h2 class="text-center">Baby Care Products</h2><br>
			<div class="row"><!--row start-->
				<div class="col-md-2 c inner"><!--col-md-2 start-->
					<img src="https://img3.junaroad.com/uiproducts/16896144/zoom_0-1580290583.jpg" class="img-fluid i4">
					<p>Baby Wipes</p>		
				</div><!--col-md-2 end-->
				<div class="col-md-2 c inner"><!--col-md-2 start-->
					<img src="https://cdn.fcglcdn.com/brainbees/images/products/438x531/3282264a.jpg" class="img-fluid i4">
					<p>Milk Bottles (in 3 sizes)</p>
				</div><!--col-md-2 end-->
				<div class="col-md-2 c inner"><!--col-md-2 start-->
					<img src="img/babysoap.jpg" class="img-fluid i4">
					<p>Baby Soaps</p>
				</div><!--col-md-2 end-->
				<div class="col-md-2 c inner"><!--col-md-2 start-->
					<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQIVlGaVQ3sh-Hmvz2VBtPniDFVUPVxemKtxw&usqp=CAU" class="img fluid i4">
					<p>Multiviatmin Drops for babies</p>
				</div><!--col-md-2 end-->
				<div class="col-md-2 c inner"><!--col-md-2 start-->
					<img src="img/babysyrup.jpg" class="img-fluid i4">
					<p>Cough Syrups For Babies</p>
				</div><!--col-md-2 end-->
				<div class="col-md-2 c inner"><!--col-md-2 start-->
					<img src="img/asobiotic.png" class="img-fluid i4">
					<p>Pri Probiotic drops for babies</p>
				</div><!--col-md-2 end-->
			</div><br><br><br><!--row end-->
			<h2 class="text-center">Derma Skin Care Products</h2><br>
			<div class="row"><!--row start-->
				<div class="col-md-2 c inner"><!--col-md-2 start-->
					<img src="https://res.cloudinary.com/du8msdgbj/image/upload/l_watermark_346,w_690,h_700/a_ignore,w_690,h_700,c_pad,q_auto,f_auto/v1529930872/jxxlmvbcrwrcudri4qfc.jpg" class="img-fluid i4">
					<p>Clobenate-GM Cream</p>
				</div><!--col-md-2 end-->
				<div class="col-md-2 c inner"><!--col-md-2 start-->
					<img src="https://images-na.ssl-images-amazon.com/images/I/51EH7MIN1QL.jpg" class="img-fluid i4">
					<p>Sunscreen</p>
				</div><!--col-md-2 end-->
				<div class="col-md-2 c inner"><!--col-md-2 start-->
					<img src="https://rukminim1.flixcart.com/image/312/312/jh3q6q80/soap/c/6/q/2-75-clinsol-soap-pack-of-2-leeford-original-imaf56ggxdvdsua6.jpeg?q=70" class="img-fluid i4">
					<p>Clinsol Soap</p>
				</div><!--col-md-2 end-->
				<div class="col-md-2 c inner"><!--col-md-2 start-->
					<img src="img/kt5.jpg" class="img-fluid i4">
					<p>Kt5 Derma Cream</p>
				</div><!--col-md-2 end-->
				<div class="col-md-2 c inner"><!--col-md-2 start-->
					<img src="https://5.imimg.com/data5/GX/IO/BO/SELLER-3040703/12-250x250.jpg" class="img-fluid i4">
					<p>Dermigen NF Cream </p>
				</div><!--col-md-2 end-->
				<div class="col-md-2 c inner"><!--col-md-2 start-->
					<img src="https://cdn.shopclues.com/images/thumbnails/81201/640/1/135480513-81201581-1521531795.jpg" class="img-fluid i4">
					<p>Mela Bright Soap</p>
				</div><!--col-md-2 end-->
			</div><br><br><br><!--row end-->
			<h2 class="text-center">Women Hygiene/Pregnancy Test Kits</h2><br>
			<div class="row"><!--row start-->
				<div class="col-md-2 c inner"><!--col-md-2 start-->
					<img src="https://condombazaar.com/pub/media/catalog/product/cache/ec1131c962bb39c6b32c9fef29b811b5/p/r/pregakem_pregnancy_test_kit.jpg" class="img fluid i4">
					<p>Pregakem Pregnancy Test</p>
				</div><!--col-md-2 end-->
				<div class="col-md-2 c inner"><!--col-md-2 start-->
					<img src="https://n2.sdlcdn.com/imgs/f/r/8/Growmax-VagiClean-Natural-Intimate-Wash-SDL856876857-1-01f8f.jpg" class="img-fluid i4">
					<p>Clean Wash Growmax</p>
				</div><!--col-md-2 end-->
				<div class="col-md-2 c inner"><!--col-md-2 start-->
					<img src="https://n2.sdlcdn.com/imgs/j/i/h/7-Soft-XXL-40-Sanitary-SDL303713269-1-01fc8.jpg" class="img-fluid i4">
					<p>Sanitary Pads</p>
				</div><!--col-md-2 end-->
				<div class="col-md-2 c inner"><!--col-md-2 start-->
					<img src="img/neem.jpg" class="img-fluid i4">
					<p>Neem Soap for women</p>
				</div><!--col-md-2 end-->
				<div class="col-md-2 c inner"><!--col-md-2 start-->
					<img src="img/multi.jpg" class="img-fluid i4">
					<p>Multivitamin Post Pregnancy syrup</p>
				</div><!--col-md-2 end-->
				<div class="col-md-2 c inner"><!--col-md-2 start-->
					<img src="https://www.pharmabizconnect.com/uploads/product/fe66a2e6e65ef0434dd9cf34b35465e1.jpg" class="img-fluid i4">
					<p>Nari shuda Syrups</p>
				</div><!--col-md-2 end-->
			</div><br><br><br><!--row end-->
			<h2 class="text-center">Personal/Hair Care Products</h2><br>
			<div class="row"><!--row start-->
				<div class="col-md-2 c inner"><!--col-md-2 start-->
					<img src="https://growmaxmedicare.com/uploaded_gal_image/gal_thumbs/acnewell.jpg" class="img-fluid i4" class="img-fluid i4">
					<p>Acne Soap </p>
				</div><!--col-md-2 end-->
				<div class="col-md-2 c inner"><!--col-md-2 start-->
					<img src="https://rukminim1.flixcart.com/image/612/612/k13w4280/shampoo/n/d/q/200-dandruff-treatment-shampoo-zee-drugs-original-imafkrgnzyxqxywy.jpeg?q=70" class="img-fluid i4" class="img-fluid i4">
					<p>keto soap</p>	
				</div><!--col-md-2 end-->
				<div class="col-md-2 c inner"><!--col-md-2 start-->
					<img src="https://in.all.biz/img/in/catalog/706525.jpg" class="img-fluid i4">
					<p>ketoford soap</p>
				</div><!--col-md-2 end-->
				<div class="col-md-2 c inner"><!--col-md-2 start-->
					<img src="https://cpimg.tistatic.com/00396002/b/5/tr:w-300/Denon-Shampoo-Soap.jpg" class="img-fluid i4">
					<p>denon soap</p>
				</div><!--col-md-2 end-->
				<div class="col-md-2 c inner"><!--col-md-2 start-->
					<img src="https://img2.exportersindia.com/product_images/bc-full/dir_104/3093884/parth-aloevera-with-neem-soap-1517311753-3617493.jpeg" class="img-fluid i4">
					<p>Aloe Vera Soap </p>
				</div><!--col-md-2 end-->
				<div class="col-md-2 c inner"><!--col-md-2 start-->
					<img src="https://rukminim1.flixcart.com/image/800/800/jw9ke4w0/hair-oil/y/z/e/300-scabvent-lotion-scabent-original-imafgzneujznybec.jpeg?q=90" class="img-fluid i4">
					<p>Scabvent Lotion</p>
				</div><!--col-md-2 end-->
			</div><br><br><br><!--row end-->
			<h2 class="text-center">Acne/Night Creams and Gels</h2><br>
			<div class="row"><!--row start-->
				<div class="col-md-2 c inner"><!--col-md-2 start-->
					<img src="https://rukminim1.flixcart.com/image/300/300/jh2aqvk0/face-treatment/v/d/x/25-clinsol-gel-pack-of-4-leeford-original-imaf5637kdapgkuf.jpeg?q=90" class="img-fluid i4">
					<p>Clinsol Gel</p>
				</div><!--col-md-2 end-->
				<div class="col-md-2 c inner"><!--col-md-2 start-->
					<img src="https://5.imimg.com/data5/SL/SJ/OG/ANDROID-93974080/product-jpeg-500x500.jpg" class="img-fluid i4">
					<p>Clear Skin Cream</p>
				</div><!--col-md-2 end-->
				<div class="col-md-2 c inner"><!--col-md-2 start-->
					<img src="https://www.azinehealthcare.com/wp-content/uploads/2018/09/quinometcream.png" class="img-fluid i4">
					<p>Quinomet Cream</p>
				</div><!--col-md-2 end-->
				<div class="col-md-2 c inner"><!--col-md-2 start-->
					<img src="https://rukminim1.flixcart.com/image/352/352/jvv9zm80/face-wash/v/2/m/200-skin-shine-charcoal-face-wash-pack-of-2-knoll-original-imafgzmsvkveuyuz.jpeg?q=70" class="img-fluid i4">
					<p>Charcoal Facewash</p>
				</div><!--col-md-2 end-->
				<div class="col-md-2 c inner"><!--col-md-2 start-->
					<img src="https://rukminim1.flixcart.com/image/800/800/jkcwakw0/body-skin-treatment/v/x/9/15-skin-cream-5-pack-dermiford-original-imaf7pmrdryfphxn.jpeg?q=90" class="img-fluid i4">
					<p>New Dermiford Cream</p>
				</div><!--col-md-2 end-->
				<div class="col-md-2 c inner"><!--col-md-2 start-->
					<img src="https://www.netforhealth.com/wp-content/uploads/2017/12/NAFCE.jpeg" class="img-fluid i4">
					<p>Nface Cream</p>
				</div><!--col-md-2 end-->
			</div><!--row end-->
		</div><!--container-4 end-->
		</div><br><br><br><br><br>
	</center><!--center end-->

	<!--footer start-->
	<?php include"footer.php"; ?>
	<!--footer end-->

	<div class="modal fade" id="mymodel"><!-- Button trigger modal-1 start -->
  		<div class="modal-dialog"><!--modal dialog start-->
    		<div class="modal-content"><!--modal content start-->
      			<div class="modal-header bg-dark lg"><!--modal header start-->
			        <h5 class="modal-title text-light">Connect with us</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			    </div><!--modal header end-->
				<div class="modal-body"><!--modal body start-->
			        <h3> JMG team welcomes you!</h3>
				        <a style="color: black;" href="tel:9144480962" target="_blank" rel="noopener noreferrer"><img class="alignnone size-full wp-image-2179" src="https://i.pinimg.com/originals/20/b6/86/20b6860e2f5560e6fae086a51051bdbc.gif" alt="" width="100" height="75">Call us to place an order<br>
						</a>
						<a style="color: black;" href="mailto:sales.jaimaagumano@gmail.com" target="_blank" rel="noopener noreferrer"><img class="alignnone size-full wp-image-2179" src="https://i.pinimg.com/originals/7e/69/ec/7e69eca344ca1465da94d698ded08e8e.gif" alt="" width="100" height="75">Leave a message<br>
						</a>
						<a style="color: black;" href="https://www.google.com/search?q=jai+maa+gumano+medico+%26+surgico%2C+huzrat+pull%2C+lashkar%2C+gwalior%2C+madhya+pradesh&oq=jai+&aqs=chrome.1.69i57j35i39l2j69i59j0i67i457j69i60j69i61j69i60.1899j0j4&sourceid=chrome&ie=UTF-8#lrd=0x3976c5cd1251880d:0x16f46a194cf92c39,1,,," target="_blank" rel="noopener noreferrer"><img class="alignnone size-full wp-image-2179" src="https://raw.githubusercontent.com/Monte9/react-native-ratings/master/resources/airbnb_ratings.gif" alt="" width="100" height="75"> Rate us on google <br>
						</a>
				</div><!--modal body end-->
	
				<div class="modal-body"><!--modal-body start-->
					<div class="card-body bg-dark"><!--card body start-->
						<h3 class="text-light">REQUEST PRODUCTS</h3><br>
										
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
						    
			</div><!--modal content end-->
		</div><!--modal dialog end-->			
	</div><!-- Button trigger modal-1 end -->
		
	<!--script start-->
	<script type="text/javascript">	

		var preloader=document.getElementById('loading');
		function myFunction()//loader - function definition
			{
				preloader.style.display= 'none'; 
			}  	
	</script><!--script end-->

</body>
<!--body tag end-->
</html>