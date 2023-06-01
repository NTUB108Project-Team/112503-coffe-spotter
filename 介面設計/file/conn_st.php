<?php
    $db_link = mysqli_connect("localhost", "root", "0932899099", "member");

    // if (!$db_link) {
    //     die('資料庫連結失敗!');
    // } else {
    // echo '資料庫連結成功';
    // }

    mysqli_query($db_link, "SET NAMES 'utf8'");  //設定資料庫編碼 utf8
?>