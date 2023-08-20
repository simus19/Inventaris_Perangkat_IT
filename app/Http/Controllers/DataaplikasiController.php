<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataaplikasiController extends Controller
{
    function index()
    {
        return view('administrator.dataaplikasi.index');
    }
}
