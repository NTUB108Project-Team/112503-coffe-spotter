<html><head><meta http-equiv="content-type" content="text/html;charset=UTF-8">
<title>住戶帳密接收頁</title></head>
<body>
    帳號 : <?php $account = $_POST["account"]; echo $account; ?><br>
    密碼 : <?php $password= $_POST["password"]; echo $password; ?><br>

    <input type ="button" onclick="history.back()" value="回到上一頁"></input><br>
    
    <?php
    $link = member_db("127.0.0.1:3306","member_db","0932899099");
    member_db("資料庫名稱");
    mysql_query("set names 'utf8'");
    mysql_query("insert into user (account,password) values('".$account(account)."', '".$password(變數名稱)."')");

    if (!$link) {
        echo "※資料儲存失敗※";
        echo "錯誤訊息 : ".mysqli_connect_error()."<br>";
    }
    else {
        echo "儲存完畢";
    }
    ?>
</body>
</html>