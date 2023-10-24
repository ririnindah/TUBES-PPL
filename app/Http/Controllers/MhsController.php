<?php

namespace App\Http\Controllers;

use App\Models\mhs;
use App\Http\Requests\StoremhsRequest;
use App\Http\Requests\UpdatemhsRequest;

class MhsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard_mhs');
    }

    public function irs()
    {
        return view('irs');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function update_mhs()
    {
        return view('update_mhs');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoremhsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(mhs $mhs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mhs $mhs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatemhsRequest $request, mhs $mhs)
    {
        //
        return view('update_mhs');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mhs $mhs)
    {
        //
    }
}
