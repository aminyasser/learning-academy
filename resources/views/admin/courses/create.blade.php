@extends('admin.layout')

@section('content')

     <div class="container py-5">

         @include('admin.inc.errors')
     
         
     
         <form action="{{route('admin.courses.store')}}" method="post" enctype="multipart/form-data">
             @csrf
           
              <div class="form-group">

                  <select class="form-control py-2" name="category_id">
                     @foreach ($cats as $c)
                     
                     <option value="{{$c->id}}">{{$c->name}}</option>
                     
                     @endforeach
                   </select>
              </div>
              <div class="form-group">
              <select class="form-control py-2" name="trainer_id">
                 
                @foreach ($trainers as $c)
                
                <option value="{{$c->id}}">{{$c->name}}</option>
                
                @endforeach
               
              </select>
            </div>
             
             <div class="form-group">
                 <label>Name:</label>
                 <input class="form-control" type="text" name="name">
             </div>
             <div class="form-group">
                <label>Desc:</label>
                <input class="form-control" type="text" name="desc">
            </div>
            <div class="form-group">
                <label>Content:</label>
                <textarea class="form-control" type="text" name="content" cols="30" rows="10"> </textarea>
            </div>
            <div class="form-group">
                <label>Price:</label>
                <input class="form-control" type="text" name="price">
            </div>
            <div class="form-group">
                <label>Img:</label>
                <input class="form-control-file" type="file" name="img">
            </div>
     
             <input class="btn btn-info" type="submit" value="Create">
     
         </form>
     </div>


@endsection