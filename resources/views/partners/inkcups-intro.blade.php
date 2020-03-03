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
    </div>
</div>
<div class="container">
    <div class="row justify-content-center pt-5 px-4" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
        <img src="{{asset('img/partners/inkcups.png')}}" alt="">
        <div class="row justify-content-center pt-5 pb-4">
            <h4 class="col-10">Inkcups is a leading supplier and manufacturer of inkjet printing equipment, pad printing
                equipment,
                laser
                plate-makers, inks and all corresponding supplies.</h4>
        </div>
        <img class="w-100" src="{{asset('img/partners/inkcups1.png')}}" alt="">
    </div>
    <div class="row justify-content-center pt-5" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
        <h1 class="mb-4 px-3 text-center" style="color:#8ebe48;"><b>Trusted by Global Brands</b></h1>
        <div class="slider inkcups" style="width:80%" data-slick='{"slidesToShow": 3, "slidesToScroll": 3}'>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="box-profile">
                    <div class="text-center">
                        <img class="w-100" src="{{asset('img/partners/client1.png')}}" alt="User profile picture">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="box-profile">
                    <div class="text-center">
                        <img class="w-100" src="{{asset('img/partners/client2.png')}}" alt="User profile picture">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="box-profile">
                    <div class="text-center">
                        <img class="w-100" src="{{asset('img/partners/client3.png')}}" alt="User profile picture">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="box-profile">
                    <div class="text-center">
                        <img class="w-100" src="{{asset('img/partners/client4.png')}}" alt="User profile picture">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="box-profile">
                    <div class="text-center">
                        <img class="w-100" src="{{asset('img/partners/client5.png')}}" alt="User profile picture">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="box-profile">
                    <div class="text-center">
                        <img class="w-100" src="{{asset('img/partners/client1.png')}}" alt="User profile picture">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
        <h1 class="mb-4 px-3 text-center" style="color:#8ebe48;"><b>The Benefits of Tagless Printing</b></h1>
    </div>
    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
        <div class="col-md-4">
            <div class="row justify-content-center px-4">
                <img src="{{asset('img/partners/inkcups11.png')}}" alt="">
                <h2 class="w-100 text-center" style="color:#8ebe48;">Lower Your Costs</h2>
                <ul style="font-size: 1.1rem;">
                    <li>Average cost of supplies per print: $0.003</li>
                    <li>Utility consumption: 0.0096KW per printing machine</li>
                    <li>40% fewer printing machines and operators needed with older neck</li>
                    <li>label technology</li>
                </ul>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row justify-content-center px-4">
                <img src="{{asset('img/partners/inkcups12.png')}}" alt="">
                <h2 class="w-100 text-center" style="color:#8ebe48;">Save Time</h2>
                <ul style="font-size: 1.1rem;">
                    <li>Print 800 parts per hour on a single machine (60% faster than with heat transfer)</li>
                    <li>Brand-new graphics (or adjusted graphics/colors) are ready for print in les than 30 minutes</li>
                    <li>No Drying process or additional equipment necessary</li>
                </ul>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row justify-content-center px-4">
                <img src="{{asset('img/partners/inkcups13.png')}}" alt="">
                <h2 class="w-100 text-center" style="color:#8ebe48;">Improve Quality</h2>
                <ul style="font-size: 1.1rem;">
                    <li>Withstand up to 50 industrial washes</li>
                    <li>Soft to the touch tags, even after washing</li>
                    <li>A neck label will stretch with the substrate, won't crack, distort, or break</li>
                    <li>Fine-line text as small as 6pt type</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-5" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
        <div class="col-md-4">
            <div class="row justify-content-center px-4">
                <img src="{{asset('img/partners/inkcups21.png')}}" alt="">
                <h3 class="w-100 text-center" style="color:#8ebe48;">Lower Your Costs</h3>

            </div>
        </div>
        <div class="col-md-4">
            <div class="row justify-content-center px-4">
                <img src="{{asset('img/partners/inkcups22.png')}}" alt="">
                <h3 class="w-100 text-center" style="color:#8ebe48;">Save Time</h3>

            </div>
        </div>
        <div class="col-md-4">
            <div class="row justify-content-center px-4">
                <img src="{{asset('img/partners/inkcups23.png')}}" alt="">
                <h3 class="w-100 text-center" style="color:#8ebe48;">Improve Quality</h3>

            </div>
        </div>
    </div>

    <div class="row justify-content-center py-5" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
        <div class="col-sm-8 text-center">*Brite-on-Dark with Brite-100 Printer is limited to 500 images per hour.
            Standard pad
            printers, which can use Cool Grey Ink(example: red shirt above), will achieve up to 2000 impressions per
            hour.</div>
    </div>
</div>
@endsection