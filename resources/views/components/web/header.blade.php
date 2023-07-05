<header class="header-section">
    <div class="topper">
        <div class="container">
            <div class="top-bar">
                <div class="row">
                    <div class="col-md-8">
                        <div class="header-left-bar">
                            <ul class="contact-wrapper">
                                <li><i class="fa fa-envelope" aria-hidden="true"></i> support@consulting.com</li>
                                <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +123 4567 889</li>
                            </ul>
                        </div> <!-- header-left-bar -->
                    </div>

                    <div class="col-md-4">
                        <div class="header-right-bar text-right">
                            <div class="language">
                                <div class="dropbar closed">
                                    <i class="fa fa-language" aria-hidden="true"></i>
                                    <div class="title">lan</div>

                                    <div class="dropbar-menu">
                                        <ul>
                                            <li><img src="assets/images/map/eng.png" alt="">Eng</li>

                                            <li><img src="assets/images/map/china.png" alt="">China</li>

                                            <li><img src="assets/images/map/india.png" alt="">India</li>

                                            <li><img src="assets/images/map/brazil.png" alt="">Brazil</li>

                                            <li><img src="assets/images/map/canada.png" alt="">Canada</li>

                                            <li><img src="assets/images/map/australia.png" alt="">Australia
                                            </li>

                                            <li><img src="assets/images/map/nepal.png" alt="">Nepal</li>

                                            <li><img src="assets/images/map/brazil.png" alt="">Srilanka</li>

                                            <li><img src="assets/images/map/brazil.png" alt="">Gana</li>

                                            <li><img src="assets/images/map/brazil.png" alt="">Italy</li>

                                            <li><img src="assets/images/map/brazil.png" alt="">Denmark</li>

                                            <li><img src="assets/images/map/brazil.png" alt="">Brenna</li>

                                            <li><img src="assets/images/map/brazil.png" alt="">Robert</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="social-icon pull-right">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div> <!-- header-right-bar -->
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- topper -->


    <div class="container">
        <nav class="navbar navbar-inverse hidden-sm hidden-xs">
            <div class="navbar-inner">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png"
                            alt="image"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="{{ Request::is('accueil') ? 'active' : '' }}"><a href="{{ route('display.view', 'accueil') }}">Accueil</a></li>

                        <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ route('display.view', 'about') }}">Qui sommes-nous</a></li>

                        <li class="dropdown"><a href="#">Nos Service <i class="fa fa-angle-down"
                                    aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li class = " {{ Request::is('services') ? 'active' : '' }}" ><a href="{{ route('display.view', 'services') }}">Service-One</a></li>
                                <li class = " {{ Request::is('services') ? 'active' : '' }}" ><a href="{{ route('display.view', 'services') }}">Service-Two</a></li>
                                <li class = " {{ Request::is('services') ? 'active' : '' }}" ><a href="{{ route('display.view', 'services') }}">Service-Three</a></li>
                                <li class = " {{ Request::is('services') ? 'active' : '' }}" ><a href="{{ route('display.view', 'services') }}">Service-Four</a></li>
                            </ul>
                        </li>

                        <li class="{{ Request::is('formations') ? 'active' : '' }}"><a href="{{ route('display.view', 'formations') }}">Nos Formations</a></li>

                        <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{ route('display.view', 'contact') }}">Contact</a></li>

                        <li>
                            <div class="search-view">
                                <span class="open-bar"><a href="#"><i class="fa fa-search"
                                            aria-hidden="true"></i></a></span>

                                <div id="search-bar">
                                    <span class="close-bar pull-right"><i class="fa fa-times"
                                            aria-hidden="true"></i></span>

                                    <form class="form-bar">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="search">
                                        </div>
                                    </form>
                                </div> <!-- search-bar -->
                            </div> <!-- search-view -->
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header> <!-- header-section -->
