<?php
include "include/connection.php";
include "include/head.php";
include "include/nav.php";
?>
<!-- Content -->
<section class="pb_cover_v1 cover-bg-black cover-bg-opacity-4 text-center" style="background-image: url(assets/images/restaurant/1900x1200/img_1.jpg)" id="section-home">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-9  order-md-1">
                <a href="https://vimeo.com/channels/staffpicks/93951774" class="play popup-vimeo"><i class="ion-ios-play"></i></a>
                <h2 class="heading mb-3">The Lean Restaurant</h2>
                <div class="sub-heading">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <p><a href="#section-contact" role="button" class="btn smoothscroll pb_outline-light rounded-0 btn-xl pb_font-13 pb_letter-spacing-2 p-3">Reserve a table</a></p>
            </div>
        </div>
    </div>
</section>
<section class="pb_section" id="section-about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <div class="row">
                    <div class="col">
                        <p><img src="assets/images/restaurant/800x975/img_1.jpg" alt="Instant Image" class="img-fluid"></p>
                    </div>
                    <div class="col">
                        <p><img src="assets/images/restaurant/800x975/img_2.jpg" alt="Instant Image" class="img-fluid"></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pl-lg-5 pl-lg-0">
                <h2 class="mb-4 text-uppercase pb_letter-spacing-2">The Restaurant</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>

                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <p><a href="#section-menu" class="smoothscroll text-danger text-uppercase">See our menu <i class="ion-arrow-down-c"></i></a></p>
            </div>
        </div>
    </div>
</section>
<section class="pb_section" id="section-menu">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 text-center">
                <h2 class="mb-4 text-uppercase pb_letter-spacing-2">Menu</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">

                <ul class="nav justify-content-center pb_tab_v1">
                    <li class="nav-item">
                        <a class="nav-link active p-3" data-toggle="list" href="#food" role="tab">Food</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-3" data-toggle="list" href="#drinks" role="tab">Drinks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-3" data-toggle="list" href="#salads" role="tab">Salads</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="food" role="tabpanel">
                        <div class="row">
                            <div class="col-md">
                                <ul class="list-unstyled pb_food-menu">
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <h3 class="pb_font-18 font-weight-bold">Eggplant Parmiagana</h3>
                                                <p class="mb-0">Far far away, behind the word mountains..</p>
                                            </div>
                                            <div class="col-lg-2"><span class="price"><sup>$</sup>13.95</span></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <h3 class="pb_font-18 font-weight-bold">Fried Calamari</h3>
                                                <p class="mb-0">Far far away, behind the word mountains..</p>
                                            </div>
                                            <div class="col-lg-2"><span class="price"><sup>$</sup>15.50</span></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <h3 class="pb_font-18 font-weight-bold">Sausage and Pepper</h3>
                                                <p class="mb-0">Far far away, behind the word mountains..</p>
                                            </div>
                                            <div class="col-lg-2"><span class="price"><sup>$</sup>17.35</span></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <h3 class="pb_font-18 font-weight-bold">Potato and Egg</h3>
                                                <p class="mb-0">Far far away, behind the word mountains..</p>
                                            </div>
                                            <div class="col-lg-2"><span class="price"><sup>$</sup>11.50</span></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md">
                                <ul class="list-unstyled pb_food-menu">
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <h3 class="pb_font-18 font-weight-bold">Eggplant Parmiagana</h3>
                                                <p class="mb-0">Far far away, behind the word mountains..</p>
                                            </div>
                                            <div class="col-lg-2"><span class="price"><sup>$</sup>20.75</span></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <h3 class="pb_font-18 font-weight-bold">Fried Calamari</h3>
                                                <p class="mb-0">Far far away, behind the word mountains..</p>
                                            </div>
                                            <div class="col-lg-2"><span class="price"><sup>$</sup>18.00</span></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <h3 class="pb_font-18 font-weight-bold">Sausage and Pepper</h3>
                                                <p class="mb-0">Far far away, behind the word mountains..</p>
                                            </div>
                                            <div class="col-lg-2"><span class="price"><sup>$</sup>10.25</span></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <h3 class="pb_font-18 font-weight-bold">Potato and Egg</h3>
                                                <p class="mb-0">Far far away, behind the word mountains..</p>
                                            </div>
                                            <div class="col-lg-2"><span class="price"><sup>$</sup>21.95</span></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="drinks" role="tabpanel">
                        <div class="row">
                            <div class="col-md">
                                <ul class="list-unstyled pb_food-menu">
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <h3 class="pb_font-18 font-weight-bold">Fountain Soda</h3>
                                                <p class="mb-0">Far far away, behind the word mountains..</p>
                                            </div>
                                            <div class="col-lg-2"><span class="price"><sup>$</sup>10.95</span></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <h3 class="pb_font-18 font-weight-bold">Fresh Juices</h3>
                                                <p class="mb-0">Far far away, behind the word mountains..</p>
                                            </div>
                                            <div class="col-lg-2"><span class="price"><sup>$</sup>12.50</span></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <h3 class="pb_font-18 font-weight-bold">Coffee/Tea</h3>
                                                <p class="mb-0">Far far away, behind the word mountains..</p>
                                            </div>
                                            <div class="col-lg-2"><span class="price"><sup>$</sup>5.35</span></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <h3 class="pb_font-18 font-weight-bold">Unsweetened Tea</h3>
                                                <p class="mb-0">Far far away, behind the word mountains..</p>
                                            </div>
                                            <div class="col-lg-2"><span class="price"><sup>$</sup>12.50</span></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md">
                                <ul class="list-unstyled pb_food-menu">
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <h3 class="pb_font-18 font-weight-bold">Fountain Soda</h3>
                                                <p class="mb-0">Far far away, behind the word mountains..</p>
                                            </div>
                                            <div class="col-lg-2"><span class="price"><sup>$</sup>10.95</span></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <h3 class="pb_font-18 font-weight-bold">Fresh Juices</h3>
                                                <p class="mb-0">Far far away, behind the word mountains..</p>
                                            </div>
                                            <div class="col-lg-2"><span class="price"><sup>$</sup>12.50</span></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <h3 class="pb_font-18 font-weight-bold">Coffee/Tea</h3>
                                                <p class="mb-0">Far far away, behind the word mountains..</p>
                                            </div>
                                            <div class="col-lg-2"><span class="price"><sup>$</sup>5.35</span></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <h3 class="pb_font-18 font-weight-bold">Unsweetened Tea</h3>
                                                <p class="mb-0">Far far away, behind the word mountains..</p>
                                            </div>
                                            <div class="col-lg-2"><span class="price"><sup>$</sup>12.50</span></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="salads" role="tabpanel">
                        <div class="row">
                            <div class="col-md">
                                <ul class="list-unstyled pb_food-menu">
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <h3 class="pb_font-18 font-weight-bold">Caesars Salad</h3>
                                                <p class="mb-0">Romaine lettuce, croutons, and grated cheese</p>
                                            </div>
                                            <div class="col-lg-2"><span class="price"><sup>$</sup>13.95</span></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <h3 class="pb_font-18 font-weight-bold">Garden Salad</h3>
                                                <p class="mb-0">Mixed greens, tomato, cucumber &amp; black olives</p>
                                            </div>
                                            <div class="col-lg-2"><span class="price"><sup>$</sup>15.50</span></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <h3 class="pb_font-18 font-weight-bold">Baby Greens</h3>
                                                <p class="mb-0">Mixed greens, fresh mozzarella, tomato &ampl toasted peppers</p>
                                            </div>
                                            <div class="col-lg-2"><span class="price"><sup>$</sup>17.35</span></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <h3 class="pb_font-18 font-weight-bold">Cold Antipasto</h3>
                                                <p class="mb-0">Romaine lettuce, croutons, and grated cheese</p>
                                            </div>
                                            <div class="col-lg-2"><span class="price"><sup>$</sup>11.50</span></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md">
                                <ul class="list-unstyled pb_food-menu">
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <h3 class="pb_font-18 font-weight-bold">Caesars Salad</h3>
                                                <p class="mb-0">Romaine lettuce, croutons, and grated cheese</p>
                                            </div>
                                            <div class="col-lg-2"><span class="price"><sup>$</sup>22.95</span></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <h3 class="pb_font-18 font-weight-bold">Garden Salad</h3>
                                                <p class="mb-0">Mixed greens, tomato, cucumber &amp; black olives</p>
                                            </div>
                                            <div class="col-lg-2"><span class="price"><sup>$</sup>11.50</span></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <h3 class="pb_font-18 font-weight-bold">Baby Greens</h3>
                                                <p class="mb-0">Mixed greens, fresh mozzarella, tomato &ampl toasted peppers</p>
                                            </div>
                                            <div class="col-lg-2"><span class="price"><sup>$</sup>14.35</span></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <h3 class="pb_font-18 font-weight-bold">Cold Antipasto</h3>
                                                <p class="mb-0">Romaine lettuce, croutons, and grated cheese</p>
                                            </div>
                                            <div class="col-lg-2"><span class="price"><sup>$</sup>15.50</span></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pb_md_py_cover text-center cover-bg-black cover-bg-opacity-4" style="background-image: url(assets/images/restaurant/1900x1200/img_1.jpg)" id="section-home">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-9  order-md-1">
                <h2 class="heading mb-3">Delicious &amp; Nutritious</h2>
                <p class="sub-heading">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
    </div>
</section>
<section class="pb_section" id="section-gallery">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 text-center">
                <h2 class="mb-4 text-uppercase pb_letter-spacing-2">Gallery</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card-columns">
                    <div class="card border-0 mb-4">
                        <a href="assets/images/restaurant/800x975/img_1.jpg" class="pb_hover-zoom image-popup">
                            <img class="img-fluid" src="assets/images/restaurant/800x975/img_1.jpg" alt="Image caption here">
                            <i class="ion-ios-search-strong icon"></i>
                        </a>
                    </div>
                    <div class="card border-0 mb-4">
                        <a href="assets/images/restaurant/800x975/img_1.jpg" class="pb_hover-zoom image-popup">
                            <img class="img-fluid" src="assets/images/restaurant/800x975/img_1.jpg" alt="Image caption here">
                            <i class="ion-ios-search-strong icon"></i>
                        </a>
                    </div>
                    <div class="card border-0 mb-4">
                        <a href="assets/images/restaurant/1900x1200/img_1.jpg" class="pb_hover-zoom image-popup">
                            <img class="img-fluid" src="assets/images/restaurant/1900x1200/img_1.jpg" alt="Image caption here">
                            <i class="ion-ios-search-strong icon"></i>
                        </a>
                    </div>
                    <div class="card border-0 mb-4">
                        <a href="assets/images/restaurant/800x975/img_2.jpg" class="pb_hover-zoom image-popup">
                            <img class="img-fluid" src="assets/images/restaurant/800x975/img_2.jpg" alt="Image caption here">
                            <i class="ion-ios-search-strong icon"></i>
                        </a>
                    </div>
                    <div class="card border-0 mb-4">
                        <a href="assets/images/restaurant/1900x1200/img_1.jpg" class="pb_hover-zoom image-popup">
                            <img class="img-fluid" src="assets/images/restaurant/1900x1200/img_1.jpg" alt="Image caption here">
                            <i class="ion-ios-search-strong icon"></i>
                        </a>
                    </div>
                    <div class="card border-0 mb-4">
                        <a href="assets/images/restaurant/800x975/img_1.jpg" class="pb_hover-zoom image-popup">
                            <img class="img-fluid" src="assets/images/restaurant/800x975/img_1.jpg" alt="Image caption here">
                            <i class="ion-ios-search-strong icon"></i>
                        </a>
                    </div>
                    <div class="card border-0 mb-4">
                        <a href="assets/images/restaurant/800x975/img_1.jpg" class="pb_hover-zoom image-popup">
                            <img class="img-fluid" src="assets/images/restaurant/800x975/img_1.jpg" alt="Image caption here">
                            <i class="ion-ios-search-strong icon"></i>
                        </a>
                    </div>

                    <div class="card border-0 mb-4">
                        <a href="assets/images/restaurant/800x975/img_2.jpg" class="pb_hover-zoom image-popup">
                            <img class="img-fluid" src="assets/images/restaurant/800x975/img_2.jpg" alt="Image caption here">
                            <i class="ion-ios-search-strong icon"></i>
                        </a>
                    </div>
                    <div class="card border-0 mb-4">
                        <a href="assets/images/restaurant/1900x1200/img_1.jpg" class="pb_hover-zoom image-popup">
                            <img class="img-fluid" src="assets/images/restaurant/1900x1200/img_1.jpg" alt="Image caption here">
                            <i class="ion-ios-search-strong icon"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pb_section cover-bg-cyan cover-bg-opacity-3">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 text-center">
                <h2 class="mb-4 text-uppercase pb_letter-spacing-2">What People Says...</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <div class="media d-block text-center testimonial_v1 pb_quote_v1">
                    <div class="media-body">
                        <div class="quote pb_text-black">&ldquo;</div>
                        <blockquote class="mb-5 pb_font-20">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</blockquote>
                        <img class="d-flex text-center mx-auto mb-3 rounded-circle" src="assets/images/persons/person_1.jpg" alt="Generic placeholder image">
                        <h3 class="heading">Garry Alexander</h3>
                        <p class="subheading">@garry</p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="media d-block text-center testimonial_v1 pb_quote_v1">
                    <div class="media-body">
                        <div class="quote pb_text-black">&ldquo;</div>
                        <blockquote class="mb-5 pb_font-20">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</blockquote>
                        <img class="d-flex text-center mx-auto mb-3 rounded-circle" src="assets/images/persons/person_5.jpg" alt="Generic placeholder image">
                        <h3 class="heading">Deborah Smith</h3>
                        <p class="subheading">@deborah</p>

                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="media d-block text-center testimonial_v1 pb_quote_v1">

                    <div class="media-body">
                        <div class="quote pb_text-black">&ldquo;</div>
                        <blockquote class="mb-5 pb_font-20">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</blockquote>
                        <img class="d-flex text-center mx-auto mb-3 rounded-circle" src="assets/images/persons/person_2.jpg" alt="Generic placeholder image">
                        <h3 class="heading">James Robertson</h3>
                        <p class="subheading">@james</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pb_md_py_cover text-center cover-bg-black cover-bg-opacity-4" style="background-image: url(assets/images/restaurant/1900x1200/img_1.jpg)" id="section-home">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-9  order-md-1">
                <h2 class="heading mb-3">Good Food, Good Taste</h2>
                <p class="sub-heading">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
    </div>
</section>
<section class="pb_section bg-light" id="section-events">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 text-center">
                <h2 class="mb-4 text-uppercase pb_letter-spacing-2">Events</h2>
            </div>
        </div>
        <div class="row">
            <div class="card-deck">
                <div class="card border-0">
                    <img class="card-img-top" src="assets/images/restaurant/1900x1200/img_1.jpg" alt="Image caption here">
                    <div class="card-body pb_p-40">
                        <small class="text-uppercase pb_color-dark-opacity-3 font-weight-bold">December 2nd, 2017</small>
                        <h4 class="card-title"><a href="#" class="text-danger">Thanksgiving and Reflections</a></h4>
                        <p class="card-text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. .</p>
                    </div>
                </div>
                <div class="card border-0">
                    <img class="card-img-top" src="assets/images/restaurant/1900x1200/img_1.jpg" alt="Image caption here">
                    <div class="card-body pb_p-40">
                        <small class="text-uppercase pb_color-dark-opacity-3 font-weight-bold">December 10th, 2017</small>
                        <h4 class="card-title"><a href="#" class="text-danger">Maker of Monday</a></h4>
                        <p class="card-text">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                </div>
                <div class="card border-0">
                    <img class="card-img-top" src="assets/images/restaurant/1900x1200/img_1.jpg" alt="Image caption here">
                    <div class="card-body pb_p-40">
                        <small class="text-uppercase pb_color-dark-opacity-3 font-weight-bold">December 23rd, 2017</small>
                        <h4 class="card-title"><a href="#" class="text-danger">Family and Kids Promo</a></h4>
                        <p class="card-text">It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pb_section pt-0 pb-0" id="section-contact">
    <div class="d-flex">
        <div class="pb_half py-5">
            <div class="row justify-content-center mb-5">
                <div class="col-md-10 text-center">
                    <h2 class="mb-4 text-uppercase pb_letter-spacing-2">Write us</h2>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-md-7">
                    <form action="#">
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control p-3 rounded-0" id="name">
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control p-3 rounded-0" id="email">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea cols="30" rows="10" class="form-control  p-3 rounded-0" id="message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn pb_outline-dark pb_font-13 pb_letter-spacing-2  p-3 rounded-0" value="Send Message">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="pb_half" id="map">

        </div>
    </div>

</section>
<!-- End Content -->
<?php
include "include/footer.php";
?>