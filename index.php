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
<input type="checkbox" id="navch">
<header class="imaged">
    <nav>
        <a href="../zoopatrul" id="logo"><img src="img_4.png"><span>ZOOPATRULKYIV</span></a>
        <label for="navch"></label>
        <div id="navas">
            <a class="b-white-ghost">Корисні ресурси</a>
            <a class="b-white-ghost">Знайти друга</a>
            <a class="b-white-ghost" eng="Blog" ua="Блог">Блог</a>
            <a class="b-white-ghost">Про нас</a>
            <a class="b-white-ghost">Контакти</a>
            <div id="langswitch">
                <button id="langswitch-ua" onclick="langUA()" inuse>UA</button>
                <button id="langswitch-eng" onclick="langENG()">ENG</button>
            </div>
        </div>
    </nav>
</header>
<main>
    <fieldset>
        <div class="curve-span"></div>
        <div id="righter">
            <span class="title">Хто ми?</span>
            <span>Zoopatrulkyiv – це благодійний фонд, місією якого є порятунок безхатніх котиків шляхом лікування, догляду та пошуку нових домівок. Ми рятуємо котів завдяки благодійним внескам небайдужих людей та допомоги волонтерів, що прихистили котика тимчасово.</span>
        </div>
        <div class="br-100"></div>
        <div class="quartet">
            <a class="tile-main">
                <img src="img_1.png">
                <span>Корисні Ресурси</span>
                <span>Ми рятуємо котів завдяки благодійним внескам небайдужих людей та допомоги волонтерів, що прихистили котика тимчасово.</span>

                <span class="b-gold">Переглянути</span>
            </a>
            <a class="tile-main">
                <img src="img_2.png">
                <span>Самостійний порятунок</span>
                <span>Ми рятуємо котів завдяки благодійним внескам небайдужих людей та допомоги волонтерів, що прихистили котика тимчасово.</span>

                <span class="b-white-round">Переглянути</span>
            </a>
            <a class="tile-main">
                <img src="img_3.png">
                <span>Прихистити  тваринку</span>
                <span>Ми рятуємо котів завдяки благодійним внескам небайдужих людей та допомоги волонтерів, що прихистили котика тимчасово.</span>

                <span class="b-white-round">Переглянути</span>
            </a>
            <a class="tile-main">
                <img src="img_1.png">
                <span>Загублені тваринки</span>
                <span>Ми рятуємо котів завдяки благодійним внескам небайдужих людей та допомоги волонтерів, що прихистили котика тимчасово.</span>

                <span class="b-white-round">Переглянути</span>
            </a>
        </div>
        <div class="br-100"></div>
        <div class="br-100"></div>
    </fieldset>
    <fieldset>
        <div class="curve-span"></div>
        <span class="title">Тварини, яким потрібен дім сьогодні</span>
        <div id="pets-selector">
            <input type="checkbox" class="check" g="1" id="pets-all" onclick="onlyOne(this);delete tags.pettype;load_pet_list()">
            <label for="pets-all">Всі тварини</label>
            <input type="checkbox" class="check" g="1" id="pets-cats" onclick="onlyOne(this);tags.pettype=1;load_pet_list()">
            <label for="pets-cats">Котики</label>
            <input type="checkbox" class="check" g="1" id="pets-dogs" onclick="onlyOne(this);tags.pettype=2;load_pet_list()">
            <label for="pets-dogs">Песики</label>
            <div class="petset-div">
                <input type="checkbox" id="pets-age"><label for="pets-age" onclick="openSelector('age')">Вік</label>
                <div id="selector-age">
                    <div class="selector-div">
                        <span><input type="checkbox" class="check" id="agelim-1"> <label for="agelim-1">До 3 місяців</label></span>
                        <span><input type="checkbox" class="check" id="agelim-2"> <label for="agelim-2">До 1 року</label></span>
                        <span><input type="checkbox" class="check" id="agelim-3"> <label for="agelim-3">2-5 років</label></span>
                        <span><input type="checkbox" class="check" id="agelim-4"> <label for="agelim-4">Старше 5 років</label></span>
                    </div>
                    <button class="lim-submit" onclick="confirmSelector('age')">Застосувати</button>
                </div>
            </div>
            <div class="petset-div">
                <input type="checkbox" id="pets-place"><label for="pets-place" onclick="openSelector('place')">Район</label>
                <div id="selector-place">
                    <div class="selector-div">
                        <span><input type="checkbox" class="check" id="placelim-1"> <label for="placelim-1">До 3 місяців</label></span>
                        <span><input type="checkbox" class="check" id="placelim-2"> <label for="placelim-2">До 3 місяців</label></span>
                        <span><input type="checkbox" class="check" id="placelim-3"> <label for="placelim-3">До 3 місяців</label></span>
                        <span><input type="checkbox" class="check" id="placelim-4"> <label for="placelim-4">До 3 місяців</label></span>
                        <span><input type="checkbox" class="check" id="placelim-5"> <label for="placelim-5">До 3 місяців</label></span>
                        <span><input type="checkbox" class="check" id="placelim-6"> <label for="placelim-6">До 3 місяців</label></span>
                        <span><input type="checkbox" class="check" id="placelim-7"> <label for="placelim-7">До 3 місяців</label></span>
                        <span><input type="checkbox" class="check" id="placelim-8"> <label for="placelim-8">До 3 місяців</label></span>
                        <span><input type="checkbox" class="check" id="placelim-9"> <label for="placelim-9">До 3 місяців</label></span>
                        <span><input type="checkbox" class="check" id="placelim-10"> <label for="placelim-10">До 3 місяців</label></span>
                        <span><input type="checkbox" class="check" id="placelim-11"> <label for="placelim-11">До 3 місяців</label></span>
                        <span><input type="checkbox" class="check" id="placelim-12"> <label for="placelim-12">До 3 місяців</label></span>
                        <span><input type="checkbox" class="check" id="placelim-13"> <label for="placelim-13">До 3 місяців</label></span>
                        <span><input type="checkbox" class="check" id="placelim-14"> <label for="placelim-14">До 3 місяців</label></span>
                        <span><input type="checkbox" class="check" id="placelim-15"> <label for="placelim-15">До 3 місяців</label></span>
                    </div>
                    <button class="lim-submit" onclick="confirmSelector('place')">Застосувати</button>
                </div>
            </div>
        </div>
        <div id="pets">
        </div>
        <div class="br-100"></div>
    </fieldset>
    <fieldset>
        <div class="curve-span"></div>
        <span class="title">Зооблог</span>
        <div class="br-100"></div>
        <div class="triplet" id="blog-content">
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
        <button class="b-gold" id="blog-more">Завантажити ще</button>
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
<!--script>
    let nav = document.querySelector('nav');
    let header = document.querySelector('header');
    window.onscroll = () => {
        if (window.scrollY > nav.scrollHeight*2) nav.classList.add("sticky");
        else nav.classList.remove("sticky");
    };
</script-->