<?php
function loadClass($class)
{
    require("../entities/".$class.".php");
}
spl_autoload_register("loadClass");

require("../model/banqueManager.php");


$manager= new BanqueManager;

$accounts= $manager->getAllAccount();
foreach ($accounts as $key => $value) {
    $accounts[$key]=new banque($value);
}


if (isset($_POST["button"])) {
    $banque= new Banque($_POST);

    $manager->addAccount($banque);

    header("refresh:0");
}

include "../views/indexVue.php";
