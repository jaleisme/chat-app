@extends('layouts.default')
@section('content')
    <!-- ==========Page Header Section Starts Here========== -->
    <div class="pageheader">
        <div class="container">
            <div class="pageheader__content">
                <h2>2 外国人の人材採用サポート</h2>
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
    <div class="service service__two padding-tb">
        <div class="container">
            <div class="section__header text-center">
                <h6>外国人の人材採用サポートス</h6>
                {{-- <h2>弊社の外国人の人材採用サポートは、採用後も引き続きサポート致します。</h2> --}}
                {{-- <p></p>
                <p><strong>弊社の外国人の人材採用サポートは、採用後も引き続きサポート致します。</strong></p>
                <p><strong>〈人材採用サポートのフロー〉</strong></p>
                <p><strong>採用：ご依頼　&rArr;　募集活動　&rArr;　弊社での履歴書・事前面接　&rArr;　お客様の面接</strong></p>
                <p><strong>内定後：入社の種々のサポート　&rArr;　入社後のアフターケアー</strong></p> --}}
            </div>
            <div class="section__wrapper">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="service__item position-relative">
                            <div class="pp-fornt">
                                <div class="service__inner text-center">
                                    <div class="service__thumb">
                                        <a href="service-single.html">
                                            <img src="assets/images/service/icon/talent.png" alt="service" />
                                        </a>
                                    </div>
                                    <div class="service__content">
                                        {{-- <span>調査サービス</span> --}}
                                        <h4><a style="font-size: 1.3rem" href="{{ url('ssw_excellent') }}">優秀な外国人材</a></h4>
                                        {{-- <p>優秀な外国人材 の紹介</p> --}}
                                        <a href="ssw_excellent" class="read-more">詳細</a>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-back" style="background-image: url(assets/images/project/01.jpg);">
                                <a href="{{ url('ssw_excellent') }}" class="lab-btn">詳細</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="service__item position-relative">
                            <div class="pp-fornt">
                                <div class="service__inner text-center">
                                    <div class="service__thumb">
                                        <a href="{{ url('ssw_intro') }}">
                                            <img src="assets/images/service/icon/ssw.png" alt="service" />
                                        </a>
                                    </div>
                                    <div class="service__content">
                                        {{-- <span>現地パートナー紹介</span> --}}
                                        <h4><a style="font-size: 1.3rem" href="{{ url('ssw_intro') }}">特定技能人材の紹介</a></h4>
                                        {{-- <p>弊社は、特定技能を有する外国人の採用サポートを採用準備から受入れまで、ワンストップでサポート致します</p> --}}
                                        <a href="{{ url('ssw_intro') }}" class="read-more">詳細</a>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-back" style="background-image: url(assets/images/project/02.jpg);">
                                <a href="{{ url('ssw_intro') }}" class="lab-btn">詳細</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center infotext">
                    {{-- <p>Get the Financial Outsourcing Service’s. <a href="appointment.html">Book an appointment!</a></p> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
