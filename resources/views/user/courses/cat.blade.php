@extends('user.layout')


@section('content')
    
    
    

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Our Courses</h2>
                        <p>Home<span>/</span>Courses<span>/</span>{{$category->name}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--::review_part start::-->
    <section class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>popular courses</p>
                        <h2>Special Courses</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($courses as $c)
                    
               
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="{{asset('user/uploads/courses/' . $c->img )}}" class="special_img" alt="">
                        <div class="special_cource_text">
                        <a href=" {{route('user.cat' , $c->category->id)}} " class="btn_4">{{$c->category->name}}</a>
                            <h4> ${{$c->price}} </h4>
                            <a href="{{route('user.courseShow' , [$c->category->id , $c->id])}}"><h3>{{$c->name}}</h3></a>
                            <p>{{$c->desc}}</p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="{{asset('user/uploads/trainers/' . $c->trainer->img)}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5> {{$c->trainer->name}} </h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="{{asset('user/img')}}/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="{{asset('user/img')}}/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="{{asset('user/img')}}/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="{{asset('user/img')}}/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="{{asset('user/img')}}/icon/star.svg" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
             
                @endforeach 
                 <br>
                <div class="py-3 text-center m-auto d-flex justify-content-center">
                    {{$courses->render()}}
                </div>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->
     
   
@endsection