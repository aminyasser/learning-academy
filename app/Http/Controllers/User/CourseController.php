<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Category;
use App\Course;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function cat($id) {
    
         $data['category']= Category::findOrFail($id);

         $data['courses'] = Course::where('category_id' , $id)->paginate(6);


         return view('user.courses.cat')->with($data);

    }


    public function show($id , $c_id) {
       
        $data['course'] = Course::findOrFail($c_id);


        return view('user.courses.show')->with($data);

        
    }
}
