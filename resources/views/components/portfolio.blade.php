 <section id="portfolio" class="portfolio section">

     <!-- Section Title -->
     <div class="container section-title" data-aos="fade-up">
         <h2>Portfolio</h2>
         <p>Showcasing my work, skills, and creative solutions that deliver results..</p>
     </div><!-- End Section Title -->

     <div class="container" data-aos="fade-up" data-aos-delay="100">

         <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

             <div class="row">
                 <div class="col-lg-3 filter-sidebar">
                     <div class="filters-wrapper" data-aos="fade-right" data-aos-delay="150">
                         <ul class="portfolio-filters isotope-filters">
                             <li data-filter="*" class="filter-active">All Projects</li>
                             <li data-filter=".filter-photography">Photography</li>
                             <li data-filter=".filter-design">Design</li>
                             <li data-filter=".filter-automotive">Automotive</li>
                             <li data-filter=".filter-nature">Nature</li>
                         </ul>
                     </div>
                 </div>

                 <div class="col-lg-9">
                     <div class="row gy-4 portfolio-container isotope-container" data-aos="fade-up"
                         data-aos-delay="200">

                         @foreach ($projects as $project)
                             <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-photography">
                                 <div class="portfolio-wrap">
                                     <img src="{{ asset('uploads/project/'.$project->image) }}" class="img-fluid"
                                         alt="Portfolio Image" loading="lazy">
                                     <div class="portfolio-info">
                                         <div class="content">
                                             <span class="category">{{ $project->category }}</span>
                                             <h4>{{ $project->name }}</h4>
                                             <div class="portfolio-links">
                                                 <a href="{{ asset('uploads/project/'.$project->image) }}"
                                                     class="glightbox" title="Capturing Moments"><i
                                                         class="bi bi-plus-lg"></i></a>
                                                 <a href="{{ route('project.show',$project->id) }}" title="More Details"><i
                                                         class="bi bi-arrow-right"></i></a>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div><!-- End Portfolio Item -->
                         @endforeach
                        
                         {{-- <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-design">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-2.webp" class="img-fluid" alt="Portfolio Image" loading="lazy">
                    <div class="portfolio-info">
                      <div class="content">
                        <span class="category">Web Design</span>
                        <h4>Woodcraft Design</h4>
                        <div class="portfolio-links">
                          <a href="assets/img/portfolio/portfolio-2.webp" class="glightbox" title="Woodcraft Design"><i class="bi bi-plus-lg"></i></a>
                          <a href="portfolio-details.html" title="More Details"><i class="bi bi-arrow-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- End Portfolio Item --> --}}

                         {{-- <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-automotive">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-portrait-2.webp" class="img-fluid" alt="Portfolio Image" loading="lazy">
                    <div class="portfolio-info">
                      <div class="content">
                        <span class="category">Automotive</span>
                        <h4>Classic Beauty</h4>
                        <div class="portfolio-links">
                          <a href="assets/img/portfolio/portfolio-portrait-2.webp" class="glightbox" title="Classic Beauty"><i class="bi bi-plus-lg"></i></a>
                          <a href="portfolio-details.html" title="More Details"><i class="bi bi-arrow-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- End Portfolio Item --> --}}

                         {{-- <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-nature">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-portrait-4.webp" class="img-fluid" alt="Portfolio Image" loading="lazy">
                    <div class="portfolio-info">
                      <div class="content">
                        <span class="category">Nature</span>
                        <h4>Natural Growth</h4>
                        <div class="portfolio-links">
                          <a href="assets/img/portfolio/portfolio-portrait-4.webp" class="glightbox" title="Natural Growth"><i class="bi bi-plus-lg"></i></a>
                          <a href="portfolio-details.html" title="More Details"><i class="bi bi-arrow-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- End Portfolio Item --> --}}

                         {{-- <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-photography">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-5.webp" class="img-fluid" alt="Portfolio Image" loading="lazy">
                    <div class="portfolio-info">
                      <div class="content">
                        <span class="category">Photography</span>
                        <h4>Urban Stories</h4>
                        <div class="portfolio-links">
                          <a href="assets/img/portfolio/portfolio-5.webp" class="glightbox" title="Urban Stories"><i class="bi bi-plus-lg"></i></a>
                          <a href="portfolio-details.html" title="More Details"><i class="bi bi-arrow-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- End Portfolio Item --> --}}

                         {{-- <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-design">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-6.webp" class="img-fluid" alt="Portfolio Image" loading="lazy">
                    <div class="portfolio-info">
                      <div class="content">
                        <span class="category">Web Design</span>
                        <h4>Digital Experience</h4>
                        <div class="portfolio-links">
                          <a href="assets/img/portfolio/portfolio-6.webp" class="glightbox" title="Digital Experience"><i class="bi bi-plus-lg"></i></a>
                          <a href="portfolio-details.html" title="More Details"><i class="bi bi-arrow-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- End Portfolio Item --> --}}

                     </div><!-- End Portfolio Container -->
                 </div>
             </div>

         </div>

     </div>

 </section>
