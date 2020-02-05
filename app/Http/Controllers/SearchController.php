<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    //

    public function check()
    {
        return view('check');
    }

    
    public function search()
    {
        return view('search');
    }

    function checks(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('users')
         ->where('name', 'like', '%'.$query.'%')
         ->orWhere('matric_number', 'like', '%'.$query.'%')
         ->orWhere('email', 'like', '%'.$query.'%')
         ->orWhere('phone', 'like', '%'.$query.'%')
         ->orWhere('department', 'like', '%'.$query.'%')
         ->orderBy('id', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('users')
         ->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
        <td>'.$row->name.'</td>
         <td>'.$row->matric_number.'</td>
         <td>'.$row->department.'</td>
         <td>'.$row->school.'</td>
         <td>'.$row->phone.'</td>
         <td>'.$row->email.'</td>
         <td>'.$row->age.'</td>
         <td><a href="/admin/result/'.$row->id.'">COMPUTE RESULT</a></td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('users')
         ->where('name', 'like', '%'.$query.'%')
         ->orWhere('matric_number', 'like', '%'.$query.'%')
         ->orWhere('email', 'like', '%'.$query.'%')
         ->orWhere('phone', 'like', '%'.$query.'%')
         ->orWhere('department', 'like', '%'.$query.'%')
         ->orderBy('id', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('users')
         ->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
        <td><a href="/admin/details/'.$row->id.'">'.$row->name.'</a></td>
         <td>'.$row->matric_number.'</td>
         <td>'.$row->department.'</td>
         <td>'.$row->school.'</td>
         <td>'.$row->phone.'</td>
         <td>'.$row->email.'</td>
         <td><a href="/admin/edit-result/'.$row->id.'">EDIT RESULT</a></td>
         <td><a href="/admin/delete/'.$row->id.'">DELETE RESULT</a></td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }

    function profile(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('users')
         ->where('name', 'like', '%'.$query.'%')
         ->orWhere('matric_number', 'like', '%'.$query.'%')
         ->orWhere('email', 'like', '%'.$query.'%')
         ->orWhere('phone', 'like', '%'.$query.'%')
         ->orWhere('department', 'like', '%'.$query.'%')
         ->orderBy('id', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('users')
         ->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
        <td>'.$row->name.'</td>
         <td>'.$row->matric_number.'</td>
         <td>'.$row->department.'</td>
         <td>'.$row->school.'</td>
         <td>'.$row->phone.'</td>
         <td>'.$row->email.'</td>
         <td><a href="/admin/edit/'.$row->id.'">EDIT PROFILE</a></td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}
