@extends('website.layouts.layouts')

@section('content')
<!-- slider start -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
  
    <div class="carousel-item  active">
      <img class="d-block w-100" src="website/assets/img/slider/15740861301.jpg" alt="First slide">
    </div>
    <div class="overlay2"></div>
    <div class="carousel-item ">
  <img src="website/assets/img/slider/15742617362.jpg" alt="second">
  <div class="carousel-caption d-none d-md-block">
  <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Around The Clock</h2>
                        <div class="breadcrumb__links">
                            <a href="#">Home</a>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
</div>
<div class="overlay2"></div>
<div class="carousel-item ">
      <img class="d-block w-100" src="website/assets/img/slider/1574242969Fire.jpg" alt="Third slide">
    </div>
  </div>
  <div class="overlay2"></div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- slider end -->


    <!-- Services Page Section Begin -->
<section class="services-page spad">
        <div class="container">
            <div class="row">
            <div class="col-12 mb-5 position-relative">
<h5 style="font-weight:bold" class=" default-color text-center mb-5"> Know More About</h5>
<h2 class=" section-title text-center mb-5">Our Services</h2>
</div>
            </div>
            <div class="row">
            @foreach($services as $service)
            @if($service->parentService==null)
            <div class="col-md-4 mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="">
<div class="service d-flex h-100 service-block">
<div class="svg-icon">
<img src="website/assets/img/svg/{{@$service->service_en->icon}}" alt="Image" class="img-fluid">
</div>
<div class="service-about">
<h3 class="section-title">{{@$service->service_en->title}}</h3>
<p>{{@$service->service_en->description}}</p>
<a class=" primary-btn btn btn-md btn-color btn-animate btn-square mt-20" href="{{url('services?parentService=' . $service->id)}}"><span>See More <i class="tr-icon icofont icofont-arrow-right"></i></span></a>
</div>
</div>
</div>
@endif
            @endforeach


              
            </div>
        </div>
    </section>
    <!-- Services Page Section End -->

    <!-- video start -->
    <section class="about spad" style="background-color:#00000096">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about__text">
                        <div class="section-title">
                            <h2 style="color:white">E3lan Misr<br> for OOH Media Solutions, an agency </h2>
                            <p style="color: #ddb35b!important;">specified in outdoors’ advertisement based in Egypt since 2005, owning very large portfolio of locations among main roads and areas in Egypt</p>
                        </div>
                        <span style="color:black">It is worth noting that E3lan Misr have a distinctive reference list for many esteemed clients in various fields (Real Estate, Financial & Commercial, Oil & Petroleum, Food & Beverages, Electronics, Home Appliances, Media etc.</span>
                        <img src="img/about/signature.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__pic">
                        <!-- <img src="website/assets/img/about/about-us.jpg" alt=""> -->
                        <!-- 1:1 aspect ratio -->
                        <div class="holder">
  <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/VF1Yz05iQM0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
    <img class="img-responsive" src="https://www.e3lan.com.eg/website/assets/images/video/images%20(6).jpg" alt="">
    <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/sU3FkzUKHXU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
      <i class="fa fa-play-circle-o" style="color: #d4a854;position: absolute;margin-top: 20%;margin-left: -57%;font-size: 86px;"></i>
  <div class="overlay trigger" src="https://www.youtube.com/embed/sU3FkzUKHXU" data-target="#videoModal" data-toggle="modal"></div>
</div>

<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <button type="button" class="close btn-round btn-primary" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>

<!-- //////// -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- video end -->


    <!-- start features -->

    <section class="vision vision-changebg" style="opacity: 1; background-image: url(&quot;website/assets/img/vision/1.jpg&quot;);">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 p-0 col-md-6 col-sm-6">
                    <div class="vision__item" data-changebg="website/assets/img/vision/1.jpg">
                        <div class="vision__item__text">
                            <h4 style="    margin-bottom: 44px;">Attractive Locations</h4>
                            <p>Premium coverage of all the hot areas in Egypt! Not a single person will miss you ad!</p>
                            <!-- <a href="#">Continue Reading <span class="arrow_right"></span></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 p-0 col-md-6 col-sm-6">
                    <div class="vision__item" data-changebg="website/assets/img/vision/2.jpg">
                        <div class="vision__item__text">
                            <h4 style="    margin-bottom: 44px;">Monitoring Services</h4>
                            <p>Our team is always working around the clock to ensure that nothing is wrong with your work!</p>
                            <!-- <a href="#">Continue Reading <span class="arrow_right"></span></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 p-0 col-md-6 col-sm-6">
                    <div class="vision__item" data-changebg="website/assets/img/vision/3.jpg">
                        <div class="vision__item__text">
                            <h4>Supreme Quality</h4>
                            <p>Printing & Production require an eye for details, and we have that on our dedicated team, not a single misplaced pixel shall pass.</p>
                            <!-- <a href="#">Continue Reading <span class="arrow_right"></span></a> -->
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-3 p-0 col-md-6 col-sm-6">
                    <div class="vision__item" data-changebg="website/assets/img/vision/4.jpg">
                        <div class="vision__item__text">
                            <h4>Our Value</h4>
                            <p>The modern world is in a continuous movement and people everywhere are looking for quick,
                            safe</p>
                            <a href="#">Continue Reading <span class="arrow_right"></span></a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- end features -->

    <!-- start news letter -->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__content" style=" margin-top: 0px;">
                        <div class="section-title">
                            <h2>Sign up for newsletters</h2>
                            <!-- <p>Sign up for newsletters</p> -->
                            <p>Get to know E3lan Misr better, and be from the very firsts to know of the availability of your desired spots!.</p>
                        </div>
                        <form action="#">
                          
                            <div class="input__item">
                                <p>Email:</p>
                                <input type="text">
                            </div>
                         
                            <button type="submit" class="primary-btn">Signup Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end news letter -->

    <!-- start client -->
    <!--Carousel Wrapper-->
<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

<!--Controls-->
<!-- <div class="controls-top">
  <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
  <a class="btn-floating" href="#multi-item-example" data-slide="next"><i
      class="fas fa-chevron-right"></i></a>
</div> -->
<!--/.Controls-->

<!--Indicators-->
<ol class="carousel-indicators">
  <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
  <li data-target="#multi-item-example" data-slide-to="1"></li>
  
</ol>
<!--/.Indicators-->

<!--Slides-->
<div class="carousel-inner" role="listbox">

  <!--First slide-->
  
  <div class="carousel-item active">
  <div class="col-md-2" style="float:left">
  <div class=" mb-2">
     <!-- <img class="img-responsive" src="https://www.e3lan.com.eg/dashboardImages/client/1.png" alt=""> -->
        <!-- <div class="card-body">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a class="btn btn-primary">Button</a>
        </div> -->
      </div>
</div>
  @for($i=0;$i<(count($clients))/2-1;$i++)


    <div class="col-md-2" style="float:left">
     <div class=" mb-2">
     <img class="img-responsive" src="website/assets/img/{{$clients[$i]->image->path}}" alt="">
        <!-- <div class="card-body">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a class="btn btn-primary">Button</a>
        </div> -->
      </div>
    </div>

    @endfor

 
    
 
  </div>
  <!--/.First slide-->

  <!--Second slide-->
  <div class="carousel-item">

  @for($i=(count($clients))/2-1;$i<(count($clients));$i++)
 

<div class="col-md-2" style="float:left">
 <div class=" mb-2">
 <img class="img-responsive" src="website/assets/img/{{$clients[$i]->image->path}}" alt="ll">
    <!-- <div class="card-body">
      <h4 class="card-title">Card title</h4>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
        card's content.</p>
      <a class="btn btn-primary">Button</a>
    </div> -->
  </div>
</div>

@endfor

  </div>
  <!--/.Second slide-->



</div>
<!--/.Slides-->


                          
   
                         
                     
</div>
<a style="margin-left: 43%;margin-bottom: 48px;" href="{{url('client')}}" type="submit" class="primary-btn">Show more clients</a>
<!--/.Carousel Wrapper-->
    <!-- end client -->
@endsection