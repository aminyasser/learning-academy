<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=20 ; $i++)
        {
            DB::table('course_student')->insert([
                'course_id' => rand(1,24),
                'student_id' => rand(1,50),
                'created_at'=> now(),
                'updated_at'=> now()
            ]);
        }
    }
}
