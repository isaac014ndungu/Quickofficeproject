<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (isset($_POST['DONE'])) {
    if (isset($_POST['name']) && isset($_POST['IDNO']) &&
        isset($_POST['DOB'])&& isset($_POST['adress'])&& isset($_POST['location'])&& isset($_POST['email'])
        && isset($_POST['phone'])) {
        
        $name = $_POST['name'];
        $IDNO = $_POST['IDNO'];
        $DOB = $_POST['DOB'];
        $adress = $_POST['adress'];
        $location = $_POST['location'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $host = "localhost";
        $dbUsername = "quickoff_isaac";
        $dbPassword = "m=Pc$4f3MdY5";
        $dbName = "quickoff_Point";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
         
            $Insert = "INSERT INTO aplicant( name,IDNO,DOB, adress, location, email, phone) values(?, ?,?, ?,?,?,?)";
           
           
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sisissi",$name, $IDNO, $DOB, $adress, $location,  $email, $phone);
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