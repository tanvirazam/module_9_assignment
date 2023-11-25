@extends('layouts.app')

@section('content')
    <!-- banner-area -->

    <section  id="home" class="">

        <div style="margin-top: 20% !important;" class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-6">
                    <div class="banner-content">
                        <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                        <h2 class="wow fadeInUp" data-wow-delay="0.4s">I am Jishan</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.6s">I'm Jishan, professional web developer with long time
                            experience in this field​.</p>

                        <a href="{{ route('project') }}" class="btn wow fadeInUp" data-wow-delay="1s">SEE PROJECT</a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
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
                <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                    <div class="banner-img text-right">
                        <img src="img/banner/banner_img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-shape"><img src="img/shape/dot_circle.png" class="rotateme" alt="img"></div>
    </section>
    <!-- banner-area-end -->
@endsection
