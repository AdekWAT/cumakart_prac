<?php
    $mysql = new mysqli('localhost','root','','cumacart');
    $id1 = $_POST['id__karts'];
    $id2 = $_POST['id__contacts'];

    if($id1 != ""){
        $price_kart_65_5 = $_POST['price_kart_65_5'];
        $price_kart_65_10 = $_POST['price_kart_65_10'];
        $price_kart_9_5 = $_POST['price_kart_9_5'];
        $price_kart_9_10 = $_POST['price_kart_9_10'];
        $price_kart_double_do14_5 = $_POST['price_kart_double_do14_5'];
        $price_kart_double_do14_10 = $_POST['price_kart_double_do14_10'];
        $price_kart_double_posle14_5 = $_POST['price_kart_double_posle14_5'];
        $price_kart_double_posle14_10 = $_POST['price_kart_double_posle14_10'];
    
        if(isset($price_kart_65_5)) {
            $mysql->query("UPDATE `price` SET price = '$price_kart_65_5' WHERE id = '1'");
        };
    
        if(isset($price_kart_65_10)) {
            $mysql->query("UPDATE `price` SET price = '$price_kart_65_10' WHERE id = '2'");
        };
    
        if(isset($price_kart_9_5)) {
            $mysql->query("UPDATE `price` SET price = '$price_kart_9_5' WHERE id = '3'");
        };
    
        if(isset($price_kart_9_10)) {
            $mysql->query("UPDATE `price` SET price = '$price_kart_9_10' WHERE id = '4'");
        };
    
        if(isset($price_kart_double_do14_5)) {
            $mysql->query("UPDATE `price` SET price = '$price_kart_double_do14_5' WHERE id = '5'");
        };
    
        if(isset($price_kart_double_do14_10)) {
            $mysql->query("UPDATE `price` SET price = '$price_kart_double_do14_10' WHERE id = '6'");
        };
    
        if(isset($price_kart_double_posle14_5)) {
            $mysql->query("UPDATE `price` SET price = '$price_kart_double_posle14_5' WHERE id = '7'");
        };
    
        if(isset($price_kart_double_posle14_10)) {
            $mysql->query("UPDATE `price` SET price = '$price_kart_double_posle14_10' WHERE id = '8'");
        };
    }

    if($id2 != ""){
        $tel = $_POST['tel'];
        $addr = $_POST['addr'];

        if(isset($tel)) {
            $mysql->query("UPDATE `contacts` SET value = '$tel' WHERE id = '1'");
        }

        if(isset($addr)) {
            $mysql->query("UPDATE `contacts` SET value = '$addr' WHERE id = '2'");
        }
    }



    $mysql->close();
?>