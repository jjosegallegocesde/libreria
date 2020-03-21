<?php

/*Crea una clase llamada Libro que guarde la información de cada uno de los libros de una biblioteca. La clase debe guardar el título del libro, autor, número de ejemplares del libro y número de ejemplares prestados. La clase contendrá los siguientes métodos:
Constructor por defecto, prestamo*/

include('Libro.php');

$libro1 = new Libro("100 años de soledad","Gabriel Garcia Marquez",0,0);

$libro1->prestamo();





?>