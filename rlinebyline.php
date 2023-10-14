  <?php

    $file=fopen("demo.txt","r") or exit("error");

    while(!feof($file)){
        echo fgets($file)."<br>";
    }

    fclose($file);

    ?>