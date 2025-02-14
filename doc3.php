<!-- Деректер қауіпсіздігі -->
<!DOCTYPE html>
<html>
<head>
<title>MyWebsite</title>
<meta charset="utf-8" />
</head>
<body>
<?php
$name = "анықталмаған";
$age = "анықталмаған";
if(isset($_GET["name"])){
  
    // $name = htmlspecialchars($_GET["name"]);
    $name = strip_tags($_GET["name"]);
}
if(isset($_GET["age"])){
  
    // $age = htmlspecialchars($_GET["age"]);
    $age = strip_tags($_GET["age"]);
}
echo "Аты: $name <br> Жасы: $age";
?>
<h3>Деректерді енгізу формасы</h3>
<form method="GET">
    <p>Аты: <input type="text" name="name" /></p>
    <p>Жасы: <input type="number" name="age" /></p>
    <input type="submit" value="Жіберу">
</form>
</body>
</html>
