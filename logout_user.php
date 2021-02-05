<?php

  // need to start session destroy
  session_start();
  // removes all stored session variables
  session_destroy();

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
          </a>

          <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="background-color: black">

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

          </ul>
        </li>
       
      </ul>
    </div>

  </nav>

  <!-- NAVIGATION BAR -->

<div class="my_heading">
  <p class="text-success">You are logged out!</p>
</div> 

<div class="my_spacing"></div>
<div class="text-success" style="text-align: center; font-size: 18pt;">Use the navigation menu to go to the home page or login again.</div> 


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






