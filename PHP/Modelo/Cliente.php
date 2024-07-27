<?php
    namespace PHP\Modelo;
    require_once('Endereco.php');

    class Cliente extends Pessoa{
        protected string $dataNasc;
        protected float $totalCompras;

        public function __construct(string $cpf, string $nome, string $telefone, Endereco $endereco, string $dataNasc, int $totalCompras){
            parent::__construct($cpf,$nome, $telefone,$endereco);
            $this->dataNasc = $dataNasc;
            $this->totalCompras = $totalCompras;
        } //INICIO DO GET

        public function __get(string $nome){
            return $this->nome;
        }

        public function __set(string $campo, string $valor):void{
            $this->campo = $valor;
        }//fim do set

        public function imprimir():string
        {
            return parent::imprimir().
                    "<br>Data de Nascimento: ".$this->dataNasc.
                    "<br>Total de Compras: ".$this->totalCompras;
        }//fim do imprimir



        
    }//fim metodo cliente
?>