<?php
    namespace PHP\Modelo;

    class Pessoa{
        //Declarando as variaveis que vai ser utilizada.
        private string $cpf;
        private string $nome;
        private string $telefone;
        private string $endereco;

        //Metodo construtor 
        public function __construct(string $cpf, string $nome, string $telefone, string $endereco){
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
        }//fim do construtor

        //Metodos de acesso e modeficação 
        public function getCPF():string 
        {
            return $this->cpf;
        }
        public function getNome():string
        {
            return $this->nome;
        }
        public function getTelefone():string 
        {
            return $this->telefone;
        }
        public function getEndereco():string
        {
            return $this->endereco;
        }

        public function setCPF(string $cpf):void
        {
            $this->cpf = $cpf;
        }//fim do metodo setCPF
        public function setNome(string $nome):void
        {
            $this->nome = $nome;
        }//fim do metodo setNome
        public function setTelefone(string $telefone):void
        {
            $this->telefone = $telefone;
        }//fim do metodo setTelefone
        public function setEndereco(string $endereco):void
        {
            $this->endereco= $endereco;
        }//fim do metodo setTelefone

        public function imprimir():string
        {
            return "<br>CPF: ".$this->getCPF().
                    "<br>Nome: ".$this->getNome().
                    "<br>Telefone: ".$this->getTelefone().
                    "<br>Endereço: ".$this->getEndereco();
        }//fim do metodo imprimir
    
    }//fim da classe

?>