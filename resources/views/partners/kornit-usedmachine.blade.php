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
        <div class="partners-heading w-50 ml-auto mr-auto pl-3">
            <div class="mask kornit-dtf-mask">
            </div>
            <div class="kornit" style="top: 45% !important;">
                <h2>Kornit Digital</h2>
                <h5>Used machines</h5>
                <button type="button" class="btn btn-flat d-none d-sm-block">Learn More</button>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row py-5">
        <div class="col-sm-3 pl-4">
            <img class="auto-height-img" src="{{asset('img/partners/kornit-digital-bonding-matters.png')}}" alt="">
        </div>
        <div class="col-sm">
            <h3 class="cornit-text"><b>Sustainability</b></h3>
            <p style="font-size:1.2rem;">As a leader in the apparel and fashion industry, Kornit considers
                sustainability to be a core company value and invests great effort and resources in minimizing the
                company's enviromental footprint.</p>
            <p style="font-size:1.2rem;">Kornit operates in sustainable, resposible manner by developing digital
                printing solutions that are inherently more enviromentally-friendly than both traditional and other
                digital printing methonds in the industry.</p>
            <p style="font-size:1.2rem;">Kornit...</p>
            <p style="font-size:1.2rem;">We work hard to em.....</p>
            <p style="font-size:1.2rem;">We continously strive...</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 p-5">
            <h3>WATERLESS</h3>
            <p style="font-size:1.2rem;">The number one enviromental risk factor in textiles is water pollution. Did you
                know that the volumne of water used in conventional drying and textile print processes could fill the
                Mediterranean Sea every two years! The amount of water curretly used, wasted, and polluted is
                staggering. The industry shift towards digital printing goes a long way towards reducing its
                enviromental impact, and Kornit's technologies are leading this effort with a 100% water less process
                utilized in evry single printing system we manufacture. No pretreatments, steaming or wshing required.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 p-5">
            <h3>NEO PIGMENT INKS</h3>
            <p style="font-size:1.2rem;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem
                Ipsum has been the industry's standard
                dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                a type specimen
                book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                essentially
                unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                passages, and more
                recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
        <div class="col-sm-4 p-5">
            <h3>COMPLIANCE</h3>
            <p style="font-size:1.2rem;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem
                Ipsum has been the industry's standard
                dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                a type specimen
                book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                essentially
                unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                passages, and more
                recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
        <div class="col-sm-4 p-5">
            <h3>SAFE PRODUCT</h3>
            <p style="font-size:1.2rem;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem
                Ipsum has been the industry's standard
                dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                a type specimen
                book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                essentially
                unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                passages, and more
                recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
    </div>
</div>
@endsection