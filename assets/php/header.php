<?php

function chargerCalss($class){
    include $class . ".php";
}
spl_autoload("chargerClass");

include "conf.php";
?>