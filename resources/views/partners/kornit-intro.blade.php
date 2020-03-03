@extends('layouts.master')

@section('content')
<div class="container-fluid" style="padding: 0">
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
    <div class="row mt-4 pt-4">
        <div class="col-md">
            <div class="col-md">
                <div class="col-md">
                    <h1>About Kornit Digital</h1>
                    <h5>(NASDAQ: KRNT) is an international manufacturing company based in Israel. It produces high-speed
                        industrial inkject printers, and pigmented ink and chemical products for the garment and
                        apparel, home
                        goods, and textile accessories decorating industry.</h5>
                </div>
            </div>

        </div>
        <div class="col"></div>
    </div>
    <div class="row">

        <div class="col-md-12" style="padding: 20px;">
            <img class="auto-height-img-full" src="{{asset('img/partners/kornit1.png')}}" alt="">
        </div>
        {{-- <h3 class="col-md-push-1">Kornit Digital offer an unique patented <b>Wet-on-Wet</b> Printing solution.
            Garment can go
            direct to Kornit system without a standalone pre-treadment process, which saving more human power, energy,
            and RISK during the printing process</h3> --}}
        <div class="col-md-12" style="padding: 20px;">
            <img class="auto-height-img-full" src="{{asset('img/partners/kornit2.png')}}" alt="">
        </div>
    </div>

    <div class="row" data-aos="fade-up">
        <div class="col-sm">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="product-img img-fluid" src="{{asset('img/products/product2.jpg')}}"
                        alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Avalanche HD6</h3>
                <p class="text-muted text-center">Software Engineer</p>
                <a href="#" class="btn btn-primary btn-block"><b>Learn more</b></a>
            </div>
        </div>
        <div class="col-sm">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="product-img img-fluid" src="{{asset('img/products/product2.jpg')}}"
                        alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Avalanche HD6</h3>
                <p class="text-muted text-center">Software Engineer</p>
                <a href="#" class="btn btn-primary btn-block"><b>Learn more</b></a>
            </div>
        </div>
        <div class="col-sm">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="product-img img-fluid" src="{{asset('img/products/product2.jpg')}}"
                        alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Avalanche HD6</h3>
                <p class="text-muted text-center">Software Engineer</p>
                <a href="#" class="btn btn-primary btn-block"><b>Learn more</b></a>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-3">
        <h3 class="color-secondary">"Successful Story"</h3>
    </div>
    <div class="row">
        <div class="col-md">
            <img src="{{asset('img/partners/printful.png')}}" alt="" class="d-flex mr-3 col-md-6 auto-height-img">
        </div>
        <div class="col-md">
            <h4><b>
                    Printfull.com</b></h4>
            <h4><small>7 Milion Tee Per Year, The Largest Fulfillment Center In US</small></h4>
        </div>
    </div>
    <div class="row justify-content-center mt-3">
        <h3 class="color-secondary">"What's New"</h3>
    </div>
    <div class="row">
        <div class="col-md">
            <img src="{{asset('img/partners/citpe2020.png')}}" alt="" class="d-flex mr-3 col-md-6 auto-height-img">
        </div>
        <div class="col-md">
            <h4><b>
                    CUTPE2020</b></h4>
            <h4><small>The Largest Exhibition For Printing</small></h4>
        </div>
    </div>

</div>
@endsection