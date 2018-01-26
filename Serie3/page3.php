<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" type="text/css" href="php.css">
</head>
<body>
	<?php 
function test() {

	static $count = 0;
 	$count++; 
	echo "ceci est la ligne n $count <br>";
	if ($count < 10){ 
		test();
	} 
	$count--; 
}

test();

function test2() {

	static $nligne = 0;
 	$nligne++; 
	 	echo 	"<ul>
 				<li> ceci est la ligne n $nligne <br> </li>
 				</ul>";
	if ($nligne < 10){ 
		test2();
	} 
	$nligne--; 
}

test2();
?>

<?php
 function test3() {
		echo ("<table border>");
 		echo ("<tr>
 					<td>#</td>
 					<td>Libellé</td>
 				</tr>
 				");
 		for ($nligne2=1;$nligne2<=10;$nligne2++)
 			{
 				echo 	("<tr><td>".$nligne2."</td><td>Ceci est la ligne".$nligne2."</td></tr>");
 			}
			echo ("</table>");
}
test3();

?>


	
</body>
</html>