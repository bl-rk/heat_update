<?php

$pageTitle="Loan Application"; 
include("inc/header.php");

?>



<!-- apply page  -->
<section class="section-padding-100-0">

  <div class="contact---area">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 col-lg-8">
                  <div class="contact-form-area contact-page">

                   <h4 class="mb-50">Bio-Data:</h4>

<span id="error">
 <!---- Initializing Session for errors --->
     <?php

   if(!empty($_SESSION['error'])) 
   {  echo $_SESSION['error'];
      unset($_SESSION['error']); }

    ?>
 </span>

          <form  action="ln-pg2.php" method="post">
    <div class="row">
   <!--## Bio-data form start ##-->
          <div class="col-lg-6">
            <div class="form-group">
           <p><input class="form-control" placeholder="First name..." name="fname" required></p>
           </div>
            </div>

        <div class="col-lg-6">
          <div class="form-group">
             <p><input class="form-control" placeholder="Last name..."  name="lname" required></p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-group">
           <p><input class="form-control" placeholder="Mobile No (081****0000)..."  name="contact" required></p>
             </div>
        </div>
         <div class="col-lg-6">
            <div class="form-group">
           <p><input class="form-control" placeholder="Email..." name="email" required></p>
           </div>
            </div>

        <div class="col">
          <div class="form-group">
            <p><input class="form-control" placeholder="dd" name="dd" required></p>
             </div>
        </div>
        <div class="col">
          <div class="form-group">
          <p><input class="form-control" placeholder="mm"  name="nn" required></p>
           </div>
        </div>
        <div class="col-lg-7">
          <div class="form-group">
          <p><input class="form-control" placeholder="yyyy" name="yyyy" required></p>
             </div>
        </div>

         <div class="col-lg-6">
          <div class="form-group">
      <p>  Gender: </p> <!-- Gender option-->
      <select  name="Gender" class="form-control" name="gender">
          <option value="Male"> Male</option>
          <option value="Female"> Female</option> 
          </select>
      </div>
        </div>
      
      <div class="col-lg-6">
        <div class="form-group">

        <p> Marital Status: </p> <!--  marital status option -->
          <select  name="Marital-Status" class="form-control">
              <option value="Single"> Single</option>
              <option value="Married"> Married</option>
              <option value="Divorced"> Divorced</option>
          </select>
         </div>
                </div>

 <div class="col-12">
    <div class="form-group" required>
        <input class="form-control" id="Address" placeholder="Address" name="address" type="text" required>
    </div>
  </div >        
     <div class="col-7"> <!-- locality-->
      <input type="text" class="form-control" name="city" placeholder="City" required>
    </div>
  <div class="col">
    <input type="text" class="form-control" name="state" placeholder="State" required>
  </div>
  <div class="col">
    <input type="text" class="form-control" name="zip" placeholder="Zip (optional...)" >
  </div>
    </div>

    <div class="form-group row">
      <div class="col">
      <input class="btn credit-btn mt-30" type="reset" value="Reset" />
      </div>
    <div class="col d-flex justify-content-end">
      <input class="btn credit-btn mt-30" type="submit" value="Next" />

    </div>
      </div>

  </div>
<!--## Bio-data form end ##-->


       
 
      </form>

                              </div>
                        </div>
                    </div>
			 	       </div>
</div>

</section>

<?php 
  include('inc/footer.php');
?>

