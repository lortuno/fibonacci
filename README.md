# Code-Test-Fibonacci

## Objetivo
Resolver ejercicio de fibonacci

## Instalación
* Tener instalado en la máquina php con versión superior a 7.4. 
* Tener composer instalado
* Ejecutar composer install
* Ejecutar composer update
 
## Lanzar los tests 
La configuración básica de phpunit está en el xml de la carpeta Tests. Para volver a generar un xml de configuración: 
``
./vendor/bin/phpunit   --generate-configuration
``

Si se utiliza el IDE recordar setear los ficheros correctamente: 
* Ruta al phpunit.phar: D:\Windows\PHPStormProjects\fibonacci\vendor\phpunit\phpunit\phpunit
* Fichero de config: D:\Windows\PHPStormProjects\fibonacci\Tests\phpunit.xml.dist
* Fichero de bootstrap: D:\Windows\PHPStormProjects\fibonacci\vendor\bin\phpunit

Si se desea lanzar por línea de comandos podemos invocarlo de la siguiente forma: 
Toda la suite:

``
./vendor/bin/phpunit tests/
``

Un test concreto: 

``
./vendor/bin/phpunit --filter NameOfTheClass::testName
``

