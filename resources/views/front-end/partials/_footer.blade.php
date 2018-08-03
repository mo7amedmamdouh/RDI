<!-- Footer
============================================= -->
<footer id="footer" class="dark" style="background-image:url({{asset('images/siteImages/footer-bg.png')}})">

  <div class="container">

    <!-- Footer Widgets
    ============================================= -->
    <div class="footer-widgets-wrap clearfix">


      <div class="col-sm-12 col-md-3">
        <div class="footer-widget">
          <h3 class="footer-title" >RDi</h3>
          <div class="contact-widget">
            <a href="/"> Home </a>
            <a href="{{route('about_us')}}"> About Us </a>
            <a href="{{route('contact_us')}}"> Contact Us </a>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-md-3">
        <div class="footer-widget">
          <h3 class="footer-title">Link</h3>
          <div class="contact-widget">
            <a href="{{route('textToSpeechPage')}}"> TTS </a>
            <a href="{{route('speechRecognation')}}"> ASR </a>
            <a href="{{route('hafss')}}"> Hafss </a>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-3">
        <div class="footer-widget">
          
          <div class="contact-widget">
            <a href="{{route('typeWritten')}}"> OCR </a>
            <a href="{{route('sentimentAnalysis')}}"> Sentiment Analysis </a>
            <a href="{{route('industries')}}"> Industries </a>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-3">
        <div class="footer-widget">
          <h3 class="footer-title"> Follow Us </h3>
          <div class="clearfix">
            <div class="social-icons">
              <ul>
                <li class="facebook"><a href="" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li class="twitter"><a href="" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li class="google-plus"><a href="" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                <li class="linkedin"><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                <li class="youtube"><a href="" target="_blank"><i class="fa fa-youtube"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div><!-- .footer-widgets-wrap end -->

  </div>


</footer><!-- #footer end -->
