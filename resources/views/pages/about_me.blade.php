@extends('layouts.app')
@section('content')
    <!-- about-area-->
    <section id="about" class="about-area primary-bg pt-150 pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset('assets/img') }}/banner/banner_img2.png" title="me-01" alt="me-01">
                    </div>
                </div>
                <div class="col-lg-6 pr-90">
                    <div class="section-title mb-25">
                        <span>Introduction</span>
                        <h2>About Me</h2>
                    </div>
                    <div class="about-content">
                        <p>I am Tanvir Azam Jishan.I am 23 years old.I am from Kishorejong.I have complated my Diploma In Engineering in CSE from Brahmanbaria
                            Polytechnic Institur.I want to a best laravel developer.</p>
                        <h3>Education:</h3>
                    </div>
                    <!-- Education Item -->
                    <div class="education">
                        <div class="year">2018</div>
                        <div class="line"></div>
                        <div class="location">
                            <span style="font-size: 20px;" class="">Secondary School Certificate
                            </span>

                            <div class="">
                                <h6 style="padding-bottom: 30px;">
                                    Result:<span style="font-size: 15px;">4.88 OUT OF 5</span>
                                </h6>
                            </div>

                        </div>
                    </div>
                    <div class="education">
                        <div class="year">2022</div>
                        <div class="line"></div>
                        <div class="location">
                            <span style="font-size: 20px;" class="">Diploma In Computer Engineering
                            </span>

                            <div class="">
                                <h6 style="padding-bottom: 23px;">
                                    Result:<span style="font-size: 15px;">3.75 OUT OF 4</span>
                                </h6>
                            </div>

                        </div>
                    </div>
                    <!-- End Education Item -->
                </div>
            </div>
        </div>
    </section>
    {{-- skill start --}}
    <section id="about" class="about-area primary-bg pt-150 pb-120">
        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-6">
                    {{-- skill selction start --}}
                    <!-- about-area-->

                    <h3 class="color:red;">SKILLS</h3>

                    <!-- Education Item -->
                    <div class="education">
                        <div class="year">2020</div>
                        <div class="line"></div>
                        <div class="location">
                            <span>HTML</span>
                            <div class="progressWrapper">
                                <div class="progress">
                                    <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s"
                                        role="progressbar" style="width: 97%;" aria-valuenow="98" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Education Item -->
                    <!-- Education Item -->
                    <div class="education">
                        <div class="year">2020</div>
                        <div class="line"></div>
                        <div class="location">
                            <span>CSS</span>
                            <div class="progressWrapper">
                                <div class="progress">
                                    <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s"
                                        role="progressbar" style="width: 95%;" aria-valuenow="96" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Education Item -->
                    <!-- Education Item -->
                    <div class="education">
                        <div class="year">2023</div>
                        <div class="line"></div>
                        <div class="location">
                            <span>PHP</span>
                            <div class="progressWrapper">
                                <div class="progress">
                                    <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s"
                                        role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Education Item -->
                    <!-- Education Item -->
                    <div class="education">
                        <div class="year">2023</div>
                        <div class="line"></div>
                        <div class="location">
                            <span>LARAVEL</span>
                            <div class="progressWrapper">
                                <div class="progress">
                                    <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s"
                                        role="progressbar" style="width: 10%;" aria-valuenow="90" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Education Item -->
                    <!-- about-area-end -->
                    {{-- skill section end --}}
                </div>
                <div class="col-lg-6">
                    <h3 style="">Working Experience</h3>
                    <h6>There are no working experience in this field.</h6>
                </div>
                <div style="margin-top: 20px;" class="align-item-center">
                    <h3 style="">Simple Certificate</h3>
                    <img src="{{ asset('assets/img/certification.jfif') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- about-area-end -->
@endsection
