<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view index

        $profil = Profile::latest('id')->first();

        return view('dashboard.profile.index', [
            'title'     => 'Profil | Klinik Gigi',
            'active'    => true,
            'profile'   => $profil
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Save new data

        $rules = [
            'name'      => 'required',
            'address'   => 'required',
            'phone'     => 'required'
        ];

        $validatedData = $request->validate($rules);

        Profile::create($validatedData);

        return redirect('/profile')->with('success', 'Profile has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        // save edit data


        $rules = [
            'name'      => 'required',
            'address'   => 'required',
            'phone'     => 'required'
        ];

        $validatedData = $request->validate($rules);

        Profile::where('id', $profile->id)
            ->update($validatedData);

        return redirect('/profile')->with('success', 'Profile has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
