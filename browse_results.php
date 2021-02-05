<?php
session_start();
  // TODO: Establish DB connection, submit SQL query here. Remember to check for any MySQLi errors.

// ---- STEP 1: Establish DB Connection
$host = "303.itpwebdev.com";
// User here is NOT cpanel user. This is the DB user.
$user = "arjunbam_db_user";
$password = "uscitp2020";
$db = "arjunbam_final_project_db";

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



// ---- STEP 2: Generate & Submit SQL Query
//Base Statement
$sql = "SELECT recommendations.rec AS Recommendation, users.username AS Username, categories.category_name AS Category, ratings.rating_name AS Rating, recommendations.rec_id 
FROM recommendations 
JOIN users 
  ON recommendations.user_id = users.user_id 
JOIN categories 
  ON recommendations.category_id = categories.category_id 
JOIN ratings 
  ON recommendations.rating_id = ratings.rating_id
WHERE 1 = 1"; 

// $_GET tells us which values user passed in

// var_dump($_GET["track_name"]);

// If user enters in certain fields, append to the base statement
if( isset($_GET["category"]) && !empty($_GET["category"])) {
  $sql = $sql . " AND recommendations.category_id = " . $_GET["category"];
}
if( isset($_GET["user"]) && !empty($_GET["user"])) {
  $sql = $sql . " AND users.username LIKE '%" . $_GET["user"] . "%'";
}

// Append the semicolon at the end
$sql = $sql . ";";

// Echo out the statement to double check the sql statement
// echo "<hr>" . $sql . "<hr>";

// Submit the query
$results = $mysqli->query($sql);
if(!$results) {
  echo $mysqli->error;
  exit();
}

$mysqli->close();

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
  .container-fluid {
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
  <p>Our recommendations</p>
</div> 

<!-- <div class="container"> -->

<div class="container-fluid">

  <div class="row mb-4" style="text-align: center;">
    <div class="col-12 mt-4">
      <a href="browse.php" role="button" class="btn btn-primary">Search Again!</a>
    </div> <!-- .col -->
  </div> <!-- .row -->

  <div class="my_spacing"></div>

  <div class="row">
    <div class="col-12">
      <!-- Showing 0 result(s). -->
      <?php
      echo "We have the following " . $results->num_rows . " recommendation(s) for you:";
      ?>
    </div> <!-- .col -->
  </div>

  <div class="row row-cols-3" style="text-align: center;">

    <!-- TODO: Loop through DB results and output them here. Modify or remove hard-coded output below. -->
    <!-- For every result, a new col needs to be created -->
    <?php while( $row = $results->fetch_assoc() ): ?>

      <div class="col">
        <br>
        <?php echo $row["Recommendation"]; ?>
        <br>
        Submitted by: <?php echo $row["Username"]; ?>
        <br>
        Category: <?php echo $row["Category"]; ?>
        <br>
        Rating: <?php echo $row["Rating"]; ?>
        <br><br>

        <?php
          if(isset($_SESSION["logged_in"])) :
        ?>
        <!-- ADDED DELETE -->
        <a onclick="return confirm('Do you want to delete this recommendation?')" href="delete_rec.php?rec_id=<?php echo $row['rec_id']?>&rec=<?php echo $row['Recommendation']?>" class="btn btn-outline-danger delete-btn">
          Delete
        </a>
        <?php
          endif;
        ?>

        <br><br>
        <hr style="background-color: white;">
      </div>
    <?php endwhile; ?>

  </div>

</div>




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






