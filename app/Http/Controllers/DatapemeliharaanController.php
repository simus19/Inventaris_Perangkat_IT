<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DatapemeliharaanController extends Controller
{
    function index()
    {
        return view('administrator.datapemeliharaan.index');
    }
}
