<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <style>
            .loginContainer { 
                              margin: auto;
                              width: 500px;
                              height: 500px;   
            }
            
            h1 { text-align: center;}
            
            form { padding: 100px 0;
                text-align: center;}  
        </style>
    </head>
    <body>
        <div class="loginContainer" >
            <h1>Log in</h1>
            <form action="" method="POST">
                <label for="username"><b>Username</b></label><br>
                <input type="text" placeholder="Enter Username" name="username" required><br>
                
                <label for="password"><b>Password</b></label><br>
                <input type="password" placeholder="Enter Password" name="password" required><br>
                
                <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
                </label><br>
                
                <button type="submit">Log in</button><br>  
            </form>
        </div>
    </body>
</html>
