<?php

// Una sola línea reemplaza todos los require/include
require_once 'vendor/autoload.php';

// Ahora importas las clases con "use"
use App\Models\Persona;
use App\Models\Estudiante;
use App\Utils\Calculadora;

// --- Prueba 1: Persona ---
$persona = new Persona("Carlos", 30);
echo $persona->presentarse();
echo "<br>";

// --- Prueba 2: Estudiante (hereda de Persona) ---
$estudiante = new Estudiante("Tony", 20, "Ingeniería en Sistemas");
echo $estudiante->presentarse();
echo "<br>";

// --- Prueba 3: Calculadora ---
$calc = new Calculadora();
echo "5 + 3 = " . $calc->sumar(5, 3);
echo "<br>";
echo "4 x 7 = " . $calc->multiplicar(4, 7);