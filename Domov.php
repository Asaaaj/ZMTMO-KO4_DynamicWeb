<!DOCTYPE html>
<html lang="sk">
<?php if(!(isset($_GET['lang']))) {$_GET['lang'] = 'sk';} include 'jazyky/domov_lang.php'?>
  <head>
    <meta charset="utf-8" />
    <meta name="author" content="Adam Jurcisin" />
    <meta name="description" content="Apple iPhone 11" />
    <meta name="keywords" content="Apple, iPhone" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" <?php echo "href=" . $lang[$_GET['lang']]['icon']?> type="image/icon type" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title><?php echo $lang[$_GET['lang']]['title']?></title>
  </head>
  <body>
  <?php $stranka = "domov"; include 'duplicity/navbar.php';?>
    <div class="contentbox">
      <hr class="domov" />
      <h1 class="domov">Apple iPhone 11</h1>
      <hr class="domov" />
      <video autoplay loop muted class="domov">
        <source src="media/domovvideo.mp4" type="video/mp4" />
        Your browser does not support video tag.
      </video>
    </div>
    <?php include 'duplicity/footer.php';?>
  </body>
</html>