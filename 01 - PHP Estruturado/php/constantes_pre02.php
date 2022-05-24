<?php
	class veiculo {

		private $marca;

		function __construct() {
			echo "CLASSE: ".__CLASS__."<br>";
		}
		function setMarca($marca) { 
			$this->marca = $marca; 
			echo "MÉTODO: ".__METHOD__."<br>";
		}
	}
	
	$obj = new veiculo();
	$obj->setMarca("Wolksvagem"); 
?>


