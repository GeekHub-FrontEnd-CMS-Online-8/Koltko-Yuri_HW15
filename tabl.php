<?php
$host='localhost'; // имя хоста (уточняется у провайдера)
$database='hw15'; // имя базы данных, которую вы должны создать
$user='root'; // заданное вами имя пользователя, либо определенное провайдером
$pswd='root'; // заданный вами пароль
 
$conn = new mysqli($host, $user, $pswd, $database);
if ($conn->connect_error){
    die("Не могу подключится, причина:" . $conn->connect_error);
}

$sql = "CREATE TABLE anketa (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    gender VARCHAR(30) NOT NULL,
    age VARCHAR(30) NOT NULL,
    gender2 VARCHAR(30) NOT NULL,
    datea VARCHAR(30) NOT NULL,
    family VARCHAR(30) NOT NULL,
    statuse VARCHAR(30) NOT NULL,
    locations VARCHAR(30) NOT NULL,
    sleep VARCHAR(30) NOT NULL,
    walking VARCHAR(30) NOT NULL,
    fishing VARCHAR(30) NOT NULL,
    sport VARCHAR(30) NOT NULL,
    look VARCHAR(30) NOT NULL,
    selects VARCHAR(30) NOT NULL,
    read1 VARCHAR(30) NOT NULL,
    comment TEXT(255) NOT NULL,
    email VARCHAR(30) NOT NULL,
    cat1 VARCHAR(30) NOT NULL,
    cat2 VARCHAR(30) NOT NULL,
    cat3 VARCHAR(30) NOT NULL,
    cat4 VARCHAR(30) NOT NULL,
    task VARCHAR(30) NOT NULL

    )";

if ($conn->query($sql) === TRUE) {
    echo "Таблица успешно создалась";
} else {
    echo "Таблица не создалась: " . $conn->error;
}

$conn->close();
?>
