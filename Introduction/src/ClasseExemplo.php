<?php

namespace Alura\Reflection;
use Alura\Reflection\MyAttribute;

final class ClasseExemplo implements \JsonSerializable
{   
    /** docblock */
    #[MyAttribute("teste")]
    public string $propriedadePublica = 'publica';
    protected string $propriedadeProtegida = 'protegida';
    private string $propriedadePrivada = 'privada';

    public function __construct()
    {
        // var_dump(get_object_vars($this));
        echo 'Executando construtor de ' . __CLASS__;
    }

    #[Route("/api/posts/{id}", methods: ["GET"])]
    public function metodoPublico(): void
    {
        echo 'Executando método público';
    }

    protected function metodoProtegido(): int
    {
        echo 'Executando método protegido';
        return 1;
    }
    
    private function metodoPrivado(int $a, int $b = 2): void
    {
        echo 'Executando método privado';
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
