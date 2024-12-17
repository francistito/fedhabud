@extends('cms.layouts.terms', ['title' => __("label.security_policy"), 'header' => __("label.security_policy")])

@push('after-styles')
    <style type="text/css">
        @page { margin: 1in }
        p { margin-bottom: 0.1in; direction: ltr; line-height: 120%; text-align: left; orphans: 2; widows: 2 }
        h1 { margin-top: 0.33in; margin-bottom: 0in; direction: ltr; color: #365f91; line-height: 115%; text-align: left; page-break-inside: avoid; orphans: 2; widows: 2 }
        h1.western { font-family: "Cambria", serif; font-size: 14pt }
        h1.cjk { font-family: ; font-size: 14pt }
        h1.ctl { font-family: ; font-size: 14pt }
        h2 { margin-bottom: 0in; direction: ltr; color: #4f81bd; line-height: 115%; text-align: left; page-break-inside: avoid; orphans: 2; widows: 2 }
        h2.western { font-family: "Cambria", serif; font-size: 13pt }
        h2.cjk { font-family: ; font-size: 13pt }
        h2.ctl { font-family: ; font-size: 13pt }
    </style>
@endpush

@section('content')
{{--    <section class="videobanne" style="background-image: url(/img/app_logo.png)">--}}
{{--        <img src="{{url('/img/app_logo.png')}}" style="width: 100%"/>--}}
{{--    </section>--}}
<section class="py-5 text-center " style="background-color: #32464A;width: 100%">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="text-light">Security Policy</h1>
{{--            <p class="lead text-light">Our security strategy involves the following components</p>--}}

        </div>
    </div>
</section>



    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-lg-8 col-xl-8">
            <section class="card card-horizontal mb-4">
                <div class="card-body p-4">
<p p style="margin-bottom: 0.14in; line-height: 115%"><a name="__DdeLink__2174_1721175994"></a>
    <b>Security Policy</b></p>
                    <p style="margin-bottom: 0.14in; line-height: 115%"><b>Last Updated:
                            Sept 9, 2021</b></p>
                    <h2 class="western" style="margin-left: 0.5in"><font color="#00000a">Introduction
                            and overview</font></h2>
                    <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">Our
                        security strategy involves the following components</p>
                    <ol>
                        <li/>
                        <h1 class="western"><a name="__DdeLink__2176_1721175994"></a><font color="#00000a">Organizational
                                Security</font></h1>
                    </ol>
                    <p style="margin-bottom: 0.14in; line-height: 115%">We employ strict
                        policies and procedures encompassing the security, availability,
                        processing, integrity, and confidentiality of customer data.</p>
                    <ol>
                        <ol type="i">
                            <li/>
                            <h2 class="western"><a name="__DdeLink__2178_1721175994"></a><font color="#00000a">Employee
                                    background checks</font></h2>
                            <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">Each
                                employee undergoes a process of background verification. We do this
                                to verify their criminal records, previous employment records if any,
                                and educational background. Until this check is performed, the
                                employee is not assigned tasks that may pose risks to users.</p>
                            <li/>
                            <h2 class="western"><font color="#00000a">Security Awareness</font></h2>
                            <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">Each
                                employee, when inducted, signs a confidentiality agreement and
                                acceptable use policy, after which they undergo training in
                                information security, privacy, and compliance.
                            </p>
                            <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">We
                                educate our employees continually on information security, privacy,
                                and compliance in our internal community where our employees check in
                                regularly, to keep them updated regarding the security practices of
                                the organization. We also host internal events to raise awareness and
                                drive innovation in security and privacy.</p>
                            <li/>
                            <h2 class="western"><font color="#00000a">Dedicated Security
                                    and privacy teams</font></h2>
                            <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">We
                                have dedicated security and privacy teams that implement and manage
                                our security and privacy programs. They engineer and maintain our
                                defense systems, develop review processes for security, and
                                constantly monitor our networks to detect suspicious activity. They
                                provide domain-specific consulting services and guidance to our
                                engineering teams.</p>
                        </ol>
                    </ol>






                    <ol start="2">
                        <li/>
                        <h1 class="western"><font color="#00000a">Data Security</font></h1>
                        <ol type="i">
                            <li/>
                            <h2 class="western"><font color="#00000a">Data Isolation</font></h2>
                            <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">Our
                                framework distributes and maintains the cloud space for our
                                customers. Each customer's service data is logically separated from
                                other customers' data using a set of secure protocols in the
                                framework. This ensures that no customer's service data becomes
                                accessible to another customer.</p>
                            <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">The
                                service data is stored on our cloud servers (Situated in Europe) when
                                you use our services. Your data is owned by you, and not by {{ reseller_env_value('vendor_short') }}.
                                We do not share this data with any third-party without your consent.</p>
                            <li/>
                            <h2 class="western" align="justify"><font color="#00000a">Secure
                                    by design</font></h2>
                            <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">Every
                                change and new feature is governed by a change management policy to
                                ensure all application changes are authorised before implementation
                                into production. Our Software Development Life Cycle (SDLC) mandates
                                adherence to secure coding guidelines, as well as screening of code
                                changes for potential security issues with our code analyser tools,
                                vulnerability scanners, and manual review processes.</p>
                            <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">Our
                                robust security framework based on OWASP standards, implemented in
                                the application layer, provides functionalities to mitigate threats
                                such as SQL injection,Cross site scripting and application layer DOS
                                attacks.</p>
                            <li/>
                            <h2 class="western" align="justify"><font color="#00000a">Encryption</font></h2>
                            <p align="justify" style="margin-bottom: 0.14in; line-height: 115%"><b>In
                                    transit:</b> All customer data transmitted to our servers over public
                                networks is protected using strong encryption protocols. We mandate
                                all connections to our servers use Secure Sockets Layer (SSL)
                                encryption with strong ciphers, for all connections including web
                                access,API access, and IMAP/POP/SMTP email client access. This method
                                is used for keeping an internet connection secure and safeguarding
                                any sensitive data that is being sent between two systems, preventing
                                intruders from reading and modifying any information transferred,
                                including potential personal details. The two systems can be a server
                                and client or server to server.</p>

                        </ol>
                    </ol>


                    <ol start="3">
                        <li/>
                        <h1 class="western"><font color="#00000a">Identity and Access
                                Control</font></h1>
                        <ol type="i">
                            <li/>
                            <h2 class="western"><font color="#00000a">Authentication</font></h2>
                            <p style="margin-bottom: 0.14in; line-height: 115%">Every user need
                                to provide username and password (Login credentials) for
                                authentication to login into the system. This add security layer to
                                prevent access from unauthorized intruders. Authentication has been
                                extended to API for all the integrations implement with other third
                                parties partners.</p>
                            <li/>
                            <h2 class="western"><font color="#00000a">Multi-Factor
                                    Authentication</font></h2>
                            <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">{{ reseller_env_value('vendor_short') }}
                                platforms support multi-factor authentication which provides an extra
                                layer of security by demanding an additional verification that user
                                must possess, in addition to the password. This can greatly reduce
                                the risk of unauthorized access if a user’s password is
                                compromised. You can easily configure multi-factor authentication on
                                the setting of our app. Currently, OTP (One time password) via email
                                and sms are supported.</p>
                            <li/>
                            <h2 class="western"><font color="#00000a">Administrative
                                    Access</font></h2>
                            <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">We
                                employ technical access controls and internal policies to prohibit
                                employees from arbitrarily accessing user data. We adhere to the
                                principles of least privilege and role-based permissions to minimize
                                the risk of data exposure.</p>
                            <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">Access
                                to production environments is maintained by a central directory and
                                authenticated using a combination of strong passwords, two-factor
                                authentication, and passphrase-protected SSH keys. Furthermore, we
                                facilitate such access through a separate network with stricter rules
                                and hardened devices. Additionally, we log all the operations and
                                audit them periodically.
                            </p>
                        </ol>
                    </ol>


                    <ol start="4">
                        <li/>
                        <h1 class="western"><a name="_GoBack"></a><font color="#00000a">Operational
                                Security</font></h1>
                        <ol type="i">
                            <li/>
                            <h2 class="western"><font color="#00000a">Backup</font></h2>
                            <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">We
                                run full backups everyday of our clients’ database and files.
                                Backup data are stored on production server then transferred into the
                                backup server which is on other data center. All backed up data are
                                retained for period of 7 days. If client requests for data recovery
                                within the retention period, we will restore their data and provide
                                secure access to it. The timeline for data restoration depends on the
                                size of the data and the complexity involved.</p>
                            <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">To
                                ensure the safety of the backed-up data, we use a redundant array of
                                independent disks (RAID) in the backup servers. All backups are
                                scheduled and tracked regularly. In case of a failure, a re-run is
                                initiated and is fixed immediately.</p>
                            <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">From
                                your end, we strongly recommend scheduling regular backups of your
                                data by exporting them from the respective {{ reseller_env_value('vendor_short') }} services and
                                storing it locally in your infrastructure.</p>
                        </ol>
                    </ol>

                    <ol start="5">
                        <li/>
                        <h1 class="western"><font color="#00000a">Customer controls
                                for security</font></h1>
                    </ol>
                    <p style="margin-bottom: 0.14in; line-height: 115%">Here are the
                        things that you as a customer can do to ensure security from your
                        end:</p>
                    <ol type="i">
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            Use multi-factor authentication.</p>
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            Choose a unique, strong password and protect it.</p>
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            Use the latest browser versions, mobile OS and updated mobile
                            applications to ensure they are patched against vulnerabilities and
                            to use latest security features</p>
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            Exercise reasonable precautions while sharing data from our cloud
                            environment.</p>
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            Monitor devices linked to your account, active web sessions, and
                            third-party access to spot anomalies in activities on your account,
                            and manage roles and privileges to your account.</p>
                        <li/>
                        <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">
                            Be aware of phishing and malware threats by looking out for
                            unfamiliar emails, websites, and links that may exploit your
                            {{ reseller_env_value('vendor_short') }}                            you trust.</p>
                    </ol>


                    <h2 class="western"><font color="#00000a"><font size="4" style="font-size: 14pt">Conclusion</font></font></h2>
                    <p align="justify" style="margin-bottom: 0.14in; line-height: 115%">Security
                        of your data is your right and a never-ending mission of {{ reseller_env_value('vendor_short') }}. We
                        will continue to work hard to keep your data secure, like we always
                        have.</p>
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
