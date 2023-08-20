<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Master_perangkat_itController extends Controller
{
    function index()
    {
        return view('administrator.master_perangkat_it.index');
    }
}
