<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Результаты</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
    
<?php 
   include_once("db.php");

   $sql = "SELECT * FROM anketa";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result ->fetch_assoc()) {
        echo "<div class='rez'>"."<span> Имя: ". $row["firstname"] . "</span>" . "<br><span> Фамилия: ". $row["lastname"] . "</span>" . "<br><span> Пол: ". $row["gender"] . "</span>" . "<br> <span>Возрост: ". $row["age"] . "</span>"
        . "<br><br><span> Вы: ". $row["gender2"] . "</span>" . "<br> <span>Дата рождения: ". $row["datea"] . "</span>" . "<br><span> Семейное положение: ". $row["family"] . "</span>" . "<br> <span>Социальный статус: ". $row["statuse"] . "</span>"
        . "<br> <span>Местожительство: ". $row["locations"] . "</span>" . "<br><br><span> На выходные Я:<br> ". $row["sleep"] . "<br>". $row["walking"]
        . "<br>". $row["fishing"] . "<br>". $row["sport"] . "<br>". $row["look"] . "</span>" . "<br><span>Образование: ". $row["selects"] . "</span>" . "<br><br> <span>Прочитано книг: ". $row["read1"] . "</span>" . "<br><br> <span>Коментарии: ". $row["comment"] . "</span>" . "<br><br><span> Email: ". $row["email"] . "</span>" . "<br><br> <span>Подписан на: ". $row["cat1"]
        . "<br> ". $row["cat2"] . "<br>". $row["cat3"] . "<br>". $row["cat4"] . "</span>" . "<br> <br><span>Сложность задачи: ". $row["task"] . "</span>" . "</div>";
    }
}
$conn->close();
   ?>
   <br>
   <a href="/hw15/index.php">Назад к анкете</a>
</body>
</html>
