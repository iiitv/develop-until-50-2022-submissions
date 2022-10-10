


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Electronics</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="utils.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/bdd3ad9fde.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="header2">
        <div class="container">
            <div class="navbar"  style=" background-color: palegoldenrod;">
                <div class="logo">
                    <a href="index.php">
                        <img src="images/img.png" width="200px">
                    </a>
                </div>
                <nav>
                <!-- class="scroll" -->
                    <ul id="MenuItems" >
                        <li><a href="index2.php">Home</a></li>
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
                        <li><a href="">Account</a></li>
                       <li> <a href="mycart.php" class="bag">
                    <img src="images/bag.png" width="30px" height="30px">Cart
                </a></li>
                    </ul>
                </nav>
                <div><img src="images/switch2.png" class="menu-icon scroll " onclick="menutoggle()">
                    </div>
                    

                

            </div>
            <div class="mover" style="background-color: aliceblue;" >
                <div id="carouselExampleControls" class="carousel slide  " data-bs-ride="carousel">
                    <div class="carousel-inner ">
                    <div class="carousel-item active  ">
                    <img src="images/electronics1.webp" alt="...">
                 
                    </div>
                    <div class="carousel-item ">
                    <img src="images/electronics10.webp" alt="...">
                    
                    </div>
                    <div class="carousel-item ">
                    <img src="images/electronics3.webp"  alt="...">
                   
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
            </div>
        </div>
    </div>
    
    <!-------------feature categories------->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="images/electronics4.webp">
                </div>
                <div class="col-3">
                    <img src="images/electronics5.webp">
                </div>
                <div class="col-3">
                    <img src="images/electronics14.webp"-3.jpg">
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
                    <img src="images/electronics6.webp">
                <!-- </a> -->
                <a href="productdetail.html">
                    <h4>HP Printer</h4>
                </a>
                
                <div class="rating">
                    <!-- for adding star cdn link-> font awesome 4cdn by stackpath -->
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                     <i><button type="button" class="btn btn-info mx-5">Add to cart</button></i>
                </div>
                <p> 5000 Rs.</p>
            </div>
            <div class="col-4">
                <img src="images/electronics7.webp" style="width: 53%;">
                <h4>Mi powerbank</h4>
                <div class="rating">
                    <!-- for adding star cdn link-> font awesome 4cdn by stackpath -->
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                     <i><button type="button" class="btn btn-info mx-5">Add to cart</button></i>
                </div>
                <p> 1000 Rs.</p>
            </div>
            <div class="col-4">
                <img src="images/electronics8.webp">
                <h4>Callmate powerbank</h4>
                <div class="rating">
                    <!-- for adding star cdn link-> font awesome 4cdn by stackpath -->
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                     <i><button type="button" class="btn btn-info mx-5">Add to cart</button></i>
                </div>
                <p> 950 Rs.</p>
            </div>
            <div class="col-4">
                <img src="images/electronics9.webp">
                <h4>Powerbank</h4>
                <div class="rating">
                    <!-- for adding star cdn link-> font awesome 4cdn by stackpath -->
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                     <i><button type="button" class="btn btn-info mx-5">Add to cart</button></i>
                </div>
                <p> 500 Rs.</p>
            </div>
        </div>
        <h2 class="title">
            Latest Products
        </h2>
        <div class="row">
            <div class="col-4">
                <img src="images/electronics10.webp" style="width: 57%;"">
                <h4>Excluisve Watch</h4>
                <div class="rating">
                    <!-- for adding star cdn link-> font awesome 4cdn by stackpath -->
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                     <i><button type="button" class="btn btn-info mx-5">Add to cart</button></i>
                </div>
                <p> 1550 Rs.</p>
            </div>
            <div class="col-4">
                <img src="images/electronics11.webp" style="width: 40%;"">
                <h4>Realme Powerbank</h4>
                <div class="rating">
                    <!-- for adding star cdn link-> font awesome 4cdn by stackpath -->
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                     <i><button type="button" class="btn btn-info mx-5">Add to cart</button></i>
                </div>
                <p> 750 Rs.</p>
            </div>
            <div class="col-4">
                <img src="images/electronics12.webp">
                <h4>All in one powerbank</h4>
                <div class="rating">
                    <!-- for adding star cdn link-> font awesome 4cdn by stackpath -->
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                     <i><button type="button" class="btn btn-info mx-5">Add to cart</button></i>
                </div>
                <p> 500 Rs.</p>
            </div>
            <div class="col-4">
                <img src="images/electronics13.webp">
                <h4>Intex Speaker </h4>
                <div class="rating">
                    <!-- for adding star cdn link-> font awesome 4cdn by stackpath -->
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                     <i><button type="button" class="btn btn-info mx-5">Add to cart</button></i>
                </div>
                <p> 6500 Rs.</p>
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