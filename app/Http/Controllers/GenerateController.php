<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreoptRequest;
use App\Http\Requests\UpdateoptRequest;

class GenerateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('generate');
    }
}
?>