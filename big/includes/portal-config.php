<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//echo $_SERVER(['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

$logo_color = ''; //make logo_color an empty string by default


switch(THIS_PAGE){
        
    case 'index.php':
        $title = " Hijiri's BIG Home Page"; 
        $logo = 'fa-google';
        $logo_color = ' style="color:#00ff00"';
        $PageID = 'About My Page';        
    break;   
        
    case 'map.php':
        $title = " Hijiri's Google Map Page"; 
        $logo = 'fa-google';
        $logo_color = ' style="color:#0000ff"';
        $PageID = 'Washington State Ferry Teminal';
    break;  
        
     case 'calendar.php':
        $title = " Hijiri's Google Calendar Page"; 
        $logo = 'fa-google';
        $logo_color = ' style="color:#ff0000"';
        $PageID = 'Google Calendar';
    break;     
        
    case 'flexbox.php':
         $title = " Hijiri's Flexbox Page";
         $logo = "fa-sticky-note";
         $logo_color = ' style="color:#482765"';
         $PageID = "Flexbox Essay";        
    break;
        
    case 'galleries.php':
         $title = " Hijiri's Galleries Page";
         $logo = "fa-sticky-note";
         $logo_color = ' style="color:#987654"';
         $PageID = "Galleries Essay";        
    break;  
        
    case 'shoppingcarts.php':
         $title = " Hijiri's Shopping Carts Page";
         $logo = "fa-sticky-note";
         $logo_color = ' style="color:#123456"';
         $PageID = "Shopping Carts Essay";        
    break;    
        
    case 'siteapp.php':
         $title = " Hijiri's Site vs App Page";
         $logo = "fa-sticky-note";
         $logo_color = ' style="color:#423955"';
         $PageID = "Site vs App Essay";        
    break;  
        
    case 'webcam.php':
         $title = " Hijiri's Live Page";
         $logo = "fa-camera";
         $logo_color = ' style="color:#940565"';
         $PageID = "Beautiful Beach (live)";        
    break;     
            
        
    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'welcome';
        
        
}

//$nav1['index.php'] = "Welcome";
//$nav1['big/index.php'] = "Big";
//$nav1['aia.php'] = "AIA";
//$nav1['flowchart.php'] = "Flowchart";
//$nav1['fp/index.php'] ="Final Project";
//$nav1['contactme.php'] = "Contact Hijiri";


/*here we're creating a function to generate links and keep the highlight on the current page.

<li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart/Layout</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Hijiri</a></li>


*/

function makeLinks($nav1) 
{
    $myReturn = '';
   foreach($nav1 as $url => $text){
       
       if($url == THIS_PAGE){
           //selected page - add class reference
               $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";       
       }else{
           $myReturn .= "<li><a href=\"$url\">$text</a></li>";    
       }
       
       
    
   }  
    
    return $myReturn;
}


?>
