<!DOCTYPE html>
<html>
<head>
	<title>faszság</title>
</head>
<body>
	<form method="post">
		<input type="text" name="first" readonly value="<?php echo rand(1, 10); ?>">
		<input type="text" name="second" readonly value="<?= rand(1, 10) ?>">
		<input type="text" name="result">
		
		<?php 


		if (isset($_POST['result'])) {
			$num3 = (int)$_POST['first'] + (int)$_POST['second'];


			echo 'actual result is ' . $num3;
			echo ' you typed ' . $_POST['result'];

			if ($_POST['result'] == $num3) {
				echo ' you are good';
			} else {
				echo ' you\'re gay';
			}
		} else {
			echo 'you typed nothing';
		}

		/*
			if (isset($_POST['chance'])) {
				var_dump($_POST['chance']);
			}

			$a = 1;
			$b = 'szöveg';
			$c = false;
			$d = 1.45673;

			if ('1' == 1) {
				//true
			}

			if ('1' === 1) {
				//false
			}

			$e = [
				[1, 'egy', true],
				[2, 'kettő', false],
				[3, 'három', true],
			];

			echo '<select name="chance">';
			for ($i = 0; $i < count($e); $i++) {
				echo '<option value="' . $e[$i][0] . '">' . $e[$i][1] . '</option>';
			}
			echo '</select>';
		*/
		?>
		<button type="submit">küld</button>
	</form>
	<p>ewewew</p>

</body>
</html>