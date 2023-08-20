<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Data_perangkat_existingController extends Controller
{
    function index()
    {
        return view('administrator.data_perangkat_existing.index');
    }
}
