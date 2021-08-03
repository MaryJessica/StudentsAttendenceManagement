<html>


    <head>
        <title>Teachers Login</title>
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
            body
            {
                font-family:"Trebuchet MS";
            }
            .txt
            {
                font-family:"Trebuchet MS";
                width:200px;
            }
            p.error
            {
                color:red;
            }
            p.info
            {
                color:green;
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
a{
    margin-left: 45%;
    margin-right:45%;
}
form{
    margin-left: 25%;
    margin-right:25%;
    width: 50%;
}  

        </style>
    </head>
    <body>
        <h3 align="center">TEACHER'S LOGIN</h3>
        <form method="post">
            <table>
                <tr>
                    <td width="150">Login ID</td>
                    <td width="200"><input class="form-control form-control-lg" id="colFormLabelLg" class="form-control" type="text" class="txt" name="txtLoginID" /></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input class="form-control form-control-lg" id="colFormLabelLg" class="form-control" type="password" class="txt" name="txtPassword" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input colspan="2" align = "center"  type="submit" type="button" class="btn btn-primary btn-lg" name="btnLogin" value="Login" class="txt" /></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <?php
                            if (isset($err_msg))
                            {
                                echo "<p class=\"error\">" . $err_msg . "</p>";
                            }
                            if (isset($info_msg))
                            {
                                echo "<p class=\"info\">" . $info_msg . "</p>";
                            }
                        ?>
                    </td>
                </tr>
            </table>
           
        </form>
        <?php
   
    include("connection.php");
    if (isset($_POST['btnLogin']))
    {
        $loginid = $_POST['txtLoginID'];
        $password = $_POST['txtPassword'];

        
        $query = "select * from logintable where username='$loginid' and password='$password'";

        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) == 1)
        {
            //Login Success
            $record = mysqli_fetch_array($result);
            $displayname = $record[2];
            // $info_msg = "Login Success: Welcome " . $displayname;
            echo "<p class=\"info\">Login Success: Welcome " . $displayname. "</p>";
            echo "<a  class=\"btn btn-primary active\" role=\"button\" data-bs-toggle=\"button\" aria-pressed=\"true\" href=\"Teacher.php\">Update</a>";
        }
        else
        {
            //Login Failed
            //$err_msg = "Login Failed: Invalid Login ID or Password";
            echo "<p class=\"error\">Login Failed: Invalid Login ID or Password</p>";
        
        }

    }
?>
    </body>
</html>