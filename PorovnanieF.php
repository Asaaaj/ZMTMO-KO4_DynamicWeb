<!DOCTYPE html>
<html>
<?php if(!(isset($_GET['lang']))) {$_GET['lang'] = 'sk';} include 'jazyky/porovnanief_lang.php'?>
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
    <?php $stranka = "porovnanief"; include 'duplicity/navbar.php';?>
    <div class="contentbox">
      <h1><?php echo $lang[$_GET['lang']]['bodytitle']?></h1>
      <hr class="domov" />
      
      <?php 
      $pocet = 0;

      foreach(glob("fotky/*.png") as $fotka) {
        $pocet++;
        
        if(($pocet%2) != 0) {
          echo "<article class='porovnanief'>";
        }
        echo "<section> <img src='$fotka' alt='$fotka'/> </section>";
        if(($pocet%2) == 0) {
          echo "</article> <hr class='domov'/>";
        }
      }
      if(($pocet%2) != 0) {
        echo "</article> <hr class='domov'/>";
        }
      ?>



    </div>
    <?php include 'duplicity/footer.php';?>
  </body>
</html>
