<!-- Енгізу формаларымен жұмыс -->

<!-- <input type="checkbox" name="remember" checked="checked" /> -->

<!DOCTYPE html>
<html>
<head>
<title>MyWebsite</title>
<meta charset="utf-8" />
</head>
<body>
<?php
if(isset($_POST["technologies"])){
     
    $technologies = $_POST["technologies"];
    foreach($technologies as $x) echo "$x<br />";   
}
?>
<h3>Деректерді енгізу формасы</h3>
<form method="POST">
    <p>ASP.NET: <input type="checkbox" name="technologies[]" value="ASP.NET" /></p>
    <p>PHP: <input type="checkbox" name="technologies[]" value="PHP" /></p>
    <p>Node.js: <input type="checkbox" name="technologies[]" value="Node.js" /></p>
    <input type="submit" value="Жіберу">
</form>
</body>
</html>