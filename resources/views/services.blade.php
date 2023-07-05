<x-web.app-layout>

    <x-web.sub-header />

    <section class="service-page-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="side-bar">
                        <ul class="page-list text-left">
                            <li><a href="#">All Projects <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li class="active"><a href="service-one.html">Mergers & Acquisitions <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li><a href="service-two.html">Strategy & Growth <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li><a href="service-three.html">Global Expansion <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li><a href="service-four.html">Customer Strategy <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                        </ul>

                        <ul class="location">
                            <li class="heading">Contact</li>

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

                        <div class="brochure text-left">
                            <h4>Brochure</h4>
                            <p>View our 2016 financial prospectus brochure for an easy to read guide on all of the services offer.</p>

                            <span><a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download Brochure</a></span>

                            <span><a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Characteristics</a></span>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="single-service-wrapper">
                        <h3>Mergers & Acquisitions</h3>

                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden.</p>

                        <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>

                        <ul class="service-list">
                            <li><i class="fa fa-adjust" aria-hidden="true"></i> Sed do eiusmod tempor incididunt ut</li>
                            <li><i class="fa fa-adjust" aria-hidden="true"></i> Labore et dolore magna aliqua</li>
                            <li><i class="fa fa-adjust" aria-hidden="true"></i> Ut enim ad minim veniam quis nostrud</li>
                        </ul>

                        <div id="service-carousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#service-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#service-carousel" data-slide-to="1"></li>
                                <li data-target="#service-carousel" data-slide-to="2"></li>
                            </ol>

                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="assets/images/single-service.jpg" alt="">
                                </div>

                                <div class="item">
                                    <img src="assets/images/single-service.jpg" alt="">
                                </div>

                                <div class="item">
                                    <img src="assets/images/single-service.jpg" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="service-tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="false">Audit</a></li>

                                <li role="presentation" class=""><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false">Strategy</a></li>

                                <li role="presentation" class=""><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab" aria-expanded="false">Sustainability</a></li>
                            </ul>

                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active in" id="home">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>

                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="profile">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>

                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="messages">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>

                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- service-page-section -->



    <section class="signup-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-7">
                    <div class="contact-wrapper">
                        <h3>Signup for free <span>newsletter</span> and <span>business tips</span></h3>

                        <form class="signupForm">
                            <div class="form-wrapper">
                                <input class="searchBar" required="" placeholder="email address ...">

                                <button type="submit" class="subscribeBtn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-6 col-sm-5 hidden-xs">
                    <div class="caption text-right wow slideInRight">
                        <img src="assets/images/girl.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-web.app-layout>
