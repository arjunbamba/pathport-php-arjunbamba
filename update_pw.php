<?php
session_start();

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
  <p>Update your password!</p>
</div> 

<div class="my_spacing"></div>



  <div class="container">

    <form action="update_pw_confirm.php" method="POST" class="mt-3">

      <div style="text-align: center;">All fields are required.</div> 
      <br>
      <div class="form-group row">
        <label for="newpw-id" class="col-sm-3 col-form-label text-sm-right">New Password:</label>
        <div class="col-sm-7">
          <input type="text" class="form-control" id="newpw-id" name="newpw" placeholder="Tommy">
        </div>
        <div id="newpw_error" style="display: none; color: red;">New PW is required.</div>
      </div> <!-- .form-group -->

      <div class="form-group row">
        <label for="newpw-id2" class="col-sm-3 col-form-label text-sm-right">Confirm New Password:</label>
        <div class="col-sm-7">
          <input type="text" class="form-control" id="newpw-id2" name="newpw2" placeholder="Trojan">
        </div>
        <div id="newpw_error2" style="display: none; color: red;">Confirmation is required.</div>
      </div> <!-- .form-group -->

      <br>

      <div class="form-group row">
        <div class="col-sm-3"></div>
        <div class="col-sm-7">
          <div id="match_error" style="display: none; color: red;">Error: empty or do not match.</div>
          <br>
          <button type="submit" class="btn btn-primary">Update</button>
          <button type="reset" class="btn btn-light">Reset</button>
        </div>
      </div> <!-- .form-group -->

    </form>
    
  </div> <!-- .container -->


  <script>
    // client-side validation
    document.querySelector('form').onsubmit = function(){


      if ( document.querySelector('#newpw-id').value.trim().length == 0 ) {
        document.querySelector('#newpw-id').classList.add('is-invalid');
        document.querySelector('#newpw_error').style.display = "block";
      } 
      else {
        document.querySelector('#newpw-id').classList.remove('is-invalid');
        document.querySelector('#newpw_error').style.display = "none";
      }

      if ( document.querySelector('#newpw-id2').value.trim().length == 0 ) {
        document.querySelector('#newpw-id2').classList.add('is-invalid');
        document.querySelector('#newpw_error2').style.display = "block";
      } 
      else {
        document.querySelector('#newpw-id2').classList.remove('is-invalid');
        document.querySelector('#newpw_error2').style.display = "none";
      }

      var field1 = document.getElementById('newpw-id').value;
      var field2 = document.getElementById('newpw-id2').value;

      if ((field1 != field2) || (field1 == "") || (field2 == "") ) {
        document.querySelector('#newpw-id').classList.add('is-invalid');
        document.querySelector('#newpw-id2').classList.add('is-invalid');

        document.querySelector('#match_error').style.display = "block";
      }
      else {
        document.querySelector('#newpw-id').classList.remove('is-invalid');
        document.querySelector('#newpw-id2').classList.remove('is-invalid');

        document.querySelector('#match_error').style.display = "none";
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






