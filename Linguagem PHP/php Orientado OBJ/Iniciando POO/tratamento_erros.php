<?php

    try{ //tenha uma lógica onde possa ocorrer um erro

        echo '<h3> TRY </h3> ';
        $sql = 'select * from clientes';
        //mysql_query($sql); //erro

        if(!file_exists('require_arquivo_a.php')){
            throw new Exception();
        }

    }catch (Error $e){ //tratando o erro de alguma forma ou mensagem do erro
        echo 'erro ao executar código ERRO -> '.$e ;
    } finally{ //mensagem após passar pelo try e o catch (opcional)
        echo '<h3> FINALLY </h3> ';
    }
?>