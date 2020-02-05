<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //
        $this->validate($request, [
            'age' => 'required',
            'sex' => 'required',
            'phone' => 'required',
            'matric_number' => 'required',
            'level' => 'required',
            'school' => 'required',
            'department' => 'required',
            'profile_image' => 'image|nullable|max:1999'
        ]);


         //Handle File upload
         if($request->hasFile('profile_image')){
            //Get filename with extension
            $filenameWithExt = $request->file('profile_image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('profile_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload image
            $path = $request->file('profile_image')->storeAs('public/profile_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.png';
        }

        //Update Profile
        $profile = User::find($id);
        $profile->age = $request->input('age');
        $profile->phone = $request->input('phone');
        $profile->department = $request->input('department');
        $profile->school = $request->input('school');
        $profile->sex = $request->input('sex');
        $profile->matric_number = $request->input('matric_number');
        $profile->level = $request->input('level');
        $profile->profile_image = $fileNameToStore;
        $profile->save();

        return redirect('/home')->with('success', 'Profile Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
