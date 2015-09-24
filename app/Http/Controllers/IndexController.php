<?php

namespace Autoservicios\Http\Controllers;

use Illuminate\Http\Request;

use Autoservicios\Http\Requests;
use Autoservicios\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
       return view('frontend.index');
    }
}
