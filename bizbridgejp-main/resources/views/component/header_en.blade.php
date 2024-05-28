 <!-- ==========Header Section Starts Here========== -->
 <header class="header header__one header__two header__four">
     {{-- <div class="header__top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-12">
                    <div class="info">
                        <ul>
                            <li>
                                <img src="assets/images/header/icon/01.png" alt="icon" />
                                <span>240 Parkway United States</span>
                            </li>
                            <li>
                                <img src="assets/images/header/icon/02.png" alt="icon" />
                                <span>Mon-Fri : 09:30 Am - 06:24 Pm</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-12">
                    <div class="social text-xl-end">
                        <ul>
                            <li><a href="#">facebook</a></li>
                            <li><a href="#">linkdin</a></li>
                            <li><a href="#">youtube</a></li>
                            <li><a href="#">twitter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
     {{-- <div class="header__top header__top--center">
        <div class="container">
            <div class="header__toparea">
                <div class="logo">
                    <a href="index.html"><img src="assets/images/header/logo/logo2.png" alt="logo" /></a>
                </div>
                <div class="info">
                    <ul>
                        <li>
                            <div class="thumb">
                                <img src="assets/images/header/icon/06.png" alt="icon" />
                            </div>
                            <div class="text">
                                <span>Call us</span>
                                <p>+88012 234 567 892</p>
                            </div>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="assets/images/header/icon/07.png" alt="icon" />
                            </div>
                            <div class="text">
                                <span>Email address</span>
                                <p>yourinfo@gmail.com</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}
     <div class="header__bottom" style="max-width: 2035px !important">

         {{-- <div class="container"> --}}
         <div class="area">
             <div class="logo" style="padding: left">
                 <a href="{{ url('/home_en') }}"><img src="assets/images/header/logo/logo4.png" alt="logo" /></a>
             </div>
             <div class="main-menu">
                 <div class="menu">

                     <ul>
                         <li>
                             <a href="{{ url('/home_en') }}" class="active" style="color:black">Home</a>
                             {{-- <ul>
                                    <li><a href="index.html" class="active" >Home One</a></li>
                                    <li><a href="{{ url('/home2') }}">Home Two</a></li>
                                    <li><a href="index-3.html">Home Three</a></li>
                                    <li><a href="index-4.html">Home Four</a></li>
                                    <li><a href="index-5.html">Home Five</a></li>
                                </ul> --}}
                         </li>
                         <li>
                             <a href="{{ url('/our_profile_en') }}" style="color:black">Our Profile</a>
                             {{-- <ul>
                                    <li><a href="blog.html">Blog Grid View</a></li>
                                    <li><a href="blog-2.html">Blog Grid View Two</a></li>
                                    <li><a href="blog-3.html">Blog Classic View</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul> --}}
                         </li>
                         <li>
                             <a href="{{ url('overseas_en') }}" style="color:black">Business Development</a>
                             <ul>
                                 {{-- <li>
                                     <a href="#0">About</a>
                                     <ul>
                                         <li><a href="about.html">About One</a></li>
                                         <li><a href="about-2.html">About Two</a></li>
                                     </ul>
                                 </li>
                                 <li>
                                     <a href="#0" style="color:black">adviser</a>
                                     <ul>
                                         <li><a href="adviser.html">adviser</a></li>
                                         <li><a href="adviser-single.html">adviser single</a></li>
                                     </ul>
                                 </li> --}}
                                 <li><a href="{{ url('/survey_service_en') }}">Survey Service</a></li>
                                 <li><a href="{{ url('/local_partner_en') }}">Introduction of local partners </a></li>
                                 <li><a href="{{ url('/local_sales_en') }}">Local sales support service </a></li>
                                 <li><a href="{{ url('/busines_matching_en') }}">Business Matching Platform </a></li>
                             </ul>
                         </li>
                         <li>
                             <a href="{{ url('ssw_en') }}" style="color:black"> Foreign Workers</a>
                             <ul>
                                 <li><a href="{{ url('ssw_excellent_en') }}">Excellent foreign human resources </a></li>
                                 <li><a href="{{ url('ssw_intro_en') }}">human resources with specific skills</a></li>
                             </ul>
                         </li>
                         <li>
                             <a href="{{ url('translate_en') }}"style="color:black">Interpretation/translation
                                 service</a>
                             <ul>
                                 <li><a href="{{ url('/translate_interpretation_en') }}">Interpretation and
                                         Interpretation
                                     </a></li>
                                 <li><a href="{{ url('/translate_service_en') }}">Translation Service / Translation</a>
                                 </li>
                             </ul>
                         </li>
                         <li>
                             <a href="{{ url('it_dev_en') }}" style="color:black">IT system development</a>
                             {{-- <ul>
                                    <li><a href="blog.html">Blog Grid View</a></li>
                                    <li><a href="blog-2.html">Blog Grid View Two</a></li>
                                    <li><a href="blog-3.html">Blog Classic View</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul> --}}
                         </li>
                         <li><a href="https://bizbridge.id" target="_blank" rel="noopener noreferrer"
                                 style="color:black">bizbridge platform</a></li>
                         <li><a href="{{ url('/') }}" style="color:black"><img style="padding: 5px,width: 50px;"
                                     src="assets/images/header/japan-flag-icon.png" alt=""></a>
                         </li>
                     </ul>
                 </div>

                 <div class="header__bararea">
                     <div class="header__bar d-xl-none">
                         <span></span>
                         <span></span>
                         <span></span>
                     </div>
                     <div class="header__ellepsis d-xl-none">
                         <i class="fa-solid fa-circle-info"></i>
                     </div>
                 </div>
             </div>
             {{-- <div class="search-area">
                    <form action="/">
                        <input type="text" placeholder="Search Here">
                        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div> --}}
         </div>
         {{-- </div> --}}
     </div>
 </header>
 <!-- ==========Header Section Ends Here========== -->
