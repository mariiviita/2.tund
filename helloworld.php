<?php

	$firstName = "Marii";
	$lastName = "Viita";
	// echo trükib välja muutuja väärtuse
	//echo $firstName;
	//echo $lastName;
	
	echo $firstName." ".$lastName;
	
?>


<br>

<?php

	$age = 5;
	
	if ($age < 18) {
		
		//kui vastus on tõene (true)
		echo "alaealine";
		
	} else {
		
		//kui vastus on väärtuse (false)
		echo "täisealine";
	}

?>

<br>


<?php


	for ($i = 0; $i < $age; $i = $i + 1) {
		
		echo $i."palju ";
		
	
	}
	echo "õnne";



?>

<br>
<?php
	echo date("d.l.F.Y.g.i.s");
	
?>