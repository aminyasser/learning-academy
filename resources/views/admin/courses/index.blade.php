@extends('admin.layout')

@section('content')
     
    <div class="text-center py-2">
        <h1>Courses</h1>
    <a class="btn btn-success" href="{{route('admin.courses.create')}}">Add New</a>
    </div>
            
   <div class="container py-5">
       
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Img</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            
            <th scope="col">Actions</th>
          
          </tr>
        </thead>
        <tbody>
            @foreach ($courses as $t)
            <tr>
                <th scope="row"> {{$loop->iteration}} </th>
            <td> <img src="{{asset('user/uploads/courses/' . $t->img)}}" alt="" style="height: 50px; width:50px"></td>
                <td> {{$t->name}}</td>
                <td> 
                 
                    ${{$t->price}}

                 </td>
              


                <td>
                   
                     <a class="btn btn-sm btn-info" href="{{route('admin.courses.edit' , $t->id)}}">Edit</a>
                     <a class="btn btn-sm btn-danger" href="{{route('admin.courses.delete' , $t->id)}}">Delete</a>


                </td>
              
              </tr>
            @endforeach
         
            <div class="py-3 text-center m-auto d-flex justify-content-center">
              {{$courses->render()}}
          </div>
        </tbody>
      </table>


   </div>
    
@endsection