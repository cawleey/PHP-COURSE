<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practice chapter4</title>
</head>
<body>
    <form method="post">
full name: <input type="text" name="name">
password: <input type="password" name="pass">
<input type="reset" value="reset form">
<input type="submit" name="submit" value="register">
    </form>
   
<?php
if (isset($_POST['submit'])) {
    echo "Full Name: " . htmlspecialchars($_POST['name']);
    echo "<br>";
    echo "Password: " . htmlspecialchars($_POST['pass']);
}
?>

</body>
</html>

<!-- 
<form method="post">
Full name: <input type="text" name="name">
Password: <input type="password" name=“pass">
<input type="reset" value="Reset form">
<input type="submit" name="submit" value="Register">
</form>
//<?php
//echo ("User name: " . $_POST ['name']);
//echo ("<br>Password: " . $_POST ['pass']);
?> -->
