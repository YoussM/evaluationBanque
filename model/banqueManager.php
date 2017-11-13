<?php

class BanqueManager
{
    // function to add and bdd
    public function getBdd()
    {
        $bdd = new PDO('mysql:host=localhost;dbname=EvaluationBanque;charset=utf8', 'root', 'root');
        $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $bdd;
    }

    // function to get and bdd a table
    public function getAllAccount()
    {
        $response = $this->getBdd()->query("SELECT * FROM ExoBanque");
        $accounts=$response->fetchAll();
        return $accounts;
    }
    // function to insert and bdd
    public function addAccount(Banque $account)
    {
        $response = $this->getBdd()->prepare("INSERT INTO ExoBanque (name,amount,type) VALUES (:name,:amount,:type)");
        $response->execute(array(
        "name"=>$account->getName(),
        "amount"=>$account->getAmount(),
        "type"=>$account->getType(),

      ));
    }

    // function get account and bdd as recup id now
    public function getAccount(Banque $account)
    {
        $response= $this->getBdd()->prepare("SELECT * FROM ExoBanque WHERE id= :id");
        $response->execute(array(
        "id"=>$account->getId(),

      ));
        return $account = $response->fetch();
    }
    // function delete account
    public function delete(Banque $account)
    {
        $req=$this->getBdd()->prepare("DELETE FROM ExoBanque WHERE id=:id");
        $req->execute(
            [
        "id"=>$account->getId()]
      );
    }
    // function update account
    public function update(Banque $account)
    {
        $req=$this->getBdd()->prepare("UPDATE ExoBanque SET amount=:amount WHERE id=:id");
        $req->execute(array(
        "id"=>$account->getId(),
        "amount"=>$account->getAmount()
      ));
    }
}
