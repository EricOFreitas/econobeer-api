<?php

namespace App\Http\Controllers\Api;

use App\City;
use App\Http\Controllers\Controller;

class CitiesController extends Controller
{
    public function index(){
        return City::all();
    }
}
