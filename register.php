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
        .top{
            background:rgb(33, 33, 33);
            margin:10px 10px 10px 10px;
            padding-top:6px;
            padding-bottom:6px;
            border-radius: 8px;
            
        }
        .big{
            color:white;
            width:300px;
            height:320px;
            background-color:dimgray;
            border-radius: 10px;
            margin-left:500px;
            margin-top:200px;
            padding-top:5px;
            padding-left:5px;
            opacity:0.8;
        }
        input[type="text"]{
            height:23px;
            margin-top:8px;
            margin-left:5px;
            border:1px solid;
            border-radius:3px;
            box-shadow:black 0px 1px 4px 0px inset;
            
        }
        input[type="password"]{
            height:23px;
            margin-top:8px;
            margin-left:5px;
            border:1px solid;
            border-radius:3px;
            box-shadow:black 0px 1px 4px 0px inset;
            
        }
        input[type="submit"]{
            font-size:16px;
            width:65px;
            height:40px;
            margin-top:18px;
            background:rgb(33, 33, 33);
            color:white;
            border:1px;
            border-style:none;
            border-radius:5px;
            cursor:pointer;
           
        }
        td{
            text-align:right;
            height:40px;
        }
        h3{
            font-weight:500;
        }
    </style>
    <body>
       <div class="big">
           <form action="reg.php" method="post">
               <div class="top">
                    <h3 align="center" >注 &nbsp&nbsp册</h3>
               </div>
           <table>
           <tr>
                <td> &nbsp&nbsp&nbsp用户名:</td>
                <td><input type="text" name="username"/></td>
           </tr>
           
           <tr>
               <td> &nbsp&nbsp&nbsp密码:</td>
               <td><input type="password" name="password"/></td>
           </tr>
           <tr>
               <td> &nbsp&nbsp&nbsp确认密码:</td>
               <td><input type="password" name="confirm"/></td>
           </tr>
           
        </table>
        <div class="button"><center><input type="submit" name="submit" value="注册" /></center></div>
    </form>
        </div> 
    </body>
</html>