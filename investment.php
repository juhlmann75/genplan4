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
.taxes {
  float:left;
}
.taxes-text {
  width:95%;
  float:left;
  padding-left:10px;
}
</style>

    <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <div class="row" style="padding:0">
        <div class="col-lg-6 mb-6">
          <h1 class="display-3">Investments Powered by Betterment</h1>
          <br>
          <p><a class="btn btn-primary btn-lg" href="pricing.php" role="button">Sign Up &raquo;</a></p>
        </div>
        <div class="col-lg-6 mb-6">
          <iframe src="https://www.youtube.com/embed/GguDOpP8I_g" width="500" height="270" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
         
        </div>
      </div>
    </div>
  </div>

  <!-- Page Content -->
  <div class="container">

  

      <!--row -->
      <div class="row">
        
        <div class="col-md-6">
          <p class="text-muted">Why we're here</p>
          <h3>To help make the most of your money.</h3>
          <p>Betterment takes <a hre="">proven investment strategies</a> that have been around for decades and uses technology to make them more efficient.</p>
        </div>
        <div class="col-md-6">
          <img class="img-fluid rounded mb-3 mb-md-0" src="files/images/investment-1.jpeg" alt="" width="700" height="300">
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!--row -->
      <div class="row">
        
        <div class="col-md-6">
          <h3>Save more on taxes</h3>
          <p>Automated trading and tax-saving strategies, including asset location and tax loss harvesting can help reduce tax impact.</p>
        </div>
        <div class="col-md-6">
          <i class="fas fa-check taxes"></i><p class="taxes-text">We can help determine which combination of traditional, Roth, and taxable accounts - all taxed differently - may be appropriate for your specific situation.</p>
          <div style="clear: both;"></div>
          <i class="fas fa-check taxes"></i><p class="taxes-text">We use ETFs which are generally more tax-efficient and lower-cost than mutual funds, which is why we have all-ETF portfolios.</p>
          <div style="clear: both;"></div>
          <i class="fas fa-check taxes"></i><p class="taxes-text">Assets are organized based on taxes. High-tax assets belong in IRAs and low-tax assets belong in taxable accounts. We can help you decide if turning on the automated asset location feature is right for your situation.</p>
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!--row -->
      <div class="row">
        
        <div class="col-md-6">
          <h3>When you make a deposit or receive dividends...</h3>
        </div>
        <div class="col-md-6">
          <i class="fas fa-check taxes" style="margin-top: 7px;"></i>
          <div class="taxes-text">
              <h4>Your portfolio is rebalanced.</h4>
              <br>
              <p>Rebalancing can help protect your portfolio from market volatility, but doing it by selling securities can cost you in taxes. To help avoid this, rebalancing uses deposits and dividends.</p>
          </div>
          <div style="clear: both;"></div>
          
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!--row -->
      <div class="row">
        
        <div class="col-md-6">
          <h3>When you make a withdrawal or change your allocation...</h3>
        </div>
        <div class="col-md-6">
          <i class="fas fa-check taxes" style="margin-top: 7px;"></i>
          <div class="taxes-text">
              <h4>The tool works to minimize transaction taxes.</h4>
              <br>
              <p>To help lower transaction taxes, your assets are sold in a specific order - the ones with the lowest tax burden go first.</p>
          </div>
          <div style="clear: both;"></div>
          
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!--row -->
      <div class="row">
        
        <div class="col-md-6">
          <h3>If a fund loses value...</h3>
        </div>
        <div class="col-md-6">
          <i class="fas fa-check taxes" style="margin-top: 7px;"></i>
          <div class="taxes-text">
              <h4>The tool harvests tax losses.</h4>
              <br>
              <p>When investments lose value, you can sell them to help offset the taxes that come with income and capital gains. When enabled, the Tax Loss Harvesting+ feature automates this process to help keep taxes low.</p>
          </div>
          <div style="clear: both;"></div>
          
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!--row -->
      <div class="row">
        
        <div class="col-md-6">
          <h3>Invest in low-cost, tax-efficient portfolios.</h3>
          <p>Betterment's investment philosophy is backed by decades of research that comes to an important conclusion: Over the long term, a diversified portfolio of low-cost index funds is likely to outperform a high-cost, actively managed portfolio. There are multiple portfolio options, and we can help you choose which is right for you.</p>
        </div>
        <div class="col-md-6">
          <img class="img-fluid rounded mb-3 mb-md-0" src="files/images/investment-2.png" alt="" width="700" height="300">
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