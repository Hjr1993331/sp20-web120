<?php
/**
 * multiple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * multiple.php provides a larger form with more elements to provide 
 * a richer example form.
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 2 2019/10/13
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @todo none
 */

#--------------END CONFIG AREA ------------------------#
?>

<!-- START HTML FORM -->

<form id="formtwo" action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
<div id="flexboxaside4">
    <label>
        First Name<br /><input type="text" name="Name" required="required" placeholder="First Name  (required)" title="Name is required" tabindex="10" size="44" />
    </label>
    </div>    
<div id="flexboxaside5">    
    <label>
        Last Name<br /><input type="text" name="Name" required="required" placeholder="Last Name  (required)" title="Name is required" tabindex="10" size="44" />
    </label>
</div>
<div id="flexboxaside6">	
    <label>
        Email<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
    </label>  
    
<!--
<div>	
    <label>
        How Did You Hear About Me?<br />
        <select name="How_Did_You_Hear_About_Me?" required="required" title="How You Heard is required" tabindex="30">
            <option value="">Choose How You Heard</option>
            <option value="Phone">Phone</option>
            <option value="Web">Web</option>
            <option value="Magazine">Magazine</option>
            <option value="A Friend">A Friend</option>
            <option value="Other">Other</option>
        </select>
    </label>
</div>

<div>	
    <fieldset>
        <legend>What Services Are You Interested In?</legend>
        <input type="checkbox" name="Interested_In[]" value="New Website" tabindex="40" /> New Website <br />
        <input type="checkbox" name="Interested_In[]" value="Website Redesign" /> Website Redesign <br />
        <input type="checkbox" name="Interested_In[]" value="Special Application" /> Special Application <br />
        <input type="checkbox" name="Interested_In[]" value="Lollipops" /> Complimentary Lollipops <br />
        <input type="checkbox" name="Interested_In[]" value="Other" /> Other <br />
    </fieldset>
</div>

    <div>	
    <fieldset>
        <legend>Would you like to join my mailing list?</legend>
        <input type="radio" name="Join_Mailing_List?" value="Yes" 
        required="required" title="Mailing list is required" tabindex="50"  
        /> Yes <br />
        <input type="radio" name="Join_Mailing_List?" value="No" /> No <br />
    </fieldset>
</div>    
    
-->
</div>
<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->

<div id="flexboxaside7">	
    <label>
        Comments<br /><textarea name="Comments" cols="36" rows="4" placeholder="Your comments are important to me!" tabindex="60"></textarea>
    </label>
</div>	
<div id="flexboxaside8" class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
<div id="flexboxaside9">
    <input type="submit" value="Submit!!!" />
</div>
    
</form>

<!-- END HTML FORM -->

