<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasterlayananController extends Controller
{
    function index()
    {
        return view('administrator.masterlayanan.index');
    }

    function add()
    {
        return view('administrator.masterlayanan.add');
    }
}
