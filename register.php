<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/styles5.css" rel="stylesheet">
    <link rel="shortcut icon" href="./img/pngegg.png" type="image/x-icon">
    <script src="./js/bootstrap.js"></script>
    <title>Prime World</title>
</head>
<body>

    <!--Шапка-->

    <div class="container-fluid header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 mt-3 headblock"><a href="./index.php"><img class="img-fluid " src="img/pngegg.png"></a></div>
                <div class="col-lg-7 mt-4 headblock whitetext">
                    <a href="" class="p-4">Информация об игре</a> | 
                    <a href="" class="p-4">Герои</a> |
                    <a href="" class="p-4">Новости</a> | 
                    <a href="" class="p-4">Сообщество</a>  
                </div>
                <div class="col-lg-2 mt-4 mb-1 headblock whitetext" id="user">

                    <?php

                        echo $_SESSION['user']['login'];

                    ?>

                </div>
                <div class="col-lg-1 mt-3 headblock curs" id="burger"><img class="w-50 mt-3" src="img/burger.png"></div>
            <div class="row menu" id="menu">
                <div class="col-lg-9"></div>
                    <div class="col-lg-3">
                        <ul class="fs-4">
                            <li class="p-1 m-2"><a href="./auth.php" class="">Войти</a></li> 
                            <li class="p-1 m-2"><a href="./register.php" class="">Регистрация</a></li> 
                            <li class="p-1 m-2"><a href="./callback.html" class="">Оставить отзыв</a></li>
                            <li class="p-1 m-2"><a href="./stats.html" class="">Статистика</a></li>
                            <li class="p-1 m-2"><a href="vendor/signout.php" class="">Выйти</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--Главный блок-->

    <div class="container-fluid maincont">
        <div class="container main">
            <div class="row">
                <div class="col-lg-12 mt-5 text-center">
                    <h1 class="whitetext">Регистрация</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 p-4">
                    <form class="" action="vendor/signup.php" method="post" enctype="multipart/form-data">
                        <div class="col-lg-12">
                            <label class="fs-4 ms-3 mb-3 mt-4 whitetext">Имя</label>
                        </div>
                        <div class="col-lg-12">
                            <input class="fs-5 ms-3 fs-4 whitetext" type="text" name="name" placeholder="Введите имя" id="">
                        </div>
                        <div class="col-lg-12">
                            <label class="fs-4 ms-3 mb-3 mt-4 whitetext">E-mail</label>
                        </div>
                        <div class="col-lg-12">
                            <input class="fs-5 ms-3 fs-4 whitetext" type="e-mail" name="email" placeholder="Введите e-mail" id="">
                        </div>
                        <div class="col-lg-12">
                            <label class="fs-4 ms-3 mb-3 mt-4 whitetext">Логин</label>
                        </div>
                        <div class="col-lg-12">
                            <input class="fs-5 ms-3 fs-4 whitetext" type="text" name="login" placeholder="Введите логин" id="">
                        </div>
                        <div class="col-lg-12">
                            <label class="fs-4 ms-3 mb-3 mt-4 whitetext">Пароль</label>
                        </div>
                        <div class="col-lg-12">
                            <input class="fs-5 ms-3 fs-4 whitetext" type="password" name="password" placeholder="Введите пароль" id="">
                        </div>
                        <div class="col-lg-12">
                            <label class="fs-4 ms-3 mb-3 mt-4 whitetext">Подтверждение пароля</label>
                        </div>
                        <div class="col-lg-12">
                            <input class="fs-5 ms-3 fs-4 whitetext" type="password" name="password_conf" placeholder="Подтвердите пароль" id="">
                        </div>
                            <?php
                                if($_SESSION['message'] == 'Регистрация прошла успешно'){
                                    echo '<p class="mt-3 text-center fs-5 msgsuc">' . $_SESSION['message'] . '</p>';
                                }
                                elseif($_SESSION['message'] == 'Пароли не совпадают'){
                                    echo '<p class="mt-3 text-center fs-5 msgfal">' . $_SESSION['message'] . '</p>';
                                }
                                unset($_SESSION['message']);
                            ?>
                        <div class="col-lg-12 text-center fs-5 mt-4 mb-2">
                            <button class="fs-4" type="submit">Зарегистрироваться</button>
                            <p class="mt-3 whitetext">Уже есть аккаунт? - <a href="auth.php"> Войти </a></p>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>

    <!--Подвал-->

    <div class="container-fluid footer">
        <div class="container">
            <div class="row footer">
                <div class="col-lg-12 p-4 footblock">Будем на связи!</div>
            </div>
        
        <!-- Социальные сети -->

            <div class="row footer mt-5">
                <div class="col-lg-3"></div>
                <div class="col-lg-2 mt-4 text-center whitetext">
                    <img class="w-50" src="./img/discord.png" alt="">
                </div>
                <div class="col-lg-2 mt-4 text-center whitetext">
                    <img class="w-50" src="./img/twitch.png" alt="">
                </div>
                <div class="col-lg-2 mt-4 text-center whitetext">
                    <img class="w-50" src="./img/twitter.png" alt="">
                </div>
                <div class="col-lg-3"></div>
            </div>

        <!-- Компания-разработчик -->

            <div class="row footer">
                <div class="col-lg-4"></div>
                <div class="col-lg-4 p-4 mt-5 text-center">    
                    <img class="w-50" src="./img/Fall-guys.png"></img>
                </div>
                <div class="col-lg-4"></div>
            </div>

        <!-- Прочая информация -->

            <div class="row footer mt-5">
                    <div class="col-lg-2 fs-3 p-1 text-center whitetext">
                        <p>
                            Вакансии   
                        </p>
                    </div>
                    <div class="col-lg-2 fs-3 p-1 text-center whitetext">
                        <p>
                            Поддержка 
                        </p>
                    </div>
                    <div class="col-lg-2 fs-3 p-1 text-center whitetext">
                        <p>
                            О компании 
                        </p>
                    </div>
                    <div class="col-lg-2 fs-3 p-1 text-center whitetext">
                        <p>
                            Открыть запрос 
                        </p>
                    </div>
                    <div class="col-lg-2 fs-3 p-1 text-center whitetext">
                        <p>
                            Пресс-релизы 
                        </p>
                    </div>
                    <div class="col-lg-2 fs-3 p-1 text-center whitetext">
                        <p>
                            API 
                        </p>
                    </div>
                </div>

        <!-- Лицензия -->

            <div class="row footer mt-5">
                <div class="col-lg-12 fs-6 text-center graytext">
                    <p>
                        © BLIZZARD ENTERTAINMENT, INC., 2022
                        <br>
                        Все упомянутые товарные знаки являются собственностью соответствующих владельцев.
                    </p>
                </div>
            </div>

        <!-- Прочая информация -->

            <div class="row footer">
                <div class="col-lg-12 fs-5 text-center graytext">
                    <p class="wordspace">
                        Политика конфиденциальности |
                        
                        Соглашение |
                    
                        Условия |
                    
                        Политика cookie |
                    
                        Параметры cookie
                    </p>
                </div>
            </div>

        <!-- Возрастное ограничение -->

            <div class="row footer mt-5">
                <div class="col-lg-4"></div>
                <div class="col-lg-4 fs-5 text-center">
                    <img class="w-50 p-3" src="./img/PEGI.png" alt="">
                </div>
                <div class="col-lg-4"></div>
            </div>
        </div>
    </div>

    <script src="./js/script.js"></script>
</body>
</html>