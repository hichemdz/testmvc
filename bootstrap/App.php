<?php 

//require_once path([ROOT,ROUTE,'web.php']);

class App {

    function __construct()
    {
        
       
        Route::findRouter(PATH_INFO);
    }
}



$app = new App();


return $app;