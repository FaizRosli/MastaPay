<?php

namespace MastaPay\Http\Controllers\Dropship;

use Illuminate\Http\Request;
use MastaPay\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function __construct()
    {
        
        $this->middleware('auth_dropship');
    }
    public function index()
    {
        return view('Dropship.home');
    }
}
