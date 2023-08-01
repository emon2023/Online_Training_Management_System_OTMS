@extends('website.master')


@section('title')
    About
@endsection


@section('body')



    <section class="page-title overlay" style="background-image: url({{asset('/')}}website/images/background/page-title.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-white font-weight-bold">About Us</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>About Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- philosophy -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 order-2 order-lg-1">
                    <h5 class="section-title-sm">Know About</h5>
                    <h2 class="section-title section-title-border-half">Our Philosophy</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor didunt laboris nisi ut aliquip
                        ex commodo consequat. duis aute irure dolor in reprehenderivoluptate velit esse cillum dolore fugiat
                        nulla pariatur.Excepteur sint ocaecat cupidatat noproident sunt culpa qui officia deserunt mollit anim
                        id est laborum.</p>
                    <p>Sed perspiciatis unde omnisiste natus error sit voluptatem accusantium.doloremque ladantium totam rem aperieaque
                        ipsa quae ab illo inventore.veritatis. et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    <a href="service.html" class="btn btn-primary">Explore More</a>
                </div>
                <!-- philosophy image -->
                <div class="col-lg-5 align-self-center order-1 order-lg-2 mb-md-50">
                    <img class="img-fluid w-100" src="{{asset('/')}}website/images/about/philosophy.jpg" alt="philosophy-image">
                </div>
            </div>
        </div>
    </section>
    <!-- /philosophy -->

    <!-- ceo section -->
    <section>
        <div class="container">
            <div class="row rounded bg-secondary">
                <!-- ceo image -->
                <div class="col-lg-5 rounded-left ceo-image" style="background-image: url({{asset('/')}}website/images/about/ceo.jpg);"></div>
                <div class="col-lg-7">
                    <!-- ceo content -->
                    <div class="p-5">
                        <h2 class="section-title section-title-border-half-white text-white">We are efficient to
                            <br> make your business rise </h2>
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor didunt laboris nisi ut aliquip
                            ex commodo consequat. duis aute irure dolor in reprehenderit voluptate velit esse cillum dolore fugiat
                            nulla pariatur.Excepteur sint ocaecat cupidatat non proident sunt culpa qui officia deserunt mollit
                            anim id est laborum.</p>
                        <img src="{{asset('/')}}website/images/about/ceo-signature.png" alt="ceo-signature">
                        <h5 class="text-white">John Doe</h5>
                        <h6 class="text-white">CEO</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /ceo section -->

    <!-- skill -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5 class="section-title-sm">Best Reason</h5>
                    <h2 class="section-title section-title-border-half">Why Choose Us</h2>
                </div>
                <!-- accordion -->
                <div class="col-lg-6">
                    <div id="accordion" class="mb-md-50">
                        <div class="card border-0 mb-4">
                            <div class="card-header bg-gray border p-0">
                                <a class="card-link h5 d-block text-dark mb-0 py-10 px-4" data-toggle="collapse" href="#collapseOne">
                                    <i class="ti-minus text-primary mr-2"></i> Our Company Mission
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                <div class="card-body font-secondary text-color pl-0 pb-0">
                                    Duis aute irure dolor in reprehenderit voluptate velit esse cillum dolore fugiat nulla pariatur.Excepteur sint ocaecat cupidatat
                                    non proident sunt culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 mb-4">
                            <div class="card-header bg-gray border p-0">
                                <a class="collapsed card-link h5 d-block text-dark mb-0 py-10 px-4" data-toggle="collapse" href="#collapseTwo">
                                    <i class="ti-plus text-primary mr-2"></i> Our Company Mission
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                <div class="card-body font-secondary text-color pl-0 pb-0">
                                    Duis aute irure dolor in reprehenderit voluptate velit esse cillum dolore fugiat nulla pariatur.Excepteur sint ocaecat cupidatat
                                    non proident sunt culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 mb-4">
                            <div class="card-header bg-gray border p-0">
                                <a class="collapsed card-link h5 d-block text-dark mb-0 py-10 px-4" data-toggle="collapse" href="#collapseThree">
                                    <i class="ti-plus text-primary mr-2"></i> Our Company Mission
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                <div class="card-body font-secondary text-color pl-0 pb-0">
                                    Duis aute irure dolor in reprehenderit voluptate velit esse cillum dolore fugiat nulla pariatur.Excepteur sint ocaecat cupidatat
                                    non proident sunt culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- progressbar -->
                <div class="col-lg-6">
                    <div class="progressbar">
                        <h5 class="progressbar-title">Branding</h5>
                        <div class="progress" data-percent="85%">
                            <div class="progress-bar progress-bar-striped" style="width: 85%;">
                                <div class="progress-bar-value">85%</div>
                            </div>
                        </div>
                    </div>
                    <div class="progressbar">
                        <h5 class="progressbar-title">Branding</h5>
                        <div class="progress" data-percent="75%">
                            <div class="progress-bar progress-bar-striped" style="width: 75%;">
                                <div class="progress-bar-value">75%</div>
                            </div>
                        </div>
                    </div>
                    <div class="progressbar">
                        <h5 class="progressbar-title">Consulting</h5>
                        <div class="progress" data-percent="90%">
                            <div class="progress-bar progress-bar-striped" style="width: 90%;">
                                <div class="progress-bar-value">90%</div>
                            </div>
                        </div>
                    </div>
                    <div class="progressbar">
                        <h5 class="progressbar-title">Business</h5>
                        <div class="progress" data-percent="75%">
                            <div class="progress-bar progress-bar-striped" style="width: 75%;">
                                <div class="progress-bar-value">75%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /skill -->

    <section class="fun-facts overlay-dark section-sm" style="background-image: url({{asset('/')}}website/images/background/cta.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                    <div class="d-flex flex-sm-row flex-column justify-content-lg-center align-items-center text-center text-sm-left">
                        <i class="round-icon ti-server mr-sm-3 mr-0 mb-3 mb-sm-0"></i>
                        <div class="text-center text-sm-left">
                            <h2 class="count text-white mb-0" data-count="230">0</h2>
                            <p class="text-white mb-0">Projects Done</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                    <div class="d-flex flex-sm-row flex-column justify-content-lg-center align-items-center text-center text-sm-left">
                        <i class="round-icon ti-face-smile mr-sm-3 mr-0 mb-3 mb-sm-0"></i>
                        <div class="text-center text-sm-left">
                            <h2 class="count text-white mb-0" data-count="789">0</h2>
                            <p class="text-white mb-0">Satisfied Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                    <div class="d-flex flex-sm-row flex-column justify-content-lg-center align-items-center text-center text-sm-left">
                        <i class="round-icon ti-thumb-up mr-sm-3 mr-0 mb-3 mb-sm-0"></i>
                        <div class="text-center text-sm-left">
                            <h2 class="count text-white mb-0" data-count="580">0</h2>
                            <p class="text-white mb-0">Cup Of Coffee</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                    <div class="d-flex flex-sm-row flex-column justify-content-lg-center align-items-center text-center text-sm-left">
                        <i class="round-icon ti-cup mr-sm-3 mr-0 mb-3 mb-sm-0"></i>
                        <div class="text-center text-sm-left">
                            <h2 class="count text-white mb-0" data-count="130">0</h2>
                            <p class="text-white mb-0">Awards Win</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- testimonial -->
    <section class="section pb-0">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h5 class="section-title-sm">Clients</h5>
                    <h2 class="section-title section-title-border"> What client Say </h2>
                </div>
                <div class="col-lg-5 col-md-5 pr-0 align-self-center">
                    <img class="img-fluid w-100" src="{{asset('/')}}website/images/client.png" alt="clients-image">
                </div>
                <div class="col-lg-7 col-md-7 align-self-center pl-0">
                    <div class="testimonial-slider p-5">
                        <!-- slider item -->
                        <div class="outline-0">
                            <i class="testimonial-icon ti-quote-left"></i>
                            <p class="text-dark">Lorem ipsum dolor sit amet constur adipisicing elit sed eiusmtempor incid sed dolore magna aliqu enim minim veniam quis nostrud exercittion ullamco labo ris nisi aliquip excepteur.</p>
                            <h4 class="font-weight-normal">Julia Robertson</h4>
                            <h6 class="font-secondary text-color">Happy Clients</h6>
                        </div>
                        <!-- slider item -->
                        <div class="outline-0">
                            <i class="testimonial-icon ti-quote-left"></i>
                            <p class="text-dark">Lorem ipsum dolor sit amet constur adipisicing elit sed eiusmtempor incid sed dolore magna aliqu enim minim veniam quis nostrud exercittion ullamco labo ris nisi aliquip excepteur.</p>
                            <h4 class="font-weight-normal">Julia Robertson</h4>
                            <h6 class="font-secondary text-color">Happy Clients</h6>
                        </div>
                        <!-- slider item -->
                        <div class="outline-0">
                            <i class="testimonial-icon ti-quote-left"></i>
                            <p class="text-dark">Lorem ipsum dolor sit amet constur adipisicing elit sed eiusmtempor incid sed dolore magna aliqu enim minim veniam quis nostrud exercittion ullamco labo ris nisi aliquip excepteur.</p>
                            <h4 class="font-weight-normal">Julia Robertson</h4>
                            <h6 class="font-secondary text-color">Happy Clients</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /testimonial -->



@endsection
