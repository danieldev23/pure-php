<?php


class Controller
{

    public function model($model)
    {
        if (file_exists(_DIR_ROOT_ . '/app/models/' . $model . '.php')) {
            require_once _DIR_ROOT_ . '/app/models/' . $model . '.php';
            if (class_exists($model)) {
                $model = '\models\\' . $model;
//                echo $model;
                $model = new $model();


                return $model;
            }
        }

        return false;
    }
}