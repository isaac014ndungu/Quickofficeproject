<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (isset($_POST['DONE'])) {
    if (isset($_POST['email']) && isset($_POST['phone']) &&
        isset($_POST['describe1'])) {
        
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $describe1 = $_POST['describe1'];

        $host = "localhost";
        $dbUsername = "quickoff_isaac";
        $dbPassword = "m=Pc$4f3MdY5";
        $dbName = "quickoff_Point";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            
            $Insert = "INSERT INTO other(email, phone,   describe1) values(?, ?, ?)";
            

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sis",$email, $phone, $describe1);
                if ($stmt->execute()) {
                  
                    echo header( 'location: ../head.php');
                }
                else {
                    echo $stmt->error;
                }
            }
            
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>