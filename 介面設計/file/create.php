<?php
    //引入檔，負責連結資料庫
    include("member.php");
    echo $_POST['data'];

    //取得請求過來的資料
    $id = $_POST["id"];
    $name = $_POST["name"];
    $account = $_POST["account"];
    $password = $_POST["password"];

    
    //INSERT INTO 就是新建一筆資料進哪個表的哪個欄位
    if ($同上 = true) {
        $sql_query = "INSERT INTO user (id, name, account, pwd) 
        values ('$id', '$name', '$account', '$password')";
    }else {
        $sql_query = "INSERT INTO user (id, name, account, pwd) 
        values ('$id', '$name', '$account', '$password')";
    }    

    //對資料庫執行查訪的動作
    if (mysqli_query($db_link, $sql_query)) {
        header("Location: succ.html");
    }else {
        echo "Error: " . $sql_query . "<br>" . mysqli_error($db_link);
        header("Location: erro.html");
      }
?>