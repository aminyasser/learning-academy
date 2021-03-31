<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('user.index');
// })->name('user.home');

Route::namespace('User')->group(function() {
    Route::get('/' , 'HomePageController@index')->name('user.homepage');

    Route::get('/cat/{id}' , 'CourseController@cat')->name('user.cat');
    Route::get('/cat/{id}/course/{c_id}' , 'CourseController@show')->name('user.courseShow');
    
    Route::get('/contact' , 'ContactController@index')->name('user.contact');
    Route::post('/message/newsletter' , 'MessageController@newsletter')->name('user.message.newsletter');
    Route::post('/message/contact' , 'MessageController@contact')->name('user.message.contact');
    Route::post('/message/enroll' , 'MessageController@enroll')->name('user.message.enroll');






});


Route::namespace('Admin')->prefix('dashboard')->group(function() {

    Route::get('/login' , 'AuthController@login')->name('admin.login');
    Route::post('/dologin' , 'AuthController@dologin')->name('admin.doLogin'); 

    
    Route::get('login/github', 'AuthController@redirectToProviderGit')->name('auth.github.redirect');
    Route::get('login/github/callback', 'AuthController@handleProviderCallbackGit')->name('auth.github.callback');

     Route::middleware('admin:admin')->group(function() {

       // fe moshkla el middleare bt3mlha mesh 2abla ye3ml redirect 3ala el home ba3d m a3ml signup

         Route::get('/logout' , 'AuthController@logout')->name('admin.logout'); 
         Route::get('/' , 'HomeController@index')->name('admin.home');

         Route::get('/categories' , 'CategoryController@index')->name('admin.cats.index');
         Route::get('/categories/create' , 'CategoryController@create')->name('admin.cats.create');
         Route::post('/categories/store' , 'CategoryController@store')->name('admin.cats.store');

         Route::get('/categories/edit/{id}' , 'CategoryController@edit')->name('admin.cats.edit');
         Route::post('/categories/update' , 'CategoryController@update')->name('admin.cats.update');

         Route::get('/categories/delete/{id}' , 'CategoryController@delete')->name('admin.cats.delete');


         Route::get('/trainers' , 'TrainerController@index')->name('admin.trainers.index');
         Route::get('/trainers/create' , 'TrainerController@create')->name('admin.trainers.create');
         Route::post('/trainers/store' , 'TrainerController@store')->name('admin.trainers.store');

         Route::get('/trainers/edit/{id}' , 'TrainerController@edit')->name('admin.trainers.edit');
         Route::post('/trainers/update' , 'TrainerController@update')->name('admin.trainers.update');

         Route::get('/trainers/delete/{id}' , 'TrainerController@delete')->name('admin.trainers.delete');

         Route::get('/courses' , 'CourseController@index')->name('admin.courses.index');
         Route::get('/courses/create' , 'CourseController@create')->name('admin.courses.create');
         Route::post('/courses/store' , 'CourseController@store')->name('admin.courses.store');

         Route::get('/courses/edit/{id}' , 'CourseController@edit')->name('admin.courses.edit');
         Route::post('/courses/update' , 'CourseController@update')->name('admin.courses.update');

         Route::get('/courses/delete/{id}' , 'CourseController@delete')->name('admin.courses.delete');
         

         Route::get('/students' , 'StudentController@index')->name('admin.students.index');
         Route::get('/students/create' , 'StudentController@create')->name('admin.students.create');
         Route::post('/students/store' , 'StudentController@store')->name('admin.students.store');

         Route::get('/students/edit/{id}' , 'StudentController@edit')->name('admin.students.edit');
         Route::post('/students/update/{id}' , 'StudentController@update')->name('admin.students.update');

         Route::get('/students/delete/{id}' , 'StudentController@delete')->name('admin.students.delete');
         Route::get('/students/show/{id}' , 'StudentController@showCourses')->name('admin.students.showCourses');
         Route::get('/students/{id}/aprrove/{c_id}' , 'StudentController@approve')->name('admin.students.approve');
         Route::get('/students/{id}/reject/{c_id}' , 'StudentController@reject')->name('admin.students.reject');
         Route::get('/students/{id}/addCourse' , 'StudentController@addCourse')->name('admin.students.addCourse');
         Route::post('/students/{id}/storeCourse' , 'StudentController@storeCourse')->name('admin.students.storeCourse');

         
        
         


     });

      



 
});    









