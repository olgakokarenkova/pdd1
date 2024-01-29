<?php 
$conn = new mysqli( 
 '127.0.0.1', 
 'root', 
 '', 
 'Web'); 
 if($conn->connect_error){ 
    die("Ошибка: " . $conn->connect_error); 
} 
if (isset($_POST["surname"]) && isset($_POST["name"]) && isset($_POST["patronymic"]) && isset($_POST["login"]) && isset($_POST["email"]) && isset($_POST["password"])){
	$surname = $conn->real_escape_string($_POST["surname"]); 
	$name = $conn->real_escape_string($_POST["name"]); 
	$patronymic = $conn->real_escape_string($_POST["patronymic"]); 
	$login = $conn->real_escape_string($_POST["login"]); 
	$email = $conn->real_escape_string($_POST["email"]); 
	$password = $conn->real_escape_string($_POST["password"]); 
	$sql = "INSERT INTO User (Surname, Name, Patronymic, Login, Email, Password) VALUES ('$surname', '$name', '$patronymic','$login', '$email', '$password')"; 
    if($conn->query($sql)){ 
        include 'indexLK.php'; 
    } 
	else{ 
        echo "Ошибка: " . $conn->error; 
    } 
}
    $conn->close(); 
?>