<html>


    <head>
        <title>Admin Login</title>
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
    margin-top : 10%;
    margin-left: 25%;
    margin-right:25%;
    margin-bottom: 10%;
    width: 50%;
    border: 1px solid;
    border-radius: 5px;
    border-style:groove;

    
}

form{
    margin-left: 25%;
    margin-right:25%;
    width: 50%;
}  
p{
    align: center;
    margin-left: 17%;
    margin-right: 17%;
}

        </style>
    </head>
    <body>
        <h3 align="center">ADMIN'S LOGIN</h3>
        <form method="post">
            <table>
                <tr>
                    <td width="150">COLLEGE CODE</td>
                    <td width="200"><input class="form-control form-control-lg" id="colFormLabelLg" class="form-control" type="text" class="txt" name="txtLoginID" /></td>
                </tr>
               
                <tr>
                    <td></td>
                    <td><input colspan="2" align = "center"  type="submit" type="button" class="btn btn-primary btn-lg" name="btnLogin" value="Login" class="txt" /></td>
                </tr>
                
            </table>
           
        </form>
        <?php
   
    
    if (isset($_POST['btnLogin']))
    {
        $loginid = $_POST['txtLoginID'];
        if($loginid == 001){
            echo "<p> <a  class=\"btn btn-primary active\" role=\"button\" data-bs-toggle=\"button\" aria-pressed=\"true\" href=\"Teacheradmin.php\">Update Teachers Details</a>&nbsp&nbsp&nbsp";
            echo "<a  class=\"btn btn-primary active\" role=\"button\" data-bs-toggle=\"button\" aria-pressed=\"true\" href=\"studentsadmin.php\">Update Students Details</a></p>";
        }  
        else{
            echo "Login Failed";
        }

        
    }
?>
    </body>
</html>