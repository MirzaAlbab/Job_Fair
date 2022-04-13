<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-heading">Landing Page</li>
      
        <li class="nav-item">
          <a class="nav-link @yield('rundown', 'collapsed')" href="{{ route('rundown') }}">
            <i class="bi bi-layout-text-window-reverse"></i>
            <span>Rundown</span>
          </a>
        </li><!-- End Rundown Page Nav -->
      
        <li class="nav-item">
          <a class="nav-link @yield('faq', 'collapsed')" href="{{ route('faq') }}">
            <i class="bi bi-layout-text-window-reverse"></i>
            <span>FAQ</span>
          </a>
        </li><!-- End FAQ Page Nav -->
      


      <li class="nav-heading">Pages</li>

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav --> --}}
      
        <li class="nav-item">
          <a class="nav-link @yield('career-fair', 'collapsed')" href="{{ route('career') }}">
            <i class="bi bi-layout-text-window-reverse"></i>
            <span>Career Fair</span>
          </a>
        </li><!-- End Career Fair Page Nav -->
      
      {{-- <li class="nav-item">
        <a class="nav-link @yield('logo', 'collapsed')" href="{{ route('logo') }}">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>Logo</span>
        </a>
      </li><!-- End Logo Page Nav -->
      
      <li class="nav-item">
        <a class="nav-link @yield('article', 'collapsed')" href="{{ route('article') }}">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>Article</span>
        </a>
      </li><!-- End Article Page Nav --> --}}
      
        <li class="nav-item">
          <a class="nav-link @yield('partner', 'collapsed')" href="{{ route('partner') }}">
            <i class="bi bi-layout-text-window-reverse"></i>
            <span>Partner</span>
          </a>
        </li><!-- End Partner Page Nav -->
        
        <li class="nav-item">
          <a class="nav-link @yield('event', 'collapsed')" href="{{ route('event') }}">
            <i class="bi bi-layout-text-window-reverse"></i>
            <span>Event</span>
          </a>
        </li><!-- End Event Page Nav -->

        <li class="nav-item">
          <a class="nav-link @yield('gallery', 'collapsed')" href="{{ route('gallery') }}">
            <i class="bi bi-layout-text-window-reverse"></i>
            <span>Gallery</span>
          </a>
        </li><!-- End Gallery Page Nav -->

      <li class="nav-heading">Admin</li>
      
        <li class="nav-item">
          <a class="nav-link @yield('rundown', 'collapsed')" href="{{ route('rundown') }}">
            <i class="bi bi-layout-text-window-reverse"></i>
            <span>User</span>
          </a>
        </li><!-- End User Page Nav -->
      
    </ul>

  </aside>