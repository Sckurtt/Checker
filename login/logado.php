<!DOCTYPE html>
<html>
    <head></head>
    <body>

<?php
$dado1 = $_POST['dado1'];
$dado2 = $_POST['dado2'];
if($dado1!='teste' or $dado2!='teste'){
    header('location:/login/index.php');
}

?>
        <h1 align="center">Bem-Vindo</h1>
        </body>
</html>