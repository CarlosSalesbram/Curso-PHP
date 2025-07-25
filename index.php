<?php

function chamaNome(){
    
    $nome = "Carlos";

    $objContato = new Contato;

    $objContato->setNome($nome);

    $contatoNome = $objContato->getNome();

    echo "$contatoNome";
}

class Contato {
    private $nome;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
}

chamaNome();