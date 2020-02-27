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
        <div class="First Heading">
            <div class="d-flex justify-content-center pt-5">
                <h1>GFL Events & Insights</h1>
            </div>
            <div class="d-flex justify-content-center">
                <div class="col-8">
                    <example-component></example-component>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection