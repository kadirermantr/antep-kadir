<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function showView() {
        $name = "Kadir";
        $city = "Bursa";
        $department = "Computer Engineer";

        return view('hakkimda', compact('name', 'city', 'department'));
    }
}
