<?php

defined('SP') or define('SP', DIRECTORY_SEPARATOR);

defined('METHOD') or define('METHOD', $_SERVER['REQUEST_METHOD']);

defined('ROOT') or define('ROOT', __DIR__);


$path = explode('public',$_SERVER['REDIRECT_URL']);

$p = count($path) >= 2? end($path):'/';
defined('PATH_INFO') or define('PATH_INFO',$p);

require_once 'core/function.php';

/*________________________config ___________________ */

require path([ROOT,'configs','settings.php']);
/*______________________cinfig_____________________ */


/*________________ START BOOTSTRAP DIRECTORY _______________ */

defined('BOOT') or define('BOOT', path([ROOT,'bootstrap']));

/*________________ END BOOTSTRAP DIRECTORY _______________ */

/*________________ START CORE DIRECTORY _______________ */

defined('CORE') or define('CORE', path([ROOT,'core']));

/*________________ END CORE DIRECTORY _______________ */


/*________________ START APP DIRECTORY _______________ */

defined('APP') or define('APP',  path([ROOT, 'app']));

defined('CONTROLLER') or define('CONTROLLER', path([APP, 'controllers']));

defined('MODEL') or define('MODEL', path([APP, 'models']));

/*________________ END APP DIRECTORY _______________ */


/*________________ START ROUTERS DIRECTORY _______________ */

defined('ROUTE') or define('ROUTE', path([ROOT,'router']));


/*________________ END ROUTERS DIRECTORY _______________ */


/*________________ START RESOUCESS DIRECTORY _______________ */

defined('RESOUCES') or define('RESOUCES', path([ROOT,'resources']));


defined('VIEW') or define('VIEW', path([ RESOUCES, 'views']));

defined('CSS') or define('CSS', path([RESOUCES, 'css']));


defined('JS') or define('JS', path([RESOUCES, 'js']));


defined('IMG') or define('IMG', path([RESOUCES, 'img']));

/*________________ END RESOUCES DIRECTORY _______________ */


spl_autoload_register(function($class){
  
    if(file_exists(path([CONTROLLER,$class.'.php']) )){
        
        require path([CONTROLLER,$class.'.php']);

    }
    elseif(file_exists(path([CORE,$class.'.php'])) ){
       
        require path([CORE,$class.'.php']);
    }

});

ini_set('display_errors',DEBUG);


//dis($_SERVER);

// REQUEST_URI
// PATH_INFO

