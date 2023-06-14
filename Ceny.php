<!DOCTYPE html>
<html>
<?php if(!(isset($_GET['lang']))) {$_GET['lang'] = 'sk';} include 'jazyky/ceny_lang.php'?>
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
  <?php $stranka = "ceny"; include 'duplicity/navbar.php';?>
    <div class="contentbox">
      <h1><?php echo $lang[$_GET['lang']]['bodytitle']?></h1>
      <hr class="ceny" />
      <article class="ceny">
        <section class="ceny">
          <img src="media/alzask.jpg" alt="Alza logo" class="ceny" />
        </section>
        <section class="ceny">
          <h3>Alza.sk</h3>
          <p>604,90€</p>
        </section>
      </article>
      <hr class="ceny" />
      <article class="ceny">
        <section class="ceny">
          <img src="media/NAY-logo-2016.jpg" alt="Nay logo" class="ceny" />
        </section>
        <section class="ceny">
          <h3>Nay</h3>
          <p>569€</p>
        </section>
      </article>
      <hr class="ceny" />
      <article class="ceny">
        <section class="ceny">
          <img src="media/mall.png" alt="Mall logo" class="ceny" />
        </section>
        <section class="ceny">
          <h3>Mall</h3>
          <p>565,65€</p>
        </section>
      </article>
      <hr class="ceny" />
      <article class="ceny">
        <section class="ceny">
          <img src="media/hej.sk-logo.jpg" alt="Hejsk logo" class="ceny" />
        </section>
        <section class="ceny">
          <h3>Hej.sk</h3>
          <p>569€</p>
        </section>
      </article>
      <hr class="ceny" />
      <article class="ceny">
        <section class="ceny">
          <img src="media/gigastore.png" alt="Gigastore logo" class="ceny" />
        </section>
        <section class="ceny">
          <h3>Gigastore</h3>
          <p>528,76€</p>
        </section>
      </article>
    </div>
    <?php include 'duplicity/footer.php';?>
  </body>
</html>
