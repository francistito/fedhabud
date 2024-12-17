<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>FEDHABUD - FINANCIAL SOLUTION</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    {{ Html::style(url('css/bootstrap.min.css')) }}
    {{ Html::style(url('css/animate.css')) }}
    {{ Html::style(url('css/font-awesome.min.css')) }}
    {{ Html::style(url('css/flaticon.css')) }}
    {{ Html::style(url('css/owl.carousel.min.css')) }}
    {{ Html::style(url('css/owl.theme.css')) }}
    {{ Html::style(url('css/magnific-popup.css')) }}
    {{ Html::style(url('css/home15.css')) }}
    {{ Html::style(url('css/royal-preload.css')) }}
    {{ Html::style(url('css/style.css')) }}
    <link rel="stylesheet" type="text/css" href="{{url('plugins/revolution/revolution/css/settings.css')}}">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="{{url('plugins/revolution/revolution/css/navigation.css')}}">
    @stack('after-styles')

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
<!-- Preloader -->
{{--<div id="preloader"></div>--}}


<!-- Main -->
<div id="page" class="site">
    <!-- Slider -->
    @include('includes.header')
    <!-- Content -->
    <div id="content" class="site-content">
        <!-- Lines -->
    @yield('content')

    <!-- Footer -->
        @include('includes.footer')
    </div>
</div>
<!-- jQuery -->
{{ Html::script(url('js/jquery.min.js')) }}
{{ Html::script(url('js/jquery.magnific-popup.min.js')) }}
{{ Html::script(url('js/jquery.isotope.min.js')) }}
{{ Html::script(url('js/owl.carousel.min.js')) }}
{{ Html::script(url('js/easypiechart.min.js')) }}
{{ Html::script(url('js/jquery.countdown.min.js')) }}
{{ Html::script(url('js/scripts.js')) }}
{{ Html::script(url('js/header-mobile.js')) }}
{{ Html::script(url('js/royal_preloader.min.js')) }}
{{ Html::script(url('plugins/revolution/revolution/js/jquery.themepunch.tools.min.js')) }}
{{ Html::script(url('plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js')) }}
{{ Html::script(url('plugins/revolution/revolution/js/extensions/revolution-plugin.js')) }}



@stack('after-scripts')

<script>
    window.jQuery = window.$ = jQuery;
    (function($) { "use strict";
        //Preloader
        Royal_Preloader.config({
            mode           : 'logo',
            logo           : 'images/logo.svg',
            logo_size      : [160, 75],
            showProgress   : true,
            showPercentage : true,
            text_colour: '#000000',
            background:  '#ffffff'
        });
    })(jQuery);
</script>
</body>


</html>
