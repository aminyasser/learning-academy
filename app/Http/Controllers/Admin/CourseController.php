<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Course;
use App\Http\Controllers\Controller;
use App\Trainer;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() {
        
        $data['courses']= Course::select('id' , 'name' , 'price' , 'img')
        ->orderBy('id' , 'DESC')->paginate(6);
        return view('admin.courses.index')->with($data);
    }
    public function create() {
  
        $data['cats'] = Category::select('id' , 'name')->get();
        $data['trainers'] = Trainer::select('id' , 'name')->get();

       return view('admin.courses.create')->with($data);
   }

   public function store(Request $request)
   {
       $data = $request->validate( [
             
           'name' => 'required|string|max:60',
           'desc' => 'required|string|max:191',
           'content' => 'required|string',
           'price' => 'required|integer',
           'category_id' => 'required|exists:categories,id',
           'trainer_id' => 'required|exists:trainers,id',
           'img' => 'required|image',
      ] );
     
       
      $img = $request->file('img');
      $ext = $img->getClientOriginalExtension();
      $name = 'courses-' . uniqid() .".$ext" ;
      $img->move(public_path('user/uploads/courses') , $name) ;

      $data['img'] = $name;
      
      Course::create($data);
       

       return redirect(route('admin.courses.index'));
   }


   public function edit($id)
   {     
    $data['cats'] = Category::select('id' , 'name')->get();
    $data['trainers'] = Trainer::select('id' , 'name')->get();
       $data['course'] = Course::findOrFail($id);
       return view('admin.courses.edit')->with($data);
   }

   public function update(Request $request)
   {
     
    $data = $request->validate( [
             
        'name' => 'required|string|max:60',
        'desc' => 'required|string|max:191',
        'content' => 'required|string',
        'price' => 'required|integer',
        'category_id' => 'required|exists:categories,id',
        'trainer_id' => 'required|exists:trainers,id',
        'img' => 'nullable|image',
   ] );

     $old_name = Course::findOrFail($request->id)->img;

      if($request->hasFile('img')) {
           
        unlink(public_path('user/uploads/courses/') . $old_name);
         
        $img = $request->file('img');
        $ext = $img->getClientOriginalExtension();
        $name = 'trainers-' . uniqid() .".$ext" ;
        $img->move(public_path('user/uploads/courses') , $name) ;
  
        $data['img'] = $name;

          
      } else $data['img'] = $old_name;
  
        
       
       Course::findOrFail($request->id)->update($data);
       

       return redirect(route('admin.courses.index'));
   }

   public function delete($id) {


     $old_name = Course::findOrFail($id)->img;
     unlink(public_path('user/uploads/courses/') . $old_name); 
      
        Course::findOrFail($id)->delete();
        
        
        return back();

   }

}
