<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Персональный сайт Герцовской Карины. Обо мне.</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <script src="script/onMenuHoverBackgr.js"></script>
    <script src="script/sessionStorageHistory.js"></script>
    <script src="script/globalHistory.js"></script>
    <script src="script/jquery-3.3.1.min.js"></script>
</head>
<body>
<div class="wrapper">
    <div class="content">
        <div class="currentTime" id="currentTime"></div>
        <a name="top"></a>
        <header>
            <h1>Вы попали на персональный сайт <br> Герцовской Карины Владиславовны</h1>
        </header>
        <nav>
            <ul class="mainMenu" >
                <li><a id="MainPage" href="/" onmouseover="setBackground('MainPage')" onmouseout="restore('MainPage')">Главная</a></li>
                <li><a id="AboutMe" href="/aboutMe" onmouseover="setBackground('AboutMe')" onmouseout="restore('AboutMe')">Обо мне</a></li>
                <li><a onclick = "showList()" id="myInterests" href="#" onmouseover="setBackground('myInterests')" onmouseout="restore('myInterests')">Мои интересы</a></li>
                <li><a id="Photoalbum" href="/photoalbum" onmouseover="setBackground('Photoalbum')" onmouseout="restore('Photoalbum')">Мой фотоальбом</a></li>
                <li><a id="Education" href="/education" onmouseover="setBackground('Education')" onmouseout="restore('Education')">Образование</a></li>
                <li><a id="Connection" href="/contacts" onmouseover="setBackground('Connection')" onmouseout="restore('Connection')">Связь со мной</a></li>
                <li><a id="Test" href="/test" onmouseover="setBackground('Test')" onmouseout="restore('Test')">Входное тестирование</a></li>
                <li class="active"><a id="History" href="/history">История просмотров</a></li>
            </ul>
            <div class="mainMenu navigation" id ="inter">
                <script src="script/dropMenu.js"></script>
            </div>
        </nav>
        <section>
            <h2>История просмотров</h2>
            <script>
                getSessionStorage();
                renderCookieTable('currentDate');
            </script>
            <div id="modal_form">
                <p>Вы действительно хотите удалить всю историю посещений?</p>
                <button id="buttonYes">Да</button>
                <button id="buttonNo">Нет</button>
            </div>
            <div id="overlay"></div>
            <button id="history-clear">Очистить историю</button>
        </section>
    </div>
    <footer>
        <p class="footerNote1">&copy; 2018 GRIDI</p>
        <p class="footerNote2">г. Севастополь СевГУ</p>
        <p class="anchor1"><a href="#top">Наверх</a></p>
    </footer>
</div>
<script src="script/jquery-3.3.1.min.js"></script>
<script src="script/currentTime.js"></script>
<script src="script/clearCookies.js"></script>
</body>
</html>