let lang = true,
    lang_b_ua = document.getElementById('langswitch-ua'),
    lang_b_eng = document.getElementById('langswitch-eng'),
    pets = document.getElementById('pets'),
    blog = document.getElementById('blog-content')

function onlyOne(checkbox) {
    document.querySelectorAll('.check[g="' + checkbox.getAttribute('g') + '"]')
        .forEach(item => {
            if (item !== checkbox) item.checked = false
        })
}

function confirmSelector(name,) {
    let selector = document.getElementById('selector-' + name)
    let params = document.querySelectorAll('#selector-' + name + ' :checked')
    let arr = []
    for (let param of params) arr.push(param.id)
    document.querySelector('[for="pets-' + name + '"]').checked = arr.length > 0
    selector.style.display = 'none'
}

function openSelector(name) {
    let selector = document.getElementById('selector-' + name);
    document.querySelectorAll('[id^=selector-]').forEach(e => {
        if (e !== selector) e.style.display = 'none'
    })
    selector.style.display = selector.style.display === 'block' ? 'none' : 'block'
    selector.style.left = 'auto';
    selector.style.right = 'auto';
    if (selector.parentElement.offsetLeft + selector.offsetLeft + selector.offsetWidth + 20 > window.innerWidth)
        selector.style.right = '5px';
    if (selector.parentElement.offsetLeft + selector.offsetLeft < 20)
        selector.style.left = '5px';
}

function langUA(important = false) {
    if (important || !lang_b_ua.hasAttribute('inuse')) {
        lang = false
        lang_b_ua.setAttribute('inuse', 'true')
        lang_b_eng.removeAttribute('inuse')
        document.querySelectorAll('body [ua]').forEach(
            e => e.innerText = e.getAttribute('ua')
        )
    }
}

function langENG(important = false) {
    if (important || !lang_b_eng.hasAttribute('inuse')) {
        lang = false
        lang_b_eng.setAttribute('inuse', 'true')
        lang_b_ua.removeAttribute('inuse')
        document.querySelectorAll('body [eng]').forEach(
            e => e.innerText = e.getAttribute('eng')
        )
    }
}

let tags = {};

function tags_to_string(tags) {
    let ret = ''
    for (let tag in tags)
        ret += tag + '=' + tags[tag] + '&'
    return ret
}

function load_pet_list(in_tags) {
    let xmlHttp = new XMLHttpRequest()
    xmlHttp.open("GET", '/zoopatrul/pet_list.php?' + tags_to_string(in_tags ?? tags), false)
    xmlHttp.send(null)
    pets.innerHTML = xmlHttp.responseText
}

let imgslider = document.querySelectorAll('#pet-profile [type=checkbox]');
let imgsliderpos = 0;
console.log(imgslider)

function imgslide(to = 0) {
    console.log(imgsliderpos, to)
    imgslider[imgsliderpos].removeAttribute('checked')
    imgsliderpos += to
    if (imgsliderpos < 0) imgsliderpos = imgslider.length - 1
    if (imgsliderpos > imgslider.length - 1) imgsliderpos = 0
    imgslider[imgsliderpos].setAttribute('checked', '')
}
function load_blog(startfrom=0){
    let xmlHttp = new XMLHttpRequest()
    xmlHttp.open("GET", '/zoopatrul/blog.php?sf='+startfrom, false)
    xmlHttp.send(null)
    pets.innerHTML += xmlHttp.responseText
}
langUA(true)