<?php

namespace App\Http\Controllers;

use App\Models\opt;
use App\Http\Requests\StoreoptRequest;
use App\Http\Requests\UpdateoptRequest;

class OptController extends Controller
{
    public function index()
    {
        return view('dashboard_opt');
    }

    public function generate()
    {

        return view('generate');
    }
}
