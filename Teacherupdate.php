
<?php
    include("connection.php");
    if (isset($_POST["btnLoad"]))
    {
        $name = $_POST['txtname'];
        $query = "select * from logintable where displayname = '$name'";
        $result = mysqli_query($con, $query);
        $record = mysqli_fetch_array($result);

        $username = $record[0];
        $password = $record[1];
       
    }
    if (isset($_POST['btnUpdate']))
    {
        $name = $_POST['txtname'];
        $username = $_POST['txtusername'];
        $password = $_POST['txtpassword'];
        $query = "update logintable set username='$username', password='$password' where displayname = '$name'";
        mysqli_query($con, $query);
    }
    
?>
<html>
    <head>
        <title>Teachers Detail</title>
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
            .txt
            {
                width:200px;
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

form{
    margin-left: 25%;
    margin-right:25%;
    width: 50%;
}  
  

        </style>
    </head>
    <body>
        <h3 align = "center" >UPDATE FORM</h3>
        <form method="post">
            <table>
                <tr>
                    <td width="150">NAME</td>
                    <td><input class="form-control" type="text" class="txt" name="txtname" value="<?php if(isset($name)) { echo $name; } ?>"></td>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" type="button" class="btn btn-primary btn-lg" name="btnLoad" value="Load" style="display:block; width:100%;" />
                    </td>
                </tr>
                <tr>
                    <td>USERNAME</td>
                    <td><input class="form-control" type="text" class="txt" name="txtusername" value="<?php if(isset($username)) { echo $username; } ?>"></td>
                </tr>
                <tr>
                    <td>PASSWORD</td>
                    <td><input class="form-control" type="text" class="txt" name="txtpassword" value="<?php if(isset($password)) { echo $password; } ?>"></td>
                </tr>
                <tr>
                    
                    <td colspan="2">
                        <input type="submit" type="button" class="btn btn-primary btn-lg" name="btnUpdate" value="Update" style="display:block; width:100%;" />
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>