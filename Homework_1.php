<!DOCTYPE html>
<html>
<body>
<?php
$name = "Vitaliy Prymak";
$credits = 14;
$gpa = 3;
// display data type and value of variable name
var_dump($name);
echo "<br>";
var_dump($credits);
echo "<br>";
var_dump($gpa);
echo "<br>";
//concatenation
echo "Welcome ".$name."<br >";
if($credits>=12)
    echo "FULL TIME STUDENT";
else
    echo "PART TIME STUDENT";
echo "<br>";
//	Returns the filename of the currently executing script
echo $_SERVER['PHP_SELF'];
echo "<br>";
//  Returns the name of the host server
echo $_SERVER['SERVER_NAME'];
echo "<br>";
//  Returns the Host header from the current request
echo $_SERVER['HTTP_HOST'];
echo "<br>";
//  Returns web browswer information
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
//	Returns the path of the current script
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
?>
</body>
</html>