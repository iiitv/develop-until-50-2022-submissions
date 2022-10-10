<!-- <?php
$con=mysqli_connect('localhost','root');

// if($con)
// {
//     echo"Conenction Succcesful";

// }
// else{
//     echo"No connection";
// }

mysqli_select_db($con,'userdata');

$user = $_POST['user'];
$password = $_POST['password'];

$query=" insert into userdetails(user, password) 
values ('$user','$password') ";

mysqli_query($con,$query);
?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Mykart-Ecommerce Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="utils.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/bdd3ad9fde.js" crossorigin="anonymous"></script>
<!-- <link rel="icon" type="image/x-icon" href="/images/favicon.ico"> -->
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="navbar"  style="position: sticky; background-color: palegoldenrod;">
                <div class="logo">
                    <!-- <a href="index.php"> -->
                        <img src="images/img.png" width="200px">
                    <!-- </a> -->
                </div>
                <nav>
                <!-- class="scroll" -->
                    <ul id="MenuItems" >
                        <!-- <li><a href="index2.php">Home</a></li> -->
                        <!-- <li><a href="products.php">Products</a></li> -->
                        <li> <div class="dropdown  ">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Products
                                </button>
                            <ul class="dropdown-menu scroll " aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item " href="men.php">Men's Top wear</a></li>
                                <li><a class="dropdown-item " href="womenwear.php">Women Western</a></li>
                                <li><a class="dropdown-item " href="kids.php">Kids</a></li>
                                <li><a class="dropdown-item " href="electronic.php">Electronics</a></li>
                                <li><a class="dropdown-item " href="homeAppliance.php">Home Appliances</a></li>
                                <li><a class="dropdown-item " href="Shoes.php">Shoes</a></li>
                            </ul>
                            </div></li>
                        <li><a href="about.php">About</a></li>
                        <!-- <li><a href="">Contact</a></li> -->
                        <li><a href="account.php">Account</a></li>
                       <li> <a href="mycart.php" class="bag">
                    <img src="images/bag.png" width="30px" height="30px">Cart
                </a></li>
                    </ul>
                </nav>
                <div><img src="images/switch2.png" class="menu-icon scroll " onclick="menutoggle()">
                    </div>
                    

                

            </div>
            <div class="row">
                <div class="col-2">
                    <h1>
                       Get your new Outfet! <br> A New Style!
                    </h1>
                    <p>
                       Big Day off . Get upto 70% of discount
                    </p>
                    <a href="" class="btn">Get Now
                        &#8594;</a>

                </div>
                <div class="col-2">
                    <img src="images/cloth.jpg" >
                </div>
            </div>
        </div>
    </div>
    <!-------------feature categories------->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="images/shoes.jpg">
                </div>
                <div class="col-3">
                    <img src="images/watch.jpg">
                </div>
                <div class="col-3">
                    <img src="images/menwearing.jpg"-3.jpg">
                </div>
            </div>
        </div>
    </div>

    <div class="small-container">
        <h2 class="title">
            Best Seller
        </h2>
        <div class="row">
            <div class="col-4">
                <!-- <a href="productdetail.html"> -->
                    <img src="images/tshirt.jpg">
                </a>
                <!-- <a href="productdetail.html"> -->
                    <h4>Black Printed T-Shirt</h4>
                </a>
                
                <div class="rating">
                <form action="cart.php" method="POST">
                    <!-- for adding star cdn link-> font awesome 4cdn by stackpath -->
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <!-- <i class="fa-light fa-star-of-life"></i> -->
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                     <i><button type="submit" name="Add_To_Cart" class="btn btn-info mx-5 ">Add to cart</button></i>
                     <input type="hidden" name="Item_Name" value="Black Printed T-Shirt">
                    <input type="hidden" name="Price" value="300">
                    </form>
                </div>
                <p> 300 Rs.</p>
            </div>
            <div class="col-4">
                <img src="images/hodi.jpg">
                <h4>Red black Hodi</h4>
                <div class="rating">
                <form action="cart.php" method="POST">
                    <!-- for adding star cdn link-> font awesome 4cdn by stackpath -->
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                     <i><button type="submit" name="Add_To_Cart" class="btn btn-info mx-5">Add to cart</button></i>
                     <input type="hidden" name="Item_Name" value="Red black Hodi">
                    <input type="hidden" name="Price" value="600">
                    </form>
                </div>
                <p> 600 Rs.</p>
            </div>
            <div class="col-4">
                <img src="images/hodi2.jpg">
                <h4>Black white Hodi</h4>
                <div class="rating">
                <form action="cart.php" method="POST">
                    <!-- for adding star cdn link-> font awesome 4cdn by stackpath -->
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                     <i><button type="submit" name="Add_To_Cart" class="btn btn-info mx-5">Add to cart</button></i>
                     <input type="hidden" name="Item_Name" value="Black white Hodi">
                    <input type="hidden" name="Price" value="950">
                    </form>
                </div>
                <p> 950 Rs.</p>
            </div>
            <div class="col-4">
                <img src="images/shirt.jpg">
                <h4>white palne shirt</h4>
                <div class="rating">
                    <form action="cart.php" method="POST">
                    <!-- for adding star cdn link-> font awesome 4cdn by stackpath -->
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                     <i><button  type="submit" name="Add_To_Cart"class="btn btn-info mx-5">Add to cart</button></i>
                     <input type="hidden" name="Item_Name" value="white palne shirt">
                    <input type="hidden" name="Price" value="500">
                    </form>
                </div>
                <p> 500 Rs.</p>
            </div>
        </div>
        <h2 class="title">
            Latest Products
        </h2>
        <div class="row">
            <div class="col-4">
                <img src="images/men25.webp">
                <h4>Black shirt</h4>
                <div class="rating">
                <form action="cart.php" method="POST">
                    <!-- for adding star cdn link-> font awesome 4cdn by stackpath -->
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i><button type="submit" name="Add_To_Cart" class="btn btn-primary mx-5">Primary</button></i>
                    <input type="hidden" name="Item_Name" value="Black shirt">
                    <input type="hidden" name="Price" value="750">
                    </form>
                </div>
                <p> 750 Rs.</p>
            </div>
            <div class="col-4">
                <img src="images/womendress.jpg">
                <h4>Red Hodi</h4>
                <div class="rating">
                <form action="cart.php" method="POST">
                    <!-- for adding star cdn link-> font awesome 4cdn by stackpath -->
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                     <i><button type="submit" name="Add_To_Cart" type="button" class="btn btn-info mx-5">Add to cart</button></i>
                     <input type="hidden" name="Item_Name" value="Red Hodi">
                    <input type="hidden" name="Price" value="650">
                    </form>
                </div>
                <p> 650 Rs.</p>
            </div>
            <div class="col-4">
                <img src="images/jacketfemale.jpg">
                <h4>Black jacket</h4>
                <div class="rating">
                <form action="cart.php" method="POST">
                    <!-- for adding star cdn link-> font awesome 4cdn by stackpath -->
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i><button type="submit" name="Add_To_Cart" class="btn btn-info mx-5">Add to cart</button></i>
                    <input type="hidden" name="Item_Name" value="Black jacket">
                    <input type="hidden" name="Price" value="1000">
                    </form>
                </div>
                <p> 1000 Rs.</p>
            </div>
            <div class="col-4">
                <img src="images/jaketkis.jpg">
                <h4>cloth for boy</h4>
                <div class="rating">
                <form action="cart.php" method="POST">
                    <!-- for adding star cdn link-> font awesome 4cdn by stackpath -->
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i><button type="submit" name="Add_To_Cart"  class="btn btn-info mx-5">Add to cart</button></i>
                    <input type="hidden" name="Item_Name" value="cloth for boy">
                    <input type="hidden" name="Price" value="650">
                    </form>
                </div>
                <p> 650 Rs.</p>
            </div>
        </div>
        


        <footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-white" href="#">myekart.com</a>
  </div>
  <!-- Copyright -->


</footer>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";
        MenuItems.style.background="palegoldenrod";
        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "400px";
            }
            else {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>
    
</body>
</html>