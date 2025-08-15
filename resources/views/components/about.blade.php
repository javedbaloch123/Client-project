 <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-5" data-aos="zoom-in" data-aos-delay="200">
            <div class="profile-card">
              <div class="profile-header">
                <div class="profile-image">
                  <img src="{{ asset('uploads/about/'.$data->image) }}" alt="Profile Image" class="img-fluid">
                </div>
                <div class="profile-badge">
                  <i class="bi bi-check-circle-fill"></i>
                </div>
              </div>

              <div class="profile-content">
                <h3>Marcus Thompson</h3>
                <p class="profession">Professional Certified Copywriter</p>

                <div class="contact-links">
                  <a href="mailto:marcus@example.com" class="contact-item">
                    <i class="bi bi-envelope"></i>
                    marcus@example.com
                  </a>
                  
                  <a href="#" class="contact-item">
                    <i class="bi bi-geo-alt"></i>
                     Pakistan
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-7" data-aos="fade-left" data-aos-delay="300">
            <div class="about-content">
              <div class="section-header">
                <span class="badge-text">Get to Know Me</span>
                <h2>{{ $data->title }}</h2>
              </div>

              <div class="description">
                <p>{!! $data->desc !!}</p>

              </div>

              <div class="stats-grid">
                <div class="stat-item">
                  <div class="stat-number">{{ $data->project_completed }}+</div>
                  <div class="stat-label">Projects Completed</div>
                </div>
                <div class="stat-item">
                  <div class="stat-number">{{ $data->years_experience }}+</div>
                  <div class="stat-label">Years Experience</div>
                </div>
                <div class="stat-item">
                  <div class="stat-number">{{ $data->client_satisfaction }}%</div>
                  <div class="stat-label">Client Satisfaction</div>
                </div>
              </div>

              <div class="details-grid">
                
                <div class="detail-row">
                  <div class="detail-item">
                    <span class="detail-label">Education</span>
                    <span class="detail-value">{{ $data->education }}</span>
                  </div>
                  <div class="detail-item">
                    <span class="detail-label">Languages</span>
                    <span class="detail-value">{{ $data->languages }}</span>
                  </div>
                </div>
              </div>

              <div class="cta-section">
                <a href="{{ asset('assets/resume.png') }}" class="btn btn-primary" download>
                  <i class="bi bi-download"></i>
                  Download Resume
                </a>
                <a href="https://calendly.com/dua-baloch/duathecopywriter" class="btn btn-outline">
                  <i class="bi bi-chat-dots"></i>
                  Let's Talk
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section>