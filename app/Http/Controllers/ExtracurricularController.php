<?php

namespace App\Http\Controllers;

use App\Models\Extracurricular;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ExtracurricularController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $extracurriculars = Extracurricular::all();

        return view('extracurricular.index', compact('extracurriculars') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('extracurricular.create');
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

        Extracurricular::create($input);

        return redirect('/admin/extracurriculars') -> with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Extracurricular $extracurricular)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Extracurricular $extracurricular)
    {
        return view('extracurricular.edit', compact('extracurricular'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Extracurricular $extracurricular)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image'
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            $this->deleteImage($extracurricular->image);
        }

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        $extracurricular->update($input);

        return redirect('/admin/extracurriculars') -> with('message', 'Data berhasil diperbarui');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Extracurricular $extracurricular)
    {
        // Menghapus gambar terkait sebelum menghapus data dari database
        $this->deleteImage($extracurricular->image);
        $extracurricular->delete();

        return redirect('/admin/extracurriculars') -> with('message', 'Data berhasil dihapus');
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
