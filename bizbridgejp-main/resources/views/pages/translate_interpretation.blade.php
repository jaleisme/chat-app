@extends('layouts.default')
@section('content')
    <style>
        table,
        th,
        td {
            border: 1px solid;
        }

        td {
            text-align: center;
        }
    </style>
    <!-- ==========Page Header Section Starts Here========== -->
    <div class="pageheader">
        <div class="container">
            <div class="pageheader__content">
                <h2> 通訳サービス・Interpretation</h2>
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
                                        <center>
                                            <p><strong>日常的な会話、ビジネス会話の通訳から専門用語の多い会議や研修などにも対応
                                                    していますので、業種・業態を問わず幅広くサポートすることが可能です。</strong></p>
                                        </center>
                                        <p><strong>対応業務</strong><strong>：日常生活、会議通訳、リモート通訳（</strong><strong>WEB</strong><strong>会議など）、社内外トレーニ<br>
                                                &emsp; &emsp; &emsp;&emsp;
                                                ング通訳、セミナー（ウェビナー）通訳等</strong>
                                        </p>
                                        <p><strong>対応言語</strong><strong>：インドネシア語・日本語・英語。</strong></p>
                                        <p><strong>その他言語についてはお問い合わせください。</strong></p>
                                        <p><strong>【オンサイト通訳サービス料金（日本語 &hArr; インドネシア語）】</strong></p>
                                        <table border="1" width="103%">
                                            <tbody>
                                                <tr>
                                                    <td rowspan="2" width="33%">
                                                        <p>種別</p>
                                                    </td>
                                                    <td colspan="3" width="66%">
                                                        <p>料金</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="20%">
                                                        <p>１日（8時間）</p>
                                                    </td>
                                                    <td width="20%">
                                                        <p>半日（4時間）</p>
                                                    </td>
                                                    <td width="25%">
                                                        <p>追加料金（1時間）</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="33%">
                                                        <p>一般通訳</p>
                                                        <p>（日常生活の会話通訳）</p>
                                                    </td>
                                                    <td width="20%">
                                                        <p><strong>30,000</strong>円</p>
                                                    </td>
                                                    <td width="20%">
                                                        <p><strong>18,000</strong>円</p>
                                                    </td>
                                                    <td width="25%">
                                                        <p><strong>5,000</strong>円</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="33%">
                                                        <p>ビジネス通訳</p>
                                                        <p>（会議・商談等）</p>
                                                    </td>
                                                    <td width="20%">
                                                        <p><strong>40,000</strong>円</p>
                                                    </td>
                                                    <td width="20%">
                                                        <p><strong>26,000</strong>円</p>
                                                    </td>
                                                    <td width="25%">
                                                        <p><strong>6,500</strong>円</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="33%">
                                                        <p>専門通訳</p>
                                                        <p>（社内トレーニング・セミナー等）</p>
                                                    </td>
                                                    <td width="20%">
                                                        <p><strong>80,000</strong>円</p>
                                                    </td>
                                                    <td width="20%">
                                                        <p><strong>48,000</strong>円</p>
                                                    </td>
                                                    <td width="25%">
                                                        <p><strong>10,000</strong>円</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p><strong>&nbsp;</strong></p>
                                        <p><strong>・通訳の内容によっては多少、値段が変わります。</strong></p>
                                        <p><strong>・</strong><strong>1</strong><strong>週間以上の通訳には、期間、及び通訳者のレベルに応じて、通常料金より割引致
                                                <br>
                                                &nbsp;&nbsp;
                                                します。</strong></p>
                                        <p><strong>・交通費は別途いただきます。</strong></p>
                                        <p><strong>・料金はすべて、税抜の金額です。</strong></p>
                                        <p><strong>・通訳者の手配を考慮し、通常は実施日の</strong><strong>1</strong><strong>ヶ月前を目途に発注をお願いします。
                                        </p>
                                        <p>&nbsp;（但し、</strong><strong>7</strong><strong>営業日前までは受付可能です）</strong></p>
                                        <p><strong>・インドネシアでの通訳は現地通訳を手配致します。</strong></p>
                                        <p><strong>・業務は最低４時間から承ります。</strong></p>
                                        <p><strong>【オンライン通訳サービス料金（日本語 &hArr; インドネシア語）】</strong></p>
                                        <table border="1" width="103%">
                                            <tbody>
                                                <tr>
                                                    <td rowspan="2" width="32%">
                                                        <p>種別</p>
                                                    </td>
                                                    <td colspan="3" width="67%">
                                                        <p>料金</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="17%">
                                                        <p>１時間</p>
                                                        <p>（２時間まで）</p>
                                                    </td>
                                                    <td width="25%">
                                                        <p>半日</p>
                                                        <p>（２時間超～4時間）</p>
                                                    </td>
                                                    <td width="25%">
                                                        <p>１日</p>
                                                        <p>（４時間超～８時間）</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="32%">
                                                        <p>一般通訳</p>
                                                        <p>（日常生活の会話通訳）</p>
                                                    </td>
                                                    <td width="17%">
                                                        <p><strong>5,000</strong>円</p>
                                                    </td>
                                                    <td width="25%">
                                                        <p><strong>15,000</strong>円</p>
                                                    </td>
                                                    <td width="25%">
                                                        <p><strong>28,000</strong>円</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="32%">
                                                        <p>ビジネス通訳</p>
                                                        <p>（会議・商談等）</p>
                                                    </td>
                                                    <td width="17%">
                                                        <p><strong>7,500</strong>円</p>
                                                    </td>
                                                    <td width="25%">
                                                        <p><strong>22,000</strong>円</p>
                                                    </td>
                                                    <td width="25%">
                                                        <p><strong>36,000</strong>円</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="32%">
                                                        <p>専門通訳</p>
                                                        <p style="font-size: 80%!important">（社内トレーニング・セミナー等）</p>
                                                    </td>
                                                    <td width="17%">
                                                        <p><strong>10,000</strong>円</p>
                                                    </td>
                                                    <td width="25%">
                                                        <p><strong>35,000</strong>円</p>
                                                    </td>
                                                    <td width="25%">
                                                        <p><strong>60,000</strong>円</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p><strong>&nbsp;</strong></p>
                                        <p><strong>・通訳の内容によっては多少、値段が変わります。</strong></p>
                                        <p><strong>・料金はすべて、税抜の金額です。</strong></p>
                                        <p><strong>・通訳者の手配を考慮し、通常は実施日の</strong><strong>1</strong><strong>ヶ月前を目途に発注をお願いします。</strong>
                                        </p>
                                        <p>&nbsp;（但し、</strong><strong>7</strong><strong>営業日前までは受付可能です）</p>
                                        <p><strong>・対応アプリ</strong><strong>:</strong><strong>Zoom, Microsoft Teams,
                                                Google
                                                Meet, Skype</strong> <strong>他</strong></p>
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
