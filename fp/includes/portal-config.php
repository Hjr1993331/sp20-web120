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
        $title = " Farmland momo"; 
        $logo = 'fa-file';
        $logo_color = ' style="color:#00ff00"';      
    break;  
        
    case 'about.php':
        $title = " Momo's about"; 
        $logo = 'fa-file';
        $logo_color = ' style="color:#99ff44"';      
    break;     
            
    case 'calendar.php':
        $title = " Momo's calendar"; 
        $logo = 'fa-calendar-check-o';
        $logo_color = ' style="color:#0000ff"';      
    break;  
        
    case 'appo.php':
        $title = " Momo's appointments"; 
        $logo = 'fa-book';
        $logo_color = ' style="color:#ff4584"';      
    break;      
        
    case 'contact.php':
        $title = " Momo's contact"; 
        $logo = 'fa-book';
        $logo_color = ' style="color:#1234ff"';      
    break;   
        
    case 'map.php':
        $title = " Momo's map"; 
        $logo = 'fa-location-arrow';
        $logo_color = ' style="color:#ff0000"';      
    break; 
        
    case 'products.php':
        $title = " Momo's products"; 
        $logo = 'fa-search';
        $logo_color = ' style="color:#ff8767"';      
    break;    
        
    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        
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
