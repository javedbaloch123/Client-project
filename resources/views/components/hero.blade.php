 <section id="hero" class="hero section">

     <div class="background-elements">
         <div class="bg-circle circle-1"></div>
         <div class="bg-circle circle-2"></div>
     </div>

     <div class="hero-content">
         <div class="container">
             <div class="row align-items-center">

                 <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                     <div class="hero-text">
                         <h2>{{ $data->brand_name }}</h2>
                         <h5>{{ $data->subtitle }}</h5>
                         {{-- <p class="lead"><span class="typed" data-typed-items="Let’s Write Your Next Big Win"></span>
                         </p> --}}
                         <p class="description">{{ $data->desc }}...<a href="{{ route('readMore') }}">Read more</a>

                         </p>

                         <div class="hero-actions">
                             <a href="#portfolio" class="btn btn-primary">View My Work</a>
                             <a href="#contact" class="btn btn-outline">Get In Touch</a>
                         </div>

                         <div class="social-links">
                             <a href="#"><i class="bi bi-dribbble"></i></a>
                             <a href="#"><i class="bi bi-behance"></i></a>
                             <a href="#"><i class="bi bi-github"></i></a>
                             <a href="#"><i class="bi bi-linkedin"></i></a>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                     <div class="hero-visual">
                         <div class="profile-container">
                             <div class="profile-background"></div>
                             <img src="{{ asset('uploads/'.$data->image) }}" alt="Alexander Chen" class="profile-image">
                         </div>
                     </div>
                 </div>

             </div>
         </div>
     </div>

 </section>


 <style>
     .hero-text h2 {
         font-size: 40px !important;
     }
 </style>
