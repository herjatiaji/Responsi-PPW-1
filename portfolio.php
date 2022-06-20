<?php
session_start();
if(isset($_SESSION['cpth']) == NULL){
    echo "<script> window.alert ('recaptcha');
            window.location.href='recaptcha.php';
        </script>";
}
else{
    session_destroy();
    include 'portfolio.html';
    
}
