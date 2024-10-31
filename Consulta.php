<?php

    namespace PHP\Modelo;
    require_once('Paciente.php');
    require_once('Medico.php');
    use PHP\Modelo\Endereco;
    use PHP\Modelo\Paciente;

    Class AgendarConsulta{
        private string $codigoConsulta;
        private string $especialidade;
        private string $dataConsulta;
        private string $horaConsulta;
        private string $email;
        public Paciente $paciente;
        public Medico $medico;
        public Endereco $endereco;

        public function __construct(Paciente $paciente,
                                    Medico $medico,
                                    Endereco $endereco,
                                    string $codigoConsulta,
                                    string $especialidade,
                                    string $dataConsulta,
                                    string $horaConsulta,
                                    string $email)
        {
            $this-> codigoConsulta = $codigoConsulta;
            $this-> paciente = $paciente;
            $this-> medico = $medico;
            $this-> endereco = $endereco;
            $this-> especialidade = $especialidade;
            $this-> dataConsulta = $dataConsulta;
            $this-> horaConsulta = $horaConsulta;
            $this-> email = $email;


        }//Fim do Construtor

        public function __get(string $nome):mixed
        {
            return $this->nome;
        }//Fim do get

        public function __set(string $nomeVariavel, string $dado):void 
        {
            $this->nomeVariavel = $dado;
        }//Fim do get

        public function imprimir():string{
            return "<br>Paciente: ".$this->paciente->imprimir()."<br>Medico: ".$this->medico->imprimir()."<br>Endereço: ".$this->endereco->imprimir()."<br>Codigo da Consulta: ".$this->codigoConsulta."<br>Especialidade: ".$this->especialidade."<br>Data da Consulta: ".$this->dataConsulta."<br>Hora da Consulta: ".$this->horaConsulta."<br>E-mail: ".$this->email;
        }//Fim do imprimir

        public function cancelarConsulta()
        {
            $end = new Endereco("",0,"","","","","");
            $this->paciente = new Paciente("","","","","","",$end);



        }
    }
?>