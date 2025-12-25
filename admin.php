<?php
session_start();
if(!isset($_SESSION['admin'])) header("Location: login.php");

$conn = new mysqli("localhost","root","","portfolio");

if($_POST){
    $conn->query("INSERT INTO projects (title, description)
    VALUES ('$_POST[title]','$_POST[description]')");
}
?>

<h2>Admin Dashboard</h2>

<form method="POST">
<input name="title" placeholder="Project Title" required>
<textarea name="description" placeholder="Project Description" required></textarea>
<button>Add Project</button>
</form>

<a href="logout.php">Logout</a>
