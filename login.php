<?php
session_start();
if($_POST['user']=="admin" && $_POST['pass']=="admin123"){
    $_SESSION['admin']=true;
    header("Location: admin.php");
}
?>

<form method="POST">
<input name="user" placeholder="Username">
<input type="password" name="pass" placeholder="Password">
<button>Login</button>
</form>
