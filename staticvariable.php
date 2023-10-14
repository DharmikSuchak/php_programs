<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function abc(){
    static $xy=10;
    echo $xy;
    $xy++;
}

abc();
echo "<br>";
abc();
echo "<br>";
abc();
echo "<br>";

?>
</body>
</html>


