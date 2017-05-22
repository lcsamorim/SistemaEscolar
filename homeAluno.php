 <?php 
 ob_start();
session_start();
            if(!isset($_SESSION['usuario1'])&& !isset($_SESSION['senha1'])){
    header ("location: index.php");exit;
}
include("conexao.php");
if(isset($_REQUEST['sair'])){
    session_destroy();
    session_unset($_SESSION['usuario1']);
    session_unset($_SESSION['senha1']);
    header("location: index.php");
}
?>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <div style=" height: 35%; width: 100%"> 
            <img src="img/icocalendar.png" alt="Calendário de aulas"/>
        </div>
        <a style="float: right" href="?sair" onclick="return confirm('Deseja realmente sair?');">Sair</a>
    <div class=""></div>
    </body>
</html>