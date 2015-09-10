<?php 
class compute{

	public function __construct($a,$b){
		echo "<center><h3>a=".$a."<br/>b=".$b."</h3></center>";	
	}


}

class swap extends compute{

	public function swapdata($a,$b){

	$a = $a+$b; 
	$b = $a-$b; 
	$a = $a-$b; 

	return " a=".$a."<br/> b=".$b;
	}

}

?>

<center>
<form method="post" action="">
	a: <input type="text" name="first_val" />
	<br/>
	b: <input type="text" name="second_val" />
	<br/>
	<input type="submit" value="Swap it">
</form>

<?php 
	if(isset($_POST['first_val']) && isset($_POST['second_val'])){
		if(($_POST['first_val'])==null || ($_POST['second_val'])==null){

			echo "<center>Please fill the field</center>";

		}elseif(!is_numeric($_POST['first_val']) || !is_numeric($_POST['second_val'])){

			echo "<center>Please fill numeric into the field</center>";

		}
		else{

			$show = new swap($_POST['first_val'],$_POST['second_val']);

			echo "<center><h1>&#8675;</h1></center>";

			echo "<center><h3>".$show->swapdata($_POST['first_val'],$_POST['second_val'])."</h3></center>";


		}

}
else{
	echo "<center>Please fill the field</center>";
}
	?>
	<a href="" >refresh</a>
</center>