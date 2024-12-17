@extends('layouts.main', ['title' => 'Home', 'header' => 'Home' ])


@push('after-styles')
    <style>

    </style>
@endpush

@section('content')


    <div id="page" class="site">


        <div id="content" class="site-content">
            <div class="page-header flex-middle">
                <div class="container">
                    <div class="inner flex-middle">
                        <h1 class="page-title">Why Choose Us</h1>
                        <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li class="active">About us</li>
                        </ul>
                    </div>
                </div>
            </div>
            <section class="why-choose-us">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <img src="images/man1.png" alt="">
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="why-right">
                                <div class="ot-heading">
                                    <span>// about company</span>
                                    <h2 class="main-heading">Your Partner for <br> Financial solution</h2>
                                </div>
                                <p class="mb-15">Company established
                                    as
                                    a
                                    financial
                                    consultancy in Tanzania. Our core service
                                    are, accounting service, tax consultancy and
                                    auditing. We are serving clients across Asia,
                                    Europe, East Africa and North America. We
                                    specialized in customized financial service
                                    packages and strategies for small and large
                                    business.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="why-choose-us">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="why-right">
                                <div class="ot-heading">
                                    <h2 class="main-heading">Dedicated to Delivering Quick and Reliable Financing Solutions </h2>
                                </div>
                                <p class="mb-15">Our expertise is to create perfect financing
                                    solutions adapted to our clients need. We
                                    base on technical skills and we proudly
                                    creating the smooth business environment
                                    to our clients on their daily operations. Our
                                    team are always hard at work to ensure we
                                    deliver on what we promise so quickly.</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <img src="images/man1.png" alt="">
                        </div>
                    </div>
                </div>
            </section>

        </div>

    </div><!-- #page -->
    <a id="back-to-top" href="#" class="show"><i class="flaticon-up-arrow"></i></a>
    <!-- jQuery -->

@endsection
