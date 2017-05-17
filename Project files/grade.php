<!DOCTYPE html>
<html>
<body>

<?php
if($_POST['enemy']==NULL){ $answer1 ="D";}
else{
$answer1 = $_POST['enemy'];
}
if($_POST['number']==NULL){ $answer2 ="D";}
else{
 $answer2 = $_POST['number'];
}
if($_POST['oracle']==NULL){ $answer3 ="D";}
else{
 $answer3 = $_POST['oracle'];
}
if($_POST['color']==NULL){ $answer4 ="D";}
else{
 $answer4 = $_POST['color'];
}
if($_POST['robin']==NULL){ $answer5 ="D";}
else{
 $answer5 = $_POST['robin'];
}
if($_POST['object']==NULL){ $answer6 ="D";}
else{
 $answer6 = $_POST['object'];
}
if($_POST['kill']==NULL){ $answer7 ="D";}
else{
 $answer7 = $_POST['kill'];
}
if($_POST['lost']==NULL){ $answer8 ="D";}
else{
 $answer8 = $_POST['lost'];
}
if($_POST['alter']==NULL){ $answer9 ="D";}
else{
 $answer9 = $_POST['alter'];
}
if($_POST['mom']==NULL){ $answer10 ="D";}
else{
 $answer10 = $_POST['mom'];
}
$totalCorrect=0;
if ($answer1 == "B") { $totalCorrect++; }
if ($answer2 == "B") { $totalCorrect++; }
if ($answer3 == "B") { $totalCorrect++; }
if ($answer4 == "C") { $totalCorrect++; }
if ($answer5 == "A") { $totalCorrect++; }
if ($answer6 == "C") { $totalCorrect++; }
if ($answer7 == "B") { $totalCorrect++; }
if ($answer8 == "C") { $totalCorrect++; }
if ($answer9 == "A") { $totalCorrect++; }
if ($answer10 == "B") { $totalCorrect++; }
print("your score is $totalCorrect out of 10");
?>

<br>
<p>Click on the link provided to be redirected to the <a href="home.html">Home page</a> <br><br>If you wish to take the quiz again , please click on the link provided <br><a href="quiz.html">Click here</a> </p>
</body>
</html>
