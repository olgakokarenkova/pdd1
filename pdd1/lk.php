<?php 
$conn = new mysqli( 
 '127.0.0.1', 
 'root', 
 '', 
 'Web'); 
 if($conn->connect_error){ 
    die("Ошибка: " . $conn->connect_error); 
}
	if (isset($_POST["email"]) && isset($_POST["password"])){
    $email = $conn->real_escape_string($_POST["email"]); 
    $password = $conn->real_escape_string($_POST["password"]); 
    $sql = "SELECT * FROM User WHERE Email = '$email'"; 
    $check = "SELECT * FROM User WHERE Email = '$email' AND Password = '$password'"; 
    $result_sql = $conn->query($sql); 
    $result_check = $conn->query($check); 
    if($result_sql -> num_rows > 0){ 
         
        if($result_check -> num_rows > 0){ 
            $name = $result_check->fetch_assoc(); 
            session_start();
            $result = $conn->query("SELECT * FROM User WHERE Email = '$email' AND Password = '$password'");
            foreach($result as $row){
                $_SESSION["ID"] = $row["IdUser"];
                // операции с $username
            }
            
            include 'indexLK.php';
 
        } 
        else { 
            echo "Неправильный пароль"; 
        } 
    } 
    else { 
            echo "Несуществующий пользователь"; 
    } 
}
?>