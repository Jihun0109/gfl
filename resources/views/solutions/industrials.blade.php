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
                    src="{{asset('img/industrials/chip.png')}}" alt="" style="max-width:50vw;">
            </div>
            <div class="col-sm-6 align-self-center" data-aos="fade-up">
                <h2 style="color:#1c2f71;"><b>Ready for Industrial 4.0</b></h2>
                <h2><small>almost all the industrialist will consider how to adopt the latest technology for ready
                        embrace the new era of Industrial 4.0; we have many definition for industrial 4.0, but we can
                        confirm it can never be done without a highly intelligent system and control.</small></h2>
            </div>
            <div class="col-sm-3 text-center d-none d-sm-block" data-aos="fade-up-left">
                <img class="auto-height-img align-self-center justify-content-center"
                    src="{{asset('img/industrials/wecanoffer.png')}}" alt="" style="max-width:50vw;">
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
                    src="{{asset('img/industrials/wecanoffer.png')}}" alt="" style="max-width:50vw;">
            </div>
            <div class="col-sm-9">
                <div class="media">
                    <img src="{{asset('img/industrials/lift.png')}}" alt="" class="d-flex mr-3">
                    <div class="media-body">
                        <h2 style="color:#1c2f71;"><b>Building Competitive Edge</b></h2>
                        <h2><small>we are not competition with low cost manufacturing, instead, we are looking for a
                                product differentiation or company hostlistic competitiveness</small></h2>
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
                    src="{{asset('img/industrials/wecanoffer.png')}}" alt="" style="max-width:50vw;">
            </div>
            <div class="col-sm-9">
                <div class="media">
                    <img src="{{asset('img/industrials/tools.png')}}" alt="" class="d-flex mr-3">
                    <div class="media-body">
                        <h2 style="color:#1c2f71;"><b>System Stability</b></h2>
                        <h2><small>Once again, system stability is the key for success. We need to make sure we know in
                                depth the system status. Further, we need to integrate into a pro-active management
                                system to avoid knowing problem in the later stage</small></h2>
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
                        src="{{asset('img/industrials/fashionmatrixoverseas.png')}}" alt="">
                </div>
            </div>
            <div class="col-sm" data-aos="fade-left">
                <h3>At a Glance</h3>
                <p>Fashion Matrix Overseas</p>
                <p><a href="http://www.fashionmatrixoverseas.com">www.fashionmatrixoverseas.com</a></p>
                <p>Bangalore, India</p>
                <br>
                <h5 style="color:#1c2f71;">Challenge:</h5>
                <p>Looking for financial benefits - quick turnaround time; less manpower</p>
                <p>Process Benefit - Single step; green and waterless</p>
                <p>Quality - Unlimited color use in design, even for small run</p>
                <h5 style="color:#1c2f71;">Solution:</h5>
                <p>Kornit Direct-to-Fabric (R2R) Pigment printing</p>
                <h5 style="color:#1c2f71;">Results:</h5>
                <p>Customer can manage small runs and urgent order in a more effective and predicable way</p>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    console.log("Parent");
</script>