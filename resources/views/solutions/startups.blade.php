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
                    src="{{asset('img/startup/moneypack.png')}}" alt="" style="max-width:50vw;">
            </div>
            <div class="col-sm-6 align-self-center" data-aos="fade-up">
                <h2 style="color:#12f2be;"><b>Limited Budget</b></h2>
                <h2><small>Almost every start-up company have limited budget, but unlimited goals and vision. It is very
                        important
                        to start a affordable investment and maximize the possibilites.</small></h2>
            </div>
            <div class="col-sm-3 text-center d-none d-sm-block" data-aos="fade-up-left">
                <img class="auto-height-img align-self-center justify-content-center"
                    src="{{asset('img/startup/wecanoffer.png')}}" alt="" style="max-width:50vw;">
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
                    src="{{asset('img/startup/wecanoffer.png')}}" alt="" style="max-width:50vw;">
            </div>
            <div class="col-sm-9">
                <div class="media">
                    <img src="{{asset('img/startup/moneypack.png')}}" alt="" class="d-flex mr-3">
                    <div class="media-body">
                        <h2 style="color:#12f2be;"><b>Micro-run orders</b></h2>
                        <h2><small>For start-up always happened to take care micro-run order or make on demand with
                                limited
                                human recourses. A well experience partner and system is a MUST for any start-up
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
                    src="{{asset('img/startup/wecanoffer.png')}}" alt="" style="max-width:50vw;">
            </div>
            <div class="col-sm-9">
                <div class="media">
                    <img src="{{asset('img/startup/moneypack.png')}}" alt="" class="d-flex mr-3">
                    <div class="media-body">
                        <h2 style="color:#12f2be;"><b>Machine Down Time</b></h2>
                        <h2><small>For start-up company strongly relied on machine fitness and durability, never can
                                afford a frequent machine down time. Reliable system is a crucial for any start up
                                company. A trustable partner can help you even when there is any machine down time. GFL
                                can provide a strong technical support to you.</small></h2>
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
                        src="{{asset('img/startup/earthsunmoon.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-sm" data-aos="fade-left">
                <h3>At a Glance</h3>
                <p>Earth Sun Moon Trading Company <a href="http://www.EarthSunMoon.com">www.EarthSunMoon.com</a></p>
                <p>Grove City, Pennsylvania, United States</p>
                <br>
                <h5 style="color:#12f2be;">Challenge:</h5>
                <p>To find portable DTG machines that are cost-effective and flexible for high- and low-production
                    seasons.</p>
                <h5 style="color:#12f2be;">Solution:</h5>
                <p>A sophisticated system of 18 Kornit Breezes in pod-style operation</p>
                <h5 style="color:#12f2be;">Results:</h5>
                <p>A flexible and efficient production line that caters to business needs and on-demand output</p>
            </div>
        </div>
    </div>
</div>

@endsection

<script>
    console.log("Parent");
</script>