<?php
    namespace PHP\Modelo;
    require_once('Pessoa.php');
    require_once('Endereco.php');
    use PHP\Modelo\Pessoa;
    use PHP\Modelo\Endereco;

    class Paciente extends Pessoa{
        protected string $carteirinha;
        protected string $alergia;
        protected string $tipoSanguineo;

        public function __construct(string $cpf,
                                    string $nome,
                                    string $telefone,
                                    string $carteirinha,
                                    string $alergia,
                                    string $tipoSanguineo,
                                    Endereco $endereco)
        {
            parent::__construct($cpf,$nome,$telefone,$endereco);
            $this->carteirinha = $cargo;
            $this->alergia = $alergia;
            $this->tipoSanguineo = $tipoSanguineo;
        }//Fim do construtor

        public function __get(string $nome):mixed
        {
            return $this->nome;
        }//Fim do get

        public function __set(string $nomeVariavel, string $dado):void 
        {
            $this->nomeVariavel = $dado;
        }//Fim do get

        public function imprimir():string
        {
            return parent::imprimir()."<br>Nº da carteirinha: ".$this->carteirinha."<br>Tem alergias: ".$this->alergia."<br>Tipo sanguineo: ".$this->tipoSanguineo;
        }//Fim do imprimir
    }//Fim da classe
?>