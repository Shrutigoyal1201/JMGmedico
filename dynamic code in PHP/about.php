<?php include"header.php" ?>




<link rel="stylesheet" type="text/css" href="css/about.css">

	<!--container-fluid start-->
	<div class="container-fluid">

		<?php 
				include "dbcon.php";

				$s="SELECT*FROM abouth";
				$q=mysqli_query($con,$s);
				$r=mysqli_fetch_array($q);
			?>
		<div class="row"><!--row start-->
			<div class="col-md-2"><!--col-md-2 start-->
			</div><!--col-md-2 end-->
			<div class="col-md-10"><!--col-md-10 start-->
				<img src="admin/<?php echo $r['image']?>" class="w-100 b">
			</div><!--col-md-10 end-->
		</div><!--row end-->
		<div class="row" style="height: 500px;"><!--row start-->
			<div class="col-md-2 mis"><!--col-md-2 start-->
			</div><!--col-md-2 end-->

			<div class="col-md-8"><!--col-md-8 start-->
				<h1><?php echo $r['title']?></h1><br>
				<p>
					<?php echo $r['des']?>
				</p>
			</div><!--col-md-8 end-->
		</div><!--row end-->
		<br><br>
		<div class="row"><!--row start-->
			<div class="col-md-8"><!--col-md-8 start-->
				<img src="https://www.iengineksa.com/wp-content/uploads/2018/01/Banner_OurTeam.jpg" class="w-100">
			</div><!--col-md-8 end-->
			<div class="col-md-4 team"><!--col-md-4 start-->
			</div><!--col-md-4 end-->
		</div><!--row end-->



		<?php 
				include "dbcon.php";

				$s="SELECT*FROM aboutteam";
				$q=mysqli_query($con,$s);
				$r=mysqli_fetch_array($q);
			?>
		<div class="row"><!--row start-->
			<div class="col-md-1"><!--col-md-1 start-->
			</div><!--col-md-1 end-->
			<div class="col-md-6"><!--col-md-6 start-->
				<br><br>
				<h1><?php echo $r['title']?></h1>
			</div><!--col-md-6 end-->
			<div class="col-md-5"><!--col-md-5 start-->
			</div><!--col-md-5 end-->
		</div><!--row end-->

		<?php 
				include "dbcon.php";

				$s="SELECT*FROM aboutteam";
				$q=mysqli_query($con,$s);
				while($res=mysqli_fetch_array($q))
				{
			?>
		<div class="row"><!--row start-->
			<div class="col-md-1"><!--col-md-1 start-->
			</div><!--col-md-1 end-->
			<div class="col-md-6"><!--col-md-6 start-->
				<br><br>
				<h4 ><?php echo $res['subtitle']?></h4>
				<br>
				<p> <?php echo $res['des']?>
				</p>
			</div><!--col-md-6 end-->
			<div class="col-md-1"><!--col-md-1 start-->
			</div><!--col-md-1 end-->
			<div class="col-md-4"><!--col-md-4 start-->
				<center>
				<div class="box"><!--box start-->
				<img src="admin/<?php echo $res['image']?>"  class="img-fluid i" alt="222">
					<div class="box-content text-light"><!--box-content start-->
						<h4><?php echo $res['subtitle'] ?></h4>
						<br>
						<h6><?php echo $res['subdes'] ?> </h6>
			        </div><!--box-content end-->
				</div><!--box end-->
			</center>
			</div><!--col-md-4 end-->
		</div><!--row end-->
		<?php 
				}

		?>

		<br><br>

		<div class="row" style="height: 200px;"><!--row start-->
			<div class="col-md-1" style="background-color:#51E2F5;">
			</div>
			<div class="col-md-1" style="background-color:#9DF9EF;">
			</div>
			<div class="col-md-3" style="background-color:#EDF7F6;">
			</div>
			<div class="col-md-3" style="background-color:#FFABB6">
			</div>
			<div class="col-md-4" style="background-color:#A28089">
			</div>
		</div><!--row end-->
		<div class="row"><!--row start-->
			<div class="col-md-2"><!--col-md-2 start-->
			</div><!--col-md-2 end-->
			<div class="col-md-5"><!--col-md-5 start-->
				<center>
				<br><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.9643058646284!2d78.15252451502995!3d26.19783938344067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3976c5cd1251880d%3A0x16f46a194cf92c39!2sJai%20Maa%20Gumano%20Medico%20%26%20Surgico!5e0!3m2!1sen!2sin!4v1602237514641!5m2!1sen!2sin"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="map"></iframe>
				</center>
			</div><!--col-md-5 end-->
			<div class="col-md-1"><!--col-md-1 start-->
			</div><!--col-md-1 end-->
			<div class="col-md-4"><!--col-md-4 start-->

			<?php 
				include "dbcon.php";

				$s="SELECT*FROM aboutloc";
				$q=mysqli_query($con,$s);
				$r=mysqli_fetch_array($q);
			?>
				<br><br>
				<h1><?php echo $r['title'] ?></h1><br><br>
				<p><?php echo $r['des'] ?>/p>
				<br><br><br>
			</div><!--col-md-4 end-->
		</div><!--row end-->
		<div class="row" style="height: 200px;"><!--row start-->
			<div class="col-md-4" style="background-color:#51E2F5;">
			</div>
			<div class="col-md-3" style="background-color:#9DF9EF;">
			</div>
			<div class="col-md-3" style="background-color:#EDF7F6;">
			</div>
			<div class="col-md-1" style="background-color:#FFABB6">
			</div>
			<div class="col-md-1" style="background-color:#A28089">
			</div>
		</div><!--row end-->
		<br><br><br>
		<div class="row"><!--row start-->
			<?php 
				include "dbcon.php";

				$s="SELECT*FROM aboutf";
				$q=mysqli_query($con,$s);
				$r=mysqli_fetch_array($q);
			?>
			<div class="col-md-4 col-sm-2"><!--col-md-4 start-->
				<center>
					<br>
				<img src="admin/<?php echo $r['image'] ?>" class="img-fluid i1">
				</center>
			</div><!--col-md-4 end-->
			<div class="col-md-7"><!--col-md-7 start-->
				<br><br>
				<h2> <?php echo $r['title'] ?></h2><br>
				<p><?php echo $r['des'] ?>
				</p>
			</div><!--col-md-7 end-->
		</div><!--row end-->
	</div><!--container-fluid end-->

	<br><br><br>
	<!--footer start-->
	<?php include"footer.php"; ?>
	<!--footer end-->


</body>
</html>