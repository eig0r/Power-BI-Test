<?php



    $uploaddir = '/var/www/html/largeCSV2mySQL-master/';
     $uploadfile = $uploaddir . "CommercialPoweralarm.csv";

    echo "<p>";


    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {



      echo "File is valid, and was successfully uploaded.\n";
    } else {
       echo "Upload failed";
    }

    echo "</p>";
    echo '<pre>';
    echo 'Here is some more debugging info:';
    print_r($_FILES);
    print "</pre>";

    ?>


