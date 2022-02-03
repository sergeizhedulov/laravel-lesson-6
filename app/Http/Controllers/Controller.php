<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getNews(): array
    {
        $data = [
            'Mobile' => ['Iphone' => 'Описание1', 'Samsung' => 'Описание2', 'Lg' => 'Описание3', 'Xiaomi' => 'Описание4'],
            'Notebook' => ['MacBook' => 'Описание1', 'ASUS' => 'Описание2', 'HP' => 'Описание3', 'Lenovo' => 'Описание4'],
            'Camera' => ['Sony' => 'Описание1', 'Canon' => 'Описание2', 'NIKON' => 'Описание3', 'FUJIFILM' => 'Описание4'],
            'Headphones' => ['Airpods' => 'Описание1', 'JBL' => 'Описание2', 'Beats' => 'Описание3'],
            'TV' => ['LG' => 'Описание1', 'SAMSUNG' => 'Описание2', 'Philips' => 'Описание3', 'Panasonic' => 'Описание4']
        ];
        return $data;
    }
}
