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
<a href="?sair" onclick="return confirm('Deseja realmente sair?');">Sair</a>