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
                    <h3 class="a-h3">About us</h3>
                </div>
                <!-- <div class="about-bg"></div> -->
            </div>
        </div>
    </div>
    <!-- section 2 about heading -->
    <div class="col-12 mt-2 mt-lg-5">
        <div class="container">
            <p class="mb-0 about-p text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                do eiusmod tempor incididunt ut
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                ut
                aliquip Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
            </p>
        </div>
    </div>

    <!-- session 3 youtube vdo -->
    <div class="col-12 mt-3 mt-lg-5">
        <div class="container">
            <iframe class="w-100" height="415" src="https://www.youtube.com/embed/inWWhr5tnEA"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </div>

    <!--session 4 architect -->
    <div class="col-12 mt-5 mt-lg-5">
        <div class="container">
            <h3 class="archite text-center">Disai</h3>
            <div class="d-flex row mx-1 my-5 my-lg-5">
                <div class="col-md-4 d-flex justify-content-center align-items-center py-md-3 px-0 bg-logo">
                    <div class="mx-5 my-5 my-lg-0">
                        <h1 class="text-center ab-test">TESTIMONIALS</h1>
                    </div>
                </div>
                <div class="col-md-8 px-0 rght-bg">
                    <div class="py-2 px-2 px-lg-5 py-lg-4">
                        <p class="rhgt-p"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="my-lg-3 mt-lg-5">
                            <p class="structure mb-0 px-lg-5">structura villas</p>
                            <p class="mb-0 ab-name px-lg-5">Steven J. Obryan</p>
                            <p class="mb-0 ab-auth px-lg-5">architect</p>
                        </div>
                        <div class="img-pos">
                            <img src="assets/images/round.png" class="ab-img-ht">
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex row mx-1 my-5 my-lg-5">
                <div class="col-md-4 d-flex justify-content-center align-items-center py-md-3 px-0 bg-logo">
                    <div class="mx-5 my-5 my-lg-0">
                        <h1 class="text-center ab-test">TESTIMONIALS</h1>
                    </div>
                </div>
                <div class="col-md-8 px-0 rght-bg">
                    <div class="py-2 px-2 px-lg-5 py-lg-4">
                        <p class="rhgt-p"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="my-lg-3 mt-lg-5">
                            <p class="structure mb-0 px-lg-5">structura villas</p>
                            <p class="mb-0 ab-name px-lg-5">Steven J. Obryan</p>
                            <p class="mb-0 ab-auth px-lg-5">architect</p>
                        </div>
                        <div class="img-pos">
                            <img src="assets/images/round.png" class="ab-img-ht">
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