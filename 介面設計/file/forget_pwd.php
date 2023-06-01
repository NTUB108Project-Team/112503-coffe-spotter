<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8"/>
    <title>重設密碼</title>
</head>

<body>
    <?php
        
        $name = $_POST["name"];
        $account = $_POST["account"];
        $newpassword = $_POST["newpassword"];
        $newpassword2 = $_POST["newpassword2"];

        //資料庫連結
        $conn = mysqli_connect("localhost", "root", "0932899099", "member");
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }

        //更新密碼
        $sql = "UPDATE user SET 密碼='$newpassword' WHERE 姓氏='$name' and 帳號='$account'";          
        $result = mysqli_query($conn, $sql);
        
        //檢查密碼是否更新成功
        $sql = "SELECT * FROM user WHERE 密碼='$newpassword' AND 密碼='$newpassword2'";
        $result = mysqli_query($conn, $sql);
        $row_cnt = mysqli_num_rows($result);

        mysqli_close($conn);
        if ($row_cnt==1) { 
            header("Location: login.html");
        }
        else {
          header("Location: forget_pwd.html");
        }
      ?>
</body>