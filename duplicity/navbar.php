<?php 
$navlang = array(
  'en' => array(
    'domov' => 'Home',
    'specifikacie' => 'Specifications',
    'porovnaniem' => 'Mobile comparison',
    'porovnanief' => 'Camera comparison',
    'ceny' => 'Prices',
    'recenzie' => 'Reviews',
    'doporucenep' => 'Recommended products',
  ),
  'sk' => array(
    'domov' => 'Domov',
    'specifikacie' => 'Špecifikácie',
    'porovnaniem' => 'Porovnanie mobilov',
    'porovnanief' => 'Porovnanie fotoaparátov',
    'ceny' => 'Ceny',
    'recenzie' => 'Recenzie',
    'doporucenep' => 'Doporučené produkty',
  ),
);
echo "<header><a href='Domov.php'><img src='Asaj-Signature.svg' id='logo' alt='logo'/></a>
<nav>
  <ul>";
    if($stranka == 'domov'){
        echo "<li><a href='Domov.php?lang=" . $_GET['lang'] . "' class='active'>" . $navlang[$_GET['lang']]['domov'] . "</a></li>";}
    else{
        echo "<li><a href='Domov.php?lang=" . $_GET['lang'] . "'>" . $navlang[$_GET['lang']]['domov'] . "</a></li>";}
    if($stranka == 'specifikacie') {
        echo "<li><a href='Specifikacie.php?lang=" . $_GET['lang'] . "' class='active'>" . $navlang[$_GET['lang']]['specifikacie'] . "</a></li>";}
    else{
        echo "<li><a href='Specifikacie.php?lang=" . $_GET['lang'] . "'>" . $navlang[$_GET['lang']]['specifikacie'] . "</a></li>";}
    if($stranka == 'porovnaniem'){ 
        echo "<li><a href='PorovnanieMobilov.php?lang=" . $_GET['lang'] . "' class='active'>" . $navlang[$_GET['lang']]['porovnaniem'] . "</a></li>";}
    else{
        echo "<li><a href='PorovnanieMobilov.php?lang=" . $_GET['lang'] . "'>" . $navlang[$_GET['lang']]['porovnaniem'] . "</a></li>";}
    if($stranka == 'porovnanief') {
        echo "<li><a href='PorovnanieF.php?lang=" . $_GET['lang'] . "'  class='active'>" . $navlang[$_GET['lang']]['porovnanief'] . "</a></li>";}    
    else{
        echo "<li><a href='PorovnanieF.php?lang=" . $_GET['lang'] . "'>" . $navlang[$_GET['lang']]['porovnanief'] . "</a></li>";}
    if($stranka == 'ceny'){
        echo "<li><a href='Ceny.php?lang=" . $_GET['lang'] . "' class= 'active'>" . $navlang[$_GET['lang']]['ceny'] . "</a></li>";}
    else{
        echo "<li><a href='Ceny.php?lang=" . $_GET['lang'] . "'>" . $navlang[$_GET['lang']]['ceny'] . "</a></li>";}
    if($stranka == 'recenzie'){
        echo "<li><a href='Recenzie.php?lang=" . $_GET['lang'] . "' class='active'>" . $navlang[$_GET['lang']]['recenzie'] . "</a></li>";}
    else{
        echo "<li><a href='Recenzie.php?lang=" . $_GET['lang'] . "'>" . $navlang[$_GET['lang']]['recenzie'] . "</a></li>";}
    if($stranka == 'doporucenep'){
        echo "<li><a href='DoporuceneProdukty.php?lang=" . $_GET['lang'] . "' class='active'>" . $navlang[$_GET['lang']]['doporucenep'] . "</a></li>";}
    else{
        echo "<li><a href='DoporuceneProdukty.php?lang=" . $_GET['lang'] . "'>" . $navlang[$_GET['lang']]['doporucenep'] . "</a></li>";
    }

    switch($stranka) {
        case 'domov':
            echo "<li>
            <a href='Domov.php?lang=sk'
              ><img src='SlovakiaFlag.png' class='skeng' alt='skflag'/></a>
          </li>
          <li>
            <a href='Domov.php?lang=en'>
            <img src='EnglandFlag.png' class='skeng' alt='engflag'/></a>
          </li>";
          break;
        case 'specifikacie':
            echo "<li>
            <a href='Specifikacie.php?lang=sk'
              ><img src='SlovakiaFlag.png' class='skeng' alt='skflag'/></a>
          </li>
          <li>
            <a href='Specifikacie.php?lang=en'>
            <img src='EnglandFlag.png' class='skeng' alt='engflag'/></a>
          </li>";
          break;
        case 'porovnaniem':
            echo "<li>
            <a href='PorovnanieMobilov.php?lang=sk'
              ><img src='SlovakiaFlag.png' class='skeng' alt='skflag'/></a>
          </li>
          <li>
            <a href='PorovnanieMobilov.php?lang=en'>
            <img src='EnglandFlag.png' class='skeng' alt='engflag'/></a>
          </li>";
          break;
        case 'porovnanief':
          echo "<li>
          <a href='PorovnanieF.php?lang=sk'
            ><img src='SlovakiaFlag.png' class='skeng' alt='skflag'/></a>
        </li>
        <li>
          <a href='PorovnanieF.php?lang=en'>
          <img src='EnglandFlag.png' class='skeng' alt='engflag'/></a>
        </li>";
          break;
        case 'ceny':
           echo "<li>
           <a href='Ceny.php?lang=sk'
             ><img src='SlovakiaFlag.png' class='skeng' alt='skflag'/></a>
         </li>
         <li>
           <a href='Ceny.php?lang=en'>
           <img src='EnglandFlag.png' class='skeng' alt='engflag'/></a>
         </li>";
           break;
        case 'recenzie':
            echo "<li>
            <a href='Recenzie.php?lang=sk'
              ><img src='SlovakiaFlag.png' class='skeng' alt='skflag'/></a>
          </li>
          <li>
            <a href='Recenzie.php?lang=en'>
            <img src='EnglandFlag.png' class='skeng' alt='engflag'/></a>
          </li>";
            break;
        case 'doporucenep':
            echo "<li>
            <a href='DoporuceneProdukty.php?lang=sk'
              ><img src='SlovakiaFlag.png' class='skeng' alt='skflag'/></a>
          </li>
          <li>
            <a href='DoporuceneProdukty.php?lang=en'>
            <img src='EnglandFlag.png' class='skeng' alt='engflag'/></a>
          </li>";
            break;
    }
    echo "</ul></nav></header>";
?>