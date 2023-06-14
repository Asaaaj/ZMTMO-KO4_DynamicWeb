<!DOCTYPE html>
<html lang="sk">
<?php if(!(isset($_GET['lang']))) {$_GET['lang'] = 'sk';} include 'jazyky/specifikacie_lang.php'?>
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
  <?php $stranka = "specifikacie"; include 'duplicity/navbar.php';?>
    <div class="contentbox">
      <section>
        <article class="specifikacie">
          <img src="media/frontside.jpg" alt="Predná strana" class="specifikacie" />
          <img src="media/backside.jpg" alt="Zadná strana" class="specifikacie" />
        </article>
        <article class="specifikacie">
          <h3 class="specifikacie">Apple iPhone 11 64GB</h3>
          <p class="specifikacie">
            <b><?php echo $lang[$_GET['lang']]['cena1']?></b> <br />
            <?php echo $lang[$_GET['lang']]['cena2']?>
          </p>
          <p class="specifikacie">
            <b><?php echo $lang[$_GET['lang']]['colors']?></b>
            <div class="circle"></div> <?php echo $lang[$_GET['lang']]['black']?>
            <div class="circle"></div> <?php echo $lang[$_GET['lang']]['white']?>
            <div class="circle"></div> <?php echo $lang[$_GET['lang']]['yellow']?>
            <div class="circle"></div> <?php echo $lang[$_GET['lang']]['purple']?>
            <div class="circle"></div> <?php echo $lang[$_GET['lang']]['green']?>
            <div class="circle"></div> <?php echo $lang[$_GET['lang']]['red']?><br>
          </p>
          <p class="specifikacie">
            <b><?php echo $lang[$_GET['lang']]['memory']?></b> 64GB, 128GB, 256 GB
          </p>
          <p class="specifikacie"><?php echo $lang[$_GET['lang']]['new']?></p>
        </article>
        <article class="specifikacie">
          <p>
            <h4 class="specifikacie"><?php echo $lang[$_GET['lang']]['features1']?> </h4>
            <?php echo $lang[$_GET['lang']]['riadok1']?><br />
            <?php echo $lang[$_GET['lang']]['riadok2']?><br />
            <?php echo $lang[$_GET['lang']]['riadok3']?><br />
            <?php echo $lang[$_GET['lang']]['riadok4']?><br />
            <?php echo $lang[$_GET['lang']]['riadok5']?><br />
            <?php echo $lang[$_GET['lang']]['riadok6']?><br />
            <?php echo $lang[$_GET['lang']]['riadok7']?><br />
            <?php echo $lang[$_GET['lang']]['riadok8']?><br />
            <?php echo $lang[$_GET['lang']]['riadok9']?><br />
          </p>
          <p>
            <h4 class="specifikacie"><?php echo $lang[$_GET['lang']]['features2']?></h4>
            <?php echo $lang[$_GET['lang']]['riadok10']?><br />
            <?php echo $lang[$_GET['lang']]['riadok11']?><br />
            <?php echo $lang[$_GET['lang']]['riadok12']?><br />
            <?php echo $lang[$_GET['lang']]['riadok13']?><br />
            <?php echo $lang[$_GET['lang']]['riadok14']?><br />
            <?php echo $lang[$_GET['lang']]['riadok15']?><br />
            <?php echo $lang[$_GET['lang']]['riadok16']?><br />
            <?php echo $lang[$_GET['lang']]['riadok17']?><br />
            <?php echo $lang[$_GET['lang']]['riadok18']?><br />
            <?php echo $lang[$_GET['lang']]['riadok19']?><br />
            <?php echo $lang[$_GET['lang']]['riadok20']?><br />
            <?php echo $lang[$_GET['lang']]['riadok21']?><br />
            <?php echo $lang[$_GET['lang']]['riadok22']?><br />
            <?php echo $lang[$_GET['lang']]['riadok23']?><br />
            <?php echo $lang[$_GET['lang']]['riadok24']?><br />
            <?php echo $lang[$_GET['lang']]['riadok25']?><br />
            <?php echo $lang[$_GET['lang']]['riadok26']?><br />
          </p>
          <p>
            <h4 class="specifikacie"><?php echo $lang[$_GET['lang']]['ringtones']?></h4>
            <h5>Opening</h5>
            <audio controls>
              <source src="media/iphone_7.mp3" type="audio/mpeg">
              <?php echo $lang[$_GET['lang']]['asup']?>
            </audio>
            <h5>Bell Tower</h5>
            <audio controls>
              <source src="media/bell_tower.mp3" type="audio/mpeg">
              <?php echo $lang[$_GET['lang']]['asup']?>
            </audio>
            <h5>Xylophone</h5>
            <audio controls>
              <source src="media/xylophone.mp3" type="audio/mpeg">
              <?php echo $lang[$_GET['lang']]['asup']?>
            </audio>
          </p>
        </article>
      </section>
    </div>
    <?php include 'duplicity/footer.php';?>
  </body>
</html>
