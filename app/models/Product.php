<?php

namespace models;

class Product
{
    protected  $table = 'products';

    public function getProduct() {
        $data = [
            'Huy',
            'IT',
            'Developer',
            ];
        return $data;
    }

}