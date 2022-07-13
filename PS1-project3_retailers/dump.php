$user_data = check_login($conn);
    $email = $username = $phone = $address = $password = $confirm_password = '';
    $errors = array('email' => '', 'username' => '', 'phone' => '','address' => '','password' => '','confirm_password' => '');
  
    if(isset($_POST['submit'])){
      
      // check email
      if(empty($_POST['email'])){
        $errors['email'] = 'An email is required';
      } else{
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          $errors['email'] = 'Email must be a valid email address';
        }
      }
  
      // check username
      if(empty($_POST['username'])){
        $errors['username'] = 'A username is required';
      } else{
        $username = $_POST['username'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $username)){
          $errors['username'] = 'Title must be letters and spaces only';
        }
      }
  
      // check phone
      if(empty($_POST['phone'])){
        $errors['phone'] = 'You must put your numbers';
      } else if (strlen($_POST['phone']) < 10){
          $errors['phone'] = 'Phone number must have 10 digits';
      }
      // check ingredients
      if(empty($_POST['email'])){
        $errors['email'] = 'An email is required';
      } else{
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          $errors['email'] = 'Email must be a valid email address';
        }
      }

        // check ingredients
        if(empty($_POST['email'])){
          $errors['email'] = 'An email is required';
        } else{
          $email = $_POST['email'];
          if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = 'Email must be a valid email address';
          }
        }

      // check ingredients
      if(empty($_POST['email'])){
        $errors['email'] = 'An email is required';
      } else{
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          $errors['email'] = 'Email must be a valid email address';
        }
      }
  
      if(array_filter($errors)){
        //echo 'errors in form';
      } else {
        // escape sql chars $email = $username = $phone = $address = $password = $confirm_password = '';
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $phone  = mysqli_real_escape_string($conn, $_POST['phone']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $password = mysqli_real_escape_string($conn, $_POST['$password']);
        $confirm_password = mysqli_real_escape_string($conn, $_POST['$confirm_password']);
        // Set these parameters
  
        // create sql
        $sql = "INSERT INTO retailers(email,username,phone,address,password,confirm_password) VALUES('$email','$username','$phone','$address','$password','$confirm_password')";
  
        // save to db and check
        if(mysqli_query($conn, $sql)){
          // success
          header('Location: login.php');
        } else {
          echo 'query error: '. mysqli_error($conn);
        }
  
        
      }
  
    } //