<?php

$username = $_POST["username"];
$password = $_POST["password"];

echo "<h1>Welcome, ".$username."</h1>";
echo "<p>Password: ".$password."<p/>";

$bought = array();
$total = 0;

$tv = $_POST["tv"];
if ($tv == 'buy') {
    array_push($bought, array('TV', '$200'));
    $total = $total + 200;
};

$banana = $_POST["banana"];
if ($banana == 'buy') {
    array_push($bought, array('Banana', '$3'));
    $total = $total + 3;
};

$tennis = $_POST["tennis"];
if ($tennis == 'buy') {
    array_push($bought, array('Tennis Ball', '$1'));
    $total = $total + 1;
};

$shipping = $_POST["shipping"];

if ($shipping == 'over_night') {
    array_push($bought, array('Shipping', '$50'));
    $total = $total + 50;
} else if ($shipping == 'three_day') {
    array_push($bought, array('Shipping', '$5'));
    $total = $total + 5;
} else {
    array_push($bought, array('Shipping', '$0'));
}

echo "<style> table, th, td {
    border:1px solid black;
  }</style>";
echo "<table>";
echo "<tr>";
echo "<th>Item</th><th>Cost</th>";
echo "</tr>";
foreach ($bought as $item) {
    echo "<tr>";
    echo "<th>".$item[0]."</th>";
    echo "<th>".$item[1]."</th>";
    echo "</tr>";
};
echo "<tr>";
echo "<th>Total Cost</th>";
echo "<th>$".$total."</th>";
echo "</table>";

?>