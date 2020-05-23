<?php include "includes/header.php";?>

<p>This website shows my BIG Research Essays and YouTube live video, Department of Transportation (DOT) live web camera, Google Map and Calendar. If you click on nav tags, you can go to another websites, but I'm going to put links below the paragraph.</p>
    
 <ul>
     <li><a href="index.php">Home</a></li>
     <li><a href="map.php">Map</a></li>
     <li><a href="calendar.php">Calender</a></li>    
     <li><a href="flexbox.php">Flexbox</a></li>
     <li><a href="galleries.php">Galleries</a></li>
     <li><a href="shoppingcarts.php">Shopping Carts</a></li>
     <li><a href="siteapp.php">Site vs App</a></li>
     <li><a href="webcam.php">Lives</a></li>
     </ul>

<div class='embed-container'><iframe src='https://www.youtube.com/embed/fA1NW-T1QXc' frameborder='0' allowfullscreen></iframe></div>

</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside id="flexboxaside3">
    <h3>Contact Me</h3>
 <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "hjroath1993@gmail.com";  //place your/your client's email address here
        $toName = "Hijiri"; //place your client's name here
        $website = "Contact From Name";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
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
<?php include "includes/footer.php";?>