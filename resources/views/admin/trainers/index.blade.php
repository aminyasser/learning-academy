@extends('admin.layout')

@section('content')
     
    <div class="text-center py-2">
        <h1>Trainers</h1>
    <a class="btn btn-success" href="{{route('admin.trainers.create')}}">Add New</a>
    </div>
            
   <div class="container py-5">
       
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Img</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Spec</th>
            <th scope="col">Actions</th>
          
          </tr>
        </thead>
        <tbody>
            @foreach ($trainers as $t)
            <tr>
                <th scope="row"> {{$loop->iteration}} </th>
            <td> <img src="{{asset('user/uploads/trainers/' . $t->img)}}" alt="" style="height: 50px; width:50px"></td>
                <td> {{$t->name}}</td>
                <td> 
                  @if ($t->phone !== null)
                     {{$t->phone}}
                  @else Not Exist   
                  @endif
                 </td>
                <td> {{$t->spec}}</td>


                <td>
                   
                     <a class="btn btn-sm btn-info" href="{{route('admin.trainers.edit' , $t->id)}}">Edit</a>
                     <a class="btn btn-sm btn-danger" href="{{route('admin.trainers.delete' , $t->id)}}">Delete</a>


                </td>
              
              </tr>
            @endforeach
         
          
        </tbody>
      </table>


   </div>
    
@endsection