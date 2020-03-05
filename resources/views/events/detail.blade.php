@extends('layouts.master')

@section('content')
<div class="container">
    <div class="text-center" style="position: relative;">
        <img class="img" src="{{'../../../storage/' . $event->image}}" alt="" style="width: 100%;">
        <div style="position:absolute;left:0;right:0;top:0;bottom:0;">
            <div class="d-flex justify-content-center" style="top:40%; width:100%; position:absolute;z-index: 2;">
                <h1 style="z-index: 3; color:white; font-size:4rem;"><b>{{$event->title}}</b></h1>
            </div>
            <div style="position:absolute; left:0; top:0; height:100%;width:100%; background-color:red;opacity:0.3">
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row px-4">
        <div class="col-md-8 text-grey" style="font-size:1.2rem;">
            <div class="mt-5">
                <h3 class="pb-1">
                    <b>
                        @if (app()->getLocale() == 'en')
                        About This Webinar
                        @else
                        关于此网络研讨会
                        @endif
                    </b>
                </h3>
                <div style="font-size: 1.2rem;">
                    {!! $event->description !!}
                </div>
            </div>
            <div class="col-md-12 mt-5">
                <h3 class="pb-1">
                    @if (app()->getLocale() == 'en')
                    Agenda
                    @else
                    议程
                    @endif
                </h3>
                <div>
                    {!! $event->agenda !!}
                </div>
            </div>
            <div class="d-flex mt-5">
                <div class="col-md-6">
                    <h3 class="pb-1">
                        @if (app()->getLocale() == 'en')
                        Organizer
                        @else
                        组织者
                        @endif
                    </h3>
                    <div>
                        {!! $event->organizer !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 class="pb-1">
                        @if (app()->getLocale() == 'en')
                        Technical Support
                        @else
                        技术支援
                        @endif
                    </h3>
                    <div>
                        {!! $event->support !!}
                    </div>
                </div>
            </div>
            <div class="d-flex mt-5">
                <div class="col-md-6">
                    <h3 class="pb-1">
                        @if (app()->getLocale() == 'en')
                        Date
                        @else
                        日期
                        @endif
                    </h3>
                    <div>
                        {!! $event->date !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 class="pb-1">
                        @if (app()->getLocale() == 'en')
                        Duration
                        @else
                        持续时间
                        @endif
                    </h3>
                    <div>
                        {!! $event->duration !!} {{app()->getLocale() == 'en'?' Hours':'小时'}}
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-5">
                <h3 class="pb-1">
                    @if (app()->getLocale() == 'en')
                    Location
                    @else
                    位置
                    @endif
                </h3>
                <div>
                    {!! $event->location !!}
                </div>
            </div>
            <div class="col-md-12 mt-5">
                <h3 class="pb-1">
                    @if (app()->getLocale() == 'en')
                    Presented by
                    @else
                    提出者
                    @endif
                </h3>
                <div class="d-flex">
                    <img class="img-circle elevation-2" src="{{'../../../storage/' . $event->presentor_image}}"
                        style="float: left; height: auto; width: 80px;height: 80px;" alt="{{$event->presentor_name}}">
                    <div class="flex-column pl-5">
                        <div class="mb-2"><b>{{$event->presentor_name}}</b></div>
                        <div class="mb-2">{{$event->presentor_title}}</div>
                        <div class="mb-2">{{$event->presentor_info}}</div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 my-5">
                <h4>
                    @if (app()->getLocale() == 'en')
                    Tags:
                    @else
                    标签
                    @endif
                </h4>
                @foreach ($event->tags as $tag)
                <h4 class="badge bg-gray mx-1" style="font-size:1rem;">{{$tag}}</span>
                    @endforeach
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <h2 class=" mt-5">Register now to reserve your seat!</h2>
            <div>
                <form action="">
                    <div class="form-group pr-3">
                        <input type="text" class="form-control" placeholder="First Name*">
                    </div>
                    <div class="form-group pr-3">
                        <input type="text" class="form-control" placeholder="Last Name*">
                    </div>
                    <div class="form-group pr-3">
                        <input type="text" class="form-control" placeholder="Phone*">
                    </div>
                    <div class="form-group pr-3">
                        <input type="text" class="form-control" placeholder="Email*">
                    </div>
                    <div class="form-group pr-3">
                        <input type="text" class="form-control" placeholder="Country*">
                    </div>
                    <div class="form-group pr-3">
                        <input type="text" class="form-control" placeholder="Company*">
                    </div>
                    <div class="form-group pr-3">
                        <input type="text" class="form-control" placeholder="Job Title">
                    </div>
                    <div class="form-group pr-3">
                        <input type="text" class="form-control" placeholder="Business Type*">
                    </div>
                    <div class="form-group" style="font-size:0.8rem;">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">I agree to the Terms of Use and Privacy Policy of Global
                                Foutune Ltd.*</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">Yes, I would like to be updated for new reports, events &
                                offers.*</label>
                        </div>
                    </div>
                    <div class="col-sm-12 mt-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary mr-2">Register Now ></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection