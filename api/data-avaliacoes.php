<?php
//setting header to json
header('Content-Type: application/json');
$time = $_COOKIE['time'];
$login = $_COOKIE['login'];
$connect = mysqli_connect('localhost', 'root', '12qwaszx', 'selo');
if (!$connect) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
$query  = " SELECT * ";
$query .= "   from avaliacoes ";
$query .= "  where time = '$time' ";
$query .= "    and login = '$login' ";
$query .= "  order by lider ";
console.log($query);
$result = mysqli_query($connect, $query);
$data = array();
while ($row = mysqli_fetch_object($result)) {
    $data[] = $row;
}
// Free result set
mysqli_free_result($result);
//close connection
mysqli_close($connect);
//now print the data
print json_encode($data);
?>
