@extends('layouts.main', ['title' => 'Home', 'header' => 'Home' ])


@push('after-styles')
    <style>

    </style>
@endpush

@section('content')


    <div id="page" class="site">


        <div id="content" class="site-content">


            @include('includes.home_sections.slider')


            @include('includes.home_sections.about_us')


{{--            @include('includes.home_sections.why_choose')--}}


{{--            @include('includes.home_sections.statics')--}}


            @include('includes.home_sections.services')


            @include('includes.home_sections.call_action')
{{--            @include('includes.home_sections.projects')--}}


            @include('includes.home_sections.industry')

{{--            @include('includes.home_sections.clients')--}}


        </div>

    </div><!-- #page -->
    <a id="back-to-top" href="#" class="show"><i class="flaticon-up-arrow"></i></a>
    <!-- jQuery -->

@endsection
