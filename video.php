<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <title>Zoopatrulkyiv - Головна</title>
    <link rel="icon" href="img_4.png">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<header>
    <nav>
        <a href="../zoopatrul"><img src="img_4.png"><span>ZOOPATRULKYIV</span></a>
        <div>
            <a class="b-black-ghost">Корисні ресурси</a>
            <a class="b-black-ghost">Знайти друга</a>
            <a class="b-black-ghost" eng="Blog" ua="Блог">Блог</a>
            <a class="b-black-ghost">Про нас</a>
            <a class="b-black-ghost">Контакти</a>
            <div id="langswitch">
                <button id="langswitch-ua" onclick="langUA()" inuse>UA</button>
                <button id="langswitch-eng" onclick="langENG()">ENG</button>
            </div>
        </div>
    </nav>
</header>
<main>
    <fieldset>
        <div id="vidcont">
            <video controls>
                <source src="video.mov" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div>
                <span id="vittle">Врятувати самостійно</span>
                <span id="visub">
<p>Відеоінструкція, як ви самостійно можете надати допомогу заблокованій тварині!</p>
<p>Найшвидший метод – викрутити чи вибити (наприклад викруткою) дверне вічко.
<span>Увага! Цей спосіб є дієвим лише, якщо двері одинарні!</span></p>
<p>Потім, через тонку трубку (від крапельниці, кондиціонеру, пральної машинки), слід налити води.
<span>Їжу також можна проштовхнути через трубку у дверне вічко.</span></p>
<p>Це все дозволить тварині протриматися до повного звільнення.</p>
<p>Ми БЕЗКОШТОВНО допомагаємо заблокованим в оселях тваринам в місті КИЄВІ.</p>
                </span>
            </div>
        </div>
        <div class="br-100"></div>
    </fieldset>
    <fieldset>
        <div class="curve-span"></div>
        <span class="title">Зооблог</span>
        <div class="br-100"></div>
        <div class="triplet">
            <a class="tile-blog">
                <img src="img.png">
                <span class="thin">10.03.22</span>
                <span class="title">Увага, Бровари!</span>
                <span class="text">Ми рятуємо котів завдяки благодійним внескам небайдужих людей та допомоги волонтерів, що прихистили котика тимчасово.</span>
                <u>Переглянути</u>
            </a>
            <a class="tile-blog">
                <img src="img.png">
                <span class="thin">10.03.22</span>
                <span class="title">Увага, Бровари!</span>
                <span class="text">Ми рятуємо котів завдяки благодійним внескам небайдужих людей та допомоги волонтерів, що прихистили котика тимчасово.</span>
                <u>Переглянути</u>
            </a>
            <a class="tile-blog">
                <img src="img.png">
                <span class="thin">10.03.22</span>
                <span class="title">Увага, Бровари!</span>
                <span class="text">Ми рятуємо котів завдяки благодійним внескам небайдужих людей та допомоги волонтерів, що прихистили котика тимчасово.</span>
                <u>Переглянути</u>
            </a>
        </div>
        <div class="br-100"></div>
    </fieldset>
</main>
<footer>
    <a id="bot-title"><img src="img_4.png"><span>ZOOPATRULKYIV</span></a>
    <a id="bot-button" class="b-gold">Допомогти</a>
    <div id="bot-payments">

    </div>
    <div id="bot-nav">
        <a>Корисні ресурси</a>
        <a>Знайти друга</a>
        <a>Про нас</a>
        <a>Контакти</a>
    </div>
    <span id="bot-kyiv">м. Київ</span>
    <div id="bot-contacts">
        <span>+380635735663</span>
        <span>+380956161018</span>
    </div>
    <div id="bot-socialmedia">
        <a><img src="img_7.png"></a>
        <a><img src="img_6.png"></a>
        <a><img src="img_5.png"></a>
    </div>
</footer>
</body>
</html>
<script src="main.js"></script>
<script>load_pet_list()</script>