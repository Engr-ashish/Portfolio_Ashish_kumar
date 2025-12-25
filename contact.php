<?php
$conn = new mysqli("localhost","root","","portfolio");
$conn->query("INSERT INTO messages (name,email,message)
VALUES ('$_POST[name]','$_POST[email]','$_POST[message]')");
header("Location: index.php");
