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
$accounts = $manager->getAllAccount();

// condition for delete account
if (isset($_POST["delete"])) {
    $manager->delete($account);
    header("Location:index.php");
}

// condition add Amount for account creat
if (isset($_POST["addAmount"])) {
    $account->add($_POST["add"]);

    $manager->update($account);
}
// condition for back amount and account
if (isset($_POST["suppAmount"])) {
    $account->supp($_POST["supp"]);

    $manager->update($account);
}
// condition for credited account
if (isset($_POST["creditedb"])) {
    $data['id'] = $_POST['credited'];
    $acc = new Banque($data);
    $acc = $manager->getAccount($acc);
    $acc = new Banque($acc);
    $acc->supp($_POST['cred']);
    $manager->update($acc);

    // condition for debited account
    $data['id'] = $_POST['debited'];
    $acc = new Banque($data);
    $acc = $manager->getAccount($acc);
    $acc = new Banque($acc);
    $acc->add($_POST['cred']);
    $manager->update($acc);

    header("refresh:0");
}


include "../views/accountVue.php";
