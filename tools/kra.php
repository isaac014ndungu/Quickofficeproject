

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>webdev</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #fff;
	background: #0328fa;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	height: 40px;
	box-shadow: none;
	color: #969fa4;
}
.form-control:focus {
	border-color: #0328fa;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 450px;
	margin: 0 auto;
	padding: 30px 0;
  	font-size: 15px;
}
.signup-form h2 {
	color: #FFD700;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.signup-form h2:before, .signup-form h2:after {
	content: "";
	height: 2px;
	width: 23%;
	background: #0328fa;
	position: absolute;
	top: 50%;
	z-index: 2;
}	
.signup-form h2:before {
	left: 0;
}
.signup-form h2:after {
	right: 0;
}
.signup-form .hint-text {
	color: #999;
	margin-bottom: 30px;
	text-align: center;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #f2f3f7;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;		
	min-width: 140px;
	outline: none !important;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}    	
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #0328fa;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}  
</style>
</head>
<body>
<div class="signup-form">
    <form action="kra.php" method="post">
		<h2>WEB DEV</h2>
		<p class="hint-text">Provide the following details to enable us develop a web for you.</p>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="email" placeholder="Email" required="required"></div>
			
			</div>        	
        </div>
        <div class="form-group">
        	<input type="text" class="form-control" name="phone" placeholder="phone" required="required">
        </div>
		<div class="form-group">
          <select class="form-control" id="exampleFormControlSelect1" name="what">
              <option>STATICWEBSITE</option>
              <option>DYNAMICWEBSITE</option>
              <option>MOBILEAPPLICATION</option>
              <option>SYSTEM DEVELOPMENT</option>
             
            </select>
        </div>
        
		<div class="form-group">
            <button type="DONE" name="DONE" style=" background-color: #0328fa;" class="btn btn-success btn-lg btn-block">DONE</button>
        </div>
    </form>
	
</div>
</body>
</html>



<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (isset($_POST['DONE'])) {
    if (isset($_POST['email']) && isset($_POST['phone']) &&
        isset($_POST['what'])) {
        
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $what = $_POST['what'];

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "kra";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
           
            $Insert = "INSERT INTO todo(email, phone,   what) values(?, ?, ?)";


                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sis",$email, $phone, $what);
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