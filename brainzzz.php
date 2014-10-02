<?php 

$wordBank = array('Bob', 'Susan', 'Jerry', 'Alecia', 'Peter', 'John', 'Lh', 'Jason', 'Amy', 'Klaus', 'llama', 'Quechua', 'North', 'America', 'Fossil', 'common', 'sight', 'Connecticut', 'Early', 'Of', 'The', 'Thorough', 'Trace', 'Banana', 'General', 'Metal', 'Gear', 'Solid', 'Snake', 'Otacon', 'Sniper', 'Wolf', 'Decoy', 'Octopus', 'Ray', 'Rex', 'Gecko', 'Mark', 'Two', 'Five', 'Sixer', 'Pineapple', 'Guard', 'Alert', 'Alaska', 'Fox', 'Archipelago', 'Seal', 'Team', 'Six', 'Fortune', 'Vamp', 'Fatman', 'Cyber', 'Ninja', 'Cyborg', 'Psycho', 'Mantis', 'Raven', 'Liquid', 'Colonel', 'Campbell', 'Naomi', 'Emma', 'Paramedic', 'Sigint', 'Fear', 'Sorrow', 'Pain', 'Rage', 'Joy', 'Meme', 'Gene', 'Philanthropy', 'Chico', 'Phantom', 'Pain', 'Big', 'Boss', 'David', 'Pikachu', 'Diddy', 'Kong', 'Link', 'Toon', 'German', 'Beer', 'Pale', 'Ale', 'Smash', 'Bros');
$password = 'Fill out the info to create a new password! ';
$i = '';

foreach($_GET as $key => $value) {
	
	if($key == 'wordNumber'){
		if($value == 0) {
			$password = 'YOU MUST FILL IN A VALUE > 0!';
			break;
		} else {
			$symbolArray = array('!', '#', '$', '%', '?', '~', '*', '@', '&');
			$randomSymbol = array_rand($symbolArray);
			$password = '';
			for($i = 0; $i < $value; $i++) {

				$randomWord = array_rand($wordBank);
				$password .= $wordBank[$randomWord].$symbolArray[$randomSymbol];
		}
	}

	}else if($key == 'numberRadio' && $value == 'y'){
		
			$numberArray = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '0');
			$randomNumber = array_rand($numberArray);
			$password .= $numberArray[$randomNumber];
		} else if($key == 'symbolRadio' && $value == 'y') {
		
			$symbolArray = array('!', '#', '$', '%', '?', '~', '*', '@', '&');
			$randomSymbol = array_rand($symbolArray);
			$password .= $symbolArray[$randomSymbol];
		} else {

			break;
		}
}
