<?php 
error_reporting(-1);
ini_set('display_errors', 'On');
?>


<!DOCTYPE HTML>
<html>
<pre>
<head>
<link rel="stylesheet" type = "text/css" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<title>Problem Set 2</title>
</head>
<body>
<h3>Secure Password Generator! </h3>
<?php require 'brainzzz.php'; ?>

<p> Your password is... </p>
<div class='password_box'><?=$password ?></div>
<div class='container'>
<!--HTML Form -->
<form action='index.php' method='GET'>

<!--Gives number of words in password -->
<label for = 'wordNumber'>How many words?</label>
<input maxlength=1 type=text name='wordNumber' id='number_of_words' size=1> (Max 9)

<!--Adds number to end of password -->
<label for= 'endNumber'> Want numbers? </label> <br>
<input class='check' type='radio' name='numberRadio' value='y'> H311 y34h! </input>
<input class='check' type='radio' name='numberRadio' value='n'> Hell no!</input>

<!--Adds additional random symbol to end of password -->
<label for='endSymbols'>How about some Symbols?</label><br>
<input class='check' type='radio' name='symbolRadio' value='y'> YES!!! </input>
<input class='check' type='radio' name='symbolRadio' value='n'> nope.</input>

<input class='submit' type='submit' class='submit_btn' value='Lets see it!'>
</form>

<br>
<p>  This password generator was inspired by the <a href='http://www.xkcd.com'>XKCD webcomic</a>.</p><br>
<img src='password_strength.png'>
</div>


</body>
</pre>
</html>
