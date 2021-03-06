<?php
function loadClass($class)
{
    require("../entities/".$class.".php");
}
spl_autoload_register("loadClass");

require("../model/banqueManager.php");

// creat new object banqueManager
$manager= new BanqueManager;

$accounts= $manager->getAllAccount();
foreach ($accounts as $key => $value) {
    $accounts[$key]=new Banque($value);
}

// condition for add account
if (isset($_POST["button"])) {
    $banque= new Banque($_POST);

    $manager->addAccount($banque);

    header("refresh:0");
}



include "../views/indexVue.php";
