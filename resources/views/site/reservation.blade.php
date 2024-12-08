
    @extends('layout.layout')

    @section('content')

        
        <!-- # main content
        ================================================== -->
        <article class="s-content">

            <!-- ## pageheader -->
            <section class="s-pageheader pageheader" style="background-image:url(images/pageheader/pageheader-reservations-bg-3000.jpg)">
                <div class="row">
                    <div class="column xl-12 s-pageheader__content">
                        <h1 class="page-title">                        
                            Reservations
                        </h1>                    
                    </div>
                </div>
            </section> 
            
            <!-- ## pagecontent -->
            <section class="s-pagecontent pagecontent">

                <div class="row width-narrower pageintro text-center">
                    <div class="column xl-12">
                        <p class="lead">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias eos quas blanditiis, quos sint nostrum fugit aperiam 
                        inventore optio itaque molestias corporis, ipsa tenetur eligendi nihil iste porro, natus culpa consequuntur. 
                        </p>
                    </div>                       
                </div> <!-- end pageintro -->   
                
                <div class="row width-narrower content-block">
                    <div class="column xl-12">

                        <form name="rform" id="rform" class="reservation-form" method="post" action="" autocomplete="off">
                            <fieldset class="row">

                                <div class="column xl-6 tab-12">
                                    <label for="rname">Name: </label>
                                    <input type="text" name="rame" id="rname" class="u-fullwidth" placeholder="Enter Your Name" value="">
                                </div>

                                <div class="column xl-6 tab-12">
                                    <label for="rphone">Contact Number: </label>
                                    <input type="tel" name="rphone" id="rphone" class="u-fullwidth" placeholder="Enter Your Contact No." value="">
                                </div>

                                <div class="column xl-6 tab-12">
                                    <label for="rdate">Date: </label>
                                    <input type="text" name="rdate" id="rdate" class="u-fullwidth" placeholder="eg: 8/01/2023" value="">
                                </div>

                                <div class="column xl-6 tab-12">
                                    <label for="rparty-size">Party Size (approx):</label>
                                    <input type="number" name="rparty-size" id="rparty-size" class="u-fullwidth" placeholder="eg: 4" value="">
                                </div>

                                <div class="column xl-12 message u-add-bottom">
                                    <label for="radd-info">Additional Information: </label>
                                    <textarea name="radd-info" id="radd-info" class="u-fullwidth" placeholder="Type your additional info here"></textarea>
                                </div>
                               
                                <div class="rform__bottom column xl-12">
                                    <div class="row">
                                        <div class="column xl-6 tab-12">
                                            <label class="rcheckbox u-add-bottom">
                                                <input type="checkbox">
                                                <span class="label-text">Add any kind of mandatory acknowledgement that customers are required to agree to here.</span>
                                            </label>
                                        </div>
        
                                        <div class="column xl-6 tab-12">
                                            <input name="submit" id="submit" class="btn btn--primary btn-wide btn--large u-fullwidth" value="Submit Reservation" type="submit">
                                        </div>
                                    </div>
                                </div>                              
                            </fieldset>
                        </form>

                    </div>
                </div> <!-- end content-block -->

                <div class="row width-narrower row-x-center content-block content-block--grey cta-block">
                    <div class="column xl-10 mob-12">  
                        <h3>Book with OpenTable</h3>
                        <p class="attention-getter">
                        For a quick and convenient way to make a reservation, you can also book through <a href="https://www.opentable.com/" target="_blank">OpenTable</a>. 
                        Simply click the button below to secure your table in just a few easy steps.
                        </p>
                        <a href="https://www.opentable.com/" target="_blank" class="btn btn--primary u-fullwidth">Book a Table</a>
                    </div>
                </div> <!-- end content-block -->

            </section> <!-- pagecontent --> 

        </article> <!-- end main content -->


        <!-- # gallery
        ================================================== -->
        <section id="gallery" class="s-gallery">
            <div class="row s-gallery__inner">
                <div class="column xl-12">

                    <div class="gallery-items grid-list-items">
                        <div class="gallery-items__item grid-list-items__item">
                            <a href="images/gallery/large/l-gallery-01.jpg" class="gallery-items__item-thumb glightbox">
                                <img src="images/gallery/gallery-01.jpg" 
                                    srcset="images/gallery/gallery-01.jpg 1x, 
                                            images/gallery/gallery-01@2x.jpg 2x" alt="">
                            </a>
                        </div> <!-- end gallery-items__item-->
            
                        <div class="gallery-items__item grid-list-items__item">
                            <a href="images/gallery/large/l-gallery-02.jpg" class="gallery-items__item-thumb glightbox">
                                <img src="images/gallery/gallery-02.jpg" 
                                    srcset="images/gallery/gallery-02.jpg 1x, 
                                            images/gallery/gallery-02@2x.jpg 2x" alt="">
                            </a>
                        </div> <!-- end gallery-items__item -->
            
                        <div class="gallery-items__item grid-list-items__item">
                            <a href="images/gallery/large/l-gallery-03.jpg" class="gallery-items__item-thumb glightbox">
                                <img src="images/gallery/gallery-03.jpg" 
                                    srcset="images/gallery/gallery-03.jpg 1x, 
                                            images/gallery/gallery-03@2x.jpg 2x" alt="">
                            </a>
                        </div> <!-- end gallery-items__item -->
            
                        <div class="gallery-items__item grid-list-items__item">
                            <a href="images/gallery/large/l-gallery-04.jpg" class="gallery-items__item-thumb glightbox">
                                <img src="images/gallery/gallery-04.jpg" 
                                    srcset="images/gallery/gallery-04.jpg 1x, 
                                            images/gallery/gallery-04@2x.jpg 2x" alt="">
                            </a>
                        </div> <!-- end gallery-items__item -->
            
                        <div class="gallery-items__item grid-list-items__item">
                            <a href="images/gallery/large/l-gallery-05.jpg" class="gallery-items__item-thumb glightbox">
                                <img src="images/gallery/gallery-05.jpg" 
                                    srcset="images/gallery/gallery-05.jpg 1x, 
                                            images/gallery/gallery-05@2x.jpg 2x" alt="">
                            </a>
                        </div> <!-- end gallery-items__item -->
            
                        <div class="gallery-items__item grid-list-items__item">
                            <a href="images/gallery/large/l-gallery-06.jpg" class="gallery-items__item-thumb glightbox">
                                <img src="images/gallery/gallery-06.jpg" 
                                    srcset="images/gallery/gallery-06.jpg 1x, 
                                            images/gallery/gallery-06@2x.jpg 2x" alt="">
                            </a>
                        </div> <!-- end gallery-items__item -->
            
                        <div class="gallery-items__item grid-list-items__item">
                            <a href="images/gallery/large/l-gallery-07.jpg" class="gallery-items__item-thumb glightbox">
                                <img src="images/gallery/gallery-07.jpg" 
                                    srcset="images/gallery/gallery-07.jpg 1x, 
                                            images/gallery/gallery-07@2x.jpg 2x" alt="">
                            </a>
                        </div> <!-- end gallery-items__item -->
            
                        <div class="gallery-items__item grid-list-items__item">
                            <a href="images/gallery/large/l-gallery-08.jpg" class="gallery-items__item-thumb glightbox">
                                <img src="images/gallery/gallery-08.jpg" 
                                    srcset="images/gallery/gallery-08.jpg 1x, 
                                            images/gallery/gallery-08@2x.jpg 2x" alt="">
                            </a>
                        </div> <!-- end gallery-items__item -->
                    </div> <!-- end grid-list-items -->

                </div>
            </div> <!-- end s-gallery__inner -->
        </section> <!-- end s-gallery --> 


        <!-- # footer 
        ================================================== -->
        <footer id="footer" class="s-footer">  
            
            <div class="row s-footer__top row-x-center">
                <div class="column xl-4 lg-6 tab-8 mob-12">
                    <a href="reservations.html" class="btn btn--primary btn--large u-fullwidth">Book a Table</a>
                </div>
            </div>

            <div class="row s-footer__main-content">

                <div class="column xl-6 md-12 s-footer__block s-footer__about"> 
                    <div class="s-footer__logo">
                        <a class="logo" href="index.html">
                            <img src="images/logo.svg" alt="Homepage">
                        </a>
                    </div>  

                    <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas illum quasi facere libero, 
                    fugiat laboriosam possimus amet consectetur adipisicing elit reprehenderit eveniet tempore quisquam ipsa id esse. Facere ratione dignissimos.
                    </p>               
                </div> <!-- end s-footer__about -->

                <div class="column xl-6 md-12 s-footer__block s-footer__info">
                    <div class="row">
                        <div class="column xl-6 lg-12">
                            <h5>Location</h5>
                            <p>
                            456 Elm Street, Los Angeles <br>
                            CA 90001
                            </p>
                        </div>
                        <div class="column xl-6 lg-12">     
                            <h5>Contacts</h5>
                            <ul class="link-list">
                                <li><a href="mailto:#0">contact@maillard.com</a></li>
                                <li><a href="tel:+2135551212">(213) 555-1234</a></li>
                            </ul> 
                        </div>
                        <div class="column">                   
                            <h5>Opening Hours</h5>
                            <ul class="opening-hours">
                                <li><span class="opening-hours__days">Weekdays</span><span class="opening-hours__time">10:00am - 9:00pm</span></li>
                                <li><span class="opening-hours__days">Weekends</span><span class="opening-hours__time">9:00am - 10:00pm</span></li>
                            </ul> 
                        </div>
                    </div>                    
                </div> <!-- end s-footer__info -->

            </div> <!-- end  s-footer__main-content -->                 
            
            <div class="row s-footer__bottom">
                
                <div class="column xl-6 lg-12">
                    <ul class="s-footer__social social-list">
                        <li>
                            <a href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592 c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20 c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z"></path></svg>
                                <span class="u-screen-reader-text">Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z"></path></svg>
                                <span class="u-screen-reader-text">Twitter</span>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z"></path></svg>
                                <span class="u-screen-reader-text">Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M8.31 10.28a2.5 2.5 0 1 0 2.5 2.49 2.5 2.5 0 0 0-2.5-2.49zm0 3.8a1.31 1.31 0 1 1 0-2.61 1.31 1.31 0 1 1 0 2.61zm7.38-3.8a2.5 2.5 0 1 0 2.5 2.49 2.5 2.5 0 0 0-2.5-2.49zM17 12.77a1.31 1.31 0 1 1-1.31-1.3 1.31 1.31 0 0 1 1.31 1.3z"></path><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm7.38 10.77a3.69 3.69 0 0 1-6.2 2.71L12 16.77l-1.18-1.29a3.69 3.69 0 1 1-5-5.44l-1.2-1.3H7.3a8.33 8.33 0 0 1 9.41 0h2.67l-1.2 1.31a3.71 3.71 0 0 1 1.2 2.72z"></path><path d="M14.77 9.05a7.19 7.19 0 0 0-5.54 0A4.06 4.06 0 0 1 12 12.7a4.08 4.08 0 0 1 2.77-3.65z"></path></svg>
                                <span class="u-screen-reader-text">Tripadvisor</span>
                            </a>
                        </li>
                    </ul> 
                </div> <!-- end section-footer__social -->

                <div class="column xl-6 lg-12">
                    <p class="ss-copyright">
                        <span>© Copyright Maillard 2023</span> 
                        <span>Design by <a href="https://styleshout.com/">StyleShout</a></span>
                    </p>
                </div>

            </div> <!-- end section-footer__bottom -->          

            <div class="ss-go-top">
                <a class="smoothscroll" title="Back to Top" href="#top">                 
                    <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m14.523 18.787s4.501-4.505 6.255-6.26c.146-.146.219-.338.219-.53s-.073-.383-.219-.53c-1.753-1.754-6.255-6.258-6.255-6.258-.144-.145-.334-.217-.524-.217-.193 0-.385.074-.532.221-.293.292-.295.766-.004 1.056l4.978 4.978h-14.692c-.414 0-.75.336-.75.75s.336.75.75.75h14.692l-4.979 4.979c-.289.289-.286.762.006 1.054.148.148.341.222.533.222.19 0 .378-.072.522-.215z" fill-rule="nonzero"/></svg>
                </a>                                
                <span>Back To Top</span>   
            </div> <!-- end ss-go-top -->
            
        </footer> <!-- end s-footer -->

    </div> <!-- end page-wrap -->

    @endsection
    @section('title')
        Reservation
    @endsection