<?php

namespace models;

class Home
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