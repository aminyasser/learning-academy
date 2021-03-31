<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Course;
use App\SiteContent;
use App\Student;
use App\Test;
use App\Trainer;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
     public function index() {
         
        $data['banner'] = SiteContent::where('name' , 'banner')->first();
        $data['courses']= Course::orderBy('id','DESC')->take(3)->get();

        $data['courses_count'] = Course::count();
        $data['trainers_count'] = Trainer::count();
        $data['students_count'] = Student::count();

        $data['tests']= Test::get();
        
        return view('user.index')->with($data);
             
     }

   
}
