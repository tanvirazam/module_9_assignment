@extends("layouts.app")

@section("content")
<section style="margin-top: 20px;" id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>Portfolio Showcase</span>
                                <h2>My Recent Best Project</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
								<div class="speaker-thumb">
									<img src="{{ asset('assets/img') }}/ssproject.PNG" alt="img">
								</div>
								<div class="speaker-overlay">
									<span>Design</span>
									<h4><a href="">Hamble Triangle</a></h4>
									<a href="" class="arrow-btn">More information <span></span></a>
								</div>
							</div>
                        </div>
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
								<div class="speaker-thumb">
									<img src="{{ asset('assets/img') }}/projectssssPNG.PNG" alt="img">
								</div>
								<div class="speaker-overlay">
									<span>Video</span>
									<h4><a href="portfolio-single.html">Dark Beauty</a></h4>
									<a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
								</div>
							</div>
                        </div>
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
								<div class="speaker-thumb">
									<img src="{{ asset('assets/img') }}/ecommercepo.PNG" alt="img">
								</div>
								<div class="speaker-overlay">
									<span>Audio</span>
									<h4><a href="portfolio-single.html">Gilroy Limbo.</a></h4>
									<a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
								</div>
							</div>
                        </div>

                      


                    </div>
                </div>
            </section>
@endsection
