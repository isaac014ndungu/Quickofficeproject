<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (isset($_POST['DONE'])) {
    if (isset($_POST['email']) && isset($_POST['phone']) &&
        isset($_POST['pin']) &&isset($_POST['pass'])) {
        
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $pin = $_POST['pin'];
        $pass = $_POST['pass'];

        $host = "localhost";
        $dbUsername = "quickoff_isaac";
        $dbPassword = "m=Pc$4f3MdY5";
        $dbName = "quickoff_Point";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
           
            $Insert = "INSERT INTO register(email, phone, pin, pass) values(?, ?, ?,?)";
           
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("siss",$email, $phone, $pin, $pass);
                if ($stmt->execute()) {
                    echo header( 'location: ../head.php');
                }
                else {
                    echo $stmt->error;
                }
            }
          
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }


?>