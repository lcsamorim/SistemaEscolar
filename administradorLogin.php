<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
ob_start();
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema escolar - Login administrador</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
            <p style="font-size:30px; margin-left:30px;margin-top:20px;">Sistema escolar</p><hr />
            <a style="color:black; margin-left:90%;" href="administradorLogin.php">Sou administrador</a>
            
        <form name="loginform" method="post" action="">
            <h2 style="margin-top:90px;margin-left:40%;">Olá, professor<br> Entre com seus dados</h2>
        <center>
            
            
           <div style="border:1px solid #ddd; width:270px; height:200px">
            E-mail: <input style="margin-top:20px; " type="email" name="email" placeholder="Digite aqui seu e-mail"><br><br>
            Senha:  <input type="password" name="senha" placeholder="Digite aqui sua senha"><br><br>
            <input class="btn btn-success" style="width:225px" type="submit" name="logar" value="Entrar">
            
            <label style="margin-left:5%; margin-top:5%;"><a href="index.php">←Voltar para a área de login do aluno</a></label>
            </div>
            <?php 
            if(isset($_SESSION['usuario1'])&& isset($_SESSION['senha1'])){
    header ("location: home.php");exit;
}
include("conexao.php");
if(isset($_POST['logar'])){
$email = $_POST['email'];
$senha = $_POST['senha'];
$select = "SELECT * FROM tbadministrador WHERE email='$email', senha='$senha' and cpf='$cpf'";
try {
    $result = $conexao->prepare($select);
    $result->execute();
    $contar = $result->rowCount();
    if($contar>0){
        $email = ['email'];
        $senha = ['senha'];
        $_SESSION['usuario1'] = $email;
        $_SESSION['senha1'] = $senha;
        echo '<br><br><strong>Login executado com sucesso! </strong> <br /> <p>Você está sendo redirecionado</p>';
        header("Refresh: 5, home.php");
    }else{
        echo "<br><br><strong style='color:red'>Os campos não foram digitados corretamente!</strong>";
    }
} catch (PDOException $e) {
    echo $e;
}

}
            ?>
            </center>
         
        </form>
    <center><div style="position:absolute;bottom:3%;width:100%;border-top:1px solid #eee">
<span>Desenvolvido com ❤ por: Aline Araujo, Fabrícia Dantas e Lucas Amorim.</span></div></center>
    </body>
</html>
