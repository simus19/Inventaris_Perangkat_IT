<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataserverController extends Controller
{
    function index()
    {
        return view('administrator.dataserver.index');
    }
}
