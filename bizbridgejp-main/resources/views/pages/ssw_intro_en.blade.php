@extends('layouts.default_en')
@section('content')
    <!-- ==========Page Header Section Starts Here========== -->
    <div class="pageheader">
        <div class="container">
            <div class="pageheader__content">
                <h2>Introduction of human resources with specific skills</h2>
                {{-- <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">ホーム</a></li>
                        <li class="breadcrumb-item active" aria-current="page">外国人の人材採用サポートス</li>
                    </ol>
                </nav> --}}
            </div>
        </div>
    </div>
    <!-- ==========Page Header Section Ends Here========== -->
    <div class="service service__single padding-tb">
        <div class="container">
            <div class="section__wrapper">
                <div class="row g-4 justify-content-center flex-row-reverse">
                    <div class="col-lg-8 col-12">
                        <div class="mainarea">
                            <div class="service__item">
                                <div class="service__inner">
                                    <div class="service__thumb">
                                        <img src="assets/images/service/single/01.jpg" alt="rajibraj" />
                                    </div>
                                    <div class="service__content">
                                        <p><strong>Recruitment: Request</strong> &rArr; <strong>&nbsp;Recruitment
                                                activities</strong> &rArr; <strong>Resume and pre-interview</strong>
                                            <strong>at our company <br> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &rArr; Customer
                                                interview
                                            </strong>
                                        </p>
                                        <p><strong>After job offer:</strong> <strong>Various</strong>
                                            <strong>support</strong> for joining the company <strong>&nbsp;&rArr;</strong>
                                            <strong>Aftercare after</strong> <strong>joining the company </strong>
                                        </p>
                                        <p><strong>We provide</strong> one-stop support for the recruitment
                                            <strong>of</strong> <strong>foreigners</strong> <strong>with</strong>
                                            <strong>specific skills, from recruitment preparation to acceptance. </strong>
                                        </p>
                                        <p><strong>We</strong> have <strong>many</strong> <strong>partners</strong> in
                                            <strong>Indonesia</strong>, <strong>which has the largest population</strong> in
                                            <strong>Southeast Asia, and</strong> <strong>by utilizing their
                                                network,</strong> We have the advantage of <strong>being able to recruit
                                                a</strong> <strong>wide range</strong> <strong>of candidates. </strong>
                                        </p>
                                        <p><strong>In addition, as aftercare after</strong> <strong>joining the
                                                company</strong> Japan our <strong>support</strong> <strong>team</strong>
                                            <strong>who</strong> <strong>is familiar with</strong> Indonesia will
                                            <strong>make</strong> <strong>your life</strong> <strong>in</strong>
                                            <strong>Japan</strong> <strong>We will support</strong> <strong>you from the
                                                perspective of both countries.</strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4 col-12">
                        <div class="sidebar">
                            <div class="row g-4">
                                <div class="col-lg-12 col-sm-6 col-12">
                                    <div class="sidebar__service">
                                        <div class="head">
                                            <h5>amazing All Service</h5>
                                        </div>
                                        <div class="body">
                                            <ul>
                                                <li>
                                                    <div class="thumb">
                                                        <a href="service-single.html"><img src="assets/images/service/icon/01.png" alt="rajibraj"></a>
                                                    </div>
                                                    <div class="content">
                                                        <span>Consulting</span>
                                                        <h5><a href="service-single.html">Business Consulting</a></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="thumb">
                                                        <a href="service-single.html"><img src="assets/images/service/icon/02.png" alt="rajibraj"></a>
                                                    </div>
                                                    <div class="content">
                                                        <span>Marketing</span>
                                                        <h5><a href="service-single.html">Marketing Research</a></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="thumb">
                                                        <a href="service-single.html"><img src="assets/images/service/icon/03.png" alt="rajibraj"></a>
                                                    </div>
                                                    <div class="content">
                                                        <span>Financial</span>
                                                        <h5><a href="service-single.html">Financial Planning</a></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="thumb">
                                                        <a href="service-single.html"><img src="assets/images/service/icon/04.png" alt="rajibraj"></a>
                                                    </div>
                                                    <div class="content">
                                                        <span>Insurance</span>
                                                        <h5><a href="service-single.html">Insurance Consulting</a></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="thumb">
                                                        <a href="service-single.html"><img src="assets/images/service/icon/05.png" alt="rajibraj"></a>
                                                    </div>
                                                    <div class="content">
                                                        <span>business</span>
                                                        <h5><a href="service-single.html">Retirement Planning</a></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="thumb">
                                                        <a href="service-single.html"><img src="assets/images/service/icon/06.png" alt="rajibraj"></a>
                                                    </div>
                                                    <div class="content">
                                                        <span>Analyzing</span>
                                                        <h5><a href="service-single.html">Portfolio Management</a></h5>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-6 col-12">
                                    <div class="sidebar__brochure">
                                        <div class="head">
                                            <h5>company Brochure</h5>
                                        </div>
                                        <div class="body">
                                            <div class="thumb">
                                                <img src="assets/images/service/single/03.jpg" alt="rajibraj">
                                            </div>
                                            <div class="content">
                                                <p>Holistic empowe ethica imperatve through client focuseds customer service disnctve incubate best of breed solutons</p>
                                                <a href="#" class="lab-btn" download>download Pdf</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-6 col-12">
                                    <div class="sidebar__helps">
                                        <div class="head">
                                            <h5>Need Help?</h5>
                                        </div>
                                        <div class="body">
                                            <div class="thumb">
                                                <img src="assets/images/service/single/04.jpg" alt="rajibraj">
                                            </div>
                                            <div class="content">
                                                <ul>
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="assets/images/service/icon/07.png" alt="rajibraj">
                                                        </div>
                                                        <div class="content">
                                                            <span>Monday - Friday</span>
                                                            <p>08:00 AM - 06: 00 PM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="assets/images/service/icon/08.png" alt="rajibraj">
                                                        </div>
                                                        <div class="content">
                                                            <span>Service Available</span>
                                                            <p>+012 234 567 892, 02 847 620</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="assets/images/service/icon/09.png" alt="rajibraj">
                                                        </div>
                                                        <div class="content">
                                                            <span>Donato Parkway</span>
                                                            <p>12 Tottina United State</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection