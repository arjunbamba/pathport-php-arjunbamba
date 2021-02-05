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
  .my_main {
		background-color: black;
		margin-left: auto;
		margin-right: auto;

    overflow: hidden;
    position: relative;
	}
	video {
		width: 100%;
	}
  .caption1 {
    padding-top: 25%;
		font-size: 3em;

    padding-left: 10%;
    padding-right: 10%;
  }
  .overlay {
    background-color: rgba(0, 0, 0, 0.6);
    color: white;

    position: absolute;
    top: 0px;
    left: 0px;
    right: 0px;
    bottom: 0px;

    text-align: center;
    display: block;
  }
</style>
<style>

  /*
  CREDIT FOR TYPEWRITER: https://www.codesdope.com/blog/article/12-creative-css-and-javascript-text-typing-animati/
  */

  @import url('https://fonts.googleapis.com/css?family=Source+Code+Pro');

  body{
    /*padding: 40px;*/
    background-color: #121212;  
  }

  p {
    border-right: solid 3px rgba(0,255,0,.75);
    white-space: nowrap;
    overflow: hidden;    
    font-family: 'Source Code Pro', monospace;  
    font-size: 28px;
    color: rgba(255,255,255,.70);
    margin: 0 auto;
  }

  /* Animation */
  p {
    animation: animated-text 4s steps(29,end) 1s 1 normal both,
               animated-cursor 600ms steps(29,end) infinite;
  }

  /* text animation */

  @keyframes animated-text{
    from{width: 0;}
    to{width: 472px;}
  }

  /* cursor animations */

  @keyframes animated-cursor{
    from{border-right-color: rgba(0,255,0,.75);}
    to{border-right-color: transparent;}
  }
</style>


<style>
  body {
    font-family: "Century Gothic", 'Lato', sans-serif;
    margin: 0; /*  ADDED  */
  }

  a {
    text-decoration: none;
  }

  .et-hero-tabs,
  .et-slide {
    display: -webkit-box;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
            flex-direction: column;
    -webkit-box-pack: center;
            justify-content: center;
    -webkit-box-align: center;
            align-items: center;
    height: 100vh;
    position: relative;
    background: #eee;
    text-align: center;
    /*padding: 0 2em;*/
  }
  .et-hero-tabs h1,
  .et-slide h1 {
    font-size: 2rem;
    margin: 0;
    letter-spacing: 1rem;
  }
  .et-hero-tabs h3,
  .et-slide h3 {
    font-size: 1.3rem;
    letter-spacing: 0.3rem;
    /*opacity: 0.6;*/
  }

  /****** ADDED ******/

  .et-hero-tabs-container {
    display: -webkit-box;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
            flex-direction: row;
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 70px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    background: #fff;
    z-index: 10;
  }
  .et-hero-tabs-container--top {
    position: fixed;
    top: 0;
  }

  .et-hero-tab {
    display: -webkit-box;
    display: flex;
    -webkit-box-pack: center;
            justify-content: center;
    -webkit-box-align: center;
            align-items: center;
    -webkit-box-flex: 1;
            flex: 1;
    background-color: black; /* ADDED */  
    color: white;
    /*color: #000;*/
    letter-spacing: 0.1rem;
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease;
    font-size: 0.8rem;
  }
  .et-hero-tab:hover {
    /*color: white;*/
    /*background: rgba(102, 177, 241, 0.8);*/
    color: black;
    background-color: white;
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease;
  }

  .et-hero-tab-slider {
    position: absolute;
    bottom: 0;
    width: 0;
    height: 6px;
    background: #66B1F1;
    -webkit-transition: left 0.3s ease;
    transition: left 0.3s ease;
  }

  /****** ADDED ******/

  @media (min-width: 800px) {
    .et-hero-tabs h1,
    .et-slide h1 {
      font-size: 3rem;
    }
    .et-hero-tabs h3,
    .et-slide h3 {
      font-size: 1.3rem;
    }
    .et-hero-tab {
      font-size: 1rem;
    }
  }
</style>

<style>
  /****** HOME PAGE ******/
  .my_pic1 {
    background-image: url('img/LA/la_1.jpeg');
    background-size: cover;

    color: white;
  }
  .my_pic2 {
    background-image: url('img/pic1.jpeg');
    background-size: cover;
    background-repeat: no-repeat;

    color: white;
  }
  .my_pic3 {
    background-image: url('img/pic2.jpeg');
    background-size: cover;

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

  <div class="my_main" id="tab-main-vid">
    <video autoplay="" loop="" muted>
      <source src="media/la_3.mp4" type="video/mp4"/>
    </video>
    <div class="overlay caption1">
      <p><strong>WELCOME TO LOS ANGELES!</strong></p>
    </div>
  </div>

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

  <!-- Main -->
  <main class="et-main">
    <div class="my_main">
      <section class="et-slide my_pic1" id="tab-welcome"></section>
      <div class="overlay caption1">
        <h1><strong>LOS ANGELES</strong></h1>
        <h5>WELCOME TO THE CITY OF ANGELS!</h5>
      </div>
    </div>

    <div class="my_main">
      <section class="et-slide my_pic2" id="tab-aboutus"></section>
      <div class="overlay caption1">
        <h1><strong>ABOUT US</strong></h1>
        <h5>PathPort’s goal is to make sure you and your loved ones have a fabulous time exploring Los Angeles.</h5>
        
        <a href="aboutus.php">
          <button type="button" class="btn btn-outline-dark"
          onmouseover="this.style.backgroundColor='white'; this.style.color='black'" 
          onmouseout="this.style.backgroundColor='black'; this.style.color='white'"
          style="color: white; background-color: black; transition: all 0.5s ease;">
            LEARN MORE
          </button>
        </a>
      </div>
    </div>

    <div class="my_main">
      <section class="et-slide my_pic3" id="tab-food"></section>
      <div class="overlay caption1">
        <h1><strong>ADVENTURE AT HEART</strong></h1>
        <h5>
          At PathPort, we celebrate the spirit of adventure.
        </h5>
        <h5>
          What would you like? Browse through our catalogue of recommendations! 
        </h5>
        <a href="browse.php">
          <button type="button" class="btn btn-outline-dark"
          onmouseover="this.style.backgroundColor='white'; this.style.color='black'" 
          onmouseout="this.style.backgroundColor='black'; this.style.color='white'"
          style="color: white; background-color: black; transition: all 0.5s ease;">
            BROWSE
          </button>
        </a>
      </div>
    </div>
  </main>

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

<!-- 
<script>
class StickyNavigation {
  constructor() {
    this.currentId = null;
    this.currentTab = null;
    this.tabContainerHeight = 70;
    let self = this;
    $(".et-hero-tab").click(function () {
      self.onTabClick(event, $(this));
    });
    $(window).scroll(() => {
      this.onScroll();
    });
    $(window).resize(() => {
      this.onResize();
    });
  }

  onTabClick(event, element) {
    event.preventDefault();
    let scrollTop =
      $(element.attr("href")).offset().top - this.tabContainerHeight + 1;
    $("html, body").animate({ scrollTop: scrollTop }, 600);
  }

  onScroll() {
    this.checkTabContainerPosition();
    this.findCurrentTabSelector();
  }

  onResize() {
    if (this.currentId) {
      this.setSliderCss();
    }
  }

  checkTabContainerPosition() {
    let offset =
      $(".et-hero-tabs").offset().top +
      $(".et-hero-tabs").height() -
      this.tabContainerHeight;
    if ($(window).scrollTop() > offset) {
      $(".et-hero-tabs-container").addClass("et-hero-tabs-container--top");
    } else {
      $(".et-hero-tabs-container").removeClass("et-hero-tabs-container--top");
    }
  }

  findCurrentTabSelector(element) {
    let newCurrentId;
    let newCurrentTab;
    let self = this;
    $(".et-hero-tab").each(function () {
      let id = $(this).attr("href");
      let offsetTop = $(id).offset().top - self.tabContainerHeight;
      let offsetBottom =
        $(id).offset().top + $(id).height() - self.tabContainerHeight;
      if (
        $(window).scrollTop() > offsetTop &&
        $(window).scrollTop() < offsetBottom
      ) {
        newCurrentId = id;
        newCurrentTab = $(this);
      }
    });
    if (this.currentId != newCurrentId || this.currentId === null) {
      this.currentId = newCurrentId;
      this.currentTab = newCurrentTab;
      this.setSliderCss();
    }
  }

  setSliderCss() {
    let width = 0;
    let left = 0;
    if (this.currentTab) {
      width = this.currentTab.css("width");
      left = this.currentTab.offset().left;
    }
    $(".et-hero-tab-slider").css("width", width);
    $(".et-hero-tab-slider").css("left", left);
  }
}

new StickyNavigation();


</script>
 -->

</body>
</html>












