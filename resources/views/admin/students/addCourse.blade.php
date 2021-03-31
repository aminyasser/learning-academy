@extends('admin.layout')

@section('content')
<div class="container py-5">
    @include('admin.inc.errors')
    
    <h4>Students / Add Course to {{$student->name}}</h4>
     
    <form action="{{route('admin.students.storeCourse' , $student_id)}}" method="post">
        @csrf
         {{-- <input type="hidden" name="id" value="{{$student_id}}"> --}}
        <div class="form-group">
            <label>Courses:</label>
            <select class="form-control py-2" name="course_id">
                @foreach ($courses as $c)
                
                <option value="{{$c->id}}">{{$c->name}}</option>
                
                @endforeach
              </select>
        </div>

  
         
 
          

        <input class="btn btn-info" type="submit" value="Update">

    </form>

</div>
@endsection