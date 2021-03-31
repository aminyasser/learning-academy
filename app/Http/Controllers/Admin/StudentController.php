<?php

namespace App\Http\Controllers\Admin;

use App\Course;
use App\Http\Controllers\Controller;
use App\Student;
// use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule as ValidationRule;
use Illuminate\Validation\Rule;


class StudentController extends Controller
{
    public function index() {
      
        $data['students']= Student::select('id' , 'name' , 'email' , 'spec')
        ->orderBy('id' , 'DESC')->paginate(10);
        return view('admin.students.index')->with($data);
    }
    public function create() {
       return view('admin.students.create');
   }

   public function store(Request $request)
   {
       $data = $request->validate( [
             
           'name' => 'nullable|string|max:60',
           'email' => 'required|string|max:191|unique:students',
           'spec' => 'nullable|string|max:191',
      ] );
     
      
      Student::create($data);
        

       return redirect(route('admin.students.index'));
   }


   public function edit($id)
   {
       $data['student'] = Student::findOrFail($id);
       return view('admin.students.edit')->with($data);
   }

   public function update(Request $request , $id)
   {
    $data = $request->validate( [
           
        'name' => 'nullable|string|max:60',
        'email' => ['required','string' , 'max:191' , Rule::unique('students')->ignore($id) ], 
        'spec' => 'nullable|string|max:191',
   ]);
        
    //   way to ignore the id in update unique
       
       Student::findOrFail($request->id)->update($data);
       

       return redirect(route('admin.students.index'));
   }

   public function delete($id) {

      
        Student::findOrFail($id)->delete();
        
        
        return back();

   }

   public function showCourses($id) {
      
      $data['courses'] = Student::findOrFail($id)->courses;
      
      $data['student'] = Student::findOrFail($id);
      
    //   relation between student and courses to get all courses 

      return view('admin.students.showCourses')->with($data);

       
   }

   public function approve($id , $c_id) {
      
        DB::table('course_student')->where('student_id' , $id)->where('course_id' , $c_id)->update([
               
              'status' => 'approve'
  
        ]);
         return back();
   }

   public function reject($id , $c_id) {
      
    DB::table('course_student')->where('student_id' , $id)->where('course_id' , $c_id)->update([
           
          'status' => 'reject'

    ]);
    return back();
     
  }

   public function addCourse($id) {
   
         $data['student_id'] = $id;
         $data['student'] = Student::select('name')->where('id' , $id)->first();

         $data['courses'] = Course::select('id' , 'name')->get();
         
      return view('admin.students.addCourse')->with($data);
          
   }

   public function storeCourse($id , Request $req) {
   
       $data = $req->validate([
        
           'course_id' => 'required|exists:courses,id', 

       ]);

       DB::table('course_student')->insert([
            'course_id' => $data['course_id'],
            'student_id' => $id,
       ]);
      
       return redirect(route('admin.students.showCourses' , $id));
        
   }


}
