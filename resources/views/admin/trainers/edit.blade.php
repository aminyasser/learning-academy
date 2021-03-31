@extends('admin.layout')

@section('content')
<div class="container py-5">
    @include('admin.inc.errors')
    
    <h4>Trainers / Edit On {{$trainer->name}}</h4>
     
    <form action="{{route('admin.trainers.update')}}" method="post" enctype="multipart/form-data">
        @csrf
         <input type="hidden" name="id" value="{{$trainer->id}}">
        <div class="form-group">
            <label>Name:</label>
            <input class="form-control" value="{{$trainer->name}}" type="text" name="name">
        </div>

        <div class="form-group">
            <label>Spec:</label>
            <input class="form-control" type="text" value="{{$trainer->spec}}" name="spec">
        </div><div class="form-group">
            <label>Phone:</label>
            <input class="form-control" type="text" value="{{$trainer->phone}}" name="phone">
        </div>
         
    <img src="{{asset('user/uploads/trainers/' . $trainer->img)}}" height="100px" alt="">
        <div class="form-group">
            <label>Img:</label>
            <input class="form-control-file" type="file" name="img">
        </div>
 

        <input class="btn btn-info" type="submit" value="Update">

    </form>

</div>
@endsection