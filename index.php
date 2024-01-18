<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Итог 1</title>
    <meta name="vievport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <div class="information">
        <div id="secondary">
            <div id="shopinfo"></div>
            <button type="button" class="textnav">О нас <img class="chevDown" src="icons/ChevronDown.png"/> </button>
            <button type="button" class="textnav">Магазины</button>
            <button type="button" class="textnav">Акции</button>
            <button type="button" class="textnav">Клуб сомелье</button>
            <button type="button" class="textnav">Фотоотчёты</button>
            <button type="button" class="textnav">Партнерам</button>
        </div>
        <div id="frame">
            <button id="catalog"><img class="chevDown" src="icons/Menu.png"/><div id="catalogtext">Каталог</div></button>
            <input id="search" placeholder="Поиск алкоголя и товаров">
            <button id="Basic"><img src="icons/User.png"><div class="Basictext">Профиль</div></button>
            <button id="Cart"><img src="icons/ShoppingCart.png"><div class="Basictext">Корзина</div></button>
        </div>
    </div>
</header>

<div>
    <div class="information">
        <div id="breadcrumbItem">
            <div class="inline">Главная</div>
            <img src="icons/ChevronDown.png" class="rotate">
            <div class="inline">Оформление заказа</div>
        </div>
        <div id="namePage">
            Оформление заказа
        </div>
        <div id="attention">
            <img src="icons/Warning.png" style="margin-right: 8px; float: left">
            <div>
                <b>Мы не продаем алкоголь дистанционно!</b><br> Заказ резервируется, оплатить и забрать его можно только в магазине
            </div>
        </div>
        <div id="result">
            <div id="total">Итого</div>
            <div style="display: flex; margin-top: 8px" >
                <div class="resulttext">Товаров</div>
                <div class="point"></div>
                <div class="number">6 шт.</div>
            </div>
            <div style="display: flex; margin-top: 8px">
                <div class="resulttext">К оплате</div>
                <div class="point"></div>
                <div class="number">6 276 ₽</div>
            </div>
            <button id="Placeanorder">Оформить заказ</button>
        </div>
        <div id="contactandshop">
            <div id="contact">Контакты</div>
            <input id="name" type="text" placeholder="Имя">
            <input id="number" name="phone" data-phone-pattern placeholder="Телефон">
            <div style="border-bottom: 1px solid #F0F0F0; "></div>
            <div id="shop">Магазин для самовывоза</div>
            <div id="information">Каждую секунду мы отпускаем товары на кассах в офлайн-магазинах. Товар может исчезнуть из наличия в процессе оформления заказа</div>
            <div class="border"></div>
            <div class="magazine"><input type="radio" name="rb" id="rb1" checked> <label for="rb1">Днепровский переулок, 4</label></div>
            <div class="border"></div>
            <div class="magazine"><input type="radio" name="rb" id="rb2"> <label for="rb2">Адмирала Юмашева, 6</label></div>
            <div class="border"></div>
            <div class="magazine"><input type="radio" name="rb" id="rb3"> <label for="rb3">Бестужева, 23</label></div>
            <div class="border"></div>
            <div class="magazine"><input type="radio" name="rb" id="rb4"> <label for="rb4">Гамарника, 19</label></div>
            <div class="border"></div>
            <div class="magazine"><input type="radio" name="rb" id="rb5"> <label for="rb5">40 лет ВЛКСМ, 4</label></div>
            <div class="border"></div>
            <button type="button" id="showall">Показать всё <img class="chevDown" src="icons/ChevronDown.png"/> </button>
        </div>
    </div>
</div>

<footer>
    <div class="information">
        <div id="foterheder">
            <div id="mobile">8 800 301 27 43<div id="call">Звонок по России бесплатный</div></div>
            <button id="question"><img style="margin-right: 8px;" src="icons/Question.png"/><div id="questiontext">Задать вопрос</div></button>
        </div>
        <div id="informationfooter">
                <div class="column">
                    <div class="columnname">Покупятелям</div>
                    <div><button class="buttonsfooter"><div class="left">Клуб сомелье</div></button></div>
                    <div><button class="buttonsfooter"><div class="left">Дисконтная система</div></button></div>
                    <div><button class="buttonsfooter"><div class="left">Новости и акции</div></button></div>
                    <div><button class="buttonsfooter"><div class="left">Корпоративным клиентам</div></button></div>
                    <div><button class="buttonsfooter"><div class="left">Предложения для свадеб</div></button></div>
                    <div><button class="buttonsfooter"><div class="left">Фотоотчёты</div></button></div>
                    <div><button class="buttonsfooter"><div class="left">Мнение блогеров</div></button></div>
                    <div><button class="buttonsfooter"><div class="left">Контакты</div></button></div>
                </div>
            <div class="column">
                <div class="columnname">Партнерам</div>
                <div><button class="buttonsfooter"><div class="left">Партнерам</div></button></div>
                <div><button class="buttonsfooter"><div class="left">Поставщикам</div></button></div>
                <div><button class="buttonsfooter"><div class="left">Рекламные возможности</div></button></div>
            </div>
            <div class="column">
                <div class="columnname">О компании</div>
                <div><button class="buttonsfooter"><div class="left">История</div></button></div>
                <div><button class="buttonsfooter"><div class="left">Группа компаний</div></button></div>
                <div><button class="buttonsfooter"><div class="left">Карьера</div></button></div>
                <div><button class="buttonsfooter"><div class="left">Контакты</div></button></div>
                <div><button class="buttonsfooter"><div class="left">Адреса магазинов</div></button></div>
                <div><button class="buttonsfooter"><div class="left">Наша жизнь</div></button></div>
            </div>
            <div class="column">
                <div class="columnname">Это интересно</div>
                <div><button class="buttonsfooter"><div class="left">Рецепты коктейлей</div></button></div>
                <div><button class="buttonsfooter"><div class="left">Алкоголь в кулинарии</div></button></div>
                <div><button class="buttonsfooter"><div class="left">Справочник сомелье</div></button></div>
            </div>
        </div>
        <div style="display: flex"><img style="margin-right: 8px; display: inline-block" src="icons/x34 4 18Plus movie.png"/><div id="warning">Минздрав предупреждает: чрезмерное употребление алкоголя вредит вашему здоровью</div></div>
        <button class="politic">Политика конфиденциальности</button>
        <button class="politic">Пользовательское соглашение</button>
    </div>
</footer>

<script src="index.js"></script>

</body>
</html>