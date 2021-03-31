@extends('admin.layout')

@section('content')
     
    <div class="text-center py-2">
        <h1>Students</h1>
    <a class="btn btn-success" href="{{route('admin.students.create')}}">Add New</a>
    </div>
            
   <div class="container py-5">
       
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Spec</th>
            <th scope="col">Actions</th>
          
          </tr>
        </thead>
        <tbody>
            @foreach ($students as $t)
            <tr>
                <th scope="row"> {{$loop->iteration}} </th>
                <td>
                  @if ($t->name !== null)
                  {{$t->name}}
                  @else Not Exist   
                  @endif
                </td>
                <td> 
                
                     {{$t->email}}
                
                 </td>
                <td> {{$t->spec}}</td>


                <td>
                     <a class="btn btn-sm btn-primary" href="{{route('admin.students.showCourses' , $t->id)}}">Show</a>
                     <a class="btn btn-sm btn-info" href="{{route('admin.students.edit' , $t->id)}}">Edit</a>
                     <a class="btn btn-sm btn-danger" href="{{route('admin.students.delete' , $t->id)}}">Delete</a>


                </td>
              
              </tr>
            @endforeach
         
            <div class="py-3 text-center m-auto d-flex justify-content-center">
              {{$students->render()}}
            </div>
          
        </tbody>
      </table>

        
   </div>
   
            
    
@endsection