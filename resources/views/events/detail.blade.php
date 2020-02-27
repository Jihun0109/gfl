@extends('layouts.master')

@section('content')
<div class="container">
    <div class="text-center">
        <img class="img" src="{{'../../../storage/' . $event->image}}" alt="" style="width: 100%;">
    </div>
    <div class="d-flex" style="font-size:1.3rem;">        
        <div class="col-md-8 col-sm-12">
            <div class="col-md-12 mt-5">
                <h1 class="pb-1">
                    @if (app()->getLocale() == 'en')
                    About This Webinar
                    @else
                    关于此网络研讨会
                    @endif
                </h1>
                <div>
                    {!! $event->description !!}
                </div>
            </div>
            <div class="col-md-12 mt-5">
                <h1 class="pb-1">
                    @if (app()->getLocale() == 'en')
                    Agenda
                    @else
                    议程
                    @endif
                </h1>
                <div>
                    <ul>
                        @foreach ($event->agenda as $item)
                        <li>{{$item}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-12 mt-5">
                <h1 class="pb-1">
                    @if (app()->getLocale() == 'en')
                    Organizer
                    @else
                    组织者
                    @endif
                </h1>
                <div>
                    {!! $event->organizer !!}
                </div>
            </div>
            <div class="col-md-12 mt-5">
                <h1 class="pb-1">
                    @if (app()->getLocale() == 'en')
                    Technical Support
                    @else
                    技术支援
                    @endif
                </h1>
                <div>
                    {!! $event->support !!}
                </div>
            </div>
            <div class="col-md-12 mt-5">
                <h1 class="pb-1">
                    @if (app()->getLocale() == 'en')
                    Date
                    @else
                    日期
                    @endif
                </h1>
                <div>
                    {!! $event->date !!}
                </div>
            </div>
            <div class="col-md-12 mt-5">
                <h1 class="pb-1">
                    @if (app()->getLocale() == 'en')
                    Duration
                    @else
                    持续时间
                    @endif
                </h1>
                <div>
                    {!! $event->duration !!} {{app()->getLocale() == 'en'?' Hours':'小时'}}
                </div>
            </div>
            <div class="col-md-12 mt-5">
                <h1 class="pb-1">
                    @if (app()->getLocale() == 'en')
                    Location
                    @else
                    位置
                    @endif
                </h1>
                <div>
                    {!! $event->location !!}
                </div>
            </div>
            <div class="col-md-12 mt-5">
                <h1 class="pb-1">
                    @if (app()->getLocale() == 'en')
                    Presented by
                    @else
                    提出者
                    @endif
                </h1>
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
            <div class="col-md-12 mt-5">
                <span>
                    @if (app()->getLocale() == 'en')
                    Tags:
                    @else
                    标签
                    @endif
                </span>
                @foreach ($event->tags as $tag)
                    <span class="badge bg-gray">{{$tag}}</span>
                @endforeach
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <h1 class=" mt-5">Register now to reserve your seat!</h1>
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
                          <label class="form-check-label">I agree to the Terms of Use and Privacy Policy of Global Foutune Ltd.*</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Yes, I would like to be updated for new reports, events & offers.*</label>
                        </div>                        
                      </div>
                    <div class="col-sm-12 mt-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary mr-2">Register Now ></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{$event}}
</div>
@endsection