<!DOCTYPE html>
    <head>
        <meta  http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
<?php
if ( isset($_POST["submit"]) && $_POST["submit"]=="登录" ) {
    $user=$_POST["username"];
    $psw=$_POST["password"];
    if ( $user=="" || $psw=="" ) {
        echo "<script>alert('请确认信息完整性！');history.go(-1);</script>";
    }
    else {
        
            mysql_connect("localhost","root","root");
            mysql_select_db("test");
            mysql_query("set names 'utf8'");
            $a = $_POST["username"];
            $sql = "select username from user where username = '{$a}'";
            $result = mysql_query($sql);
            $num = mysql_num_rows($result);
            if ($num) {
                setcookie("user", $user, time()+10);
                echo "<script>alert('登录成功！')</script>";
                header("Location:http://127.0.0.1/welcome.php");
            }
            else
            {
                echo "<script>alert('用户名不存在或密码错误！');history.go(-1);</script>";
            }
        }
    }
    else {
        echo "<script>alert('提交未成功！');history.go(-1);</script>";
    }
    ?>
    </body>
    </html>