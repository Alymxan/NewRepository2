<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = htmlspecialchars($_POST["name"]);
        $age = htmlspecialchars($_POST["age"]);

        if(empty($name) || empty($age)){
            echo "Барлық өрістерді толтырыңыз </br>";
        } else {
            echo "Аты: $name, Жасы:  $age </br>";
        }

        if($age < 18){
            echo "Сіз кәмелет жасқа толмағансыз </br>";
        } else{
            echo "Сіздің жасыңыз $age жас";
        }
    }
?>