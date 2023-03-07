<?php

namespace App\Http\Controllers;

use App\Models\data_seleb;
use App\Models\testing_data;
use App\Models\training_data;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $training = training_data::count();

        $testing = testing_data::count();

        $all = $training + $testing;

        $user = data_seleb::count();

        $seleb = data_seleb::all();

        return view('main', compact(['training', 'testing', 'all', 'user', 'seleb']));
    }
}
