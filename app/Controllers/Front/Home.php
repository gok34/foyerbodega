<?php

namespace App\Controllers\Front;

use CodeIgniter\Controller;

class Home extends Controller
{
    public function index()
    {
        return view('Front/home');
        return view('Front/layout/footer');
    }
}
