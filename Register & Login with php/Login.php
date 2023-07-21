<?php
if(!isset($_POST['submit'])){
    $email =$_POST['email'];
    $password =$_POST['password'];
    $con = mysqli_connect("localhost","root","","register-form");
    $ins = "SELECT * FROM userregister WHERE(email = '$email')AND(password='$password')";
    $res=mysqli_query($con,$ins);
    $out=mysqli_num_rows($res);
    if($out){
        echo "Success";
    }
    else{
        echo "Failed";
    }
}
?>