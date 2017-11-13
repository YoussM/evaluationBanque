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

// condition for delete account
if (isset($_POST["delete"])) {
    $manager->delete($account);
    header("Location:index.php");
}

// condition add Amount for account creat
if (isset($_POST["addAmount"])) {
    $account->add($_POST["add"]);

    $manager->update($account);

    // header("location:accountVue.php");
}


include "../views/accountVue.php";
