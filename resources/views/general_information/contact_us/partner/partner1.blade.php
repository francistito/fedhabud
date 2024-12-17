<!-- map area start -->
<div class="map-area pd-top-120">
    <div class="container">
        <div class="map-area-wrap">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <div id="map">
                        {{--<iframe title="location" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.895546738523!2d39.272929850804225!3d-6.782564895073418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4c6374e78c2b%3A0x96bb8bbc1eadac06!2sNEXTBYTE+ICT+SOLUTIONS+Co+LTD!5e0!3m2!1sen!2stz!4v1565767106312!5m2!1sen!2stz" width="600" height="500" frameborder="0" style="border:0;margin: 40px 0px 0px 70px" allowfullscreen=""></iframe>--}}
                    </div>
                </div>
                <div class="col-lg-6 desktop-center-item">
                    <div>
                        <div class="contact-info">
                            {{--Reseller--}}
                            <h4 class="title">Contact info:</h4>
                            <p class="sub-title">{!!config('reseller_env.app'. reseller_id().'.vendor') !!}</p>
                            <p>Address: {!! config('reseller_env.app'. reseller_id().'.address')  !!}</p>
                            <p><span>Mobile:</span> {!! config('reseller_env.app'. reseller_id().'.phone')  !!}</p>
                            <p><span>E-mail:</span> {!! config('reseller_env.app'. reseller_id().'.email')  !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- map area End -->

<!-- contact form start -->
<div class="contact-form-area pd-top-112">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center w-100">
                    <h2 class="title">Contact <span>Us</span></h2>
                    <div class="alert alert-success" id="success_alert" role="alert" style="display: none">

                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-2">
                {{--                    <img src="{{asset('cms/img/psms_logo.png')}}" alt="blog" style="margin-left: 100px">--}}
            </div>
            <div class="col-lg-8 offset-xl-1">
                {!! Form::open(['route' => ['general_information.contact_us.send'],'method'=>'post', 'autocomplete' => 'off',  'id' =>'contact_us', 'class' => 'form-horizontal needs-validation', 'novalidate','enctype'=>"multipart/form-data"]) !!}
                <div class="row custom-gutters-16">
                    <div class="col-md-6">
                        <div class="single-input-wrap">
                            <input type="text" name="name" class="single-input" id="name">
                            <label>Name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-input-wrap">
                            <input type="text" name="email" class="single-input" id="email">
                            <label>E-mail</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-input-wrap">
                            <input type="text" name="subject" class="single-input" id="subject">
                            <label>Subject</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-input-wrap">
                            <textarea class="single-input textarea" name="message" cols="20" id="message"></textarea>
                            <label class="single-input-label">Message</label>
                        </div>
                    </div>
                    <div class="col-6 offset-5">
                        <a class="btn btn-red btn-xs mt-0 text-center"  onclick="myFunction()">Send</a>
                    </div>
                </div>
                </form>
            </div>
            <div class="col-xl-4 col-lg-2">
                {{--                    <img src="{{asset('cms/img/psms_logo.png')}}" alt="blog" style="margin-left: 100px">--}}
            </div>
        </div>
    </div>
</div>


