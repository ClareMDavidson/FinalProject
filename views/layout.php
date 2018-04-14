

<!--  this is the title banner-->
<div class='container-fluid'>
    <div class="col-sm-12">
        <div id='banner'>
            <h1 text-decoration="none" color="#2E2C2F"><a id="banner" href='?controller=pages&action=home'>The Final Project</a></h1>
        </div>
    </div>
</div>
<!--title banner ends and navbar begins-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler1" aria-controls="#navbarToggler1" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<!--   this toggles the navbar -->
  <div class="collapse navbar-collapse" id="navbarToggler1">
 
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0"> 
            <h2 text-decoration="none" color="#F8FFF4">
                <li class="nav-item"><a class="nav-link" href='?controller=pages&action=about'>About</a></li></h2>
            <h2 text-decoration="none" color="#F8FFF4">
                <li class="nav-item"><a class="nav-link" href='#'>Recent Posts</a></li></h2>
                <div class="dropdown" >
                <h2 text-decoration="none" color="#F8FFF4">
                    <li class="nav-item"><a class="nav-link" href="#">Archive</a></li>
                </h2>
                    <div class="dropdown-content">
                        <a href="#">January</a>
                        <a href="#">February</a>
                    </div>
            </div>
            <h2 text-decoration="none" color="#F8FFF4">
                <li class="nav-item"><a class="nav-link" href='?controller=pages&action=contact'>Get in Touch</a></li></h2>
            <h2 text-decoration="none" color="#F8FFF4">
                <li class="nav-item"><a class="nav-link" href='?controller=blogPost&action=write'>
                    <?php          
                   
            if (empty($_SESSION)){
              echo "";
            }
            
            if(!empty($_SESSION)){
                echo "Create New Post";
            }   

            ?></a></li></h2>
<!--            this is the create post navbar link that should hopefully only appear when the blog owner is logged in-->
        </ul>
  </div>
<div class="dropdown dropdown-dark">
<button type="button" href="?controller=login&action=login" id="userLoginButton" class="btn btn-default btn-lg dropdown-toggle" data-toggle="dropdown">
    <img style="height: 45px; width: 31px;" src="views/images/lockIcon.png">
    <span class="caret"></span></button>
  <ul class="dropdown-menu dropdown-menu-right">
  <?php      
      if (empty($_SESSION['username'])) {       
        echo '<h3 text-decoration="none" color="#F8FFF4"><li class="loginDropdown"><a class="loginDropdown" href="?controller=pages&action=login">Blog Owner Login</a></li></h3>';
      }
      else if (!empty ($_SESSION['username'])) {
          echo '<h3 text-decoration="none" color="#F8FFF4"><li class="loginDropdown"><a class="loginDropdown" href="?controller=pages&action=logout">Blog Owner Log out</a></li></h3>';
      }
    ?>
      

  </ul>
    </ul></div>
        </nav>
<div class="container-fluid"><div class="row"><div class="col-sm-12">  <br><br>     </div></div></div>
<!--navbar ends and main content begins-->
<div class="container-fluid"><div class="row">
        <div class="col-sm-1"><br></div>
        <div class="col-sm-8">
            <div id="postContainer">

    <?php require_once('routes.php'); ?>
</div></div>
        
<div class="col-sm-2">
    <div id="sideWidgetBar">
    <img style="height: 50px; width: 50px;" src="views/images/twitterIcon.png" alt="placeholder social media icon" hspace="5"/>
    <img style="height: 50px; width: 50px;" src="views/images/youtubeIcon.png" alt="placeholder social media icon" hspace="5"/>
    <img style="height: 50px; width: 50px;" src="views/images/instagramIcon.png" alt="placeholder social media icon" hspace="5"/>
    <br><br><br>
    <h3>Twitter feed might go here</h3>
    <br><br><br>
    <h2>Word Cloud</h2>
    <h5> vegetarian - spicy - gluten-free <br>
        winter-warmer - family - tag <br>
        placeholder - tags - demo <br>
        follow - these - links <br><br><br>
        </h5>
</div></div><div class="col-sm-1"><br></div></div></div>

<!--main content ends and footer begins-->
<footer>
    <div class="container-fluid"><div class="row">
                <div class="col-sm-12" id="footBanner">
                           
                    <h4> &COPY; <?= date('Y'); ?></h4>
                
            </div>
        </div>
    
</div>
</footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
