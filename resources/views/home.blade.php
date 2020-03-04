@extends('layouts.master')

@section('content')
<div class="">
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
        <div class="First Heading" data-aos="fade-up" data-aos-duration="2000">
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
        <div class="container">
            <div class="row mt-5 pl-5 pr-2">
                <div class="col-md-3 col-sm-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                    data-aos-delay="100" data-aos-duration="1500">
                    <img class="auto-height-img" src="{{asset('img/home/digital-solution-1.png')}}" alt="">
                    <a href="{{route('kornit.dtf', app()->getLocale())}}" class="nav-link">
                        <h4 class="text-center">Direct-to-Fabric</h4>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                    data-aos-delay="200" data-aos-duration="1500">
                    <img class="auto-height-img" src="{{asset('img/home/digital-solution-2.png')}}" alt="">
                    <a href="{{route('kornit.dtg', app()->getLocale())}}" class="nav-link">
                        <h4 class="text-center">Direct-to-Garment</h4>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                    data-aos-delay="300" data-aos-duration="1500">
                    <img class="auto-height-img" src="{{asset('img/home/digital-solution-3.png')}}" alt="">
                    <a href="{{route('melco.intro', app()->getLocale())}}" class="nav-link">
                        <h4 class="text-center">Emboridery</h4>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                    data-aos-delay="400" data-aos-duration="1500">
                    <img class="auto-height-img" src="{{asset('img/home/digital-solution-4.png')}}" alt="">
                    <a href="{{route('inkcups.intro', app()->getLocale())}}" class="nav-link">
                        <h4 class="text-center">Pad Printing</h4>
                    </a>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-md-6" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1500">
                    {{-- <div class="d-flex justify-content-end">
                    <span class="align-bottom" style="font-size:15vw;">S</span>
                    <span class="align-bottom" style="font-size:5vw;">t</span>
                    <span class="align-bottom" style="font-size:5vw;">a</span>
                    <span class="align-bottom" style="font-size:5vw;">r</span>
                    <span class="align-bottom" style="font-size:5vw;">t</span>
                    <span class="align-bottom" style="font-size:5vw;">u</span>
                    <span class="align-bottom" style="font-size:5vw;">p</span>
                </div> --}}
                    <img class="auto-height-img" src="{{asset('img/home/startup.png')}}" alt="">
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-delay="300" data-aos-duration="1500">
                    <h1 style="color:#12f2be;"><strong>START UP</strong></h1>
                    <h4 class="text-secondary lh-4">
                        A startup or start-up is a company or project initiated by an entrepreneur to seek, effectively
                        develop, and validate a
                        scalable business model. While entrepreneurship refers to all new businesses, including
                        self-employment and
                        businesses that never intend to grow big or become registered, startups refer to the new
                        businesses
                        that intend to grow
                    </h4>
                </div>
            </div>
            <div class="row brand pt-5 pb-4" style="background-color:#f4f6f9;">
                <div class="col-md-6 order-md-12" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1500">
                    <img src="{{asset('img/home/brand.png')}}" alt="">
                </div>
                <div class="col-md-6 pl-md-5" data-aos="fade-left" data-aos-delay="300" data-aos-duration="1500">
                    <h1 style="color:#416afe;"><strong>BRAND</strong></h1>
                    <h4 class="text-secondary lh-4">A brand is a name, term, design, symbol or any other feature that
                        identifies one seller's good or service as distinct
                        from those of other sellers.[2][3][4] Brands are used in business, marketing, and advertising
                        for
                        recognition and,
                        importantly, to create and store value as brand equity for the object identified, to the benefit
                        of
                        the brand's
                        customers, its owners and shareholders.</h4>
                </div>

            </div>

            <div class="row mt-5">
                <div class="col-md-6" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1500">
                    <img class="auto-height-img" src="{{asset('img/home/e-commerce.png')}}" alt="">
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-delay="300" data-aos-duration="1500">
                    <h1 style="color:#14c1f7;"><strong>E-commerce</strong></h1>
                    <h4 class="text-secondary lh-4">E-commerce (electronic commerce) is the activity of electronically
                        buying or selling of products on online services or
                        over the Internet. Electronic commerce draws on technologies such as mobile commerce, electronic
                        funds transfer, supply
                        chain management, Internet marketing, online transaction processing, electronic data interchange
                        (EDI), inventory
                        management systems</h4>
                </div>
            </div>

            <div class="row brand pt-5 pb-4" style="background-color:#f4f6f9;">
                <div class="col-md-6 order-md-12" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1500">
                    <img class="auto-height-img" src="{{asset('img/home/industrial.png')}}" alt="">
                </div>
                <div class="col-md-6 pl-sm-5" data-aos="fade-left" data-aos-delay="300" data-aos-duration="1500">
                    <h1 style="color:#1c2f71;"><strong>Industrial</strong></h1>
                    <h4 class="text-secondary lh-4">An industry is a sector that produces goods or related services
                        within
                        an economy. The major source of revenue of a
                        group or company is an indicator of what industry it should be classified in.[2] When a large
                        corporate group has
                        multiple sources of revenue generation, it is considered to be working in different industries.
                        The
                        manufacturing
                        industry</h4>
                </div>
            </div>

            <div class="row mt-6"
                style="background-image: url('{{asset('img/home/woman.png')}}'); background-size: cover; background-repeat: no-repeat; ">
                <div class="col-md-5"> </div>
                <div class="col-md-7 d-flex flex-column" style="color:#416afe;">
                    <div class="mt-6" style="font-size:3vw; margin-top:30px;"><span>MORE APPLICATIONS</span></div>
                    <div class="pt-4">
                        <div class="cate-heading">Direct-to-Fabric</div>
                        <div class="row mt-1">
                            @foreach ($fabrics as $product)
                            <div class="col-md-4">
                                <div>
                                    <a href="{{app()->getLocale()}}/product/{{$product->id}}" class="small-product">
                                        <img style=""
                                            src="{{Voyager::image($product->thumbnail('cropped','image')) ?? asset('img/products/noavailable.jpg') }}"
                                            alt="{{$product->name}}">
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="pt-4">
                        <div class="cate-heading">Direct-to-Garment</div>
                        <div class="row mt-1">
                            @foreach ($garments as $product)
                            <div class="col-md-4">
                                <div>
                                    <a href="{{app()->getLocale()}}/product/{{$product->id}}" class="small-product">
                                        <img style=""
                                            src="{{Voyager::image($product->thumbnail('cropped','image')) ?? asset('img/products/noavailable.jpg') }}"
                                            alt="{{$product->name}}">
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="pt-4">
                        <div class="cate-heading">Embroidery</div>
                        <div class="row mt-1">
                            @foreach ($embroideries as $product)
                            <div class="col-md-4">
                                <div>
                                    <a href="{{app()->getLocale()}}/product/{{$product->id}}" class="small-product">
                                        <img style=""
                                            src="{{Voyager::image($product->thumbnail('cropped','image')) ?? asset('img/products/noavailable.jpg') }}"
                                            alt="{{$product->name}}">
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="pt-4">
                        <div class="cate-heading">Pad Printing</div>
                        <div class="row mt-1">
                            @foreach ($pads as $product)
                            <div class="col-md-4">
                                <div>
                                    <a href="{{app()->getLocale()}}/product/{{$product->id}}" class="small-product">
                                        <img style=""
                                            src="{{Voyager::image($product->thumbnail('cropped','image')) ?? asset('img/products/noavailable.jpg') }}"
                                            alt="{{$product->name}}">
                                    </a>
                                </div>
                            </div>
                            @endforeach
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
</div>
@endsection