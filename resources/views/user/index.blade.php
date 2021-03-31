@extends('user.layout')

@section('content')
    


    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>{{ json_decode($banner->content)->title }}</h5>
                            <h1>{{ json_decode($banner->content)->subtitle }}</h1>
                            <p>{{ json_decode($banner->content)->desc }}</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
    <section class="feature_part py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xl-3 align-self-center">
                    <div class="single_feature_text ">
                        <h2>Awesome <br> Feature</h2>
                        <p>Set have great you male grass yielding an yielding first their you're
                            have called the abundantly fruit were man </p>
                       
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-layers"></i></span>
                            <h4>Better Future</h4>
                            <p>Set have great you male grasses yielding yielding first their to
                                called deep abundantly Set have great you male</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-new-window"></i></span>
                            <h4>Qualified Trainers</h4>
                            <p>Set have great you male grasses yielding yielding first their to called
                                deep abundantly Set have great you male</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part single_feature_part_2">
                            <span class="single_service_icon style_icon"><i class="ti-light-bulb"></i></span>
                            <h4>Job Oppurtunity</h4>
                            <p>Set have great you male grasses yielding yielding first their to called deep
                                abundantly Set have great you male</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->

   

    <!-- member_counter counter start -->
    <section class="member_counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_member_counter">
                    <span class="counter">{{$courses_count}}</span>
                        <h4>All Courses</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{$students_count}}</span>
                        <h4> All Students</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{$trainers_count}}</span>
                        <h4>All Trainers</h4>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <!-- member_counter counter end -->

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
                                    <img width="10" src="{{asset('user/uploads/trainers/' . $c->trainer->img)}}"
                                    style="height:50px; width:50px" alt="">
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
            </div>
        </div>
    </section>
    <!--::blog_part end::-->

    
    <!--::review_part start::-->
    <section class="testimonial_part py-5">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>tesimonials</p>
                        <h2>Happy Students</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="textimonial_iner owl-carousel">
                        @foreach ($tests as $t)
                            
                        
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>
                                            {{$t->desc}}
                                        </p>
                                        <h4> 
                                            {{$t->name}}
                                        </h4>
                                        <h5>
                                          @if ($t->spec !== null)   
                                            {{$t->spec}}
                                         @endif 
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="{{asset('user/uploads/testmonials/' . $t->img)}}" alt="#">
                                    </div>
                                </div>
                                {{-- <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-xl-2 d-none d-xl-block">
                                    <div class="testimonial_slider_img">
                                        <img src="{{asset('user/img')}}/testimonial_img_1.png" alt="#">
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--::blog_part end::-->

    

    @endsection