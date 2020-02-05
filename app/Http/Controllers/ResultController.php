<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ResultController extends Controller
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
        $result = User::find($id);
        return view('first')->with('result', $result);
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
          //
          $result = User::find($id);
          return view('edit-result')->with('result', $result);
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
        $this->validate($request, [
            'statistics_score' => 'required',
            'project_score' => 'required',
            'information_score' => 'required',
            'mis_score' => 'required',
            'graphics_score' => 'required',
            'computer_score' => 'required'
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

        //Upload Result
        $result = User::find($id);
        $result->project_score = $request->input('project_score');
        $result->information_score = $request->input('information_score');
        $result->mis_score = $request->input('mis_score');
        $result->computer_score = $request->input('computer_score');
        $result->statistics_score = $request->input('statistics_score');
        $result->graphics_score = $request->input('graphics_score');
        $a = 4;
        $ab = 3.5;
        $b = 3;
        $bc = 2.5;
        $c = 2;
        $cd = 1.5;
        $d = 1;
        $e = 0.5;
        $f = 0;
        
        //GRAPHICS GRADING

        if($request->input('graphics_score') >= '75'){
            $result->graphics_grade = 'A';
        } elseif ($request->input('graphics_score') >= '70' && $request->input('graphics_score') < '75') {
            $result->graphics_grade = 'AB';
        } elseif ($request->input('graphics_score') >= '65' && $request->input('graphics_score') < '70'){
            $result->graphics_grade = 'B';
        } elseif ($request->input('graphics_score') >= '60' && $request->input('graphics_score') < '65') {
            $result->graphics_grade = 'BC';
        } elseif ($request->input('graphics_score') >= '55' && $request->input('graphics_score') < '60') {
            $result->graphics_grade = 'C';
        } elseif ($request->input('graphics_score') >= '50' && $request->input('graphics_score') < '55') {
            $result->graphics_grade = 'CD';
        } elseif ($request->input('graphics_score') >= '45' && $request->input('graphics_score') < '50') {
            $result->graphics_grade = 'D';
        } elseif ($request->input('graphics_score') >= '40' && $request->input('graphics_score') < '45') {
            $result->graphics_grade = 'E';
        } else {
            $result->graphics_grade = 'F';
        }

        //MIS GRADING

        if($request->input('mis_score') >= '75'){
            $result->mis_grade = 'A';
        } elseif ($request->input('mis_score') >= '70' && $request->input('mis_score') < '75') {
            $result->mis_grade = 'AB';
        } elseif ($request->input('mis_score') >= '65' && $request->input('mis_score') < '70'){
            $result->mis_grade = 'B';
        } elseif ($request->input('mis_score') >= '60' && $request->input('mis_score') < '65') {
            $result->mis_grade = 'BC';
        } elseif ($request->input('mis_score') >= '55' && $request->input('mis_score') < '60') {
            $result->mis_grade = 'C';
        } elseif ($request->input('mis_score') >= '50' && $request->input('mis_score') < '55') {
            $result->mis_grade = 'CD';
        } elseif ($request->input('mis_score') >= '45' && $request->input('mis_score') < '50') {
            $result->mis_grade = 'D';
        } elseif ($request->input('mis_score') >= '40' && $request->input('mis_score') < '45') {
            $result->mis_grade = 'E';
        } else {
            $result->mis_grade = 'F';
        }

        //COMPUTER GRADING

        if($request->input('computer_score') >= '75'){
            $result->computer_grade = 'A';
        } elseif ($request->input('computer_score') >= '70' && $request->input('computer_score') < '75') {
            $result->computer_grade = 'AB';
        } elseif ($request->input('computer_score') >= '65' && $request->input('computer_score') < '70'){
            $result->computer_grade = 'B';
        } elseif ($request->input('computer_score') >= '60' && $request->input('computer_score') < '65') {
            $result->computer_grade = 'BC';
        } elseif ($request->input('computer_score') >= '55' && $request->input('computer_score') < '60') {
            $result->computer_grade = 'C';
        } elseif ($request->input('computer_score') >= '50' && $request->input('computer_score') < '55') {
            $result->computer_grade = 'CD';
        } elseif ($request->input('computer_score') >= '45' && $request->input('computer_score') < '50') {
            $result->computer_grade = 'D';
        } elseif ($request->input('computer_score') >= '40' && $request->input('computer_score') < '45') {
            $result->computer_grade = 'E';
        } else {
            $result->computer_grade = 'F';
        }

        //PROJECT GRADING

        if($request->input('project_score') >= '75'){
            $result->project_grade = 'A';
        } elseif ($request->input('project_score') >= '70' && $request->input('project_score') < '75') {
            $result->project_grade = 'AB';
        } elseif ($request->input('project_score') >= '65' && $request->input('project_score') < '70'){
            $result->project_grade = 'B';
        } elseif ($request->input('project_score') >= '60' && $request->input('project_score') < '65') {
            $result->project_grade = 'BC';
        } elseif ($request->input('project_score') >= '55' && $request->input('project_score') < '60') {
            $result->project_grade = 'C';
        } elseif ($request->input('project_score') >= '50' && $request->input('project_score') < '55') {
            $result->project_grade = 'CD';
        } elseif ($request->input('project_score') >= '45' && $request->input('project_score') < '50') {
            $result->project_grade = 'D';
        } elseif ($request->input('project_score') >= '40' && $request->input('project_score') < '45') {
            $result->project_grade = 'E';
        } else {
            $result->project_grade = 'F';
        }

        //STATISTICS GRADING

        if($request->input('statistics_score') >= '75'){
            $result->statistics_grade = 'A';
        } elseif ($request->input('statistics_score') >= '70' && $request->input('statistics_score') < '75') {
            $result->statistics_grade = 'AB';
        } elseif ($request->input('statistics_score') >= '65' && $request->input('statistics_score') < '70'){
            $result->statistics_grade = 'B';
        } elseif ($request->input('statistics_score') >= '60' && $request->input('statistics_score') < '65') {
            $result->statistics_grade = 'BC';
        } elseif ($request->input('statistics_score') >= '55' && $request->input('statistics_score') < '60') {
            $result->statistics_grade = 'C';
        } elseif ($request->input('statistics_score') >= '50' && $request->input('statistics_score') < '55') {
            $result->statistics_grade = 'CD';
        } elseif ($request->input('statistics_score') >= '45' && $request->input('statistics_score') < '50') {
            $result->statistics_grade = 'D';
        } elseif ($request->input('statistics_score') >= '40' && $request->input('statistics_score') < '45') {
            $result->statistics_grade = 'E';
        } else {
            $result->statistics_grade = 'F';
        }

         //INFORMATION GRADING

         if($request->input('information_score') >= '75'){
            $result->information_grade = 'A';
        } elseif ($request->input('information_score') >= '70' && $request->input('information_score') < '75') {
            $result->information_grade = 'AB';
        } elseif ($request->input('information_score') >= '65' && $request->input('information_score') < '70'){
            $result->information_grade = 'B';
        } elseif ($request->input('information_score') >= '60' && $request->input('information_score') < '65') {
            $result->information_grade = 'BC';
        } elseif ($request->input('information_score') >= '55' && $request->input('information_score') < '60') {
            $result->information_grade = 'C';
        } elseif ($request->input('information_score') >= '50' && $request->input('information_score') < '55') {
            $result->information_grade = 'CD';
        } elseif ($request->input('information_score') >= '45' && $request->input('information_score') < '50') {
            $result->information_grade = 'D';
        } elseif ($request->input('information_score') >= '40' && $request->input('information_score') < '45') {
            $result->information_grade = 'E';
        } else {
            $result->information_grade = 'F';
        }

        //GRAPHICS POINT
        if ($result->graphics_grade === 'A') {
            $result->graphics_point = $a * $result->graphics_unit;
        } elseif ($result->graphics_grade === 'AB') {
            $result->graphics_point = $ab * $result->graphics_unit;
        } elseif ($result->graphics_grade === 'B') {
            $result->graphics_point = $b * $result->graphics_unit;
        } elseif ($result->graphics_grade === 'BC') {
            $result->graphics_point = $bc * $result->graphics_unit;
        } elseif ($result->graphics_grade === 'C') {
            $result->graphics_point = $c * $result->graphics_unit;
        } elseif ($result->graphics_grade === 'CD') {
            $result->graphics_point = $cd * $result->graphics_unit;
        } elseif ($result->graphics_grade === 'D') {
            $result->graphics_point = $d * $result->graphics_unit;
        } elseif ($result->graphics_grade === 'E') {
            $result->graphics_point = $e * $result->graphics_unit;
        } else {
            $result->graphics_point = $f * $result->graphics_unit;
        }

        //STATISTICS POINT
        if ($result->statistics_grade === 'A') {
            $result->statistics_point = $a * $result->statistics_unit;
        } elseif ($result->statistics_grade === 'AB') {
            $result->statistics_point = $ab * $result->statistics_unit;
        } elseif ($result->statistics_grade === 'B') {
            $result->statistics_point = $b * $result->statistics_unit;
        } elseif ($result->statistics_grade === 'BC') {
            $result->statistics_point = $bc * $result->statistics_unit;
        } elseif ($result->statistics_grade === 'C') {
            $result->statistics_point = $c * $result->statistics_unit;
        } elseif ($result->statistics_grade === 'CD') {
            $result->statistics_point = $cd * $result->statistics_unit;
        } elseif ($result->statistics_grade === 'D') {
            $result->graphics_point = $d * $result->statistics_unit;
        } elseif ($result->statistics_grade === 'E') {
            $result->statistics_point = $e * $result->statistics_unit;
        } else {
            $result->statistics_point = $f * $result->statistics_unit;
        }

        //PROJECT POINT

        if ($result->project_grade === 'A') {
            $result->project_point = $a * $result->project_unit;
        } elseif ($result->project_grade === 'AB') {
            $result->project_point = $ab * $result->project_unit;
        } elseif ($result->project_grade === 'B') {
            $result->project_point = $b * $result->project_unit;
        } elseif ($result->project_grade === 'BC') {
            $result->project_point = $bc * $result->project_unit;
        } elseif ($result->project_grade === 'C') {
            $result->project_point = $c * $result->project_unit;
        } elseif ($result->project_grade === 'CD') {
            $result->project_point = $cd * $result->project_unit;
        } elseif ($result->project_grade === 'D') {
            $result->project_point = $d * $result->project_unit;
        } elseif ($result->project_grade === 'E') {
            $result->project_point = $e * $result->project_unit;
        } else {
            $result->project_point = $f * $result->project_unit;
        }

         //INFORMATION POINT

         if ($result->information_grade === 'A') {
            $result->information_point = $a * $result->information_unit;
        } elseif ($result->information_grade === 'AB') {
            $result->information_point = $ab * $result->information_unit;
        } elseif ($result->information_grade === 'B') {
            $result->information_point = $b * $result->information_unit;
        } elseif ($result->information_grade === 'BC') {
            $result->information_point = $bc * $result->information_unit;
        } elseif ($result->information_grade === 'C') {
            $result->information_point = $c * $result->information_unit;
        } elseif ($result->information_grade === 'CD') {
            $result->information_point = $cd * $result->information_unit;
        } elseif ($result->information_grade === 'D') {
            $result->information_point = $d * $result->information_unit;
        } elseif ($result->information_grade === 'E') {
            $result->information_point = $e * $result->information_unit;
        } else {
            $result->information_point = $f * $result->information_unit;
        }

        //MIS POINT

        if ($result->mis_grade === 'A') {
            $result->mis_point = $a * $result->mis_unit;
        } elseif ($result->mis_grade === 'AB') {
            $result->mis_point = $ab * $result->mis_unit;
        } elseif ($result->mis_grade === 'B') {
            $result->mis_point = $b * $result->mis_unit;
        } elseif ($result->mis_grade === 'BC') {
            $result->mis_point = $bc * $result->mis_unit;
        } elseif ($result->mis_grade === 'C') {
            $result->mis_point = $c * $result->mis_unit;
        } elseif ($result->mis_grade === 'CD') {
            $result->mis_point = $cd * $result->mis_unit;
        } elseif ($result->mis_grade === 'D') {
            $result->mis_point = $d * $result->mis_unit;
        } elseif ($result->mis_grade === 'E') {
            $result->mis_point = $e * $result->mis_unit;
        } else {
            $result->mis_point = $f * $result->mis_unit;
        }

        //COMPUTER POINT

        if ($result->computer_grade === 'A') {
            $result->computer_point = $a * $result->computer_unit;
        } elseif ($result->computer_grade === 'AB') {
            $result->computer_point = $ab * $result->computer_unit;
        } elseif ($result->computer_grade === 'B') {
            $result->computer_point = $b * $result->computer_unit;
        } elseif ($result->computer_grade === 'BC') {
            $result->computer_point = $bc * $result->computer_unit;
        } elseif ($result->computer_grade === 'C') {
            $result->computer_point = $c * $result->computer_unit;
        } elseif ($result->computer_grade === 'CD') {
            $result->computer_point = $cd * $result->computer_unit;
        } elseif ($result->computer_grade === 'D') {
            $result->computer_point = $d * $result->computer_unit;
        } elseif ($result->computer_grade === 'E') {
            $result->computer_point = $e * $result->computer_unit;
        } else {
            $result->computer_point = $f * $result->computer_unit;
        }

        $result->tcp = $result->computer_point + $result->mis_point + $result->information_point + $result->project_point + $result->graphics_point + $result->statistics_point;
        $result->tcu = $result->computer_unit + $result->mis_unit + $result->information_unit + $result->project_unit + $result->graphics_unit + $result->statistics_unit;
        $result->gpa = $result->tcp / $result->tcu;


        $result->profile_image = $fileNameToStore;
        $result->save();

        return redirect('/admin')->with('success', 'Student Record Computed Successfully!');
       
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
