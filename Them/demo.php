<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
function FunctionName($array)
{	
	
	for ($i=1; $i < sizeof($array); $i++) { 
		if ($array[$i] == $array[$i-1]) {
			return 0;
		}else{
			return 1;
			
		}
	}
}
?>


<?php
	$array = array(1,1,2,1,3,4,3);
	if (FunctionName($array) != 1) {
		echo FunctionName($array);
	}
	
?>
</body>
</html>