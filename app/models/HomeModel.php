<?php

namespace models;

class HomeModel
{
//    protected  $table = 'products';

    public function getProduct() {
        $data = [
            'Huy',
            'IT',
            'Developer',
        ];
        return $data;
    }

    public function getDeitail($id) {
        $data = [
          'Huy Developer',
          'Đặng Quốc Huy',
          'Daniel Developer'
        ];

        return $data[$id];
    }
}