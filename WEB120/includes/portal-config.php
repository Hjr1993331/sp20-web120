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
        $title = " Hijiri's WEB120 Portal Page"; 
        $logo = 'fa-id-card ';
        $logo_color = ' style="color:#00ff00"';
        $PageID = 'Welcome';
    break;   
        
    case 'contactme.php':
        $title = " Hijiri's WEB120 Contact Page"; 
        $logo = 'fa-envelope-open';
        $logo_color = ' style="color:#0000ff"';
        $PageID = 'Contact Hijiri!';
    break;  
        
    case 'aia.php':
         $title = " Hijiri's Final Project AIA";
         $logo = "fa-address-book-o";
         $logo_color = ' style="color:#482765"';
         $PageID = "Hijiri's AIA";        
    break;
        
    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'welcome';
        
        
}

$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] ="Final Project";
$nav1['contactme.php'] = "Contact Hijiri";


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
