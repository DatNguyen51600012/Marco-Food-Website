<?php

 $conn = mysqli_connect('localhost', 'root', '', 'testing');


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
				<h1> Add Product </h1>
			</center>
			<br>
			<br><br>
		

</form>
							<form action="" method="post" enctype="multipart/form-data">
							<?php 
							if (isset($_POST['Anh'])){
     		$anh = isset($_POST['hinhanh']) ? $_POST['hinhanh'] : '' ;
     		$tname = $_FILES['hinhanh']['name'] ;
     		$tmp_name = $_FILES['hinhanh']['tmp_name'] ;
     		$tmp = explode('.', $tname) ;
     		$duoifile = end($tmp) ;
     		$ten = $tname.'.'.$duoifile ;
     		$path_name = $_SERVER["DOCUMENT_ROOT"].'/marco/img/'.$tname ;
     		$path_upload = move_uploaded_file($tmp_name, $path_name) ;


     	}
				?>
				<center>
							<input type="file"  name="hinhanh"  >
							
        		</center>			
        					</form>


      	<form class="form-wrap text-center" action="" method="post" enctype="multipart/form-data">
<?php
	

                        
     

                                $name = "";
                                $Type = "";
                                $price = "";
                                $describe1 = "";
                                $material = "";
                                $image = "" ;

        //Lấy giá trị POST từ form v
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["name"])) { $name = $_POST['name']; }
        if(isset($_POST["Type"])) { $Type = $_POST['Type']; }
        if(isset($_POST["image"])) { $image = $_POST['image']; }
        if(isset($_POST["price"])) { $price = $_POST['price']; }
         if(isset($_POST["describe1"])) { $describe1 = $_POST['describe1']; }
         if(isset($_POST["material"])) { $material = $_POST['material']; }
     }


   
    
    $sql1 = "UPDATE tbl_product SET name = '".$name."' ,    Type ='".$Type."', price='".$price."' ,    describe1= '".$describe1."' , material= '".$material."',    image = '".$image."' WHERE id=".$_GET['id'];
	
	

    
if (mysqli_query($conn, $sql1)) {
    echo "update success";
} else {
    echo "Update thất bại: " . mysqli_error($conn);
}
mysqli_close($conn);
    





                            ?>



      		<center>


                                <div class="col-lg-12 justify-content-center" style="width: 40%; align-content: center;">
								<input type="text" class="form-control" name="name" placeholder="Name" >
								<br>
								
								<input type="text" class="form-control" name="image" placeholder="Name Image upload (name.type)" >
								<input type="text" class="form-control" name="price" placeholder="Price"  >		
								<input type="text" class="form-control date-picker" name="Type" placeholder="Type" >	
								<input type="text" class="form-control" name="describe1" placeholder="Describe"  >									
										<input type="text" class="form-control" name="material" placeholder="Material"  >					
								<button class="primary-btn text-uppercase mt-20" onclick="pp()" name="TT" type="submit" value="Add"  > Add </button>
                                <script type="text/javascript"> 
        function pp() {
            alert("Added !!") ;
        }
    </script>

</div>
</center>  
							
				<br>
				<br>
			








</body>
</html>