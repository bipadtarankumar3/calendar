<aside class="app-sidebar sticky" id="sidebar"> <!-- Start::main-sidebar-header -->
    <div class="main-sidebar-header">
       <a href="index.html" class="header-logo"> 
          <img src="{{ URL::to('public/assets/admin/image/logo.jpg') }}" alt="logo" class="logo">
          {{-- <img src="{{ URL::to('public/assets/admin/image/logo.jpg') }}" alt="logo" class="toggle-dark"> --}}
          {{-- <img src="{{ URL::to('public/assets/admin/image/logo.jpg') }}" alt="logo" class="desktop-dark"> --}}
          {{-- <img src="{{ URL::to('public/assets/admin/image/logo.jpg') }}" alt="logo" class="toggle-logo">  --}}
          {{-- <img src="{{ URL::to('public/assets/admin/image/logo.jpg') }}" alt="logo" class="toggle-white">  --}}
          {{-- <img src="{{ URL::to('public/assets/admin/image/logo.jpg') }}" alt="logo" class="desktop-white"> --}}
        </a>
    </div>
    <!-- End::main-sidebar-header --> <!-- Start::main-sidebar -->
    <div class="main-sidebar simplebar-scrollable-y" id="sidebar-scroll" data-simplebar="init">
        <div class="simplebar-wrapper" style="margin: -8px 0px -80px;">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                    <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content"
                        style="height: 100%; overflow: hidden scroll;">
                        <div class="simplebar-content" style="padding: 8px 0px 80px;"> <!-- Start::nav -->
                            <nav class="main-menu-container nav nav-pills flex-column sub-open open active">
                                <div class="slide-left active d-none" id="slide-left"> <svg
                                        xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z">
                                        </path>
                                    </svg> </div>
                                <ul class="main-menu" style="display: block; margin-left: 0px; margin-right: 0px;">
                                    <!-- Start::slide__category -->
                                    {{-- <li class="slide__category"><span class="category-name">Main</span></li> --}}
                                    <!-- End::slide__category --> <!-- Start::slide -->
                                    <li class="slide has-sub active open"> <a href="javascript:void(0);"
                                            class="side-menu__item active"> <i
                                                class="ri-arrow-down-s-line side-menu__angle"></i> <svg
                                                xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 side-menu__icon"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25">
                                                </path>
                                            </svg> <span class="side-menu__label">Dashboards</span> </a>
                                        <ul class="slide-menu child1 active"
                                            style="position: relative; left: 0px; top: 0px; margin: 0px; box-sizing: border-box; transform: translate3d(239.2px, 729.6px, 0px); display: block;"
                                            data-popper-placement="bottom" data-popper-reference-hidden=""
                                            data-popper-escaped="">
                                            <li class="slide side-menu__label1"> <a
                                                    href="javascript:void(0)">Dashboards</a> </li>
                                            {{-- <li class="slide active"> <a href="index.html"
                                                    class="side-menu__item active">Sales</a> </li> --}}
                                        </ul>
                                    </li>


                                    <li class="slide has-sub  open"> <a href="javascript:void(0);"
                                            class="side-menu__item "> <i
                                                class="ri-arrow-down-s-line side-menu__angle"></i> <svg
                                                xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 side-menu__icon"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25">
                                                </path>
                                            </svg> <span class="side-menu__label">Client</span> </a>
                                        <ul class="slide-menu child1 "
                                            style="position: relative; left: 0px; top: 0px; margin: 0px; box-sizing: border-box; transform: translate3d(239.2px, 729.6px, 0px); display: block;"
                                            data-popper-placement="bottom" data-popper-reference-hidden=""
                                            data-popper-escaped="">
                                            <li class="slide side-menu__label1"> <a href="javascript:void(0)">Client</a>
                                            </li>
                                            <li class="slide "> <a href="{{ URL::TO('admin/client/list') }}"
                                                    class="side-menu__item ">Client List</a> </li>
                                        </ul>
                                    </li>

                                    <li class="slide has-sub  open"> <a href="javascript:void(0);"
                                            class="side-menu__item "> <i
                                                class="ri-arrow-down-s-line side-menu__angle"></i> <i
                                                class="ti ti-users fs-5 w-6 h-6 side-menu__icon"></i> <span
                                                class="side-menu__label">Team</span> </a>
                                        <ul class="slide-menu child1 "
                                            style="position: relative; left: 0px; top: 0px; margin: 0px; box-sizing: border-box; transform: translate3d(239.2px, 729.6px, 0px); display: block;"
                                            data-popper-placement="bottom" data-popper-reference-hidden=""
                                            data-popper-escaped="">
                                            <li class="slide side-menu__label1"> <a href="javascript:void(0)">Team</a>
                                            </li>
                                            <li class="slide "> <a href="{{ URL::To('admin/team/list') }}"
                                                    class="side-menu__item ">Team
                                                    List</a> </li>
                                        </ul>
                                    </li>

                                    <li class="slide has-sub  open"> <a href="javascript:void(0);"
                                            class="side-menu__item "> <i
                                                class="ri-arrow-down-s-line side-menu__angle"></i>
                                            <i class="ti ti-users fs-5 w-6 h-6 side-menu__icon"></i> <span
                                                class="side-menu__label">User</span> </a>
                                        <ul class="slide-menu child1 "
                                            style="position: relative; left: 0px; top: 0px; margin: 0px; box-sizing: border-box; transform: translate3d(239.2px, 729.6px, 0px); display: block;"
                                            data-popper-placement="bottom" data-popper-reference-hidden=""
                                            data-popper-escaped="">
                                            <li class="slide side-menu__label1"> <a href="javascript:void(0)">User</a>
                                            </li>
                                            <li class="slide "> <a href="{{ URL::To('admin/user/list') }}"
                                                    class="side-menu__item ">User
                                                    List</a> </li>
                                        </ul>
                                    </li>
                                    <li class="slide has-sub  open"> <a href="javascript:void(0);"
                                            class="side-menu__item "> <i
                                                class="ri-arrow-down-s-line side-menu__angle"></i> <svg
                                                xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 side-menu__icon"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25">
                                                </path>
                                            </svg> <span class="side-menu__label">calander</span> </a>
                                        <ul class="slide-menu child1 "
                                            style="position: relative; left: 0px; top: 0px; margin: 0px; box-sizing: border-box; transform: translate3d(239.2px, 729.6px, 0px); display: block;"
                                            data-popper-placement="bottom" data-popper-reference-hidden=""
                                            data-popper-escaped="">
                                            <li class="slide side-menu__label1"> <a
                                                    href="javascript:void(0)">calander</a> </li>
                                            <li class="slide "> <a href="{{ URL::TO('admin/calander/list') }}"
                                                    class="side-menu__item ">calander List</a> </li>
                                        </ul>
                                    </li>

                                </ul>
                                <div class="slide-right d-none" id="slide-right"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
                                        height="24" viewBox="0 0 24 24">
                                        <path
                                            d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z">
                                        </path>
                                    </svg></div>
                            </nav> <!-- End::nav -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="simplebar-placeholder" style="width: 239px; height: 1713px;"></div>
        </div>
        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
        </div>
        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
            <div class="simplebar-scrollbar"
                style="height: 311px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
        </div>
    </div> <!-- End::main-sidebar -->
</aside>
