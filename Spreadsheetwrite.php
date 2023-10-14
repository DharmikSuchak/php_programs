<?php
$list =  "p,t";
$file = fopen("test.csv","w");
fputcsv($file,explode(',',$list));
fclose($file); 
?>