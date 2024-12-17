<header id="site-header" class="site-header sticky-header header-static">
    <!-- Main Header start -->
    <div class="header-topbar style-2">
        <div class="octf-area-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <ul class="social-list">
                            <li><a href="http://twitter.com/" target="_self"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="http://facebook.com/" target="_self"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="http://linkedin.com/" target="_self"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="http://instagram/" target="_self"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-8">
                        <ul class="topbar-info align-self-end clearfix">
                            <li><a href="tel:+1-800-456-478-23"><i class="fas fa-phone-alt"></i> +255 (757) 888 110</a></li>
                            <li><a href="mailto:engitech@mail.com"><i class="fas fa-envelope"></i> info@fedhabud.co.tz</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="octf-main-header">
        <div class="octf-area-wrap">
            <div class="container octf-mainbar-container">
                <div class="octf-mainbar">
                    <div class="octf-mainbar-row octf-row">
                        <div class="octf-col logo-col">
                            <div id="site-logo" class="site-logo">
                                <a href="{{url('/')}}">
                                    <img src="{{url('images/fedhabud.png')}}" alt="fedhabud" class="">
                                </a>
                            </div>
                        </div>
                        <div class="octf-col menu-col">
                            <nav id="site-navigation" class="main-navigation">
                                <ul class="menu">
                                    <li>
                                        <a href="{{url('/')}}">Home</a>
                                    </li>

                                    <li class="menu-item-has-children"><a href="#">Services</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{route('general_information.service','accounting')}}">Accounting Services</a></li>
                                            <li><a href="{{route('general_information.service','tax')}}">Tax Consultant Service</a></li>
                                            <li><a href="{{route('general_information.service','audit')}}">Auditing Service</a></li>
                                        </ul>
                                    </li>

{{--                                    <li><a href="bl">Blog</a>--}}
{{--                                    </li>--}}
                                    <li><a href="{{route('general_information.contact_us')}}">Contacts</a></li>
                                    <li><a href="{{route('general_information.about_us')}}">About Us</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="octf-col cta-col text-right">
                            <!-- Call To Action -->
                            <div class="octf-btn-cta">



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header_mobile">
        <div class="container">
            <div class="mlogo_wrapper clearfix">
                <div class="mobile_logo">
                    <a href="{{url('/')}}">
                        <img src="{{url('images/fedhabud.png')}}" alt="fedhabud">
                    </a>
                </div>
                <div id="mmenu_toggle">
                    <button></button>
                </div>
            </div>
            <div class="mmenu_wrapper">
                <div class="mobile_nav collapse">
                    <ul id="menu-main-menu" class="mobile_mainmenu">
                        <li>
                            <a href="{{url('/')}}">Home</a>
                        </li>

                        <li class="menu-item-has-children"><a href="#">Services</a>
                            <ul class="sub-menu">
                                <li><a href="{{route('general_information.service','accounting')}}">Accounting Services</a></li>
                                <li><a href="{{route('general_information.service','tax')}}">Tax Consultant Service</a></li>
                                <li><a href="{{route('general_information.service','audit')}}">Auditing Service</a></li>
                            </ul>
                        </li>

                        {{--                                    <li><a href="bl">Blog</a>--}}
                        {{--                                    </li>--}}
                        <li><a href="{{route('general_information.contact_us')}}">Contacts</a></li>
                        <li><a href="{{route('general_information.about_us')}}">About Us</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</header>
