<?php

	$firstName = "Marii";
	$lastName = "Viita";
	// echo tr�kib v�lja muutuja v��rtuse
	//echo $firstName;
	//echo $lastName;
	
	echo $firstName." ".$lastName;
	
?>


<br>

<?php

	$age = 5;
	
	if ($age < 18) {
		
		//kui vastus on t�ene (true)
		echo "alaealine";
		
	} else {
		
		//kui vastus on v��rtuse (false)
		echo "t�isealine";
	}

?>

<br>


<?php


	for ($i = 0; $i < $age; $i = $i + 1) {
		
		echo $i."palju ";
		
	
	}
	echo "�nne";



?>

<br>
<?php
	echo date("d.l.F.Y.g.i.s");
	
?>