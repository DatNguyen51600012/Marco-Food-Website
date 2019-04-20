	

<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "testing");

if(isset($_POST["add_to_cart"]))
{
    if(isset($_SESSION["shopping_cart"]))
    {
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
        if(!in_array($_GET["id"], $item_array_id))
        {
            $count = count($_SESSION["shopping_cart"]);
            $item_array = array(
                'item_id'           =>  $_GET["id"],
                'item_name'         =>  $_POST["hidden_name"],
                'item_price'        =>  $_POST["hidden_price"],
                'item_quantity'     =>  $_POST["quantity"]
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
        }
        else
        {
            echo '<script>alert("Item Already Added")</script>';
        }
    }
    else
    {
        $item_array = array(
            'item_id'           =>  $_GET["id"],
            'item_name'         =>  $_POST["hidden_name"],
            'item_price'        =>  $_POST["hidden_price"],
            'item_quantity'     =>  $_POST["quantity"]
        );
        $_SESSION["shopping_cart"][0] = $item_array;
    }
}

if(isset($_GET["action"]))
{
    if($_GET["action"] == "delete")
    {
        foreach($_SESSION["shopping_cart"] as $keys => $values)
        {
            if($values["item_id"] == $_GET["id"])
            {
                unset($_SESSION["shopping_cart"][$keys]);
                echo '<script>alert("Item Removed")</script>';
                echo '<script>window.location="index.php"</script>';
            }
        }
    }
}

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
			<header id="header">
				<div class="header-top">
					<div class="container">
				  		<div class="row justify-content-center">
						      <div id="logo">
						        <a href="index.php"><img src="img/logo.png" alt="" title="" /></a>
						      </div>
				  		</div>			  					
					</div>
				</div>
				<div class="container main-menu">
					<div class="row align-items-center justify-content-center d-flex">			
				      <nav id="nav-menu-container">
				        <ul class="nav-menu" >
				          <li><a style="font-size: 20px" href="index.php">Home</a></li>
				          <li><a style="font-size: 20px" href="#menu">Store</a></li>
				          <li><a style="font-size: 20px" href="#reversation">Reversation</a></li>
				          <li><a style="font-size: 20px" href="#menu10">Menu</a></li>
                          <li><a style="font-size: 20px" href="loginform.php">Login</a></li>
                          <li><a style="font-size: 20px" href="register.php">Register</a></li>
				          <li class="menu-has-children"><a style="font-size: 20px" href="#menu11">Post Review</a>
				            
				          </li>	
				          		          					          		          
				          <li><a style="font-size: 20px" href="contact.html"></a></li>
				        </ul>
				      </nav><!-- #nav-menu-container -->					      		  
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
							<a href="#menu10" class="primary-btn text-uppercase">Check Our Menu</a>
						</div>
					</div>
				</div>					
			</section>
			<!-- End banner Area -->

			<!-- Start home-about Area -->
			
			<!-- End home-about Area -->			

			<!-- Start menu-area Area -->
            
               
            

                    
            
             <section class="menu-area section-gap" id="menu">
            <div class="container">
                <div class="row d-flex justify-content-center">
                        
                            <div class="title text-center">
                                <h1 class="mb-10" style="font-size: 40px">Our Food Store</h1>
                                <p style="font-size: 25px">Order now !!!.</p>
                            </div>
                        
                    </div>  
  

  <ul class="nav nav-tabs align-items-center justify-content-center d-flex" style="height: 100px;border-radius: 10px ;border :solid;"  >
    <li class="active" ><a style="color: red;font-weight: bold;font-size: 20px;margin-right: 20px" data-toggle="tab" href="#home">All</a></li>
    <li style="border-radius: 1px solid;" ><a style="color: red;font-weight: bold;font-size: 20px;margin-right: 20px" data-toggle="tab" href="#menu1">Fast Food</a></li>
    <li><a style="color: red;font-weight: bold;font-size: 20px;margin-right: 20px" data-toggle="tab" href="#menu2">Breakfast</a></li>
    <li><a style="color: red;font-weight: bold;font-size: 20px;margin-right: 20px" data-toggle="tab" href="#menu3">Lunch</a></li>
    <li><a style="color: red;font-weight: bold;font-size: 20px;margin-right: 20px" data-toggle="tab" href="#menu4">Drink</a></li>
  </ul>
  <br>

  <div class="tab-content " style="border: solid;">

    <div id="home" class="tab-pane fade in active">
      
      <div class="row">
            
            <?php
                $query = "SELECT * FROM tbl_product ORDER BY id ASC";
                $result = mysqli_query($connect, $query);
                if(mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_array($result))
                    {
                ?>
            <div class="" style="border: solid;margin-bottom:80px ;margin-top: 60px; margin-left: 60px ;width: 300px ; height: 500px">
        <form method="post"  action="detail.php?id=<?php echo $row["id"]; ?>"><center><br><button class="btn btn-danger"> detail</button></center></form>
                <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
                    <div style=" #333;  border-radius:5px; padding:16px;" align="center">
                       

                       <a href="" ><h4 class="text-dark" style="font-weight: bold;"><?php echo $row["name"]; ?></h4></a></form>

                        <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>
                        <img src="img/<?php echo $row["image"]; ?>  " style="width: 200px ; height: 170px ; border-radius: 5px" /><br />
                        <br>

                        <h5> Number product :</h5>

                        <input  type="text" name="quantity" value="1" class="form-control col-lg-3 justify-content-center" />

                        <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

                        <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

                        <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-danger" value="Add to Cart" onclick="ppp()" />

                    </div>
                </form>

            </div>
            <?php
                    }
                }
            ?>
            <div style="clear:both"></div>
            <br />
            
        </div>
    
    </div>

    
    <div id="menu1" class="tab-pane fade">
      
      
      <div class="row">
            
            <?php
                $query = "SELECT * FROM tbl_product WHERE Type='Fastfood' ";
                $result = mysqli_query($connect, $query);
                if(mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_array($result))
                    {
                ?>
            <div class="" style="border: solid;margin-bottom:80px ;margin-top: 60px; margin-left: 60px ;width: 300px ; height: 500px">
        <form method="post"  action="detail.php?id=<?php echo $row["id"]; ?>"><center><br><button class="btn btn-danger"> detail</button></center></form>
                <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
                    <div style=" #333;  border-radius:5px; padding:16px;" align="center">
                       

                        <h4 class="text-dark" style="font-weight: bold;"><?php echo $row["name"]; ?></h4>

                        <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>
                        <img src="img/<?php echo $row["image"]; ?>  " style="width: 200px ; height: 170px ; border-radius: 5px" /><br />
                        <br>

                        <h5> Number product :</h5>

                        <input  type="text" name="quantity" value="1" class="form-control col-lg-3 justify-content-center" />

                        <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

                        <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

                        <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-danger" value="Add to Cart" />

                    </div>
                </form>
            </div>
            <?php
                    }
                }
            ?>
            <div style="clear:both"></div>
            <br />
            
        </div>
    </div>
    <div id="menu2" class="tab-pane fade">
      <div class="row">
            
            <?php
                $query = "SELECT * FROM tbl_product WHERE Type='Breakfast' ";
                $result = mysqli_query($connect, $query);
                if(mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_array($result))
                    {
                ?>
            <div class="" style="border: solid;margin-bottom:80px ;margin-top: 60px; margin-left: 60px ;width: 300px ; height: 500px">
        <form method="post"  action="detail.php?id=<?php echo $row["id"]; ?>"><center><br><button class="btn btn-danger"> detail</button></center></form>
                <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
                    <div style=" #333;  border-radius:5px; padding:16px;" align="center">
                       

                        <h4 class="text-dark" style="font-weight: bold;"><?php echo $row["name"]; ?></h4>

                        <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>
                        <img src="img/<?php echo $row["image"]; ?>  " style="width: 200px ; height: 170px ; border-radius: 5px" /><br />
                        <br>

                        <h5> Number product :</h5>

                        <input  type="text" name="quantity" value="1" class="form-control col-lg-3 justify-content-center" />

                        <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

                        <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

                        <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-danger" value="Add to Cart" />

                    </div>
                </form>
            </div>
            <?php
                    }
                }
            ?>
            <div style="clear:both"></div>
            <br />
            
        </div>
    </div>
    <div id="menu3" class="tab-pane fade">
      <div class="row">
            
            <?php
                $query = "SELECT * FROM tbl_product WHERE Type='Lunch' ";
                $result = mysqli_query($connect, $query);
                if(mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_array($result))
                    {
                ?>
            <div class="" style="border: solid;margin-bottom:80px ;margin-top: 60px; margin-left: 60px ;width: 300px ; height: 500px">
        <form method="post"  action="detail.php?id=<?php echo $row["id"]; ?>"><center><br><button class="btn btn-danger"> detail</button></center></form>
                <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
                    <div style=" #333;  border-radius:5px; padding:16px;" align="center">
                       

                        <h4 class="text-dark" style="font-weight: bold;"><?php echo $row["name"]; ?></h4>

                        <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>
                        <img src="img/<?php echo $row["image"]; ?>  " style="width: 200px ; height: 170px ; border-radius: 5px" /><br />
                        <br>

                        <h5> Number product :</h5>

                        <input  type="text" name="quantity" value="1" class="form-control col-lg-3 justify-content-center" />

                        <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

                        <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

                        <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-danger" value="Add to Cart" />

                    </div>
                </form>
            </div>
            <?php
                    }
                }
            ?>
            <div style="clear:both"></div>
            <br />
            
        </div>
    </div>
     <div id="menu4" class="tab-pane fade">
      <div class="row">
            
            <?php
                $query = "SELECT * FROM tbl_product WHERE Type='Drink' ";
                $result = mysqli_query($connect, $query);
                if(mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_array($result))
                    {
                ?>
            <div class="" style="border: solid;margin-bottom:80px ;margin-top: 60px; margin-left: 60px ;width: 300px ; height: 500px">
        <form method="post"  action="detail.php?id=<?php echo $row["id"]; ?>"><center><br><button class="btn btn-danger"> detail</button></center></form>
                <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
                    <div style=" #333;  border-radius:5px; padding:16px;" align="center">
                       

                        <h4 class="text-dark" style="font-weight: bold;"><?php echo $row["name"]; ?></h4>

                        <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>
                        <img src="img/<?php echo $row["image"]; ?>  " style="width: 200px ; height: 170px ; border-radius: 5px" /><br />
                        <br>

                        <h5> Number product :</h5>

                        <input  type="text" name="quantity" value="1" class="form-control col-lg-3 justify-content-center" />

                        <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

                        <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

                        <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-danger" value="Add to Cart" />

                    </div>
                </form>
            </div>
            <?php
                    }
                }
            ?>
            <div style="clear:both"></div>
            <br />
            
        </div>
    </div>
  </div>
</div>



</section>
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
                        }
                    ?>
                    <tr>
                        <td colspan="3" align="right">Total</td>
                        <td align="right">$ <?php echo number_format($total, 2); ?></td>
                        <td> <a href="pay.php?id=<?php echo $values["item_id"]; ?> " > Order </a></td>
                    </tr>
                    <?php
                    }
                    ?>
                        
                </table>
            </div>
            <br>
            <br>
            <br>

            
            <!-- End menu-area Area -->			

			<!-- Start reservation Area -->
			<section class="reservation-area section-gap relative" id="reversation">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-6 reservation-left">
							<h1 class="text-white">Reservation</h1>
							<p class="text-white pt-20">
								Come on our by reversation !!
							</p>
						</div>
						<div class="col-lg-5 reservation-right">
                            <?php
                            
                                $name = "";
                                $email = "";
                                $phonenumber = "";
                                $date = "";
                                $time = "";
                                $menu = "" ;

        //Lấy giá trị POST từ form vừa submit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["name"])) { $name = $_POST['name']; }
        if(isset($_POST["email"])) { $email = $_POST['email']; }
        if(isset($_POST["phonenumber"])) { $phonenumber = $_POST['phonenumber']; }
        if(isset($_POST["date"])) { $date = $_POST['date']; }
         if(isset($_POST["time"])) { $time = $_POST['time']; }
         if(isset($_POST["menu"])) { $menu = $_POST['menu']; }


    //Code xử lý, insert dữ liệu vào table
    $sql = "INSERT INTO reversation1 (name, email, date , time , menu ,phonenumber)
    VALUES ('$name', '$email', '$date' , '$time' , '$menu', '$phonenumber')";
    if (mysqli_query($connect, $sql)) {
        echo "Thêm dữ liệu thành công";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }

    
}




                            ?>
							<form class="form-wrap text-center" action="" method="post" >
                                
								<input type="text" class="form-control" name="name" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" >
								<input type="email" class="form-control" name="email" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'" >
								<input type="text" class="form-control" name="phonenumber" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'" >		
								<input type="text" class="form-control date-picker" name="date" placeholder="Select Date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Select Date'" >	
								<input type="text" class="form-control" name="time" placeholder="Select Time" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Select Time'" >									
								<div class="form-select" id="service-select" >
									<select name="menu">
										<option data-display="">Select Menu</option>
										<option value="1">Menu 1</option>
										<option value="2">Menu 2</option>
										<option value="3">Menu 3</option>
										<option value="4">Menu 4</option>
									</select>
								</div>									
								<button class="primary-btn text-uppercase mt-20" onclick="pp()" >Make Reservation</button>
                                <script type="text/javascript"> 
        function pp() {
            alert("Reversation success !!") ;

        }

        function ppp() {
            alert("Item Added") ;
        }
    </script>
							</form>
						</div>
					</div>
				</div>	
			</section>
<section id="menu10">
			<br>
            <br>
             <center> 
                <h1> Our Menu</h1>
                <br><br>
      <div class="justify-content-center" style="width: 70%" >
       <table class="table">
    <thead>
      <tr>
        <th>Menu</th>
        <th>Price</th>
        <th>1</th>
        <th>2 </th>
        <th>3</th>
        <th> 4</th>
        <th> 5</th>
        <th>6</th>
        <th>7</th>
      </tr>
    </thead>
    <?php
                $query = "SELECT * FROM menu1 ORDER BY id ASC";
                $result = mysqli_query($connect, $query);
                if(mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_array($result))
                    {
                ?>
    <tbody>

      <tr>
        <td><?php echo $row["menu"]; ?></td>
        <td> <?php echo $row["price"]; ?></td>
        <td><?php echo $row["mon1"]; ?></td>
        <td> <?php echo $row["mon2"]; ?></td>
        <td><?php echo $row["mon3"]; ?></td>
        <td><?php echo $row["mon4"]; ?></td>
        <td><?php echo $row["mon5"]; ?></td>
        <td><?php echo $row["mon6"]; ?></td>
        <td><?php echo $row["mon7"]; ?></td>
        <td></td>
      </tr>
      

    </tbody>
<?php
    }
}
?>

  </table>
</div>
</center>
</section>  
            

			<section class="blog-area section-gap" id="menu11">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Post Review</h1>
								<p></p>
							</div>
						</div>
					</div>					
					<div class="row">
                       <?php
                $query = "SELECT * FROM post ORDER BY id ASC";
                $result = mysqli_query($connect, $query);
                if(mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_array($result))
                    {
                ?>
                
						<div class="col-lg-3 col-md-6 col-sm-6 single-blog" >
							
								<img  src="img/<?php echo $row["img"]; ?>"  style="width: 200px ; height: 170px ; border-radius: 5px" >								
							
							<p class="date"> <?php echo $row["date"];  ?> </p>
							<a href="preview.php?id=<?php echo $row["id"] ?>"><h4><?php echo $row["name"];  ?>
						      </h4></a>
							<p>
								<?php echo $row["content1"]; ?>
							</p>
							<div class="meta-bottom d-flex justify-content-between">
								
							</div>									
						</div>
						<?php
                        }
                        }
                        ?> 

                    </div>



				</div>	
			</section>
			<!-- End blog Area -->							
           
			<!-- start footer Area -->		
			<footer class="footer-area">
				<div class="footer-widget-wrap">
					<div class="container">
						<div class="row section-gap">
							<div class="col-lg-4  col-md-6 col-sm-6">
								<div class="single-footer-widget">
									<h4>Opening Hours</h4>
									<ul class="hr-list">
										<li class="d-flex justify-content-between">
											<span>Monday - Friday</span> <span>08.00 am - 10.00 pm</span>
										</li>
										<li class="d-flex justify-content-between">
											<span>Saturday</span> <span>08.00 am - 10.00 pm</span>
										</li>
										<li class="d-flex justify-content-between">
											<span>Sunday</span> <span>08.00 am - 10.00 pm</span>
										</li>																				
									</ul>
								</div>
							</div>
							<div class="col-lg-4  col-md-6 col-sm-6">
								<div class="single-footer-widget">
									<h4>Contact Us</h4>
									<p>
										56/8, Nguyen Van Linh Street , HCM City
									</p>
									<p class="number">
										015464894984984 <br>
										065465465465465
									</p>
								</div>
							</div>						
							<div class="col-lg-4  col-md-6 col-sm-6">
								<div class="single-footer-widget">
									<h4>Newsletter</h4>
									<p>You can trust us. we only send promo offers, not a single spam.</p>
									<div class="d-flex flex-row" id="mc_embed_signup">


										 
									</div>
								</div>
							</div>						
						</div>					
					</div>					
				</div>
				<div class="footer-bottom-wrap">
					<div class="container">
						<div class="row footer-bottom d-flex justify-content-between align-items-center">
							<p class="col-lg-8 col-mdcol-sm-6 -6 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href=" target="_blank">My restaurant</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
							<ul class="col-lg-4 col-mdcol-sm-6 -6 social-icons text-right">
	                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
	                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
	                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
	                            <li><a href="#"><i class="fa fa-behance"></i></a></li>           
	                        </ul>
						</div>						
					</div>
				</div>
			</footer>
			<!-- End footer Area -->	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>		
 			<script src="js/jquery-ui.js"></script>					
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>					
			<script src="js/owl.carousel.min.js"></script>			
            <script src="js/isotope.pkgd.min.js"></script>								
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
		
	</html>