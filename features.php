<?php require 'header.php'; ?>

<style>
.row{
  padding-top: 75px;
  padding-bottom: 75px;
}
.footer {
  position: fixed;
  bottom: 0;
  width: 100%;
  height: 100px; /* Set the fixed height of the footer here */
  line-height: 60px; /* Vertically center the text there */
  background-color: #3333ff;
}
.space {
	height:60px;
}
</style>
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Features
      <!--<small>Subheading</small>-->
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">Features</li>
    </ol>

      <!-- Project One -->
      <div class="row">
        
        <div class="col-md-6">
          <h3>Budgeting</h3>
          <p>Manage your budget, track spending in various categories and manage your expectations with future spending.</p>
        </div>
        <div class="col-md-6">
          <img class="img-fluid rounded mb-3 mb-md-0" src="files/images/feature-budget.png" alt="" width="700" height="300">
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Project Two -->
      <div class="row">
        <div class="col-md-6">
          <video width="500" height="300"  controls poster="files/images/feature-studentloan.png">
            <source src="files/videos/feature-studentloans.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
        <div class="col-md-6">
          <h3>Student Loan Planning</h3>
          <p>Struggling with student loan debt? Use our unique student loan module to illustrate different scenarios to potentially reduce payments.</p>
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Project Three -->
      <div class="row">
        
        <div class="col-md-6">
          <h3>Interactive Retirement Planning</h3>
          <p>Understand how prepared you are for retirement using our interactive tools. Compare multiple scenarios, illustrate stress tests and more.</p>
        </div>
        <div class="col-md-6">
          <video width="500" height="300" controls poster="files/images/feature-retirement.png">
            <source src="files/videos/feature-retirement.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Project Four -->
      <div class="row">

        <div class="col-md-6">
          <img class="img-fluid rounded mb-3 mb-md-0" src="files/images/feature-socialsecurity.png" alt="" width="700" height="300">
        </div>
        <div class="col-md-6">
          <h3>Social Security Optimization</h3>
          <p>View the impact of their decision on when to start receiving Social Security benefits and the optimal solution that will maximize your Social Security income.</p>
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Project Three -->
      <div class="row">
        
        <div class="col-md-6">
          <h3>Account Aggregation</h3>
          <p>Use account aggregation to link your bank accounts and credit cards for budgeting, as well as any externally-held investment accounts so you can have a full picture of your financial situation.</p>
        </div>
        <div class="col-md-6">
          <img class="img-fluid rounded mb-3 mb-md-0" src="files/images/feature-account.png" alt="" width="700" height="300">
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Project Four -->
      <div class="row">

        <div class="col-md-6">
          <img class="img-fluid rounded mb-3 mb-md-0" src="files/images/feature-estate.png" alt="" width="700" height="300">
        </div>
        <div class="col-md-6">
          <h3>Estate Planning</h3>
          <p>Understanding the flow of assets at the end of retirement, including any possible tax ramifications.</p>
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Project Three -->
      <div class="row">
        
        <div class="col-md-6">
          <h3>Medicare Planning</h3>
          <p>Approaching age 65? Do you know what your options are for enrolling in Medicare? Review your options.</p>
        </div>
        <div class="col-md-6">
          <img class="img-fluid rounded mb-3 mb-md-0" src="files/images/feature-medicare.png" alt="" width="700" height="300">
        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
    <footer class="footer">
      <div class="container">
        <div class="row" style="padding-top: 25px;">
        
          <div class="col-sm-5" style="text-align: right;"><a href="pricing.php" class="btn  btn-primary text-uppercase" style="background-color: white;color:#002060;width: 200px;font-weight: bold;">Get Started</a></div>
          <div class="col-sm-2" style="text-align: center;"><p style="color:white;font-weight: bold;">OR</p></div>
          <div class="col-sm-5" style="text-align: left;"><a href="pricing.php" class="btn btn-primary text-uppercase" style="background-color: white;color:#002060;width: 350px;font-weight: bold;">Schedule Free Consultation</a></div>
        </div>
      </div>
    </footer>
<?php require 'footer.php'; ?>
<div class="space"></div>