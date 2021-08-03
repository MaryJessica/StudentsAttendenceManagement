
<?php
    include("connection.php");
    if (isset($_POST["btnLoad"]))
    {
        $id = $_POST['txtid'];
        $query = "select * from students where Id=$id";
        $result = mysqli_query($con, $query);
        $record = mysqli_fetch_array($result);

        $name = $record[1];
        $dept = $record[2];
        $cgpa = $record[3];
        $attend = $record[4];
    }
    if (isset($_POST['btnUpdate']))
    {
        $id = $_POST['txtid'];
        $name = $_POST['txtname'];
        $dept = $_POST['txtdept'];
        $cgpa = $_POST['txtcgpa'];
        $attend = $_POST['txtattend'];

        $query = "update students set Name='$name', Department='$dept', CGPA=$cgpa, Attendance = $attend where Id=$id";
        mysqli_query($con, $query);
    }
    
?>
<html>
    <head>
        <title>Update</title>
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
        <h3 align = "center" >Load Students Details</h3>
        <form method="post">
            <table>
                <tr>
                    <td width="150">ID</td>
                    <td width="200">
                        <select class="form-select" aria-label="Default select example" class="txt" name="txtid">
                            <?php
                                $query = "select Id from students";
                                $result = mysqli_query($con, $query);
                                while($record = mysqli_fetch_array($result))
                                {
                                    if (isset($id))
                                    {
                                        if ($record[0] == $id)
                                        {
                                            echo "<option value=\"" . $record[0] . "\" selected=\"selected\">" . $record[0]. "</option>";
                                        }
                                        else
                                        {
                                            echo "<option value=\"" . $record[0] . "\">" . $record[0]. "</option>";
                                        }
                                    }
                                    else
                                    {
                                        echo "<option value=\"" . $record[0] . "\">" . $record[0]. "</option>";
                                    }
                                    
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" type="button" class="btn btn-primary btn-lg" name="btnLoad" value="Load" style="display:block; width:100%;" />
                    </td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input class="form-control" type="text" class="txt" name="txtname" value="<?php if(isset($name)) { echo $name; } ?>"></td>
                </tr>
                <tr>
                    <td>Department</td>
                    <td><input class="form-control" type="text" class="txt" name="txtdept" value="<?php if(isset($dept)) { echo $dept; } ?>"></td>
                </tr>
                <tr>
                    <td>CGPA</td>
                    <td><input class="form-control" type="number" step="0.01" class="txt" name="txtcgpa" value="<?php if(isset($cgpa)) { echo $cgpa; } ?>"></td>
                </tr>
                <tr>
                    <td>Attendence</td>
                    <td><input class="form-control" type="number" step="0.01" class="txt" name="txtattend" value="<?php if(isset($attend)) { echo $attend; } ?>"></td>
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