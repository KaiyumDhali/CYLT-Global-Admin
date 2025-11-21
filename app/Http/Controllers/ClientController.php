<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientsModel; // Make sure you have ClientModel

class ClientController extends Controller
{
    public function index()
    {
        $clients = ClientsModel::all();
        return view('ourclient.add', compact('clients')); 
    }

        public function apiindex()
    {
         $clients = ClientsModel::all();
    return response()->json([
        'status' => 'success',
        'data' => $clients
    ]);
    }
    public function clientList()
    {
        $clients = ClientsModel::all();
        return view('ourclient.clientlist', compact('clients'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image.*'       => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'company_name.*'=> 'nullable|string|max:255',
            'address.*'     => 'nullable|string|max:255',
            'description.*' => 'nullable|string|max:1000',
        ]);

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $index => $file) {
                $name = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(storage_path('app/public/images/clients'), $name);

                ClientsModel::create([
                    'image'        => 'images/clients/' . $name,
                    'company_name' => $request->company_name[$index] ?? null,
                    'address'      => $request->address[$index] ?? null,
                    'description'  => $request->description[$index] ?? null,
                ]);
            }
        }

        return redirect()->route('clients.list')->with('success', 'Client info uploaded successfully!');
    }

    public function edit($id)
    {
        $client = ClientsModel::findOrFail($id);
        return view('ourclient.clientedit', compact('client'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'image.*'        => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'company_name'   => 'nullable|string|max:255',
            'address'        => 'nullable|string|max:255',
            'description'    => 'nullable|string|max:1000',
        ]);

        $client = ClientsModel::findOrFail($id);

        $data = [
            'company_name' => $request->company_name,
            'address'      => $request->address,
            'description'  => $request->description,
        ];

        if ($request->hasFile('image')) {
            // Delete old images if exist
            $oldImages = $client->image ? explode(',', $client->image) : [];
            foreach ($oldImages as $img) {
                if (file_exists(public_path('storage/' . $img))) {
                    unlink(public_path('storage/' . $img));
                }
            }

            $newImages = [];
            foreach ($request->file('image') as $file) {
                $name = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(storage_path('app/public/images/clients'), $name);
                $newImages[] = 'images/clients/' . $name;
            }

            $data['image'] = implode(',', $newImages);
        }

        $client->update($data);

        return back()->with('success', 'Client info updated successfully!');
    }

    public function destroy($id)
    {
        $client = ClientsModel::findOrFail($id);

        // Delete all image files from storage
        $images = $client->image ? explode(',', $client->image) : [];
        foreach ($images as $img) {
            if (file_exists(public_path('storage/' . $img))) {
                unlink(public_path('storage/' . $img));
            }
        }

        $client->delete();

        return back()->with('success', 'Client info deleted successfully!');
    }
}
