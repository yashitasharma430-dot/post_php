<?php
session_start();
$conn = new mysqli("localhost","root","","confidential");

if($_SERVER["REQUEST_METHOD"]=="POST"){

$from = $_POST['from_location'];
$to = $_POST['to_location'];
$date = $_POST['ride_date'];
$contact = $_POST['contact'];
$user = $_SESSION['user'];

$sql = "INSERT INTO rides(from_location,to_location,ride_date,contact,posted_by)
VALUES('$from','$to','$date','$contact','$user')";

$conn->query($sql);

echo "<script>alert('Ride posted successfully');</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Post Travel Ride</title>

<style>

body{
font-family: Arial;
background:#f4f4f4;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
margin:0;
}

.box{
background:white;
padding:30px;
border-radius:12px;
box-shadow:0 0 15px rgba(0,0,0,0.15);
width:350px;
text-align:center;
}

h2{
margin-bottom:20px;
}

input{
width:100%;
padding:10px;
margin:10px 0;
border:1px solid #ccc;
border-radius:6px;
font-size:14px;
}

button{
width:100%;
padding:12px;
background:#1a73e8;
color:white;
border:none;
border-radius:8px;
font-size:16px;
cursor:pointer;
}

button:hover{
background:#0f5ed7;
}

.back{
display:block;
margin-top:15px;
color:#1a73e8;
text-decoration:none;
}

</style>

</head>

<body>

<div class="box">

<h2>Post Travel Ride</h2>

<form method="POST">

<input type="text" name="from_location" placeholder="From location" required>

<input type="text" name="to_location" placeholder="To location" required>

<input type="date" name="ride_date" required>

<input type="text" name="contact" placeholder="Contact number / email">

<button type="submit">Submit</button>

</form>

<a class="back" href="dashboard.php">← Back to Dashboard</a>

</div>

</body>
</html>
