<?php
    $price_kart_65_5 = $_POST['price_kart_65_5'];
    $price_kart_65_10 = $_POST['price_kart_65_10'];
    $price_kart_9_5 = $_POST['price_kart_9_5'];
    $price_kart_9_10 = $_POST['price_kart_9_10'];
    $price_kart_double_do14_5 = $_POST['price_kart_double_do14_5'];
    $price_kart_double_do14_10 = $_POST['price_kart_double_do14_10'];
    $price_kart_double_posle14_5 = $_POST['price_kart_double_posle14_5'];
    $price_kart_double_posle14_10 = $_POST['price_kart_double_posle14_10'];
    $tel = $_POST['tel'];
    $mysql = new mysqli('localhost','root','','cumacart');

    if($price_kart_65_5 != "") {
        $mysql->query("UPDATE `price` SET price = '$price_kart_65_5' WHERE id = '1'");
    };

    if($price_kart_65_10 != "") {
        $mysql->query("UPDATE `price` SET price = '$price_kart_65_10' WHERE id = '2'");
    };

    if($price_kart_9_5 != "") {
        $mysql->query("UPDATE `price` SET price = '$price_kart_9_5' WHERE id = '3'");
    };

    if($price_kart_9_10 != "") {
        $mysql->query("UPDATE `price` SET price = '$price_kart_9_10' WHERE id = '4'");
    };

    if($price_kart_double_do14_5 != "") {
        $mysql->query("UPDATE `price` SET price = '$price_kart_double_do14_5' WHERE id = '5'");
    };

    if($price_kart_double_do14_10 != "") {
        $mysql->query("UPDATE `price` SET price = '$price_kart_double_do14_10' WHERE id = '6'");
    };

    if($price_kart_double_posle14_5 != "") {
        $mysql->query("UPDATE `price` SET price = '$price_kart_double_posle14_5' WHERE id = '7'");
    };

    if($price_kart_double_posle14_10 != "") {
        $mysql->query("UPDATE `price` SET price = '$price_kart_double_posle14_10' WHERE id = '8'");
    };

    $mysql->close();
?>