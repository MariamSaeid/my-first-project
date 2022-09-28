<?php require_once('connection.php') ?>
<?php

$email = $_POST['email'];;
$password = $_POST['password'];;
$cPassword = $_POST['cPassword'];

$insertUser = "INSERT INTO signup ( email, password, cPassword) 
VALUES ('$email','$password','$cPassword ')";
if ($password === $cPassword){
    $statement =  $connection->prepare($insertUser);
    $statement->execute();
}else {
    echo"your password not same as correct password";
}

?>