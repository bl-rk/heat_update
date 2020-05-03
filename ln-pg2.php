<?php 
session_start(); //starts seeion

// Checking first page values for empty,If it finds any blank field then redirected to first page.
if (isset($_POST['fname']))
{
    if (empty($_POST['fname'])
    || empty($_POST['lname'])
    || empty($_POST['email'])
    || empty($_POST['contact'])
    )
  // Setting error message
  {$_SESSION['error'] = "Mandatory field(s) are missing, Please fill it again";
  header("location: ln-pg1.php"); }// Redirecting to first page  
  else 
        {
        // Sanitizing email field to remove unwanted characters.
        $_POST['email'] = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); 
        // After sanitization Validation is performed.
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))

        { 
          // Validating Contact Field using regex.
          if (!preg_match("/^[0-9]{11}$/", $_POST['contact']))
            { $_SESSION['error'] = "11 digit contact number is required.";
            header("location:ln-pg1.php");}
        else 
          {
             if (($_POST['fname']) !== ($_POST['lname'])) 
                {foreach ($_POST as $key => $value) 
                {$_SESSION['post'][$key] = $value;}} 
             else
              {$_SESSION['error'] = "Please insert correct names.";
              header("location: ln-pg1.php");} //redirecting to first page
           }
         }   

        else 
             {  $_SESSION['error'] = "Invalid Email Address";
              header("location: ln-pg1.php"); }//redirecting to first page
    }
}


else 
  { if (empty($_SESSION['error2'])) 
    {header("location: ln-pg1.php"); }
    //redirecting to first page after checking pg 2 is empty and return to 1 for a fresh check 
  } 

$pageTitle="Loan Application"; 
  include("inc/header.php");
?>

<?php
  
  // if (isset($_POST['post'])){
  // $_SESSION[$key] = $_POST[$key];
  //  $key = $_SESSION[$key]; 


$_SESSION['fname'] = $_POST['fname'];
$fname = $_SESSION['fname'];

$_SESSION['lname'] = $_POST['lname'];
$lname = $_SESSION['lname'];


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
      if (!empty($_SESSION['error2'])) 
      { echo $_SESSION['error2'];
        unset($_SESSION['error2']); }

    ?>    
  </span>
  

<form action="ln-pg3.php" method="post">
    <div class="row">

  <!-- ## Account form start ##-->
       <!--  <div class="">Account Info: -->

  <div class="col-lg-6">
      <div class="form-group">        
          <p><input class="form-control" placeholder="Loan Request..."  type="number" name="amount-rq" required></p>
      </div>
        </div>
      <div class="col-lg-6">
      <div class="form-group">
          <p><input class="form-control" placeholder="Bank Name ..."  name="bank-name" required></p>
    </div>
      </div>

      <div class="col-lg-6">
       <div class="form-group">
          <p><input class="form-control" placeholder="BVN..." name="bvn" type="number" required></p>
        </div>
          </div>

        <div class="col-lg-6">
          <div class="form-group">  
          <p><input class="form-control" placeholder="Account No..." type="number" name="accut-num" required></p>
        </div>
          </div>

     <div class="col-lg-6">
          <div class="form-group">

           <p> Loan Type: </p> <!--  Type of loan -->
          <select  class="form-control" name="Type of Loan" >
              <option value="" name="" > HEAT Salary Advance (HSA)</option>
              <option value="" name="" > HEAT Salary Advance (HSA)</option>
              <option value="" name="" > HEAT Loan-2-Staff (HLS)</option>
              <option value="" name="" > HEAT Collaterised Loans (HCL)</option>
              <option value="" name="" > HEAT Household Finance (HHF)</option>
              <option value="" name="" > HEAT Transport Finance (HTF)</option>
              <option value="" name="" > HEAT Back-2-School (HBS)</option>
              <option value="" name="" > HEAT Business Finance (HBS)</option>
          </select>
        </div>
          </div>


           <div class="col-lg-6">
          <div class="form-group">
           <p> Payment Tenor: </p> <!--  Type of loan -->
          <select  class="form-control" name="Payment Duration" >
              <option value="1 Months" name="" >1 Month</option>
              <option value="2 Months" name="" >2 Month</option>
              <option value="3 Months" name="" >3 Month</option>
              <option value="4 Months" name="" >4 Month</option>
              <option value="5 Months" name="" >5 Month</option>
              <option value="6 Months" name="" >6 Month</option>
          </select>
        </div>
          </div>
          
<!-- <h4 class="mb-50">Occupation Details:</h4> -->

  <div class="col-lg-6">
    <div class="form-group">
     <input class="form-control" type="text" placeholder="Company's Name" name="comp-name" required>
  </div>
    </div>

     <div class="col-lg-6">
          <div class="form-group">  
          <p><input class="form-control" placeholder="Occupation  (Ex:Operations)..." name="occupation" required></p>
        </div>
          </div>
        
 <div class="col-12">
    <div class="form-group">
        <input class="form-control" id="Address" placeholder="Company's Address"  name="comp-addrs" type="text" required>
    </div>
  </div >        
     <div class="col-7"> <!-- locality-->
      <input type="text" class="form-control" placeholder="City" name="city" required>
    </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="State"  name="state" required>
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Zip" name="zip"  required>
  </div>


      <div class="col-lg-12">
        <div class="form-group">
           <p> Duration in occupation</p>
   <select  class="form-control" name="Years in occupation" >
              <option value="3-12 Months"name="">3-12 Months</option>
              <option value="2 Years"   name=""> 2 Years</option>
              <option value="3 Years"   name=""> 3 Years</option>
              <option value="4 Years"   name=""> 4 Years</option>
              <option value="5 Years"   name=""> 5 Years</option>
              <option value="6 Years"   name=""> 6 Years</option>
              <option value="7-Years."  name=""> 7 Years-Till Date.</option>
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

