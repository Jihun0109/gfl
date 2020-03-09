@extends('layouts.master')

@section('content')
<div class="container">
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 remove-padding">
                    <div class="left">
                        <a class="banner-effect" href="https://www.google.com/" target="_blank">
                            <img src="https://geniusocean.com/demo/royalcommerce/assets/images/banners/1564398600side-triple3.jpg"
                                alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 remove-padding">
                    <div class="left">
                        <a class="banner-effect" href="https://www.google.com/" target="_blank">
                            <img src="https://geniusocean.com/demo/royalcommerce/assets/images/banners/1564398579side-triple2.jpg"
                                alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 remove-padding">
                    <div class="left">
                        <a class="banner-effect" href="https://www.google.com/" target="_blank">
                            <img src="https://geniusocean.com/demo/royalcommerce/assets/images/banners/1564398571side-triple1.jpg"
                                alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6 space-50">
            <div class="title-box">
                <h3>ONLY TEXT</h3>
                <p>You can choose any colour for the background, text &amp; boder.</p>
            </div>
            <!-- End title -->
            <div class="boxed-content">
                <h2>HEADING GOSE HERE</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida
                    pellentesque
                    urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies,
                    justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui. Ut lectus
                    purus,
                    commodo et tincidunt vel, interdum sed lectus. Vestibulum adipiscing tempor nisi id elementu sadips
                    ipsums dolores uns fugiats gravida nam elit vols nulla dolores amet.</p>
            </div>
            <!-- End content -->
        </div>
        <div class="col-md-6 space-50">
            <div class="title-box">
                <h3>WITH IMAGE</h3>
                <p>You can choose any colour for the background, text, boder &amp; image.</p>
            </div>
            <!-- End title -->
            <div class="boxed-content images">
                <div class="text">
                    <h2>HEADING GOSE HERE</h2>
                    <p>Lectus purus, commodo et tincidunt vel, interdum sed lectus. Vestibulum adipiscing tempor nisi id
                        elementu sadips ipsums dolores uns fugiats gravida nam elit vols nulla dolores amet.</p>
                </div>
                <!-- End text -->
                <img src="{{asset('img/test/yellow-man.png')}}" alt="Banner">
            </div>
            <!-- End content -->
        </div>
    </div>
</div>
<div class="container">
    <div class="posts-wrap">
        <div class="posts-list">
            <div class="posts-i">
                <a class="posts-i-img" href="post.html">
                    <span style="background: url({{asset('img/test/blog1.jpg')}})"></span>
                </a>
                <time class="posts-i-date" datetime="2016-11-09 00:00:00"><span>30</span> Jan</time>
                <div class="posts-i-info">
                    <a href="blog.html" class="posts-i-ctg">Reviews</a>
                    <h3 class="posts-i-ttl">
                        <a href="post.html">Animi quaerat at</a>
                    </h3>
                </div>
            </div>
            <div class="posts-i">
                <a class="posts-i-img" href="post.html">
                    <span style="background: url({{asset('img/test/blog6.jpg')}})"></span>
                </a>
                <time class="posts-i-date" datetime="2016-11-09 00:00:00"><span>29</span> Jan</time>
                <div class="posts-i-info">
                    <a href="blog.html" class="posts-i-ctg">Articles</a>
                    <h3 class="posts-i-ttl">
                        <a href="post.html">Ex atque commodi</a>
                    </h3>
                </div>
            </div>
            <div class="posts-i">
                <a class="posts-i-img" href="post.html">
                    <span style="background: url({{asset('img/test/blog11.jpg')}})"></span>
                </a>
                <time class="posts-i-date" datetime="2016-11-09 00:00:00"><span>25</span> Jan</time>
                <div class="posts-i-info">
                    <a href="blog.html" class="posts-i-ctg">News</a>
                    <h3 class="posts-i-ttl">
                        <a href="post.html">Hic quod maxime deserunt</a>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="banners-wrap">
        <div class="banners-list">
            <div class="banner-i style_11">
                <span class="banner-i-bg" style="background: url({{asset('img/test/1.jpg')}});"></span>
                <div class="banner-i-cont">
                    <p class="banner-i-subttl">NEW COLLECTION</p>
                    <h3 class="banner-i-ttl">MEN'S<br>CLOTHING</h3>
                    <p class="banner-i-link"><a href="section.html">View More</a></p>
                </div>
            </div>
            <div class="banner-i style_22">
                <span class="banner-i-bg" style="background: url({{asset('img/test/2.jpg')}});"></span>
                <div class="banner-i-cont">
                    <p class="banner-i-subttl">GREAT COLLECTION</p>
                    <h3 class="banner-i-ttl">CLOTHING<br>ACCESSORIES</h3>
                    <p class="banner-i-link"><a href="section.html">Show more</a></p>
                </div>
            </div>
            <div class="banner-i style_21">
                <span class="banner-i-bg" style="background: url({{asset('img/test/3.jpg')}});"></span>
                <div class="banner-i-cont">
                    <h3 class="banner-i-ttl">SPORT<br>CLOTHES</h3>
                    <p class="banner-i-link"><a href="section.html">Go to catalog</a></p>
                </div>
            </div>
            <div class="banner-i style_21">
                <span class="banner-i-bg" style="background: url({{asset('img/test/4.jpg')}});"></span>
                <div class="banner-i-cont">
                    <h3 class="banner-i-ttl">MEN AND <br>WOMEN SHOES</h3>
                    <p class="banner-i-link"><a href="section.html">View More</a></p>
                </div>
            </div>
            <div class="banner-i style_22">
                <span class="banner-i-bg" style="background: url({{asset('img/test/5.jpg')}});"></span>
                <div class="banner-i-cont">
                    <p class="banner-i-subttl">DISCOUNT -20%</p>
                    <h3 class="banner-i-ttl">HATS<br>COLLECTION</h3>
                    <p class="banner-i-link"><a href="section.html">Shop now</a></p>
                </div>
            </div>
            <div class="banner-i style_12">
                <span class="banner-i-bg" style="background: url({{asset('img/test/6.jpg')}});"></span>
                <div class="banner-i-cont">
                    <p class="banner-i-subttl">STYLISH CLOTHES</p>
                    <h3 class="banner-i-ttl">WOMEN'S COLLECTION</h3>
                    <p>A great selection of dresses, <br>blouses and women's suits</p>
                    <p class="banner-i-link"><a href="section.html">View More</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">

</div>
<div class="container row justify-content-center">
    <card
        data-image="https://images.unsplash.com/photo-1479660656269-197ebb83b540?dpr=2&auto=compress,format&fit=crop&w=1199&h=798&q=80&cs=tinysrgb&crop=">
        <h1 slot="header">Canyons</h1>
        <p slot="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    </card>
    <card
        data-image="https://images.unsplash.com/photo-1479659929431-4342107adfc1?dpr=2&auto=compress,format&fit=crop&w=1199&h=799&q=80&cs=tinysrgb&crop=">
        <h1 slot="header">Beaches</h1>
        <p slot="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    </card>
    <card
        data-image="https://images.unsplash.com/photo-1479644025832-60dabb8be2a1?dpr=2&auto=compress,format&fit=crop&w=1199&h=799&q=80&cs=tinysrgb&crop=">
        <h1 slot="header">Trees</h1>
        <p slot="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    </card>
    <card
        data-image="https://images.unsplash.com/photo-1479621051492-5a6f9bd9e51a?dpr=2&auto=compress,format&fit=crop&w=1199&h=811&q=80&cs=tinysrgb&crop=">
        <h1 slot="header">Lakes</h1>
        <p slot="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    </card>
</div>

<div class="container " style="position:relative;">

</div>
@endsection