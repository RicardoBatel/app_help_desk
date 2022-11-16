<?php

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    //trabalhando na montagem do texto
    
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    $texto = $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;
    

    //implode('#", $_POST);
    /*$texto = [];
    foreach($_POST as $value) {
        array_push($texto,$value);
    }

    $texto = str_replace('#', '-',$texto);

    $texto = implode('#',$texto);
    */    

    //abrindo o arquivo
    $arquivo = fopen('arquivo.hd', 'a');
    //escrevendo o texto
    fwrite($arquivo, $texto);
    //fechando o arquivo
    fclose($arquivo);
    //echo $texto;

    header('Location: abrir_chamado.php')

?>