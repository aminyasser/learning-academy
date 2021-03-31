@extends('admin.layout')

@section('content')
<div class="container py-5">
    @include('admin.inc.errors')
    
    <h4>Courses / Edit On {{$course->name}}</h4>
     
    <form action="{{route('admin.courses.update')}}" method="post" enctype="multipart/form-data">
        @csrf
         <input type="hidden" name="id" value="{{$course->id}}">
         <div class="form-group">

            <select class="form-control py-2" name="category_id">
               @foreach ($cats as $c)
               
               <option value="{{$c->id}}" @if($course->category_id == $c->id ) selected @endif >{{$c->name}}</option>
               
               @endforeach
             </select>
        </div>
        <div class="form-group">
        <select class="form-control py-2" name="trainer_id">
           
          @foreach ($trainers as $c)
          
          <option value="{{$c->id}}" @if($course->trainer_id == $c->id ) selected @endif>{{$c->name}}</option>
          
          @endforeach
         
        </select>
      </div>
       
       <div class="form-group">
           <label>Name:</label>
          <input class="form-control" type="text" name="name" value="{{ $course->name}}">
       </div>
       <div class="form-group">
          <label>Desc:</label>
          <input class="form-control" type="text" name="desc" value="{{ $course->desc}}">
      </div>
      <div class="form-group">
          <label>Content:</label>
          <textarea class="form-control" type="text" name="content" cols="30" rows="10"> {{ $course->content}} </textarea>
      </div>
      <div class="form-group">
          <label>Price:</label>
          <input class="form-control" type="text" name="price" value="{{ $course->price}}">
      </div>
    <img src="{{asset('user/uploads/courses/' . $course->img)}}" height="100px" alt="">
        <div class="form-group">
            <label>Img:</label>
            <input class="form-control-file" type="file" name="img">
        </div>
 

        <input class="btn btn-info" type="submit" value="Update">

    </form>
 
</div>
@endsection