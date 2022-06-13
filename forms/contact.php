
<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
if (isset($_POST['submit'])) {
    
        
        $name1 = $_POST['name1'];   
        $email = $_POST['email'];
        $subject1 = $_POST['subject1'];
        $message1 = $_POST['message1'];
        

        $host = "localhost";
        $dbUsername = "quickoff_isaac";
        $dbPassword = "m=Pc$4f3MdY5";
        $dbName = "quickoff_Point";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            
            $Insert = "INSERT INTO contact(name1, email, subject1,   message1) values(?, ?, ? ,?)";
           

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssss",$name1, $email, $subject1, $message1);
                if ($stmt->execute()) {
                    
                    echo header( 'Thank You for Messaging');
                }
                else {
                    echo $stmt->error;
                }
            }
           
        }
?>