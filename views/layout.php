      
<a href="http://localhost/FinalProject/index.php"><img class="col-sm-12" style="height:auto; width:100%; align:center; margin:0;" src="views/images/creepyheaderfinal3.png"/></a>

  <nav class="navbar navbar-expand-lg" style="background-color:#1B1E16;">
    
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler1" aria-controls="#navbarToggler1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><img style="height:auto; width:100%" src='views/images/hamburger.png' alt='menu icon'/></span>
  </button>

<!--   this toggles the navbar -->
    <div class="collapse navbar-collapse" id="navbarToggler1">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0"> 
<!--            <h2 text-decoration="none" color="#F8FFF4">
                <li class="nav-item"><a class="nav-link" href='?controller=pages&action=about'>About</a></li></h2>-->
          
<li class="nav-item"><a class="nav-link" href='?controller=pages&action=home'><h1 style="color:#F8FFF4;"> Recent Posts</h1></a></li>
<!--            <h2 text-decoration="none" color="#F8FFF4">
                <li class="nav-item"><a class="nav-link" href='#'>Archive</a></li></h2>-->

                <!--<li class="nav-item"><a class="nav-link" href='?controller=pages&action=about'>About</a></li></h2>-->
<!--            <h2 text-decoration="none" color="#F8FFF4">
                <li class="nav-item"><a class="nav-link" href='#'>Recent Posts</a></li></h2>-->

                <div class="dropdown" >
                
                    <li class="nav-item"><a class="nav-link" href="#">
                            <h1 style="color:#F8FFF4">Archive</h1></a></li>
                
                    <div class="dropdown-content">
                        <a href="?controller=pages&action=archive&month=April" id="04"><h1 style="font-size:1.5vw;color:#F8FFF4">Apr-18</h1></a>
                        <a href="?controller=pages&action=archive&month=March" id="03"><h1 style="font-size:1.5vw;color:#F8FFF4">Mar-18</h1></a>
                        <a href="?controller=pages&action=archive&month=February" id="02"><h1 style="font-size:1.5vw;color:#F8FFF4">Feb-18</h1></a>
                        <a href="?controller=pages&action=archive&month=January" id="01"><h1 style="font-size:1.5vw;color:#F8FFF4">Jan-18</h1></a>
<!--                        <a href="?controller=pages&action=archive&month=December" id="12">December 2017</a>
                        <a href="?controller=pages&action=archive&month=November" id="11">November 2017</a>
                        <a href="?controller=pages&action=archive&month=October" id="10">October 2017</a>
                        <a href="?controller=pages&action=archive&month=September" id="09">September 2017</a>
                        <a href="?controller=pages&action=archive&month=August" id="08">August 2017</a>
                        <a href="?controller=pages&action=archive&month=July" id="07">July 2017</a>
                        <a href="?controller=pages&action=archive&month=June" id="06">June 2017</a>
                        <a href="?controller=pages&action=archive&month=May" id="05">May 2017</a>   -->
                    </div>
                </div>

            

            <?php 
            if (empty($_SESSION)){
                echo "<li class='nav-item'><a class='nav-link' href='?controller=pages&action=contactUs'><h1 style='color:#F8FFF4'>Get in Touch</h1></a></li>";
            }
            if (!empty($_SESSION)){
                echo "";
                }?>
            <?php 
            if (empty($_SESSION)){
                echo "<li class='nav-item'><a class='nav-link' href='?controller=pages&action=about'><h1 style='color:#F8FFF4'>About</h1></a></li>";
            }
            if (!empty($_SESSION)){
                echo "";
                }?>            
                
                    <?php          
                   
            if (empty($_SESSION)){
              echo "";
            }
            
            if(!empty($_SESSION)){
                echo "<li class='nav-item'><a class='nav-link' href='?controller=blogPost&action=write'>
                        <h1 style='color:#F8FFF4'>New Blog Post</h1></a></li>";
            }   
            ?>
            
                    <?php          
                   
            if (empty($_SESSION)){
              echo "";
            }
            if(!empty($_SESSION)){
                require_once('models/commentList.php');
                require_once('models/comment.php');
                $commentList = new CommentList();
                echo "<li class='nav-item'><a class='nav-link' href='?controller=comment&action=viewUnapproved'><h1 style='color:#F8FFF4'>Moderate Comments (". count($commentList->getCommentList()). ")" . "</h1></a></li>";
            }   

            ?>
<!--            this is the create post navbar link that should hopefully only appear when the blog owner is logged in-->
        </ul>
  </div>
<div class="dropdown dropdown-dark">
<button type="button" href="?controller=login&action=login" id="userLoginButton" class="btn" data-toggle="dropdown">
    <img style="height: auto; width: 75%;" src="views/images/lockIcon.png">

    <span class="caret"></span></button>
  <ul class="dropdown-menu dropdown-menu-right dropdown-content">
  <?php      
      if (empty($_SESSION['username'])) {       
        echo '<li class="loginDropdown"><a style="text-align: center" class="loginDropdown" href="?controller=pages&action=login"><h1 style="font-size:1.5vw;color:#F8FFF4">Log In</h1></a></li>';
        echo '<li class="loginDropdown"><a style="text-align: center" class="loginDropdown" href="?controller=pages&action=register"><h1 style="font-size:1.5vw;color:#F8FFF4">Register to contribute</h1></a></li>';
      }
      else if (!empty ($_SESSION['username'])) {
          echo '<li class="loginDropdown"><a style="text-align: center" class="loginDropdown" href="?controller=pages&action=logout"><h1 style="font-size:1.5vw;color:#F8FFF4">Log Out</h1></a></li>';

      }
    ?>
  </ul>
    </div>
        </nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <br />
            <br />
        </div>
    </div>
</div>
<!--navbar ends and main content begins-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-1"><br /></div>
        <div class="col-sm-8">
            <div id="postContainer">
            <?php require_once('routes.php'); ?>
            </div>
        </div>     
        <div class="col-sm-2">
            <div id="sideWidgetBar">
            <a href="https://twitter.com/skyGITwomen/" target="_blank"><img style="height: 50px; width: 50px;" src="views/images/twitterIcon.png" alt="placeholder social media icon" hspace="5"/></a>
            <a href="https://www.youtube.com/channel/UC_cjkT0TLAhi2ZoBShBs6qw/featured?view_as=subscriber/" target="_blank"><img style="height: 50px; width: 50px;" src="views/images/youtubeIcon.png" alt="placeholder social media icon" hspace="5"/></a>
            <a href="https://www.instagram.com/sarahs__87/" target="_blank"><img style="height: 50px; width: 50px;" src="views/images/instagramIcon.png" alt="placeholder social media icon" hspace="5"/></a>
            <a href="https://www.facebook.com/skygitwomen.sky.7/" target="_blank"><img style="height: 50px; width: 50px;" src="views/images/Facebook.png.png" alt="placeholder social media icon" hspace="5"/></a>
            <br><br><br>
             <!-- LightWidget WIDGET --><script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/c80acf2e3ca0546083f9cea5704acbb0.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border-radius:5px;overflow:hidden;"></iframe>


            <br /><br /><br />
            <h2>Search</h2>
            <?php require_once('views/sidebar/wordCloud.php');?>    
            </div>
        </div>
        <div class="col-sm-1">
            <br />
        </div>
    </div>
</div>

<!--main content ends and footer begins-->
<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12" id="footBanner">
                <h4> &COPY; <?= date('Y'); ?></h4> 
            </div>
        </div>
    </div>
</footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
