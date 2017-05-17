<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<style>
</style>
</head>
<body>
<?php
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
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

    $username = mysqli_real_escape_string($link , $_POST['username']);
    $password = mysqli_real_escape_string($link , $_POST['password']);
    $username = stripslashes($username);
    $password = stripslashes($password);
        //Input Validations
    if(!isset($_POST['username'])) {

    // validation expected data exists
    if(!isset($_POST['username']) || !isset($_POST['password'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
        }
  }
         $error_message = "";
    	if($username == '') {
    		$error_message .= " The username you entered does not seem to be valid <br>";
    		
    	}
    	if($password == '') {
    		$error_message .= "The password you entered does not seem to be valid <br>";
    		
    	}
     
    $sql="SELECT * FROM Register_Info WHERE user_name='$username' and password='$password'";
    $result = mysqli_query($link,$sql);
    
    
    /*if($result){

       
    
    } else {
            
    }*/
    $r = 1;
    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
         echo "user name and password found "."<br>";
        echo 'Registered User No. - ' .$row["person_id"]."<br>";
        echo 'First name:  '.$row["first_name"]."<br>";
        echo 'Last name:  '.$row["last_name"]."<br>";

        echo "<p> Congratulations you have successfully logged in !! </p>";
        echo "<p> Click here to try out the <a href = \"quiz.html\"> DC Quiz </a> we have made for you </p>";
        echo " <br> <br> <a href = \"file_upload.html\"> Upload a text file </a> <br> ";
        $r = 0;
    }
    if($r == 1)
    {
        $error_message .= " <br> Username and Password do not match \n\n ."."<br> Please make sure you have entered the correct password for the username "."<br>";
    }
    mysqli_free_result($result);
    if(strlen($error_message) > 0) {
 
    died($error_message);
 
  } else{


  }
    
    mysqli_close($link);	
?>

<p>Click on the link provided to be redirected to the <a href="home.html">Home page</a> <br>Or the <a href="login.html">Login page</a> , if you wish to sign out another feedback to us</p>
</body>

</html>
