<?php ob_start('ob_gzhandler'); ?> 
<?php header('Content-type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
<?php
if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
echo('<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>');
?>

    <title>Otto</title>

    <meta name="description" content="">
    <meta name="apple-itunes-app" content="app-id=000000000">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">

    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="favicon.ico"> 

    <meta property="og:image" content="">
    <meta property="og:title" content="Monoga">
    <meta property="og:url" content="monoga.com">
    <meta property="og:description" content="Monogamy starts here">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="src/modernizr.min.js"></script>
    <script src="src/core.js"></script>

  </head>
    <body>

      <img src="img/blur.png" id="bg" alt="">

      <div id="container">
        <div id="follower">
          <a href="//vimeo.com/84201820" target="_self" class="vimeo"></a>
        </div>
      </div>

     <h1>Otto</h1> 
     <h2>Dowload for iOS</h2>
     <h3><a href="//vimeo.com/84201820" target="_self" class="vimeo">Watch <span class="hashtag">&#35;OttoApp</span></a></h3>
      
     <footer>
       <nav>
         <ul>
           <li><a href="#">About</a></li>
           <li><a href="#">Support</a></li>
           <li><a href="#">Blog</a></li>
           <li><a href="#">Jobs</a></li>
           <li><a href="#">Privacy</a></li>
           <li><a href="#">Terms</a></li>
           <li><a href="#">Safety</a></li>
         </ul>
       </nav>    
     </footer>

    </body>
</html>