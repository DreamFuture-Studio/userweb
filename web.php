<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8"/>
    <title>夢見未來</title>
    <style type="text/css">
        form{
            line-height:2em;
        }
        form>input{
            padding:5px 10px;
        }
        form>.ok{
            color: #008800;
        }
        form>input:valid+.ok{
            display:inline;
        }
        form>input:invalid+.ok{
            display:none;
        }

    </style>
    </head> 
    <body>
    <form action="" method="post" width="500px" >
     <h3>帳號註冊</h3>
     帳號</br>
     <input type="text" name="account" required pattern="[0-9a-zA-Z]{8,16}">
     <span class="ok">avaliable</span></br>
     <span>8~16 大小寫英文字母、數字</span></br>
     密碼</br>
     <input type="password" name="passwd" required pattern="[0-9a-zA-Z]{8,36}">
     <span class="ok">avaliable</span></br>
     <span>8~36 大小寫英文字母、數字</span></br>
     <input type="submit" value="註冊">
    </form>
    <?php
     header("Content-Type:text/html; charset='utf-8'");
     include("db_connect.php");
     $database="userdata";
     $db_select = mysqli_select_db($conn,$database) or die("資料庫選擇失敗");
     $account=$_POST['account'];
     $passwd=$_POST['passwd'];
     echo strlen($account);
     if((7<strlen($account))&&(strlen($account)<17)
     &&(7<strlen($passwd))&&(strlen($passwd)<37)){
      $enroll="INSERT INTO `username`(`account`,`password`) value('$account','$passwd')";
      mysqli_query($conn,$enroll);
     }else{
        echo"<font color='red'>帳號或密碼不符合規則</font>";
     }
    ?>
    </body>
</html>