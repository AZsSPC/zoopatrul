<?php
require_once 'pets/const.php';
$zoopatrul = new mysqli("localhost", "root", "", "zoopatrul");
function validate($text) {
    return preg_replace(';', '', $text);
}

function add_pet($name, $sex, $bday, $pet_type, $tags, $help_type, $location, $lore, $imgs = []) {
    global $zoopatrul;
    if ($zoopatrul->query(
        "INSERT INTO zoopatrul.pets (name,sex,bday,pettype,tags,helptype,location)"
        . "VALUES ('$name',$sex,DATE '$bday',$pet_type,$tags,$help_type,'$location');"
    )) {
        mkdir('pets/data/p' . mysqli_insert_id($zoopatrul));
        file_put_contents('pets/data/p' . mysqli_insert_id($zoopatrul) . '/lore.txt', $lore);
        //foreach ($imgs as $img) {}
    }
}

/*
$result = $zoopatrul->query("SELECT * FROM pets");

for ($row_no = $result->num_rows - 1; $row_no >= 0; $row_no--) {
    $result->data_seek($row_no);
    $row = $result->fetch_assoc();
    foreach ($row as $k => $v)
        echo $k . "=" . $v . "\t";
    echo "<br>";
}*/


add_pet('test', FEMALE, '1091-05-1', CAT, 0, ADOPTION, '', 'some lore', []);
/*
$s = '';
for ($i = 13; $i > 0; $i--) $s .= "tags_$i, ";
echo $s;
echo $zoopatrul->query("DROP TABLE $s tags_0;");
*/