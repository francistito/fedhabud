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
                        <h2 class="section-title2">AUDITING SERVICE</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <p>Our team of experts provide systematic examination and verification of
                            financial records, transactions, and processes within an organization and
                            business in accordance with International Standard on Auditing (ISA).</p>
                        <p><strong>Assurance Audit:</strong>  we examine an organization’s
                            financial statement our main target is to provide
                            opinion on whether the financial statements present a
                            true and fair view of the company financial position and
                            performance.</p>

                        <p><strong>Internal audits: </strong> we provide internal audit service by
                            using our competent auditors to evaluate organizations
                            internal controls, processes and financial systems. We
                            assess compliance with policies, identify weakness
                            areas of risk, and provide recommendation for
                            organization improvement.</p>

                        <p><strong>External audits:</strong>   we conduct audits on behalf of third
                            parts stakeholders such investors, lenders or regulatory
                            authorities. We aim to provide assurance to external
                            parties regarding accuracy and reliability of financial
                            statements.</p>
                        <p><strong>Compliance audit:</strong>we focus on ensuring your
                            organization adheres to specific laws, regulations and
                            industry standards. We aim to help your organization
                            avoid legal and regulatory violations.</p>
                        <p><strong>Operation audits:</strong>
                             we examine an organization’s
                            internal processes and procedures to assess efficiency,
                            effectiveness and adherence to established policies.</p>
                        <p><strong>  Information systems audits (IT audits): </strong>
                             we ensure that
                            IT systems support the organization’s goals and protect
                            against data breaches and cyber threats by assess
                            organization’s
                            information
                            technology
                            system
                            including data security, access controls and reliability of
                            data processing.</p>
                        <p><strong>    Forensic audits: </strong>
                            we investigate financial irregularities,
                            fraud and suspected financial misconduct of the
                            organizations to provide expert testimony.</p>
                        <p><strong>       Special purpose audit: </strong>
                         we conduct specific audit for
                            specific purpose such as evaluating the effectiveness of
                            internal control system, assessing the accuracy of
                            royalty payments, determining compliance with grant
                            agreements and so many purpose as per customer
                            needs.</p>
                        <p><strong>    Environmental audits: </strong>
                           we evaluate the environmental
                            impact of operations and suggest ways to reduce
                            organization negative effects.
                            We ensure financial transparency, accountability and
                            the integrity of financial information in both public and
                            private organization. We play a critical role in providing
                            assurance to our clients and helping their organization
                            to identify and mitigate risks.</p>
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


