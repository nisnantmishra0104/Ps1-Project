<?php
session_start();
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
    <section id="login">
      <h1 class="h-primary center">UPDATE</h1>
      <div class="loginpage">
      <form action="changes.php" method="POST">
      <div id="email" class="input">
          <label for="productname">Product</label>
          <input type="text" id="email" placeholder="Enter the product" name = "productname"/>
        </div>
        <div id="userid" class="input">
          <label for="company">Company</label>
          <input type="text" id="UserID" name="company" placeholder="Enter the manufacturer of the product" />
        </div>
        <div id="phone" class="input">
          <label for="quantity">Updated Quantity</label>
          <input
            type="text"
            id="phone"
            name="quantity"
            placeholder="Enter new quantity"
          />
        </div>
        <div class="center">
        <input type="submit" name = "update" value = "update" class = "btn brand z-depth-0">
    </div>
        </form>
      </div>
    </section>
  </body>
</html>