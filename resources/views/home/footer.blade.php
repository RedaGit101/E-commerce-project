<section class="info_section layout_padding2-top">
  <div class="social_container">
      <div class="social_box">
          <a href="https://facebook.com/PrimePicks" target="_blank" class="social_link">
              <i class="fa fa-facebook" aria-hidden="true"></i>
          </a>
          <a href="https://twitter.com/PrimePicks" target="_blank" class="social_link">
              <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>
          <a href="https://instagram.com/PrimePicks" target="_blank" class="social_link">
              <i class="fa fa-instagram" aria-hidden="true"></i>
          </a>
          <a href="https://youtube.com/PrimePicks" target="_blank" class="social_link">
              <i class="fa fa-youtube" aria-hidden="true"></i>
          </a>
      </div>
  </div>
  <div class="info_container">
      <div class="container">
          <div class="row">
              <div class="col-md-6 col-lg-3">
                  <h6 class="footer_heading">ABOUT US</h6>
                  <p>At PrimePicks, we offer a diverse range of top-quality products to meet all your needs. Our mission is to provide exceptional value and outstanding customer service. Discover the best with PrimePicks!</p>
              </div>
              <div class="col-md-6 col-lg-3">
                  <h6 class="footer_heading">NEED HELP</h6>
                  <p>Our dedicated support team is here to assist you with any questions or concerns. From product inquiries to order issues, we're here to help. Reach out via phone, email, or live chat for quick assistance.</p>
              </div>
              <div class="col-md-6 col-lg-3">
                  <h6 class="footer_heading">CONTACT US</h6>
                  <div class="info_link-box">
                      <a href="https://goo.gl/maps/example" target="_blank" class="contact_link">
                          <i class="fa fa-map-marker" aria-hidden="true"></i>
                          <span>123 GB Road, London, UK</span>
                      </a>
                      <a href="tel:+0112345678901" class="contact_link">
                          <i class="fa fa-phone" aria-hidden="true"></i>
                          <span>+01 12345678901</span>
                      </a>
                      <a href="mailto:demo@gmail.com" class="contact_link">
                          <i class="fa fa-envelope" aria-hidden="true"></i>
                          <span>demo@gmail.com</span>
                      </a>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <h6 class="footer_heading">NEWSLETTER</h6>
                  <p>Subscribe to our newsletter to stay updated on our latest products, promotions, and special offers.</p>
                  <form action="" class="newsletter_form">
                      <input type="email" placeholder="Enter your email" required class="form-control">
                      <button type="submit" class="btn btn-primary mt-2">Subscribe</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
  <!-- footer section -->
  <footer class="footer_section">
      <div class="container">
          <p>&copy; <span id="displayYear"></span> All Rights Reserved By <a href="https://html.design/" target="_blank">Web Tech Knowledge</a></p>
      </div>
  </footer>
  <!-- footer section -->
</section>
<!-- end info section -->
<style>
  .info_section {
    background-color: #000000;
    padding: 60px 0;
    border-top: 1px solid #ddd;
}

.social_container {
    text-align: center;
    margin-bottom: 30px;
}

.social_box {
    display: flex;
    justify-content: center;
    gap: 15px;
}

.social_link {
    display: inline-block;
    margin: 0 10px;
    color: #ffffff;
    font-size: 24px;
    transition: color 0.3s;
}

.social_link:hover {
    color: #007bff;
}

.footer_heading {
    font-weight: bold;
    margin-bottom: 15px;
    color: #ffffff;
    font-size: 18px;
}

.info_container p {
    color: #ffffff;
    font-size: 14px;
    line-height: 1.6;
}

.info_link-box a {
    display: flex;
    align-items: center;
    color: #6c757d;
    margin-bottom: 10px;
    transition: color 0.3s;
}

.info_link-box a i {
    margin-right: 10px;
    font-size: 18px;
}

.info_link-box a:hover {
    color: #007bff;
}

.newsletter_form .form-control {
    border-radius: 0;
    border: 1px solid #ced4da;
}

.newsletter_form .btn {
    border-radius: 0;
    background-color: #007bff;
    border: none;
}

.newsletter_form .btn:hover {
    background-color: #0056b3;
}

.footer_section {
    background-color: #000000;
    color: #ffffff;
    padding: 20px 0;
    text-align: center;
}

.footer_section p {
    margin: 0;
    font-size: 14px;
}

.footer_section a {
    color: #ffffff;
    text-decoration: underline;
    transition: color 0.3s;
}

.footer_section a:hover {
    color: #007bff;
}

</style>
<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{asset('js/custom.js')}}"></script>
