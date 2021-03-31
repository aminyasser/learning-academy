@extends('admin.layout')

@section('content')

     <div class="container py-5">

         @include('admin.inc.errors')
     
         
     
         <form action="{{route('admin.students.store')}}" method="post">
             @csrf
     
             <div class="form-group">
                 <label>Name:</label>
                 <input class="form-control" type="text" name="name">
             </div>
             <div class="form-group">
                <label>Spec:</label>
                <input class="form-control" type="text" name="spec">
            </div><div class="form-group">
                <label>email:</label>
                <input class="form-control" type="text" name="email">
            </div>
     
             <input class="btn btn-info" type="submit" value="Create">
     
         </form>
     </div>


@endsection