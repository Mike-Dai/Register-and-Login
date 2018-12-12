<?php
if ( isset($_COOKIE['user']) )
{
    $user = $_COOKIE['user'];
}
else
{
    header("Location:http://127.0.0.1/login.php");
}
?>

<!DOCTYPE html>
    <head>
        <meta  http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <style>
        body{
            font-family:"Arial";
            font-size:18px;
            background:url(register/black.jpg) no-repeat;
            background-size:cover;
        }
        .big{
            color:white;
            width:300px;
            height:50px;
            background-color:dimgray;
            border-radius: 10px;
            margin-left:500px;
            margin-top:300px;
            padding-top:5px;
            padding-left:5px;
            opacity:0.8;
        }
        .small{
            margin-left:100px;
            margin-top:12px;
        }
    </style>
    <body>
       <div class="big">
            <div class="small">
                <?php
                    echo "欢迎您， $user !"
                ?>
           </div>
        </div> 
    </body>
</html>