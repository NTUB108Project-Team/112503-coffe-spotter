<?php
    include "conn_st.php";

    $account = $_GET['account'];
    
    //請注意，這邊因為 $userID 本身是 integer，所以可以不用加 ''
    $sql_getDataQuery = "SELECT * FROM user WHERE account = $account";

    $result = mysqli_query($db_link, $sql_getDataQuery);

    $row_result = mysqli_fetch_assoc($result);
    $account = $row_result[account];
    $pwd = $row_result[password];
    $name = $row_result[name];
 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="create_st.css" />
    <title>修改學生基本資料</title>
</head>

<body>
    <div class="header">
    <input type="button" id="btn_student" value="登出" onclick="javascript:location.href='login_student.html'">
    <input type="button" id="btn_student" value="主選單" onclick="javascript:location.href='主選單.html'">
        <input type="button" id="btn_student" value="學生基本資料" onclick="javascript:location.href='index_st.php'">
        <input type="button" id="btn_student" value="新增學生基本資料" onclick="javascript:location.href='create_st.html'">
    </div>

    <div class="container">
        <p style="text-align:center">
            <font size="45">修改學生基本資料</font size="45">
        </p>
        <form name="table" method="post" action="update_st2.php">
            <p><label class="label_input">account</label><input type="text" name="account" value="<?php echo $account ?>" placeholder="請輸入account" class="text_field">&emsp;
                <label class="label_input">性別</label><select name="性別" class="text_field">
                    <option value="<?php echo $性別 ?>" selected disabled hidden><?php echo $性別 ?></option> 
                    <option value="男">男</option>>
                    <option value="女">女</option>
                </select>&emsp;
                <label class="label_input" style="width: 70px;">血型</label><select name="血型" class="text_field">
                    <option value="<?php echo $血型 ?>" selected disabled hidden><?php echo $血型 ?></option> 
                    <option value="O">O</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                </select>
            </p>

            <p><label class="label_input">中文姓名</label><input type="text" name="中文姓名" value="<?php echo $中文姓名 ?>" placeholder="請輸入中文姓名" class="text_field">&emsp;
                <label class="label_input">身分證字號</label><input type="text" name="身分證字號" value="<?php echo $身分證字號 ?>" placeholder="請輸入身分證字號" class="text_field">

            </p>

            <p><label class="label_input">英文姓名</label><input type="text" name="英文姓名" value="<?php echo $英文姓名 ?>" placeholder="請輸入中文姓名" class="text_field">&emsp;
                <label class="label_input">出生年月日</label><input type="date" name="出生年月日" value="<?php echo $出生年月日 ?>" style="width:165px;" class="text_field">
            </p>

            <p><label class="label_input">家用電話</label><input type="text" name="家用電話" value="<?php echo $家用電話 ?>" placeholder="請輸入家用電話" class="text_field">&emsp;
                <label class="label_input">行動電話</label><input type="text" name="行動電話" value="<?php echo $行動電話 ?>" placeholder="請輸入聯絡電話" class="text_field">
            </p>

            <p><label class="label_input">Email</label><input type="email" name="email" value="<?php echo $email ?>" placeholder="請輸入E-mail" size="40" class="text_field">
            </p>

            <p><label class="label_input">戶籍地址</label><input type="text" name="戶籍地址" value="<?php echo $戶籍地址 ?>" placeholder="請輸入戶籍地址" size=" 40" class="text_field"></p>
            <p><label class="label_input">通訊地址</label><input type="text" name="通訊地址" value="<?php echo $通訊地址 ?>" placeholder="請輸入通訊地址" size=" 40" class="text_field">
                <input type="checkbox" name="同上" value="同上">同戶籍地址
            </p>


            <div id="student_control">
                <input type="submit" id="btn_student1" value="儲存">
                <input type="reset" id="btn_student2" value="清空">
            </div>

        </form>
    </div>

</body>
</html>

<script>
    function logout() { 
        var msg = "您確定要登出嗎？"; 
        if (confirm(msg)==true){ 
            document.location.href="login_student.html";
        }else{ 
            return false; 
        } 
    }
</script>