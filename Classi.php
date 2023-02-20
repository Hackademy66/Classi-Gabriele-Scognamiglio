<?php

class Animal{
    // ATTRIBUTI
    public $name;
    public $species;
    public $category;

    public static $counter = 0;

    //COSTRUTTORE

    public function __construct( $nome, $specie, $categoria){
        $this->name = $nome;
        $this->species = $specie;
        $this->category = $categoria; 

        Animal::$counter++;
    }

    // METODI

    public function info() {
        echo "$this->name , è un $this->species ed è un $this->category.\n";
    }

}
echo Animal::$counter;

$Asino =new Animal ('Ciuchino','Asino','mammifero');

print_r($Asino);

$Asino->info();

//-----------------------------------------------------------------------------------------------------//
$Zebra =new Animal ('Marty','Zebra','mammifero');

print_r($Zebra);

$Zebra->info();

//-----------------------------------------------------------------------------------------------------//
$Giraffa =new Animal ('Melman','Giraffa','mammifero');

print_r($Giraffa);

$Giraffa->info();
//-----------------------------------------------------------------------------------------------------//
$Leone =new Animal ('Alex','Leone','mammifero');

print_r($Leone);

$Leone->info();
//-----------------------------------------------------------------------------------------------------//
$Ippopotamo =new Animal ('Gloria','Ippopotamo','mammifero');

print_r($Ippopotamo);

$Ippopotamo->info();

 //-----------------------------------------------------------------------------------------------------//
 class Camel extends Animal{
    public $diet;

    public function __construct($name,$species,$category,$dieta){
        parent:: __construct($name,$species,$category);
        $this->diet= $dieta;

    }
    public function info() {
        echo "$this->name , è un $this->species ed è un $this->category ed ha una dieta $this->diet.\n";
    }

 }
 $cammello =new Camel ('Catalitico','Cammello','Mammifero','Erbivora');
 print_r($cammello);
 $cammello->info();

 echo Animal::$counter . " sono i mammiferi che abbiamo";

 //---------------------------------------------------------------------------//
 class Reptile extends Animal {

    public function __construct($name,$species,$category,){
        parent:: __construct($name,$species,$category);
    }
    public function info() {
        echo "$this->name , è un $this->species ed è un $this->category.\n";
    }
}
 
 $Biscia =new Reptile ('Billa','Biscia','Rettile');
 print_r($Biscia);
 $Biscia-> info();

$Pitone =new Reptile ('Pippo', 'Pitone','Rettile',);
print_r($Pitone);
$Pitone-> info();

$Iguana=new Reptile ('Ingis', 'Iguana','Rettile',);
print_r($Iguana);
$Iguana-> info();
