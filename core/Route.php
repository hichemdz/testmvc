<?php



class Route
{

   private static $getRouter = array();
   private static $postRouter = array();

   static function get(String $name, $controoler)
   {  
       
      $name = $name  === '/' ? $name : trim($name, '/');

      //not string
      if (!is_string($controoler)) {
         // si a array 

         if (is_array($controoler)) {
            /*
               [
                  'type' => 'get',
                   
               ]
            */
            self::$getRouter[$name] = [
               'class' => $controoler[0],
               'action' => $controoler[1],
            ];
         } else {

            call_user_func($controoler);
         }
      }
   }


   static function findRouter(string $path)
   {

      $getR = self::$getRouter;
      $postR = self::$postRouter;
    
      $path = $path  === '/' ? $path : trim($path, '/');
      echo $path;
      dis($getR['/'] ); 

      if (array_key_exists($path, $getR) || array_key_exists($path, $postR)) {

         // if the coming from http request get 
         
         if (strtolower(METHOD) === 'get' && isset($getR[$path])) {
            echo 'get ' . METHOD;
            $data = $_GET;
            $saveRoute = $getR[$path];
         } elseif (strtolower(METHOD) === 'post' && isset($postR[$path])) {
            $data = $_POST;
            $saveRoute = $postR[$path];
            
         } else {
            die("'this router not working with method " . METHOD);
            return false;
         }




         call_user_func_array([new  $saveRoute['class'], $saveRoute['action']],[new Request (array_merge( $data,$_FILES))]);
        
      } else {
         //dis($_GET);
         die("'this router is not exists  ");
      }
   }
}
