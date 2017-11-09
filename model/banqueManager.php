<?php

class BanqueManager
{
    public function getBdd()
    {
        $bdd = new PDO('mysql:host=localhost;dbname=EvaluationBanque;charset=utf8', 'root', 'root');
        $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $bdd;
    }


    public function getAllAccount()
    {
        $response = $this->getBdd()->query("SELECT * FROM ExoBanque");
        $accounts=$response->fetchAll();
        return $accounts;
    }

    public function addAccount($account)
    {
        $response = $this->getBdd()->prepare("INSERT INTO ExoBanque (name,amount,type) VALUES (:name,:amount,:type)");
        $response->execute(array(
        "name"=>$account->getName(),
        "amount"=>$account->getAmount(),
        "type"=>$account->getType(),

      ));
    }

    public function getAccount(Banque $account)
    {
        $response= $this->getBdd()->prepare("SELECT * FROM exoBanque WHERE id");
        $response->execute(array(
        "id"=>$account->getId(),
      ));
    }
}
