<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class PageController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

}
