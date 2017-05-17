<!DOCTYPE html>  
<html> 
<title></title>
<head>
</head>  

<body>

 <?php

    /* Attempt MySQL server connection. Assuming you are running MySQL

    server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "Register" );
// Check connection

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}
 

// Escape user inputs for security

$name = mysqli_real_escape_string($link, $_POST['name']);

$email_address = mysqli_real_escape_string($link, $_POST['email']);

$message = mysqli_real_escape_string($link, $_POST['message']);
 

// attempt insert query execution

$sql = "INSERT INTO Contact_info(Name, email_address , message) VALUES ('$name','$email_address', '$message')";
if(mysqli_query($link, $sql)){

    echo "Thank You for contacting us .  We will get back to you shortly";

} else{

    echo "ERROR: Could not submit the message successfully . PLease try again" . mysqli_error($link);

}
// close connection

mysqli_close($link);

?>

<p></p>

<br><br>

<p>Click on the link provided to be redirected to the <a href="home.html">Home page</a> <br>Or the <a href="contact.html">Contact page</a></p>

</body>
</html>

