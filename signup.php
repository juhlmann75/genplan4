<?php require 'header.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] != "POST") {?>
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
}
?>

<!-- Page Content -->
  <div class="container">

        <!-- Default form register -->
    <form class="text-center p-5" action="#!">

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

        <input type="text" class="form-control mb-4" id="inputAddress" placeholder="Address Line 1" name="address1" required="required">

        <input type="text" class="form-control mb-4" id="inputAddress2" placeholder="Address Line 2" name="address2" required="required">

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
          <input type="checkbox" class="custom-control-input" id="defaultRegisterInvestment" required="required" onclick="toggleInv();">
          <label class="custom-control-label" for="defaultRegisterInvestment">Create investment account on our Betterment platform?</label>
        </div>

        <div id="investmentAccount" style="display: none;text-align: left;margin-left: 25px;">
          <b>Funding Level:</b><br>
          <input type="radio" id="fundLevel1" name="fundLevel">
          <label for="fundLevel1">$50,000 - $100,000</label><br>
          <input type="radio" id="fundLevel2" name="fundLevel">
          <label for="fundLevel2">$100,001 - $200,000</label><br>
          <input type="radio" id="fundLevel3" name="fundLevel">
          <label for="fundLevel3">$200,001 +</label><br>
        </div>

        <div class="custom-control custom-checkbox" style="text-align: left;">
          <input type="checkbox" class="custom-control-input" id="defaultRegisterFormTerms" required="required">
          <label class="custom-control-label" for="defaultRegisterFormTerms">By checking this box, you acknowledge that you have read and agreed to the terms and conditions.</label>
        </div>
        <div class="custom-control custom-checkbox" style="text-align: left;">
          <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsPrivacy" required="required">
          <label class="custom-control-label" for="defaultRegisterFormNewsPrivacy">By checking this box, you acknowledge receipt of the <a href="https://synergosadvice.com/files/ADV_Part_2A_2B.pdf" target="_blank">regulatory ADV file</a> and <a href="https://synergosadvice.com/files/Privacy_Policy.pdf" target="_blank">Privacy Policy</a>.</label>
        </div>

        <!-- Sign up button -->
        <button class="btn my-4 btn-block" type="submit" style="background-color: #3333ff;color:white;">Submit</button>

    </form>
    <!-- Default form register -->
  </div>
  <br><br>
  <!-- /.container -->
<?php require 'footer.php'; ?>

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