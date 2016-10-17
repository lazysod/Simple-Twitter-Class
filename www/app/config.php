<?php 

    define('TWITTER_USER', '');
    define('CONSUMER_KEY', '');
    define('CONSUMER_SECRET', '');
    define('ACCESS_TOKEN', '');
    define('ACCESSTOKEN_SECRET', '');
    

function autoload($className)
{
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }

    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, 'class/'.$className) . '.php';
 
    require $fileName;
}
spl_autoload_register('autoload');
?>