<header class="app-header sticky" id="header"> <!-- Start::main-header-container -->
      <div class="main-header-container container-fluid"> <!-- Start::header-content-left -->
        <div class="header-content-left"> <!-- Start::header-element -->
          <div class="header-element">
            <div class="horizontal-logo"> 
              <a href="index.html" class="header-logo">
                <img src="{{ URL::to('public/assets/admin/image/logo.jpg') }}" alt="logo" class="logo">
               {{-- <img
                  src="../assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark"> <img
                  src="../assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark"> <img
                  src="../assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo"> <img
                  src="../assets/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white"> <img
                  src="../assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white"> --}}
                 </a>
                 </div>
          </div> <!-- End::header-element --> <!-- Start::header-element -->
          <div class="header-element mx-lg-0 mx-2"> <a aria-label="Hide Sidebar"
              class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle"
              data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a> </div> <!-- End::header-element -->
          <!-- Start::header-element -->
          <div class="header-element header-search d-md-block d-none my-auto auto-complete-search">
            
          </div> <!-- End::header-element -->
        </div> <!-- End::header-content-left --> <!-- Start::header-content-right -->
        <ul class="header-content-right"> <!-- Start::header-element -->
          <li class="header-element d-md-none d-block"> <a href="javascript:void(0);" class="header-link"
              data-bs-toggle="modal" data-bs-target="#header-responsive-search"> <!-- Start::header-link-icon --> <i
                class="bi bi-search header-link-icon"></i> <!-- End::header-link-icon --> </a> </li>
          <!-- End::header-element --> <!-- Start::header-element -->
          
          
              
              <!-- End::header-element --> <!-- Start::header-element -->
          <li class="header-element dropdown"> <!-- Start::header-link|dropdown-toggle --> <a href="javascript:void(0);"
              class="header-link dropdown-toggle" id="mainHeaderProfile" data-bs-toggle="dropdown"
              data-bs-auto-close="outside" aria-expanded="false">
              <div class="d-flex align-items-center">
                <div>  <img src="{{ URL::to('public/assets/admin/image/logo.jpg') }}" alt="logo" class="avatar avatar-sm"> </div>
              </div>
            </a> <!-- End::header-link|dropdown-toggle -->
            <ul
              class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end"
              aria-labelledby="mainHeaderProfile">
              <li>
                <div class="dropdown-item text-center border-bottom"> <span>{{Auth::user()->name}}</span> <span
                    class="d-block fs-12 text-muted">{{Auth::user()->email}}</span> </div>
              </li>
              <li><a class="dropdown-item d-flex align-items-center" href="profile.html"><i
                    class="fe fe-user p-1 rounded-circle bg-primary-transparent me-2 fs-16"></i>Profile</a></li>
             
              <li><a class="dropdown-item d-flex align-items-center" href="mail-settings.html"><i
                    class="fe fe-settings p-1 rounded-circle bg-primary-transparent ings me-2 fs-16"></i>Settings</a>
              </li>
             
              <li><a class="dropdown-item d-flex align-items-center" href="{{URL::To('admin/logout')}}"><i
                    class="fe fe-lock p-1 rounded-circle bg-primary-transparent ut me-2 fs-16"></i>Log Out</a></li>
            </ul>
          </li> <!-- End::header-element --> <!-- Start::header-element -->
          

        </ul> <!-- End::header-content-right -->
      </div> <!-- End::main-header-container -->
    </header> 