
<?php 
error_reporting(-1);
ini_set('display_errors', 1);
?>

<!DOCTYPE HTML>
<html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<title>Problem Set 2</title>
</head>
<body>
<pre>
<?php require 'brainzzz.php'; ?>

<!--
<form action ='index.php' method='GET' >
	<input type='text' name='contestant0'><br>
	<input type='text' name='contestant1'><br>
	<input type='text' name='contestant2'><br>
	<input type='text' name='contestant3'><br>

	<input type='submit' value='Pick a Winner!'>
</form>

<h1>Contestants</h1> 
<?php foreach($contestants as $key => $value): ?>
    <?=$key?> is a <?=$value?> <br>
<?php endforeach; ?>
 -->


<div class='container'>
<h3>Secure Password Generator! </h3>

<!--HTML Form -->
<form action='index.php' method='GET'>

<label for = 'wordNumber'>How many words?</label>
<input maxlength=1 type=text name='wordNumber' id='number_of_words' size=1> (Max 9)<br><br>

<label for= 'endNumber'> Want numbers? </label> <br>
<input class='check' type='radio' name='numberRadio' value='y'> H311 y34h! </input><br>
<input class='check' type='radio' name='numberRadio' value='n'> Hell no!</input><br>

<label for='endSymbols'>How about some Symbols?</label><br>
<input class='check' type='radio' name='symbolRadio' value='y'> YES!!! </input><br>
<input class='check' type='radio' name='symbolRadio' value='n'> nope.</input><br>

<input class='submit' type='submit' class='submit_btn' value='Lets see it!'>
</form>

<div class='password_box'><?=$password ?></div>


</div>

</pre>
</body>
</html>
