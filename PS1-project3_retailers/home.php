<?php require_once 'connection.php';
session_start();
include('connection.php');
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
      media="screen and (max-width:1377px)"
      href="phone.css"
    />
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
        <li class="item"><a href="home.php">Home</a></li>
        <li class="item"><a href="notebook.php">NOTEBOOKS</a></li>
        <li class="item"><a href="pens.php">PENS & PENCILS</a></li>
        <li class="item"><a href="instruments.php">INSTRUMENTS</a></li>
        <li class="item"><a href="tapes.php">TAPES AND GUMS</a></li>
      </ul>
    </nav>
    <section id="home">
      <h1 class="h-primary center">WELCOME TO YOUR OWN STORE</h1>
      <div class="greet">One stop solution for all your stationary demand</div>
    </section>
  </body>
</html>
