<?php 
	if (!empty($_POST))
	{
		if (isset($_POST['nbr']) && $_POST['nbr'] == '42')
			$answer = 'YOU POST THE RIGHT NUMBER !';
		else
			$answer = 'YOU LOOSE';
	}
	else if (!empty($_GET))
	{
		if (isset($_GET['nbr']) && $_GET['nbr'] == '42')
			$answer = 'YOU GET THE RIGHT NUMBER !';
		else
			$answer = 'YOU LOOSE';
	}
	else
		$answer = 'PLEASE, CHOOSE A NUMBER';

?>

<!DOCTYPE html>
<html>
<head>
	<title>DYNAMIC PAGE</title>
</head>
<body>
	<p><b><?= $answer ?></b></p>
</body>
</html>