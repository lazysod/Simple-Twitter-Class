<?php 

    define('TWITTER_USER', 'IrmaBotAI');
    define('CONSUMER_KEY', 'XPxVKsDvXIigYGlR0xxuMXkKq');
    define('CONSUMER_SECRET', 'FiaIqyHjfdl6235Y9lbqkvzAwC7eGNf7mmV50b2Q660LKqvRiA');
    define('ACCESS_TOKEN', '700759781057822720-dhpbY2BQqVpCDKBRuvP6zHBbGSzggh4');
    define('ACCESSTOKEN_SECRET', 'Aw1Js1EqiJocTqvqUEbR5OGD2hliqugzXPA6IFrxv2OT4');
    

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