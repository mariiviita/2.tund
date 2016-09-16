<?php

	$firstName="Marii";
	$lastName="Viita";
	// echo trükib välja muutuja väärtuse
	//echo $firstName;
	//echo $lastName;
	
	echo $firstName." ".$lastName;
	
?>

<br>

<?php

	$age=5;
	
	if ($age<18) {
		//kui vastus on tõene (true)
		echo "alaealine";
		
	} else {
		//kui vastus on väär (false)
		echo "täisealine";
	}

?>

<br>

<?php

	for ($i=1; $i<$age; $i=$i+1) {
		
		echo $i."palju";	
	
	}
		echo "õnne";

?>

<br>
<?php
	echo date ("d.F,l,Y.G.i.s.A");
	
?>