<?php
function loadClass($class)
{
    require("../entities/".$class.".php");
}
spl_autoload_register("loadClass");

require("../model/banqueManager.php");
