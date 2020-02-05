<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function profile()
    {
        return view('student-profile');
    }

    public function profiles($id)
    {
        $profile = User::find($id);
        return view('profile-edit')->with('profile', $profile);
    }

    public function edit_result($id)
    {
        $result = User::find($id);
        return view('edit-result')->with('result', $result);
    }

    public function edit($id)
    {
        $profile = User::find($id);
        return view('edit')->with('profile', $profile);
    }

    public function detail($id)
    {
        $results = User::find($id);
        return view('details')->with('results', $results);
    }


    public function check($id)
    {
        $result = User::find($id);
        return view('result')->with('result', $result);
    }

    public function first($id)
    {
        $result = User::find($id);
        return view('first')->with('result', $result);
    }

    public function view()
    {
        $results = User::orderBy('id', 'desc')->get();
        return view('view-students')->with('results', $results);
    }

    public function delete($id)
    {
        
        $result = User::find($id);
        
        if($result->profile_image != 'noimage.png') {
            //Delete Image
            Storage::delete('public/profile_images/'.$result->profile_image);
        }
        $result->delete();
        return redirect('/admin')->with('success', 'Result Record Deleted Successfully!');
    }
}
