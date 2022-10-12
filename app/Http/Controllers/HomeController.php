<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeModel;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->HomeModel = new HomeModel();
    }

    public function index()
    {
        return view('v_home');
    }
}
