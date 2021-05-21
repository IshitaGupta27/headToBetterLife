<?php

    $server="localhost";
    $username="root";
    $password="";
    $database="headtobetterlife";

    $con=mysqli_connect($server,$username,$password,$database);

    if(!$con)
        {
            die("coonection to this database failed due to".mysql_connect_error());
        }
        
    if(isset($_POST['submit']) && $_POST['submit']=='Submit Blog')
    {    
        $name =  $_POST['name'];
        $titlename = $_POST['titlename'];
        $titledesc =  $_POST['titledesc'];
        $blog = $_POST['blog'];
                    
        $sql = "INSERT INTO `blogs`(`username`,`title`,`description`,`blog`)  VALUES ('$name', '$titlename','$titledesc','$blog')";
        //$query = mysqli_query($conn, $sql);
    
        if($con->query($sql)==true){
            header('location:index.html');
        }
        else
        {
            echo "Error: $sql <br> $con->error";
        }
    }    
?>