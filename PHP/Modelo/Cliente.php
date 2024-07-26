<?php
    namespace PHP\Modelo;

    class Cliente(){
        private string $cpf;
        private string $telefone;
        private string $endereco;
        private date $dataNasc;
        private int $totalCompras;

        public function __construct(string $cpf, string $telefone, string $endereco, date $dataNasc, int $totalCompras){
            $this->cpf = $cpf;
            $this->telefone = $telefone; 
            $this->endereco = $endereco;
            $this->cargo = $cargo;
            $this->dataNasc = $dataNasc;
            $this->totalCompras = $totalCompras;

            //INICIO DO GET
        public function getCpf():string 
        {
            return $this->cpf;
        }//fim do getMatricula

        public function getTelefone():string 
        {
            return $this->telefone;
        }//fim do getNome

        public function getEndereco():string  
        {
            return $this->salario;
        }//fim do getSalario

        public function getDataNasc():date 
        {
            return $this->dataNasc;
        }//fim do getCargo

        public function getTotalCompras():int 
        {
            return $this->totalCompras;
        }//fim do getEndereco

        


        }//fim do construct
    }//fim metodo cliente
?>