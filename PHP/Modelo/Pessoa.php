<?php
    namespace PHP\Modelo;
    require_once('Endereco.php');

    class Pessoa{
        //Declarando as variaveis que vai ser utilizada.
        protected string $cpf;
        protected string $nome;
        protected string $telefone;
        protected Endereco $endereco;

        //Metodo construtor 
        public function __construct(string $cpf, string $nome, string $telefone, Endereco $endereco){
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
        }//fim do construtor

        public function __get(string $nome){
            return $this->nome;
        }

        public function __set(string $campo,string $valor){
            $this->campo = $valor;
        }//fim do set

        public function imprimir():string
        {
            return "<br>CPF: ".$this->cpf.
                    "<br>Nome: ".$this->nome.
                    "<br>Telefone: ".$this->telefone;
        }//fim do metodo imprimir
    
    }//fim da classe

?>