<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Лаба 2</title>
    <link rel="stylesheet" href="lab_2.css">
</head>

<style>
    .lab_2 li:first-child {
        color: red;
    }
</style>

<body>
    <div class="lab_2">
        <h1>Лабораторная работа 1</h1>
        <p>Цель:</p>
        <p>Создать персональную веб-страница</p>


        <div id="img">
            <img src="img/http.jpg">
        </div>
        <ol>
            <li>Чебурашка</li>
            <li>Крокодил Гена</li>
            <li style="color: brown">Шапокляк</li>
        </ol>
        <table cellpadding="5">
            <tr>
                <th>Ячейка 1</th>
                <th>Ячейка 2</th>
            </tr>
            <tr>
                <td>Ячейка 3</td>
                <td>Ячейка 4</td>
            </tr>
        </table>
        <br>

        <div class="link-1">
            <a href="/index.php">Главная страница</a>
        </div>

        <div class="link-2">
            <a href="/index.php">Главная страница</a>
        </div>

        <div class="link-3">
            <a href="/index.php">Главная страница</a>
        </div>

        <div class="link-4">
            <a href="/index.php">Главная страница</a>
        </div>
    </div>

    <div class="form">
        <form>
            <p><input class="input" name="name" ENGINE="text" style="width:15%" /> Ваше имя*</p>
            <p><input class="input" name="email" type="text" style="width:15%" /> Электронная почта*</p>
            <p><input id="submit" value="Отправить" type="submit" /></p>
        </form>

        <form>
            <p>Ваше</p>
            <input class="input" name="name" ENGINE="text" style="width:15%" />
            <p>Имя</p>
            <input class="input" name="email" type="text" style="width:15%" /><br>
            <a href="#">Отправить</a>
<!--            <p><input id="submit" value="Отправить" type="submit" /></p>-->
        </form>
    </div>

</body>
</html>




