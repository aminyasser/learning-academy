@extends('admin.layout')

@section('content')
<div class="container py-5">
    @include('admin.inc.errors')

    <form action="{{route('admin.cats.update')}}" method="post">
        @csrf
         <input type="hidden" name="id" value="{{$category->id}}">
        <div class="form-group">
            <label>Name:</label>
            <input class="form-control" value="{{$category->name}}" type="text" name="name">
        </div>

        <input class="btn btn-info" type="submit" value="Update">

    </form>

</div>
@endsection