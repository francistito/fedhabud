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
                        <h1 class="page-title">Contact</h1>
                        <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
            <section class="contact-page">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact-left">
                                <div class="ot-heading">
                                    <span>// contact details</span>
                                    <h2 class="main-heading">Contact us</h2>
                                </div>
                                <div class="space-5"></div>
                                <p>Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days. We will be happy to answer your questions.</p>
                                <div class="contact-info box-style1">
                                    <i class="flaticon-world-globe"></i>
                                    <div class="info-text">
                                        <h6>Our Address:</h6>
                                        <p>Chabruma Street, Ali Hassan Mwinyi Road, ALFA Plaza, 3rd Floor, Room no.</p>
                                    </div>
                                </div>
                                <div class="contact-info box-style1">
                                    <i class="flaticon-envelope"></i>
                                    <div class="info-text">
                                        <h6>Our Mailbox:</h6>
                                        <p>info@fedhabud.co.tz</p>
                                    </div>
                                </div>
                                <div class="contact-info box-style1">
                                    <i class="flaticon-phone-1"></i>
                                    <div class="info-text">
                                        <h6>Our Phone:</h6>
                                        <p>+255 (757) 888 110</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <form id="ajax-form" name="ajax-form" action="#" method="post" class="wpcf7">
                                <div class="main-form">
                                    <h2>Ready to Get Started?</h2>
                                    <p class="font14">Your email address will not be published. Required fields are marked *</p>
                                    <p>
                                        <label for="name"> <span class="error" id="err-name">please enter name</span></label>
                                        <input type="text" name="name" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Your Name *" required="">
                                    </p>
                                    <p>
                                        <label for="email">
                                            <span class="error" id="err-email">please enter e-mail</span>
                                            <span class="error" id="err-emailvld">e-mail is not a valid format</span>
                                        </label>
                                        <input type="email" name="email" id="email" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Your Email *" required="">
                                    </p>
                                    <p>
                                        <label for="message"></label>
                                        <textarea name="message" id="message" cols="40" rows="10" class="" aria-invalid="false" placeholder="Message..." required=""></textarea>
                                    </p>
                                    <p><button type="submit" id="send" class="octf-btn octf-btn-light">Send Message</button></p>
                                    <div class="clear"></div>
                                    <div class="error" id="err-form">There was a problem validating the form please check!</div>
                                    <div class="error" id="err-timedout">The connection to the server timed out!</div>
                                    <div class="error" id="err-state"></div>
                                </div>
                            </form>
                            <div class="clear"></div>
                            <div id="ajaxsuccess">Successfully sent!!</div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="no-padding">
                <div class="map">
{{--                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d86077.66255184308!2d-122.40402224079803!3d47.60810999586645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54906ab3f905c4b1%3A0x96bf575ff75ab1aa!2s411%20University%20St%2C%20Seattle%2C%20WA%2098101%2C%20Hoa%20K%E1%BB%B3!5e0!3m2!1svi!2s!4v1584084043716!5m2!1svi!2s" height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>--}}
                </div>
            </div>
        </div>

    </div><!-- #page -->
    <a id="back-to-top" href="#" class="show"><i class="flaticon-up-arrow"></i></a>
    <!-- jQuery -->

@endsection
