<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = About::first();
        return view('admin.about', compact('data'));
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
        'title' => 'required',
        'desc' => 'required',
        'education' => 'required',
        'project_completed' => 'required',
        'years_experience' => 'required',
        'client_satisfaction' => 'required',
        'languages' => 'required',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
    ]);

    if ($validate->fails()) {
        return redirect()->back()->withErrors($validate);
    }

    $data = About::find($id);

    $data->title = $request->title;
    $data->education = $request->education;
    $data->desc = $request->desc;
    $data->project_completed = $request->project_completed;
    $data->years_experience = $request->years_experience;
    $data->client_satisfaction = $request->client_satisfaction;
    $data->languages = $request->languages;

    // Image update ka concept
    if ($request->hasFile('image')) {
        // Purani image delete karein (agar ho to)
        if ($data->image && file_exists(public_path('uploads/about/'.$data->image))) {
            unlink(public_path('uploads/about/'.$data->image));
        }

        $file = $request->file('image');
        $filename = time().'_'.$file->getClientOriginalName();
        $file->move(public_path('uploads/about'), $filename);
        $data->image = $filename;
    }

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
