<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<style>
</style>
</head>
<body>

 <?php

function died($error){
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
    /* Attempt MySQL server connection. Assuming you are running MySQL

    server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "Register" );
// Check connection

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}

// Escape user inputs for security

$first_name = mysqli_real_escape_string($link, $_POST['firstname']);

$last_name = mysqli_real_escape_string($link, $_POST['lastname']);

$user_name = mysqli_real_escape_string($link, $_POST['username']);

$email_address = mysqli_real_escape_string($link, $_POST['email']);

$password = mysqli_real_escape_string($link, $_POST['pwd']);

$error_message = "";
    	if($first_name == '') {
    		$error_message .= " The first name you entered does not seem to be valid <br>";
    	}

    	if($last_name == '') {
    		$error_message .= " The last name you entered does not seem to be valid <br>";
    		
    	}
    	if($email_address == '') {
    		$error_message .= "The email address you entered does not seem to be valid <br>";
    		
    	}
    	if($user_name == '') {
    		$error_message .= " The username you entered does not seem to be valid <br>";
    		
    	}
    	if($password == '') {
    		$error_message .= "The password you entered does not seem to be valid <br>";
    		
    	}

    	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_address)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid. please take note of a sample email which shall be accepted : <br> web_techproj@gmail.com <br><br />';
 
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The first name you entered does not appear to be valid (there shouldn\'t be any numbers present in the input field). <br><br />';
  }
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The last name you entered does not appear to be valid (there shouldn\'t be any numbers present in the input field). <br><br />';
  }
  if(strlen($password)<7){
  	$error_message .= 'the length of the password should be more than 6 characters <br>';
  }
if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }

    	
// attempt insert query execution

$sql = "INSERT INTO Register_Info (first_name, last_name, user_name, email_address , password) VALUES ('$first_name', '$last_name', '$user_name','$email_address', '$password' )";

if(mysqli_query($link, $sql)){

    echo "You have registered successfully !! Please proceed to the Login page";

} else{

    echo "ERROR: Could not register the user . Please try again :(" . mysqli_error($link);

}

 

// close connection

mysqli_close($link);

?>
<br>
<br>
<p>Click on the link provided to be redirected to the <a href="home.html">Register page</a></p>

<p>Please click <a href="login.html">HERE</a> to be redirected to the Login page</p>

</body>
</html>

