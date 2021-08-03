<html>
    <head>
        <title>Teachers Login Page</title>
         <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <style>
        h3{
                background-color: cornflowerblue;
                border: 1px;
                border-radius: 5px;
                margin-left: 25%;
                margin-top: 5%;
                margin-bottom: 5%;
                width: 50%;

            }
 body {
    margin-top : 5%;
    margin-left: 25%;
    margin-right:25%;
    margin-bottom: 5%;
    width: 50%;
    border: 1px solid;
    border-radius: 5px;
    border-style:groove;

}

a{
    margin-left: 25%;
    margin-right:25%;
    width: 50%;
}  
  
</style>
    </head>
    <body>
<h3 align="center">STUDENTS RECORD</h3>
        <form method="post">
            <a class="btn btn-primary active" role="button" data-bs-toggle="button" aria-pressed="true" href="select.php">View all Records</a><br><br>
            <a class="btn btn-primary active" role="button" data-bs-toggle="button" aria-pressed="true" href="insert.php">Insert New Record</a><br><br>
            <a class="btn btn-primary active" role="button" data-bs-toggle="button" aria-pressed="true" href="update.php">Update Records</a><br><br>
            <a class="btn btn-primary active" role="button" data-bs-toggle="button" aria-pressed="true" href="delete.php">Delete Record</a><br><br>
        </form> 
    </body>
</html>