<?php

function myAutoloader(string $className):void
{
    require 'src/Classe/' . $className.'.php';
}
spl_autoload_register('myAutoloader');