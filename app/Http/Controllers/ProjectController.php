<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectModel;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = ProjectModel::all();
        return view('project.add', compact('projects')); 
    }
public function apiindex()
{
    $projects = ProjectModel::all();
    return response()->json([
        'status' => 'success',
        'data' => $projects
    ]);
}

    public function projectList()
    {
        $projects = ProjectModel::all();
        return view('project.projectlist', compact('projects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image.*'       => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'title.*'       => 'nullable|string|max:255',
            'client_name.*'       => 'nullable|string|max:255',
            'description.*' => 'nullable|string|max:500',
            'othertext.*'   => 'nullable|string|max:500',
            'status.*'      => 'required|in:0,1',
        ]);

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $index => $file) {
                $name = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(storage_path('app/public/images/projects'), $name);

                ProjectModel::create([
                    'image'       => 'images/projects/' . $name,
                    'title'       => $request->title[$index] ?? null,
                    'client_name'       => $request->client_name[$index] ?? null,
                    'description' => $request->description[$index] ?? null,
                    'othertext'   => $request->othertext[$index] ?? null,
                    'status'      => $request->status[$index],
                ]);
            }
        }

        return redirect()->route('projects.list')->with('success', 'Project uploaded successfully!');
    }

    public function edit($id)
    {
        $project = ProjectModel::findOrFail($id);
        return view('project.projectedit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'image.*'       => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'title'         => 'nullable|string|max:255',
            'client_name'         => 'nullable|string|max:255',
            'description'   => 'nullable|string|max:500',
            'othertext'     => 'nullable|string|max:500',
            'status'        => 'required|in:0,1',
        ]);

        $project = ProjectModel::findOrFail($id);

        $data = [
            'title'       => $request->title,
            'client_name'       => $request->client_name,
            'description' => $request->description,
            'othertext'   => $request->othertext,
            'status'      => $request->status,
        ];

        if ($request->hasFile('image')) {
            // Delete old images if exist
            $oldImages = $project->image ? explode(',', $project->image) : [];
            if (is_array($oldImages)) {
                foreach ($oldImages as $img) {
                    if (file_exists(public_path('storage/' . $img))) {
                        unlink(public_path('storage/' . $img));
                    }
                }
            }

            $newImages = [];
            foreach ($request->file('image') as $file) {
                $name = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(storage_path('app/public/images/projects'), $name);
                $newImages[] = 'images/projects/' . $name;
            }

            // Store as comma-separated string
            $data['image'] = implode(',', $newImages);
        }

        $project->update($data);

        return back()->with('success', 'Project updated successfully!');
    }

    public function destroy($id)
    {
        $project = ProjectModel::findOrFail($id);

        // Delete images from storage
        if ($project->image) {
            $images = explode(',', $project->image);
            foreach ($images as $img) {
                if (file_exists(public_path('storage/' . $img))) {
                    unlink(public_path('storage/' . $img));
                }
            }
        }

        $project->delete();

        return back()->with('success', 'Project deleted successfully!');
    }
}
