<?php

class Banque
{
    protected $id;
    protected $name;
    protected $amount;
    protected $type;


    public function __construct($data)
    {
        $this->hydrate($data);
    }

    public function hydrate(array $account)
    {
        foreach ($account as $key => $value) {
            $method= "set".ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }


    /**
     * Get the value of Name
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of Name
     *
     * @param mixed name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of Amount
     *
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set the value of Amount
     *
     * @param mixed amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }


    /**
     * Get the value of Type
     *
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of Type
     *
     * @param mixed type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of Id Account
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Id Account
     *
     * @param mixed id_account
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
