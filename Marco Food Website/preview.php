<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "testing");



?>
<!DOCTYPE html>


	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Restaurant</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/jquery-ui.css">				
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">				
			<link rel="stylesheet" href="css/main.css">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.1.3/materia/bootstrap.min.css">
        <link href="G:/xampp/htdocs/marco/lib/css/simple_cart.css" rel="stylesheet">
        <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
       

    <!-- Include Bootstrap CSS -->
    
    
    <!-- Include SmartCart CSS -->
    <link href="G:/xampp/htdocs/marco/dist/css/smart_cart.min.css" rel="stylesheet" type="text/css" />
		</head>
		<body>	
			<header id="">
				<div class="header-top">
					<div class="container">
				  		<div class="row justify-content-center">
						      <div id="logo">
						        <a href="index.php"><img src="img/logo.png" alt="" title="" /></a>
						      </div>
				  		</div>			  					
					</div>
				</div>
				
			</header><!-- #header -->
			
			<!-- start banner Area -->
			<section class="banner-area">		
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between">
						<div class="col-lg-12 banner-content">
							<h6 class="text-white">Wide Options of Choice</h6>
							<h1 class="text-white">HD Restaurant</h1>
							<p class="text-white">
                                Welcome 
								Inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women.
							</p>
							
						</div>
					</div>
				</div>					
			</section>
			<br>
			<br>
			<center>
				<h1> Preview </h1>
			</center>
			<div class="section-top-border">
						
						<div >
							<?php 
								$u = $_GET['id'];
								$sqldetail = 'SELECT * FROM post WHERE id='.$_GET['id']  ;
								$result = mysqli_query($connect,$sqldetail) ;
								$data = mysqli_fetch_array($result) ;


							?>
							<center>
								<img  src="img/<?php echo $data["img"]; ?>"  style=" width: 400px ; height:350px"   >
							</center>
							

							<center>	<h1 style="font-size: 40px;"> <?php echo $data[1] ?> </h1> </center>
							<center>	<h3 style="font-size: 20px;color: red"> Date : <?php echo $data[5] ?> </h3> </center>
							<center>	<h3 style="font-size: 20px;color: red"> Grade : <?php echo $data[4] ?> </h3> </center>

								<center >	<h3 style="width: 70%;font-size: 20px;"> <?php echo $data[2] ?> </h3> </center>
   
							
						</div>
					</div>



		</body>
		</html>