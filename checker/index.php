<!DOCTYPE html>
<html>
    <head></head>
    <body>
    <?php
        $cr = curl_init();
        
        curl_setopt($cr, CURLOPT_URL, "http://localhost/login/logado.php");
        
        curl_setopt($cr, CURLOPT_RETURNTRANSFER, true);
        
        curl_setopt($cr, CURLOPT_POST, true);
        
        curl_setopt($cr, CURLOPT_POSTFIELDS, "dado2=teste&dado2=teste");
        
        $retorno = curl_exec($cr);
        
        curl_close($cr);
        
        //echo $retorno;
       
        $aprovado = "Bem-Vindo";
        $verificar = strpos($retorno, $aprovado);
        if($verificar === false){
            echo "Reprovada";
        } else {
            echo "Aprovada";
        }
    ?>
    </body>
</html>
