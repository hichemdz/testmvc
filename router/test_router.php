<?php 


/**
 * create class router 🆗
 *  create array for stoke a routers 🆗
 *  create method  get and post 
 *  create method for get router with name
 */


 class RouterTest {

    private $getArray = array() ; // here when stoke  http request from get
    private $postArray = array() ; // here when stoke http request from post
    
    // static because it must be called her withe create instance of the router class ok you're great
   /**
    *  name is get : insert new router with a name and controoler or function
    * @var $name this is name router || $contoller this controler with methed or just function
    * @return viod
    */
    static function get ($name,$controler){ 
       
        /*
          
           in real you must push in array 
           but i wanna test before push
           how can call class with method
        
        */

       echo "<h1>the name router is a $name</h1>"; 
       echo '<pre>';
       print_r($controler);
       echo '</pre>';

    } 

 }



