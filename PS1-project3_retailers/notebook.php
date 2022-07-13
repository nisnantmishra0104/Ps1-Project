<?php
  //Mysqli or PDO
  $conn = mysqli_connect('localhost','nishant','test1234','inventory');

  // Checking connection
  if(!$conn){
      die('connection error');
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
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <script>
      var data1 = 0;
      document.getElementById("root1").innerText = data1;
      function decrement (){
          data1 = data1 - 1;
          document.getElementById("root1").innerText = data1;
      }
      function increment (){
        data1 = data1 + 1;
        document.getElementById("root1").innerText = data1;
      }

      var data2 = 0;
      document.getElementById("root2").innerText = data2;
      function decrement (){
          data2 = data2 - 1;
          document.getElementById("root2").innerText = data2;
      }
      function increment (){
        data2 = data2 + 1;
        document.getElementById("root2").innerText = data2;
      }

      var data3 = 0;
      document.getElementById("root3").innerText = data3;
      function decrement (){
          data3 = data3 - 1;
          document.getElementById("root3").innerText = data3;
      }
      function increment (){
        data3 = data3 + 1;
        document.getElementById("root3").innerText = data3;
      }

      var data4 = 0;
      document.getElementById("root4").innerText = data4;
      function decrement (){
          data4 = data4 - 1;
          document.getElementById("root4").innerText = data4;
      }
      function increment (){
        data4 = data4 + 1;
        document.getElementById("root4").innerText = data4;
      }
    </script>
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
      <div id="search-box">
        <input type="text" class="search-txt" placeholder="Type to Search">
        <a href=""></a>
        <div class="cart1"><i class="fa-solid fa-cart-arrow-down"></i></div>
      </div>
    </nav>
    <section id="notebooklist">
      <div class="header">
        <h1 class="h-primary center">NOTEBOOKS</h1>
        <h2 class="h-secondary center">Taking good "notes"book is important</h2>
      </div>
      <div id="notebook">
          <div class="box">
            <h2 class="h-secondary center">COMPANY1</h2>
            <div class="company1">
              <div class="notebooklist">
                <img src="photos/spiral.jpg" alt="" /> <b>Diary</b>
                <div class="desc">Company 1 183 pages spiral notebook</div>
                <button class = "btn"><a href="updates.php" >Update</a></button>
                </div>
              <div class="notebooklist">
                <img src="photos/notepad.jpg" alt="" /> <b>Notepads</b>
                <div class="desc">Company 1 183 pages spiral notebook</div>
                <button class = "btn"><a href="updates.php" >Update</a></button>
                </div>
              <div class="notebooklist">
                <img src="photos/diary.jpg" alt="" /> <b>Journal and diaries</b>
                <div class="desc">Company 1 183 pages spiral notebook</div>
                <button class = "btn"><a href="updates.php" >Update</a></button>
                </div>
              <div class="notebooklist">
                <img src="photos/composition.jpg" alt="" /> <b>Composition</b>
                <div class="desc">Company 1 183 pages spiral notebook</div>
                <button class = "btn"><a href="updates.php" >Update</a></button>
                </div>
            </div>
          </div>
        <div id="notebook">
          <div class="box">
            <h2 class="h-secondary center">COMPANY1</h2>
            <div class="company1">
              <div class="notebooklist">
                <img src="photos/spiral.jpg" alt="" /> <b>Diary</b>
                <div class="desc">Company 1 183 pages spiral notebook</div>
                <button class = "btn"><a href="updates.php" >Update</a></button>
                </div>
              <div class="notebooklist">
                <img src="photos/notepad.jpg" alt="" /> <b>Notepads</b>
                <div class="desc">Company 1 183 pages spiral notebook</div>
                <button class = "btn"><a href="updates.php" >Update</a></button>
                </div>
              <div class="notebooklist">
                <img src="photos/diary.jpg" alt="" /> <b>Journal and diaries</b>
                <div class="desc">Company 1 183 pages spiral notebook</div>
                <button class = "btn"><a href="updates.php" >Update</a></button>
                </div>
              <div class="notebooklist">
                <img src="photos/composition.jpg" alt="" /> <b>Composition</b>
                <div class="desc">Company 1 183 pages spiral notebook</div>
                <button class = "btn"><a href="updates.php" >Update</a></button>
                </div>
            </div>
          </div>
          <div id="notebook">
            <div class="box">
              <h2 class="h-secondary center">COMPANY1</h2>
              <div class="company1">
                <div class="notebooklist">
                  <img src="photos/spiral.jpg" alt="" /> <b>Diary</b>
                  <div class="desc">Company 1 183 pages spiral notebook</div>
                  <button class = "btn"><a href="updates.php" >Update</a></button>
                  </div>
                <div class="notebooklist">
                  <img src="photos/notepad.jpg" alt="" /> <b>Notepads</b>
                  <div class="desc">Company 1 183 pages spiral notebook</div>
                  <button class = "btn"><a href="updates.php" >Update</a></button>
                  </div>
                <div class="notebooklist">
                  <img src="photos/diary.jpg" alt="" /> <b>Journal and diaries</b>
                  <div class="desc">Company 1 183 pages spiral notebook</div>
                  <button class = "btn"><a href="updates.php" >Update</a></button>
                  </div>
                <div class="notebooklist">
                  <img src="photos/composition.jpg" alt="" /> <b>Composition</b>
                  <div class="desc">Company 1 183 pages spiral notebook</div>
                  <button class = "btn"><a href="updates.php" >Update</a></button>
                  </div>
              </div>
            </div>
      </div>
    </section>
  </body>
</html>
