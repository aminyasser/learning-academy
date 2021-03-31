<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
     public function index() {
     
         $data['cats']= Category::select('id' , 'name')->orderBy('id' , 'DESC')->get();
         return view('admin.cats.index')->with($data);
     }
     public function create() {
        return view('admin.cats.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate( [
              
            'name' => 'required|string|max:191',
       ] );
    
         
        
        Category::create($data);
        

        return redirect(route('admin.cats.index'));
    }


    public function edit($id)
    {
        $data['category'] = Category::findOrFail($id);
        return view('admin.cats.edit')->with($data);
    }

    public function update(Request $request)
    {
        $data = $request->validate( [
              
            'name' => 'required|string|max:191',
       ] );
    
         
        
        Category::findOrFail($request->id)->update($data);
        

        return redirect(route('admin.cats.index'));
    }

    public function delete($id) {
        
         Category::findOrFail($id)->delete();
       

         return back();

    }
}
