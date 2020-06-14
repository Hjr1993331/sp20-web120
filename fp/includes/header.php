<?php include 'portal-config.php'?>
<!doctype html>
<html lang="en">
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<!--
/*
 * jQuery Blueberry Slider v0.4 BETA
 * http://marktyrrell.com/labs/blueberry/
 *
 * Copyright (C) 2011, Mark Tyrrell <me@marktyrrell.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */
--> 
<link rel="stylesheet" href="css/blueberry.css" type="text/css">   
<link href="css/final.css" type="text/css" rel="stylesheet">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="js/jquery.blueberry.js"></script>

<script>
$(window).load(function() {
	$('.blueberry').blueberry();
});
    
</script>    
</head>
<body>    
<header>
    <a href="index.php"><img id="logo" src="images/farmland.png"  alt="logo"></a>
    <h1 id="pageID"><i class="logo fa <?=$logo?>"<?=$logo_color?>></i><?=$title?></h1>
        
        
    
    </header>    
    
<nav>
 <ul class="topnav" id="myTopnav">
     <li><a href="index.php">Home</a></li>
     <li><a href="about.php">About</a></li>
     <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i>Shop</span></a><ul class="drop-down">
     <li><a href="products.php">Products</a></li>
      
     </ul>
     </li>
     <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i>Information</span></a>
     <ul class="drop-down">
     <li><a href="appo.php">Appointments</a></li>
     <li><a href="calendar.php">Calendar</a></li>     
      </ul>
     </li>
     <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i>Contact</span></a>
     <ul class="drop-down">
     <li><a href="map.php">Map</a></li>
     <li><a href="contact.php">Contact Us</a></li>     
      </ul>
     </li>
    <li class="icon"> 
          <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
 </ul>
    </nav> 
