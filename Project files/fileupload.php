<!DOCTYPE html>
<html>
<head>
<title>File upload</title>
<style>
</style>
</head>
<body>
<?php
$link = mysqli_connect("localhost", "root", "", "Register" );
if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}

 

// Escape user inputs for security

$username = mysqli_real_escape_string($link, $_POST['username']);

$file= mysqli_real_escape_string($link, $_POST['filetoupload']); 
 

// attempt insert query execution

$sql = "INSERT INTO file_upload	(username, file) VALUES ('$username' , '$file')";

$result = mysqli_query($link, $sql);

if($result){

    echo "File added successfully.";

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

 

// close connection

mysqli_close($link);
/*$target_dir = "uploads/";
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}*/
?>

<br><br>
<p><a href="home.html">Home</a> <br> 
</body>
</html>
