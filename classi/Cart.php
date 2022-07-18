<?php

class Cart
{
    private $product = [];

    public function addProduct($product)
    {
        $this->product[] = $product;
    }

    public function getProduct()
    {
        return $this->product;
    }

    public function getTotal()
    {
        $total = 0;
        foreach ($this->product as $product) {
            $total += $product->getPrice();
        }
        return $total;
    }
}
