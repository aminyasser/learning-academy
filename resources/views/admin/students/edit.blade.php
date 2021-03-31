@extends('admin.layout')

@section('content')
<div class="container py-5">
    @include('admin.inc.errors')
    
    <h4>Students / Edit On {{$student->name}}</h4>
     
    <form action="{{route('admin.students.update' , $student->id)}}" method="post" enctype="multipart/form-data">
        @csrf
         <input type="hidden" name="id" value="{{$student->id}}">
        <div class="form-group">
            <label>Name:</label>
            <input class="form-control" value="{{$student->name}}" type="text" name="name">
        </div>

        <div class="form-group">
            <label>Spec:</label>
            <input class="form-control" type="text" value="{{$student->spec}}" name="spec">
        </div><div class="form-group">
            <label>Email:</label>
            <input class="form-control" type="email" value="{{$student->email}}" name="email">
        </div>
         
 
          

        <input class="btn btn-info" type="submit" value="Update">

    </form>

</div>
@endsection