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
            <h1 class="mx-auto font-bold mb-0 font3 heading2">Objective</h1>
        </div>
    </div>
    <div class="col-12 px-3 text-center py-4">
        <p class="live-well-p px-0 px-md-5 mb-0 py-md-4">Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
        <p class="live-well-p px-0 px-md-5 mb-0"> Vision: Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
        <p class="live-well-p px-0 px-md-5 mb-0">Mission: Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
            to attain the highest possible level
            of independence</p>

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