<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profile = Profile::first();

        return view('profile', compact('profile'));
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
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $profile = Profile::find($id);

        $request->validate([
            'name_1' => 'required',
            'name_2' => 'required',
            'image_1' => 'image',
            'image_2' => 'image',
            'curriculum' => 'required',
        ]);

        $input = $request->all();

           // Proses gambar pertama
    if ($image1 = $request->file('image_1')) {
        $destinationPath = 'image/';
        $imageName1 = $image1->getClientOriginalName();
        $image1->move($destinationPath, $imageName1);
        $input['image_1'] = $imageName1;
    }

    // Proses gambar kedua
    if ($image2 = $request->file('image_2')) {
        $destinationPath = 'image/';
        $imageName2 = $image2->getClientOriginalName();
        $image2->move($destinationPath, $imageName2);
        $input['image_2'] = $imageName2;
    }

        $profile->update($input);

        return redirect('/admin/profile') -> with('message', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
