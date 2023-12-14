<?php
$host = 'localhost'; // 資料庫主機名稱
$dbuser = 'root'; // 資料庫使用者名稱
$dbpassword = '0932899099'; // 資料庫密碼
$dbname = 'member_db'; // 資料庫名稱

// 嘗試連接資料庫
$link = mysqli_connect($host, $dbuser, $dbpassword, $dbname);

// 確認連接是否成功
if (!$link) {
    die("連接失敗: " . mysqli_connect_error());
} else {
    // 連接成功
    echo "成功連接到資料庫！";

    // 在這裡可以執行資料庫操作
    // 例如：執行查詢、插入數據、更新數據等
}
?>
