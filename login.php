<html>
    <head>
        <title>Login</title>
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
 div {
    margin-top :10%;
    margin-left: 25%;
    margin-right:25%;
    margin-bottom:10%;
    width: 50%;
    border: 1px solid;
    border-radius: 5px;
    border-style:groove;
    background-color : white;
    
}

body{
    background-image: url(college.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center; 

    
}

form{
    margin-left: 25%;
    margin-right:25%;
    width: 50%;
} 

p{
    margin-left:30%;
    margin-right:30%;
}
  
</style>
    </head>
    <body>
        <div class="content">
           
        <h3 align="center">FRANCIS XAVIER ENGINEERING COLLGE</h3><br><br>
        <form method="post">
        <a class="btn btn-primary active" role="button" data-bs-toggle="button" aria-pressed="true" href="verification.php">Teachers Login</a>
        <a class="btn btn-primary active" role="button" data-bs-toggle="button" aria-pressed="true" href="studentslogin.php">Students Login</a><br><br>
       <p> <a class="btn btn-primary active" role="button" data-bs-toggle="button" aria-pressed="true" href="admin.php">Admin Login</a></p>
          
    </form>
       
</div>
    </body>
    
</html>


