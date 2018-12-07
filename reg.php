<!DOCTYPE html>
    <head>
        <meta  http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
<?php
if ( isset($_POST["submit"]) && $_POST["submit"]=="注册" ) {
    $user=$_POST["username"];
    $psw=$_POST["password"];
    $psw_confirm=$_POST["confirm"];
    if ( $user=="" || $psw=="" || $psw_confirm=="" ) {
        echo "<script>alert('请确认信息完整性！');history.go(-1);</script>";
    }
    else {
        if ( $psw==$psw_confirm ) {
            mysql_connect("localhost","root","root");
            mysql_select_db("test");
            mysql_query("set names 'utf8'");
            $a = $_POST[username];
            $sql = "select username from user where username = '{$a}'";
            $result = mysql_query($sql);
            $num = mysql_num_rows($result);
            if ($num) {
                echo "<script>alert('用户名已存在');history.go(-1);</script>";
            }
            else {
                $sql_insert = "insert into user (username,password) values ('$_POST[username]','$_POST[password]')";
                $res_insert = mysql_query($sql_insert);
                if ( $res_insert ) {
                    echo "<script>alert('注册成功！');history.go(-1);</script>";
                }
                else {
                    echo "<script>alert('系统繁忙，请稍候！');history.go(-1);</script>";
                }
            }
        }
        else { echo "<script>alert('密码不一致！');history.go(-1);</script>";   
        }
    }
}
else {
    echo "<script>alert('提交未成功！');history.go(-1);</script>";
}
?>
</body>
</html>