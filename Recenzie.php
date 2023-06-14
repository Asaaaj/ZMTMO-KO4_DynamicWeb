<!DOCTYPE html>
<html>
<?php if(!(isset($_GET['lang']))) {$_GET['lang'] = 'sk';} include 'jazyky/recenzie_lang.php'?>
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
  <?php $stranka = "recenzie"; include 'duplicity/navbar.php';?>
    <div class="contentbox">
      <h1><?php echo $lang[$_GET['lang']]['bodytitle']?></h1>
      <hr class="recenzie" />
      <?php 
      $meno = $pohlavie = $email = $hodnotenie = $recenzia = "";

      function test($odoslaneData){
        $odoslaneData = trim($odoslaneData);
        $odoslaneData = stripslashes($odoslaneData);
        $odoslaneData = htmlspecialchars($odoslaneData);
        return $odoslaneData;}

      if ($_POST) {
        $meno = test($_POST['name']);
        $pohlavie = test($_POST['gender']);
        $email = test($_POST['email']);
        $hodnotenie = test($_POST['hodnotenie']);
        $recenzia = test($_POST['message']);
        
        if(!(empty($meno) || empty($pohlavie) || empty($email) || empty($hodnotenie) || empty($recenzia))) {
          $tabulka = fopen("komentare/komentare.txt", "a");
          fwrite($tabulka, "<section class='contentbox' style='margin-bottom: 20px;'><h3 style='display: inline-block; margin-right:10px; margin-bottom:5px;'>" . $meno . "</h3>");
          if($hodnotenie == 'doporucujem') {
            fwrite($tabulka, "<p style='font-weight: bold; color: green; margin-bottom:5px; display: inline-block;'> doporučuje </p>");}
          elseif($hodnotenie == 'nedoporucujem') {
            fwrite($tabulka, "<p style='font-weight: bold; color: red; margin-bottom:5px; display: inline-block;'> nedoporučuje </p>");}
          fwrite($tabulka, "<p style='margin:0; color:grey;'>". $pohlavie . ", " . $email . "</p><p>" . $recenzia . "</p></section><hr class='recenzie' />\n");  
          fclose($tabulka);
        }
      }
      include "komentare/komentare.txt";
       
      ?>
  
      <h2><?php echo $lang[$_GET['lang']]['formtitle']?></h2>
      <section>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <label for="name"><?php echo $lang[$_GET['lang']]['name']?><span style="color: red;">*</span></label> <br />
          <input type="text" id="name" name="name" /> <br />
          <label for="gender"><?php echo $lang[$_GET['lang']]['gender']?><span style="color: red;">*</span></label> <br />
          <input type="radio" id="muz" name="gender" value="muž" />
          <label for="muz"><?php echo $lang[$_GET['lang']]['man']?></label><br />
          <input type="radio" id="zena" name="gender" value="žena" />
          <label for="zena"><?php echo $lang[$_GET['lang']]['woman']?></label><br />
          <label for="email">Email:<span style="color: red;">*</span></label><br />
          <input type="email" id="email" name="email" /><br />
          <label for="hodnotenie"><?php echo $lang[$_GET['lang']]['rating']?><span style="color: red;">*</span></label> <br />
          <input type="radio" id="doporucujem" name="hodnotenie" value="doporucujem" />
          <label for="doporucujem"><?php echo $lang[$_GET['lang']]['formrecommend']?></label><br />
          <input type="radio" id="nedoporucujem" name="hodnotenie" value="nedoporucujem" />
          <label for="nedoporucujem"><?php echo $lang[$_GET['lang']]['formnotrecommend']?></label><br />
          <label for="message"><?php echo $lang[$_GET['lang']]['message']?><span style="color: red;">*</span></label><br />
          <textarea name="message" rows="10" cols="50"></textarea><br />
          <input type="submit" name="submit" value="Odoslať" />
        </form>
      </section>
    </div>
    <?php include 'duplicity/footer.php';?>
  </body>
</html>
