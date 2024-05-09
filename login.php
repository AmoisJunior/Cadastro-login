<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login do cliente</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, red, yellow);
        }
        #main{
            background-color: rgba(0, 0, 0, 0.8);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #ffff;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .inputSubmit{
            background-color:red;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }
        .inputSubmit:hover{
            background-color: blue;
        }
        a{
            background-color:red;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }
        a:hover{
            background-color: blue;
        }
    </style>
</head>
<body>
    <div id="main">
       <h1>login</h1>

        <form action="testlogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
            <p>ou</p><br>
            <a href="cadastro.php">Cadastre-se</a></div> 

            <?php
            if(isset($_GET['login']) && $_GET['login'] == 'erro'){
                echo '<h3 style="color: white;">Email ou senha invalidos</h3>';}
            ?>

        </form>


    </div>

</body>
</html>