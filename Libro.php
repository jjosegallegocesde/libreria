<?php

/*Crea una clase llamada Libro que guarde la información de cada uno de los libros de una biblioteca. La clase debe guardar el título del libro, autor, número de ejemplares del libro y número de ejemplares prestados. La clase contendrá los siguientes métodos:
Constructor por defecto y prestamo de 1 solo libro*/

class Libro {

    //ATRIBUTOS
    public $titulo;
    public $autor;
    public $ejemplaresTotales;
    public $ejemplaresPrestados;


    //CONSTRUCTOR
    public function __construct($titulo, $autor, $ejemplaresTotales, $ejemplaresPrestados){

        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ejemplaresTotales = $ejemplaresTotales;
        $this->ejemplaresPrestados = $ejemplaresPrestados;
    }


    //METODOS

    public function prestamo(){

        if($this->ejemplaresTotales>0){
            $this->ejemplaresTotales = $this->ejemplaresTotales-1;
            $this->ejemplaresPrestados = $this->ejemplaresPrestados+1;
            echo("El libro: ". $this->titulo." tiene hasta la fecha de hoy: ".$this->ejemplaresTotales." ejemplares disponibles");
        }else{
            echo("No hay libros disponibles para el prestamo");
        }

    }



}


?>