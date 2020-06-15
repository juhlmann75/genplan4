<?php require 'header.php'; ?>
<style>
section.pricing {
  background: #E9ECEF;
  border-radius: .25rem;
  margin-bottom:50px;
}

.pricing .card {
  border: none;
  border-radius: 1rem;
  transition: all 0.2s;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.pricing hr {
  margin: 1.5rem 0;
}

.pricing .card-title {
  margin: 0.5rem 0;
  font-size: 0.9rem;
  letter-spacing: .1rem;
  font-weight: bold;
}

.pricing .card-price {
  font-size: 3rem;
  margin: 0;
}

.pricing .card-price .period {
  font-size: 0.8rem;
}

.pricing ul li {
  margin-bottom: 1rem;
}

.pricing .text-muted {
  opacity: 0.7;
}

.pricing .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  opacity: 0.7;
  transition: all 0.2s;
}

/* Hover Effects on Card */

@media (min-width: 992px) {
  .pricing .card:hover {
    margin-top: -.25rem;
    margin-bottom: .25rem;
    box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.3);
  }
  .pricing .card:hover .btn {
    opacity: 1;
  }
}
</style>
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Pricing
      <!--<small>Subheading</small>-->
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">Pricing</li>
    </ol>

    

    <section class="pricing py-5">
      <div class="container">
        <div class="row">
          <!-- Free Tier -->
          <div class="col-lg-3">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Free</h5>
                <h6 class="card-price text-center" style="padding-bottom: 73px;">$0<span class="period">/month</span></h6>
                <hr>
                <ul class="fa-ul" style="padding-bottom: 311px;">
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Net Worth</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Cash Reserves</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Budget</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Debt</li>
                </ul>
                <form method="post" action="signup.php">
                  <input type="submit" class="btn btn-block btn-primary text-uppercase" name="free" value="Sign Up">
                </form>
              </div>
            </div>
          </div>
          <!-- Plus Tier -->
          <div class="col-lg-3">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Essentials</h5>
                <h6 class="card-price text-center">$25<span class="period">/month</span></h6>
                Fee waived with <b>$50,000</b> funding on our <a href="investment.php">Betterment investment platform</a>
                <hr>
                <ul class="fa-ul" style="padding-bottom: 40px;">
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Net Worth</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Cash Reserves</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Budget</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Debt</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Investment Allocation</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Student Loan Analysis</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Insurance Analysis</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Online help, email and chat support</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Annual Phone Consultation with Financial Advisor</li>
                </ul>
                <form method="post" action="signup.php">
                  <input type="submit" class="btn btn-block btn-primary text-uppercase" name="essentials" value="Sign Up">
                </form>
              </div>
            </div>
          </div>
          <!-- Pro Tier -->
          <div class="col-lg-3">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Plus</h5>
                <h6 class="card-price text-center">$45<span class="period">/month</span></h6>
                Fee waived with <b>$100,000</b> funding on our <a href="investment.php">Betterment investment platform</a>
                <hr>
                <ul class="fa-ul" style="padding-bottom: 56px;">
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Essentials Features +</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Retirement Analysis</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Retirement Stress Test</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Investment Sector & Style, Concentration</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Insurance Disability Analysis</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Tax Estimate</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Estate Checklist</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Semi-annual Phone Consultation with Financial Advisor</li>
                </ul>
                <form method="post" action="signup.php">
                  <input type="submit" class="btn btn-block btn-primary text-uppercase" name="plus" value="Sign Up">
                </form>
              </div>
            </div>
          </div>
          <!-- Pro Tier -->
          <div class="col-lg-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Advanced</h5>
                <h6 class="card-price text-center">$80<span class="period">/month</span></h6>
                Fee waived with <b>$200,000</b> funding on our <a href="investment.php">Betterment investment platform</a>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>All Plus Features +</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Investment Tax Allocation and Holdings</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Social Security and Medicare</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Cash Flows</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Retirement Distribution Analysis</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Long Term Care and Property/Casualty</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Estate Analysis</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Quarterly Phone Consultation with Financial Advisor</li>
                </ul>
                <form method="post" action="signup.php">
                  <input type="submit" class="btn btn-block btn-primary text-uppercase" name="advanced" value="Sign Up">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
  <!-- /.container -->
<?php require 'footer.php'; ?>