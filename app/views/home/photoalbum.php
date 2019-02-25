<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Персональный сайт Гридасовой Карины. Фотоальбом.</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="script/onMenuHoverBackgr.js"></script>
    <script src="script/sessionStorageHistory.js"></script>
    <script src="script/globalHistory.js"></script>
</head>
<body onload="sessionStorageHistory('Мой фотоальбом'); setCookie('Мой фотоальбом')">
<div class="wrapper">
    <div class="content">
        <div class="currentTime" id="currentTime"></div>
        <a name="top"></a>
        <header>
            <h1>Вы попали на персональный сайт <br> Гридасовой Карины Владиславовны</h1>
        </header>
        <nav>
            <ul class="mainMenu" id="mainMenu">
                <li><a id="MainPage" href="/" onmouseover="setBackground('MainPage')" onmouseout="restore('MainPage')">Главная</a></li>
                <li><a id="AboutMe" href="/aboutMe" onmouseover="setBackground('AboutMe')" onmouseout="restore('AboutMe')">Обо мне</a></li>
                <li><a onclick = "showList()" id="myInterests" href="#" onmouseover="setBackground('myInterests')" onmouseout="restore('myInterests')">Мои интересы</a></li>
                <li class="active"><a id="Photoalbum" href="/photoalbum">Мой фотоальбом</a></li>
                <li><a id="Education" href="/education" onmouseover="setBackground('Education')" onmouseout="restore('Education')">Образование</a></li>
                <li><a id="Connection" href="/contacts" onmouseover="setBackground('Connection')" onmouseout="restore('Connection')">Связь со мной</a></li>
                <li><a id="Test" href="/test" onmouseover="setBackground('Test')" onmouseout="restore('Test')">Входное тестирование</a></li>
                <li><a id="History" href="/history" onmouseover="setBackground('History')" onmouseout="restore('History')">История просмотров</a></li>
            </ul>
            <div class="mainMenu navigation" id ="inter">
                <script src="script/dropMenu.js"></script>
            </div>
        </nav>
        <section>
            <h2>Мой фотоальбом</h2>
            <div class="gallery">
                <ul class="img-list"></ul>
                <div class="lightbox">
                    <div class="overlay"></div>
                    <figure>
                        <span class="prev">← prev</span>
                        <span class="caption"></span>
                        <span class="next">next →</span>
                        <img src="#">
                    </figure>
                </div>
            </div>
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
<script src="script/table.js"></script>
</body>
</html>