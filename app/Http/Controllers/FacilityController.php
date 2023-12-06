<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FacilityController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facilities = Facility::all();

        return view('facility.index', compact('facilities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('facility.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        Facility::create($input);

        return redirect('/admin/facilities')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Facility $facility)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Facility $facility)
    {
        return view('facility.edit', compact('facility'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Facility $facility)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image'
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            $this->deleteImage($facility->image);
        }

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        } else {
            unset($input['image']);
        }

        $facility->update($input);

        return redirect('/admin/facilities')->with('message', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Facility $facility)
    {
        // Menghapus gambar terkait sebelum menghapus data dari database
        $this->deleteImage($facility->image);

        $facility->delete();

        return redirect('/admin/facilities')->with('message', 'Data berhasil dihapus');
    }

    private function deleteImage($imageName)
    {
        $imagePath = public_path('image/') . $imageName;

        // Memastikan gambar ada sebelum dihapus
        if (File::exists($imagePath)) {
            // Menghapus gambar menggunakan File::delete
            File::delete($imagePath);
        }
    }
}
