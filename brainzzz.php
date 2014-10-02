<?php 

$wordBank = array('Bob', 'Susan', 'Jerry', 'Alecia', 'Peter', 'John', 'LH', 'Jason', 'Amy', 'Klaus');
$password = '';
$i = '';

foreach($_GET as $key => $value) {
	
	if($key == 'wordNumber'){
		for($i = 0; $i < $value; $i++) {
			$randomWord = array_rand($wordBank);
			$password .= $wordBank[$randomWord];
		}
	}else if($key == 'numberRadio' && $value == 'y'){
		
			$numberArray = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '0');
			$randomNumber = array_rand($numberArray);
			$password .= $numberArray[$randomNumber];
		} else if($key == 'symbolRadio' && $value == 'y') {
		
			$symbolArray = array('!', '#', '$', '%', '?', '~', '*');
			$randomSymbol = array_rand($symbolArray);
			$password .= $symbolArray[$randomSymbol];
		} else {
			$password = 'Something went wrong!!';
			break;
		}
}

/*
	$winner = array_rand($contestants);
	$contestants[$winner] = 'Winner';
*/