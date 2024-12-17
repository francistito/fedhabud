@extends('layouts.main', ['title' => 'Home', 'header' => 'Home' ])


@push('after-styles')
    <style>

    </style>
@endpush

@section('content')

    <div class="content-wrapper">
        <!-- Lines -->
        <section class="content-lines-wrapper">
            <div class="content-lines-inner">
                <div class="content-lines"></div>
            </div>
        </section>
        <!-- Header Banner -->
        <section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-darkgray="5" data-background="img/banner.jpg" style="background-image: url(&quot;img/banner.jpg&quot;);">
        </section>
        <!-- Services Page -->
        <section class="section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title2">Architecture</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <p>Architecture non lorem ac erat suscipit bibendum. Nulla facilisi sedeuter nunc volutpat molli sapien veconseyer turpeutionyer masin libero sempe. Fusceler mollis augue sit amet hendrerit vestibulum. Duisteyerionyer venenatis lacus.</p>
                        <p>Villa gravida eros ut turpis interdum ornare. Interdum et malesu they adamale fames ac anteipsun pimsinefaucibus urabitur arcu site feugiat in volutpat.</p>
                        <div class="row mb-30">
                            <div class="col-md-6 gallery-item">
                                <a href="img/services/9.jpg" title="Architecture" class="img-zoom">
                                    <div class="gallery-box">
                                        <div class="gallery-img"> <img src="img/services/9.jpg" class="img-fluid mx-auto d-block" alt="Architecture"> </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 gallery-item">
                                <a href="img/services/10.jpg" title="Architecture" class="img-zoom">
                                    <div class="gallery-box">
                                        <div class="gallery-img"> <img src="img/services/10.jpg" class="img-fluid mx-auto d-block" alt="Architecture"> </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-12 gallery-item">
                                <a href="img/services/11.jpg" title="Architecture" class="img-zoom">
                                    <div class="gallery-box">
                                        <div class="gallery-img"> <img src="img/services/11.jpg" class="img-fluid mx-auto d-block" alt="Architecture"> </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 sidebar-side">
                        <aside class="sidebar blog-sidebar">
                            <div class="sidebar-widget services">
                                <div class="widget-inner">
                                    <div class="sidebar-title">
                                        <h4>All Services</h4>
                                    </div>
                                    <ul>
                                        <li class="active"><a href="architecture.html">Achitecture</a></li>
                                        <li><a href="interior-design.html">Interior Design</a></li>
                                        <li><a href="urban-design.html">Urban Design</a></li>
                                        <li><a href="planning.html">Planning</a></li>
                                        <li><a href="3d-modelling.html">3D Modelling</a></li>
                                        <li><a href="decor-plan.html">Decor Plan</a></li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>

            </div>
        </section>
        <!-- Footer -->

    </div>
    <!-- jQuery -->

@endsection


