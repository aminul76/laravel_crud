<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\crud;
class AdminController extends Controller
{
   public function added()
   {
   	return view('layouts.added');
   }
   public function add(Request $request)
   {  

      //variable=new model
      $insert=new crud;
      //variable->mysql database name=$request->form name
      $insert->FirstName=$request->First;
      $insert->LastName=$request->Last;
      $insert->email=$request->email;
      $insert->save();
      //redirect the user to their previous location, such as when a submitted form is invalid. You may do so by using the global back helper function.
      //here not use view
      return redirect('/')->with('message','Updated successfully.');
      
   }
   public function vi()
   {
      //varible=model::all();
      $vs=crud::all();
      //this mean select all
      return view('/home',['v'=>$vs]);
      //['v=>$vs'] means $vs all put v; 
      //we can use v another pasge that all select;
   }

   public function edit($id)
   {
      //variable=mode name::where ('database id' route send id)
      $edit=crud::where('id',$id)->first();
      return view('layouts.edit',['v'=>$edit]);
    
   }
   public function update(Request $request)
   {
      //
     $edit=crud::find($request->id);
      $edit->FirstName=$request->First;
      $edit->LastName=$request->Last;
      $edit->email=$request->email;
      $edit->save();
      return redirect('/')->with('message','Updated successfully.');
   }
   public function delete($id)
   {
      $d=crud::find($id);
      $d->delete();
      return redirect('/')->with('message','delete data succesful');
   }

   public function master()
   {
      return view('layouts.master');
   }
  
}
