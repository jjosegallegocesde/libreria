<?php

/*Crea una clase llamada Libro que guarde la información de cada uno de los libros de una biblioteca. La clase debe guardar el título del libro, autor, número de ejemplares del libro y número de ejemplares prestados. La clase contendrá los siguientes métodos:
Constructor por defecto, prestamo*/

include('Libro.php');

$libro1 = new Libro("100 años de soledad","García Marquez",1,0);

$libro1->prestamo(); //Aqui alguien presta un libro de 100 años de soledad
echo("<br>");
$libro1->prestamo(); //Aqui alguien mas presta un libro de 100 años de soledad


?>