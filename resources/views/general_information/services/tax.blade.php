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
                        <h2 class="section-title2">TAX
                            CONSULTANCY</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <p>Our taxation professionals provide a wide range of tax services including tax
                            compliance, planning and consulting. They are well versed in the unique tax
                            laws in Tanzania mainland and Zanzibar. .
                            The following are services under tax environment we are offer;</p>
                        <p><strong>Tax preparation:</strong>  preparing and filling tax return for individuals, businesses
                            and organization, ensuring accurate reporting of income, deductions and
                            credits.</p>

                        <p><strong>Tax planning: </strong>  Advising clients on tax strategies and planning to minimize
                            their tax liabilities legally such as year-round tax planning considering factors
                            such as investment, retirement contribution and business.</p>

                        <p><strong>Tax compliance:</strong>    ensuring our clients adhere to tax laws and regulations at
                            the national and local levels.</p>
                        <p><strong>Tax audit representation:</strong> representing clients in the event of a tax audit by
                            tax authorities.</p>
                        <p><strong>Estate and inheritance tax planning:</strong>
                             developing strategies to minimize
                            estate and inheritance tax obligations for individuals and families.</p>
                        <p><strong>  International taxation:</strong>
                            We advise individuals and businesses on tax matters
                            related to international activities, including cross border transaction, transfer
                            pricing and compliance with international tax treaties</p>
                        <p><strong>   Tax credits and incentives:  </strong>
                            identifying and helping clients take advantage of
                            tax credits and incentives available at national and local level to reduce tax
                            liabilities. Especially entities under Special Economic Zone regulated under
                            Export Processing Zone (EPZA).</p>
                        <p><strong>      Taxation Advisory services:  </strong>
                            our team of expert offers a wide range on
                            structuring business transactions, evaluating tax implication of investment
                            and providing guidance on complex tax issues.</p>
                        <p><strong>     Tax software and technology implementation: </strong>
                            assisting business in
                            selecting, implementing and optimizing tax software and technology
                            solutions to streamline tax compliance and reporting processes.</p>
                        <p><strong>     Non-profit tax compliance: </strong>
                             providing tax service to non-profit organizations,
                            including applying for tax-exempt status, complying with non-profit tax
                            regulation and filling annual returns</p>
                        <p><strong>      Payroll tax services: </strong>
                           managing payroll tax compliance, including calculating
                            and remitting payroll taxes and ensuring compliance with employment tax
                            regulations.</p>
                        <p><strong>       Tax education and training: </strong>
                            conducting training sessions to educate clients
                            or employees about tax matters and updates in tax laws.
                            We can help you to achieve your business goals through uniquely designed,
                            objective focused on tax areas.</p>
                    </div>
                    <div class="col-md-4 sidebar-side">
                        @include('general_information.services.includes.service_side_links')
                    </div>
                </div>

            </div>
        </section>
        <!-- Footer -->

    </div>
    <!-- jQuery -->

@endsection


