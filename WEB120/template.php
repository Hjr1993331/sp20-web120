<!doctype html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<title>Final Template</title>

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
<link href="css/template.css" type="text/css" rel="stylesheet">
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
    <img id="logo" src="images/farmland.png" alt="logo">
    <h1 class="pageID">Farmland momo</h1>
        
        
    
    </header>    
    
<nav>
 <ul class="topnav" id="myTopnav">
     <li><a href="#">Home</a></li>
     <li><a href="#">About</a></li>
     <li><a href="#">Shop</a></li>
     <li><a href="#">Information</a></li>
     <li><a href="#">Contact</a></li>
    <li class="icon"> 
          <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
 </ul>
    </nav> 

<main>

   <div class="blueberry">
      <ul class="slides">
        <li><img src="images/yellow.jpg" alt="yellow"></li>
        <li><img src="images/blue.jpg" alt="blue"></li>  
        <li><img src="images/pink.jpg" alt="pink"></li>
        <li><img src="images/green.jpg" alt="green"></li>
      </ul>
    </div>

    
<!--
    <li><img src="images/yellow.jpg" alt="yellow"></li>
        <li><img src="images/blue.jpg" alt="blue"></li>  
        <li><img src="images/pink.jpg" alt="pink"></li>
        <li><img src="images/green.jpg" alt="green"></li>
-->

    </main> 
    
<aside>
    <div class="third">
       <h3>This is my headline 3!</h3> 
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 19</p>
       
       </div>
       
    <div class="third">
        <h3>This is my headline 3!</h3> 
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 19</p>
       
       
       </div>   
       
   
    <div class="third row">
       
       <h3>This is my headline 3!</h3> 
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 19</p>
       
       </div> 

    
    </aside> 
    

    
<script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
     </script>
    
    

    <!-- END RIGHT COL -->
 
<?php include "includes/templatefooter.php";?>