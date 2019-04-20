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


                <br>
                <br>
                <center>
                    <h1> Our Menu </h1>
                </center>
                

                

                <?php

                $query1 = "SELECT * FROM menu1 WHERE ORDER BY id ";
                $result1 = mysqli_query($connect, $query1);
                if ($result1){
                    while($row1 = mysqli_fetch_array($result1))
                    {

                ?>


                   <center>
                    <h2 style="color: red"> <?php echo $row1["menu"]; ?>  </h2>
                    <h3> <?php echo $row1["mon1"]; ?> </h3>
                     <h3> <?php echo $row1['mon2']; ?>  </h3>
                      <h3> <?php echo $row1['mon3']; ?> </h3>
                       <h3> <?php echo $row1['mon4']; ?> </h3>
                        <h3> <?php echo $row1['mon5']; ?> </h3>
                         <h3> <?php echo $row1['mon6']; ?> </h3>
                          <h3> <?php echo $row1['mon7']; ?> </h3>
                          <h3 style="color: red">  <?php echo $row1['price']; ?>   $ </h3>
                          <h1>sdas</h1>
                    
                </center>
<?php
                    }
                 mysqli_free_result($result1);
                }
                
            ?>
                 

      <input  type="text" name="quantity" value="1" class="form-control col-lg-3 justify-content-center" />


            
            <?php
                $query = "SELECT * FROM tbl_product WHERE Type='Drink' ";
                $result = mysqli_query($connect, $query);
                if(mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_array($result))
                    {
                ?>
            <div class="" style="margin-bottom:80px ;margin-top: 60px; margin-left: 60px ;width: 300px ; height: 400px">
                <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
                    <div style="border:1px solid #333;  border-radius:5px; padding:16px;" align="center">
                       

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
    </script>
              </form>
            

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