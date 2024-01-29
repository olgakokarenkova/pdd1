<?php
session_start();
if (isset($_POST['number'])) {
    $number = $_POST['number'];
    if ($number == '') {
        unset($number);
    }
}
if (isset($_POST['description'])) {
    $description = $_POST['description']; // Исправление: $text должен быть равен $_POST['text']
    if ($description == '') {
        unset($description);
    }
}
if (empty($number) or empty($description)) {
    exit("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
} else {
    include("dbconnect.php");
    if (!empty($_SESSION['ID'])) {
        $kod = $_SESSION['ID'];
        $result = $mysqli->query("INSERT INTO Application (IdUser, Number, Description, IdWorker, IdStatus) VALUES('$kod', '$number', '$description', 1, 1)");
        if ($result === TRUE) { // Исправление: использовать === вместо ==
            echo "<div style=' margin-left:15%; margin-top:20%; width: 70%;    height: 111px;
            background: rgba(217,217,217,1);    opacity: 1;
            border-top-left-radius: 12px;    border-top-right-radius: 12px;
            border-bottom-left-radius: 12px;    border-bottom-right-radius: 12px;
            overflow: hidden;    color: rgba(79,79,79,1);
            font-family: Roboto;    font-weight: Regular;
            font-size: 34px;    opacity: 1;
            text-align: center;'>Вашу заявку приняли в обработку! Перейти на  <a href='indexLK.php'>Главную страницу</a></div>";
        } else {
            echo "<div style='margin-left:15%; margin-top:20%; width: 70%;    height: 111px;
            background: rgba(217,217,217,1);    opacity: 1;
            border-top-left-radius: 12px;    border-top-right-radius: 12px;
            border-bottom-left-radius: 12px;    border-bottom-right-radius: 12px;
            overflow: hidden;    color: rgba(79,79,79,1);
            font-family: Roboto;    font-weight: Regular;
            font-size: 34px;    opacity: 1;
            text-align: center;'>Ошибка! Сообщение не сохранено. </div>";
        }
    }
}
?>
