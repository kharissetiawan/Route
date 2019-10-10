<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaryawatiController extends Controller
{
    public function index()
    {
        return view('/karyawati');
    }
}
