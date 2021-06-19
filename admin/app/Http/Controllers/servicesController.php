<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\servicesModel;
class servicesController extends Controller
{
    function servicesIndex(){
        return view('services');
    }

    function getServicesData () {
        $result = json_encode(servicesModel::all());

        return $result;
    }
}
