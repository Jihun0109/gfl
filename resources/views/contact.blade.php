@extends('layouts.master')

@section('content')
<div class="container">
    <div class="d-flex flex-column" style="font-size:1.3rem;">
        <div>
            <img class="img-fluid" src="{{asset('img/contact/main.png')}}" alt="">
        </div>
        <div class="card-body">
            <h1>We are always here to help you</h1>
            <div class="row">
                <div class="col-md-8">
                    <div class="d-flex justify-content-between">
                        <span style="font-size: 1.3rem">General Enquiry</span>
                        <span style="font-size: 1rem">* Requested</span>
                    </div>
                    <div class="">
                        <form role="form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name*">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name*">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone*">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email*">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Company*">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Country*">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Business Type*">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Job Title">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="I'm looking for*">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="I'm interested in...*">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label>Comment</label>
                                    <textarea class="form-control" rows="8" placeholder=""></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 mt-3 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary mr-2">Send</button>
                                    <button class="btn btn-primary ml-2">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="row">
                        <span style="font-size: 1.3rem">Contact Us</span>
                    </div>
                    <div class="row mt-3"><span style="font-size: 1.3rem">Hong King Headquarter</span></div>
                    <div class="row">
                        <div class="contact-item">
                            <img src="{{asset('img/contact/phone.png')}}" alt="">
                            <span>+852 23700983</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="contact-item">
                            <img src="{{asset('img/contact/fax.png')}}" alt="">
                            <span>+852 23102200</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="contact-item">
                            <img src="{{asset('img/contact/email.png')}}" alt="">
                            <span>info@gflindustrial.com</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="contact-item">
                            <img src="{{asset('img/contact/phone.png')}}" alt="">
                            <div><span>Unit 403, Vogue Centre, No. 696 Castle Peak Road, Kowloon, Hong Kong</span></div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <span style="font-size: 1.3rem">For Marketing inquiry</span>
                    </div>
                    <div class="row">
                        <div class="contact-item">
                            <img src="{{asset('img/contact/email.png')}}" alt="">
                            <div><span>marketing@gflindustrial.com</span></div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <span style="font-size: 1.3rem">For Job opportunity</span>
                    </div>
                    <div class="row">
                        <div class="contact-item">
                            <img src="{{asset('img/contact/email.png')}}" alt="">
                            <div><span>hr@gflindustrial.com</span></div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <span style="font-size: 1.3rem">Opening Hours</span>
                    </div>
                    <div class="row">
                        <div class="contact-item">
                            <div class="col-12">
                                <div class="row"><span>Monday - Friday 9:00am - 6:00pm</span></div>
                                <div class="row"><span>Closed on <b>Saturday</b>,<b>Sunday</b> and <b>Public
                                            Holidays</b></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-5">
                <h1>Our China office</h1>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-primary card-outline contact-holder">
                        <h1 class="text-center pt-3">Shenzhen Office</h1>
                        <div class="contact-item">
                            <img src="{{asset('img/contact/location.png')}}" alt="">
                            <div><span>Rm. A07, 2/F, Fuyuan Waterfront Building, Freedom Road, Bao'an District,
                                    Shenzhen</span></div>
                        </div>
                        <div class="contact-item">
                            <img src="{{asset('img/contact/phone.png')}}" alt="">
                            <div><span>+86-510-82122566</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-primary card-outline contact-holder">
                        <h1 class="text-center pt-3">Guangzhou Office</h1>
                        <div class="contact-item">
                            <img src="{{asset('img/contact/location.png')}}" alt="">
                            <div><span>Rm. 508-509, Tower 1, 0.8+ Creative Park, No. 10 Industrial Road, Dashizhi
                                    Village, Panyu District, Guangzhou, China</span></div>
                        </div>
                        <div class="contact-item">
                            <img src="{{asset('img/contact/phone.png')}}" alt="">
                            <div><span>+86-510-82122566</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-primary card-outline contact-holder">
                        <h1 class="text-center pt-3">Wuxi Office</h1>
                        <div class="contact-item">
                            <img src="{{asset('img/contact/location.png')}}" alt="">
                            <div><span>Rm. 403, Chong'an District, Guangnan Road 311, Wuxi, Jiansu, China</span></div>
                        </div>
                        <div class="contact-item">
                            <img src="{{asset('img/contact/phone.png')}}" alt="">
                            <div><span>+86-510-82122566</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <h1>Our Vietnam office</h1>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('img/contact/world.png')}}" alt="">
                </div>
                <div class="col-md-6" style="margin-top:50px; font-size: 1.3rem;"><span>Noticing the rising demand in
                        the Vietnamese apparel & textile market, we're planning to set up a branch office in Vietnam to
                        support our customers.</span></div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12">
                    <h1>Subscribe Newsletter</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p style="font-size:1.3rem;">Be the first to receive exclusive offers and the latest news on our
                        porducts and services directly in your inbox.</p>
                    <div class="input-group mb-0">
                        <input class="form-control " placeholder="Email address">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection