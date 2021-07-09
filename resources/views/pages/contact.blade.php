@extends('layouts.default')
<!DOCTYPE html>
<title>Disai</title>
@section('content')
<div class="col-12 px-0">
  <!-- image section1 -->
  <div class="col-12 px-0">
        <div class="col-12 px-0">
            <img src="assets/images/about.jpeg" id="myVideo" class="w-100">
        </div>
        <div class="content d-flex justify-content-center align-items-end">
            <div class="position-relative">
                <div class="about-head mb-lg-5">
                    <h3 class="a-h3">Contact us</h3>
                </div>
                <!-- <div class="about-bg"></div> -->
            </div>
        </div>
    </div>
    <!-- further enquery -->
    <div class="col-12 bg-form  animated animatedParent">
        <div class="d-flex container py-3 mb-3 animated fadeInUpShort delay-250">
            <div class=""> 
                <h3 class="gradient-form">Have questions about how we can help you grow, scale, and</h3>
                <h3 class="gradient-form"> transform your business?</h3>
                <h3 class="gradient-form"> Do let us know how to connect with you.</h3>
            </div>
        </div>
        <div class="col-12 py-2 py-lg-4">
            <div class="d-flex row m-0  animated animatedParent">
                <div class="col-md-6 px-3 px-lg-5 animated fadeInUpShort delay-500">
                    <div class="d-flex mt-1 py-4">
                        <img src="assets/images/cellphone.png" height="27" class="mt-2">
                        <p class="mb-0 px-4 fonttype cl">+91 80 25258656; +91 80 25258676</p>
                    </div>
                    <div class="d-flex mt-1 py-4">
                        <img src="assets/images/kite.png" height="27" class="mt-3">
                        <p class="mb-0 px-4 fonttype cl">innovate@g.co.in</p>
                    </div>
                    <div class="d-flex mt-1 py-4">
                        <img src="assets/images/location.png" height="27" class="mt-2">
                        <p class="mb-0 px-4 fonttype cl">#246, SRS Plaza, 13 Cross, Indiranagar II Stage, Bangalore
                            560038, India</p>
                    </div>
                </div>
                <div class="col-md-6 px-3 px-lg-5 my-5 my-lg-0 animated fadeInUpShort delay-750">
                    <div class="">
                        <div class="row mx-0 px-2 px-md-4 px-lg-5 px-xl-0">
                            <div class="form-group w-100 position-relative pb-4">
                                <input autocomplete="off" id="name" name="name" type="text"
                                    class="form-control validate py-3 outline-0 border-top-0 border-left-0 rounded-0 px-0 border-right-0 z-depth-0"
                                    required>
                                <label for="name"
                                    class="form-control-placeholder gra-label font-9 primary-text-color z-index1">Name</label>
                            </div>
                            <div class="form-group w-100 position-relative pb-4">
                                <input autocomplete="off" id="email" name="email" type="text"
                                    class="form-control validate py-3 outline-0 border-top-0 border-left-0 rounded-0 px-0 border-right-0 z-depth-0"
                                    required>
                                <label for="email"
                                    class="form-control-placeholder gra-label font-9 primary-text-color z-index1">Email</label>
                            </div>
                            <div class="form-group w-100 position-relative pb-4">
                                <input autocomplete="off" id="company" name="company" type="text"
                                    class="form-control validate py-3 outline-0 border-top-0 border-left-0 rounded-0 px-0 border-right-0 z-depth-0"
                                    required>
                                <label for="company"
                                    class="form-control-placeholder gra-label font-9 primary-text-color z-index1">Subject
                                </label>
                            </div>
                            <div class="form-group w-100 position-relative pb-4">
                                <input autocomplete="off"  id="message" name="message" type="text"
                                    placeholder="Write message"
                                    class="form-control mt-2 mt-lg-5 validate py-3 outline-0 border-top-0 border-left-0 rounded-0 px-0 border-right-0 z-depth-0"
                                    required>
                                <label for="message"
                                    class="form-control-placeholder gra-label font-9  primary-text-color z-index1">Message</label>
                            </div>

                            <a href="javascript:void(0)"
                                class="gradatim-primary text-decor-none py-2 px-5 radius_20 send_message text-white text-uppercase">Submit</a>
                        </div><span id="snackbar" class=""></span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@include('includes.footer')
<!-- </div> -->
@stop