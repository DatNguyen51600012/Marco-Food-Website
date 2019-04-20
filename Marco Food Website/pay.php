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
				<h1> Order </h1>
			</center>
			<br>
			<br><br>

<br>
<br>
<h3 style="margin-left: 140px" > <img style="width: 40px;height: 35px" src="img\cartt.png">  Your Cart :</h3>
<br>

			<div class="table-responsive col-lg-10 justify-content-center" style="margin-left: 140px">
                <table class="table table-bordered">
                    <tr>
                        <th width="40%">Item Name</th>
                        <th width="10%">Quantity</th>
                        <th width="20%">Price</th>
                        <th width="15%">Total</th>
                        <th width="5%">Action</th>
                    </tr>
                    <?php
                    if(!empty($_SESSION["shopping_cart"]))
                    {
                        $total = 0;
                        foreach($_SESSION["shopping_cart"] as $keys => $values)
                        {
                    ?>
                    <tr>
                        <td><?php echo $values["item_name"]; ?></td>
                        <td><?php echo $values["item_quantity"]; ?></td>
                        <td>$ <?php echo $values["item_price"]; ?></td>
                        <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
                        <td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
                    </tr>
                    <?php
                            $total = $total + ($values["item_quantity"] * $values["item_price"]);
                            $item_quantity = $values["item_quantity"]  ;
                            $item_name = $values["item_name"] ;
                        }
                    ?>
                    <tr>
                        <td colspan="3" align="right">Total</td>
                        <td align="right">$ <?php echo number_format($total, 2); ?></td>
                        <td> <a href="pay.php?id=<?php echo $values["item_id"]; ?> " >  </a></td>
                    </tr>
                    <?php
                    }
                    ?>
                        
                </table>
            </div>
            <center>
            <div  class="col-lg-12 justify-content-center" style="width: 40%; align-content: center;">
            	<?php
                            
                                $name = "";
                                $email = "";
                                $phonenumber = "";
                                $address = "";
                                $totalprice = $total;

                                
        //Lấy giá trị POST từ form vừa submit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["name"])) { $name = $_POST['name']; }
        if(isset($_POST["email"])) { $email = $_POST['email']; }
        if(isset($_POST["phonenumber"])) { $phonenumber = $_POST['phonenumber']; }
        if(isset($_POST["address"])) { $address = $_POST['address']; }
       

    //Code xử lý, insert dữ liệu vào table
    $sql = "INSERT INTO donhang (name, email, phonenumber ,address, pricetotal , nameproduct ,quantity)
    VALUES ('$name', '$email', '$phonenumber' , '$address' , '$totalprice', '$item_name', '$item_quantity' )";
    if (mysqli_query($connect, $sql)) {
        echo "Thêm dữ liệu thành công";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }

    
}




                            ?>
            <form class="form-wrap text-center" action="" method="post" >
                                
								<input type="text" class="form-control" name="name" placeholder="Your Name" >
								<input type="email" class="form-control" name="email" placeholder="Your email">
								<input type="text" class="form-control" name="phonenumber" placeholder="Phone Number"  >		
								
								<input type="text" class="form-control" name="address" placeholder="Your addrss"  >									
															
								<button class="primary-btn text-uppercase mt-20" onclick="pp()" >Order</button>
                                <script type="text/javascript"> 
        function pp() {
            alert("Order success !!") ;
        }
    </script>
							</form>
						</div>

			</center>
			<br>
			<br>
			</body>
			</html>