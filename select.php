<?php
    include("connection.php");
    $query = "select * from students";
    $result = mysqli_query($con, $query);
    echo "Number of Records Found: " . mysqli_num_rows($result);
    echo "<br />";
    echo "<br />";
    while ($record = mysqli_fetch_array($result))
    {
        echo "STUDENTS ID- " .$record[0] . "<br />" ;
        echo "STUDENTS NAME- " .$record[1]. "<br />" ;
        echo "STUDENTS DEPARTMENT- " .$record[2].  "<br />" ;
        echo "STUDENTS CGPA- " .$record[3].  "<br />" ;
        echo "STUDENTS ATTENDANCE- " .$record[4].  "<br />" ;
        echo "<br />";
    }
?>