 <section id="services" class="services section">

     <!-- Section Title -->
     <div class="container section-title" data-aos="fade-up">
         <h2>Services</h2>
         <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
     </div><!-- End Section Title -->

     <div class="container" data-aos="fade-up" data-aos-delay="100">

         <div class="service-header">
             <div class="row align-items-center">
                 <div class="col-lg-8 col-md-12">
                     <div class="service-intro">
                         <h2 class="service-heading">
                             <div>Innovative business</div>
                             <div><span>performance solutions</span></div>
                         </h2>
                     </div>
                 </div>
                 <div class="col-lg-4 col-md-12">
                     <div class="service-summary">
                         <p>
                             We integrate forward-thinking strategies, creative approaches, and state-of-the-art
                             technologies to deliver exceptional customer experiences that drive growth and engage
                             target markets.
                         </p>

                     </div>
                 </div>
             </div>
         </div>

         <div class="row justify-content-center">

             @foreach ($services as $service)
                 <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                     <div class="service-card position-relative z-1">
                         <div class="service-icon">
                             <i class="bi bi-palette"></i>
                         </div>
                         <a 
                             class="card-action d-flex align-items-center justify-content-center rounded-circle">
                             <i class="bi bi-arrow-up-right"></i>
                         </a>
                         <h3>
                             <a >
                                 {{ $service->name }}
                             </a>
                         </h3>
                         <p>
                             {{ $service->desc }}
                         </p>
                     </div>
                 </div>
             @endforeach


             {{-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-card position-relative z-1">
              <div class="service-icon">
                <i class="bi bi-gem"></i>
              </div>
              <a href="service-details.html" class="card-action d-flex align-items-center justify-content-center rounded-circle">
                <i class="bi bi-arrow-up-right"></i>
              </a>
              <h3>
                <a href="service-details.html">
                  Design <span>systems</span>
                </a>
              </h3>
              <p>
                Praesent euismod varius tellus, vel bibendum nunc interdum at. Donec vehicula diam vel metus venenatis convallis. Aliquam erat volutpat. Etiam viverra magna sit amet.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-card position-relative z-1">
              <div class="service-icon">
                <i class="bi bi-megaphone"></i>
              </div>
              <a href="service-details.html" class="card-action d-flex align-items-center justify-content-center rounded-circle">
                <i class="bi bi-arrow-up-right"></i>
              </a>
              <h3>
                <a href="service-details.html">
                  Marketing <span>strategies</span>
                </a>
              </h3>
              <p>
                Vivamus tempor velit id magna dictum, sed fermentum nisi faucibus. Integer nec pretium sapien. Fusce tincidunt ligula et purus consequat, ac pellentesque nulla eleifend.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-card position-relative z-1">
              <div class="service-icon">
                <i class="bi bi-code-slash"></i>
              </div>
              <a href="service-details.html" class="card-action d-flex align-items-center justify-content-center rounded-circle">
                <i class="bi bi-arrow-up-right"></i>
              </a>
              <h3>
                <a href="service-details.html">
                  Digital <span>platforms</span>
                </a>
              </h3>
              <p>
                Cras fermentum odio eu feugiat malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et accumsan cursus. Morbi placerat nulla vel nunc viverra accumsan.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-card position-relative z-1">
              <div class="service-icon">
                <i class="bi bi-graph-up"></i>
              </div>
              <a href="service-details.html" class="card-action d-flex align-items-center justify-content-center rounded-circle">
                <i class="bi bi-arrow-up-right"></i>
              </a>
              <h3>
                <a href="service-details.html">
                  Growth <span>acceleration</span>
                </a>
              </h3>
              <p>
                Aenean vel augue vel nisi bibendum posuere. Phasellus in lacus quis urna sodales dignissim. Duis aliquam libero eget risus facilisis. Quisque eget libero vel nisl fringilla.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-card position-relative z-1">
              <div class="service-icon">
                <i class="bi bi-camera-video"></i>
              </div>
              <a href="service-details.html" class="card-action d-flex align-items-center justify-content-center rounded-circle">
                <i class="bi bi-arrow-up-right"></i>
              </a>
              <h3>
                <a href="service-details.html">
                  Media <span>solutions</span>
                </a>
              </h3>
              <p>
                Etiam efficitur lacus in diam finibus, nec ultrices est sagittis. Maecenas elementum magna sed risus faucibus, nec commodo purus facilisis. Vestibulum accumsan magna.
              </p>
            </div>
          </div> --}}
         </div>

     </div>

 </section>
