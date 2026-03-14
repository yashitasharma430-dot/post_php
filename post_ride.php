<?php

$conn = new mysqli("localhost","root","","confidential");

if($_SERVER["REQUEST_METHOD"]=="POST"){

$from = $_POST['from_location'];
$to = $_POST['to_location'];
$date = $_POST['date'];
$contact = $_POST['contact'];
$email = $_POST['posted_by'];
$seats = $_POST['seats_left'];

$conn->query("INSERT INTO rides (from_location,to_location,ride_date,contact,posted_by,seats_left)
VALUES ('$from','$to','$date','$contact','$email','$seats')");

/* redirect to rides page */
header("Location: view_rides.php");
exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Post a Ride</title>

<style>

body{
font-family:Arial;
background:#f4f4f4;
padding:40px;
}

form{
background:white;
padding:20px;
border-radius:10px;
width:400px;
margin:auto;
box-shadow:0 0 10px rgba(0,0,0,0.1);
}

input{
width:100%;
padding:8px;
margin:8px 0;
}

button{
background:#28a745;
color:white;
padding:10px;
border:none;
width:100%;
border-radius:6px;
}

</style>

</head>

<body>

<h2 style="text-align:center;">Post a Ride</h2>

<form method="POST">

From:
<input type="text" name="from_location" required>

To:
<input type="text" name="to_location" required>

Date:
<input type="date" name="date" required>

Contact:
<input type="text" name="contact" required>

Email:
<input type="email" name="posted_by" required>

Seats Available:
<input type="number" name="seats_left" min="1" max="15" required>

<button type="submit">Post Ride</button>

</form>

</body>
</html>
