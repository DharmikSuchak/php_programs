<?php
$newdata = "Aje Study karvu j nathi Aje Rehva daiye to saru ";
$file = fopen("demo2.txt","w") or exit("Unable to open file");

fwrite($file, $newdata);

fclose($file);
?>