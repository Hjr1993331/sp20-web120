<?php include "includes/header.php";?>

<div id="make">
    <h1>Appointment</h1>
    
 <section id="form">   
<form class="formone" action="formhandler.php" method="post">
<fieldset class="name">
<legend>Appointment Form</legend>
<label>Regions</label> 
<select>
<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>    
    
    </select>    
    
<label>Name</label>
    <input type="text" name="name" placeholder="Enter your name">
<label>Organization Name(If possible)</label>    
    <input type="text" name="occupation" placeholder="Enter your occupation">  
<label for="dateofbirth">Date Of Birth</label>
<input type="date" name="dateofbirth" id="dateofbirth">    
    
<label>Email</label>    
    <input type="email" name="email" placeholder="e.g. example@netcom.com">   
<label>Comments or Question?</label>
    <textarea name="comments" placeholder="What can we do to help you?"></textarea>
<input type="submit" name="submit" value="Send it!">    
 
   

</fieldset>
    
</form>
     
</section> 
    
<aside id="appoaside">
    <h2>Admission Prices</h2>
    <p>Farmland momo's also offers a hands on animal experience everyday! Indoors and out of the weather, where our animals are clean and dry, enjoying the attention of kids and grown ups too. Here at Farmland momo's baby goats, cows, chickens, and dogs. It's not just a Petting zoo. It's also about education.</p>
    <p>Children 0-2 years FREE</p>
    <p>Children 3-17 years $5</p>
    <p>Adults 18-59 years $6</p>
    </aside>    
    
    
<?php include "includes/appofooter.php";?>    