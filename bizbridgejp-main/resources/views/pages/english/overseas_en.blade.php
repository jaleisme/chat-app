@extends('layouts.default_en')
@section('content')
    <!-- ==========Page Header Section Starts Here========== -->
    <div class="pageheader">
        <div class="container">
            <div class="pageheader__content">
                <h2>4 Overseas business development support service</h2>
                <nav aria-label="breadcrumb">
                    {{-- <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">ホーム</a></li>
                        <li class="breadcrumb-item active" aria-current="page">海外事業展開支援サービス</li>
                    </ol> --}}
                </nav>
            </div>
        </div>
    </div>
    <!-- ==========Page Header Section Ends Here========== -->
    <div class="service service__two padding-tb">
        <div class="container">
            <div class="section__header text-center">
                <h6>Overseas business development support service</h6>
                {{-- <h2>弊社はインドネシアに特化してサービスを提供しています</h2> --}}
            </div>
            <div class="section__wrapper">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="service__item position-relative">
                            <div class="pp-fornt">
                                <div class="service__inner text-center">
                                    <div class="service__thumb">
                                        <a href="{{ url('/survey_service_en') }}">
                                            <img src="assets/images/service/icon/survey.png" alt="service" />
                                        </a>
                                    </div>
                                    <div class="service__content">
                                        {{-- <span>調査サービス</span> --}}
                                        <h4><a style="font-size: 1.3rem" href="{{ url('/survey_service_en') }}">Survey
                                                service</a></h4>
                                        {{-- <p>調査サービス</p> --}}
                                        <a href="{{ url('/survey_service_en') }}" class="read-more">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-back" style="background-image: url(assets/images/project/01.jpg);">
                                <a href="{{ url('/survey_service_en') }}" class="lab-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="service__item position-relative">
                            <div class="pp-fornt">
                                <div class="service__inner text-center">
                                    <div class="service__thumb">
                                        <a href="{{ url('/local_partner_en') }}">
                                            <img src="assets/images/service/icon/local.png" alt="service" />
                                        </a>
                                    </div>
                                    <div class="service__content">
                                        {{-- <span>現地パートナー紹介</span> --}}
                                        <h4><a style="font-size: 1.3rem" href="{{ url('/local_partner_en') }}">Introduction
                                                of
                                                local partners </a>
                                        </h4>
                                        {{-- <p>現地会社設立時の合弁先</p> --}}
                                        <a href="{{ url('/local_partner_en') }}" class="read-more">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-back" style="background-image: url(assets/images/project/02.jpg);">
                                <a href="{{ url('/local_partner_en') }}" class="lab-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="service__item position-relative">
                            <div class="pp-fornt">
                                <div class="service__inner text-center">
                                    <div class="service__thumb">
                                        <a href="{{ url('/local_sales_en') }}">
                                            <img src="assets/images/service/icon/sales.png" alt="service" />
                                        </a>
                                    </div>
                                    <div class="service__content">
                                        {{-- <span>Financial</span> --}}
                                        <h4><a style="font-size: 1.3rem" href="{{ url('/local_sales_en') }}">Local sales
                                                support </a>
                                        </h4>
                                        {{-- <p>拡販のB To C　⇒　越境ECサービス</p> --}}
                                        <a href="{{ url('/local_sales_en') }}" class="read-more">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-back" style="background-image: url(assets/images/project/03.jpg);">
                                <a href="{{ url('/local_sales_en') }}" class="lab-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="service__item position-relative">
                            <div class="pp-fornt">
                                <div class="service__inner text-center">
                                    <div class="service__thumb">
                                        <a href="{{ url('/busines_matching') }}">
                                            <img src="assets/images/service/icon/bm.png" alt="service" />
                                        </a>
                                    </div>
                                    <div class="service__content">
                                        {{-- <span>financial</span> --}}
                                        <h4><a style="font-size: 1.3rem" href="{{ url('/busines_matching') }}">Business
                                                matching platform service</a></h4>
                                        {{-- <p>B to Bプラットフォーム運営</p> --}}
                                        <a href="{{ url('/busines_matching') }}" class="read-more">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-back" style="background-image: url(assets/images/project/04.jpg);">
                                <a href="{{ url('/busines_matching') }}" class="lab-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4 col-sm-6 col-12">
                        <div class="service__item position-relative">
                            <div class="pp-fornt">
                                <div class="service__inner text-center">
                                    <div class="service__thumb">
                                        <a href="service-single.html">
                                            <img src="assets/images/service/icon/05.png" alt="service" />
                                        </a>
                                    </div>
                                    <div class="service__content">
                                        <span>business</span>
                                        <h4><a href="service-single.html">Retirement Planning</a></h4>
                                        <p>We are provide best service for high level success your business</p>
                                        <a href="service-single.html" class="read-more">詳細</a>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-back" style="background-image: url(assets/images/project/05.jpg);">
                                <a href="service-single.html" class="lab-btn">詳細</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="service__item position-relative">
                            <div class="pp-fornt">
                                <div class="service__inner text-center">
                                    <div class="service__thumb">
                                        <a href="service-single.html">
                                            <img src="assets/images/service/icon/06.png" alt="service" />
                                        </a>
                                    </div>
                                    <div class="service__content">
                                        <span>Analyzing</span>
                                        <h4><a href="service-single.html">Portfolio Management</a></h4>
                                        <p>We are provide best service for high level success your business</p>
                                        <a href="service-single.html" class="read-more">詳細</a>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-back" style="background-image: url(assets/images/project/06.jpg);">
                                <a href="service-single.html" class="lab-btn">詳細</a>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="text-center infotext">
                    {{-- <p>Get the Financial Outsourcing Service’s. <a href="appointment.html">Book an appointment!</a></p> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
