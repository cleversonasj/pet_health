<?php

namespace App\Formulario;

class Usuario
{
    private $nome;
    private $sobrenome;
    private $telefone;
    private $email;
    private $cep;
    private $logradouro;
    private $bairro;
    private $localidade;
    private $uf;

    public function __construct(string $nome, string $sobrenome, string $telefone, string $email, string $cep, string $logradouro, string $bairro, string $localidade, string $uf)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->cep = $cep;
        $this->logradouro = $logradouro;
        $this->bairro = $bairro;
        $this->localidade = $localidade;
        $this->uf = $uf;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }

    public function getNomeCompleto(): string
    {
        return $this->nome . " " . $this->sobrenome;
    }

    public function getTelefone(): string
    {
        return $this->telefone;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getCep(): string
    {
        return $this->cep;
    }

    public function getLogradouro(): string
    {
        return $this->logradouro;
    }

    public function getBairro(): string
    {
        return $this->bairro;
    }

    public function getLocalidade(): string
    {
        return $this->localidade;
    }

    public function getUf(): string
    {
        return $this->uf;
    }

    public function getEndereco(): string
    {
        return $this->logradouro . " " . $this->bairro . " " . $this->localidade . "/" . $this->uf . " - " . $this->cep;
    }

}