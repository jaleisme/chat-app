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
                <h2>翻訳サービス・Translation</h2>
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
                                        <p><strong>◇ 難易度について</strong></p>
                                        <p><strong>【難易度Ａ】　研究論文、カタログ、パンフレット、ホームページ、会社案内、ス<br>
                                                &emsp; &emsp; &emsp; &emsp; &emsp;&nbsp;&nbsp;
                                                ピーチ原稿、契約書、その他、技術的に難解な文書やコピーライテ <br>
                                                &emsp; &emsp; &emsp; &emsp; &emsp;&nbsp;&nbsp;
                                                ィング的要素の強い文書。</strong>
                                        </p>
                                        <p><strong>【難易度Ｂ】　マニュアル、仕様書、技術資料、取扱説明書、基準・規格文書、特 <br>
                                                &emsp; &emsp; &emsp; &emsp; &emsp;&nbsp;&nbsp;
                                                許明細書等</strong></p>
                                        <p><strong>【難易度Ｃ】　内容的にやさしく繰り返しの多いマニュアル、仕様書、技術資料等 <br>
                                                &emsp; &emsp; &emsp; &emsp; &emsp;&nbsp;&nbsp;
                                                内容的にやさしく継続的かつ長期的に発注される文書、内容的にや <br>
                                                &emsp; &emsp; &emsp; &emsp; &emsp;&nbsp;&nbsp;
                                                さしく仕様等のきまりごとの少ない文書。</strong>
                                        </p>
                                        <ul>
                                            <li><strong>翻訳の標準仕様について</strong></li>
                                        </ul>
                                        <p><strong>①データ上の翻訳対象箇所へ単純上書きするだけの場合</strong></p>
                                        <p><strong>&rArr;　翻訳料だけのご請求となります。</strong></p>
                                        <p style="margin-botom: 0px !important"><strong>②ソースデータ上へ上書きし、かつデータ作成も必要な場合<br>
                                            </strong><strong>&nbsp;</strong><strong>&nbsp;&nbsp;レイアウト調整（テキストボックスを広げ、テキストを中に収める等の作業）
                                                <br>&nbsp;&nbsp; 記号やフォントを指定のものへ変換</strong> <br>&nbsp;&nbsp;&nbsp;画面を張替え</p>
                                        {{-- <p style="margin-top: 0px !important"></p> --}}
                                        <p><strong>&rArr;　この場合、別途データ作成料をご請求させて頂きます。</strong></p>
                                        <p><strong>③テキスト翻訳の場合：　左詰めベタ打ち、図表は番号対応処理となります。</strong></p>
                                        <p><strong>&rArr;　翻訳料だけのご請求となります。</strong></p>
                                        <p><strong>【翻訳料金表</strong><strong>(</strong><strong>インドネシア語 &hArr;
                                                日本語</strong><strong>)</strong><strong>】</strong></p>
                                        <table width="625">
                                            <tbody>
                                                <tr>
                                                    <td width="228">
                                                        <p>種別</p>
                                                    </td>
                                                    <td width="79">
                                                        <p>難易度</p>
                                                    </td>
                                                    <td colspan="2" width="318">
                                                        <p>単価（完成ページ）</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3" width="228">
                                                        <p>日本語 &hArr; インドネシア語</p>
                                                    </td>
                                                    <td width="79">
                                                        <p><strong>A</strong></p>
                                                    </td>
                                                    <td width="214">
                                                        <p><strong>5000</strong><strong>円</strong></p>
                                                    </td>
                                                    <td width="104">
                                                        <p>／ページ</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="79">
                                                        <p><strong>B</strong></p>
                                                    </td>
                                                    <td width="214">
                                                        <p><strong>4500</strong><strong>円</strong></p>
                                                    </td>
                                                    <td width="104">
                                                        <p>／ページ</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="79">
                                                        <p><strong>C</strong></p>
                                                    </td>
                                                    <td width="214">
                                                        <p><strong>4000</strong><strong>円</strong></p>
                                                    </td>
                                                    <td width="104">
                                                        <p>／ページ</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3" width="228">
                                                        <p>日本語&hArr;英語</p>
                                                    </td>
                                                    <td width="79">
                                                        <p><strong>A</strong></p>
                                                    </td>
                                                    <td width="214">
                                                        <p><strong>6000</strong><strong>円</strong></p>
                                                    </td>
                                                    <td width="104">
                                                        <p>／ページ</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="79">
                                                        <p><strong>B</strong></p>
                                                    </td>
                                                    <td width="214">
                                                        <p><strong>5000</strong><strong>円</strong></p>
                                                    </td>
                                                    <td width="104">
                                                        <p>／ページ</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="79">
                                                        <p><strong>C</strong></p>
                                                    </td>
                                                    <td width="214">
                                                        <p><strong>4500</strong><strong>円</strong></p>
                                                    </td>
                                                    <td width="104">
                                                        <p>／ページ</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" width="625">
                                                        <p>※&nbsp;&nbsp; ミニマムチャージは、 4000円とさせて頂きます</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p><strong>・料金はすべて、税抜の金額です。</strong></p>
                                        <p><strong>&nbsp;</strong></p>
                                        <p><strong>【翻訳料金表</strong><strong> (</strong><strong>宣誓翻訳</strong><strong>)</strong>
                                            <strong>インドネシア語 &hArr; 日本語】</strong>
                                        </p>
                                        <table width="625">
                                            <tbody>
                                                <tr>
                                                    <td width="228">
                                                        <p>種類</p>
                                                    </td>
                                                    <td width="76">
                                                        <p>難易度</p>
                                                    </td>
                                                    <td colspan="2" width="321">
                                                        <p>単価（完成ページ）</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3" width="228">
                                                        <p>&nbsp;</p>
                                                        <p>日本語 &hArr; インドネシア語</p>
                                                    </td>
                                                    <td width="76">
                                                        <p><strong>A</strong></p>
                                                    </td>
                                                    <td width="217">
                                                        <p><strong>7</strong><strong>500</strong>円</p>
                                                    </td>
                                                    <td width="104">
                                                        <p>／ページ</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="76">
                                                        <p><strong>B</strong></p>
                                                    </td>
                                                    <td width="217">
                                                        <p><strong>65</strong><strong>00</strong>円</p>
                                                    </td>
                                                    <td width="104">
                                                        <p>／ページ</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="76">
                                                        <p><strong>C</strong></p>
                                                    </td>
                                                    <td width="217">
                                                        <p><strong>5</strong><strong>000</strong>円</p>
                                                    </td>
                                                    <td width="104">
                                                        <p>／ページ</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" width="625">
                                                        <p>*ミニマムチャージは、 5000円とさせていただきます</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p><strong>・料金はすべて、税抜の金額です。</strong></p>
                                        <p><strong>&nbsp;</strong></p>
                                        <p><strong>◇サービスフロー</strong></p>
                                        <table width="636">
                                            <tbody>
                                                <tr>
                                                    <td style="width: 39.15px;">
                                                        <p><strong>&nbsp;</strong></p>
                                                    </td>
                                                    <td style="width: 296.11px; text-align: center;">
                                                        <p><strong>通訳</strong></p>
                                                    </td>
                                                    <td style="width: 279.06px; text-align: center;">
                                                        <p><strong>翻訳</strong></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 39.15px;">
                                                        <p><strong>１</strong></p>
                                                    </td>
                                                    <td style="width: 581.09px; text-align: center;" colspan="2">
                                                        <p><strong>要件確認</strong></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 39.15px;">
                                                        <p><strong>２</strong></p>
                                                    </td>
                                                    <td style="width: 581.09px; text-align: center;" colspan="2">
                                                        <p><strong>御見積もり</strong></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 39.15px;">
                                                        <p><strong>３</strong></p>
                                                    </td>
                                                    <td style="width: 581.09px; text-align: center;" colspan="2">
                                                        <p><strong>発注（通訳・翻訳手配</strong></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 39.15px;">
                                                        <p><strong>４</strong></p>
                                                    </td>
                                                    <td style="width: 296.11px; text-align: center;">
                                                        <p><strong>事前打ち合わせ</strong></p>
                                                    </td>
                                                    <td style="width: 279.06px; text-align: center;">
                                                        <p><strong>翻訳</strong></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 39.15px;">
                                                        <p><strong>５</strong></p>
                                                    </td>
                                                    <td style="width: 296.11px; text-align: center;">
                                                        <p><strong>通訳対応</strong></p>
                                                    </td>
                                                    <td style="width: 279.06px; text-align: center;">
                                                        <p><strong>レビュー・校正</strong></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 39.15px;">
                                                        <p><strong>６</strong></p>
                                                    </td>
                                                    <td style="width: 296.11px; text-align: center;" rowspan="2">
                                                        <p><strong>終了確認</strong></p>
                                                    </td>
                                                    <td style="width: 279.06px; text-align: center;">
                                                        <p><strong>最終修正</strong></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 39.15px;">
                                                        <p><strong>７</strong></p>
                                                    </td>
                                                    <td style="width: 279.06px; text-align: center;">
                                                        <p><strong>納品</strong></p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p><strong>&nbsp;</strong></p>
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
