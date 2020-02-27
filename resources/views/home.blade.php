@extends('layouts.master')

@section('content')
<div class="container">
    <div class="d-flex flex-column">        
        <div class="col-md-12" style="padding: 0">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach ($slides as $index => $slide)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$index}}"
                        class="{{$index==0?'active':''}}"></li>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach ($slides as $index => $slide)
                    <div class="carousel-item @if($index==0)active @endif">
                        <img class="d-block w-100" src="{{'storage/' . $slide->image}}" alt="{{$slide->description}}">
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
        <div class="First Heading">
            <div class="d-flex justify-content-center pt-5">
                <h1>GFL Digital Solution</h1>
            </div>
            <div class="d-flex justify-content-center">
                <div class="col-8">
                    <h3 class="text-center">we continuously looking for sustainable solution on different industrial
                        sector, we never compromise on looking for sustainable value to our partners and clients</h3>
                </div>
            </div>
        </div>

        <div class="row mt-5 pl-5 pr-2">
            <div class="col-md-3 col-sm-6 d-flex flex-column justify-content-center">
                <img src="{{asset('img/home/digital-solution-1.png')}}" alt="">
                <a href="#" class="nav-link">
                    <h4 class="text-center">Direct-to-Garment</h4>
                </a>
            </div>
            <div class="col-md-3 col-sm-6 d-flex flex-column justify-content-center">
                <img src="{{asset('img/home/digital-solution-2.png')}}" alt="">
                <a href="#" class="nav-link">
                    <h4 class="text-center">Direct-to-Garment</h4>
                </a>
            </div>
            <div class="col-md-3 col-sm-6 d-flex flex-column justify-content-center">
                <img src="{{asset('img/home/digital-solution-3.png')}}" alt="">
                <a href="#" class="nav-link">
                    <h4 class="text-center">Emboridery</h4>
                </a>
            </div>
            <div class="col-md-3 col-sm-6 d-flex flex-column justify-content-center">
                <img src="{{asset('img/home/digital-solution-4.png')}}" alt="">
                <a href="#" class="nav-link">
                    <h4 class="text-center">Pad Printing</h4>
                </a>
            </div>
        </div>
        <div class="row startup pt-5">
            <div class="col-md-6">
                {{-- <div class="d-flex justify-content-end">
                    <span class="align-bottom" style="font-size:15vw;">S</span>
                    <span class="align-bottom" style="font-size:5vw;">t</span>
                    <span class="align-bottom" style="font-size:5vw;">a</span>
                    <span class="align-bottom" style="font-size:5vw;">r</span>
                    <span class="align-bottom" style="font-size:5vw;">t</span>
                    <span class="align-bottom" style="font-size:5vw;">u</span>
                    <span class="align-bottom" style="font-size:5vw;">p</span>
                </div> --}}
                <img src="{{asset('img/home/startup.png')}}" alt="">
            </div>
            <div class="col-md-6">
                <h2 style="color:#12f2be;font-size:3vw;"><strong>START UP</strong></h2>
                <span style="color:#aaa;font-size:1.8vw;">Start up can never by that easy ! kornti, melco, inkcups
                    niapjciepg lkajljlkajfll lakjdfladjlaksdjal ksdflaksdjflaks djflaksdj flkasd</span>
            </div>
        </div>
        <div class="row brand pt-5 pb-4" style="background-color:#f4f6f9;">
            <div class="col-md-6 pl-5">
                <h2 style="color:#416afe;font-size:3vw;"><strong>BRAND</strong></h2>
                <span style="color:#aaa;font-size:1.8vw;">Start up can never by that easy ! kornti, melco, inkcups
                    niapjciepg lkajljlkajfll lakjdfladjlaksdjal ksdflaksdjflaks djflaksdj flkasd</span>
            </div>
            <div class="col-md-6">
                <img src="{{asset('img/home/brand.png')}}" alt="">
            </div>
        </div>

        <div class="row brand mt-5">
            <div class="col-md-3">
                <img src="{{asset('img/home/e-commerce.png')}}" alt="">
            </div>
            <div class="col-md-9">
                <h2 style="color:#14c1f7;font-size:3vw;"><strong>BRAND</strong></h2>
                <span style="color:#aaa;font-size:1.8vw;">Start up can never by that, inkcups niapjciepg lka ti, melco,
                    inkcups niapjciepg lka ti, melco, inkcups niapjciepg lka ti, melco, inkcups niapjciepg lka ti,
                    melco, inkcups niapjciepg lka vti, melco, inkcups niapjciepg lka</span>
            </div>
        </div>

        <div class="row brand pt-5 pb-4" style="background-color:#f4f6f9;">
            <div class="col-md-6 pl-5">
                <h2 style="color:#213682;font-size:3vw;"><strong>BRAND</strong></h2>
                <span style="color:#aaa;font-size:1.8vw;">Start up can never by that easy ! kornti, melco, inkcups
                    niapjciepg lkajljlkajfll lakjdfladjlaksdjal ksdflaksdjflaks djflaksdj flkasd</span>
            </div>
            <div class="col-md-6">
                <img src="{{asset('img/home/industrial.png')}}" alt="">
            </div>
        </div>

        <div class="row mt-6"
            style="background-image: url('{{asset('img/home/woman.png')}}'); background-size: cover; background-repeat: no-repeat; ">
            <div class="col-md-5"> </div>
            <div class="col-md-7 d-flex flex-column" style="color:#416afe;">
                <div class="mt-6" style="font-size:3vw; margin-top:30px;"><span>MORE APPLICATIONS</span></div>
                <div class="pt-4">
                    <div  class="cate-heading" >Direct-to-Fabric</div>
                    <div class="row mt-1">
                        <div class="col-md-4">
                            <div>
                                <a href="#" class="small-product">
                                    <img style="" src="{{asset('img/products/product1.jpg')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <a href="#" class="small-product">
                                    <img style="" src="{{asset('img/products/product1.jpg')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <a href="#" class="small-product">
                                    <img style="" src="{{asset('img/products/product1.jpg')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-4">
                    <div  class="cate-heading" >Direct-to-Garment</div>
                    <div class="row mt-1">
                        <div class="col-md-4">
                            <div>
                                <a href="#" class="small-product">
                                    <img style="" src="{{asset('img/products/product1.jpg')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <a href="#" class="small-product">
                                    <img style="" src="{{asset('img/products/product1.jpg')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <a href="#" class="small-product">
                                    <img style="" src="{{asset('img/products/product1.jpg')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-4">
                    <div  class="cate-heading" >Embroidery</div>
                    <div class="row mt-1">
                        <div class="col-md-4">
                            <div>
                                <a href="#" class="small-product">
                                    <img style="" src="{{asset('img/products/product1.jpg')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <a href="#" class="small-product">
                                    <img style="" src="{{asset('img/products/product1.jpg')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <a href="#" class="small-product">
                                    <img style="" src="{{asset('img/products/product1.jpg')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-4">
                    <div  class="cate-heading" >Pad Printing</div>
                    <div class="row mt-1">
                        <div class="col-md-4">
                            <div>
                                <a href="#" class="small-product">
                                    <img style="" src="{{asset('img/products/product1.jpg')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <a href="#" class="small-product">
                                    <img style="" src="{{asset('img/products/product1.jpg')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <a href="#" class="small-product">
                                    <img style="" src="{{asset('img/products/product1.jpg')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="container mt-5" style="padding: 8px !important;">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
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
                <div class="col-12 col-sm-6 col-md-3">
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
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="product-img img-fluid" src="{{asset('img/products/product2.jpg')}}"
                                alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">Certified Used Machine</h3>
                        <p class="text-muted text-center">Software Engineer</p>
                        <a href="#" class="btn btn-primary btn-block"><b>Learn more</b></a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="product-img img-fluid" src="{{asset('img/products/product2.jpg')}}"
                                alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">Certified Used Machine</h3>
                        <p class="text-muted text-center">Software Engineer</p>
                        <a href="#" class="btn btn-primary btn-block"><b>Learn more</b></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection