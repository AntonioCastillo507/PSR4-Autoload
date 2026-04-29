<?php

namespace App\Models;

class Persona {
    private string $nombre;
    private int $edad;

    public function __construct(string $nombre, int $edad) {
        $this->nombre = $nombre;
        $this->edad   = $edad;
    }

    public function presentarse(): string {
        return "Hola, soy {$this->nombre} y tengo {$this->edad} años.";
    }
}