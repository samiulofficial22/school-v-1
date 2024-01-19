<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubjectModel;
use Auth;


class SubjectController extends Controller
{
    public function list(){
        $data['header_title']= 'Subject list';
        $data['getRecord'] = SubjectModel::getRecord();
        return view('admin.subject.list',$data);
    }

    public function add(){
        $data['header_title'] = 'Subject Add';
        return view('admin.subject.add',$data);
    }
    public function insert(Request $request){
        // dd($request->all());

        $subject_save = new SubjectModel;
        $subject_save->name = trim($request->name);
        $subject_save->type = trim($request->type);
        $subject_save->status = trim($request->status);
        $subject_save->created_by = Auth::user()->id;
        $subject_save->save();

        return redirect('admin/subject/list')->with('success',"subject Created successfully");
    }


    public function edit($id){
        $data['getRecord'] = SubjectModel::getSingle($id);
        if(!empty($data['getRecord'])){
            $data['header_title'] = "Edit Subject";
            return view('admin.subject.edit',$data);
        }
        else{
            abort(404);
        }
    }

    public function update($id,Request $request){
        // dd($request->all());
        $up_subject = subjectModel::getSingle($id);
        $up_subject->name = $request->name;
        $up_subject->type = $request->type;
        $up_subject->status = $request->status;
        $up_subject->save();

        return redirect('admin/subject/list')->with('success',"Subject successfully updated.");

    }

    public function delete($id){
        $delete_subject = SubjectModel::getSingle($id);
        $delete_subject->is_delete = 1;
        $delete_subject->save();

        return redirect()->back()->with('success',"Subject delete successfully");
    }

}
