<?php 
	
	$rand = rand(0, 100);
	echo $rand. PHP_EOL;
	$guessed = 1;



	do {
		fwrite(STDOUT, 'Guess? ');
		$userInput = fgets(STDIN);
		if ($userInput == $rand) {

			fwrite(STDOUT, "You Win!\n");
		}
		else if ($userInput <= $rand) {
			echo "Higher" . PHP_EOL;
			$guessed++;
		}
		else if ($userInput >= $rand) {
			echo "Lower" . PHP_EOL;
			$guessed++;
		} 
	} while ($userInput != $rand); {
		echo "You guessed $guessed times!" . PHP_EOL;
	}



		

		











 ?>