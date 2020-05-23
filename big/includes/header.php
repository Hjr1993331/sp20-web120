<?php include 'portal-config.php'?>
<!doctype html>
<html>
<head>
<title><?=$title?></title>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
<!--    <link rel="stylesheet" href="css/nav.css" />-->
    <link rel="stylesheet" href="css/big.css" />
<!--    <link rel="stylesheet" href="css/forms.css" />-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
    <script src="js/script.js"></script>
</head>

<body>
<!-- START Wrapper -->
<div class="wrapper">
<header>
    <img id="logo" src="images/HJClogo.jpg" alt="logo">
    <h1><a href="index.php"><i class="logo fa <?=$logo?>"<?=$logo_color?>></i><?=$title?></a></h1>
  <nav>
  <ul class="topnav" id="myTopnav">   
     <li><a href="../index.php"><span><i class="fa fa-fw fa-bank"></i> Portal</span></a></li>
     <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i> Home</span></a></li>
      <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> Google</span></a><ul class="drop-down">
  <li><a href="map.php">Map</a></li>
  <li><a href="calendar.php">Calender</a></li>    
     </ul> </li>
     <li><a href="flexbox.php"><span>Flexbox</span></a></li>
     <li><a href="galleries.php"><span>Galleries</span></a></li>
     <li><a href="shoppingcarts.php"><span>Shopping Carts</span></a></li>
     <li><a href="siteapp.php"><span>Site vs App</span></a></li>
     <li><a href="webcam.php"><span>Lives</span></a></li>
     <li class="icon"> 
          <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li> 
  </ul>
</nav>
</header>
        
<!-- START LEFT COL -->
<section id="flexbox">
 <h2 class="pageID"><?=$PageID?></h2>