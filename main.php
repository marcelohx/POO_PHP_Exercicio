<?php
    namespace PHP\Modelo;//Define o local do projeto
    require_once('Endereco.php');
    require_once('Medico.php');
    require_once('Paciente.php');
    require_once('Pessoa.php');
    require_once('Recepcionista.php');
    require_once('Consulta.php');
    
    use PHP\Modelo\Endereco;
    use PHP\Modelo\Medico;
    use PHP\Modelo\Paciente;
    use PHP\Modelo\Pessoa;
    use PHP\Modelo\Recepcionista;
    use PHP\Modelo\AgendarConsulta;

    $enderecoUm = new Endereco("Avenida Senador Vergueiro","400","Centro","São Bernardo do Campo","São Paulo","Brasil","03756-080");
    $enderecoDois = new Endereco("Avenida Dom Pedro I","589","Centro","Santo Andre","São Paulo","Brasil","03756-080");

    $pacienteUm = new Paciente("1324","Marcelo","119999999","123456798-9","Não","O-",$enderecoUm);//Criar um objeto
    $medicoUm = new Medico("987456","Allan","11456789132","Demartologista",6877.00,$enderecoDois);
    $consultaUm = new AgendarConsulta($pacienteUm,$medicoUm,$enderecoDois,"1","Demartologia","10/5/2023","07:00:00","marcelo@gmail.com");


    echo $pacienteUm->imprimir()."<br>";
    echo $medicoUm->imprimir()."<br>";
    echo $consultaUm->imprimir()."<br>";   
    








?>