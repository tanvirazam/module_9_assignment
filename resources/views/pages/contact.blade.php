@extends("layouts.app")

@section("content")
  <!-- contact-area -->
            <section style="margin-top: 20px;" id="contact" class="contact-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-title mb-20">
                                <span>information</span>
                                <h2>Contact Information</h2>
                            </div>
                            <div class="contact-content">
                                <p>Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a galley.</p>
                                <h5>OFFICE IN <span>MY HOME</span></h5>
                                <div class="contact-list">
                                    <ul>
                                        <li><i class="fas fa-map-marker"></i><span>Address :</span>Kuliarchar, Kishoregonj</li>
                                        <li><i class="fas fa-headphones"></i><span>Phone :</span>+9 125 645 8654</li>
                                        <li><i class="fas fa-globe-asia"></i><span>e-mail :</span>tanvirazamjishan165170@gmail.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-form">
                                <form action="#">
                                    <input type="text" placeholder="your name *" required>
                                    <input type="email" placeholder="your email *" required>
                                    <textarea name="message" id="message" placeholder="your message *" required></textarea>
                                    <button class="btn">Send</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->
 @endsection
