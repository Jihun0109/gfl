@extends('layouts.master')

@section('content')
<div class="">
    <div class="container-fluid" style="padding: 0">
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
        <div class="row">
            <div class="col-sm-3 text-center" data-aos="fade-up-right">
                <img class="auto-height-img align-self-center justify-content-center"
                    src="{{asset('img/brand/plants.png')}}" alt="" style="max-width:50vw;">
            </div>
            <div class="col-sm-6 align-self-center" data-aos="fade-up">
                <h2 style="color:#416afe;"><b>Sustainable Solution</b></h2>
                <h2><small>Brand is not only concern about the financial top and bottom line, but looking for taking
                        more on sustainability and social responsibility.</small></h2>
            </div>
            <div class="col-sm-3 text-center d-none d-sm-block" data-aos="fade-up-left">
                <img class="auto-height-img align-self-center justify-content-center"
                    src="{{asset('img/brand/wecanoffer.png')}}" alt="" style="max-width:50vw;">
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
        <div class="row" data-aos="fade-up">
            <div class="col-sm-3 text-center">
                <img class="auto-height-img align-self-center justify-content-center"
                    src="{{asset('img/brand/wecanoffer.png')}}" alt="" style="max-width:50vw;">
            </div>
            <div class="col-sm-9">
                <div class="media">
                    <img src="{{asset('img/brand/awards.png')}}" alt="" class="d-flex mr-3">
                    <div class="media-body">
                        <h2 style="color:#416afe;"><b>Never ending uplifting quality demand</b></h2>
                        <h2><small>for start-up always happened to take care micro-run order or make on demand with
                                limited human recourses. A well experience partner and system is a MUST for any start-up
                                company.</small></h2>
                    </div>
                </div>
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
        <div class="row" data-aos="fade-up">
            <div class="col-sm-3 text-center order-12">
                <img class="auto-height-img align-self-center justify-content-center"
                    src="{{asset('img/brand/wecanoffer.png')}}" alt="" style="max-width:50vw;">
            </div>
            <div class="col-sm-9">
                <div class="media">
                    <img src="{{asset('img/brand/cross.png')}}" alt="" class="d-flex mr-3">
                    <div class="media-body">
                        <h2 style="color:#416afe;"><b>High Level Production Flexibility</b></h2>
                        <h2><small>Nowadays competition was not only low production cost and quantity, but how flexible
                                on handle the production between long run to short run order, or even micro run, the
                                mass customiztion arena.</small></h2>
                    </div>
                </div>
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
        <div class="row justify-content-center" data-aos="fade-up">
            <h1>Case studies</h1>
        </div>
        <div class="row">
            <div class="col-sm" data-aos="fade-right">
                <div class="row mx-4">
                    <img class="auto-height-img align-self-center justify-content-center"
                        src="{{asset('img/brand/New_Balance_logo.svg')}}" alt="">
                </div>
            </div>
            <div class="col-sm" data-aos="fade-left">
                <div class="m-4">
                    <p>
                        Since 2009, New Balance has been using Melco embroidery machines. With a total of 34 Melco
                        embroidery machines, New Balance produces the personalised one-of-a-kind sneakers. In 2013, this
                        was
                        already every fourth shoe sold in the USA. Thanks to Melco's mass customisation solution, 1.5
                        man-days could be saved in production per 200 pairs of shoes, and the error rate reduced from
                        10% to
                        less than 1%.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    console.log("Parent");
</script>