@extends('layouts.main', ['title' => __("label.contact_us"), 'header' => __("label.contact_us")])
@section("content")

    @if(reseller_id() != 0 )
        @include('system.general_information.contact_us.partner.partner'.reseller_id())
    @else
        @include('system.general_information.contact_us.general')
    @endif
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
