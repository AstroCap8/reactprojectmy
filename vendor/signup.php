<?php

    session_start();

    require_once 'connect.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $password_conf = $_POST['password_conf'];

    if ($password == $password_conf) {
        $password = md5($password);

        mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `email`, `login`, `password`) VALUES (NULL, '$name', '$email', '$login', '$password')");

        $_SESSION['message'] = 'Регистрация прошла успешно';
        header('Location: ../register.php');
    }
    else{
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../register.php');
    }

?>