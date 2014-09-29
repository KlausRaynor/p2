
<?php 
error_reporting(-1);
ini_set('display_errors', 1);
?>

<!DOCTYPE HTML>
<html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<title>Problem Set 2</title>
<!--<link rel='stylesheet' type='text/css' href='style.css'> -->
</head>
<body>
<?php require 'brainzzz.php'; ?>
<div class='container'>
<h3>Secure Password Generator! </h3>
<form>
<label for = 'wordNumber'>How many words?</label>
<input maxlength=1 type=text name='wordNumber' id='number_of_words' size=1> (Max 9)<br><br>
<label for= 'endNumber'> Want numbers? </label> <br>
<input class='check' type='checkbox' name='numberRadio' value='y'>H311 y34h! </input><br>
<input class='check' type='checkbox' name='numberRadio' value='n'>Hell no!</input><br>
<input class='submit' type='submit' class='submit_btn' value='Lets see it!'>
</form>
<div class='card'></div>

</div>
</body>
</html>
