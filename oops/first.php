//oops in php

//class in php
//Objects of a class are created using the new keyword.

<?php

class Fruit {
    // properties 
    public $name ;
    public $color ;

    //methods
    function set_name($name){
        this->$name = $name ;
    }
    function get_name(){
        return this->$name ;
    }
}

$mango = new Fruit() ;
$mango->set_name = "Apple" ;
$mango->get_name ;

?>



