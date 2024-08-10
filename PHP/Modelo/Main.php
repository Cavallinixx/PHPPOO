<?php
    namespace PHP\Modelo; //Definir o local do projeto

    require_once('Pessoa.php');
    require_once('Funcionario.php');
    require_once('Cliente.php');
    require_once('Endereco.php');
    require_once('DAO/Conexao.php');
    require_once('DAO/Inserir.php');
    require_once('DAO/Consultar.php');
    require_once('DAO/Atualizar.php');
    require_once('DAO/Excluir.php');

    use PHP\Modelo\DAO\Conexao;//Direcionar o arquivo
    use PHP\Modelo\DAO\Inserir;
    use PHP\Modelo\DAO\Consultar;
    use PHP\Modelo\DAO\Atualizar;
    use PHP\Modelo\DAO\Excluir;

    $conexao = new Conexao();
    $inserir = new Inserir();
    $consultar = new Consultar();
    $atualizar = new Atualizar();
    $excluir = new Excluir();
    
    //echo $inserir->cadastrarEndereco($conexao,1,'Rua Alfredo',123,'Ayub','São Paulo','São Paulo','SP','Brasil','641546546468',1);
    
    //echo $inserir->cadastrarCliente($conexao,'654164849648','Lucca',"119999",'12/05/1985', 1000, 1);
    
    
/*
    $enderecoCliente1 = new Endereco('Rua Alfredo',123,'Ayub','São Paulo','São Paulo','SP','Brasil','641546546468');
    $cliente1 = new Cliente('654164849648','Lucca',"119999", $enderecoCliente1,'12/05/1985', 1000);

    echo $cliente1->imprimir();
    //echo $enderecoCliente1->imprimir();

    echo "<br><br>";

    

    $enderecoFunc1 = new Endereco ('Rua Jeri',123,'Copacabana','Rio de Janeiro','Rio de Janeiro','RJ','Brasil','468684688');
    $funcionario1 = new Funcionario('12314234',123,'Astolfo',1315,'Gerente',$enderecoFunc1,'1231232342344');

    echo $funcionario1->imprimir();
    echo $enderecoFunc1->imprimir();
*/
    //$consultar->consultarIndividual($conexao,'cliente','cpf','654164849648');
    //$consultar->consultartudo($conexao,'cliente');
    //$atualizar->atualizarCliente($conexao,"nome","Vitor","654164849648");
    $excluir->excluirCliente($conexao,"654164849648");
?>