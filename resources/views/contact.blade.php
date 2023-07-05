<x-web.app-layout>

    <x-web.sub-header />


    <section class="map-section">
        <h2 class="hidden">title</h2>

        <div id="googleMap"></div>
    </section>



    <section class="contact-section section-padding">
        <div class="container">
            <div class="contact-wrapper">
                <div class="section-title text-center">
                    <h2>Drop us a line</h2>
                    <p>Please contact us using the information below. For additional <br> information please visit the appropriate page on our site.</p>
                </div> <!-- section-title -->

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-section">
                            <form class="contact-form">
                                <div class="form-group">
                                    <input id="name" name="name" type="text" class="form-control"  required="" placeholder="Full Name">
                                </div>

                                <div class="form-group">
                                    <input class="domainSearchBar form-control" id="email" name="email" type="email" required="" placeholder="Email">
                                </div>

                                <div class="form-group">
                                    <input id="last-name" name="name" type="text" class="form-control"  required="" placeholder="Location">
                                </div>

                                <div class="form-group">
                                    <textarea id="message" name="message" class="form-control form-message" rows="4" required="" placeholder="Write.."></textarea>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </form>
                        </div> <!-- mail-section -->
                    </div>

                    <div class="col-md-6">
                        <ul class="location">
                            <li>
                                <i class="fa fa-road" aria-hidden="true"></i>

                                <div class="text">131 Dartmouth Street <br> Boston, Massachusetts 02116 <br> United States</div>
                            </li>

                            <li>
                                <i class="fa fa-volume-control-phone" aria-hidden="true"></i>

                                <div class="text">+1 617 572 2000</div>
                            </li>

                            <li>
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>

                                <div class="text">support@consulting.com</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- contact-section -->

</x-web.app-layout>
