<?php

function array_result($result)
{
    $args = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $args[] = $row;
    }
    return $args;
}

function createTable(array $results = array())
{
    if (empty($results)) {
        return '<table><tr><td>Empty Result Set</td></tr></table>';
    }

    // dynamically create the header information from the keys
    // of the result array from mysql
    $table = '<table>';
    $keys = array_keys(reset($results));
    $table.='<thead><tr>';
    foreach ($keys as $key) {
        $table.='<th>'.$key.'</th>';
    }
    $table.='</tr></thead>';

    // populate the main table body
    $table.='<tbody>';
    foreach ($results as $result) {
        $table.='<tr>';
        foreach ($result as $val) {
            $table.='<td>'.$val.'</td>';
        }
        $table.='</tr>';
    }
    $table.='</tbody></table>';
    return $table;
}

/* Check msql lib is there*/
/*var_dump(function_exists('mysqli_connect'));*/

/*Connecting to MySQL*/
$hostname = "db";
$username = "admin";
$password = "test";
$connection = new mysqli($hostname, $username, $password);

if ($connection->connect_errno) {
  echo "Error: Fallo al conectarse a MySQL debido a: \n";
  echo "Errno: " . $connection->connect_errno . "\n";
  echo "Error: " . $connection->connect_error . "\n";
}

/*Select a database*/
$db = mysqli_select_db($connection, "BikeDB")
  or die("Could not select database");

$sql = "SELECT * FROM bikes";
$result = mysqli_query($connection,$sql);
while($ris=mysqli_fetch_row($result))
{
echo $ris[1];
}

$result->close();


?>

