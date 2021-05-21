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
        
    if(isset($_POST['Submit']) && $_POST['Submit']=='Send message')
    {    
        $name =  $_POST['name'];
        $email = $_POST['email'];
        $disease =  $_POST['disease'];
        $message = $_POST['message'];
                    
        $sql = "INSERT INTO `contact`(`name`,`email`,`disease`,`message`)  VALUES ('$name', '$email','$disease','$message') ";
        //$query = mysqli_query($conn, $sql);

        if($con->query($sql)==true){
            header('location:../index.php');
        }
        else
        {
            echo "Error: $sql <br> $con->error";
        }
    }    
?>
