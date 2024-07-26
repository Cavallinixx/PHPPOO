<?php
    namespace PHP\Modelo;

    class Funcionario{
        private int $matricula;
        private string $nome;
        private float $salario;
        private string $cargo;
        private string $endereco;
        private string $telefone;

        public function __construct(int $matricula, string $nome, float $salario, string $cargo, string $endereco, string $telefone){
            $this->matricula = $matricula;
            $this->nome = $nome; 
            $this->salario = $salario;
            $this->cargo = $cargo;
            $this->endereco = $endereco;
            $this->telefone = $telefone;

        }//fim do construct

        //INICIO DO GET
        public function getMatricula():int 
        {
            return $this->matricula;
        }//fim do getMatricula

        public function getNome():string 
        {
            return $this->nome;
        }//fim do getNome

        public function getSalario():float  
        {
            return $this->salario;
        }//fim do getSalario

        public function getCargo():string 
        {
            return $this->cargo;
        }//fim do getCargo

        public function getEndereco():string 
        {
            return $this->endereco;
        }//fim do getEndereco

        public function getTelefone():string 
        {
            return $this->telefone;
        }//fim do getTelefone

        //INICIO DO SET

        public function setMatricula(int $matricula):void 
        {
            $this-> matricula = $matricula;
        }//fim do setMatricula

        public function setNome(string $nome):void 
        {
            $this-> nome = $nome;
        }//fim do setNomes

        public function setSalario(float $salario):void  
        {
            $this-> salario = $salario;
        }//fim do setSalario

        public function setCargo(string $cargo):void 
        {
            $this-> cargo = $cargo;
        }//fim do setCargo

        public function setEndereco(string $endereco):void 
        {
            $this-> endereco = $endereco;
        }//fim do setEndereco

        public function setTelefone(string $telefone):void 
        {
            $this-> telefone = $telefone;
        }//fim do setTelefone

        public function imprimir():string
        {
            return "<br>Matricula: ".$this->getMatricula().
                    "<br>Nome: ".$this->getNome().
                    "<br>Salário: ".$this->getSalario().
                    "<br>Cargo: ".$this->getCargo().
                    "<br>Endereço: ".$this->getEndereco().
                    "<br>Telefone: ".$this->getTelefone();
        }//fim do imprimir
        



    }//fim da classe





?>