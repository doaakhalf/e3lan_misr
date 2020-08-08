@extends('website.layouts.layouts')

@section('content')







<!-- start page -->
<div class="breadcrumb-option spad set-bg" data-setbg="website/assets/img/client/client.jpeg" style="background-image: url(&quot;website/assets/img/client/client.jpeg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Clients</h2>
                        <div class="breadcrumb__links">
                            <a href="#">Home</a>
                            <span>clients</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- end page -->
<!-- start client -->
<section class="team spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Be Our Next Client</h2>
                        <!-- <p>Lorem ipsum dolor sit amet sed do eiusmod tempor incididunt ut labore et dolore.</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
            @foreach($clients as $client)
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="team__item">
                        <div class="team__item__pic">
                            <img src="website/assets/img/{{$client->image->path}}" alt="">
                        </div>
                       
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end client -->
@endsection