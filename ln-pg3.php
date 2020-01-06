
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
 
 <?php
 session_start();
 if (isset($_POST['state'])) {
 if (!empty($_SESSION['post'])){
 if (empty($_POST['address1'])
 || empty($_POST['city'])
 || empty($_POST['pin'])
 || empty($_POST['state'])){ 
 // Setting error for page 3.
 $_SESSION['error_page3'] = "Mandatory field(s) are missing, Please fill it again";
 header("location: page3_form.php"); // Redirecting to third page.
 } else {
 foreach ($_POST as $key => $value) {
 $_SESSION['post'][$key] = $value;
 } 
 extract($_SESSION['post']); // Function to extract array.
 $connection = mysql_connect("localhost", "root", "");
 $db = mysql_select_db("phpmultipage", $connection); // Storing values in database.
 $query = mysql_query("insert into detail (name,email,contact,password,religion,nationality,gender,qualification,experience,address1,address2,city,pin,state) values('$name','$email','$contact','$password','$religion','$nationality','$gender','$qualification','$experience','$address1','$address2','$city','$pin','$state')", $connection);
 if ($query) {
 echo '<p><span id="success">Form Submitted successfully..!!</span></p>';
 } else {
 echo '<p><span>Form Submission Failed..!!</span></p>';
 } 
 unset($_SESSION['post']); // Destroying session.
 }
 } else {
 header("location: page1_form.php"); // Redirecting to first page.
 }
 } else {
 header("location: page1_form.php"); // Redirecting to first page.
 }
 ?>
 </div>
 </div>
 </body>
</html>


