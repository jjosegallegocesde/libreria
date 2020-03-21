<?php

/*Crea una clase llamada Libro que guarde la información de cada uno de los libros de una biblioteca. La clase debe guardar el título del libro, autor, número de ejemplares del libro y número de ejemplares prestados. La clase contendrá los siguientes métodos:
Constructor por defecto y prestamo de 1 solo libro*/

class Libro{

//ATRIBUTOS
public $titulo;
public $autor;
public $ejemplaresTotales;
public $ejemplaresPrestados;

//CONSTRUCTOR
public function __construct($nombre,$escritor,$numero,$prestamo){
    $this->titulo = $nombre;
    $this->autor = $escritor;
    $this->ejemplaresTotales = $numero;
    $this->ejemplaresPrestados = $prestamo;
}

//METODOS
public function prestamo(){
    //100 soledad, garcia,100,0

    if($this->ejemplaresTotales>0){

        $this->ejemplaresTotales = $this->ejemplaresTotales-1;
        echo("El libro: ".$this->titulo." quedo con: ".$this->ejemplaresTotales." disponibles");

    }else{
        echo("Ya no hay ejemplares disponibles");
    }
    
}





}

 



?>