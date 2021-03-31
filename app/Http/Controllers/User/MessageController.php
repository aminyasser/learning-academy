<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Message;
use App\Newsletter;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function newsletter(Request $req) {
    
         $data = $req->validate( [
              
              'email' => 'required|email'
         ]
         );
         Newsletter::create($data);

         return back();
    }
    public function contact(Request $req) {
    
        $data = $req->validate( [
             
             'name' => 'required|string|max:191',
             'email' => 'required|email',
             'subject' => 'nullable|string|max:191',
             'message' => 'required|string|max:10000',
             
        ]);
        Message::create($data);

        return back()->withSuccess('IT WORKS! The Message was Reach Succsessfuly');
   }

   public function enroll(Request $req) {
    
    $data = $req->validate( [
         
         'name' => 'nullable|string|max:191',
         'email' => 'required|email',
         'spec' => 'nullable|string|max:191',
         'course_id' => 'required|exists:courses,id',
         
    ]);

     $old_student = Student::select('id')->where('email', $data['email'])->first();

     if($old_student == null) {
          
          $student =   Student::create([
            'name' => $data['name'] ,
            'email' => $data['email'] ,
            'spec' => $data['spec'] ,
           
            ]);  // bnakhod object mn dah 3shan nakhod meno id el student
         
             // 3shan n7ot fel pivot
     
         $student_id = $student->id;

     } else { $student_id = $old_student->id; 
          
         if($data['name'] !== null) 
         $old_student->update(['name' => $data['name']]);

         if($data['spec'] !== null) 
         $old_student->update(['spec' => $data['spec']]);
     
     
     }




    DB::table('course_student')->insert([
        'course_id' => $data['course_id'] ,
        'student_id' => $student_id,
        'created_at'=> now(),
        'updated_at'=> now()
    ]);
    

    return back()->withSuccess('IT WORKS! You Enrolled Succsessfuly');
}
}
