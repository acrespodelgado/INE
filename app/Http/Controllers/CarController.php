<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    function welcome() {
        $aCar_offering = \App\Models\Car::Offerings();
        $aCar_new = \App\Models\Car::NewProducts();
        $aCarModelBrand_all = \App\Models\CarModelBrand::all();
        return view('welcome', compact('aCar_offering', 'aCar_new', 'aCarModelBrand_all'));
    }

    public function detail(Car $car) { 
        $aCar_new = \App\Models\Car::NewProducts();
        return view('car\detail', compact('car', 'aCar_new')); 
    }
}
