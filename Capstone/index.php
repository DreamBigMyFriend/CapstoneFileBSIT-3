<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="css/main.css" rel="stylesheet">
      <title>Test</title>
  </head>
  <body>
      <header>
          <nav>
            <div class="nav_wrapper">
              <h1 class="logo">Hello</h1>
              <ul class="links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Home</a></li>
                <?php
                  if (isset($_SESSION["userid"])) {
                ?>
                  <li><a href="#"><?php echo $_SESSION["useruid"]; ?></a></li>
                  <li><a href="includes/logout.inc.php">LOGOUT</a></li>

                <?php
                }
                else
                {
                ?>
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.php">Sign up</a></li>
                <?php
                }
                ?>              
              </ul> 
            </div>
          </nav>  
      </header>
      
      <main>
        <h1> Welcome <?php
          if (isset($_SESSION["userid"])) {
        ?>
          <h1> <?php echo $_SESSION["useruid"];?></h1>
        <?php
          }
          else
          {
        ?>
        <?php
          }
        ?></h1>
      </main>

      <footer>
          <div class="footer-content">
            <div class="footer-quotes">
              <h3 class="footer-logo">Capstone</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, delectus?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint voluptate rerum, 
                llo dignissimos consequatur ipsum ducimus hic deleniti quibusdam est.</p>
            </div>
            <div class="footer-links">
              <ul class="socials">
                <li class="socials-li"><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                <li class="socials-li"><a href="#"><i class="fa fa-twitter"></i>  Twitter</a></li>
                <li class="socials-li"><a href="#"><i class="fa fa-google-plus"></i> Google+</a></li>
                <li class="socials-li"><a href="#"><i class="fa fa-youtube"></i> Youtube</a></li>
                <li class="socials-li"><a href="#"><i class="fa fa-linkedin-square"></i> Linkedin</a></li>              
              </ul>
            </div>
          </div>
          <div class="footer-bottom">
            <p>copyright &copy; <?php echo date("Y"); ?> Capstone</p>
          </div>
      </footer>
  </body>
</html>