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
        <div class="partners-heading over-lay-multi w-50 ml-auto mr-auto pl-3">
            <div class="mask melco-mask" style="">
            </div>
            <div class="melco" style="left:20% !important; top: 55% !important;">
                <h2>Melco</h2>
                <h5>Software & Accessories</h5>
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
            <h4 class="px-4">
                With the right accessories, you can expand the capabilities of your embroidery business or at least make
                your embroidery life a little easier. There is a wide range of accessories, from very universal systems
                such as the Melco Fast Clamp to very product-specific shoops such as the cap frame. Here you can find an
                overview:
            </h4>
        </div>
    </div>

    <div class="container mt-5">
        <div class="px-xs-5">
            <ul class="nav nav-tabs justify-content-center custom-tab" id="custom-content-above-tab" role="tablist">
                <li class="nav-item w-sm-25 ">
                    <a class="nav-link active" id="custom-content-above-home-tab" data-toggle="pill"
                        href="#custom-content-above-home" role="tab" aria-controls="custom-content-above-home"
                        aria-selected="true">Accessories</a>
                </li>
                <li class="nav-item w-sm-25">
                    <a class="nav-link" id="custom-content-above-profile-tab" data-toggle="pill"
                        href="#custom-content-above-profile" role="tab" aria-controls="custom-content-above-profile"
                        aria-selected="false">Software</a>
                </li>
                <li class="nav-item w-sm-25">
                    <a class="nav-link " id="custom-content-above-messages-tab" data-toggle="pill"
                        href="#custom-content-above-messages" role="tab" aria-controls="custom-content-above-messages"
                        aria-selected="false">Web Service</a>
                </li>
            </ul>
            <div class="tab-content" id="custom-content-above-tabContent">
                <div class="tab-pane fade active show" id="custom-content-above-home" role="tabpanel"
                    aria-labelledby="custom-content-above-home-tab">
                    <div class="row mt-5 px-5 accessories">
                        <div class="row">
                            <div class="col-sm-4">
                                <img class="w-100" src="{{asset('img/partners/melco-acc1.png')}}">
                            </div>
                            <div class="col-sm-8">
                                <h3>Melco Fast Clampe</h3>
                                <p>The revolutionary Melco Fast Clamp allows you to embroider items in places that were
                                    previously impossible or every difficult to embroider. The flexible and easy to use
                                    system allows the decoration of shoes, bags and backpacks, saddlebags, carpets,
                                    belts and ribbons, shirt and trouser pockets and much more.</p>
                            </div>
                        </div>
                        <div class="row w-100 mt-4">
                            <div class="col-sm-3 px-1">
                                <div class="w-100 text-center">
                                    <img class="pb-3 w-100" src="{{asset('img/partners/melco-shoes.png')}}">
                                    <h4>Shoes</h4>
                                </div>
                            </div>
                            <div class="col-sm-3 px-1">
                                <div class="w-100 text-center">
                                    <img class="pb-3 w-100" src="{{asset('img/partners/melco-backpacks.png')}}">
                                    <h4>Backpacks and Bag</h4>
                                </div>
                            </div>
                            <div class="col-sm-3 px-1">
                                <div class="w-100 text-center">
                                    <img class="pb-3 w-100" src="{{asset('img/partners/melco-belts.png')}}">
                                    <h4>Belts and Taps</h4>
                                </div>
                            </div>
                            <div class="col-sm-3 px-1">
                                <div class="w-100 text-center">
                                    <img class="pb-3 w-100" src="{{asset('img/partners/melco-shirts.png')}}">
                                    <h4>Shirt and Trouser Pockets</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-sm-4">
                                <img class="w-100" src="{{asset('img/partners/melco-acc2.png')}}">
                            </div>
                            <div class="col-sm-8">
                                <h3>Standard Hoops</h3>
                                <p>The proven standard hoops allow embroidery on most flat garments at a comparatively
                                    low price. They are made of plastic or wood and come in various sizes and shapes.
                                </p>
                            </div>
                        </div>
                        <div class="row w-100 mt-4">
                            <div class="col-sm-3 px-1">
                                <div class="w-100 text-center">
                                    <img class="pb-3 w-100" src="{{asset('img/partners/melco-hoops1.png')}}">
                                    <h4>Rectangular Hoops</h4>
                                </div>
                            </div>
                            <div class="col-sm-3 px-1">
                                <div class="w-100 text-center">
                                    <img class="pb-3 w-100" src="{{asset('img/partners/melco-hoops2.png')}}">
                                    <h4>Wooden Hoops</h4>
                                </div>
                            </div>
                            <div class="col-sm-3 px-1">
                                <div class="w-100 text-center">
                                    <img class="pb-3 w-100" src="{{asset('img/partners/melco-hoops3.png')}}">
                                    <h4>Uniform Tension</h4>
                                </div>
                            </div>
                            <div class="col-sm-3 px-1">
                                <div class="w-100 text-center">
                                    <img class="pb-3 w-100" src="{{asset('img/partners/melco-hoops4.png')}}">
                                    <h4>Round Hoops</h4>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-sm-4">
                                <img class="w-100" src="{{asset('img/partners/melco-acc3.png')}}">
                            </div>
                            <div class="col-sm-8">
                                <h3>Magnetic Hoops</h3>
                                <p>Magnetic hoops cover the same range of applications as standard hoops. Instead of
                                    hooping with muscle power, however, you can use the power of strong magnets. This
                                    makes handling faster and more comfortable. Materials with zippers and strong seams
                                    can also be clamped without any problems.
                                </p>
                            </div>
                        </div>
                        <div class="row w-100 mt-4">
                            <div class="col-sm-3 px-1">
                                <div class="w-100 text-center">
                                    <img class="pb-3 w-100" src="{{asset('img/partners/melco-magnet1.png')}}">
                                    <h4>Easy and Fast</h4>
                                </div>
                            </div>
                            <div class="col-sm-3 px-1">
                                <div class="w-100 text-center">
                                    <img class="pb-3 w-100" src="{{asset('img/partners/melco-magnet2.png')}}">
                                    <h4>No Imprints</h4>
                                </div>
                            </div>
                            <div class="col-sm-3 px-1">
                                <div class="w-100 text-center">
                                    <img class="pb-3 w-100" src="{{asset('img/partners/melco-magnet3.png')}}">
                                    <h4>Jacket with Zipper</h4>
                                </div>
                            </div>
                            <div class="col-sm-3 px-1">
                                <div class="w-100 text-center">
                                    <img class="pb-3 w-100" src="{{asset('img/partners/melco-magnet4.png')}}">
                                    <h4>Sleeve Hoops</h4>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-sm-4">
                                <img class="w-100" src="{{asset('img/partners/melco-acc4.png')}}">
                            </div>
                            <div class="col-sm-8">
                                <h3>Fast Frames and Others</h3>
                                <p>Instead of clamping the material like other hoops, the fast frames use adhesive
                                    backing to hold and tension a garment. They are extremely useful for embroidering
                                    areas which are on the edge of a garment and cannot be clamped with "normal" hoop
                                    or, only with difficulty. This includes shirt collars, socks, but also all items
                                    which are too small to be clamped with other hoops.
                                </p>
                            </div>
                        </div>
                        <div class="row w-100 mt-4">
                            <div class="col-sm-3 px-1">
                                <div class="w-100 text-center">
                                    <img class="pb-3 w-100" src="{{asset('img/partners/melco-fast1.png')}}">
                                    <h4>Easy and Fast</h4>
                                </div>
                            </div>
                            <div class="col-sm-3 px-1">
                                <div class="w-100 text-center">
                                    <img class="pb-3 w-100" src="{{asset('img/partners/melco-fast2.png')}}">
                                    <h4>No Imprints</h4>
                                </div>
                            </div>
                            <div class="col-sm-3 px-1">
                                <div class="w-100 text-center">
                                    <img class="pb-3 w-100" src="{{asset('img/partners/melco-fast3.png')}}">
                                    <h4>Jacket with Zipper</h4>
                                </div>
                            </div>
                            <div class="col-sm-3 px-1">
                                <div class="w-100 text-center">
                                    <img class="pb-3 w-100" src="{{asset('img/partners/melco-fast4.png')}}">
                                    <h4>Sleeve Hoops</h4>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-sm-4">
                                <img class="w-100" src="{{asset('img/partners/melco-acc5.png')}}">
                            </div>
                            <div class="col-sm-8">
                                <h3>Other accessories</h3>
                                <p>You will find information here on other accessories for your Melco embroidery
                                    machine. This
                                    includes table tops as well as cap frames and HoopMasterTM hooping aids. Slim-Line
                                    clamping
                                    frames, bordr frames and Micro Clamp pocket frames are also presented here
                                </p>
                            </div>
                        </div>
                        <div class="row w-100 mt-4">
                            <div class="col-sm-3 px-1">
                                <div class="w-100 text-center">
                                    <img class="pb-3 w-100" src="{{asset('img/partners/melco-other1.png')}}">
                                    <h4>Hoop Master Hooping Aid</h4>
                                </div>
                            </div>
                            <div class="col-sm-3 px-1">
                                <div class="w-100 text-center">
                                    <img class="pb-3 w-100" src="{{asset('img/partners/melco-other2.png')}}">
                                    <h4>Micro Clamps</h4>
                                </div>
                            </div>
                            <div class="col-sm-3 px-1">
                                <div class="w-100 text-center">
                                    <img class="pb-3 w-100" src="{{asset('img/partners/melco-other3.png')}}">
                                    <h4>All-in-One package</h4>
                                </div>
                            </div>
                            <div class="col-sm-3 px-1">
                                <div class="w-100 text-center">
                                    <img class="pb-3 w-100" src="{{asset('img/partners/melco-other4.png')}}">
                                    <h4>Cap frame</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="custom-content-above-profile" role="tabpanel"
                    aria-labelledby="custom-content-above-profile-tab">
                    <div class="row mt-5 px-5 software">
                        <div class="row" data-aos="fade-right" data-aos-delay="500" data-aos-duration="3000">
                            <div class="col-sm-4" data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000">
                                <img class="w-100" src="{{asset('img/partners/melco-designshop1.png')}}">
                            </div>
                            <div class="col-sm-8">
                                <h3>Convert vector graphics into embroidery desgins</h3>
                                <p>Convert virtually any type of artwork into digital embroidery files in no time.
                                    DesignShop V10 has powerful graphics capabilities that allow for quick coversion to
                                    stitches and easy settings. You can also turn an embroidery desgin into vector files
                                    without having to use another program or switch to another screen.</p>
                            </div>
                        </div>
                        <div class="row" data-aos="fade-right" data-aos-delay="500" data-aos-duration="3000">
                            <div class="col-sm-4 order-sm-12">
                                <img class="w-100" src="{{asset('img/partners/melco-designshop2.png')}}">
                            </div>
                            <div class="col-sm-8">
                                <h3>Melco Fast Clampe</h3>
                                <p>Changes are displayed directly on the screen with the Melco Design Shop V10
                                    embroidery software. You can decide immediately whether the selected settings
                                    correspond with your ideas.</p>
                            </div>
                        </div>
                        <div class="row" data-aos="fade-right" data-aos-delay="500" data-aos-duration="3000">
                            <div class="col-sm-4">
                                <img class="w-100" src="{{asset('img/partners/melco-designshop3.png')}}">
                            </div>
                            <div class="col-sm-8">
                                <h3>Total control over the lettering</h3>
                                <p>DesignShop V10 takes lettering to a new level with features such as anchor point
                                    editing, advanced stitch editing, and automatic boundaries. DesignShop V10 features
                                    state-of-the-art lettering capabilities for all embroidery alphabets and true-type
                                    conversion. You can even create your own alphabets.</p>
                            </div>
                        </div>
                        <div class="row" data-aos="fade-right" data-aos-delay="500" data-aos-duration="3000">
                            <div class="col-sm-4 order-sm-12">
                                <img class="w-100" src="{{asset('img/partners/melco-designshop4.png')}}">
                            </div>
                            <div class="col-sm-8">
                                <h3>Digitizing Wizard</h3>
                                <p>The Digitizing Wizard helps import vector graphics and offers automatic colour
                                    recognition, automatic stitch effect recognition and an automatic overlap function.
                                </p>
                            </div>
                        </div>
                        <div class="row" data-aos="fade-right" data-aos-delay="500" data-aos-duration="3000">
                            <div class="col-sm-4">
                                <img class="w-100" src="{{asset('img/partners/melco-designshop5.png')}}">
                            </div>
                            <div class="col-sm-8">
                                <h3>Stitch directions and dividers</h3>
                                <p>With the Melco DesignShop V10 embroidery software, any number of stitch directions
                                    and dividers can be inserted into a complex fill. This makes even the creation of
                                    complicated designs child's play.
                                </p>
                            </div>
                        </div>
                        <div class="row" data-aos="fade-right" data-aos-delay="500" data-aos-duration="3000">
                            <div class="col-sm-4 order-sm-12">
                                <img class="w-100" src="{{asset('img/partners/melco-designshop6.png')}}">
                            </div>
                            <div class="col-sm-8">
                                <h3>Scale, rotate, align, group and revise</h3>
                                <p>DeisgnShop V10 features the latest edition tools, as well as advanced stitch editing
                                    fetures, auto-sequencing, automatic stitch edition, and more.
                                </p>
                            </div>
                        </div>
                        <div class="row" data-aos="fade-right" data-aos-delay="500" data-aos-duration="3000">
                            <div class="col-sm-4">
                                <img class="w-100" src="{{asset('img/partners/melco-designshop7.png')}}">
                            </div>
                            <div class="col-sm-8">
                                <h3>Impressive effects</h3>
                                <p>The Melco DesignShop V10 features key special effects such as "Jagged Edges" for
                                    puncturing animals and colour gradients, or to make trasitions invisible. Your
                                    creativity knows no limits.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 order-sm-12">
                                <img class="w-100" src="{{asset('img/partners/melco-designshop8.png')}}">
                            </div>
                            <div class="col-sm-8">
                                <h3>Colour gradients made easy</h3>
                                <p>The gradient effect of the Melco DesignShop V10 embroidery software makes it possible
                                    to create colour gradients by adjusting the distance between the stitches.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <img class="w-100" src="{{asset('img/partners/melco-designshop9.png')}}">
                            </div>
                            <div class="col-sm-8">
                                <h3>Group name feature facilitates personalization</h3>
                                <p>The Melco DesignShop V10 group name feature is ideal for providing garments with a
                                    single name or serial number. The names are copied from an Excel file and saved
                                    individually as desired or placed in the hoop. Increase your efficiency!
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 order-sm-12">
                                <img class="w-100" src="{{asset('img/partners/melco-designshop10.png')}}">
                            </div>
                            <div class="col-sm-8">
                                <h3>Finished product simulation saves time and material</h3>
                                <p>What you see on the screen is what you get as embroidery. DesignShop V10 offers
                                    different views to visualize stitches, colours, and the final result. The screen /
                                    project view allows your to view the finished product before embroidering.
                                    DesignShop V10 also offers an innovative application feature (the first of its kind
                                    in the industry) that allows you to display the individual applications along with
                                    different fabrics on the screen to get a realistic impression of the finished
                                    design.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="custom-content-above-messages" role="tabpanel"
                    aria-labelledby="custom-content-above-messages-tab">
                    <div class="row mt-5 px-5 justify-content-center">
                        <div class="col-sm-10 videoWrapper">
                            <iframe src="https://www.youtube.com/embed/m65oM4_JoOQ">
                            </iframe></div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="container pb-5 mt-5" data-aos="fade-in" data-aos-delay="50" data-aos-duration="1000">
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