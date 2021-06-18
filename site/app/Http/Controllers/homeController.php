<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\visitorModel;
class homeController extends Controller
{
    function homeIndex(){
        $userIP = $_SERVER['REMOTE_ADDR'];
        date_default_timezone_set('Asia/Dhaka');
        $time_date = date('Y-m-d h:i:sa');

        visitorModel::insert([
            "id_address"=> $userIP,
            "visit_time"=> $time_date
        ]);

        return view('home');
    }
}
