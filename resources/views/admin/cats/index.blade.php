@extends('admin.layout')

@section('content')
     
    <div class="text-center py-2">
        <h1>Categories</h1>
    <a class="btn btn-success" href="{{route('admin.cats.create')}}">Add New</a>
    </div>
            
   <div class="container py-5">
       
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Actions</th>
          
          </tr>
        </thead>
        <tbody>
            @foreach ($cats as $cat)
            <tr>
                <th scope="row"> {{$loop->iteration}} </th>
                <td> {{$cat->name}}</td>
                <td>
                   
                     <a class="btn btn-sm btn-info" href="{{route('admin.cats.edit' , $cat->id)}}">Edit</a>
                     <a class="btn btn-sm btn-danger" href="{{route('admin.cats.delete' , $cat->id)}}">Delete</a>


                </td>
              
              </tr>
            @endforeach
         
          
        </tbody>
      </table>


   </div>
    
@endsection