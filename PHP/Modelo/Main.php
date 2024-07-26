<?php
    namespace PHP\Modelo; //Definir o local do projeto

    require_once('Pessoa.php');
    require_once('Funcionario.php');

    $pessoa1 = new Pessoa("12345673624","Allan","1199999999","Rua Jeri");
    $pessoa2 = new Pessoa("54641816484","Vitao","149846546478","Rua Palestra Italia");
    $funcionario1 = new Funcionario("123","Vitor","9000","Programador","Rua Palestra Italia", "119999999999");
    echo $pessoa1->imprimir();
    echo $pessoa2->imprimir();
    echo $funcionario1->imprimir();
?>