<html>
    <head>
        <title>Teachers Details</title>
    </head>
</html>

<?php
    include("connection.php");
    $query = "select * from logintable";
    $result = mysqli_query($con, $query);
    echo "Number of Records Found: " . mysqli_num_rows($result);
    echo "<br />";
    echo "<br />";
    while ($record = mysqli_fetch_array($result))
    {
        echo "NAME - " .$record[2] . "<br />" ;
        echo "USERNAME- " .$record[0]. "<br />" ;
        echo "PASSWORD- " .$record[1].  "<br />" ;
      
        echo "<br />";
    }
?>