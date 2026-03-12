<?php
session_start();
$conn = new mysqli("localhost","root","","confidential");

if($_SERVER["REQUEST_METHOD"]=="POST"){

$title = $_POST['title'];
$description = $_POST['description'];
$location = $_POST['location'];
$user = $_SESSION['user'];

$sql = "INSERT INTO lost_items(title,description,location,posted_by)
VALUES('$title','$description','$location','$user')";

$conn->query($sql);

echo "<script>alert('Item posted successfully');</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Post Lost Item</title>

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

input, textarea{
width:100%;
padding:10px;
margin:10px 0;
border:1px solid #ccc;
border-radius:6px;
font-size:14px;
}

textarea{
height:80px;
resize:none;
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

<h2>Post Lost Item</h2>

<form method="POST">

<input type="text" name="title" placeholder="Item name" required>

<textarea name="description" placeholder="Description"></textarea>

<input type="text" name="location" placeholder="Location found">

<input type="number" name="contact" placeholder="Contact number">

<button type="submit">Submit</button>

</form>

<a class="back" href="dashboard.php">← Back to Dashboard</a>

</div>

</body>
</html>
