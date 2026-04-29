# 🚀 PSR-4 Autoload con Composer — Desarrollo de Software VII

**Estudiante:** Antonio Agustín Castillo Pérez
**Cedula:** 8-1038-2499
**Grupo:** 1GS131  
**Laboratorio:** Implementación de Carga Automática bajo PSR-4

---

## 📋 Descripción

Proyecto que implementa la carga automática de clases en PHP usando el 
estándar PSR-4 con Composer, eliminando el uso manual de `require`/`include`.

---

## 📁 Estructura de Archivos

PSR4-Autoload/
├── src/
│   ├── Models/           → namespace App\Models
│   │   ├── Persona.php
│   │   └── Estudiante.php
│   └── Utils/            → namespace App\Utils
│       └── Calculadora.php
├── composer.json
├── index.php
└── .gitignore

---

## ⚙️ Instalación

1. Clona el repositorio:
```bash
   git clone https://github.com/TU_USUARIO/PSR4-Autoload.git
```

2. Instala las dependencias con Composer:
```bash
   composer install
```
   o si solo necesitas regenerar el autoload:
```bash
   composer dump-autoload
```

3. Abre en el navegador:

http://localhost/PSR4-Autoload/index.php

---

## ✅ Prueba de Ejecución

Al abrir `index.php` en el navegador, el sistema instancia objetos 
correctamente sin errores de "Class not found":

> Hola, soy Carlos y tengo 30 años.  
> Hola, soy Tony y tengo 20 años. Estudio Ingeniería en Sistemas.  
> 5 + 3 = 8  
> 4 x 7 = 28

---

## 📊 Conclusiones Técnicas

**1. Mantenibilidad:**  
Con PSR-4, agregar una nueva clase solo requiere crear el archivo en la carpeta 
correcta. No es necesario modificar ningún archivo de configuración global ni 
agregar nuevos `require`. Composer la detecta automáticamente.

**2. Eficiencia de Memoria (Lazy Loading):**  
El autoloader de Composer usa carga bajo demanda: una clase solo se carga en 
memoria cuando realmente se instancia. En un proyecto tradicional con múltiples 
`require_once` al inicio, todas las clases se cargan aunque no se usen, 
desperdiciando memoria del servidor.

**3. Estandarización y Trabajo Colaborativo:**  
Seguir PSR-4 garantiza que cualquier desarrollador que se una al proyecto 
entienda inmediatamente la estructura sin necesidad de documentación extra. 
Frameworks como Laravel y Symfony usan exactamente este estándar, por lo que 
el conocimiento es transferible a proyectos reales.

