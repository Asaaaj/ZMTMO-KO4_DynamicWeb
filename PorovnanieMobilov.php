<!DOCTYPE html>
<html lang="sk">
<?php if(!(isset($_GET['lang']))) {$_GET['lang'] = 'sk';} include 'jazyky/porovnaniem_lang.php'?>
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
  <?php $stranka = "porovnaniem"; include 'duplicity/navbar.php';?>
    <div class="contentbox">
      <h1><?php echo $lang[$_GET['lang']]['bodytitle']?></h1>
      <hr class="domov" />
      <article class="porovnaniem">
        <div class="porovnaniem">
          <img src="media/backside.jpg" alt="Apple iPhone 11" class="porovnaniem" />
        </div>
        <div class="porovnaniem">
          <img
            src="media/s10ebackside.png"
            alt="Samsung Galaxy S10e"
            class="porovnaniem"
          />
        </div>
      </article>
      <table class="porovnaniem1">
        <tr class="porovnaniem">
          <td></td>
          <td><b>Apple iPhone 11</b></td>
          <td><b>Samsung Galaxy S10e</b></td>
        </tr>
        <tr>
          <td><b><?php echo $lang[$_GET['lang']]['price']?></b></td>
          <td>800</td>
          <td>780</td>
        </tr>
        <tr>
          <td><b><?php echo $lang[$_GET['lang']]['date']?></b></td>
          <td><?php echo $lang[$_GET['lang']]['dateA']?></td>
          <td><?php echo $lang[$_GET['lang']]['dateS']?></td>
        </tr>
        <tr>
          <td><b><?php echo $lang[$_GET['lang']]['dimensions']?></b></td>
          <td>150.9 x 75.7 x 8.3</td>
          <td>142.2 x 69.9 x 7.9</td>
        </tr>
        <tr>
          <td><b><?php echo $lang[$_GET['lang']]['weight']?></b></td>
          <td>194 g</td>
          <td><b>150 g</b></td>
        </tr>
        <tr>
          <td><b><?php echo $lang[$_GET['lang']]['battery']?></b></td>
          <td>3110 mAh</td>
          <td>3100 mAh</td>
        </tr>
      </table>
      <table class="porovnaniem">
        <tr class="porovnaniem">
          <td><b><?php echo $lang[$_GET['lang']]['screen']?></b></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><b><?php echo $lang[$_GET['lang']]['technology']?></b></td>
          <td>IPS LCD</td>
          <td>Dynamic AMOLED</td>
        </tr>
        <tr>
          <td><b><?php echo $lang[$_GET['lang']]['screensize']?></b></td>
          <td><b>6.1"</b></td>
          <td>5.8"</td>
        </tr>
        <tr>
          <td><b><?php echo $lang[$_GET['lang']]['stbratio']?></b></td>
          <td>79.0%</td>
          <td><b>83.3%</b></td>
        </tr>
        <tr>
          <td><b><?php echo $lang[$_GET['lang']]['resolution']?></b></td>
          <td>1792 x 828 px</td>
          <td>2280 x 1080 px</td>
        </tr>
        <tr>
          <td><b><?php echo $lang[$_GET['lang']]['screenppi']?></b></td>
          <td>326 PPI</td>
          <td><b>438 PPI</b></td>
        </tr>
      </table>
      <table class="porovnaniem">
        <tr class="porovnaniem">
          <td><b><?php echo $lang[$_GET['lang']]['camera']?></b></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><b><?php echo $lang[$_GET['lang']]['rearcam']?></b></td>
          <td><?php echo $lang[$_GET['lang']]['rearcamA']?></td>
          <td><b><?php echo $lang[$_GET['lang']]['rearcamS']?></b></td>
        </tr>
        <tr>
          <td><b>Video</b></td>
          <td>2160p 60fps / 1080p 240fps</td>
          <td>2160p 60fps / 1080p 240fps / 720p 960fps</td>
        </tr>
        <tr>
          <td><b><?php echo $lang[$_GET['lang']]['frontcam']?></b></td>
          <td><b>12MP + TOF 3D camera</b></td>
          <td>10MP</td>
        </tr>
        <tr>
          <td><b>Video</b></td>
          <td><b>2160p 60fps / 1080p 120fps</b></td>
          <td>2160p 30fps / 1080p 30fps</td>
        </tr>
      </table>
      <table class="porovnaniem">
        <tr class="porovnaniem">
          <td><b><?php echo $lang[$_GET['lang']]['performance']?></b></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><b><?php echo $lang[$_GET['lang']]['os']?></b></td>
          <td>iOS 14 (updatable)</td>
          <td>Android 9(updatable)</td>
        </tr>
        <tr>
          <td><b><?php echo $lang[$_GET['lang']]['chipset']?></b></td>
          <td>Apple A13 Bionic</td>
          <td>Exynos 9820 Octa</td>
        </tr>
        <tr>
          <td><b><?php echo $lang[$_GET['lang']]['cpu']?></b></td>
          <td><?php echo $lang[$_GET['lang']]['cpuA']?></td>
          <td><?php echo $lang[$_GET['lang']]['cpuS']?></td>
        </tr>
        <tr>
          <td><b>RAM (GB)</b></td>
          <td>4</td>
          <td><b>6 / 8</b></td>
        </tr>
        <tr>
          <td><b><?php echo $lang[$_GET['lang']]['exmem']?></b></td>
          <td><?php echo $lang[$_GET['lang']]['exmemA']?></td>
          <td>microSD (512 GB)</td>
        </tr>
        <tr>
          <td><b><?php echo $lang[$_GET['lang']]['intmem']?></b></td>
          <td>64 / 128 / 256</td>
          <td>128 / 256</td>
        </tr>
      </table>
      <table class="porovnaniem">
        <tr class="porovnaniem">
          <td><b><?php echo $lang[$_GET['lang']]['connectivity']?></b></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><b>SIM</b></td>
          <td><b>1x + 1x e-sim</b></td>
          <td>1x + 1x hybrid</td>
        </tr>
        <tr>
          <td><b><?php echo $lang[$_GET['lang']]['network']?></b></td>
          <td>4G</td>
          <td>4G</td>
        </tr>
        <tr>
          <td><b>Wi-Fi</b></td>
          <td>Wi-Fi 6</td>
          <td>Wi-Fi 6</td>
        </tr>
        <tr>
          <td><b>NFC</b></td>
          <td><?php echo $lang[$_GET['lang']]['nfc']?></td>
          <td><?php echo $lang[$_GET['lang']]['nfc']?></td>
        </tr>
        <tr>
          <td><b>Bluetooth</b></td>
          <td>5.0</td>
          <td>5.0</td>
        </tr>
      </table>
      <table class="porovnaniem">
        <tr class="porovnaniem">
          <td><b>AUDIO</b></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><b><?php echo $lang[$_GET['lang']]['radio']?></b></td>
          <td><?php echo $lang[$_GET['lang']]['radioA']?></td>
          <td><?php echo $lang[$_GET['lang']]['radioS']?></td>
        </tr>
        <tr>
          <td><b><?php echo $lang[$_GET['lang']]['jack']?></b></td>
          <td><?php echo $lang[$_GET['lang']]['jackA']?></td>
          <td><b><?php echo $lang[$_GET['lang']]['jackS']?></b></td>
        </tr>
      </table>
      <table class="porovnaniem">
        <tr class="porovnaniem">
          <td><b><?php echo $lang[$_GET['lang']]['otherfunctions']?></b></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><b><?php echo $lang[$_GET['lang']]['sensors']?></b></td>
          <td>
            <b>Face ID</b><?php echo $lang[$_GET['lang']]['sensors1']?><br />
            <?php echo $lang[$_GET['lang']]['sensors2']?>
          </td>
          <td>
            <b>Fingerprint</b><?php echo $lang[$_GET['lang']]['sensors1']?><br />
            <?php echo $lang[$_GET['lang']]['sensors2']?>
          </td>
        </tr>
        <tr>
          <td><b><?php echo $lang[$_GET['lang']]['charging']?></b></td>
          <td><b><?php echo $lang[$_GET['lang']]['chargingA1']?></b><?php echo $lang[$_GET['lang']]['chargingA2']?></td>
          <td><?php echo $lang[$_GET['lang']]['chargingS1']?><b><?php echo $lang[$_GET['lang']]['chargingS2']?></b></td>
        </tr>
        <tr>
          <td><b><?php echo $lang[$_GET['lang']]['resistance']?></b></td>
          <td><b><?php echo $lang[$_GET['lang']]['resistanceA']?></b></td>
          <td><?php echo $lang[$_GET['lang']]['resistanceS']?></td>
        </tr>
        <tr>
          <td><b><?php echo $lang[$_GET['lang']]['payment']?></b></td>
          <td><b>Apple Pay(Visa, MasterCard, AMEX certified)</b></td>
          <td>Samsung Pay ( Visa, MasterCard certified)</td>
        </tr>
      </table>
      <article class="contentbox">
        <h1><?php echo $lang[$_GET['lang']]['userinterface']?></h1>
        <video controls muted>
          <source src="media/iphone11.MP4" type="video/mp4" />
          <?php echo $lang[$_GET['lang']]['vsup']?>
        </video>
      </article>
    </div>
    <?php include 'duplicity/footer.php';?>
  </body>
</html>
