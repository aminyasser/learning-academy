@extends('admin.layout')

@section('content')
<div class="container py-5">
    
      <div class="text-center py-2">
    <h4>Show <span style="color: red"> {{$student->name}} </span> <span style="font-size: 30px ; font-weight:500 "> {{$courses->count()}} </span> Courses </h4>
    <a class="btn btn-sm btn-info" href="{{route('admin.students.addCourse' , $student->id )}}">Add To Course</a>
      
</div>
  
   

      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Course Img</th>
            <th scope="col">Name</th>
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
                       {{-- 3shan ye3rf ygeb el haga men el pivot --}}
                     @if($t->pivot->status !== 'approve') 
                     <a class="btn btn-sm btn-info" href="{{route('admin.students.approve' , [$student->id , $t->id])}}">Approve</a>
                    @endif
                    @if($t->pivot->status !== 'reject') 
                     <a class="btn btn-sm btn-danger" href="{{route('admin.students.reject' , [$student->id , $t->id])}}">Reject</a>
                      @endif
                </td>
              
              </tr>
            @endforeach
         
          
        </tbody>
      </table>   







</div>
@endsection