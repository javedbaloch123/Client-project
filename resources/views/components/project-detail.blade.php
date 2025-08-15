<section id="portfolio-details" class="portfolio-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <a href="{{ route('home') }}"><button class="btn btn-primary mb-2">back</button></a>
        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper init-swiper">
               @props(['data'])
              
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="{{ asset('uploads/project/'.$data->image) }}" alt="Portfolio Image" class="img-fluid" loading="lazy">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-left" data-aos-delay="200">
              <h3>{{ $data->name }}</h3>
              <ul>
                <li><strong>Category</strong>: {{ $data->category }}</li>
                {{-- <li><strong>Client</strong>: Victoria Technologies</li> --}}
                <li><strong>Project date</strong>: {{ $data->project_date }}</li>
                {{-- <li><strong>Project URL</strong>: <a href="#" target="_blank">www.example.com</a></li> --}}
              </ul>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
              <h2>Project Overview</h2>
                
                 {!! $data->desc !!}
              {{-- <div class="features mt-4">
                <h3>Key Features</h3>
                <div class="row gy-3">
                   
                </div>
              </div> --}}
            </div>
          </div>

        </div>

      </div>

    </section>