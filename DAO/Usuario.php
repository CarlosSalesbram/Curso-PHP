<?php

class Usuario {

    private $nome;
    private $idade;
    private $sexo;
    private $usuario;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function getSexo()
    {
        return $this->sexo;
    }
    
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

}