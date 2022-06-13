<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['username']) && isset($_POST['second']) &&
        isset($_POST['birthday']) && isset($_POST['gender'])&&isset($_POST['email'])  &&
        isset($_POST['phone']) &&  isset($_POST['password']) &&isset($_POST['confirm'])) {
        
        $username = $_POST['username'];
        $second = $_POST['second'];
        $birthday = $_POST['birthday'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $confirm = $_POST['confirm'];

        $host = "localhost";
        $dbUsername = "quickoff_isaac";
        $dbPassword = "m=Pc$4f3MdY5";
        $dbName = "quickoff_Point";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM connect1 WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO connect1(username, second, birthday,  gender, email, phone, password, confirm) values(?, ?, ?, ?, ?, ?,?,?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssississ",$username, $second, $birthday ,  $gender, $email, $phone,$password, $confirm);
                if ($stmt->execute()) {
                   echo header( 'location: ../head.php');
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
            }
            $stmt->close();
            $conn->close();
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