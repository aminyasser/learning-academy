<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
 
     
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

      <div class="container">
        <a class="navbar-brand" href="#">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            {{-- <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li> --}}
            <li class="nav-item active">
              <a class="nav-link mt-2" style="font-weight:600" href=" {{route('admin.cats.index')}} ">Categories</a>
            </li> 
            <li class="nav-item active">
              <a class="nav-link mt-2" style="font-weight:600" href=" {{route('admin.trainers.index')}} ">Trainers</a>
            </li> 
            <li class="nav-item active">
              <a class="nav-link mt-2" style="font-weight:600" href=" {{route('admin.courses.index')}} ">Courses</a>
            </li> 
            <li class="nav-item active">
              <a class="nav-link mt-2" style="font-weight:600" href=" {{route('admin.students.index')}} ">Students</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href=" {{route('admin.logout')}} "><button class="btn btn-danger">Logout</button> </a>
            </li>
            
           
          </ul>
          
          

          
          
        </div>

      </div>
      </nav>