<?php
        //引入檔，負責連結資料庫
        include("conn_cl.php");


        
        $id = $_POST["id"];
        $account= $_POST["account"];
        $password= $_POST["password"];
        $name= $_POST["name"];
     

        //$儲存 = $_POST["儲存"];

        //資料庫連結
        //$conn = mysqli_connect("localhost", "root", "0932899099", "member");
        //if (!$conn) {
        //  die("Connection failed: " . mysqli_connect_error());
        //}

        $sql = "INSERT INTO user (id, account, password, name)
        values ('$id','$account','$password','$name')";

        //成功
        if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
      
        mysqli_close($conn);
      ?>