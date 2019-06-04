<?php

function myAutoloader(string $className):void
{
    require 'Classe/' . $className.'.php';
}
spl_autoload_register('myAutoloader');