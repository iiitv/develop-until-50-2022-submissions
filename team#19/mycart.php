<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>


                    

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY CART</h1>
            </div>

            <div class="col-lg-9">

                <table class="table">
                    <thead class="text-center">
                    <tr>
                      <th scope="col">S.No</th>
                      <th scope="col">Item Name</th>
                      <th scope="col">Item Price</th>
                      <th scope="col">Quantity</th>
                      <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                            if(isset($_SESSION['cart']))
                            {
                                $total=0;
                                foreach($_SESSION['cart'] as $key => $value)
                                {

                                    $total=$total+($value['Price']);
                                    echo"
                                        <tr>
                                            <td>1</td>
                                            <td>$value[Item_Name]</td>
                                            <td>$value[Price]</td>
                                            <td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='1'></td>
                                            <td>
                                                <form action='cart.php' method='POST'>
                                                <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                                                <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                                </form>
                                            </td>
                                        </tr>
                                    ";    
                                }
                            }
                        ?>
                    
                    </tbody>
                </table>


            </div>

            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                    <h4>Total:</h4>
                    <h5 class="text-right"><?php echo $total ?></h5>
                    <br>
                    <form action="#">
                    
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Cash On Delivery
                            </label>
                        </div>
                        <!-- <ul> -->
                        <!-- <li> -->
                            <button class="btn btn-primary btn-block">Make Purchase</button>
                        <!-- </li> -->
                        <!-- <li><button class="btn btn-primary btn-block"><a href="index.php" class="btn">HOME</button></li>
                        &#8594;</a>
                        </ul> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>