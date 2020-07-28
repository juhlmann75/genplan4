<?php require 'header.php'; ?>

<?php

if(isset($_POST['submit'])){ 

	//var_dump($_POST);
	    $Package = strip_tags(htmlspecialchars($_POST['package']));
		$FirstName = strip_tags(htmlspecialchars($_POST['firstname']));
		$LastName = strip_tags(htmlspecialchars($_POST['lastname']));
		$Phone = strip_tags(htmlspecialchars($_POST['phonenumber']));
		$PrimaryEmailAddress  = strip_tags(htmlspecialchars($_POST['email']));
		$City = strip_tags(htmlspecialchars($_POST['city']));
		$State = strip_tags(htmlspecialchars($_POST['state']));
		$Zip = strip_tags(htmlspecialchars($_POST['zipcode']));
		$Betterment = "Off";
		$FundingLevel = "None";
		if(isset($_POST['betterment'])){ 
			$Betterment = "On";
			$FundingLevel = strip_tags(htmlspecialchars($_POST['fundLevel']));
		}
		

		$to = 'genplan4@robot.zapier.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
		$email_subject = "GenPlan4.xyz Sign-up Form:  $FirstName $LastName";
		$email_body = 	"Package: $Package\n".
						"First Name: $FirstName\n".
						"Last Name: $LastName\n".
						"Phone: $Phone\n".
						"Primary Email Address: $PrimaryEmailAddress\n".
						"City: $City\n".
						"State: $State\n".
						"Zip: $Zip\n".
						"Betterment: $Betterment\n".
						"Funding Level: $FundingLevel\n".
						"RightCapital: On\n";
		$headers = "From: $PrimaryEmailAddress\n";  

		mail($to,$email_subject,$email_body,$headers);

		$to = 'david@genplan4.xyz';
		mail($to,$email_subject,$email_body,$headers);

	?>
<div class="text-center" style="padding-top:125px;padding-bottom: 15%;">
	<h1 class="display-3">Thank you for submitting the sign up form!</h1>
	<p class="lead">You should receive an email indicating the next steps as we process your order.  If you don't see it in your inbox, please check your spam folder.</p>
	<hr>
	<p>
		Having trouble? <a href="contact.php">Contact us</a>
	</p>
	<p class="lead">
		<a class="btn btn-primary btn-sm" href="index.php" role="button">Continue to homepage</a>
	</p>
</div>


<?php
}
else if ($_SERVER["REQUEST_METHOD"] != "POST") {?>
  <script>window.location.replace("pricing.php");</script>
<?php
}
else{
  $packageName = "";
  if( isset($_POST['free']) )
  {
    $packageName = 'Free';
  }
  else if( isset($_POST['essentials']) ) {
    $packageName = 'Essentials';
  }
  else if( isset($_POST['plus']) ) {
    $packageName = 'Plus';
  }
  else if( isset($_POST['advanced']) ) {
    $packageName = 'Advanced';
  }
?>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

<!-- Page Content -->
  <div class="container">

        <!-- Default form register -->
    <form class="text-center p-5" method="post">
    	<input type="hidden" name="package" value="<?php echo $packageName; ?>">
        <p class="h4 mb-4">Submit form to onboard for the <?php echo $packageName; ?> package</p>

        <div class="form-row mb-4">
            <div class="col">
                <!-- First name -->
                <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name" name="firstname" required="required">
            </div>
            <div class="col">
                <!-- Last name -->
                <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name" name="lastname" required="required">
            </div>
        </div>

        <!-- E-mail -->
        <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" name="email" required="required">

        <!-- Phone number -->
        <input type="text" id="defaultRegisterPhonePassword" class="form-control mb-4" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock" name="phonenumber" required="required">

        <div class="form-row mb-4">
            <div class="col">
                <input type="text" id="inputCity" class="form-control" placeholder="City" name="city" required="required">
            </div>
            <div class="col">
                <select name="state" id="inputState" class="form-control" required="required">
                  <option value="" selected="selected">Select a State</option>
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
            </div>
            <div class="col">
                <input type="text" id="inputZip" class="form-control" placeholder="Zip Code" name="zipcode" required="required">
            </div>
        </div>

        <div class="custom-control custom-checkbox" style="text-align: left;">
          <input type="checkbox" class="custom-control-input" id="defaultRegisterInvestment" onclick="toggleInv();" name="betterment">
          <label class="custom-control-label" for="defaultRegisterInvestment">Create investment account on our Betterment platform?</label>
        </div>

        <div id="investmentAccount" style="display: none;text-align: left;margin-left: 25px;">
          <b>Funding Level:</b><br>
          <input type="radio" id="fundLevel1" name="fundLevel" value="One">
          <label for="fundLevel1">$50,000 - $100,000</label><br>
          <input type="radio" id="fundLevel2" name="fundLevel" value="Two">
          <label for="fundLevel2">$100,001 - $200,000</label><br>
          <input type="radio" id="fundLevel3" name="fundLevel" value="Three">
          <label for="fundLevel3">$200,001 +</label><br>
        </div>

        <div class="custom-control custom-checkbox" style="text-align: left;">
          <input type="checkbox" class="custom-control-input" id="defaultRegisterFormTerms" required="required">
          <label class="custom-control-label" for="defaultRegisterFormTerms">By checking this box, you acknowledge that you have read and agreed to the <a href="files/GenPlan Terms and Conditions.pdf" target="_blank">terms and conditions</a>.</label>
        </div>
        <div class="custom-control custom-checkbox" style="text-align: left;">
          <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsPrivacy" required="required">
          <label class="custom-control-label" for="defaultRegisterFormNewsPrivacy">By checking this box, you acknowledge receipt of the <a href="files/ADV_Part_2A_2B.pdf" target="_blank">regulatory ADV file</a> and <a href="files/GenPlan4 Privacy Policy.pdf" target="_blank">Privacy Policy</a>.</label>
        </div>

        <!-- Sign up button -->
        <input class="btn my-4 btn-block" type="submit" name="submit" style="background-color: #3333ff;color:white;" value="Submit">

    </form>
    <!-- Default form register -->
  </div>
  <br><br>
  <!-- /.container -->
  <script type="text/javascript">
  
function toggleInv(){
  if(document.getElementById("defaultRegisterInvestment").checked == true){
    $('#investmentAccount').slideDown();
  }
  else {
    $('#investmentAccount').slideUp();
  }
}
</script>

 <?php
 }
?>
<?php require 'footer.php'; ?>

