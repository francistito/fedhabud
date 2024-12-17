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

        /* Tabs*/
        .feature_section {
            padding: 30px 20px;
        }


        #tabs{
            background: #E1FCF3;
            color: #5B6880;
        }
        #tabs h6.section-title{
            color: #eee;
        }

        #tabs .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
            color: #5B6880;
            background-color: transparent;
            border-color: transparent transparent #f3f3f3;
            border-bottom: 4px solid !important;
            font-size: 20px;
            font-weight: bold;
        }
        #tabs .nav-tabs .nav-link {
            border: 1px solid transparent;
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem;
            color: #01358D;
            font-size: 20px;
        }
    </style>
@endpush

@section('content')

    <div class="pd-top-120">
        @include('includes.components.features')

    </div>
@endsection



@push('after-scripts')
    <script>


    </script>
@endpush
