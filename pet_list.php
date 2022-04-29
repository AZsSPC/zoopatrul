<?php
require_once 'pets/const.php';

$zoopatrul = new mysqli("localhost", "root", "", "zoopatrul");

$result = $zoopatrul->query("SELECT * FROM pets LIMIT 12");

for ($row_no = $result->num_rows - 1; $row_no >= 0; $row_no--) {
    $result->data_seek($row_no);
    $row = $result->fetch_assoc();
    $y   = ((int)date('Y')) - ((int)date('Y', strtotime($row['bday'])));
    $m   = ((int)date('m')) - ((int)date('m', strtotime($row['bday'])));
    if ($m < 0) {
        $y--;
        $m += 11;
    }
    $age_ua  = '';
    $age_eng = $y == 0 ? $m.' month' : $y.' year ';
    if ($y == 0) {
        preg_match('/1?\d$/', $m, $matches);
        $k = (int)$matches[0];
        if ($k >= 5 || $k == 0)
            $age_ua = $m.' місяців';
        elseif ($k == 1)
            $age_ua = $m.' місяць';
        else
            $age_ua = $m.' місяці';
    } else {
        preg_match('/1?\d$/', $y, $matches);
        $k = (int)$matches[0];
        if ($k >= 5 || $k == 0)
            $age_ua = $y.' років';
        elseif ($k == 1)
            $age_ua = $y.' рік';
        else
            $age_ua = $y.' роки';
    }
    echo '<a style="--img:url(../pets/data/p'.$row['id'].'/img-0.png)" href="/zoopatrul/pets/?id='.$row['id'].'">
                <span class="name">'.$row['name'].'</span>
                <span class="age" eng="'.$age_eng.'" ua="'.$age_ua.'">'.$age_ua.'</span>
                <span class="b-white">Дізнатись більше</span>
            </a>';
}
for ($i = 12 - $result->num_rows; $i > 0; $i--) echo '<a></a>';
