<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class TeacherController extends Controller
{

    public function addnotes()
    {
        return view('teacher.addnotes');
    }
    //
    public function submitNotes(Request $request)
{
    $notes=new Note();
    $notes->subject=$request->sub;
    $notes->course=$request->course;
    $notes->branch=$request->branch;
    $notes->Subject_Description=$request->desc;
    $notes->course_detail=$request->cd;
    if ($request->hasFile('Imgname')) {
        $image = $request->file('Imgname');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('Product/');
        $image->move($destinationPath, $name);
        $notes->notes_file=$name;
      }
      $notes->save();
      return redirect()->back();

}
public function showNotes()
{
    $notes=Note::all();
    return view('teacher.viewnotes',compact('notes'));

}
}

