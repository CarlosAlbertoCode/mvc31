<?php
include "conexao_bd.php";
class Estudante
{
    //Atributos
    private $cpf;
    private $nome;
    private $curso;
    private $idade;

    // Método construtor
    public function __construct($cpf, $nome, $curso, $idade)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->curso = $curso;
        $this->idade = $idade;
    }

    // Métodos da classe
    public function matricular()
    {
        $sql = "INSERT INTO estudante(cpf,nome,curso,idade) ";
        $sql .= "VALUES('$this->cpf','$this->nome','$this->curso','$this->idade')";

        return executarComando($sql);
        
    }

    //Métodos GETs e SETs
    


    /**
     * Get the value of cpf
     */ 
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     *
     * @return  self
     */ 
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of curso
     */ 
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set the value of curso
     *
     * @return  self
     */ 
    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }

    /**
     * Get the value of idade
     */ 
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     *
     * @return  self
     */ 
    public function setIdade($idade)
    {
        $this->idade = $idade;
    
        return $this;
    }
}
