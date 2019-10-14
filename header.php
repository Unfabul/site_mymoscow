<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <title><?= "MyMoscow - ".$title; ?></title>
</head>
<body>
    <div class="header <?= "{$headerPic}"; ?>">
        <div class="header-bg">
            <div class="header-head wrapper">
                <div class="header-head-logo">
                    <div class="header-head-logo-icon"><a href="/"></a></div>
                    <div class="header-head-logo-name">MyMoscow</div>
                </div>
                <div class="header-head-menu">
                    <ul>
                        <li><a href="/">Главная</a></li>
                        <li><a href="/trips.php">Наши услуги</a></li>
                        <li><a href="#">О компании</a></li>
                        <li><a href="/contacts.php">Контакты</a></li>
                        <li><a href="#">Отзывы</a></li>
                    </ul>
                </div>
                <div class="header-head-burger">
                    <div class="header-head-burger-line"></div>
                </div>
            </div>
            <div class="header-title wrapper">
                <h1><?= "{$h1}"; ?></h1>
                <p><?= "{$header_p}"; ?></p>
                <p class="page-name"><?= "{$header_p2}"; ?></p>
            </div>
        </div>
    </div>