<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Анкета</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<form action="" method="POST">
      <fieldset id="about_me">
          <legend><span>Коротко о себе</span></legend>
       Имя: <input type="text" size="35" name="firstname">
       <br>
       Фамилия: <input type="text" size="35" name="lastname">
       <br>
       Пол: <input type="radio" name="gender" value="мужской"> мужской
       <input type="radio" name="gender" value="женский"> женский
       <br>
       Возраст: <input id="age" size="2" type="text" value="" name="age"> лет
       </fieldset>
       <fieldset id="in_detail">
           <legend><span>Подробнее о себе</span></legend>
           <input type="radio" name="gender2" value="Молодой человек">Молодой человек
           <br>
           <input type="radio" name="gender2" value="Девушка">Девушка
           <br>
           <div class="more__detail">
           <input type="text" name="datea"> Дата рождения
           <br>
           <input type="text" name="family"> Семейное положение
           <br>
           <input type="text" name="statuse"> Социальный статус
           <br>
           <input type="text" name="locations"> Местожительство
           </div>
           <p>
           <span>Что вы обычно делаете на выходных:</span>
           </p>
           <input type="checkbox" name="sleep" value="Сплю;">Сплю;
           <br>
           <input type="checkbox" name="walking" value="Гуляю;">Гуляю
           <br>
           <input type="checkbox" name="fishing" value="Хожу на рыбалку;">Хожу на рыбалку
           <br>
           <input type="checkbox" name="sport" value="Спортом;">Занимаюсь спортом
           <br>
           <input type="checkbox" name="look" value="Смотрю фильмы;">Смотрю фильмы
           <p>
           <span>Образование:</span>
           </p>
           <select name="selects">
           <option value="Не заполнено">-</option>
        <option value="начальное">начальное</option>
        <option value="среднее (общее)">среднее (общее)</option>
        <option value="среднее (полное)">среднее (полное)</option>
        <option value="среднее (профессиональное)">среднее (профессиональное)</option>
        <option value="бакалавр">бакалавр</option>
        <option value="магистратура">магистратура</option>
           </select>
           <p>
           <span>Сколько книг прочитали за лето:</span>
           </p>
           <input type="radio" name="read1" value="0-1"> 0-1
           <br>
           <input type="radio" name="read1" value="0-5"> 0-5
           <br>
           <input type="radio" name="read1" value="0-10"> 0-10
           <br>
           <input type="radio" name="read1" value="0-20+"> 0-20+
           <label class="com">
           <span>Коментарии:</span>
           </label>
           <textarea name="comment" cols="50" rows="10"></textarea>
          
       </fieldset>
       <fieldset id="finally"><legend><span>И в заключение</span></legend>
          
          
          <label class="finally__email"><span>Email:</span></label>
          
          <input type="email" name="email" size="40">
          <label class="subscribe__fin" ><span>Хотите подписатся?</span></label>
           <label class="cat__1"><span>Выберите категории</span></label>
          <br>
           <input type="checkbox" name="cat1" value="Esquire">Esquire
           <br>
           <input type="checkbox" name="cat2" value="Maxim">Maxim
           <br>
           <input type="checkbox" name="cat3" value="Men’s Health">Men’s Health
           <br>
           <input type="checkbox" name="cat4" value="Playboy">Playboy
           <p><span>На сколько сложная задача</span></p>
           <input type="radio" name="task" value="Легкотня">Легкотня
           <br>
           <input type="radio" name="task" value="Сложно">Сложно
           <br>
           <input type="radio" name="task" value="Очень сложно">Очень сложно
           <br>
           <input type="radio" name="task" value="Как два пальца">Как два пальца
       </fieldset>
       <p><input type="submit" name="add" value="Отправить"></p>
   </form>

   <?php
$servername = "localhost";
$database = "hw15";
$username = "root";
$password = "root";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// echo "Порядок - ";
if (isset($_POST['add'])) {

    $firstname = strip_tags(trim($_POST['firstname']));
    $lastname = strip_tags(trim($_POST['lastname']));
    $gender = strip_tags(trim($_POST['gender']));
    $age = strip_tags(trim($_POST['age']));
    $gender2 = strip_tags(trim($_POST['gender2']));
    $datea = $_POST['datea'];
    $family = strip_tags(trim($_POST['family']));
    $statuse = strip_tags(trim($_POST['statuse']));
    $locations = strip_tags(trim($_POST['locations']));
    $sleep = strip_tags(trim($_POST['sleep']));
    $walking = strip_tags(trim($_POST['walking']));
    $fishing = strip_tags(trim($_POST['fishing']));
    $sport = strip_tags(trim($_POST['sport']));
    $look = strip_tags(trim($_POST['look']));
    $selects = strip_tags(trim($_POST['selects']));
    $read1 = strip_tags(trim($_POST['read1']));
    $comment = strip_tags(trim($_POST['comment']));
    $email = strip_tags(trim($_POST['email']));
    $cat1 = strip_tags(trim($_POST['cat1']));
    $cat2 = strip_tags(trim($_POST['cat2']));
    $cat3 = strip_tags(trim($_POST['cat3']));
    $cat4 = strip_tags(trim($_POST['cat4']));
    $task = strip_tags(trim($_POST['task']));
    
       
        if (trim($_POST['firstname']) === '' || trim($_POST['lastname']) === '' || trim($_POST['gender']) === '' || trim($_POST['age']) === ''
        || trim($_POST['gender2']) === '' || trim($_POST['datea']) === '' || trim($_POST['family']) === '' || trim($_POST['statuse']) === '' || trim($_POST['locations']) === ''
        || trim($_POST['selects']) === '' || trim($_POST['read1']) === '' || trim($_POST['comment']) === '' || trim($_POST['email']) === '' || trim($_POST['task']) === '')
      die('Строки не заполнены!!!' . mysqli_connect_error());
      
     
    $sql = "INSERT INTO anketa (firstname, lastname, gender, age, gender2, 
    datea, family, statuse, locations, sleep, walking, fishing, sport, 
    look, selects, read1, comment, email, cat1, cat2, cat3, cat4, task) 
    VALUES ('$firstname','$lastname','$gender','$age','$gender2',
    '$datea','$family','$statuse','$locations','$sleep','$walking','$fishing',
    '$sport','$look','$selects','$read1','$comment','$email','$cat1',
    '$cat2','$cat3','$cat4','$task')";
    if (mysqli_query($conn, $sql)) {
          echo "Запись создана";
          
    } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    
    
    }
    mysqli_close($conn);
?>
   <br>
   <a href="/hw15/home.php">Результаты</a>
</body>
</html>