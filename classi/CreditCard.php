<?php

class CreditCard
{
    private $type;
    private $number;
    private $cvv;
    private $expirationDate;

    public function __construct($type, $number, $cvv, $expirationDate)
    {
        $this->setType($type);
        $this->setType($number);
        $this->setType($cvv);
        $this->setType($expirationDate);
    }

    /**
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of number
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the value of cvv
     */
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * Set the value of cvv
     *
     * @return  self
     */
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;

        return $this;
    }

    /**
     * Get the value of expirationDate
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Set the value of expirationDate
     *
     * @return  self
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    public function checkExpiration()
    {
        $expiration = DateTime::createFromFormat('m/Y', $this->expiration);
        $now = new DateTime("now");

        var_dump($expiration);
    }
}
