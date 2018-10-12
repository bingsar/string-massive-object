<?php
$name = 'Антон Шмигельский';
$age = 29;
$email = 'tony.shmig@gmail.com ';
$city = 'Санкт-Петербург';
$about = 'junior php';
?>

<!DOCTYPE>
<html>
<head>
    <title>Меня зовут <?= $name ?></title>
    <meta charset="utf-8">
    <style>
        body {
            font-family: sans-serif;
        }
        p {
            text-align: center;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
<h1>Небольшая справка</h1>
<h2>Данные пользователя системы - <?= $name ?></h2>
<dl>
    <dt>Имя</dt>
    <dd><?= $name ?></dd>
    <dt>Возраст</dt>
    <dd><?= $age ?></dd>
    <dt>Адрес электронной почты</dt>
    <dd><a href="mailto:<?= $email ?>"><?= $email ?></a></dd>
    <dt>Город</dt>
    <dd><?= $city ?></dd>
    <dt>О себе</dt>
    <dd><?= $about ?></dd>
</dl>
</body>
</html>