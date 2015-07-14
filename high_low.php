<?php 
	
	$guessed = 1;
	$confirm = 'yes';
	$userInput2 = 'yes';

	if ($argc >= 3) {
		$rand = rand($argv[1], $argv[2]);
	}
	else {
		$rand = rand(0, 100);
	}

	echo $rand. PHP_EOL;
	do {
		fwrite(STDOUT, 'Guess? ');
		$userInput = fgets(STDIN);
		if ($guessed >= 7) {
			echo 'You lose!';
			break;
		}
		if ($userInput == $rand) {

			fwrite(STDOUT, "You Win!\n");
			echo "You guessed $guessed times!" . PHP_EOL;
			fwrite(STDOUT, 'Type yes to play again! ');
		    $userInput2 = trim(fgets(STDIN));
		    echo $userInput2;
		    if ($argc >= 3) {
				$rand = rand($argv[1], $argv[2]);
			}
			else {
				$rand = rand(0, 100);
			}
		    $rand;
		    echo $rand. PHP_EOL;
		}
		else if ($userInput <= $rand) {
			echo "Higher" . PHP_EOL;
			$guessed++;
		}
		else if ($userInput >= $rand) {
			echo "Lower" . PHP_EOL;
			$guessed++;
		} 
	} while ($userInput2 == $confirm);  
 ?>