<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutModel;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->AboutModel = new AboutModel();
    }

    public function index()
    {
        return view('v_about');
    }
}
