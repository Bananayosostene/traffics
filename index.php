<?php
require("connection.php");
if(isset($_POST['submit'])){
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];

$sql = "INSERT INTO users(fldName , fldEmail , fldPhone , fldMessage) VALUES ('$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";
 $rs = mysqli_query($con, $sql);
}
 if($rs)
 {
     echo "Contact Records Inserted";
 }
 
 else{
     echo" Hari ikibazo cyavutse".mysqli_error($con);
 }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  </head>
  <style>
    body{
        width: 70%;
        background-color: rgb(243, 192, 192);
    }

  </style>
 <center> <body>
    <fieldset>
        <legend>Contact Form</legend>
        <form name="frmContact" method="post" action="contact.php">
        <p>
        <label for="Name">Name </label>
        <input type="text" name="txtName" id="txtName">
        </p>
        <p>
        <label for="email">Email</label>
        <input type="text" name="txtEmail" id="txtEmail">
        </p>
        <p>
        <label for="phone">Phone</label>
        <input type="text" name="txtPhone" id="txtPhone">
        </p>
        <p>
        <label for="message">Message</label>
        <textarea name="txtMessage" id="txtMessage"></textarea>
        </p>
        <p>&nbsp;</p>
        <p>
        <input type="submit" name="Submit" id="Submit" value="Submit">
        </p>
        </form>
        </fieldset>
</div>
  </body></center>
</html>
 