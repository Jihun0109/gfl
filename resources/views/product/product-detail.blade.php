@extends('layouts.master')

@section('content')
<section class="content">

    <!-- Default box -->
    <div class="card card-solid">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3 class="d-inline-block d-sm-none">{{$product->name}}</h3>
                    <div class="col-12">
                        <img src="{{Voyager::image($product->image)}}" class="product-image" alt="{{$product->name}}">
                    </div>
                    <div class="col-12 product-image-thumbs">
                        <div class="product-image-thumb active" data-url="{{Voyager::image($product->image)}}"><img
                                src="{{Voyager::image($product->thumbnail('cropped','image'))}}" alt="Product Image">
                        </div>
                        @if ($product->image1)
                        <div class="product-image-thumb " data-url="{{Voyager::image($product->image1)}}"><img
                                src="{{Voyager::image($product->thumbnail('cropped','image1'))}}" alt="Product Image">
                        </div>
                        @endif
                        @if ($product->image2)
                        <div class="product-image-thumb " data-url="{{Voyager::image($product->image2)}}"><img
                                src="{{Voyager::image($product->thumbnail('cropped','image2'))}}" alt="Product Image">
                        </div>
                        @endif
                        @if ($product->image3)
                        <div class="product-image-thumb " data-url="{{Voyager::image($product->image3)}}"><img
                                src="{{Voyager::image($product->thumbnail('cropped','image3'))}}" alt="Product Image">
                        </div>
                        @endif
                        @if ($product->image4)
                        <div class="product-image-thumb " data-url="{{Voyager::image($product->image4)}}"><img
                                src="{{Voyager::image($product->thumbnail('cropped','image4'))}}" alt="Product Image">
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <h3 class="my-3">{{$product->name}}</h3>
                    <p>{{$product->short_description}}</p>

                    <hr>

                    <div class="mt-4 product-share">
                        <a href="#" class="text-gray">
                            <i class="fab fa-facebook-square fa-2x"></i>
                        </a>
                        <a href="#" class="text-gray">
                            <i class="fab fa-twitter-square fa-2x"></i>
                        </a>
                        <a href="#" class="text-gray">
                            <i class="fas fa-envelope-square fa-2x"></i>
                        </a>
                        <a href="#" class="text-gray">
                            <i class="fas fa-rss-square fa-2x"></i>
                        </a>
                    </div>

                </div>
            </div>
            <div class="container mt-4">
                {!! $product->description !!}
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
@endsection