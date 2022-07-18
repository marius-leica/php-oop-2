<?php

class PaymentHandler
{
    private $paymentMethods = [];

    public function addPaymentMethod($paymentMethod)
    {
        $this->paymentMethods[] = $paymentMethod;
    }


    /**
     * Get the value of paymentMethods
     */
    public function getPaymentMethods()
    {
        return $this->paymentMethods;
    }

    /**
     * Set the value of paymentMethods
     *
     * @return  self
     */
    public function setPaymentMethods($paymentMethods)
    {
        $this->paymentMethods = $paymentMethods;

        return $this;
    }

    public function getMethod($index)
    {
        return $this->getPaymentMethods()[$index];
    }
}
