<?php
// Citation

/***
  Ismail, M. H. (2021, July 11). Android: Building a Simple RESTful Client-Server Application. Coding Malaya. https://youtu.be/LjWyxm5HPK8
***/

require_once('db.php');

//all the row in table checkin are selected
// SQL Query SELECT are used
$query = "SELECT * FROM checkin ORDER BY date DESC";
$result=mysqli_query($link,$query);

//Array declaration
$output = array();

//to add row to array for each record line
foreach ($result as $row) {
 array_push($output,$row);
}

// want to assign to json variable
$json=json_encode($output);

//declare document type to json and output json
header("Content-Type: application/json");
echo $json;
?>
