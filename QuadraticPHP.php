<!doctype html>
<html>
<head>
<link href="css.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>


<?php
	
	if(isset($_GET["solve"])){
		$a= $_GET["a"];
		$b= $_GET["b"];
		$c= $_GET["c"];
		
		if($a>0){
		$d= (-$b+sqrt(pow($b,2)-(4*$a*$c)))/(2*$a);
		$e= (-$b-sqrt(pow($b,2)-(4*$a*$c)))/(2*$a);
		$x=round($d,3);
		$y=round($e,3);
		}
		
		if($a==null || $b==null || $c==null){
			echo "Please input all values below!";
		}
		elseif($a==0){ 
			echo "The equation is undefine!";
		}
		else{
			echo 'Value of x is; <p>'.'x<sub>1</sub>= '.$x.'<br>'.'x<sub>2</sub>= '.$y;
			return;
		}
	}
	
	?>
	<h1><span class="color">QUADRATIC</span> <span class="colorr">EQUATION</span> <span class="colorrr">IN PHP</span></h1>
	<h3>Given a quadratic equation; ax<sup>2</sup>+bx+c=0<br>Find the value of x</h3>
<p></p>
	<form action="" method="GET" enctype="multipart/form-data">
		<p>a: <input name="a" type="text" placeholder="Enter 'a'"/></p>
		<p>b: <input name="b" type="text" placeholder="Enter 'b'"/></p>
		   c: <input name="c" type="text" placeholder="Enter 'c'"/><p></p>
		     <input type="submit" name="solve" value="Calculate"/>	
	</form>
	
	

	
</body>
</html>