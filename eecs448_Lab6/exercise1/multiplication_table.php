<?php
echo "<table>";
echo "<tr>";
echo "<th> </th>";
for ($x = 1; $x <= 100; $x ++) {
    echo "<th>".$x."</th>";
}
echo "</tr>";
for ($y = 1; $y <= 100; $y ++) {
    echo "<tr>";
    echo "<th>".$y."</th>";
    for ($z = 1; $z <= 100; $z ++) {
        $val = $z * $y;
        echo "<th>".$val."</th>";
    }
    echo "</tr>";
}
echo "</table>";
?>