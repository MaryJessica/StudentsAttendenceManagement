<?php
    include("connection.php");
    $query = "select * from studentslogin";
    $result = mysqli_query($con, $query);
    echo "Number of Records Found: " . mysqli_num_rows($result);
    echo "<br />";
    echo "<br />";
    while ($record = mysqli_fetch_array($result))
    {
        echo "STUDENTS ID- " .$record[0] . "<br />" ;
        echo "STUDENTS NAME- " .$record[1]. "<br />" ;
        echo "STUDENTS DOB- " .$record[2].  "<br />" ;
        
        echo "<br />";
    }
?>