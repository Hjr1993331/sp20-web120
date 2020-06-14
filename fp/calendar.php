<?php include "includes/header.php";?>

<main id="calendar">
    <img src="images/calendar2020.jpg" alt="logo2020">
    <h1>Calendar & Event</h1>    
    
    
<!--Show/Hide Month View Calendar Based Upon Resolution--> 
    <div class='month-view embed-container'>
    <iframe src='https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=America%2FLos_Angeles&src=aGw4bmRhZGh1dTM1dDFncHZtMmtsbmZqcWtAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&src=ZW4udXNhI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&color=%237CB342&color=%230B8043&showTitle=0' style='border:solid 1px #777' width='800' height='600' frameborder='0' scrolling='no'></iframe>   
</div>
    
<!--Show/Hide Agenda View Calender Based Upon Resolution--> 
  <div class='agenda-view embed-container'>
    <iframe src='https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=America%2FLos_Angeles&src=aGw4bmRhZGh1dTM1dDFncHZtMmtsbmZqcWtAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&src=ZW4udXNhI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&color=%237CB342&color=%230B8043&showTitle=0&mode=AGENDA' style='border:solid 1px #777' width='800' height='600' frameborder='0' scrolling='no'></iframe></div>  
    
    
    </main>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside id="flexboxaside">
    <img src="images/avocado.jpg" alt="avocado">
    <h1><a href="http://hijirimaruo.com/web120/fp/index.php"><i>BIG Event coming SOON!</i></a></h1>
    
    <p>Every year we hunt for the world's most exquisite fruit to create a week of enchanting discovery and adventure! We were supposed to open last May, but because of the COVID-19, we couldn't open our farm. However, Washington States is now Phase2 , so we decided to open our farm in June 25, 2020! You might fall under the spell of sugary sweet watermelon, experience the explosive zest of freshly squeezed orange juice, indulge in juicy mangoes or buttery papayas, discover mamey sapote, longans and lychees, taste the exotic magic of dragon fruit and mangosteen, or maybe even become a fan of the legendary durian! Who knows what treat Mother Nature has in store for us this year!</p>
    
    
    <h1><a href="http://hijirimaruo.com/web120/fp/index.php"><i>Small Event coming SOON!</i></a></h1>
    <p>Every year we hunt for the world's most exquisite fruit to create a week of enchanting discovery and adventure! We were supposed to open last May, but because of the COVID-19, we couldn't open our farm. However, Washington States is now Phase2 , so we decided to open our farm in July 2, 2020! You might fall under the spell of sugary sweet watermelon, experience the explosive zest of freshly squeezed orange juice, indulge in juicy mangoes or buttery papayas, discover mamey sapote, longans and lychees, taste the exotic magic of dragon fruit and mangosteen, or maybe even become a fan of the legendary durian! Who knows what treat Mother Nature has in store for us this year!</p>
       
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
<!-- START Footer -->
<?php include "includes/calendarfooter.php";?>