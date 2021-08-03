<html>
    <head>
        <title>
            STUDENTS DETAIL
        </title>
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
                border-style:groove;
}

            }
            td{
               width : 200px; 
               font-family : "Lucida Console";
               font-size : 20px;
                }

                
            p{
               
               font-family : "Lucida Console";
               font-size : 20px;
            }
                .droplist                                   
                {
                    width: 175px;
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
    margin-top : 5%;
    margin-left: 25%;
    margin-right:25%;
    margin-bottom: 5%;
    width: 50%;
    border: 1px solid;
    border-radius: 5px;
    
}

form{
    margin-left: 25%;
    margin-right:25%;
    width: 50%;
}  
  

        </style>
    </head>
    <body>
    <h3 align="center">STUDENT DETAILS FORM</h3><br>
    <form method="post">
        <table>
            
            <tr>
                <td>ID</td>
                <td><input class="form-control" type="number" name="txtid"></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input class="form-control" type="text" name="txtname"></td>
            </tr>
            <tr>
                <td>Department</td>
                <td><select class="form-select" aria-label="Default select example" name="txtdept" class="droplist">
                    <option value="ECE">ECE</option>
                    <option value="EEE">EEE</option>
                    <option value="MBA">MBA</option>
                    <option value="MCA">MCA</option>
                    <option value="CSE">CSE</option>
                </select></td>
            </tr>
            <tr>
                <td>CGPA</td>
                <td><input class="form-control" type="number" step="0.01" name="txtcgpa"></td>
            </tr>
            <tr>
                <td>Attendance</td>
                <td><input class="form-control" type="number" step="0.01" name="txtattend"></td>
            </tr>
            <tr >
                
                <td colspan = "2" align = "center"><input type="submit" type="button" class="btn btn-primary btn-lg" name="btnsubmit"></td>
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
    
    if (isset($_POST['btnsubmit']))
    {
        $id   = $_POST['txtid'];
        $name = $_POST['txtname'];
        $dept = $_POST['txtdept'];
        $cgpa = $_POST['txtcgpa'];
        $attend = $_POST['txtattend'];
         $query = "select * from students where Id=$id";
         $result = mysqli_query($con, $query);
         if (mysqli_num_rows($result) == 0)
         {
            $query = "insert into students(Id,Name,Department,CGPA,Attendance) values($id,'$name','$dept',$cgpa,$attend)";
             mysqli_query($con, $query);
            if (mysqli_affected_rows($con)>0)
            {
                $info_msg = "Students details added successfully!";
            }
        
        else
        {
            $err_msg = "Students ID already exists.";
        }
        
    }

    }
?>
    </body>
</html>