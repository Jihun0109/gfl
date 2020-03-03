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
    <div class="row pt-5">
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
</div>
@endsection