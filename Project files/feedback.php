<!DOCTYPE html>  
<html> 
<title></title>
<head>
</head>  

<body>
 <?php

    /* Attempt MySQL server connection. */
$link = mysqli_connect("localhost", "root", "", "Register" );
// Check connection

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}
 

// Escape user inputs for security

$full_name = mysqli_real_escape_string($link, $_POST['realname']);

$email_address = mysqli_real_escape_string($link, $_POST['email']);

$comment = mysqli_real_escape_string($link, $_POST['comments']);
 

// attempt insert query execution

$sql = "INSERT INTO Feedback_info(full_name, email_address , comment) VALUES ('$full_name','$email_address', '$comment' )";
if(mysqli_query($link, $sql)){

    echo "Thank You for providing your feedback .  It has been submitted successfully";

} else{

    echo "ERROR: Could not submit the feedback successfully . PLease try again" . mysqli_error($link);

}

 

// close connection

mysqli_close($link);

?>




<p></p>

<br><br>

<p>Click on the link provided to be redirected to the <a href="home.html">Home page</a> <br>Or the <a href="feedback.html">Feedback page</a> , if you wish to submit another feedback to us</p>

</body>
</html>
