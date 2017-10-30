<?php
declare(strict_types=1);

class vehicule
{
    protected $name;
    protected $annees;
    protected $colors;
    protected $price;
    protected $description;





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
     * Get the value of Annees
     *
     * @return mixed
     */
    public function getAnnees()
    {
        return $this->annees;
    }

    /**
     * Set the value of Annees
     *
     * @param mixed annees
     *
     * @return self
     */
    public function setAnnees($annees)
    {
        $this->annees = $annees;

        return $this;
    }

    /**
     * Get the value of Colors
     *
     * @return mixed
     */
    public function getColors()
    {
        return $this->colors;
    }

    /**
     * Set the value of Colors
     *
     * @param mixed colors
     *
     * @return self
     */
    public function setColors($colors)
    {
        $this->colors = $colors;

        return $this;
    }

    /**
     * Get the value of Price
     *
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of Price
     *
     * @param mixed price
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of Description
     *
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of Description
     *
     * @param mixed description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}
