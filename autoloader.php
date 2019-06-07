<?php

function myAutoloader(string $className):void
{
    require $className.'.php';
}
spl_autoload_register('myAutoloader');