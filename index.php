<?php
$servername = "localhost";
$username = "40020";
$password = "v6412";
$databaseName = "db_40020";
$connection = new mysqli($servername, $username, $password, $databaseName);
if($connection -> connect_error) {
 die("Connection Failed: " . $connection -> connect_error);
}
$connection -> select_db("db_info1");
$result = $connection -> query("SELECT * FROM Leden");
$arr = array();
foreach($result as $res) {
 array_push($arr, $res);
}
file_put_contents('result.json', json_encode($arr, JSON_PRETTY_PRINT));
$data = json_decode(file_get_contents("result.json"), true);
echo "<pre>";
print_r(json_encode($data, JSON_PRETTY_PRINT));
echo "</pre>";
echo nl2br("\n\n");
?>
