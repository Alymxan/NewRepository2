<!-- Массивтерді жіберу -->


<!DOCTYPE html>
<html>
<head>
<title>MyWebsite</title>
<meta charset="utf-8" />
</head>
<body>
<?php
if(isset($_POST["users"])){
     
    $firstUser = $_POST["users"]["first"];
    $secondUser = $_POST["users"]["second"];
    $thirdUser = $_POST["users"]["third"];
    echo "$firstUser<br>$secondUser<br>$thirdUser";
    // echo $firstUser;
}
?>
<h3>Деректерді енгізу формасы</h3>
<form method="POST">
    <p>User 1: <input type="text" name="users[first]" /></p>
    <p>User 2: <input type="text" name="users[second]" /></p>
    <p>User 3: <input type="text" name="users[third]" /></p>
    <input type="submit" value="жіберу">
</form>
</body>
</html>