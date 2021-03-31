<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function index() {
      
        $data['trainers']= Trainer::select('id' , 'name' , 'phone' , 'spec' , 'img')
        ->orderBy('id' , 'DESC')->get();
        return view('admin.trainers.index')->with($data);
    }
    public function create() {
       return view('admin.trainers.create');
   }

   public function store(Request $request)
   {
       $data = $request->validate( [
             
           'name' => 'required|string|max:60',
           'phone' => 'nullable|string|max:20',
           'spec' => 'required|string|max:191',
           'img' => 'required|image',
      ] );
     
       
      $img = $request->file('img');
      $ext = $img->getClientOriginalExtension();
      $name = 'trainers-' . uniqid() .".$ext" ;
      $img->move(public_path('user/uploads/trainers') , $name) ;

      $data['img'] = $name;
      
      Trainer::create($data);
       

       return redirect(route('admin.trainers.index'));
   }


   public function edit($id)
   {
       $data['trainer'] = Trainer::findOrFail($id);
       return view('admin.trainers.edit')->with($data);
   }

   public function update(Request $request)
   {
    $data = $request->validate( [
             
        'name' => 'required|string|max:60',
        'phone' => 'nullable|string|max:20',
        'spec' => 'required|string|max:191',
        'img' => 'nullable|image',
   ]);


     $old_name = Trainer::findOrFail($request->id)->img;

      if($request->hasFile('img')) {
           
        unlink(public_path('user/uploads/trainers/') . $old_name);
         
        $img = $request->file('img');
        $ext = $img->getClientOriginalExtension();
        $name = 'trainers-' . uniqid() .".$ext" ;
        $img->move(public_path('user/uploads/trainers') , $name) ;
  
        $data['img'] = $name;

          
      } else $data['img'] = $old_name;
  
        
       
       Trainer::findOrFail($request->id)->update($data);
       

       return redirect(route('admin.trainers.index'));
   }

   public function delete($id) {


     $old_name = Trainer::findOrFail($id)->img;
     unlink(public_path('user/uploads/trainers/') . $old_name); 
      
        Trainer::findOrFail($id)->delete();
        
        
        return back();

   }
}
