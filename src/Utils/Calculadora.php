<?php

namespace App\Utils;

class Calculadora {
    public function sumar(float $a, float $b): float {
        return $a + $b;
    }

    public function multiplicar(float $a, float $b): float {
        return $a * $b;
    }
}