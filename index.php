<?php 
class compute{

	public $data;
	public $array_size;
	
	/*constructor*/
	public function __construct($a,$b){

		$this->data = array(); 
		array_push($this->data, $a,$b);
		
		$this->array_size = count($this->data);

		echo "Your numbers: <br/>";
			for ( $i = 0; $i < $this->array_size; $i++ ){
	  		 	echo $this->data[$i];
				echo "<br/>";
			}
		
		}


}

class sort extends compute{

	public function __construct($a,$b){
		parent::__construct($a,$b);
	}

	/*bubble sort process*/
	public function bubble(){

	for ( $a = 0; $a < $this->array_size; $a++ )
	{
	   for ($b = 0; $b < $this->array_size; $b++ )
	   {
	      if ($this->data[$a] < $this->data[$b])
	      {

	         $this->data[$a] = $this->data[$a]+$this->data[$b];
	         $this->data[$b] = $this->data[$a]-$this->data[$b];
	         $this->data[$a] = $this->data[$a]-$this->data[$b];
	      }
	   }
	}

	}

	/*show new data*/
	public function showdata(){
	echo "Numbers after sort: <br/>";
	for( $i = 0; $i < $this->array_size; $i++ ){
		echo $this->data[$i];
		echo "<br/>";
			}
		}
}

?>
<!-- input new data -->
<center>
<form method="post" action="">
	a: <input type="text" name="first_val" />
	<br/><br/>
	b: <input type="text" name="second_val" />
	<br/><br/>
	<input type="submit" value="Sort numbers">
</form>

<?php /* accessing class and functions */
	/* check if false */
	if(isset($_POST['first_val']) && isset($_POST['second_val'])){
		if(($_POST['first_val'])==null || ($_POST['second_val'])==null){

			echo "<center>Please fill the field</center>";

		}elseif(!is_numeric($_POST['first_val']) || !is_numeric($_POST['second_val'])){

			echo "<center>Please fill numeric into the field</center>";

		}
		/* check if true*/
		else{

			$show = new sort($_POST['first_val'],$_POST['second_val']);

			echo "<center><h1>&#8675;</h1></center>";

			$show->bubble();
			echo "<center><h3>".$show->showdata()."</h3></center>";


		}

}/* info for blank data */
else{
	echo "<center>Please fill the field</center>";
}
/* refresh page */
	?>
	<a href="" >refresh</a>
</center>


