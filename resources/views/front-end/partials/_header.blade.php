<!-- Header
============================================= -->
<header id="header" class="transparent-header full-header" data-sticky-class="not-dark">

  <div id="header-wrap">

    <div class="container clearfix">

      <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

      <!-- Logo
      ============================================= -->
      <div id="logo">
        <a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/siteImages/logo.png" alt="Canvas Logo"></a>
        <a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/siteImages/logo.png" alt="Canvas Logo"></a>
      </div><!-- #logo end -->

      <!-- Primary Navigation
      ============================================= -->
      <nav id="primary-menu" class="dark">

        <ul>
          <li class="current"><a href="{{route('home-page')}}"><div>Home</div></a></li>

          <li><a href="#"><div>Speech Tech</div></a>
            <ul>
              <li><a href="{{route('textToSpeechPage')}}"><div>Text to speech</div></a></li>
              <li><a href="{{route('speechRecognation')}}"><div>Speech recognation</div></a></li>
              <li><a href="{{route('hafss')}}"><div>Hafss</div></a></li>
            </ul>
          </li>

          <li><a href="#"><div>OCR Tech</div></a>
            <ul>
              <li><a href="{{route('typeWritten')}}"><div>Type written</div></a></li>
              <li><a href="{{route('handWritten')}}"><div>Hand written</div></a></li>
            </ul>
          </li>

          <li><a href="#"><div>NLP Tech</div></a>
            <ul>
              <li><a href="{{route('sentimentAnalysis')}}"><div>Sentitment Analysis</div></a></li>
              <li><a href="{{route('arabicTextDiacritizer')}}"><div>Arabic Text Diacitizer</div></a></li>
              <li><a href="{{route('nlpToolKit')}}"><div>NLP Toolkit</div></a></li>
            </ul>
          </li>

          <li><a href="#"><div>E-Learning</div></a>
            <ul>
              <li><a href="{{route('e_learning.e-learning')}}"><div>E-Learning</div></a></li>
              <li><a href="{{route('e_learning.special_needs')}}"><div>E-Learning(Special Needs)</div></a></li>
              <li><a href="{{route('e_learning.e_training')}}"><div>E-Training</div></a></li>
              <li><a href="{{route('e_learning.languages_learning')}}"><div>Language Learning</div></a></li>
              <li><a href="{{route('e_learning.mobile_applications')}}"><div>Mobile Applications</div></a></li>
              <li><a href="{{route('e_learning.e_publishing')}}"><div>E-publishing</div></a></li>
              <li><a href="{{route('e_learning.animation')}}"><div>2D & 3D Animation</div></a></li>
            </ul>
          </li>

          <li><a href="{{route('industries')}}"><div>Industries</div></a></li>

          <li><a href="#"><div>About</div></a>
            <ul>
              <li><a href="{{route('about_us')}}"><div>About Us</div></a></li>
              <li><a href="{{route('projects')}}"><div>Projects</div></a></li>
              <li><a href="{{route('scientific_publishers')}}"><div>Scientific Publishers</div></a></li>
              <li><a href="{{route('awards')}}"><div>Awards</div></a></li>
              <li><a href="{{route('structure')}}"><div>Structure</div></a></li>
              {{--<li><a href="widgets.html"><div>Customers</div></a></li>--}}
              <li><a href="{{route('news')}}"><div>News</div></a></li>
              <li><a href="widgets.html"><div>Jobs</div></a></li>
              <li><a href="widgets.html"><div>Contact Us</div></a></li>
            </ul>
          </li>

        </ul>



      </nav><!-- #primary-menu end -->

    </div>

  </div>

</header><!-- #header end -->
