<?php
function mailSend () {
    $name          = $_POST['name'];
    $number        = $_POST['number'];
    $adress        = $_POST['adress'];

    $amt           = $_POST['amt'];

    $height1      = $_POST['height1'];
    $width1      = $_POST['width1'];
    $height2      = $_POST['height2'];
    $width2      = $_POST['width2'];
    $height3      = $_POST['height3'];
    $width3      = $_POST['width3'];
    $height4      = $_POST['height4'];
    $width4      = $_POST['width4'];
    $height5      = $_POST['height5'];
    $width5      = $_POST['width5'];
    $height6      = $_POST['height6'];
    $width6      = $_POST['width6'];

    $construction2      = $_POST['construction2'];
    $construction3      = $_POST['construction3'];
    $construction1      = $_POST['construction1'];
    $construction4      = $_POST['construction4'];
    $construction5      = $_POST['construction5'];
    $construction6      = $_POST['construction6'];
    $construction7      = $_POST['construction7'];
    $construction8      = $_POST['construction8'];
    $construction9      = $_POST['construction9'];
    $construction10      = $_POST['construction10'];
    $construction11      = $_POST['construction11'];
    $construction12      = $_POST['construction12'];
    $construction13      = $_POST['construction13'];

    $profile      = $_POST['profile'];
    $sill         = $_POST['sill'];
    $water         = $_POST['water'];
    $installation = $_POST['installation'];
    $protection = $_POST['protection'];
    $grid = $_POST['grid'];

    $sumFull = $_POST['sumFull'];
    $sumSale = $_POST['sumSale'];

    $site          = $_SERVER['HTTP_HOST'];

    $to            = "newdimix@gmail.com" . ", " ;
    $to           .= "pvh_kog@mail.ru";

    $from          = "admin@site.ru";

    $subject       = "Новое письмо с сайта {$site}";

    $message       = "<h2>Вам сообщение с сайта {$site}</h2>";
    $message      .= "Имя: {$name}<br/>";
    $message      .= "Телефон: {$number}<br/>";
    $message      .= "Адрес: {$adress}<br/>";
    $message      .= "<hr>";

    if ($amt) {
        $message      .= "<h3>Оптовый заказ</h3><br/>";
        $message      .= "Количество изделий: {$amt}<br/>";
    }

    if ($profile) {

        $message       .= "<h3>Расчет стоимости по калькулятору</h3><br/>";

    if ($height1) {
        $message      .= "<b>Тип изделия: Одностворчатое окно</b><br/>";
        $message      .= "Высота: {$height1} мм<br/>";
        $message      .= "Ширина: {$width1} мм<br/>";
        $message      .= "Тип открывания: {$construction3}<br/>";
    }

    if ($height2) {
        $message      .= "<b>Тип изделия: Двухстворчатое окно</b><br/>";
        $message      .= "Высота: {$height2} мм<br/>";
        $message      .= "Ширина: {$width2} мм<br/>";
        $message      .= "Тип открывания левой створки: {$construction1}<br/>";
        $message      .= "Тип открывания правой створки: {$construction2}<br/>";
    }

    if ($height3) {
        $message      .= "<b>Тип изделия: Трехстворчатое окно</b><br/>";
        $message      .= "Высота: {$height3} мм<br/>";
        $message      .= "Ширина: {$width3} мм<br/>";
        $message      .= "Тип открывания первой створки: {$construction4}<br/>";
        $message      .= "Тип открывания второй створки: {$construction5}<br/>";
        $message      .= "Тип открывания последней створки: {$construction6}<br/>";
    }

    if ($height4) {
        $message      .= "<b>Тип изделия: Дверь</b><br/>";
        $message      .= "Высота: {$height4} мм<br/>";
        $message      .= "Ширина: {$width4} мм<br/>";
        $message      .= "Тип открывания двери: {$construction7}<br/>";
    }

    if ($height5) {
        $message      .= "<b>Тип изделия: Балконный блок</b><br/>";
        $message      .= "Высота двери: {$height5} мм<br/>";
        $message      .= "Ширина двери: {$width5} мм<br/>";
        $message      .= "Высота окна: {$height6} мм<br/>";
        $message      .= "Ширина окна: {$width6} мм<br/>";
        $message      .= "Тип открывания двери: {$construction12}<br/>";
        $message      .= "Тип открывания окна: {$construction13}<br/>";
    }

    if ($height7) {
        $message      .= "<b>Тип изделия: Лоджия</b><br/>";
        $message      .= "Высота: {$height6} мм<br/>";
        $message      .= "Ширина: {$width6} мм<br/>";
        $message      .= "Тип открывания первой створки: {$construction8}<br/>";
        $message      .= "Тип открывания второй створки: {$construction9}<br/>";
        $message      .= "Тип открывания третьей створки: {$construction10}<br/>";
        $message      .= "Тип открывания последней створки: {$construction11}<br/>";
    }

    $message      .= "Профиль: {$profile}<br/>";
    $message      .= "<hr>";

    $message      .= "Ширина подоконника: {$sill}<br/>";
    $message      .= "Ширина водоотлива: {$water}<br/>";
    $message      .= "<hr>";

    $message      .= "Дополнительные работы:<br/>";
    $message      .= "{$installation}<br/>";
    $message      .= "{$protection}<br/>";
    $message      .= "{$grid}<br/>";
    $message      .= "<hr>";

    $message      .= "Цена без скидки: {$sumFull} рублей<br/>";
    $message      .= "Цена со скидкой: {$sumSale} рублей<br/>";

    }

    $header        = 'MIME-Version: 1.0' . "\r\n";
    $header       .= "From: {$from}\r\n";
    $header       .= "Content-type: text/html; charset=utf-8\r\n";
    $header       .= "X-Mailer: PHP mail script";

    mail($to, $subject, $message, $header);
}

mailSend();
?>
