<?php 
session_start(); 


 if (isset($_POST['bvn'])) 
 {
 	 if (!empty($_SESSION['post']))
		{
		if(empty($_POST['bvn'])
		 ||empty($_POST['accut-num'])
		 ||empty($_POST['amount-rq'])
		 ||empty($_POST['comp-name'])
		 ||empty($_POST['bank-name'])
		 ||empty($_POST['comp-addrs'])
		 ||empty($_POST['city'])
		 ||empty($_POST['state'])
		 ||empty($_POST['occupation']) )
{ 
// Setting error message
$_SESSION['error2'] = "Mandatory field(s) are missing, Please fill it again";
header("location: ln-pg2.php"); // Redirecting to first page 
} 
	
else
	{
	// validation of amount and figures etc ....
	 if (!preg_match("/^[0-9]{10}$/", $_POST['accut-num']))
	{ 
		$_SESSION['error2'] = "10 digit Account number is required."; 
		header("location:ln-pg2.php");
	}
	elseif(!preg_match("/^[0-9]{11}$/", $_POST['bvn'])) 
		{
			$_SESSION['error2'] = "11 digit BVN number is required."; 
		 header("location:ln-pg2.php");
		}

	elseif (!is_numeric($_POST['amount-rq']) || $_POST['amount-rq'] >= 5000000 || $_POST['amount-rq'] < 50000 ) 
	 {
	$_SESSION['error2'] = "The Loan Ranges from 50,000 - 5,000,000. : Fill contact form for other inquiry "; 
	 header("location:ln-pg2.php");
	 } 
	 	}

	 	}
	 	else 
	 	{ 
	 		$_SESSION['error2'] = "session empty"; 
			header("location:ln-pg2.php");
			}
		}

else 
	{
 // Fetching all values posted from second page and storing it in variable.
 foreach ($_POST as $key => $value) 
 {
	 $_SESSION['post'][$key] = $value;
 } 
 extract($_SESSION['post']);
 
	} 
		



 // //  echo '<p><span id="success">Form Submitted successfully..!!</span></p>';
 // // } else {
 // // echo '<p><span>Form Submission Failed..!!</span></p>';
 // // } 
 // // } else {
 // // header("location: page1_form.php"); // Redirecting to first page.
 // // }
 // // } else {
 // // header("location: page1_form.php"); // Redirecting to first page.
 // // } 
	//  	}
 ?>



<!DOCTYPE HTML>
<html>
 <head>
 <title>PHP Multi Page Form</title>
 <link rel="stylesheet" href="style.css" />
 </head>
 <body>
 <div class="container">
 <div class="main">
 <h2>PHP Multi Page Form</h2>
 
<pre>
<?php 

print_r($_SESSION['post']);



echo $_SESSION['fname'];


unset($_SESSION['post']); 
// Destroying session.
?>
</pre>

 </div>
 </div>
 </body>
</html>


