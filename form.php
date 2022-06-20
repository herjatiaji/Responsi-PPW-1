<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "contact";
    $conn = new mysqli($servername, $username, $password, $database);

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $pesan = $_REQUEST['pesan'];

    if(mysqli_query($conn, "insert into person values('$name','$email','$pesan');")){
        echo "<script>window.alert('Message sent');</script>";
    }
    else{
        echo "<script>window.alert('error');</script>";
    }
    echo "<script>window.location.href='portfolio.php';</script>";
   
?>
