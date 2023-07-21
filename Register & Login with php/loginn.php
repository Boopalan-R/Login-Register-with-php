<?php
$con = mysqli_connect("localhost","root","","register-form");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Document</title>
    <style>
         .login{
            margin: auto;
            width: 500px;
            margin-top: 00px;
            padding: 10px;
        }
        .signup{
            background: lightblue;
            padding: 20px;
            border-radius: 10px;
        }
        .login-form{
            padding: 10px;
        }
        .login-form input{
            width: 100%;
            padding: 10px;
            border-radius: 10px;
            border: solid 2px gainsboro;
        }
        .log-btn{
            padding: 5px;
            background: blue;
            border-radius: 10px;
            width: 150px;
            border: none;
            margin-top: 10px;
            color: white;
            font-weight: 600;
            font-size: 14px;
        }
        .log{
            float: right;
            margin-top: 10px;
            font-size: 14px;
            color: orange;
            font-weight: 600;
        }
        .table{
            padding: 20px;

        }
    </style>
</head>
<body>
    <div class="login">
        <div class="signup">
        <form action="login.php" method="post" class="login-form">
            <label for="Email">Email</label>
            <input type="email" name="email" placeholder="Enter the email">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Enter the email">
            <button type="submit" class="log-btn">Login</button>
        </form>
    </div>
    </div>
   
<div class="table">
    <table border = 1 cellspacing = 0 cellpadding = 10 style="margin: auto;" >
        <tr>
          <td style="background:orange;">No</td>
          <td style="background:  red; color: white;">Name</td>
          <td class="query" style="background: greenyellow; color:black;">email</td>
          <td style="background: #333; color: white;">password</td>
          <td style="background: green; color: white;">Conform password</td>
        </tr>
        <?php
        $i = 1;
        $rows = mysqli_query($con, "SELECT * FROM userregister ORDER BY id DESC")
        ?>
  
        <?php foreach ($rows as $row) : ?>
        <tr>
          <td><?php echo $i++; ?></td>
          <td><?php echo $row["name"]; ?></td>
           <td ><?php echo $row["email"]; ?></td>
            <td><?php echo $row["password"]?></td>
            <td><?php echo $row["conform"]?></td>
        </tr>
        <?php endforeach; ?>
      </table>
</div>
  
</body>
</html>