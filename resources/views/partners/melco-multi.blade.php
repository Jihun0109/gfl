@extends('layouts.master')

@section('content')
<div class="container-fluid" style="padding: 0" data-aos="fade-in" data-aos-delay="50" data-aos-duration="1000">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach ($slides as $index => $slide)
            <li data-target="#carouselExampleIndicators" data-slide-to="{{$index}}" class="{{$index==0?'active':''}}">
            </li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach ($slides as $index => $slide)
            <div class="carousel-item @if($index==0)active @endif">
                <img class="d-block w-100" src="{{'../storage/' . $slide->image}}" alt="{{$slide->description}}">
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">

        </a>
        <div class="partners-heading over-lay-single w-50 ml-auto mr-auto pl-3">
            <div class="mask melco-single-mask" style="">
            </div>
            <div class="melco" style="left:20% !important; top: 55% !important;">
                <h2>Melco</h2>
                <h5>Modular Head system EMT16X</h5>
                <button type="button" class="btn btn-flat d-none d-sm-block">Learn More</button>
            </div>
        </div>

    </div>
    <div class="container px-5">
        <div class="row pt-5" data-aos="fade-in" data-aos-delay="50" data-aos-duration="1000">
            <div class="col-md-3  p-5">
                <img src="{{asset('img/partners/melco-logo.png')}}" alt="" class="auto-height-img">
            </div>
            <div class="col-md">
                <h4>
                    A modular embroidery machine system combines the advantages of conventional multi-head embroidery
                    machines with the advantages of conventional single-head embroidery machines. This is done by
                    connection
                    between 2 and 3o single-head machines over a network and controlling them from a single computer.
                    This
                    allows your to..
                </h4>
                <p style="font-size: 1.3rem;"> <img src="{{asset('img/partners/melco-dot.png')}}"
                        style="margin-left: -25px;"> Group machines
                    with just one click and then load the same design on all of
                    them and change settings simultaneously - just like on a conventional multi-head mchine. this
                    minimizes
                    set-up times.
                </p>
                <p style="font-size: 1.3rem;"> <img src="{{asset('img/partners/melco-dot.png')}}"
                        style="margin-left: -25px;"> To have all machine produce independently of each other = just like
                    a
                    single-head machine. So when one machine is at a standstill, all other machines continue to product.
                </p>
                <p style="font-size: 1.3rem;"> <img src="{{asset('img/partners/melco-dot.png')}}"
                        style="margin-left: -25px;"> Minimize downtime so drastically that your productivity can
                    increase by
                    up to 100%.
                </p>
            </div>
        </div>
        <div class="row pt-5" data-aos="fade-in" data-aos-delay="50" data-aos-duration="1000">
            <div class="col-md-3 p-5">
                <img src="{{asset('img/partners/melco-graph.png')}}" alt="" class="auto-height-img">
            </div>
            <div class="col-md">
                <h4>
                    <b>Up to 100% more productive than conventional multi-head embroidery machines</b>
                </h4>
                <p style="font-size: 1.3rem;"> <img src="{{asset('img/partners/melco-dot.png')}}"
                        style="margin-left: -25px;">
                    With single-head machines, a much higher stitching speed of up to 1500 SPM is possible. Unlike a
                    multi-head machine, only one hoop needs to be moved and this lower weight can be moved faster.
                </p>
                <p style="font-size: 1.3rem;"> <img src="{{asset('img/partners/melco-dot.png')}}"
                        style="margin-left: -25px;">Instead of stopping the whole production line, only one machine
                    stopss
                    when a thread or needle breaks - solving the problem does not require the aggravation of other
                    machines.
                </p>

            </div>
        </div>

        <div class="row pt-5" data-aos="fade-in" data-aos-delay="50" data-aos-duration="1000">
            <div class="col-md-3 p-5">
                <img src="{{asset('img/partners/melco-cross.png')}}" alt="" class="auto-height-img">
            </div>
            <div class="col-md">
                <h4>
                    <b>Up to 100% more productive than conventional multi-head embroidery machines</b>
                </h4>
                <p style="font-size: 1.3rem;"> <img src="{{asset('img/partners/melco-dot.png')}}"
                        style="margin-left: -25px;">
                    With single-head machines, a much higher stitching speed of up to 1500 SPM is possible. Unlike a
                    multi-head machine, only one hoop needs to be moved and this lower weight can be moved faster.
                </p>
                <p style="font-size: 1.3rem;"> <img src="{{asset('img/partners/melco-dot.png')}}"
                        style="margin-left: -25px;">Instead of stopping the whole production line, only one machine
                    stopss
                    when a thread or needle breaks - solving the problem does not require the aggravation of other
                    machines.
                </p>

            </div>
        </div>
        <div class="row pt-5" data-aos="fade-in" data-aos-delay="50" data-aos-duration="1000">
            <div class="col-md-3 p-5">
                <img src="{{asset('img/partners/melco-adjust.png')}}" alt="" class="auto-height-img">
            </div>
            <div class="col-md">
                <h4>
                    <b>Up to 100% more productive than conventional multi-head embroidery machines</b>
                </h4>
                <p style="font-size: 1.3rem;"> <img src="{{asset('img/partners/melco-dot.png')}}"
                        style="margin-left: -25px;">
                    With single-head machines, a much higher stitching speed of up to 1500 SPM is possible. Unlike a
                    multi-head machine, only one hoop needs to be moved and this lower weight can be moved faster.
                </p>
                <p style="font-size: 1.3rem;"> <img src="{{asset('img/partners/melco-dot.png')}}"
                        style="margin-left: -25px;">Instead of stopping the whole production line, only one machine
                    stopss
                    when a thread or needle breaks - solving the problem does not require the aggravation of other
                    machines.
                </p>

            </div>
        </div>
        <div class="row pt-5" data-aos="fade-in" data-aos-delay="50" data-aos-duration="1000">
            <div class="col-md-3  p-5">
                <img src="{{asset('img/partners/melco-growth.png')}}" alt="" class="auto-height-img">
            </div>
            <div class="col-md">
                <h4>
                    <b>Up to 100% more productive than conventional multi-head embroidery machines</b>
                </h4>
                <p style="font-size: 1.3rem;"> <img src="{{asset('img/partners/melco-dot.png')}}"
                        style="margin-left: -25px;">
                    With single-head machines, a much higher stitching speed of up to 1500 SPM is possible. Unlike a
                    multi-head machine, only one hoop needs to be moved and this lower weight can be moved faster.
                </p>
                <p style="font-size: 1.3rem;"> <img src="{{asset('img/partners/melco-dot.png')}}"
                        style="margin-left: -25px;">Instead of stopping the whole production line, only one machine
                    stopss
                    when a thread or needle breaks - solving the problem does not require the aggravation of other
                    machines.
                </p>

            </div>
        </div>
        <div class="row pt-5" data-aos="fade-in" data-aos-delay="50" data-aos-duration="1000">
            <div class="col-md-3  p-5">
                <img src="{{asset('img/partners/melco-tees.png')}}" alt="" class="auto-height-img">
            </div>
            <div class="col-md">
                <h4>
                    <b>Up to 100% more productive than conventional multi-head embroidery machines</b>
                </h4>
                <p style="font-size: 1.3rem;"> <img src="{{asset('img/partners/melco-dot.png')}}"
                        style="margin-left: -25px;">
                    With single-head machines, a much higher stitching speed of up to 1500 SPM is possible. Unlike a
                    multi-head machine, only one hoop needs to be moved and this lower weight can be moved faster.
                </p>
                <p style="font-size: 1.3rem;"> <img src="{{asset('img/partners/melco-dot.png')}}"
                        style="margin-left: -25px;">Instead of stopping the whole production line, only one machine
                    stopss
                    when a thread or needle breaks - solving the problem does not require the aggravation of other
                    machines.
                </p>

            </div>
        </div>
        <div class="row justify-content-center">
            <h3 class="text-center melco-text"><b>Melco more Applications</b></h3>
        </div>
        <div class="pb-5">
            <div class="row justify-content-center pt-5" data-aos="fade-in" data-aos-delay="50"
                data-aos-duration="1000">
                <div class="slider single" style="width:80%" data-slick='{"slidesToShow": 3, "slidesToScroll": 3}'>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="box-profile">
                            <div class="text-center">
                                <img class="w-100" src="{{asset('img/partners/dtg-product.png')}}"
                                    alt="User profile picture">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="box-profile">
                            <div class="text-center">
                                <img class="w-100" src="{{asset('img/partners/dtg-product.png')}}"
                                    alt="User profile picture">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="box-profile">
                            <div class="text-center">
                                <img class="w-100" src="{{asset('img/partners/dtg-product.png')}}"
                                    alt="User profile picture">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="box-profile">
                            <div class="text-center">
                                <img class="w-100" src="{{asset('img/partners/dtg-product.png')}}"
                                    alt="User profile picture">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="box-profile">
                            <div class="text-center">
                                <img class="w-100" src="{{asset('img/partners/dtg-product.png')}}"
                                    alt="User profile picture">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="box-profile">
                            <div class="text-center">
                                <img class="w-100" src="{{asset('img/partners/dtg-product.png')}}"
                                    alt="User profile picture">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="box-profile">
                            <div class="text-center">
                                <img class="w-100" src="{{asset('img/partners/dtg-product.png')}}"
                                    alt="User profile picture">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="box-profile">
                            <div class="text-center">
                                <img class="w-100" src="{{asset('img/partners/dtg-product.png')}}"
                                    alt="User profile picture">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection