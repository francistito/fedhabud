@extends('cms.layouts.terms', ['title' => __("label.terms_of_service"), 'header' => __("label.terms_of_service")])

@push('after-styles')
    <style type="text/css">
        @page { margin: 1in }
        p { margin-bottom: 0.1in; direction: ltr; line-height: 120%; text-align: left; orphans: 2; widows: 2 }
        h2 { margin-bottom: 0in; direction: ltr; color: #4f81bd; line-height: 115%; text-align: left; page-break-inside: avoid; orphans: 2; widows: 2 }
        h2.western { font-family: "Cambria", serif; font-size: 13pt }
        h2.cjk { font-family: ; font-size: 13pt }
        h2.ctl { font-family: ; font-size: 13pt }
        h3 { margin-top: 0.14in; margin-bottom: 0in; direction: ltr; color: #4f81bd; line-height: 115%; text-align: left; page-break-inside: avoid; orphans: 2; widows: 2 }
        h3.western { font-family: "Cambria", serif; font-size: 11pt }
        h3.cjk { font-family: ; font-size: 11pt }
        h3.ctl { font-family: ; font-size: 11pt }
    </style>
@endpush

@section('content')


    <section class="py-5  " style="background-color: #32464A;width: 100%">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="text-light">Terms of Service</h1>
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
<p style="margin-bottom: 0.14in; line-height: 115%"><a name="__DdeLink__2180_1721175994"></a>
    <b>Terms of Service</b></p>
                    <p style="margin-bottom: 0.14in; line-height: 115%"><b>Last Updated:
                            Jun 25, 2024</b></p>
                    <p align="justify" style="margin-bottom: 0.14in; line-height: 115%"><a name="_GoBack"></a>
                        Thank you for selecting the Services offered by {{ reseller_env_value('vendor') }} (referred to as “{{ reseller_env_value('vendor_short') }}”). and/or its
                        subsidiaries and affiliates (referred to as &quot;{{ app_name() }}&quot;,
                        &quot;we&quot;, &quot;our&quot;, or &quot;us&quot;). Review these
                        Terms of Service (&quot;Agreement&quot;) thoroughly. This Agreement
                        is a legal agreement between you and {{ reseller_env_value('vendor_short')}}. By clicking “I
                        Agree,” indicating acceptance electronically, or by, installing,
                        accessing or using the Services, you agree to this Agreement. If you
                        do not agree to this Agreement, then you may not use the Services.</p>
                    <p style="margin-bottom: 0.14in; line-height: 115%">


                    </p>
                    <p style="margin-bottom: 0.14in; line-height: 115%"><b>Section A</b></p>
                    <p style="margin-bottom: 0.14in; line-height: 115%"><b>GENERAL TERMS</b></p>
                    <ol>
                        <li/>
                        <h2 class="western"><font color="#00000a">AGREEMENT</font></h2>
                    </ol>
                    <p style="margin-bottom: 0.14in; line-height: 115%">This Agreement
                        describes the terms governing your use of the Nextbyte Services. It
                        includes by reference:</p>
                    <ol type="i">
                        <li/>
                        <p style="margin-bottom: 0.14in; line-height: 115%">{{ reseller_env_value('vendor_short')}}’s
                            Privacy policy</p>
                        <li/>
                        <p style="margin-bottom: 0.14in; line-height: 115%">Additional
                            terms and conditions, which may include those from third parties.</p>
                        <li/>
                        <p style="margin-bottom: 0.14in; line-height: 115%">Any terms
                            provided separately to you for the Services, including product or
                            program terms, ordering, activation, payment terms, data processing
                            agreements, etc.</p>
                        <li/>
                        <p style="margin-bottom: 0.14in; line-height: 115%">You must
                            be at least 18 years of age to use our Services. By accessing or
                            using our Services you agree that:</p>
                        <ol type="a">
                            <li/>
                            <p style="margin-bottom: 0.14in; line-height: 115%">You can
                                form a binding contract with {{ reseller_env_value('vendor_short')}};</p>
                            <li/>
                            <p style="margin-bottom: 0.14in; line-height: 115%">You will
                                comply with this Agreement and all applicable local, state,
                                national, and international laws, rules, and regulations, including
                                import and export regulations.</p>
                        </ol>
                    </ol>
                    <p style="margin-left: 1in; margin-bottom: 0.14in; line-height: 115%">



                    </p>
                    <ol start="2">
                        <li/>
                        <h2 class="western"><font color="#00000a">YOUR RIGHTS TO USE
                                THE SERVICES</font></h2>
                    </ol>
                    <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                        The Services are protected by copyright, trade secret, and other
                        intellectual property laws. You are only granted the right to use the
                        Services and only for the purposes described by {{ reseller_env_value('vendor_short')}}. {{ reseller_env_value('vendor_short')}}
                        reserves all other rights in the Services. Until termination of this
                        Agreement and as long as you meet any applicable payment obligations
                        and comply with this Agreement, {{ reseller_env_value('vendor_short')}} grants to you a personal,
                        limited, nonexclusive, nontransferable right and license to use the
                        Services.</p>
                    <p style="margin-bottom: 0.14in; line-height: 115%">You agree not
                        to use, nor permit any third party to use, the Services in a manner
                        that violates any applicable law, regulation or this Agreement. You
                        agree you will not:</p>
                    <ul>
                        <li/>
                        <p style="margin-bottom: 0.14in; line-height: 115%">Provide
                            access to or give any part of the Services to any third party.</p>
                        <li/>
                        <p style="margin-bottom: 0.14in; line-height: 115%">Reproduce,
                            modify, copy, sell, trade, lease, rent or resell the Services.</p>
                        <li/>
                        <p style="margin-bottom: 0.14in; line-height: 115%">Decompile,
                            disassemble, or reverse engineer the Services.</p>
                        <li/>
                        <p style="margin-bottom: 0.14in; line-height: 115%">Make the
                            Services available on any file-sharing or application hosting
                            service.</p>
                    </ul>
                    <ol start="3">
                        <li/>
                        <h2 class="western"><font color="#00000a">PAYMENT</font></h2>
                    </ol>
                    <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">For
                        Services offered on a payment or subscription basis, the following
                        terms apply, unless {{ reseller_env_value('vendor_short')}} or its third party affiliate notifies
                        you otherwise in writing. This Agreement also incorporates by
                        reference and includes program ordering and payment terms provided to
                        you on the website for the Services:</p>
                    <ol type="a">
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            Payments will be billed to you in Tanzania Shillings (TZS), U.S.
                            dollars, or other currencies which may be made available (plus any
                            and all applicable taxes, including without limitation VAT), as
                            shown in the product ordering and subscription terms, and your
                            account will be debited when you subscribe and provide your payment
                            information, unless stated otherwise in the program ordering or
                            payment terms on the website for the Services.</p>
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            You must pay with one of the following:</p>
                        <ol type="i">
                            <li/>
                            <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                                A  valid credit card acceptable to {{ reseller_env_value('vendor_short')}}</p>
                            <li/>
                            <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                                A valid debit card acceptable to {{ reseller_env_value('vendor_short')}}</p>
                            <li/>
                            <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                                Payment through Nextpay (Payment gateway)</p>
                            <li/>
                            <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                                By another payment option {{ reseller_env_value('vendor_short')}} provides to you in writing.</p>
                        </ol>
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            If your payment and registration information is not accurate,
                            current, and complete and you do not notify us promptly when such
                            information changes, we may suspend or terminate your account and
                            refuse any use of the Services.</p>
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            If you do not notify us of updates to your payment method (e.g.,
                            credit card expiration date), to avoid interruption of the Services,
                            we may participate in programs supported by your card provider
                            (e.g., updater services, recurring billing programs, etc.) to try to
                            update your payment information, and you authorize us to continue
                            billing your account with the updated information that we obtain.</p>
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            {{ reseller_env_value('vendor_short')}} Services at the then-current rates, unless the Services subscription
                            is cancelled or terminated under this Agreement.</p>
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            Additional cancellation or renewal terms may be provided to you on
                            the website for the Services.</p>
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            Existing customer will maintain subscription rates for future subscriptions, having that package is not changed. Only increase in fee will be at rate of up to 10% of current subscription rate every after 3 years of subscriptions. When pricing changes on our packages will be applicable for our new customers. </p>
                    </ol>
                    <ol start="4">
                        <li/>
                        <h2 class="western"><font color="#00000a">FREE TRIAL USE OF
                                SERVICES</font></h2>
                    </ol>
                    <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">{{ reseller_env_value('vendor_short')}}
                        offers free trial of services for amount of 7 days where you will
                        get full access of all features of the package you have selected.
                        Once trial period ends you will be required to complete payment for
                        subscription of the package you were enrolled, failure to make
                        payment within one (1) month after trial period ends or left trial account dormant for more than 10 days without intention to use the system, Nextbyte has
                        right to remove your account from the server unless there is oral or
                        written agreement to keep your account. Trial period can be extended
                        through direct request to Nextbyte. </p>
                    <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">


                    </p>
                    <ol start="5">
                        <li/>
                        <h2 class="western"><font color="#00000a">USE WITH YOUR MOBILE
                                DEVICE</font></h2>
                    </ol>
                    <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">Use
                        of these Services may be available through a compatible mobile
                        device, Internet access and may require software.  You agree that you
                        are solely responsible for these requirements, including any
                        applicable changes, updates and fees as well as the terms of your
                        agreement with your mobile device and telecommunications provider.</p>
                    <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                        {{ reseller_env_value('vendor_short')}} makes no warranties or representation of any kind, express, statutory or implied as to
                    </p>
                    <ol type="i">
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            The availability of telecommunication services from your provider and access to the services at any time or from any location
         ;</p>
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            Any loss , damage or security intrusion of the telecommunication service and
                        </p>
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            Any disclosure of nformation to third parties or failure to transmit any data , commuication or settings connected with services.</p>
                    </ol>
                    <ol start="6">
                        <li/>
                        <h2 class="western"><font color="#00000a">DATA PROCESSING AND
                                PRIVACY</font></h2>
                    </ol>
                    <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">Data
                        Processing and Privacy. (a) {{ reseller_env_value('vendor_short')}} is the controller of the
                        personal information it processes about you when you use the Services
                        and (b) You acknowledge that {{ reseller_env_value('vendor_short')}} will process your personal
                        information as described in our Privacy Statement when you use our
                        Services.</p>
                    <ol start="7">
                        <li/>
                        <h2 class="western"><font color="#00000a">DATA STORAGE
                                LIMITATION</font></h2>
                    </ol>
                    <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">For
                        every user subscribed to the service will be allocated with 2GB of
                        storage to keep their data and files attached through the
                        application. Once allocated storage usage exceed allocated size,
                        {{ reseller_env_value('vendor_short')}} will prompt you to increase size of your storage by
                        increasing your subscription monthly fee according to the prices at
                        that time.</p>
                    <ol start="8">
                        <li/>
                        <h2 class="western"><font color="#00000a">CONTENT AND USE OF
                                THE SERVICES</font></h2>
                        <ol type="I">
                            <li/>
                            <h3 class="western"><font color="#00000a">Responsibility for
                                    Content and Use of the Services</font></h3>
                        </ol>
                    </ol>
                    <ol type="a">
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            Content includes any data, information, materials, text, graphics,
                            images, music, software, audio, video, works of authorship of any
                            kind, that are uploaded, transmitted, posted, generated, stored or
                            otherwise made available through the Services (&quot;Content&quot;),
                            which will include without limitation any Content that account
                            holders (including you) provide through your use of the Services.
                            By making your Content available through your use of the Services,
                            {{ reseller_env_value('vendor_short')}}                            to host and use your Content. Archive your Content frequently. You
                            are responsible for any lost or unrecoverable Content. You must
                            provide all required and appropriate warnings, information and
                            disclosures. {{ reseller_env_value('vendor_short')}} is not responsible for any of your Content
                            that you submit through the Services.</p>
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            You agree not to use, nor permit any third party to use, the
                            Services to upload, post, distribute, link to, publish, reproduce,
                            engage in, promote or transmit any of the following:</p>
                    </ol>
                    <ol type="a">
                        <ol type="i">
                            <li/>
                            <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                                Illegal, fraudulent, defamatory, obscene, pornographic, profane,
                                threatening, abusive, hateful, harassing, offensive, inappropriate
                                or objectionable information or communications of any kind,
                                including without limitation conduct that is excessively violent,
                                incites or threatens violence, encourages &quot;flaming&quot;
                                others or criminal or civil liability under any local, state,
                                federal or foreign law;</p>
                            <li/>
                            <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                                Content that would impersonate someone else or falsely represent
                                your identity or qualifications, or that may constitute a breach of
                                any individual’s privacy; is illegally unfair or deceptive, or
                                creates a safety or health risk to an individual or the public;</p>
                            <li/>
                            <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                                Except as permitted by {{ reseller_env_value('vendor_short')}} in writing, investment
                                opportunities, solicitations, chain letters, pyramid schemes, other
                                unsolicited commercial communication or spamming or flooding;</p>
                            <li/>
                            <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                                Virus, Trojan horse, worm or other disruptive or harmful software
                                or data; and</p>
                            <li/>
                            <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                                Any Content that you do not own or have the right to use without
                                permission from the intellectual property rights owners thereof.</p>
                        </ol>
                    </ol>
                    <ol>
                        <ol type="a">
                            <li/>
                            <h3 class="western"><font color="#00000a">Restricted Use of
                                    the Services</font></h3>
                            <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                                You shall not, and shall not permit any users of the Services or any
                                other party to, engage in, solicit, or promote any activity that is
                                objectionable or may be illegal, violates the rights of others, is
                                likely to cause notoriety, harm or damage to the reputation of
                                {{ reseller_env_value('vendor_short')}} or could subject {{ reseller_env_value('vendor_short')}} to liability to third parties,
                                including: (i) unauthorized access, monitoring, interference with,
                                or use of the Services or third party accounts, data, computers,
                                systems or networks; (ii) interference with others’ use of the
                                Services or any system or network, including mail bombing, broadcast
                                or denial of service attacks; (iii) unauthorized collection or use
                                of personal or confidential information, including phishing,
                                pharming, spidering, and harvesting; (iv) viewing or other use of
                                any Content that, in {{ reseller_env_value('vendor_short')}}’s opinion, is prohibited under this
                                Agreement; (v) any other activity that places {{ reseller_env_value('vendor_short')}} in the
                                position of fostering, or having potential or actual liability for,
                                illegal activity in any jurisdiction; or (vi) attempting to probe,
                                scan, penetrate or test the vulnerability of an {{ reseller_env_value('vendor_short')}} system or
                                network or to breach {{ reseller_env_value('vendor_short')}}’s security or authentication
                                measures, whether by passive or intrusive techniques. {{ reseller_env_value('vendor_short')}}
                                reserves the right to not authorize and may terminate your use of
                                the Services based on reasonable suspicion of your activities,
                                business, products or services that are objectionable or promote,
                                support or engage in any of the restricted uses described above.</p>
                            <li/>
                            <h3 class="western"><font color="#00000a">Community forums</font></h3>
                            <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">The
                                Services may include a community forum or other social features to
                                exchange Content and information with other users of the Services and
                                the public. {{ reseller_env_value('vendor_short')}} does not support and is not responsible for the
                                Content in these community forums.  Please use respect when you
                                interact with other users.  Do not reveal information that you do not
                                want to make public. Users may post hypertext links to content of
                                third parties for which {{ reseller_env_value('vendor_short')}} is not responsible.</p>
                            <li/>
                            <h3 class="western"><font color="#00000a">{{ reseller_env_value('vendor_short')}} may freely
                                    use feedback you provide</font></h3>
                            <p style="margin-bottom: 0.14in; line-height: 115%">You agree that
                                Nextbyte may use your feedback, suggestions, or ideas in any way,
                                including in future modifications of the Services, other products or
                                services, advertising or marketing materials. You grant {{ reseller_env_value('vendor_short')}} a
                                perpetual, worldwide, fully transferable, sublicensable,
                                non-revocable, fully paid-up, royalty free license to use the
                                feedback you provide to {{ reseller_env_value('vendor_short')}} in any way.</p>

                            <li/>
                            <h3 class="western"><font color="#00000a">{{ reseller_env_value('vendor_short')}} may
                                    monitor content</font></h3>
                            <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">{{ reseller_env_value('vendor_short')}}
                                may, but has no obligation to, monitor access to or use of the
                                Services or Content or to review or edit any Content for the purpose
                                of operating the Services, to ensure compliance with this Agreement,
                                and to comply with applicable law or other legal requirements. We may
                                disclose any information necessary to satisfy our legal obligations,
                                protect {{ reseller_env_value('vendor_short')}} or its customers, or operate the Services properly.
                                {{ reseller_env_value('vendor_short')}}, in its sole discretion, may refuse to post, remove, or
                                refuse to remove, or disable any Content, in whole or in part, that
                                is alleged to be, or that we consider to be unacceptable,
                                undesirable, inappropriate, or in violation of this Agreement.</p>

                        </ol>
                    </ol>


                    <ol start="9">
                        <li/>
                        <h2 class="western"><font color="#00000a">ADDITIONAL TERMS</font></h2>
                        <ol type="i">
                            <li>
                            {{ reseller_env_value('vendor_short')}}                                    give professional advice</font></h3>
                            <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">Unless
                                specifically included with the Services, {{ reseller_env_value('vendor_short')}} is not in the
                                business of providing legal, financial, accounting, tax, health care,
                                real estate or other professional services or advice. Consult the
                                services of a competent professional when you need this type of
                                assistance.</p>
                            </li>
                            <li>
                            <h3 class="western"><font color="#00000a">We may tell you
                                    about other {{ reseller_env_value('vendor_short')}} Services</font></h3>
                            <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">You
                                may be offered other services, products, or promotions by
                                (&quot;{{ reseller_env_value('vendor_short')}} Services&quot;). Additional terms and conditions and
                                fees may apply. With some {{ reseller_env_value('vendor_short')}} Services you may upload or enter
                                data from your account(s) such as names, addresses and phone numbers,
                                purchases, etc., to the Internet.</p>
                            </li>
                            <li>
                            <h3 class="western"><font color="#00000a">Communications</font></h3>
                            <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">{{ reseller_env_value('vendor_short')}}
                                may be required by law to send you communications about the Services
                                or third party products. You agree that {{ reseller_env_value('vendor_short')}} may send these
                                communications to you via email or by posting them on our websites.</p>
                            <li>
                            <h3 class="western"><font color="#00000a">You will manage
                                    your passwords and accept updates</font></h3>
                            <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">You
                                are responsible for securely managing your password(s) for the
                                Services and to contact {{ reseller_env_value('vendor_short')}} if you become aware of any
                                unauthorized access to your account. The Services may periodically be
                                updated with tools, utilities, improvements, third party
                                applications, or general updates to improve the Services. You agree
                                to receive these updates.</p>
                            </li>
                            <li>
                            <h3 class="western"><font color="#00000a">Telephone numbers</font></h3>
                            <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">You
                                may provide us with your telephone number as part of your customer
                                record or registration or via other methods. You understand and agree
                                that {{ reseller_env_value('vendor_short')}} may use your telephone number for &quot;multi-factor
                                authentication&quot; (&quot;MFA&quot;), to confirm your identity and
                                help protect the security of your account. Part of the MFA identity
                                verification process may involve {{ reseller_env_value('vendor_short')}} sending text messages
                                containing security codes to your telephone number. You agree to
                                receive these texts from {{ reseller_env_value('vendor_short')}} containing security codes as part
                                of the MFA process. In addition, you agree {{ reseller_env_value('vendor_short')}} may send
                                automated text messages and pre-recorded voice messages to the
                                telephone number you provide for other limited purposes, including:
                                providing you with important critical notices regarding your use of
                                the Services, or fulfilling a request made by you through the
                                Services.</p>
                            </li>
                            <li>
                            <h3 class="western"><font color="#00000a">Dormant Accounts</font></h3>
                            <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">If you have subscribed; and your account become dormant without any intention of renewing your subscription; Nextbyte has a right to deactivate and remove your account without notice if your account has been dormant for more than three (3) months. If you have intention to renew in near future; you are required to request for account temporary suspension within three months from your expire date.</p>
                            </li>
                        </ol>
                    </ol>




                    <ol start="10">
                        <li/>
                        <h2 class="western"><font color="#00000a">DISCLAIMER OF
                                WARRANTIES</font></h2>
                        <ol type="i">
                            <li/>
                            <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">Your	Use Of The Services, Software, And Content Is Entirely At Your Own
                                Risk. Except As Described In This Agreement, The Services Are
                                Provided &quot;as Is.&quot; To The Maximum Extent Permitted By
                                Applicable Law, {{ reseller_env_value('vendor_short')}}, Its Affiliates, And Its Third Party
                                Providers, Licensors, Distributors Or Suppliers
                                (collectively,&quot;suppliers&quot;) Disclaim All Warranties,
                                Express Or Implied, Including Any Warranty That The Services Are
                                Fit For A Particular Purpose, Title, Merchantability, Data Loss,
                                Non-interference With Or Non-infringement Of Any Intellectual
                                Property Rights, Or The Accuracy, Reliability, Quality Or Content
                                In Or Linked To The Services. {{ reseller_env_value('vendor_short')}} And Its Affiliates And
                                Suppliers Do Not Warrant That The Services Are Secure, Free From
                                Bugs, Viruses, Interruption, Errors, Theft Or Destruction. If The
                                Exclusions For Implied Warranties Do Not Apply To You, Any Implied
                                Warranties Are Limited To 60 Days From The Date Of Purchase Or
                                Delivery Of The Services, Whichever Is Sooner.</p>
                            <li/>

                            <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">{{ reseller_env_value('vendor_short')}},
                                Its Affiliates And Suppliers Disclaim Any Representations Or
                                Warranties That Your Use Of The Services Will Satisfy Or Ensure
                                Compliance With Any Legal Obligations Or Laws Or Regulations.</p>

                        </ol>
                    </ol>

                    <ol start="11">
                        <li/>
                        <h2 class="western"><font color="#00000a">LIMITATION OF
                                LIABILITY AND INDEMNITY</font></h2>
                    </ol>
                    <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">To
                        The Maximum Extent Permitted By Applicable Law, The Entire Liability
                        Of {{ reseller_env_value('vendor_short')}}, Its Affiliates And Suppliers For All Claims Relating To
                        This Agreement Shall Be Limited To The Amount You Paid For The
                        Services During The Twelve (12) Months Prior To Such Claim. Subject
                        To Applicable Law, {{ reseller_env_value('vendor_short')}}, Its Affiliates And Suppliers Are Not
                        Liable For Any Of The Following: (a) Indirect, Special, Incidental,
                        Punitive Or Consequential Damages; (b) Damages Relating To Failures
                        Of Telecommunications, The Internet, Electronic Communications,
                        Corruption, Security, Loss Or Theft Of Data, Viruses, Spyware, Loss
                        Of Business, Revenue, Profits Or Investment, Or Use Of Software Or
                        Hardware That Does Not Meet {{ reseller_env_value('vendor_short')}} Systems Requirements. The Above
                        Limitations Apply Even If {{ reseller_env_value('vendor_short')}} And Its Affiliates And Suppliers
                        Have Been Advised Of The Possibility Of Such Damages. This Agreement
                        Sets Forth The Entire Liability Of {{ reseller_env_value('vendor_short')}}, Its Affiliates And Your
                        Exclusive Remedy With Respect To The Services And Its Use.</p>
                    <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">You
                        agree to indemnify and hold {{ reseller_env_value('vendor_short')}} and its Affiliates and Suppliers
                        harmless from any and all claims, liability and expenses, including
                        reasonable attorneys' fees and costs, arising out of your use of the
                        Services or breach of this Agreement (collectively referred to as
                        &quot;Claims&quot;). {{ reseller_env_value('vendor_short')}} reserves the right, in its sole
                        discretion and at its own expense, to assume the exclusive defense
                        and control of any Claims. You agree to reasonably cooperate as
                        requested by {{ reseller_env_value('vendor_short')}} in the defense of any Claims.</p>
                    <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">


                    </p>
                    <ol start="12">
                        <li/>
                        <h2 class="western"><font color="#00000a">CHANGES</font></h2>
                    </ol>
                    <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">We
                        reserve the right to change this Agreement at any time, and the
                        changes will be effective when posted through the Services, on our
                        website for the Services or when we notify you by other means. We may
                        also change or discontinue the Services, in whole or in part. Your
                        continued use of the Services indicates your agreement to the
                        changes.</p>
                    <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">


                    </p>
                    <ol start="13">
                        <li/>
                        <h2 class="western"><font color="#00000a">TERMINATION</font></h2>
                    </ol>
                    {{ reseller_env_value('vendor_short')}}                        may, in its sole discretion and without notice, restrict, deny,
                        terminate this Agreement or suspend the Services effective
                        immediately, in whole or in part, for suspicion of fraud, security,
                        illegal activity or unauthorized access issues to protect the
                        integrity of our Services or systems and comply with applicable
                    {{ reseller_env_value('vendor_short')}} policy, or if you fail to comply with this Agreement or if
                        you no longer agree to receive electronic communications. Upon
                        termination you must immediately stop using the Services and any
                        outstanding payments will become due. Any termination of this
                        Agreement shall not affect {{ reseller_env_value('vendor_short')}}’s rights to any payments due to
                    {{ reseller_env_value('vendor_short')}}                        3 through 15 will survive and remain in effect even if the Agreement
                        is terminated.</p>
                    <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">


                    </p>
                    <ol start="14">
                        <li/>
                        <h2 class="western"><font color="#00000a">EXPORT RESTRICTIONS</font></h2>
                    </ol>
                    <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">You
                        acknowledge that the Services, including the mobile application,
                        delivered by {{ reseller_env_value('vendor_short')}} are subject to restrictions under applicable
                        Tanzania export control laws, including Tanzania trade embargoes and
                        sanctions and security requirements, and applicable country or local
                        laws to the extent compatible with Tanzania laws. You agree that you
                        will comply with these laws and regulations and will not export,
                        re-export, import or otherwise make available products and/or
                        technical data in violation of these laws, directly or indirectly.</p>
                    <ol start="15">
                        <li/>
                        <h2 class="western"><font color="#00000a">DISPUTES</font></h2>
                    </ol>
                    <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">Any
                        Dispute Or Claim Relating In Any Way To The Services Or This
                        Agreement Will Be Resolved By Binding Arbitration, Rather Than In
                        Court, Except That You May Assert Claims In Small Claims Court If
                        Your Claims Qualify. The Arbitrator Shall Apply Tanzania Law To All
                        Other Matters. Notwithstanding Anything To The Contrary, Any Party To
                        The Arbitration May At Any Time Seek Injunctions Or Other Forms Of
                        Equitable Relief From Any Court Of Competent Jurisdiction. We Each
                        Agree That Any And All Disputes Must Be Brought In The Parties
                        Individual Capacity And Not As A Plaintiff Or Class Member In Any
                        Purported Class Or Representative Proceeding. By Entering Into This
                        Agreement And Agreeing To Arbitration, You Agree That You And
                        {{ reseller_env_value('vendor_short')}}                        To A Trial By Jury. In Addition, You Agree To Waive The Right To
                        Participate In A Class Action Or Litigate On A Class-wide Basis. You
                        Agree That You Have Expressly And Knowingly Waived These Rights.</p>
                    <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">To
                        begin an arbitration proceeding, send a letter requesting arbitration
                        {{ reseller_env_value('vendor_short')}}                        arbitration conducted by telephone, based on written submissions, or
                        in person in the county where you live or at another mutually agreed
                        location. The decision of the arbitrator shall be final and not
                        appealable, and judgment on the arbitration award may be entered in
                        any court having jurisdiction thereof. This Section 13 shall survive
                        expiration, termination or rescission of this Agreement.</p>
                    <ol start="16">
                        <li/>
                        <h2 class="western"><font color="#00000a">GENERAL</font></h2>
                    </ol>
                    <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">This
                        Agreement, including the Additional Terms below, is the entire
                        {{ reseller_env_value('vendor_short')}}                        understandings, communications and agreements, oral or written,
                        regarding its subject matter. If any court of law, having the
                        jurisdiction, rules that any part of this Agreement is invalid, that
                        section will be removed without affecting the remainder of the
                        Agreement. The remaining terms will be valid and enforceable. You
                        cannot assign or transfer ownership of this Agreement to anyone
                        without written approval of {{ reseller_env_value('vendor_short')}}. However, {{ reseller_env_value('vendor_short')}} may assign or
                        transfer it without your consent to (a) an affiliate, (b) a company
                        {{ reseller_env_value('vendor_short')}}                        Any assignment in violation of this Section shall be void. If you
                        want to request a transfer of this Agreement, contact {{ reseller_env_value('vendor_short')}} via an
                        email to:{{ 'info@' .strtolower(reseller_env_value('vendor_short')) .'co.tz'}}</p>
                    <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">


                    </p>
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
