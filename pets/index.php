<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <title>Zoopatrulkyiv - Тварини</title>
    <link rel="icon" href="../img_4.png">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
<header>
    <nav>
        <a href="../"><img src="../img_4.png"><span>ZOOPATRULKYIV</span></a>
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
        <div id="pet-profile">
            <?php
            $zoopatrul = new mysqli("localhost", "root", "", "zoopatrul");
            $id        = $_GET['id'];
            $pet       = $zoopatrul->query("SELECT * FROM pets WHERE (id=$id)")->fetch_assoc();

            for ($i = 0; $i < 6; $i++) {
                if (file_exists("../pets/data/p$id/img-$i.png")) {
                    echo "<input type='checkbox'".($i == 0 ? ' checked' : '').">";
                    echo "<div style='--img:url(../pets/data/p$id/img-$i.png)'></div>";
                } else
                    echo "<div></div>";
            }
            ?>
            <div id="card">
                <span>
                    <span id="name">
                        <?php global $pet;
                        echo $pet['name']; ?>
                    </span>
                    <img src="../img_2.png">
                </span>
                <!--div class="tags"></div-->
                <span id="lore">
                    <?php global $id;
                    echo file_get_contents("../pets/data/p$id/lore.txt"); ?>
                </span>
                <a class="b-gold">Показати телефон</a>
                <div>
                    <span id="share">Поділитися:</span>
                    <div id="card-socialmedia">
                        <a><img src="../img_7.png"></a>
                        <a><img src="../img_6.png"></a>
                        <a><img src="../img_5.png"></a>
                    </div>
                </div>
            </div>
            <div id="imgslider">
                <div id="imgslider-lc" onclick="imgslide(-1)"></div>
                <div></div>
                <div id="imgslider-rc" onclick="imgslide(1)"></div>
            </div>
        </div>
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
<script src="../main.js"></script>
<script>load_pet_list()</script>
</html>
