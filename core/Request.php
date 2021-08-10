<?php 

class Request {

    private $arrayReques;

    function __construct($arrayReques){
       $this->arrayReques = $arrayReques;
       
    }
    
    function input(string $name){
        return isset($this->arrayReques[$name])?$this->arrayReques[$name]:'';
         
    }

    function getMethod(){

        return METHOD;
         
    }

    function is(...$i){
        dis($i);
    }

    function __invoke()
    {
        echo 'hello';
    }

 }