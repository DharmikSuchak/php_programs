<?php
$marks = array("Stu1" => 20, "Stu2" => 30, "Stu3" => 40);
echo "<table border='1'>";
foreach ($marks as $key => $value) {
    echo "<tr><td>$key</td><td>$value</td></tr>\n";
}
echo "</table>";
?>
