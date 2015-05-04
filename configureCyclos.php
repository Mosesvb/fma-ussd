<?php

function load($c) {
    if (strpos($c, "Cyclos\\") >= 0) {
        include str_replace("\\", "/", $c) . ".php";
    }    
}

spl_autoload_register('load'); 

Cyclos\Configuration::setRootUrl("fungasha.j.layershift.co.uk/fungasha");
Cyclos\Configuration::setAuthentication("wakashela", "kamugisha");