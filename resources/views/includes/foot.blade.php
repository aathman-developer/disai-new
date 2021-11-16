<script type="text/javascript" src="{{url('assets/scripts/jquery-3.2.1.slim.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/scripts/popper.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/scripts/bootstrap.min.js')}}"></script>
@if(SITE_MAINTENANCE=="YES")
<script type="text/javascript" src="{{url('assets/scripts/forcountownjquery.js')}}"></script>
@else
<script type="text/javascript" src="{{url('assets/scripts/jquery.min.js')}}"></script>
@endif
<script type="text/javascript" src="{{url('assets/scripts/jquery-ui.min.js')}}"></script>
<!-- <script type="text/javascript" src="{{url('assets/scripts/jquery.fullpage.js')}}"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
  <!-- <script type="text/javascript" src="{{url('assets/scripts/lightgallery.min.js')}}"></script> -->
  <!-- <script type="text/javascript" src="{{url('assets/scripts/thumbnail.min.js')}}"></script> -->
  <!-- <script type="text/javascript" src="{{url('assets/scripts/fullscreen.min.js')}}"></script> -->

<script type="text/javascript" src="{{url('assets/scripts/loader_anime.js')}}"></script>
<script type="text/javascript" src="{{url('assets/scripts/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{url('assets/scripts/slick.min.js')}}"></script>
<!-- <script type="text/javascript" src="{{url('assets/scripts/selectize.js')}}"></script> -->
<?php if(Request::segment(1) == "technologies"){?>
<script type="text/javascript" src="{{url('assets/scripts/materialize.js')}}"></script>
<link rel="stylesheet" href="{{url('assets/stylesheets/materialize.css')}}">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<?php }?>
<!--  -->
<script src="https://maps.googleapis.com/maps/api/js?key={{ GOOGLE_API_KEY }}" async="defer"></script>
<script type="text/javascript">

	// $(window).on('load', function() { // makes sure the whole site is loaded 
	//   $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
	//   $('body').delay(350).css({'overflow':'visible'});
	// })
	if (screen && screen.width > 1000) {
		document.write('<script type="text/javascript" src="assets/scripts/css3-animate.js"><\/script>');
    document.write('<script type="text/javascript" src="assets/scripts/jquery.paroller.min.js"><\/script>');
	}
// Wrap every letter in a span
$('.ml9 .letters').each(function(){
  $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
});

anime.timeline({loop: true})
  .add({
    targets: '.ml9 .letter',
    scale: [0, 1],
    duration: 1500,
    elasticity: 600,
    delay: function(el, i) {
      return 45 * (i+1)
    }
  }).add({
    targets: '.ml9',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });  		
</script>
@php
  if(Route::current()!=null)
  {
    if(Route::current()->uri() == 'about'|| Route::current()->uri() == '/' || Route::current()->uri() == 'contact_us') {
      $magic_color = 'bg-primary';
    }
    else {
      $magic_color = 'bg-white';
    }
    $segment_url = Route::current()->uri();
  }
  else
  {
    $segment_url = "";
  }
@endphp
<script>
var APP_URL="{{ url("/") }}";
var segment_url = "@php echo $segment_url @endphp";
// console.log(segment_url)
</script>
@if(SITE_MAINTENANCE=="YES")
<script src="{{url('assets/scripts/plugins.js') }}"></script> 
<script src="{{url('assets/scripts/jquery.countdown.min.js') }}"></script> 
<script src="{{url('assets/scripts/main.js') }}"></script>
@endif
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122648392-2"></script>
<script type="text/javascript" src="{{url('assets/scripts/custom.js')}}"></script>
  
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <p class="subs_1">Join Thousands of Customer-Facing Professionals</p>
        <button type="button" class="close subs_close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <span class="subs_2">Get expert insights straight to your inbox, and become a better customer success manager. Subscribe to the Service Blog below.</span>
        <div class="contact_form contact_form_div nopadding">
          <div>
            <div class="form-group nomargin">
                <input type="text" id="subscribe_email" name="subscribe_email" autocomplete="off" class="form-control contact_form_input" required>
                <label class="form-control-placeholder" for="subscribe_email">Email <span class="error_sub hide">Invalid Email</span></label>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" id="subscribe_btn" class="width_100 btn btn-primary">Subscribe</button>
      </div>
    </div>
  </div>
</div>