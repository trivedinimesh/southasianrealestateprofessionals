
<div class="page__full-wrapper">
                <div class="expovent__sidebar  "
                    style="background-image:url(_next/static/media/dropdown-bg.7aece7fb.png)">
                    <div class="logo-details"><span><a href="{{ route('home') }}"><img class="logo__white"
                                    src="{{ URL::asset('build/media/logo.png') }}"
                                    alt="logo not found" /></a></span><span><a href="{{ route('home') }}"><img class="log__smnall"
                                    src="{{ URL::asset('build/media/logo.png') }}" alt="logo not found" /></a></span></div>
                    <div class="sidebar__inner simple-bar">
                        <div class="dlabnav">
                            @php
                                $user = Auth::user();
                                $userRoles = $user->getRoleNames();
                            @endphp
                            @foreach ($userRoles as $userRole) 
                                @if ($userRole === "admin") 
                                    <ul class="metismenu" id="menu">
                                        <li><a href="{{route('dashboard')}}"><i class="flaticon-home"></i><span
                                                    class="nav-text">Dashboard</span></a></li>
                                        <!-- <li><a href="#"><i class="flaticon-user-1"></i><span
                                                    class="nav-text">Event Attendees List</span></a></li> -->
                                        <li class=""><a href="{{route('events.list')}}" id="react-collapsed-toggle-:R56al6:"
                                                aria-controls="react-collapsed-panel-:R56al6:" aria-expanded="false"
                                                type="button" role="button" tabindex="0"><i class="flaticon-reminder"></i><span
                                                    class="nav-text">Manage Events</span></a>
                                        </li>
                                        <li class=""><a href="{{route('gallery.list')}}" id="react-collapsed-toggle-:R56al6:"
                                                aria-controls="react-collapsed-panel-:R56al6:" aria-expanded="false"
                                                type="button" role="button" tabindex="0"><i class="flaticon-reminder"></i><span
                                                    class="nav-text">Manage Gallery</span></a>
                                        </li>
                                        <li class=""><a href="{{route('subscription.list')}}" id="react-collapsed-toggle-:R56al6:"
                                                aria-controls="react-collapsed-panel-:R56al6:" aria-expanded="false"
                                                type="button" role="button" tabindex="0"><i class="flaticon-reminder"></i><span
                                                    class="nav-text">Manage Members List</span></a>
                                        </li>
                                        <li class=""><a href="{{route('users.index')}}" id="react-collapsed-toggle-:R56al6:"
                                                aria-controls="react-collapsed-panel-:R56al6:" aria-expanded="false"
                                                type="button" role="button" tabindex="0"><i class="flaticon-reminder"></i><span
                                                    class="nav-text">Manage Users</span></a>
                                        </li>
                                        <li class=""><a href="{{route('blogs.list')}}" id="react-collapsed-toggle-:R56al6:"
                                                aria-controls="react-collapsed-panel-:R56al6:" aria-expanded="false"
                                                type="button" role="button" tabindex="0"><i class="flaticon-reminder"></i><span
                                                    class="nav-text">Manage Blogs</span></a>
                                        </li>
                                        <li class=""><a href="{{route('board-of-director.index')}}" id="react-collapsed-toggle-:R56al6:"
                                                aria-controls="react-collapsed-panel-:R56al6:" aria-expanded="false"
                                                type="button" role="button" tabindex="0"><i class="flaticon-reminder"></i><span
                                                    class="nav-text">Manage BOD</span></a>
                                        </li>
                                        <li class=""><a href="{{route('sponsor.index')}}" id="react-collapsed-toggle-:R56al6:"
                                                aria-controls="react-collapsed-panel-:R56al6:" aria-expanded="false"
                                                type="button" role="button" tabindex="0"><i class="flaticon-reminder"></i><span
                                                    class="nav-text">Manage Sponsors</span></a>
                                        </li>
                                        <li class=""><a href="{{route('profile')}}" id="react-collapsed-toggle-:R86al6:"
                                                aria-controls="react-collapsed-panel-:R86al6:" aria-expanded="false"
                                                type="button" role="button" tabindex="0"><i class="flaticon-user-1"></i><span
                                                    class="nav-text">Profile</span></a>
                                        </li>
                                    </ul>
                                    @break
                                @else
                                    <ul class="metismenu" id="menu">
                                        <li><a href="{{route('dashboard')}}"><i class="flaticon-home"></i><span
                                                    class="nav-text">Dashboard</span></a></li>
                                        <li class=""><a href="{{route('subscription.details')}}" id="react-collapsed-toggle-:R56al6:"
                                                aria-controls="react-collapsed-panel-:R56al6:" aria-expanded="false"
                                                type="button" role="button" tabindex="0"><i class="flaticon-reminder"></i><span
                                                    class="nav-text">Membership Details</span></a>
                                        </li>
                                        <li class=""><a href="{{route('events.view-booking')}}" id="react-collapsed-toggle-:R56al6:"
                                                aria-controls="react-collapsed-panel-:R56al6:" aria-expanded="false"
                                                type="button" role="button" tabindex="0"><i class="flaticon-reminder"></i><span
                                                    class="nav-text">View Booking</span></a>
                                        </li>
                                        <li class=""><a href="#" id="react-collapsed-toggle-:R86al6:"
                                                aria-controls="react-collapsed-panel-:R86al6:" aria-expanded="false"
                                                type="button" role="button" tabindex="0"><i class="flaticon-user-1"></i><span
                                                    class="nav-text">Profile</span></a>
                                        </li>
                                    </ul>
                                    @break
                                @endif
                            @endforeach
                            <!-- <ul class="metismenu" id="menu">
                                <li><a href="{{route('dashboard')}}"><i class="flaticon-home"></i><span
                                            class="nav-text">Dashboard</span></a></li>
                                <li><a href="#"><i class="flaticon-user-1"></i><span
                                            class="nav-text">Attendant List</span></a></li>
                                <li class=""><a href="{{route('events.list')}}" id="react-collapsed-toggle-:R56al6:"
                                        aria-controls="react-collapsed-panel-:R56al6:" aria-expanded="false"
                                        type="button" role="button" tabindex="0"><i class="flaticon-reminder"></i><span
                                            class="nav-text">Manage Events</span></a>
                                </li>
                                <li class=""><a href="#" id="react-collapsed-toggle-:R56al6:"
                                        aria-controls="react-collapsed-panel-:R56al6:" aria-expanded="false"
                                        type="button" role="button" tabindex="0"><i class="flaticon-reminder"></i><span
                                            class="nav-text">Manage Members</span></a>
                                </li>
                                <li class=""><a href="{{route('users.index')}}" id="react-collapsed-toggle-:R56al6:"
                                        aria-controls="react-collapsed-panel-:R56al6:" aria-expanded="false"
                                        type="button" role="button" tabindex="0"><i class="flaticon-reminder"></i><span
                                            class="nav-text">Manage Users</span></a>
                                </li>
                                <li class=""><a href="{{route('blogs.list')}}" id="react-collapsed-toggle-:R56al6:"
                                        aria-controls="react-collapsed-panel-:R56al6:" aria-expanded="false"
                                        type="button" role="button" tabindex="0"><i class="flaticon-reminder"></i><span
                                            class="nav-text">Manage Blogs</span></a>
                                </li>
                                <li class=""><a href="{{route('board-of-director.index')}}" id="react-collapsed-toggle-:R56al6:"
                                        aria-controls="react-collapsed-panel-:R56al6:" aria-expanded="false"
                                        type="button" role="button" tabindex="0"><i class="flaticon-reminder"></i><span
                                            class="nav-text">Manage BOD</span></a>
                                </li>
                                <li class=""><a href="{{route('sponsor.index')}}" id="react-collapsed-toggle-:R56al6:"
                                        aria-controls="react-collapsed-panel-:R56al6:" aria-expanded="false"
                                        type="button" role="button" tabindex="0"><i class="flaticon-reminder"></i><span
                                            class="nav-text">Manage Sponsors</span></a>
                                </li>
                                <li class=""><a href="#" id="react-collapsed-toggle-:R86al6:"
                                        aria-controls="react-collapsed-panel-:R86al6:" aria-expanded="false"
                                        type="button" role="button" tabindex="0"><i class="flaticon-user-1"></i><span
                                            class="nav-text">Profile</span></a>
                                </li>
                            </ul> -->
                            
                            <div class="sidebar__profile mt-25"><a href="{{ route('logout') }}"><i class="flaticon-log-out-3"></i><span
                                        class="links_name">Log out</span></a></div>
                            
                        </div>
                    </div>
                </div>
                <div class="app__offcanvas-overlay  "></div>
                <div class="page__body-wrapper">
                    <div class="app__header__area">
                        <div class="app__header-inner">
                            <div class="app__header-left">
                                <button id="sidebar__active">
                                    <div class="bar-icon-2"><span></span><span></span><span></span></div>
                                </button>
                               
                            </div>
                            <div class="app__header-right">
                                <div class="nav-item p-relative"><button id="userportfolio">
                                        <div class="user__portfolio">
                                            <div class="user__content"><span>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</span></div>
                                        </div>
                                    </button>
                                    <div class="user__dropdown  ">
                                        <ul>
                                            <li><a href="profile"><svg width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_643_344)">
                                                            <path
                                                                d="M13.6569 10.3431C12.7855 9.47181 11.7484 8.82678 10.6168 8.43631C11.8288 7.60159 12.625 6.20463 12.625 4.625C12.625 2.07478 10.5502 0 8 0C5.44978 0 3.375 2.07478 3.375 4.625C3.375 6.20463 4.17122 7.60159 5.38319 8.43631C4.25162 8.82678 3.2145 9.47181 2.34316 10.3431C0.832156 11.8542 0 13.8631 0 16H1.25C1.25 12.278 4.27803 9.25 8 9.25C11.722 9.25 14.75 12.278 14.75 16H16C16 13.8631 15.1678 11.8542 13.6569 10.3431ZM8 8C6.13903 8 4.625 6.486 4.625 4.625C4.625 2.764 6.13903 1.25 8 1.25C9.86097 1.25 11.375 2.764 11.375 4.625C11.375 6.486 9.86097 8 8 8Z"
                                                                fill="#7A7A7A"></path>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_643_344">
                                                                <rect width="16" height="16" fill="white"></rect>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>Profile</a></li>
                                            <li><a href="chat"><svg width="18" height="17" viewBox="0 0 18 17"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M4.2 16.8C4.1118 16.8 4.023 16.7802 3.9396 16.7406C3.7326 16.6404 3.6 16.431 3.6 16.2V13.2H1.8C0.8076 13.2 0 12.3924 0 11.4V1.8C0 0.8076 0.8076 0 1.8 0H16.2C17.1924 0 18 0.8076 18 1.8V11.4C18 12.3924 17.1924 13.2 16.2 13.2H8.9106L4.575 16.6686C4.4664 16.7556 4.3338 16.8 4.2 16.8ZM1.8 1.2C1.4688 1.2 1.2 1.4694 1.2 1.8V11.4C1.2 11.7306 1.4688 12 1.8 12H4.2C4.5318 12 4.8 12.2682 4.8 12.6V14.952L8.325 12.1314C8.4318 12.0462 8.5632 12 8.7 12H16.2C16.5312 12 16.8 11.7306 16.8 11.4V1.8C16.8 1.4694 16.5312 1.2 16.2 1.2H1.8Z"
                                                            fill="#7A7A7A"></path>
                                                        <path
                                                            d="M13.8001 6.00005H4.2001C3.8683 6.00005 3.6001 5.73125 3.6001 5.40005C3.6001 5.06885 3.8683 4.80005 4.2001 4.80005H13.8001C14.1319 4.80005 14.4001 5.06885 14.4001 5.40005C14.4001 5.73125 14.1319 6.00005 13.8001 6.00005Z"
                                                            fill="#7A7A7A"></path>
                                                        <path
                                                            d="M9.0001 8.39995H4.2001C3.8683 8.39995 3.6001 8.13115 3.6001 7.79995C3.6001 7.46875 3.8683 7.19995 4.2001 7.19995H9.0001C9.3319 7.19995 9.6001 7.46875 9.6001 7.79995C9.6001 8.13115 9.3319 8.39995 9.0001 8.39995Z"
                                                            fill="#7A7A7A"></path>
                                                    </svg>chat</a></li>
                                            <li><a href="chat"><svg width="18" height="13" viewBox="0 0 18 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M16.418 0H1.58203C0.711492 0 0 0.708363 0 1.58203V11.0742C0 11.9482 0.711949 12.6562 1.58203 12.6562H16.418C17.2885 12.6562 18 11.9479 18 11.0742V1.58203C18 0.708152 17.2882 0 16.418 0ZM16.175 1.05469C15.6636 1.56786 9.65549 7.59551 9.40866 7.84315C9.2025 8.04994 8.79761 8.05008 8.59134 7.84315L1.82496 1.05469H16.175ZM1.05469 10.8803V1.77592L5.59213 6.32812L1.05469 10.8803ZM1.82496 11.6016L6.3367 7.07512L7.84438 8.58772C8.46221 9.20756 9.53803 9.20732 10.1557 8.58772L11.6633 7.07516L16.175 11.6016H1.82496ZM16.9453 10.8803L12.4079 6.32812L16.9453 1.77592V10.8803Z"
                                                            fill="#7A7A7A"></path>
                                                    </svg>inbox</a></li>
                                            <li><a href="login"><svg width="18" height="18" viewBox="0 0 18 18"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.9224 9.03197C12.5765 8.86754 12.2235 8.7259 11.8644 8.60724C13.0275 7.73424 13.7812 6.34413 13.7812 4.78125C13.7812 2.14488 11.6364 0 8.99999 0C6.36359 0 4.21874 2.14488 4.21874 4.78125C4.21874 6.34585 4.97418 7.73734 6.13943 8.61016C5.07181 8.96165 4.07003 9.50858 3.19323 10.2298C1.58546 11.5522 0.4676 13.3969 0.0456193 15.4239C-0.0866386 16.059 0.0718107 16.7114 0.480256 17.2136C0.886698 17.7134 1.48938 18 2.13373 18H10.793C11.1813 18 11.4961 17.6852 11.4961 17.2969C11.4961 16.9086 11.1813 16.5938 10.793 16.5938H2.13373C1.83356 16.5938 1.65247 16.4262 1.57126 16.3264C1.43102 16.1539 1.37674 15.9295 1.42234 15.7105C2.15201 12.2056 5.24351 9.64527 8.8136 9.55892C8.87544 9.56131 8.93756 9.56251 8.99999 9.56251C9.06303 9.56251 9.12578 9.56128 9.18822 9.55885C10.2823 9.58452 11.3345 9.8342 12.3187 10.3021C12.6694 10.4687 13.0888 10.3196 13.2556 9.96885C13.4223 9.61813 13.2731 9.19868 12.9224 9.03197ZM9.17149 8.15193C9.11443 8.15091 9.05726 8.15039 8.99999 8.15039C8.94325 8.15039 8.88651 8.15095 8.82984 8.152C7.04759 8.06309 5.62499 6.58519 5.62499 4.78125C5.62499 2.92026 7.139 1.40625 8.99999 1.40625C10.861 1.40625 12.375 2.92026 12.375 4.78125C12.375 6.58474 10.9531 8.06236 9.17149 8.15193Z"
                                                            fill="#7A7A7A"></path>
                                                        <path
                                                            d="M17.2969 13.957H15.3633V12.0234C15.3633 11.6351 15.0485 11.3203 14.6602 11.3203C14.2718 11.3203 13.957 11.6351 13.957 12.0234V13.957H12.0234C11.6351 13.957 11.3203 14.2718 11.3203 14.6602C11.3203 15.0485 11.6351 15.3633 12.0234 15.3633H13.957V17.2969C13.957 17.6852 14.2718 18 14.6602 18C15.0485 18 15.3633 17.6852 15.3633 17.2969V15.3633H17.2969C17.6852 15.3633 18 15.0485 18 14.6602C18 14.2718 17.6852 13.957 17.2969 13.957Z"
                                                            fill="#7A7A7A"></path>
                                                    </svg>add acount</a></li>
                                            <li><a href="login"><svg width="18" height="18" viewBox="0 0 18 18"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_643_343)">
                                                            <path
                                                                d="M17.4368 8.43771H10.312C10.0015 8.43771 9.74951 8.18572 9.74951 7.87523C9.74951 7.56474 10.0015 7.31274 10.312 7.31274H17.4368C17.7473 7.31274 17.9993 7.56474 17.9993 7.87523C17.9993 8.18572 17.7473 8.43771 17.4368 8.43771Z"
                                                                fill="#7A7A7A"></path>
                                                            <path
                                                                d="M14.6244 11.2502C14.4803 11.2502 14.3364 11.1954 14.2268 11.0852C14.0071 10.8654 14.0071 10.5091 14.2268 10.2894L16.6418 7.87457L14.2268 5.45958C14.0071 5.23986 14.0071 4.88364 14.2268 4.66392C14.4467 4.44406 14.8029 4.44406 15.0226 4.66392L17.835 7.47633C18.0547 7.69605 18.0547 8.05227 17.835 8.27199L15.0226 11.0844C14.9123 11.1954 14.7684 11.2502 14.6244 11.2502Z"
                                                                fill="#7A7A7A"></path>
                                                            <path
                                                                d="M5.99986 18.0002C5.83932 18.0002 5.68703 17.9776 5.53488 17.9304L1.02142 16.4267C0.407305 16.2122 0 15.64 0 15.0003V1.50073C0 0.673487 0.672754 0.000732422 1.5 0.000732422C1.66039 0.000732422 1.81269 0.0232537 1.96498 0.0704934L6.4783 1.5742C7.09255 1.7887 7.49972 2.36093 7.49972 3.00059V16.5002C7.49972 17.3274 6.8271 18.0002 5.99986 18.0002ZM1.5 1.1257C1.29374 1.1257 1.12496 1.29447 1.12496 1.50073V15.0003C1.12496 15.16 1.23222 15.3085 1.3852 15.3617L5.8775 16.8587C5.90977 16.8692 5.95179 16.8752 5.99986 16.8752C6.20612 16.8752 6.37475 16.7064 6.37475 16.5002V3.00059C6.37475 2.84088 6.2675 2.69244 6.11452 2.63915L1.62222 1.14218C1.58995 1.13174 1.54793 1.1257 1.5 1.1257Z"
                                                                fill="#7A7A7A"></path>
                                                            <path
                                                                d="M11.4371 6.00035C11.1266 6.00035 10.8746 5.74836 10.8746 5.43786V2.06297C10.8746 1.54622 10.454 1.12545 9.93722 1.12545H1.49998C1.18949 1.12545 0.9375 0.873462 0.9375 0.562971C0.9375 0.252479 1.18949 0.000488281 1.49998 0.000488281H9.93722C11.075 0.000488281 11.9996 0.925234 11.9996 2.06297V5.43786C11.9996 5.74836 11.7476 6.00035 11.4371 6.00035Z"
                                                                fill="#7A7A7A"></path>
                                                            <path
                                                                d="M9.93699 15.7501H6.93699C6.6265 15.7501 6.37451 15.4981 6.37451 15.1876C6.37451 14.8771 6.6265 14.6251 6.93699 14.6251H9.93699C10.4537 14.6251 10.8744 14.2044 10.8744 13.6876V10.3127C10.8744 10.0022 11.1264 9.75024 11.4369 9.75024C11.7473 9.75024 11.9993 10.0022 11.9993 10.3127V13.6876C11.9993 14.8254 11.0747 15.7501 9.93699 15.7501Z"
                                                                fill="#7A7A7A"></path>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_643_343">
                                                                <rect width="18" height="18" fill="white"></rect>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>Log in</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="body__overlay"></div>