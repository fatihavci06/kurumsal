  <footer id="footer">

    

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Laravel Project</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/presento-bootstrap-corporate-template/ -->
          Designed by <a href="https://bootstrapmade.com/">Fatih AVCI in Laravel</a>
        </div>
      </div>
      @php $sosyal=['facebook','twitter','instagram','skype','linkedin'] @endphp

      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        @foreach($sosyal as $s)
        @if($option->$s!='')
        
        <a href="{{$option->$s}}" class="{{$s}}"><i class="bx bxl-{{$s}}"></i></a>
        
        @endif
        @endforeach
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

</body>
  <!-- Vendor JS Files -->
  <script src="{{asset('front/')}}/assets/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('front/')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('front/')}}/assets/vendor/jquery.easing/jquery.easing.min.js"></script>

  <script src="{{asset('front/')}}/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="{{asset('front/')}}/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="{{asset('front/')}}/assets/vendor/counterup/counterup.min.js"></script>
  <script src="{{asset('front/')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{asset('front/')}}/assets/vendor/venobox/venobox.min.js"></script>
  <script src="{{asset('front/')}}/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('front/')}}/assets/js/main.js"></script>

<script>
    function submitForm() {
      let name = $("input[name=name]").val();
      let email = $("input[name=email]").val();
      let subject = $("input[name=subject]").val();   
      let message = $("textarea[name=message]").val();
      let _token   = $('meta[name="csrf-token"]').attr('content');

      $.ajax({
        url: "{{route('contact.post')}}",
        type:"POST",
        data:{
          name:name,
          email:email,
          subject:subject,
          
          message:message,
          _token: _token
        },
        success:function(response) {
         $('#succ').show();
                        $('#succ').html(response);
                        $('#gonderilenform').trigger("reset");
        },
        error:function (response) {
          $('#nameError').text(response.responseJSON.errors.name);
          $('#emailError').text(response.responseJSON.errors.email);
          $('#subjectError').text(response.responseJSON.errors.subject);
          
          $('#messageError').text(response.responseJSON.errors.message);
        }
       });

    }
</script>

</html>