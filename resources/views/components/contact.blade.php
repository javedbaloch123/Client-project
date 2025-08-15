  <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
          <h2>Contact</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

          <div class="row g-4 g-lg-5">
              <div class="col-lg-5">
                  <div class="info-box">
                      <h3>Contact Info</h3>
                      <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum
                          primis.</p>

                      <div class="info-item">
                          <div class="icon-box">
                              <i class="bi bi-geo-alt"></i>
                          </div>
                          <div class="content">
                              <h4>Our Location</h4>
                              <p>Pakistan</p>

                          </div>
                      </div>

                      <div class="info-item">
                          <div class="icon-box">
                              <i class="bi bi-envelope"></i>
                          </div>
                          <div class="content">
                              <h4>Email Address</h4>
                              <p>arzoobaloch666@gmail.com</p>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-7">
                  <div class="contact-form">
                      <h3>Get In Touch</h3>
                      <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum
                          primis.</p>

                      <form action="{{ route('form.submit') }}" method="post">
                          @csrf
                          <div class="row gy-4">

                              <div class="col-md-6">
                                  <input type="text" name="name" class="form-control" placeholder="Your Name">
                              </div>

                              <div class="col-md-6 ">
                                  <input type="email" class="form-control" name="email" placeholder="Your Email">
                              </div>

                              <div class="col-12">
                                  <input type="text" class="form-control" name="subject" placeholder="Subject">
                              </div>

                              <div class="col-12">
                                  <textarea class="form-control" name="message" rows="6" placeholder="Message"></textarea>
                              </div>

                              <div class="col-12 text-center">

                                  <button type="submit" class="btn">Send Message</button>
                              </div>

                          </div>
                      </form>

                  </div>
              </div>

          </div>

      </div>

  </section>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
(function($) {
    $(document).ready(function() {

        var $contactForm = $('#contact .contact-form form');

        $contactForm.on('submit', function(e) {
            e.preventDefault();

            var isValid = true;
            var errors = [];

            $contactForm.find('.is-invalid').removeClass('is-invalid');
            $contactForm.find('.error-text').remove();

            var name = $.trim($contactForm.find('input[name="name"]').val());
            if (name.length < 3) {
                isValid = false;
                errors.push({ field: 'name', message: 'Name must be at least 3 characters' });
            }

            var email = $.trim($contactForm.find('input[name="email"]').val());
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                isValid = false;
                errors.push({ field: 'email', message: 'Enter a valid email address' });
            }

            var subject = $.trim($contactForm.find('input[name="subject"]').val());
            if (subject.length < 3) {
                isValid = false;
                errors.push({ field: 'subject', message: 'Subject must be at least 3 characters' });
            }

            var message = $.trim($contactForm.find('textarea[name="message"]').val());
            if (message.length < 10) {
                isValid = false;
                errors.push({ field: 'message', message: 'Message must be at least 10 characters' });
            }

            if (!isValid) {
                errors.forEach(function(err) {
                    var $field = $contactForm.find('[name="' + err.field + '"]');
                    $field.addClass('is-invalid');
                    $field.after('<div class="error-text text-danger small mt-1">' + err.message + '</div>');
                });
                return;
            }

            // Show loading state
            var $btn = $contactForm.find('button[type="submit"]');
            $btn.prop('disabled', true).text('Sending...');

            // AJAX request
            $.ajax({
                url: $contactForm.attr('action'),
                method: 'POST',
                data: $contactForm.serialize(),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: response.message || 'Message sent successfully!',
                        confirmButtonColor: '#3085d6'
                    });
                    $contactForm[0].reset();
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        var res = xhr.responseJSON.errors;
                        $.each(res, function(field, messages) {
                            var $field = $contactForm.find('[name="' + field + '"]');
                            $field.addClass('is-invalid');
                            $field.after('<div class="error-text text-danger small mt-1">' + messages[0] + '</div>');
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong. Please try again.',
                            confirmButtonColor: '#d33'
                        });
                    }
                },
                complete: function() {
                    $btn.prop('disabled', false).text('Send Message');
                }
            });

        });

    });
})(jQuery);
</script>

