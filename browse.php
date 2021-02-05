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
  <p>Browse our recommendations!</p>
</div> 

<div class="my_spacing"></div>



  <div class="container">

    <form action="browse_results.php" method="GET" class="mt-3">

      <div class="form-group row">
        <label for="category-id" class="col-sm-3 col-form-label text-sm-right">Category:</label>
        <div class="col-sm-7">
          <div class="form-check form-check-inline">
            <label class="form-check-label">
              <input class="form-check-input mr-2" type="radio" name="category" id="inlineCheckbox3" value="1" checked>Outdoors
            </label>
          </div>
          <div class="form-check form-check-inline">
            <label class="form-check-label">
              <input class="form-check-input mr-2" type="radio" name="category" id="inlineCheckbox1" value="2">Art & Culture
            </label>
          </div>
          <div class="form-check form-check-inline">
            <label class="form-check-label">
              <input class="form-check-input mr-2" type="radio" name="category" id="inlineCheckbox2" value="3">Music
            </label>
          </div>
          <div class="form-check form-check-inline">
            <label class="form-check-label">
              <input class="form-check-input mr-2" type="radio" name="category" id="inlineCheckbox4" value="4">Museums
            </label>
          </div>
          <div class="form-check form-check-inline">
            <label class="form-check-label">
              <input class="form-check-input mr-2" type="radio" name="category" id="inlineCheckbox5" value="5">History
            </label>
          </div>
          <div class="form-check form-check-inline">
            <label class="form-check-label">
              <input class="form-check-input mr-2" type="radio" name="category" id="inlineCheckbox6" value="6">Beaches
            </label>
          </div>
          <div class="form-check form-check-inline">
            <label class="form-check-label">
              <input class="form-check-input mr-2" type="radio" name="category" id="inlineCheckbox7" value="7">Amusement Parks
            </label>
          </div>
          <div class="form-check form-check-inline">
            <label class="form-check-label">
              <input class="form-check-input mr-2" type="radio" name="category" id="inlineCheckbox8" value="8">Sports
            </label>
          </div>
          <div class="form-check form-check-inline">
            <label class="form-check-label">
              <input class="form-check-input mr-2" type="radio" name="category" id="inlineCheckbox9" value="9">Kid-Friendly
            </label>
          </div>
          <div class="form-check form-check-inline">
            <label class="form-check-label">
              <input class="form-check-input mr-2" type="radio" name="category" id="inlineCheckbox10" value="10">Local Favorites
            </label>
          </div>
        </div>
      </div> <!-- .form-group -->

      <div class="form-group row">
        <label for="user-id" class="col-sm-3 col-form-label text-sm-right">Submitted By (optional):</label>
        <div class="col-sm-7">
          <input type="text" class="form-control" id="user-id" name="user" placeholder="Username">
        </div>
      </div> <!-- .form-group -->

      <!-- <input class="form-control"> -->

      <br>

      <div class="form-group row">
        <div class="col-sm-3"></div>
        <div class="col-sm-7">
          <button type="submit" class="btn btn-primary">Browse</button>
          <button type="reset" class="btn btn-light">Reset</button>
        </div>
      </div> <!-- .form-group -->

    </form>
    
  </div> <!-- .container -->


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






