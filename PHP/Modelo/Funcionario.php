<?php
    namespace PHP\Modelo;
    require_once('Endereco.php');

    class Funcionario extends Pessoa{
        protected int $matricula;
        protected float $salario;
        protected string $cargo;


        public function __construct(string $cpf, int $matricula, string $nome, float $salario, string $cargo, Endereco $endereco, string $telefone){
            parent::__construct($cpf,$nome,$telefone,$endereco);
            $this->matricula = $matricula; 
            $this->salario = $salario;
            $this->cargo = $cargo;

        }//fim do construct

        public function __get(string $campo){
            return $this->$campo;
        }//fim do get

        public function __set(string $campo, string $valor):void{
            $this->campo = $valor;
        }//fim do set

        public function imprimir():string
        {
            return parent::imprimir().
                "<br>Matricula: ".$this->matricula.
                "<br>Salário: ".$this->salario.
                "<br>Cargo: ".$this->cargo;
        }//fim do imprimir
        



    }//fim da classe





?>