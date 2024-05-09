<?php
    if(isset($_POST['submit']))
    {
   include_once('config.php');

   $nome = $_POST["nome"];
   $email = $_POST["email"];
   $senha = $_POST["senha"];

   $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, senha) 
   VALUES ('$nome', '$email', '$senha')");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, red, yellow);
        }
        div{
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
        #submit{
            background-color:red;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }
        #submit:hover{
            background-color:blue;
        }
    </style>
</head>
<body>
    <a href="login.php">voltar</a>
<div>
        
        <form action="cadastro.php" method="POST">
        <h1>Cadastro</h1>
        <input type="text" name="nome" id="nome" class="imputUser" placeholder="nome" required>
        <br><br>
        <input type="email" name="email" id="email" class="imputUser" placeholder="email" required>
        <br><br>
        <input type="password" name="senha" id="senha" class="imputUser" placeholder="senha" required>
        <br><br>
       <input type="submit" name="submit" id="submit">
        </form>

</body>
</html>

       