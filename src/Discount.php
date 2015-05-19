<?php

class Discount {
    protected $amount;

    public function __construct($amount) {
        if (is_numeric($amount)) {
            $this->amount = $amount > 0 ? $amount : -$amount;
        }
    }


    public function getAmount($items) {
        if (is_array($items)) {
            return $this->amount;
        } else {
            throw new RuntimeException('invalid items');
        }
    }

}
