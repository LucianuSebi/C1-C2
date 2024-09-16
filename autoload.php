<?php

spl_autoload_register(function($className){
    include str_replace('\\',"/",dirname(__FILE__).'/'.$className.'.php');
});
