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
        {{-- <div class="melco-heading d-none d-md-block w-50 ml-auto mr-auto"> --}}
        <div class="partners-heading w-50 ml-auto mr-auto pl-3">
            <div class="mask melco-mask" style="">
            </div>
            <div class="melco">
                <h2>Melco</h2>
                <h5>emboridery</h5>
                <button type="button" class="btn btn-flat d-none d-sm-block">Learn More</button>
            </div>
        </div>
    </div>

</div>
<div class="container">
    <div class="row pt-5" data-aos="fade-in" data-aos-delay="50" data-aos-duration="1000">
        <div class="col-md-3">
            <img src="{{asset('img/partners/melco-logo.png')}}" alt="" class="auto-height-img">
        </div>
        <div class="col-md">
            <h4>
                As part of the Swiss family business BERNINA, Melco has been developing innovative embroidery machines
                and
                related software in teh USA and Switzerland since 1972. Melco is also the only embroidery machine
                manufacturer that sells its products directly. The proximity to its customers enables Melco to develop
                products and services that optimally meet the needs of its customers. Melco offers you the following:
            </h4>
        </div>
    </div>
    <div class="row pt-5" data-aos="fade-in" data-aos-delay="50" data-aos-duration="1000">
        <div class="col-md-3">
            <img src="{{asset('img/partners/melco1.png')}}" alt="" class="auto-height-img">
        </div>
        <div class="col-md-9">
            <h3 class="text-danger">The most productive embroidery machine</h3>
            <h4>
                Our modular embroidery machines set standards in productivity, flexibility and ease of use. Save up to
                50% of your production costs and double your productivity compared to conventional embroidery machines.
            </h4>
            <div class="justify-content-end"><button type="button" class="btn btn-danger btn-flat">Learn More</button>
            </div>
        </div>
    </div>

    <div class="row pt-5" data-aos="fade-in" data-aos-delay="50" data-aos-duration="1000">
        <div class="col-md-3">
            <img src="{{asset('img/partners/melco2.png')}}" alt="" class="auto-height-img">
        </div>
        <div class="col-md-9">
            <h3 class="text-danger">Embroidery software and web services</h3>
            <h4>
                As the inventors of the first digitizing software, we have a long tradition of developing world-class
                embroidery software. Today we are the market leader for web services for automation and personalization
                in textile decoration.
            </h4>
            <div class="justify-content-end"><button type="button" class="btn btn-danger btn-flat">Learn More</button>
            </div>
        </div>
    </div>

    <div class="row pt-5" data-aos="fade-in" data-aos-delay="50" data-aos-duration="1000">
        <div class="col-md-3">
            <img src="{{asset('img/partners/melco3.png')}}" alt="" class="auto-height-img">
        </div>
        <div class="col-md-9">
            <h3 class="text-danger">Local Training & Support</h3>
            <h4>
                Our experienced and certified technicians in Hong Kong, Taiwan and China offer you individual training
                and support for our products - at your site, in our training centres and by telephone or remote
                maintenance. We support you competently and
            </h4>
            <div class="justify-content-end"><button type="button" class="btn btn-danger btn-flat">Learn More</button>
            </div>
        </div>
    </div>


    <div class="container pb-5" data-aos="fade-in" data-aos-delay="50" data-aos-duration="1000">
        <div class="row justify-content-center">
            <h3 class="text-danger">Melco more Applications</h3>
        </div>
        <div class="row justify-content-center px-5">
            <div class="col-md">
                <div class="box-profile">
                    <div class="text-center">
                        <img class="product-img img-fluid" src="{{asset('img/products/product2.jpg')}}"
                            alt="User profile picture">
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="box-profile">
                    <div class="text-center">
                        <img class="product-img img-fluid" src="{{asset('img/products/product2.jpg')}}"
                            alt="User profile picture">
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="box-profile">
                    <div class="text-center">
                        <img class="product-img img-fluid" src="{{asset('img/products/product2.jpg')}}"
                            alt="User profile picture">
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="box-profile">
                    <div class="text-center">
                        <img class="product-img img-fluid" src="{{asset('img/products/product2.jpg')}}"
                            alt="User profile picture">
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="box-profile">
                    <div class="text-center">
                        <img class="product-img img-fluid" src="{{asset('img/products/product2.jpg')}}"
                            alt="User profile picture">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection