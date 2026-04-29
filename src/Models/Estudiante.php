<?php

namespace App\Models;

class Estudiante extends Persona {
    private string $carrera;

    public function __construct(string $nombre, int $edad, string $carrera) {
        parent::__construct($nombre, $edad);
        $this->carrera = $carrera;
    }

    public function presentarse(): string {
        return parent::presentarse() . " Estudio {$this->carrera}.";
    }
}