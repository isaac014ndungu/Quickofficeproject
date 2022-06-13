<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (isset($_POST['DONE']) &&(isset($_FILES['file1']))) {
    
   
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $deliver = $_POST['deliver'];
    $describe1 = $_POST['describe1'];
    $pname = rand(1000,10000)."-".$_FILES["file1"]["name"];
    $file1_name =$_FILES['file1'] ['name'];
    $file1_size =$_FILES['file1'] ['size'];
    $tmp_name =$_FILES['file1'] ['tmp_name'];
    $error =$_FILES['file1'] ['error'];
    $uploads_dir = 'images';
    move_uploaded_file($tmp_name, $uploads_dir.'/'.$pname);
    $host = "localhost";
        $dbUsername = "quickoff_isaac";
        $dbPassword = "m=Pc$4f3MdY5";
        $dbName = "quickoff_Point";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Insert = "INSERT INTO data1(email,phone,deliver,pname,describe1) values(?,?,?,?,?)";
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sisss",$email,$phone, $deliver ,$pname,$describe1);
                if ($stmt->execute()) {
                     echo header( 'location: ../head.php');
                }
            }
        }
?>