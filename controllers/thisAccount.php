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

if (isset($_POST["delete"])) {
    $manager->delete($account);
    header("Location:index.php");
}



include "../views/accountVue.php";
