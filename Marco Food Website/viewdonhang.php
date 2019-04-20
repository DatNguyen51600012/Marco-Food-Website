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
						        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
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
				<h1> Welcome to Admin page </h1>
			</center>
			<br>
			<br><br>

			<div class="container main-menu" style="width: 90%">
					<div class="row align-items-center justify-content-center d-flex">			
				      <nav id="nav-menu-container" style="background-color: rgb(80,80,80);">
				        <ul class="nav-menu" >
				          <li><a style="font-size: 20px; color: red ;" href="admin.php"> Product</a></li>
				          
				          <li><a style="font-size: 20px; color: red ;" href="viewdonhang.php"> Order </a></li>
				          
				          
				          	 <li ><a style="font-size: 20px; color: red ;" href="review.php"> Post Preview</a>
				            
				          </li>	
				            
				          </li>	
				          		          					          		          
				         
				        </ul>
				      </nav><!-- #nav-menu-container -->					      		  
					</div>
				</div>
			</li>
		</ul>
	</nav></div>
			<br>
			<center>
				<h1> Order detail </h1>
			</center>
			<br>
			<br><br>


<center> 
      <div class="justify-content-center" style="width: 70%" >
       <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Phonenumber </th>
        <th>Pricetotal</th>
        <th> Nameproduct</th>
        <th> quantity</th>
      </tr>
    </thead>
	<?php
                $query = "SELECT * FROM donhang ORDER BY id ASC";
                $result = mysqli_query($connect, $query);
                if(mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_array($result))
                    {
                ?>
    <tbody>

      <tr>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["address"]; ?></td>
        <td> <?php echo $row["phonenumber"]; ?></td>
        <td><?php echo $row["pricetotal"]; ?></td>
        <td><?php echo $row["nameproduct"]; ?></td>
        <td><?php echo $row["quantity"]; ?></td>
        
      </tr>
      

    </tbody>
<?php
	}
}
?>

  </table>
</div>
</center>  
<br>
<br>
        

			


		</body>
		</html>
