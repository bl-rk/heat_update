<?php 
session_start(); //starts seeion



$pageTitle="Loan Application"; 
  include("inc/header.php");
?>

<section class="section-padding-100-0">

  <div class="contact---area">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 col-lg-8">
                  <div class="contact-form-area contact-page">

                   <h4 class="mb-50">Loan Details:</h4>


 <span id="error">
<?php
// To show error of page 2.
if (!empty($_SESSION['error_page2'])) {
 echo $_SESSION['error_page2'];
 unset($_SESSION['error_page2']);
}
?>
 </span>

<form action="ln-pg3.php" method="post">
    <div class="row">

  <!-- ## Account form start ##-->
       <!--  <div class="">Account Info: -->

  <div class="col-lg-6">
      <div class="form-group">        
          <p><input class="form-control" placeholder="Loan Request..."  name="Loan Request" required></p>
      </div>
        </div>
      <div class="col-lg-6">
      <div class="form-group">
          <p><input class="form-control" placeholder="Bank Name ..." name="Bank Name" required></p>
    </div>
      </div>

      <div class="col-lg-6">
       <div class="form-group">
          <p><input class="form-control" placeholder="BVN..." name="BVN" required></p>
        </div>
          </div>

        <div class="col-lg-6">
          <div class="form-group">  
          <p><input class="form-control" placeholder="Account No..." name="Account No" required></p>
        </div>
          </div>

     <div class="col-lg-6">
          <div class="form-group">

           <p> Loan Type: </p> <!--  Type of loan -->
          <select  class="form-control" name="Type of Loan" >
              <option value="Male"> HEAT Salary Advance (HSA)</option>
              <option value="Male"> HEAT Loan-2-Staff (HLS)</option>
              <option value="Male"> HEAT Collaterised Loans (HCL)</option>
              <option value="Male"> HEAT Household Finance (HHF)</option>
              <option value="Male"> HEAT Transport Finance (HTF)</option>
              <option value="Male"> HEAT Back-2-School (HBS)</option>
              <option value="Male"> HEAT Business Finance (HBS)</option>
          </select>
        </div>
          </div>


           <div class="col-lg-6">
          <div class="form-group">
           <p> Payment Tenor: </p> <!--  Type of loan -->
          <select  class="form-control" name="Payment Duration" >
              <option value="Months">1 Month</option>
              <option value="Months">2 Month</option>
              <option value="Months">3 Month</option>
              <option value="Months">4 Month</option>
              <option value="Months">5 Month</option>
              <option value="Months">6 Month</option>
          </select>
        </div>
          </div>
          
<!-- <h4 class="mb-50">Occupation Details:</h4> -->

  <div class="col-lg-6">
    <div class="form-group">
     <input class="form-control" type="text" placeholder="Company's Name" name="Company's Name" required>
  </div>
    </div>

     <div class="col-lg-6">
          <div class="form-group">  
          <p><input class="form-control" placeholder="Occupation  (Ex:Operations)..." name="Occupation" required></p>
        </div>
          </div>
        
 <div class="col-12">
    <div class="form-group">
        <input class="form-control" id="Address" placeholder="Address" type="text" required>
    </div>
  </div >        
     <div class="col-7"> <!-- locality-->
      <input type="text" class="form-control" placeholder="City" required>
    </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="State" required>
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Zip" required>
  </div>


      <div class="col-lg-12">
        <div class="form-group">
           <p> Duration in occupation</p>
   <select  class="form-control" name="Type of Loan" >
              <option value="1 Years"> 1 Years</option>
              <option value="2 Years"> 2 Years</option>
              <option value="3 Years"> 3 Years</option>
              <option value="4 Years"> 4 Years</option>
              <option value="5 Years"> 5 Years</option>
              <option value="6 Years"> 6 Years</option>
              <option value="7- Yearsn."> 7  Years- Till Date.</option>
          </select>
        </div>
          </div>



      </div>


    <div class="form-group row">
      <div class="col">
      <input class="btn credit-btn mt-30" type="reset" value="Reset" />
      </div>
    <div class="col d-flex justify-content-end">
      <input class="btn credit-btn mt-30" type="submit" value="submit" />

    </div>
      </div>

    </div>


   


                 </div>

</form>
         
                </div>
              </div>
            </div>
          </div>
        </div>
<!--## Account form end ##-->
</section>

<?php 
  include("inc/footer.php");
?>

