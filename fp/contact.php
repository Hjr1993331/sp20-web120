<?php include "includes/header.php";?>

<main id="contactmain">   
    <img src="images/contactlogo.jpg" alt="contactlogo">
    </main>
<aside id="contactright">
    <h2>CLOSED UNTIL FURTHER NOTICE</h2>
    <p>YOUR SAFETY IS OUR TOP PRIORITY</p>
    <p>Consistent with the guidance we’ve received from Governor Inslee and Mayor Durkan, Farmland momo has made the decision to suspend operations until 25 June, 2020 for precautionary reasons related to the COVID-19 pandemic. During our closure, we are working hard to provide a safe and clean environment when we reopen. We’re excited to welcome you back to the icon of Washington States soon! If you have any questions, please contact us!</p>
    
    
    
    </aside>      
    
<section id="contact">
    <h1>Contact Us</h1>
    
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
</section>
        
    

<?php include "includes/contactfooter.php";?>            