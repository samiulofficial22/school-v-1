<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\ClassModel;

class ClassController extends Controller
{
   public function list(){
    $data['getRecord']= ClassModel::getRecord();
    $data['header_title'] = 'Class List';
    return view('admin.class.list',$data);
   }

   public function add(){
    $data['header_title'] = 'Add Class';
    return view('admin.class.add',$data);

   }

   public function insert(Request $request){
    // dd($request->all());
    $class = new ClassModel;
    $class->name = $request->name;
    $class->status = $request->status;
    $class->created_by = Auth::user()->id;
    $class->save();

    return redirect('admin/class/list')->with('success',"Class Successfully Created");
   }

   public function edit($id){
    $data['getRecord']= ClassModel::getSingle($id);
    if(!empty($data['getRecord'])){
        $data['header_title'] = 'Edit Class';
        return view('admin.class.edit',$data);
    }
    else{
        abort(404);
    }
   }
   public function update($id,Request $request){
    // dd($request->all());

    $save_class = classModel::getSingle($id);
    $save_class->name = $request->name;
    $save_class->status = $request->status;
    $save_class->save();

    return redirect('admin/class/list')->with('success',"Class Successfully updated");
   }

   public function delete($id){
    $delete_class = ClassModel::getSingle($id);
    $delete_class->is_delete = 1;
    $delete_class->save();

    return redirect()->back()->with('success',"Class Successfully deleted");
   }
}
