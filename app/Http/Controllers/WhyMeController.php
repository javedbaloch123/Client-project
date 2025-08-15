<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\WhyMe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WhyMeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = WhyMe::first();

        return view('admin.whyme',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = Validator::make($request->all(), [
            'desc' => 'required', 
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate);
        }

        $data = WhyMe::find($id);
        $data->desc = $request->desc;
        $data->save();

        return redirect()->back()->with('toast', 'data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
