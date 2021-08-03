
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
  
 
            
        </style>
    </head>
    <body>
    <h3 align = "center" >STUDENT DETAILS FORM</h3>
    
    <form method="post">   
    <table>
            
            <tr>
                <td>ID</td>
                <td><input class="form-control" type="number" step="0.01" name="txtid"></td>
            </tr>
           
            <tr >
                
                <td  colspan="2" align = "center" ><input type="submit" type="button" class="btn btn-primary btn-lg" name="btnsubmit"></td>
            </tr>
            
        </table>
        </form> 
        <?php
        include("connection.php");
        if (isset($_POST['btnsubmit']))
            {
       
                $id = $_POST['txtid'];


                $sql = "DELETE FROM students WHERE Id=$id";
                $result = mysqli_query($con, $sql);
	            echo "   Record was deleted successfully.";
            }
       

?>

    </body>
</html>