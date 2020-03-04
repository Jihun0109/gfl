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
                <h5>Single Head system EMT16X</h5>
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
                The Melco EMT16X offers you 19 unique advantages for your embroidery business. In the development phase,
                great emphasis was placed on maximum productivity, flexibility and simplicity. The result is an
                incomparable embroidery machine that sets new standards in the industry. Here you will learn more about
                what makes it to unique
            </h4>
        </div>
    </div>
    <div class="row px-sm-4 justify-content-center my-5">
        <h3 class="melco-text pb-4 text-center">
            <p>18 additional benefits for you</p>
        </h3>
        <div class="col-10">
            <div class="row py-3">
                <div class="col-sm-5 ">
                    <img class="auto-height-img" src="{{asset('img/partners/melco-prod1.png')}}" alt="">
                </div>
                <div class="col-sm">
                    <h3 class="pt-3 pt-sm-0">1500 stitches per minute</h3>
                    <p style="font-size:1.2rem;">Increase your productivity drastically, thanks to an embroidery speed
                        of up to 1500 stitches per
                        minute. With the help of the automatic thread tension, this pace can be kept uring actual
                        production.</p>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-sm-5 order-sm-12">
                    <img class="auto-height-img" src="{{asset('img/partners/melco-prod2.png')}}" alt="">
                </div>
                <div class="col-sm">
                    <h3 class="pt-3 pt-sm-0">Automated thread tension</h3>
                    <p style="font-size:1.2rem;">The patented Acti-FeedTM technology simplifies embroidery, allowing
                        higher stitching speeds in perfect quality with each type of thread and simplifying the
                        production of special effects.</p>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-sm-5">
                    <img class="auto-height-img" src="{{asset('img/partners/melco-prod3.png')}}" alt="">
                </div>
                <div class="col-sm">
                    <h3 class="pt-3 pt-sm-0">The smallest lower arm in the world</h3>
                    <p style="font-size:1.2rem;">The smallest lower arm (also called free arm) allows you to directly
                        embroider items with small openings - think of thoes, hirt pockets etc..</p>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-sm-5 order-sm-12">
                    <img class="auto-height-img" src="{{asset('img/partners/melco-prod4.png')}}" alt="">
                </div>
                <div class="col-sm">
                    <h3 class="pt-3 pt-sm-0">Laser registration</h3>
                    <p style="font-size:1.2rem;">Position, rotate and scale a design precisely on the garment and
                        combine embroidery with other garment decoration techniques such as laser or printing.</p>
                </div>
            </div>

            <div class="row py-3">
                <div class="col-sm-5">
                    <img class="auto-height-img" src="{{asset('img/partners/melco-prod5.png')}}" alt="">
                </div>
                <div class="col-sm">
                    <h3 class="pt-3 pt-sm-0">16 needles with colour backup function</h3>
                    <p style="font-size:1.2rem;">You can set up several needles with the same colour - if one thread
                        cone is empty, the machine automatically changes to the next one with the same colour. You can
                        always leave standard colours on the machine and equiip a part of the cones with special
                        needles.</p>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-sm-5 order-sm-12">
                    <img class="auto-height-img" src="{{asset('img/partners/melco-prod6.png')}}" alt="">
                </div>
                <div class="col-sm">
                    <h3 class="pt-3 pt-sm-0">Easy operation</h3>
                    <p style="font-size:1.2rem;">Inexperienced users can easily and quickly produce with the simplified
                        interface. In just 30 minutes, you learn the operation of the machine thanks to the intutive and
                        touch-screen-optimized interface - perfect to reduce your training costs.</p>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-sm-5">
                    <img class="auto-height-img" src="{{asset('img/partners/melco-prod7.png')}}" alt="">
                </div>
                <div class="col-sm">
                    <h3 class="pt-3 pt-sm-0">Computer operated</h3>
                    <p style="font-size:1.2rem;">Control up to 30 embroidery machines either individually or in clusters
                        from a single PC - change positioning, colour sequence, hoops and upload embroidery designs
                        centrally and without USD sticks.</p>
                </div>
            </div>

            <div class="row py-3">
                <div class="col-sm-5 order-sm-12">
                    <img class="auto-height-img" src="{{asset('img/partners/melco-prod8.png')}}" alt="">
                </div>
                <div class="col-sm">
                    <h3 class="pt-3 pt-sm-0">Remote maintenance</h3>
                    <p style="font-size:1.2rem;">Through your computer we can access your machine and solve about 80% of
                        all support requests quickly and cheaply - all you need is an Internet connection.</p>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-sm-5">
                    <img class="auto-height-img" src="{{asset('img/partners/melco-prod9.png')}}" alt="">
                </div>
                <div class="col-sm">
                    <h3 class="pt-3 pt-sm-0">Embroider (almost) everything</h3>
                    <p style="font-size:1.2rem;">Embroider almost all items - from caps to shoes. Decorate almost all
                        materials - from leather and carpets to silk.</p>
                </div>
            </div>

            <div class="row py-3">
                <div class="col-sm-5 order-sm-12">
                    <img class="auto-height-img" src="{{asset('img/partners/melco-prod10.png')}}" alt="">
                </div>
                <div class="col-sm">
                    <h3 class="pt-3 pt-sm-0">Highest embroidery quality</h3>
                    <p style="font-size:1.2rem;">Thanks to Acti-FeedTM, you can embroider the smallest letters with
                        pinpoint sharpness and also embroider special effects and special thread types with the highest
                        quality your customers will be thrilled!</p>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-sm-5">
                    <img class="auto-height-img" src="{{asset('img/partners/melco-prod11.png')}}" alt="">
                </div>
                <div class="col-sm">
                    <h3 class="pt-3 pt-sm-0">Unbeatable with caps</h3>
                    <p style="font-size:1.2rem;">Embroider caps and hats at up to 1200 stitches per minute and use the
                        industry's largest cap sew field.</p>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-sm-5 order-sm-12">
                    <img class="auto-height-img" src="{{asset('img/partners/melco-prod12.png')}}" alt="">
                </div>
                <div class="col-sm">
                    <h3 class="pt-3 pt-sm-0">Barcode reader function</h3>
                    <p style="font-size:1.2rem;">ELoad your embroidery designs and settings directly to your embroidery
                        machines with a barcode or QR-code reader. This avoids manual errors and increases efficiency
                        even further your only need a standard barcode or QR-code reader.</p>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-sm-5">
                    <img class="auto-height-img" src="{{asset('img/partners/melco-prod13.png')}}" alt="">
                </div>
                <div class="col-sm">
                    <h3 class="pt-3 pt-sm-0">Industrial embroider machine</h3>
                    <p style="font-size:1.2rem;">Melco embroidery machines prove themselves 24 hours a day, 7 days a
                        week, industrial embroidery production around the world - with minimal maintenance costs.</p>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-sm-5 order-sm-12">
                    <img class="auto-height-img" src="{{asset('img/partners/melco-prod14.png')}}" alt="">
                </div>
                <div class="col-sm">
                    <h3 class="pt-3 pt-sm-0">VErgonomic design</h3>
                    <p style="font-size:1.2rem;">The machine can be placed with the back to a wall, as you only need
                        access it from the front to operate it or change the thread cones. It can also be moved easily
                        on its machine cart and also fits into most common station wagons, SUV and vans.</p>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-sm-5">
                    <img class="auto-height-img" src="{{asset('img/partners/melco-prod15.png')}}" alt="">
                </div>
                <div class="col-sm">
                    <h3 class="pt-3 pt-sm-0">Automated colour assignment</h3>
                    <p style="font-size:1.2rem;">Take advantage of our native OFM file format and our machine
                        automatically colourizes the designs - no more tedious manual assigning of needles!</p>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-sm-5 order-sm-12">
                    <img class="auto-height-img" src="{{asset('img/partners/melco-prod16.png')}}" alt="">
                </div>
                <div class="col-sm">
                    <h3 class="pt-3 pt-sm-0">Design queue</h3>
                    <p style="font-size:1.2rem;">With this function, the machine automatically loads the next job when
                        the current one is finished. All you have to do, is to press "Start" - ideal for the production
                        of personalized items.
                    </p>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-sm-5">
                    <img class="auto-height-img" src="{{asset('img/partners/melco-prod17.png')}}" alt="">
                </div>
                <div class="col-sm">
                    <h3 class="pt-3 pt-sm-0">OFM file format</h3>
                    <p style="font-size:1.2rem;">Store all settings on the machine directly on the OFM embroidery file
                        and even assign special settings to individual colours / parts of the design - reproductions and
                        centralized design optimiztion become child's play!</p>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-sm-5 order-sm-12">
                    <img class="auto-height-img" src="{{asset('img/partners/melco-prod18.png')}}" alt="">
                </div>
                <div class="col-sm">
                    <h3 class="pt-3 pt-sm-0">File formats and look of the embroidery</h3>
                    <p style="font-size:1.2rem;">Melco embroidery machines read all common file formats and can even
                        imiate the look of the embroidery of other embroidery machines - ideal if you already have
                        embrodiery machines from a different brand.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <h3 class="text-center melco-text"><b>Melco more Applications</b></h3>
    </div>
    <div class="pb-5">
        <div class="row justify-content-center pt-5" data-aos="fade-in" data-aos-delay="50" data-aos-duration="1000">
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