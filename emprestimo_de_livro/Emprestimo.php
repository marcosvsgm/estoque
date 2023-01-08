<?php
//include "Livro.php";

class Livro {
	public $name;
	public $autor;
  
	function __construct($name, $autor) {
	  $this->name = $name;
	  $this->autor = $autor;
	}
	function get_name() {
	  return $this->name;
	}
	function get_color() {
	  return $this->autor;
	}
  }


$ser = new Livro("ser","autor");
echo $ser->get_name();
echo "<br>";
echo $ser->get_autor();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Livros</title>
</head>
<body>


</body>
</html>