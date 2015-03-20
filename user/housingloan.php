<?php
    
    include('header.php');
    include('menu.php');


?>
<div class="jumbotron">
  <div class="container">
    <h1 class="text-center">Hello, <?php echo $_SESSION['user']['firstname']." ".$_SESSION['user']['lastname']?></h1>
        <p class="text-center"><a class="btn btn-danger btn-lg" href="#" role="button" data-toggle="modal" data-target="#myModal">Calculate your EMI</a></p>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Calculate EMI</h4>
      </div>
      <div class="modal-body">
          <div class="row">
          <div class="col-md-6 col-lg-6">
        <div class="form-group">
            <label>Enter Loan Amount</label>
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-inr fa-lg"></i></div>
                <input class="form-control" id="loanamount" onkeypress="return isNumberKey(event)" onkeyup="calculateEMI()" value="100000" placeholder="Enter loan amount">
            </div>
          </div>
         <div class="form-group">
            <label>Interest Rate</label>
            <div class="input-group">
                <div class="input-group-addon"><strong>&#37;</strong></div>
                <input class="form-control" id="percentage" onkeypress="return isNumberKey(event)" onkeyup="calculateEMI()" value="10" placeholder="Enter percentage">
            </div>
        </div>
         <div class="form-group">
            <label>Loan Tenure</label>
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-calendar fa-lg"></i></div>
                <input class="form-control" id="tenure" onkeypress="return isNumberKey(event)" onkeyup="calculateEMI()" placeholder="Enter duration">
            </div>
              </div>
          <div class="form-group" id="emiCalculator">
                <label class="radio-inline">
                  <input type="radio" name="periodname" value="yearly" checked> Yearly
                </label>
                <label class="radio-inline">
                  <input type="radio" name="periodname" value="monthly"> Monthly
                </label>
          </div>
        </div>
              <div class="col-md-6 col-lg-6 text-center" >
              Loan EMI
              <h4><span class="fa fa-inr"></span>&nbsp;<span id="emi"></span></h4>
                <hr>
            Total Interest Payable
              <h4><span class="fa fa-inr"></span>&nbsp;<span id="interest"></span></h4>
                <hr>
             Total of Payments<br>(Principal + Interest)
              <h4><span class="fa fa-inr"></span>&nbsp;<span id="total"></span></h4>
              </div>
        </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>





<?php

    include('footer.php');

?>