<?php
$con=mysqli_connect('localhost','root');

if($con)
{
    echo"Conenction Succcesful";

}
else{
    echo"No connection";
}

mysqli_select_db($con,' e-comerce-website');

$email=$_POST['email'];
$password=$_POST['password'];

$query="insert into userinfidata(email, password) values ('$email','$password')";

mysqli_query($con,$query);
?>