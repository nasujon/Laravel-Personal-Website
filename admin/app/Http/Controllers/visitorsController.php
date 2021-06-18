<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\visitorsModel;
class visitorsController extends Controller
{
    function visitorsIndex(){
        

        //$visitorsData = json_decode(visitorsModel::all());
        $visitorsData = json_decode(visitorsModel::orderBy('id', 'desc')->take(50)->get());


        return view('visitors', ['visitorsData'=> $visitorsData]);
    }
}
