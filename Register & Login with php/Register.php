<?php
if(!isset($_POST['submit'])){
    $name =$_POST['name'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    $conform =$_POST['conform'];
    $con = mysqli_connect("localhost","root","","register-form");
    $ins = "INSERT INTO userregister (name,email,password,conform) VALUES ('$name','$email','$password','$conform')";
    $res = mysqli_query($con,$ins);
    if($res){
        header("location:loginn.php");
    }
    else{
        echo "Not Register";
    } 
}
?>