<?php

$conn = new mysqli("localhost","root","","confidential");

if($_SERVER["REQUEST_METHOD"]=="POST"){

$title = $_POST['title'];
$description = $_POST['description'];
$location = $_POST['location'];
$email = $_POST['posted_by'];

$conn->query("INSERT INTO lost_items (title,description,location,posted_by)
VALUES ('$title','$description','$location','$email')");

/* redirect to lost items page */
header("Location: view_lost.php");
exit();
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Post Lost Item</title>

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

input,textarea{
width:100%;
padding:8px;
margin:8px 0;
}

button{
background:#e53935;
color:white;
padding:10px;
border:none;
width:100%;
border-radius:6px;
}

</style>
</head>

<body>

<h2 style="text-align:center;">Post Lost Item</h2>

<form method="POST">

Item Name:
<input type="text" name="title" required>

Description:
<textarea name="description" required></textarea>

<!-- Changed label -->
Location Lost:
<input type="text" name="location" required>

Email:
<input type="email" name="posted_by" required>

<button type="submit">Post Lost Item</button>

</form>

</body>
</html>
