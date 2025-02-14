
<!-- $data = [
    ['№' => 1, 'Аты' => 'Асан', 'Жасы' => 25],
    ['№' => 2, 'Аты' => 'Үсен', 'Жасы' => 30],
    ['№' => 3, 'Аты' => 'Жаслан', 'Жасы' => 22],
];

echo "<table border='1'>";
echo "<tr><th>№</th><th>Аты</th><th>Жасы</th></tr>";
foreach ($data as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>$cell</td>";
    }
    echo "</tr>";
}
echo "</table>";
 -->


<?php
$name = "не определено";
$age = "не определен";
if(isset($_GET["name"])){
  
    $name = $_GET["name"];
}
if(isset($_GET["age"])){
  
    $age = $_GET["age"];

}
echo "Имя: $name <br> Возраст: $age";


?>

