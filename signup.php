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