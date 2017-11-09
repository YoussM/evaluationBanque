<?php
function loadClass($class)
{
    require("../entities/".$class.".php");
}
spl_autoload_register("loadClass");

require("../model/banqueManager.php");

$manager = new BanqueManager;
$account = new Banque($_GET);
$account = $manager->getAccount($account);
$account = new Banque($account);

include "../views/accountVue.php";
