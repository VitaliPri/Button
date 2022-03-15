<!DOCTYPE html>
<html>
<body>
<?php
$name = "James Smith";
$credits = 18;
$gpa = 3.5;
var_dump($name);
echo "<br>";
var_dump($credits);
echo "<br>";
var_dump($gpa);
echo "<br>";
echo "Welcome ".$name."<br >";
if($credits>=12)
    echo "FULL TIME STUDENT";
else
    echo "PART TIME STUDENT";
echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
?>
</body>
</html>
