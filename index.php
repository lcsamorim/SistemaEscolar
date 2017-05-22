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
        <title>Sistema escolar - Login estudante</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    </head>
            <p style="font-size:30px; margin-left:30px;margin-top:20px;">Sistema escolar</p><hr />
            <a style="color:black; margin-left:90%;" href="administradorLogin.php">Sou administrador</a>
            
        <form name="loginform" method="post" action="">
            <h2 style="margin-top:90px;margin-left:40%;">Olá, estudante<br> Entre com seus dados</h2>
        <center>
            
           <div style="border:1px solid #ddd; width:270px; height:200px;background-color:#f9f9f9">
            E-mail: <input style="margin-top:20px; " type="email" name="email" placeholder="Digite aqui seu e-mail"><br><br>
            Senha:  <input type="password" name="senha" placeholder="Digite aqui sua senha"><br><br>
            <input class="btn btn-danger" style="width:225px" type="submit" name="logar" value="Entrar">
            
            <label style="margin-left:55%; margin-top:5%;"><a href="professorLogin.php">Sou professor</a></label>
            </div>
            <a style="margin-left:9%" href="recuperarSenha.php">Esqueceu sua senha?</a>
            <?php 
            if(isset($_SESSION['usuario1'])&& isset($_SESSION['senha1'])){
    header ("location: homeAluno.php");exit;
}
include("conexao.php");
if(isset($_POST['logar'])){
$email = $_POST['email'];
$senha = $_POST['senha'];
$select = "SELECT * FROM tbaluno WHERE email='$email' and senha='$senha'";
try {
    $result = $conexao->prepare($select);
    $result->execute();
    $contar = $result->rowCount();
    if($contar>0){
        $email = ['email'];
        $senha = ['senha'];
        $_SESSION['usuario1'] = $email;
        $_SESSION['senha1'] = $senha;
        echo "<br><br><div class='alert alert-success'><strong>Login executado com sucesso! </strong> <p>Você está sendo redirecionado</p></div>";
        header("Refresh: 3, homeAluno.php");
    }else{
        echo "<br><br><div class='alert alert-danger'><strong>Os campos não foram digitados corretamente!</strong></div>";
    }
} catch (PDOException $e) {
    echo $e;
}

}
            ?>
            </center>
         
        </form>
             <?php 
             include("rodape.php");
             ?>
    
    </body>
</html>
