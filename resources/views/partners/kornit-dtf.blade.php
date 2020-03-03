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
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <div class="partners-heading kornit w-50 ml-auto mr-auto pl-3">
            <h2>Kornit Digital</h2>
            <h5>direct-to-fabric</h5>
            <button type="button" class="btn btn-flat d-none d-sm-block">Learn More</button>
        </div>
    </div>
</div>
<div class="container">
    <div class="row py-5">
        <div class="col-sm-8 row">
            <div class="col-sm-4 pl-4">
                <img class="auto-height-img" src="{{asset('img/partners/kornit-digital-bonding-matters.png')}}" alt="">
            </div>
            <div class="col-sm">
                <h3 class="cornit-text"><b>Direct-to-Fabric</b></h3>
                <p style="font-size:1.2rem;">Kornit introducing the most advanced single-step solution for
                    direct-to-fabric printing. Kornit Presto is a one stop shop with one-step process to every fabric
                    printing aspect and domain. Like its former Allegro, the Kornit Presto eliminates the need for
                    external process steps, enabling you to achieve the best results from PFP (Prepared-For-Print)</p>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="row">
            <div class="col-sm-8 text-center px-5">
                <img src="{{asset('img/partners/kornit-dtf1.png')}}" alt="" class="auto-height-img">
            </div>
            <div class="col-sm-4 p-3">
                <h2 class="cornit-text"><b>Kornit Presto</b></h2>
                <p class="pr-3" style="font-size:1.2rem;">
                    Kornit Presto can offer a unique CLEAN printing (Without any water); product can be printed and cut
                    easily!</p>
            </div>
        </div>
    </div>
    <div class="row justify-content-end">
        <img src="{{asset('img/partners/kornit-dtf2.png')}}" alt="" class="w-100">
    </div>

    <div class="row justify-content-center pt-5" data-aos="fade-in" data-aos-delay="50" data-aos-duration="1000">
        <div class="slider dtg" style="width:80%" data-slick='{"slidesToShow": 3, "slidesToScroll": 3}'>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="box-profile">
                    <div class="text-center">
                        <img class="w-100" src="{{asset('img/partners/dtg-product.png')}}" alt="User profile picture">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="box-profile">
                    <div class="text-center">
                        <img class="w-100" src="{{asset('img/partners/dtg-product.png')}}" alt="User profile picture">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="box-profile">
                    <div class="text-center">
                        <img class="w-100" src="{{asset('img/partners/dtg-product.png')}}" alt="User profile picture">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="box-profile">
                    <div class="text-center">
                        <img class="w-100" src="{{asset('img/partners/dtg-product.png')}}" alt="User profile picture">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="box-profile">
                    <div class="text-center">
                        <img class="w-100" src="{{asset('img/partners/dtg-product.png')}}" alt="User profile picture">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="box-profile">
                    <div class="text-center">
                        <img class="w-100" src="{{asset('img/partners/dtg-product.png')}}" alt="User profile picture">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="box-profile">
                    <div class="text-center">
                        <img class="w-100" src="{{asset('img/partners/dtg-product.png')}}" alt="User profile picture">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="box-profile">
                    <div class="text-center">
                        <img class="w-100" src="{{asset('img/partners/dtg-product.png')}}" alt="User profile picture">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection