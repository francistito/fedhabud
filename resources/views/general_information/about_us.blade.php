@extends('layouts.main', ['title' => __("label.about_us"), 'header' => __("label.about_us")])

@push('after-styles')
    <style>
        .about_features_card{
            background: white;
            border-radius: 6px;
            height: 450px;
            max-height: 450px;
            overflow: hidden;
            padding: 2rem;
            transition: max-height 500ms ease-in-out;
        }
        .about_features_card:hover{
            max-height: 600px;
        }
    </style>
@endpush

@section('content')
{{--    <iframe title="location" src="{{url('https://psms.co.tz/resource/general_information/user_manual')}}" width="600" height="500" frameborder="0" style="border:0;margin: 40px 0px 0px 70px" allowfullscreen=""></iframe>--}}
{{--    <embed type="text/html" src="{{url('https://psms.co.tz/resource/general_information/user_manual')}}" width="500" height="200">--}}

    <!-- about area start -->
    <div class="about-provide-area pd-top-120 bg-none">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{asset('img/app_logo.png')}}" alt="video">
                </div>
                <div class="col-xl-5 col-lg-6 desktop-center-item">
                    <div>
                        <div class="section-title style-two">
                            <h2 class="title">What is the <span>NEXTACCOUNTING?</span></h2>
                            <p>{!! sysdef()->data('SYDABT') !!} </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area End -->

    <!-- sbst service area start -->
<div class="service-area sbtc-service-area pd-top-120" id="services">
    <div class="container">
        <div class="section-title style-two text-center">
            <h2 class="title">Excellent accounting tools for <span>small, medium and growing businesses </span>  </h2>
        </div>
        <div class="row custom-gutters-16 justify-content-center">
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="single-service-2 style-two text-center">
                    <div class="thumb">
                        <img src="{{url('assets/img/startup/service/1.svg')}}" alt="service">
                    </div>
                    <h6>Save Up time</h6>
                    <p>Accurately manage all transactions on one place, be ahead all the time.</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="single-service-2 style-two text-center">
                    <div class="thumb">
                        <img src="{{url('assets/img/startup/service/2.svg')}}" alt="service">
                    </div>
                    <h6>Well Organised</h6>
                    <p>Organise you company with ease, Ensure all information are on the right place to improve your planning and decision making</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="single-service-2 style-two text-center">
                    <div class="thumb">
                        <img src="{{url('assets/img/startup/service/3.svg')}}" alt="service">
                    </div>
                    <h6>Grow Business</h6>
                    <p>NextAccounting is not just going to simplfy and optimize resource but will help grow your business even faster.</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="single-service-2 style-two text-center">
                    <div class="thumb">
                        <img src="{{url('assets/img/startup/service/4.svg')}}" alt="service">
                    </div>
                    <h6>Help & Support</h6>
                    <p>Our team is available all the time to make sure you are well assisted to utilize our software up to 100%. Customer support is just one click away, We wont let you miss a thing.</p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection



@push('after-scripts')
    <script>


    </script>
@endpush
