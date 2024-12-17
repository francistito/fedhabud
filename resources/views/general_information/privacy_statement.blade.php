@extends('cms.layouts.terms', ['title' => __("label.privacy_statement"), 'header' => __("label.privacy_statement")])

@push('after-styles')
    <style type="text/css">
        @page { margin: 1in }
        p { margin-bottom: 0.1in; direction: ltr; line-height: 120%; text-align: left; orphans: 2; widows: 2 }
        h1 { margin-top: 0.33in; margin-bottom: 0in; direction: ltr; color: #365f91; line-height: 115%; text-align: left; page-break-inside: avoid; orphans: 2; widows: 2 }
        h1.western { font-family: "Zoho_Puvi_Regular, sans-serif;", serif; font-size: 14pt }
        h1.cjk { font-family: ; font-size: 14pt }
        h1.ctl { font-family: ; font-size: 14pt }
        h2 { margin-bottom: 0in; direction: ltr; color: #4f81bd; line-height: 115%; text-align: left; page-break-inside: avoid; orphans: 2; widows: 2 }
        h2.western { font-family: "Zoho_Puvi_Regular, sans-serif;", serif; font-size: 13pt }
        h2.cjk { font-family: ; font-size: 13pt }
        h2.ctl { font-family: ; font-size: 13pt }
        h3 { margin-top: 0.14in; margin-bottom: 0in; direction: ltr; color: #4f81bd; line-height: 115%; text-align: left; page-break-inside: avoid; orphans: 2; widows: 2 }
        h3.western { font-family: "Zoho_Puvi_Regular, sans-serif;", serif; font-size: 11pt }
        h3.cjk { font-family: ; font-size: 11pt }
        h3.ctl { font-family: ; font-size: 11pt }


    </style>
@endpush

@section('content')

    <section class="py-5  " style="background-color: #32464A;width: 100%">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="text-light">Privacy Statement</h1>
                {{--                <p class="lead text-light">Our security strategy involves the following components</p>--}}

            </div>
        </div>
    </section>


    <div class="row">
<div class="col-md-2">

</div>
        <div class="col-lg-8 col-xl-8">
            <section class="card card-horizontal mb-4">
                <div class="card-body p-4">
<p style="margin-bottom: 0.14in; line-height: 115%"><b>Privacy
        Statement</b></p>
                    <p style="margin-bottom: 0.14in; line-height: 115%"><b>Last Updated:
                            Sept 9, 2021</b></p>
                    <ol>
                        <li/>
                        <h2 class="western"><font color="#00000a">Introduction and
                                overview</font></h2>
                    </ol>
                    <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">{{ reseller_env_value('vendor_short') }}
                        leverages technology responsibly to power prosperity around the
                        world, and we believe that everyone has a right to privacy. At
                        {{ reseller_env_value('vendor_short') }}, we view privacy as a key part of the value that we deliver
                        to our customers. {{ reseller_env_value('vendor_short') }}’s Data Stewardship Principles were
                        developed to describe {{ reseller_env_value('vendor_short') }}’s values regarding the data our
                        customers entrust to us.</p>
                    <ol start="2">
                        <li/>
                        <h2 class="western" align="justify"><font color="#00000a">The
                                {{ reseller_env_value('vendor_short') }} Platform and your Information</font></h2>
                    </ol>
                    <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">When
                        we say “platform” we mean that when you choose to share data with
                        us, or bring over information from third parties (like a bank or loan
                        provider), we use that data together, not just within the individual
                        offering(s) you’re using. This means your bookkeeping details from
                        NextAccounting, Inventory System and HR System all live together.
                    </p>
                    <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">The
                        personal information we use in this centralized way is all the
                        information that {{ reseller_env_value('vendor_short') }} knows about you. It includes your
                        credentials; your name and contact details; payment information;
                        information about your activities, your interests and preferences;
                        insights about your finances or your business; the content you place
                        in our Platform; and information we have collected about you from
                        third-party sources.</p>
                    <ol start="3">
                        <li/>
                        <h2 class="western"><font color="#00000a">Organizational
                                account information</font></h2>
                    </ol>
                    <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">Some
                        {{ reseller_env_value('vendor_short') }}                        interact with an organization (such as your employer). If you are
                        granted access to an organization or household account (for example,
                        a business's account in NextAccounting), the owner of the
                        organization or a designated administrator may control and administer
                        details of your account, for example, by deciding your access rights;
                        making decisions about your personal information (such as details
                        about your payroll); or requiring you to take certain actions (for
                        example, use location tracking to clock in for a shift). If your
                        access rights are amended by the owner or designated administrator,
                        then you may lose access to the information that is in the control of
                        the organization.</p>
                    <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">Your
                        {{ reseller_env_value('vendor_short') }}                        may be subject to the organization’s policies, which may be
                        different from this Statement. We are not responsible for the privacy
                        or security practices of other organizations, and you should consider
                        both the organization's policies and whether you are comfortable
                        enabling the organization with access to your information prior to
                        connecting to their services.</p>


                    </p>
                    <ol start="4">
                        <li/>
                        <h2 class="western"><font color="#00000a"> Information we
                                collect</font></h2>
                        <ol type="a">
                            <li/>
                            <h3 class="western"><font color="#00000a">Information we
                                    receive from you</font></h3>
                        </ol>
                    </ol>
                    <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">The
                        personal information that we receive about you depends on the context
                        of your interactions with {{ reseller_env_value('vendor_short') }}, how you configure your account
                        and the choices that you make, including your privacy settings.
                        Personal information that you provide may also depend upon what
                        services or experiences you use, your location and applicable law.</p>
                    <ol type="i">
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            <b>Register an account</b>. We collect information when you create
                            an account, interact with the {{ reseller_env_value('vendor_short') }} Platform or activate a
                            subscription. Personal information may include your contact
                            information (such as your name, address, phone number and email),
                            profile photo, billing information (your payment information),
                            usernames and credentials.</p>
                    </ol>
                    <p align="justify" style="margin-left: 0.5in; margin-bottom: 0.14in; line-height: 115%">



                    </p>
                    <ol type="i" start="2">
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            <b>Identification information</b>. We collect information to verify
                            your identity, including your name , email and phone number(s).</p>
                    </ol>
                    <p style="margin-left: 0.5in; margin-bottom: 0.14in; line-height: 115%">



                    </p>
                    <ol type="i" start="3">
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            <b>Customer support, product research, training and feedback. </b>We
                            may collect personal information when you reach out to us for
                            support, give us feedback, participate in optional surveys, product
                            research or training and you choose to share.</p>
                    </ol>
                    <p style="margin-left: 0.5in; margin-bottom: 0.14in; line-height: 115%">



                    </p>
                    <ol type="i" start="4">
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            <b>Social and community content</b>. We receive content you post on
                            our social media pages and our community pages.</p>
                    </ol>
                    <p style="margin-left: 0.5in; margin-bottom: 0.14in; line-height: 115%">



                    </p>
                    <ol type="i" start="5">
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            <b>Device information.</b> We may collect information about your
                            device such as Internet Protocol (“IP”) addresses, log
                            information, error messages, device type, and unique device
                            identifiers. For example, we may collect IP addresses from you as
                            part of our sign in and security features.</p>
                    </ol>
                    <p style="margin-left: 0.5in; margin-bottom: 0.14in; line-height: 115%">



                    </p>
                    <ol type="i" start="6">
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            <b>Content</b>. We may receive information about your business, your
                            finances, expenses, invoices, financial statements, details of your
                            financial transactions, payroll details, payment details, tax return
                            details, details about your customers or vendors or employees,
                            income and wage information, and/or investment information. This
                            will be at your own discretion for applicable on some scenarios e.g.
                            Business Loan Application, {{ reseller_env_value('vendor_short') }} and third party e.g. Bank may
                            need these information.</p>
                    </ol>
                    <p style="margin-left: 0.5in; margin-bottom: 0.14in; line-height: 115%">



                    </p>
                    <ol type="i" start="7">
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            <b>Third-party service content.</b> We receive information about you
                            when you sign into a third-party service with your account or when
                            you connect your account to a third-party service. For example, you
                            may choose to connect your account with your bank accounts. To sync
                            your financial account information, we must access your financial
                            account information.</p>
                    </ol>
                    <p style="margin-left: 0.5in; margin-bottom: 0.14in; line-height: 115%">



                    </p>
                    <ol type="i" start="8">
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            <b>Usage information.</b> We may collect usage information such as
                            the pages you viewed, the features you use, your browser type and
                            details about any links with which you interact.</p>
                    </ol>
                    <p style="margin-left: 0.5in; margin-bottom: 0.14in; line-height: 115%">



                    </p>
                    <ol type="i" start="9">
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            <b>Location information</b>. Certain features in the {{ reseller_env_value('vendor_short') }}
                            Platform may collect your precise location information, device
                            motion information, or both, if you grant permission to do so in
                            your device settings. For example, if you use our time-tracking
                            service.</p>
                    </ol>
                    <p style="margin-left: 0.5in; margin-bottom: 0.14in; line-height: 115%">



                    </p>
                    <ol type="i" start="10">
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            <b>Expert advice.</b> The {{ reseller_env_value('vendor_short') }} Platform provides many
                            opportunities for you to connect with live experts, including, for
                            example, accountants or tax preparers. When you interact with these
                            experts, we may receive information about the questions you ask, the
                            details of your accounts and the guidance provided to you.</p>
                    </ol>
                    <p style="margin-left: 0.5in; margin-bottom: 0.14in; line-height: 115%">



                    </p>
                    <ol type="i" start="11">
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            <b>Information stored locally. </b>Some of our web-enabled desktop
                            services and offerings synchronize with the information on your
                            computer. In doing so, we may collect information such as device
                            information, product usage, and error reports. We may also store
                            personal information locally on your device.</p>
                    </ol>
                    <p style="margin-left: 0.5in; margin-bottom: 0.14in; line-height: 115%">



                    </p>
                    <ol type="i" start="12">
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            <b>Testimonials</b> : When you authorize us to post testimonials
                            about our products and services on websites, we may include your
                            name and other personal information in the testimonial. You will be
                            given an opportunity to review and approve the testimonial before we
                            post it. If you wish to update or delete your testimonial, you can
                            contact us.</p>
                    </ol>
                    <p style="margin-left: 0.5in; margin-bottom: 0.14in; line-height: 115%">



                    </p>
                    <p align="justify" style="margin-bottom: 0.14in; line-height: 115%"><br/>


                    </p>
                    <ol start="5">
                        <li/>
                        <h2 class="western"><font color="#00000a">How we use personal
                                information</font></h2>
                    </ol>
                    <p style="margin-bottom: 0.14in; line-height: 115%">We collect and
                        process personal information from you only where:</p>
                    <ul>
                        <li/>
                        <p style="margin-bottom: 0.14in; line-height: 115%">We have
                            your consent to do so;</p>
                        <li/>
                        <p style="margin-bottom: 0.14in; line-height: 115%">We need
                            the personal information to perform a contract with you or provide a
                            service to you;</p>
                        <li/>
                        <p style="margin-bottom: 0.14in; line-height: 115%">Provide
                            you with the benefits of the {{ reseller_env_value('vendor_short') }} Platform and operate our
                            business;</p>
                        <li/>
                        <p style="margin-bottom: 0.14in; line-height: 115%">The
                            processing is in our legitimate business interests in those
                            jurisdictions where legitimate business interest is a legitimate
                            basis for processing; or</p>
                        <li/>
                        <p style="margin-bottom: 0.14in; line-height: 115%">We need to
                            comply with legal requirements, including applicable laws and
                            regulations.</p>
                    </ul>
                    <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">Personal
                        information is used to operate our business for the following
                        purposes that are required to originate and maintain our relationship
                        with you, including but not limited to:</p>
                    <ul>
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            Provide you with the {{ reseller_env_value('vendor_short') }} Platform and create your account</p>
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            Improve our products and services</p>
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            Run and manage our business, including resolving billing and
                            financial disputes</p>
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            Evaluate your eligibility for financial offers, products and
                            services</p>
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            Provide features to you, such as your free credit reports and scores</p>
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            Connect you with experts and other users</p>
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            Communicate with you, such as sending you electronic notifications
                            concerning your financial privacy</p>
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            Advertise and market our services and experiences</p>
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            Personalize your experience and tailor recommendations and offers
                            presented to you, including through the development of insights
                            about you and your needs</p>
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            Provide you with support and resolve disputes</p>
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            Conduct research, including by partnering with academic institutions</p>
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            Comply with our legal and regulatory requirements</p>
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            Protect the rights, property, safety or security of the {{ reseller_env_value('vendor_short') }}
                            Platform, our customers, employees or others and prevent fraudulent
                            or illegal activity</p>
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            To exercise our rights in the course of judicial, administrative or
                            arbitration proceedings</p>
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            To enforce, remedy or apply our Terms of Service or other agreements
                            and/or</p>
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            For other purposes that are compatible with the disclosed purposes
                            if and where this is permitted by applicable law.</p>
                    </ul>
                    <p align="justify" style="margin-bottom: 0.14in; line-height: 115%"><br/>


                    </p>
                    <ol start="6">
                        <li/>
                        <h1 class="western"><font color="#00000a">Your information
                                rights and choices</font></h1>
                        <ol type="i">
                            <li>
                            <h2 class="western"><font color="#00000a">Your Rights</font></h2>
                            <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">At
                                {{ reseller_env_value('vendor_short') }}, we believe that you have rights to information that
                                pertains to you, your household and/or your business. If another
                                person has input or processed information in the {{ reseller_env_value('vendor_short') }} Platform on
                                behalf of you, your family or your business (and we are processing
                                such information as an Information Controller), you may ask to
                                receive a copy of your information, even if you do not have an
                                account with us.</p>
                            </li>

                            <li/>
                            <h2 class="western"><font color="#00000a">Verification</font></h2>
                            <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">To
                                help protect privacy and the security of your information, you may be
                                asked to provide additional information to verify your identity
                                and/or ownership rights prior to us exercising your data rights. If
                                we are unable to verify your identity or ownership rights to the
                                data, we may not be able to provide you with data rights until you
                                are able to provide us with proper documents.</p>

                            <li/>
                            <h2 class="western"><font color="#00000a">Information
                                    Retention</font></h2>
                            <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">Unless
                                you specifically ask us to delete your personal information, we
                                retain your personal information as long as it is necessary to comply
                                with our data retention requirements and provide you with services
                                {{ reseller_env_value('vendor_short') }}                                request a deletion, we may be required to maintain your information
                                for as long as necessary to:</p>
                        </ol>
                    </ol>


                    <ol>
                        <ol start="3">

                        </ol>
                    </ol>

                    <ol type="a">
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            comply with our legal or regulatory compliance needs (e.g.
                            maintaining records of transactions you have made with us);</p>
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            to exercise, establish or defend legal claims; and/or</p>
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            to protect against fraudulent or abusive activity on our service.</p>
                    </ol>
                    <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">This
                        means we may keep different information for different periods. If
                        your account is canceled because you’ve not used it in a long time,
                        we may delete this information straight away.</p>


                    <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">There
                        may be occasions where we are unable to fully delete, anonymize, or
                        de-identify your information due to technical, legal, regulatory
                        compliance or other operational reasons. Where this is the case, we
                        will take reasonable measures to securely isolate your personal
                        information from any further processing until such time as we are
                        able to delete, anonymize, or de-identify it.</p>
                    <ol start="7">
                        <li/>
                        <h1 class="western"><font color="#00000a">Security of your
                                information</font></h1>
                    </ol>
                    <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">We
                        use physical, technical and organizational safeguards designed to
                        protect your information. If you have any concerns regarding the
                        security of your data, we encourage you to check our <a href="{{route('resource.security_policy')}}" <font color="#0070c0"><b>Security
                                policy</b></font>.</a>
                    </p>
                    <ol start="8">
                        <li/>
                        <h1 class="western"><font color="#00000a">Changes to our
                                Privacy Statements</font></h1>
                    </ol>
                    <p align="justify" style="margin-bottom: 0.14in; line-height: 115%"><a name="_GoBack"></a>
                        From time to time we may change or update our Privacy Statement. We
                        reserve the right to make changes or updates at any time. If we make
                        material changes to the way we process your personal information, we
                        will notify you by posting a notice in our platform or on a community
                        post; by sending you a notification; or by other means consistent
                        with applicable law.</p>
                    <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">You
                        can see when this Privacy Statement was last updated by checking the
                        “last updated” date displayed at the top of this Privacy
                        Statement. Please review this Privacy Statement periodically to stay
                        informed about how Nextbyte protects your privacy.</p>
                </div>
            </section>
        </div>

        <div class="col-md-2">

        </div>
    </div>

@endsection


@push('after-scripts')
    <script>


    </script>
@endpush
