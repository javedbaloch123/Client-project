<?php

namespace App\Http\Controllers;

use App\Mail\freeguide;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $projects = Project::get();
        return view('Admin/project', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.addProject');
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request) 
{
    $validate = Validator::make($request->all(), [
        'name'      => 'required',
        'category'  => 'required',
        'desc'      => 'required',
        'date'      => 'required',
        'image'     => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
    ]);

    if ($validate->fails()) {
        return redirect()->back()->withErrors($validate)->withInput();
    }

    $project = new Project();

    $project->name = $request->name;
    $project->category = $request->category;
    $project->desc = $request->desc;
    $project->project_date = $request->date;

    // Image upload logic
    if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads/project'), $imageName);
        $project->image = $imageName;
    }

    $project->save();

    return redirect()->route('project.index')->with('toast', 'Project added successfully');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Project::find($id);
        return view('projectDetail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Project::find($id);
        return view('admin.editProject',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
  public function update(Request $request, string $id)
{
    $validate = Validator::make($request->all(), [
        'name'      => 'required',
        'category'  => 'required',
        'desc'      => 'required',
        'date'      => 'required',
        'image'     => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
    ]);

    if ($validate->fails()) {
        return redirect()->back()->withErrors($validate)->withInput();
    }

    $project = Project::findOrFail($id);

    $project->name = $request->name;
    $project->category = $request->category;
    $project->desc = $request->desc;
    $project->project_date = $request->date;

    // Image upload logic with old delete
    if ($request->hasFile('image')) {
        // Purani image delete karo
        if ($project->image && file_exists(public_path('uploads/project/' . $project->image))) {
            unlink(public_path('uploads/project/' . $project->image));
        }

        // New image upload
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads/project'), $imageName);
        $project->image = $imageName;
    }

    $project->save();

    return redirect()->route('project.index')->with('toast', 'Project updated successfully');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Project::find($id);
        $data->delete();
        return redirect()->route('project.index')->with('toast','project added successfully');

    }

    public function sendGuide(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $email = $request->email;
         
        Mail::to($email)->send(new freeguide());
        return response()->json(['message' => 'Your free guide has been sent to your email!']);
 
    }
}
