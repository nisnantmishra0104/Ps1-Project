<?php
session_start();
    include('connection.php');
    include('function.php');
    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
       $email = $_POST['email'];
       $username = $_POST['username'];
       $phone = $_POST['phone'];
       $address = $_POST['address'];
       $password = $_POST['password'];
       $param_password = password_hash($password, PASSWORD_DEFAULT);
       $confirm_password = $_POST['confirm_password'];
       $confirm_param_password = password_hash($confirm_password, PASSWORD_DEFAULT);

       if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo 'Email must be a valid email address';
      }

      else if(!preg_match('/^[a-zA-Z\s]+$/', $username)){
        echo 'Title must be letters and spaces only';
      }

      else if (strlen($_POST['phone']) < 10){
        echo 'Phone number must have 10 digits';
    }

      else if($password != $confirm_password){
        echo "passwords don't match";
      }
      else{
       if(!empty($email) && !empty($username) && !empty($phone) && !empty($address) && !empty($password) && !empty($confirm_password))
       {
        $query = "INSERT INTO retailers(email,username,phone,address,password,confirm_password) VALUES('$email','$username','$phone','$address','$param_password','$confirm_param_password')";
          mysqli_query($conn,$query);
          header("Location: login.php");
       }else{
        echo "Please enter valid information";
       }
      }
    }
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>YourStore</title>
    <link rel="stylesheet" href="index.css" />
    <link
      rel="stylesheet"
      media="screen and (max-width: 1170px)"
      href="css/phone.css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <nav id="navbar">
      <div id="logo">
        <img src="logo.jpg" alt="YourStore.com" />
      </div>
      <ul>
        <li class="item"><a href="index.html">Home</a></li>
        <li class="item"><a href="notebook.html">NOTEBOOKS</a></li>
        <li class="item"><a href="pens.html">PENS & PENCILS</a></li>
        <li class="item"><a href="instruments.html">INSTRUMENTS</a></li>
        <li class="item"><a href="tapes.html">TAPES AND GUMS</a></li>
      </ul>
    </nav>
    <section id="login">
      <h1 class="h-primary center">SIGNUP</h1>
      <div class="loginpage">
      <form action="" method="POST">
      <div id="email" class="input">
          <label for="email">Email</label>
          <input type="email" id="email" placeholder="Enter Your email" name = "email"/>
        </div>
        <div id="userid" class="input">
          <label for="UserID">Username </label>
          <input type="text" id="UserID" name="username" placeholder="Enter Your UserID" />
        </div>
        <div id="phone" class="input">
          <label for="phone">Enter your number:</label>
          <input
            type="text"
            id="phone"
            name="phone"
            placeholder="Enter Your Phonenumber"
          />
        </div>
        <div id="address" class="input">
          <label for="address">Address</label>
          <input type="text" id="address"  placeholder="Enter Your Address" name = "address"/>
        </div>
        <div id="password" class="input">
          <label for="Password">Password: </label>
          <input
            type="password"
            id="Password"
            name="password"
            placeholder="Enter Your Password"
          />
        </div>
        <div id="confirmpassword" class="input">
          <label for="Password">Confirm Password: </label>
          <input
            type="password"
            id="Password"
            name="confirm_password"
            placeholder="Confirm Your Password"
          />
        </div>
        <div class="center">
        <input type="submit" name = "submit" value = "Signup" class = "btn brand z-depth-0">
    </div>
        <div id="signup">
          <p>Already have an Account? <a href="login.php">login</a></p>
        </div>
        </form>
      </div>
    </section>
  </body>
</html>
