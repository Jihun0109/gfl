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
        <div class="partners-heading over-lay-dtg w-50 ml-auto mr-auto pl-3">
            <div class="mask kornit-dtg-mask" style="">
            </div>
            <div class="kornit">
                <h2>Kornit Digital</h2>
                <h5>Direct-to-garment</h5>
                <button type="button" class="btn btn-flat d-none d-sm-block">Learn More</button>
            </div>
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
                <h3><b>About Kornit Digital</b></h3>
                <p style="font-size:1.2rem;">Start printing on garments with the Kornit cutting-edge technology. Choose
                    from a variety of priting solutions matching your every business demand. Enjoy the complete Kornit
                    package offering full support of your printing needs.</p>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-4">
            <div class="row justify-content-center px-4" style="color: #08baf2;"><img
                    src="http://gfl.com/img/partners/dtg1.png" alt="">
                <h2 class="w-100 text-center"><b>Kornit Digital</b></h2>
                <h4>Breeze</h4>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row justify-content-center px-4" style="color: #08baf2;"><img
                    src="http://gfl.com/img/partners/dtg1.png" alt="">
                <h2 class="w-100 text-center"><b>Kornit Digital</b></h2>
                <h4>Storm II</h4>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row justify-content-center px-4" style="color: #08baf2;"><img
                    src="http://gfl.com/img/partners/dtg1.png" alt="">
                <h2 class="w-100 text-center"><b>Kornit Digital</b></h2>
                <h4>Storm Hexa</h4>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row justify-content-center px-4" style="color: #08baf2;"><img
                    src="http://gfl.com/img/partners/dtg1.png" alt="">
                <h2 class="w-100 text-center"><b>Kornit Digital</b></h2>
                <h4>Storm Lite</h4>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row justify-content-center px-4" style="color: #08baf2;"><img
                    src="http://gfl.com/img/partners/dtg1.png" alt="">
                <h2 class="w-100 text-center"><b>Kornit Digital</b></h2>
                <h4>Storm HD6</h4>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row justify-content-center px-4" style="color: #08baf2;"><img
                    src="http://gfl.com/img/partners/dtg1.png" alt="">
                <h2 class="w-100 text-center"><b>Kornit Digital</b></h2>
                <h4>Avalanche HD6</h4>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row justify-content-center px-4" style="color: #08baf2;"><img
                    src="http://gfl.com/img/partners/dtg1.png" alt="">
                <h2 class="w-100 text-center"><b>Kornit Digital</b></h2>
                <h4>Altas</h4>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row justify-content-center px-4" style="color: #08baf2;"><img
                    src="http://gfl.com/img/partners/dtg1.png" alt="">
                <h2 class="w-100 text-center"><b>Kornit Digital</b></h2>
                <h4>Vulcan Plus</h4>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row justify-content-center px-4" style="color: #08baf2;"><img
                    src="http://gfl.com/img/partners/dtg1.png" alt="">
                <h2 class="w-100 text-center"><b>Kornit Digital</b></h2>
                <h4>Avalanche POLY PRO</h4>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row justify-content-center px-4" style="color: #08baf2;"><img
                    src="http://gfl.com/img/partners/dtg1.png" alt="">
                <h2 class="w-100 text-center"><b>Kornit Digital</b></h2>
                <h4>Avalanche DC PRO</h4>
            </div>
        </div>
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