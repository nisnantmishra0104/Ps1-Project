<?php
session_start();
    include('connection.php');
    include('function.php');
    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
       $username = $_POST['username'];
       $password = $_POST['password'];

       if(!empty($username) && !empty($password) && !is_numeric($username))
       {
          $query = "select * FROM retailers WHERE username = '$username' limit 1";
          $result = mysqli_query($conn,$query);
          if($result && mysqli_num_rows($result) > 0){
            $user_data = mysqli_fetch_assoc($result);
            if($user_data['password'] === $password){
              header('Location: home.php');
              die;
            }
         }
          echo "wrong username or password";
       }else{
        echo "Please enter valid information";
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
    </nav>
      <form action = "" method = "POST">
      <div class="loginpage">
        <section id="login">
      <h1 class="h-primary center">Log-in</h1>
        <div id="userid" class="input">
          <label for="UserID">Username : </label>
          <input type="text" id="UserID" placeholder="Enter Your UserID" name="username" value = "<?php echo $email; ?>"/>
        </div>
        <div id="password" class="input">
          <label for="Password">Password : </label>
          <input
            type="password"
            id="Password"
            placeholder="Enter Your Password"
            name="password"
            value = "<?php echo $password; ?>"
          />
        </div>
        <div class="input">
          <label>
            <input type="checkbox" /><nbsp></nbsp><nbsp></nbsp
            ><nbsp></nbsp> Remember me
          </label>
        </div>
        <div class="center">
        <input type="submit" name = "submit" value = "login" class = "btn brand z-depth-0">
    </div>
        <div id="signup">
          <p>Don't have an Account? <a href="signup.html">Sign up</a></p>
        </div>
      </div>
      </form>
    </section>
  </body>
</html>
