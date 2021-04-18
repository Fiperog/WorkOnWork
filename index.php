<!DOCTYPE html>
<html>
<head>
    <title>Site</title>
</head>
<body>
<?php
echo "Задание 1".'<br>';
$days = $_GET["days"] ?? 0;
$sec = $days * 60 * 60 * 24;
echo "In " . $days . " day(s) - " . $sec." seconds." . "<br><br><br>";
echo "Задание 2".'<br>';
echo "Welcome ". $_POST['last_name']." ". $_POST['first_name']." ". $_POST['patronymic'];

?>
<form action = "" method = "POST">
    First name: <input type = "text" name = "first_name" /> <br>
    Last name : <input type = "text" name = "last_name" /> <br>
    Patronymic: <input type = "text" name = "patronymic" />  <br>
    <input type = "submit" />
</form>
<br><br><br>
<?php
echo "Задание 3".'<br>';
$array = array();
for($i=0; $i<50; $i++) {
    $array[$i] = rand(1, 9999);
}
echo "Max ".max($array).'<br>';
echo "Min ".min($array).'<br>';
$a = array_sum($array);
echo "Avg ".$a/$i."<br><br><br>";

echo "Задание 4".'<br>';
$reverse = $_GET['reverse'];
echo strrev($reverse);
?>
</body>
</html>