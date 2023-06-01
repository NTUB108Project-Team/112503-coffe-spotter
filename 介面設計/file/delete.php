<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8" />
    <title>課程基本資料刪除</title>
</head>

    <body>
    <?php
        $num = $_POST["num"];
        $sa = mysqli_connect("localhost", "root", "0932899099", "member_db") or die("MySQL 伺服器連接失敗 <br>");
        $sql = "DELETE FROM user WHERE account='$num'";
        
        if (!$member_db) {
            die("連線失敗: " . mysqli_connect_error());
        }

        if (mysqli_query($member_db, $sql)) {
            header("Location:delete.html");
        } else {
            echo "錯誤: " . $sql . "<br>" . mysqli_error($sa);
        }

        mysqli_close($sa);
    ?>
    </body>
</html>