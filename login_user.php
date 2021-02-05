<?php

  // TODO: Establish DB connection, submit SQL query here. Remember to check for any MySQLi errors.
session_start();
// ---- STEP 1: Establish DB Connection
$host = "303.itpwebdev.com";
// User here is NOT cpanel user. This is the DB user.
$user = "arjunbam_db_user";
$password = "uscitp2020";
$db = "arjunbam_final_project_db";

// If NOT logged in, do the login things.
// Otherwise, redirect user to home page

if( !isset($_SESSION["logged_in"]) || !$_SESSION["logged_in"]) {
  // Check if user did username/password POST exists
  if ( isset($_POST['user']) && isset($_POST['pw']) ) {
    // If username OR password was not filled out
    if ( empty($_POST['user']) || empty($_POST['pw']) ) {

      $error = "Please enter username and password.";

    }
    // User filled out username AND password. Need to check that the username/password combination is correct
    else {

      // Create an instance of mysqli class 
      // This attempts to make a connection with the DB
      $mysqli = new mysqli($host, $user, $password, $db);
      // Check for any DB connection errors
      // connect_errno returns the error code
      // connect_errno is a property of mysqli class
      if( $mysqli->connect_errno ) {
        // connect_error returns a string message description of the error
        echo $mysqli->connect_error;
        // Terminate the program here. Subsequent code doe not get run.
        exit();
      }

      // Set the charset to have uniform charset
      $mysqli->set_charset('utf8');

      // Hash the password user typed in. Use this hased version to compare it to the pw saved in the DB.
      $passwordInput = hash("sha256", $_POST["pw"]);

      // Search the users table, look for the username & pw combo that the user entered
      $sql = "SELECT users.user_id FROM users
            WHERE username = '" . $_POST['user'] . "' AND (pw = '" . $passwordInput . "' OR pw = '" . $_POST["pw"] . "');";

      // echo "<hr>" . $sql . "<hr>";
      
      $results = $mysqli->query($sql);
      $my_user_id = intval($results);

      if(!$results) {
        echo $mysqli->error;
        exit();
      }
      // If there is a match, we will get at least one record back
      if($results->num_rows > 0) {
        $_SESSION["user"] = $_POST["user"];
        $_SESSION["logged_in"] = true;
        $_SESSION["user_id"] = $my_user_id;
        // Redirect the logged in user to the home page
        header("Location: myhome.php");
      }
      else {
        $error = "Invalid username or password.";
      }
    } 
  }
}
else {
  // Logged in user will ge redirected
  header("Location: myhome.php");
}
?>
<!DOCTYPE html>
<html>
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>PATHPORT</title>

<style>
  @import url('https://fonts.googleapis.com/css?family=Source+Code+Pro');
  .my_heading {
    padding-top: 75px;
    display: flex;
    text-align: center;
  }
  p {
    font-family: 'Source Code Pro', monospace;  
    font-size: 28pt;
    color: lightgray;
    margin: 0 auto;
  }
  .my_spacing {
    margin-top: 150px;
  }

  body{
    background-color: #121212;  
  }
  form {
    color: white;
  }

</style>

<!-- 
<style>
.dropdown-menu {
  display: none;
}
.dropdown:hover > .dropdown-menu {
  display: block;
}
</style>
 -->

</head>
<body>

  <!-- NAVIGATION BAR -->

  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> --> 
  <nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color: black;">

    <a class="navbar-brand" href="myhome.php#tab-main-vid"><b>PATH</b>PORT</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav mr-auto">

        <li class="nav-item active">
          <a class="nav-link" 
          onmouseover="this.style.backgroundColor='white'; this.style.color='black'" 
          onmouseout="this.style.backgroundColor='black'; this.style.color='darkgray'" 
          style="color: darkgray; transition: all 0.5s ease;" 
          href="myhome.php#tab-main-vid" id="active-menu">
            Home<span class="sr-only">(current)</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link inactive-menu" 
          onmouseover="this.style.backgroundColor='white'; this.style.color='black'" 
          onmouseout="this.style.backgroundColor='black'; this.style.color='darkgray'" 
          style="color: darkgray; transition: all 0.5s ease;" 
          href="myhome.php#tab-welcome">
            Welcome
          </a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" 
          onmouseover="this.style.backgroundColor='white'; this.style.color='black'" 
          onmouseout="this.style.backgroundColor='black'; this.style.color='darkgray'"
          style="color: darkgray; transition: all 0.5s ease;" 
          href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  
            About Us 
          </a>
          
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: black">
            <li>
              <a class="dropdown-item" 
              onmouseover="this.style.backgroundColor='white'; this.style.color='black'" 
              onmouseout="this.style.backgroundColor='black'; this.style.color='darkgray'"
              style="color: darkgray; transition: all 0.5s ease;" 
              href="myhome.php#tab-aboutus"> 
                Our Start
              </a>
            </li> 

            <li>
              <a class="dropdown-item" 
              onmouseover="this.style.backgroundColor='white'; this.style.color='black'" 
              onmouseout="this.style.backgroundColor='black'; this.style.color='darkgray'"
              style="color: darkgray; transition: all 0.5s ease;" 
              href="aboutus.php"> 
                Learn More
              </a>
            </li>            
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" 
          onmouseover="this.style.backgroundColor='white'; this.style.color='black'" 
          onmouseout="this.style.backgroundColor='black'; this.style.color='darkgray'"
          style="color: darkgray; transition: all 0.5s ease;" 
          href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  
            Explore 
          </a>
          
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: black">
            <li>
              <a class="dropdown-item" 
              onmouseover="this.style.backgroundColor='white'; this.style.color='black'" 
              onmouseout="this.style.backgroundColor='black'; this.style.color='darkgray'"
              style="color: darkgray; transition: all 0.5s ease;" 
              href="myhome.php#tab-food"> 
                Adventure at Heart
              </a>
            </li> 

            <li>
              <a class="dropdown-item" 
              onmouseover="this.style.backgroundColor='white'; this.style.color='black'" 
              onmouseout="this.style.backgroundColor='black'; this.style.color='darkgray'"
              style="color: darkgray; transition: all 0.5s ease;" 
              href="browse.php"> 
                Browse
              </a>
            </li>            
          </ul>
        </li>
 
      </ul>

      <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" 
          onmouseover="this.style.backgroundColor='white'; this.style.color='black'" 
          onmouseout="this.style.backgroundColor='black'; this.style.color='darkgray'"
          style="color: darkgray; transition: all 0.5s ease;" 
          href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  
            <img src="img/user.png" style="height: 30px;">
            <!-- Join   -->
            <?php 
              if (isset($_SESSION["logged_in"])) {
                echo $_SESSION["user"];
              }
            ?>
          </a>

          <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="background-color: black">

            <?php
              if( !isset($_SESSION["logged_in"]) || !$_SESSION["logged_in"]) :
            ?>

            <li>
              <a class="dropdown-item" 
              onmouseover="this.style.backgroundColor='white'; this.style.color='black'" 
              onmouseout="this.style.backgroundColor='black'; this.style.color='darkgray'"
              style="color: darkgray; transition: all 0.5s ease;" 
              href="register_user.php"> 
                Register
              </a>
            </li>
            <div class="dropdown-divider"></div>
            <li>
              <a class="dropdown-item" 
              onmouseover="this.style.backgroundColor='white'; this.style.color='black'" 
              onmouseout="this.style.backgroundColor='black'; this.style.color='darkgray'"
              style="color: darkgray; transition: all 0.5s ease;" 
              href="login_user.php"> 
                Login 
              </a>
            </li>

            <?php
              else:
            ?>

            <li>
              <a class="dropdown-item" 
              onmouseover="this.style.backgroundColor='white'; this.style.color='black'" 
              onmouseout="this.style.backgroundColor='black'; this.style.color='darkgray'"
              style="color: darkgray; transition: all 0.5s ease;" 
              href="update_pw.php"> 
                Update Password
              </a>
            </li>
            <div class="dropdown-divider"></div>
            <li>
              <a class="dropdown-item" 
              onmouseover="this.style.backgroundColor='white'; this.style.color='black'" 
              onmouseout="this.style.backgroundColor='black'; this.style.color='darkgray'"
              style="color: darkgray; transition: all 0.5s ease;" 
              href="logout_user.php"> 
                Logout 
              </a>
            </li>

            <?php
              endif;
            ?>

          </ul>
        </li>
       
      </ul>
    </div>

  </nav>

  <!-- NAVIGATION BAR -->

<div class="my_heading">
  <p>Login to your personalized account!</p>
</div> 

<div class="my_spacing"></div>



  <div class="container">

    <form action="login_user.php" method="POST" class="mt-3">
<!-- 
        <div class="col-sm-9 ml-sm-auto">
        </div>
 -->
      <div class="text-danger font-italic" style="text-align: center;">
          <!-- Show errors here. -->
          <?php
            if ( isset($error) && !empty($error) ) {
              echo $error;
            }
          ?>
      </div> 

      <div class="form-group row">
        <label for="user-id" class="col-sm-3 col-form-label text-sm-right">Username:</label>
        <div class="col-sm-7">
          <input type="text" class="form-control" id="user-id" name="user" placeholder="TTrojan">
        </div>
        <div id="user_error" style="display: none; color: red;">Username is required.</div>
      </div> <!-- .form-group -->

      <div class="form-group row">
        <label for="pw-id" class="col-sm-3 col-form-label text-sm-right">Password:</label>
        <div class="col-sm-7">
          <input type="password" class="form-control" id="pw-id" name="pw" placeholder="password">
        </div>
        <div id="pw_error" style="display: none; color: red;">Password is required.</div>
      </div> <!-- .form-group -->

      <br>

      <div class="form-group row">
        <div class="col-sm-3"></div>
        <div class="col-sm-7">
          <button type="submit" class="btn btn-primary">Sign in</button>
          <button type="reset" class="btn btn-light">Reset</button>
        </div>
      </div> <!-- .form-group -->

    </form>
    
  </div> <!-- .container -->



  <script>
    // client-side validation
    document.querySelector('form').onsubmit = function(){

      if ( document.querySelector('#user-id').value.trim().length == 0 ) {
        document.querySelector('#user-id').classList.add('is-invalid');
        document.querySelector('#user_error').style.display = "block";
      } 
      else {
        document.querySelector('#user-id').classList.remove('is-invalid');
        document.querySelector('#user_error').style.display = "none";
      }

      if ( document.querySelector('#pw-id').value.trim().length == 0 ) {
        document.querySelector('#pw-id').classList.add('is-invalid');
        document.querySelector('#pw_error').style.display = "block";
      } 
      else {
        document.querySelector('#pw-id').classList.remove('is-invalid');
        document.querySelector('#pw_error').style.display = "none";
      }

      return ( !document.querySelectorAll('.is-invalid').length > 0 );
    }
  </script>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->

<script
src="https://code.jquery.com/jquery-3.4.1.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>






