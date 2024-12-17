@extends('layouts.main', ['title' => __("label.contact_us"), 'header' => __("label.contact_us")])
@section("content")
    <div class="breadcrumb-area" style="background-image:url(assets/img/page-title-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h1 class="page-title">Work Processing</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center custom-gutters-16 single-work-processing">
        <div class="col-xl-5 col-md-6 order-lg-12">
            <div class="thumb swp-right-thumb">
                <img src="{{url('assets/img/work-processing/1.png')}}" alt="img">
            </div>
        </div>
        <div class="col-xl-4 col-md-6 order-lg-1 desktop-center-item">
            <div class="work-processing-details">
                <div class="section-title style-four">
                    <h2 class="title">No available  <span>system vacant</span>, building vacant  is on  Process</h2>
                    <p>We are preparing new vacant for you We will inform you after the work completed. For Further support, please contact {{ phone_support_contact() }}</p>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('after-scripts')
    <script>
        function myFunction(e){
            var name = $('#name').val();
            var email  = $('#email').val();
            var subject  = $('#subject').val();
            var message  = $('#message').val();
            var data = {
                'name' :name,
                'email' : email,
                'subject' : subject,
                'message' : message,

            };
            if (name.length == 0 || email.length == 0 || subject.length == 0 || message.length == 0 )
            {

                return false;
            }
            var url = '{{route('general_information.contact_us.send')}}';
            $.ajax({
                type: 'post',
                url: url,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: data,
                cache: false,

                success: function (response) {
                    if (response) {
                        document.getElementById("contact_us").reset();
                        document.getElementById("success_alert").append('Successfully!! Thank you for contact us!');
                        document.getElementById("success_alert").style.display ="block";
                    }
                },
            }).done(

            );      }

        //va
    </script>



@endpush
