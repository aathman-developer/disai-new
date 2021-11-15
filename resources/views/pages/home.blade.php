@extends('layouts.default')
<!DOCTYPE html>
<title>DISAI</title>
@section('content')
<div class="col-12 px-0">
    <!-- image section -->
    <div class="col-12 px-0">
        <div class="col-12 px-0 owl-carousel owl-theme image_slide2 bg-head-img">
            <div class="overflow-hidden">
                <img src="assets/images/about.jpeg" id="myVideo" class="w-100 zoom">
            </div>
            <div class="overflow-hidden">
                <img src="assets/images/c2.jpg" id="myVideo" class="w-100 zoom">
            </div>
            <div class="overflow-hidden">
                <img src="assets/images/c3.jpg" id="myVideo" class="w-100 zoom">
            </div>
            <div class="overflow-hidden">
                <img src="assets/images/c4.jpeg" id="myVideo" class="w-100 zoom">
            </div>
        </div>
        <div class="content d-flex justify-content-center align-items-center">
            <div class="position-relative">
                <!-- <h1 class="disai-head">Disai Disai Disai</h1> -->
            </div>
        </div>
    </div>
    <!-- text session2 in disai -->
    <div class="col-12 px-3 mt-lg-4">
        <div class="d-flex">
            <h1 class="mx-auto font-bold mb-0 font3 heading2">Overview</h1>
        </div>
    </div>
    <div class="col-12 px-3 text-center py-3">
        <p class="well-p px-0 px-md-5 mb-0 py-lg-2">
            <span class="font_bold pr-2">Digital Security Association of India</span>(DiSAI) is a non-profit NGO
            registered as a public
            trust to create awareness on digital security. DiSAI was originally started as the fourth
            initiative of the monthly e-magazine ‘PreSense’ published by Prime Point Foundation, the
            other three being Sansad Ratna Awards (jointly with IIT Madras) for honoring outstanding
            MPs, Education Loan Task Force (for creating awareness among students and parents on
            education loans) and Digital Journalists Association of India (focusing on digital journalism),
            which also includes Next Generation Political Leaders (NGPL), for grooming young political
            aspirants. DiSAI has since become an independent organisation on its own, out of the
            PrimePoint Foundation.
        </p>
    </div>
    <div class="col-12 px-3 mt-lg-4">
        <div class="d-flex">
            <h1 class="mx-auto font-bold mb-0 font3 heading2">Vision</h1>
        </div>
    </div>
    <div class="col-12 px-3 text-center py-3">
        <p class="well-p px-0 px-md-5 mb-0 py-lg-2">
        To strive ceaselessly in creating a digitally secure society in India.
        </p>
    </div>
    <div class="col-12 px-3 mt-lg-4">
        <div class="d-flex">
            <h1 class="mx-auto font-bold mb-0 font3 heading2">Mission</h1>
        </div>
    </div>
    <div class="col-12 px-3 text-center py-3">
        <p class="well-p px-0 px-md-5 mb-0 py-lg-2">
        To create awareness in the society on the various components of digital security.
        </p>
    </div>
    <!-- session3 in disai -->
    <!-- doctor section -->
    <div class="col-12 p-0 mb-lg-4">
        <div class="mt-lg-5">
            <div class="col-12 px-3">
                <div class="d-flex">
                    <h1 class="mx-auto font-bold mb-0 font3 heading2">DISAI</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-12 py-md-5 py-3">
                <div class="d-flex row m-0 doctors_card">
                    <div class="col-md-4 my-3 my-lg-0">
                        <div class="card card-shadow">
                            <div class="doctor ">
                                <img class="card-img-top o-cover c-img" src="assets/images/d1.jpeg">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center font-bold">Lorem</h5>
                                <p class="card-text text-center heal-para mb-1">Lorem Lorem Lorem</p>
                                <div class="text-center mt-lg-3">
                                    <a href="{{ url('/about') }}"
                                        class="bold_font font-9 text-decor-none dark-text-color position-relative stylish_link">
                                        <button type="button" class="btn  semi_font_bold">View
                                            More</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-3 my-lg-0">
                        <div class="card card-shadow">
                            <div class="doctor">
                                <img class="card-img-top o-cover c-img" src="assets/images/d2.png">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center font-bold">Dr.PRUDVISH YARLAGADDA</h5>
                                <p class="card-text text-center heal-para mb-1">M.B.B.S,M.D(PMR-CMC Vellore)</p>
                                <div class="text-center mt-lg-3">
                                    <a href="{{ url('/about') }}"
                                        class="bold_font font-9 text-decor-none dark-text-color position-relative stylish_link">
                                        <button type="button" class="btn  semi_font_bold">View
                                            More</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-3 my-lg-0">
                        <div class="card card-shadow">
                            <div class="doctor c-img">
                                <img class="card-img-top o-cover h-100" src="assets/images/d1.jpeg">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center font-bold">Dr.B.CHANDINI</h5>
                                <p class="card-text text-center heal-para mb-1">M.B.B.S</p>
                                <div class="text-center mt-lg-3">
                                    <a href="{{ url('/about') }}"
                                        class="bold_font font-9 text-decor-none dark-text-color position-relative stylish_link">
                                        <button type="button" class="btn  semi_font_bold">View
                                            More</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex row m-0 doctors_card mt-lg-5">
                    <div class="col-md-4 my-3 my-lg-0">
                        <div class="card card-shadow">
                            <div class="doctor ">
                                <img class="card-img-top o-cover c-img" src="assets/images/d1.jpeg">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center font-bold">Lorem</h5>
                                <p class="card-text text-center heal-para mb-1">Lorem Lorem Lorem</p>
                                <div class="text-center mt-lg-3">
                                    <a href="{{ url('/about') }}"
                                        class="bold_font font-9 text-decor-none dark-text-color position-relative stylish_link">
                                        <button type="button" class="btn  semi_font_bold">View
                                            More</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-3 my-lg-0">
                        <div class="card card-shadow">
                            <div class="doctor">
                                <img class="card-img-top o-cover c-img" src="assets/images/d2.png">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center font-bold">Dr.PRUDVISH YARLAGADDA</h5>
                                <p class="card-text text-center heal-para mb-1">M.B.B.S,M.D(PMR-CMC Vellore)</p>
                                <div class="text-center mt-lg-3">
                                    <a href="{{ url('/about') }}"
                                        class="bold_font font-9 text-decor-none dark-text-color position-relative stylish_link">
                                        <button type="button" class="btn  semi_font_bold">View
                                            More</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-3 my-lg-0">
                        <div class="card card-shadow">
                            <div class="doctor c-img">
                                <img class="card-img-top o-cover h-100" src="assets/images/d1.jpeg">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center font-bold">Dr.B.CHANDINI</h5>
                                <p class="card-text text-center heal-para mb-1">M.B.B.S</p>
                                <div class="text-center mt-lg-3">
                                    <a href="{{ url('/about') }}"
                                        class="bold_font font-9 text-decor-none dark-text-color position-relative stylish_link">
                                        <button type="button" class="btn  semi_font_bold">View
                                            More</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@include('includes.footer')
<!-- </div> -->
@stop