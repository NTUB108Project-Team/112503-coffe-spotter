<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8"/>
    <title>登入學生資訊系統</title>
</head>

<body>
    <?php
        $account = $_POST["account"];
        $name = $_POST["name"];
        $pwd = $_POST["password"];

        //資料庫連結
        $conn = mysqli_connect("localhost", "root", "0932899099", "member_db");
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }

          $sql = "SELECT * FROM user WHERE account='$account' and pwd='$pwd'";
          
          // 查詢資料 (Query)
          $result = mysqli_query($conn, $sql);
          $row_cnt = mysqli_num_rows($result);

        mysqli_close($conn);

        if ($row_cnt==1) { 
          header("Location: https://www.google.com/");
        }
        else {
          header("Location: login_error.html");
        }
      ?>
</body>