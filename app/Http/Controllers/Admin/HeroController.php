<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Home::first();
        return view('admin.home', compact('data'));
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
  public function update(Request $request, $id)
{
    $validate = Validator::make($request->all(), [
        'name' => 'required',
        'desc' => 'required',
        'subtitle' => 'required',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
    ]);

    if ($validate->fails()) {
        return redirect()->back()->withErrors($validate);
    }

    $data = Home::find($id);

    // Agar nayi image upload hui hai
    if ($request->hasFile('image')) {
        // Purani image delete karo
        if ($data->image && file_exists(public_path('uploads/' . $data->image))) {
            unlink(public_path('uploads/' . $data->image));
        }

        // Nayi image save karo
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads'), $imageName);

        $data->image = $imageName;
    }

    // Baaki fields update karo
    $data->brand_name = $request->name;
    $data->subtitle = $request->subtitle;
    $data->desc = $request->desc;

    $data->save();

    return redirect()->back()->with('toast', 'Data updated successfully');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
