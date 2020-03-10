@extends('layouts.master')

@section('content')
<div class="container">
    <img class="img-fluid" src="{{Voyager::image(setting('about.banner_img'))}}" alt="">
</div>
<div class="container">
    <div class="mt-5"></div>
    <div class="text-red d-flex justify-content-center">
        <h2>{{setting('about.title')}}</h2>
    </div>
    <div class="mt-5"></div>
    <div class="row my-3">
        <div class="col-md-6 order-md-12">
            <img class="img-fluid" src="{{Voyager::image(setting('about.image_1'))}}" alt=""
                style="border-radius:30px;">
        </div>
        <div class="col-md-6 pt-3 pt-md-1">
            <p class="desc-font">
                {!!setting('about.desc_1')!!}
            </p>
        </div>
    </div>
    <div class="row mt-5  justify-content-center" style="background-color: #4beaea">
        <h2 class="mt-3 text-white text-center">{{setting('about.sub_title')}}</h2>
    </div>
    <div class="row mt-5">
        <div class="col-md-6 pr-md-0">
            <img class="img-fluid" src="{{Voyager::image(setting('about.image_2'))}}" alt="">
        </div>
        <div class="col-md-6 pt-4 pt-md-3">
            <p class="desc-font">
                {!!setting('about.desc_2')!!}
            </p>
        </div>
    </div>
    <div class="row mt-0">
        <div class="col-md-6 order-md-12 pt-3 pt-md-0 pl-md-0">
            <img class="img-fluid" src="{{Voyager::image(setting('about.image_3'))}}" alt="">
        </div>
        <div class="col-md-6 pt-4 pt-md-3">
            <p class="desc-font">
                {!!setting('about.desc_3')!!}
            </p>
        </div>
    </div>
    <div class="row mt-0">
        <div class="col-md-6 pr-md-0">
            <img class="img-fluid" src="{{Voyager::image(setting('about.image_4'))}}" alt="">
        </div>
        <div class="col-md-6 pt-4 pt-md-3">
            <p class="desc-font">
                {!!setting('about.desc_4')!!}
            </p>
        </div>
    </div>

    <div class="row w-100" style="margin: 30px 0;">
    </div>
    <div></div>
</div>
@endsection