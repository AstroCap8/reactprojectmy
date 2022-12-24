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
                    <h1 class="whitetext">Присоединяйтесь!</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-5 mt-4 text-center">
                    <button class="fs-4 myshadow" id=""> Играть! </button>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-2"></div>
                <div class="col-lg-2 mt-4 text-center">
                    <img class="w-50 p-3" src="./img/windows.png" alt="">
                </div>
                <div class="col-lg-2 mt-4 text-center">
                    <img class="w-50 p-3" src="./img/xbox.png" alt="">
                </div>
                <div class="col-lg-2 mt-4 text-center">
                    <img class="w-50 p-3" src="./img/android.png" alt="">
                </div>
                <div class="col-lg-2 mt-4 text-center">
                    <img class="w-50 p-3" src="./img/nintendo-switch.png" alt="">
                </div>
                <div class="col-lg-2"></div>
            </div>

        <!-- Разделительная линия -->

            <div class="row">
                <div class="col-lg-12 mt-5 text-center">
                    <hr size="4"></hr>
                </div>
            </div>

        <!-- Разделительная линия -->

            <div class="row">
                <div class="col-lg-12 mt-5 text-center">
                    <h1 class="whitetext mt-3">Ради будущего стоит бороться!</h1>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6 p-4 mainblock">
                    <img class="img-fluid p-4" src="./img/Гус.jpg">
                </div>
                <div class="col-lg-6 p-4 mainblock fs-4">
                    <p class="p-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non leo nec lorem scelerisque gravida. Pellentesque justo sapien, ullamcorper et odio eu, hendrerit hendrerit ex. In rutrum libero ac aliquam sagittis. Sed molestie interdum ante non vehicula. Donec efficitur convallis justo, quis suscipit nisi tincidunt vel. Duis mauris justo, sagittis sed ex et, ultrices bibendum lacus. Ut tempus viverra bibendum. Fusce eu ultricies tortor, sed interdum lacus. Nunc ante justo, facilisis vulputate suscipit id, maximus id justo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 p-4 mainblock fs-4">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non leo nec lorem scelerisque gravida. Pellentesque justo sapien, ullamcorper et odio eu, hendrerit hendrerit ex. In rutrum libero ac aliquam sagittis. Sed molestie interdum ante non vehicula. Donec efficitur convallis justo, quis suscipit nisi tincidunt vel. Duis mauris justo, sagittis sed ex et, ultrices bibendum lacus. Ut tempus viverra bibendum. Fusce eu ultricies tortor, sed interdum lacus. Nunc ante justo, facilisis vulputate suscipit id, maximus id justo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                    </p>
                </div>
                <div class="col-lg-6 p-4 mainblock">
                    <img class="w-50" src="./img/Гус.jpg">
                </div>
            </div>

        <!-- Разделительная линия -->

            <div class="row">
                <div class="col-lg-12 mt-5 text-center">
                    <hr size="4"></hr>
                </div>
            </div>

        <!-- Разделительная линия -->

            <div class="row mt-5">
                <div class="col-lg-12">
                    <h1 class="text-center whitetext"> Новости </h1>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-3 mt-3">
                    <img class="w-100 py-4 px-3" src="./img/Гус.jpg" alt="">
                    <div class="col-lg-12 px-4 fs-2 whitetext">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non leo nec lorem scelerisque gravida.
                        </p> 
                        
                        <p class="fs-4 graytext">
                            10 августа
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 mt-3">
                    <img class="w-100 py-4 px-3" src="./img/Гус.jpg" alt="">
                    <div class="col-lg-12 px-4 fs-2 whitetext">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non leo nec lorem scelerisque gravida.
                        </p> 
                        
                        <p class="fs-4 graytext">
                            12 августа
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 mt-3">
                    <img class="w-100 py-4 px-3" src="./img/Гус.jpg" alt="">
                    <div class="col-lg-12 px-4 fs-2 whitetext">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non leo nec lorem
                        </p> 
                         
                        <p class="fs-4 graytext">
                            14 августа
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 mt-3">
                    <img class="w-100 py-4 px-3" src="./img/Гус.jpg" alt="">
                    <div class="col-lg-12 px-4 fs-2 whitetext">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non leo nec lorem scelerisque gravida.
                        </p> 
                        <p class="fs-4 graytext">
                            19 августа
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mb-5 mt-5 text-center">
                        <button class="fs-4 myshadow" id=""> Все новости </button>
                    </div>
                </div>
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
                <div class="col-lg-2 text-center whitetext">
                    <img class="w-50" src="./img/discord.png" alt="">
                </div>
                <div class="col-lg-2 text-center whitetext">
                    <img class="w-50" src="./img/twitch.png" alt="">
                </div>
                <div class="col-lg-2 text-center whitetext">
                    <img class="w-50" src="./img/twitter.png" alt="">
                </div>
                <div class="col-lg-3"></div>
            </div>

        <!-- Компания-разработчик -->

            <div class="row footer">
                <div class="col-lg-4"></div>
                <div class="col-lg-4 p-4 mt-4 text-center">    
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