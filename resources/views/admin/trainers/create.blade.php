@extends('admin.layout')

@section('content')

     <div class="container py-5">

         @include('admin.inc.errors')
     
         
     
         <form action="{{route('admin.trainers.store')}}" method="post" enctype="multipart/form-data">
             @csrf
     
             <div class="form-group">
                 <label>Name:</label>
                 <input class="form-control" type="text" name="name">
             </div>
             <div class="form-group">
                <label>Spec:</label>
                <input class="form-control" type="text" name="spec">
            </div><div class="form-group">
                <label>Phone:</label>
                <input class="form-control" type="text" name="phone">
            </div><div class="form-group">
                <label>Img:</label>
                <input class="form-control-file" type="file" name="img">
            </div>
     
             <input class="btn btn-info" type="submit" value="Create">
     
         </form>
     </div>


@endsection