@extends('layouts.default_en')
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
                <h2>Translation Service / Translation</h2>
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
                                        <p><strong>◇ About difficulty</strong> level</p>
                                        <p><strong>【</strong><strong>Difficulty A</strong><strong>】</strong><strong>
                                                Research papers, catalogs, pamphlets, websites, company brochures, speech
                                                <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp; manuscripts</strong>,
                                            contracts,
                                            <strong>and other technically
                                                difficult
                                                documents or documents
                                                <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                with strong copywriting elements. </strong>
                                        </p>
                                        <p><strong>【</strong><strong>Difficulty B</strong><strong>】</strong><strong>
                                                Manuals,specifications, technical documents, instruction
                                                <br> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp; manuals, standards
                                                and standard documents, patent specifications, etc.</strong></p>
                                        <p><strong>【</strong><strong>Difficulty C</strong><strong>】</strong><strong>
                                                Documents that are ordered continuously and over a long period of time, such
                                                <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
                                                as manuals, specifications, and technical documents that are easy on content
                                                and <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
                                                have a lot of repetition, and</strong> documents that are easy
                                            <strong>on content and have few rules
                                                <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
                                                such as specifications. </strong>
                                        </p>
                                        <ul>
                                            <li><strong>About Translation Standards</strong></li>
                                        </ul>
                                        <p><strong>(1) When simply overwriting the translatable target part on the
                                                data</strong></p>
                                        <p><strong>&emsp;&nbsp;&rArr; You will only be charged for the translation
                                                fee.</strong></p>
                                        <p><strong>(2) When it is necessary to overwrite the source data and create data
                                                Layout adjustment <br>&emsp;&nbsp; (work such as expanding the text box and
                                                fitting the text
                                                inside) Convert symbols and fonts <br>&emsp;&nbsp; to specified ones
                                                Reupholstered the
                                                screen</strong></p>
                                        <p><strong>&emsp;&nbsp;&rArr; In this case, a separate data creation fee will be
                                                charged.
                                            </strong></p>
                                        <p><strong>(3) For text translation: Left-aligned sticky, figures and tables are
                                                numbered. </strong></p>
                                        <p><strong>&emsp;&nbsp;&rArr; You will only be charged for the translation
                                                fee.</strong></p>
                                        <p><strong>【</strong><strong>Translation Price List</strong> <strong>(Indonesian
                                                &hArr; Japanese)</strong><strong>】</strong></p>
                                        <table width="625">
                                            <tbody>
                                                <tr>
                                                    <td width="228">
                                                        <p>classification</p>
                                                    </td>
                                                    <td width="79">
                                                        <p>degree of difficulty</p>
                                                    </td>
                                                    <td colspan="2" width="318">
                                                        <p>Unit Price (Completed Page)</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3" width="228">
                                                        <p>Japanese &hArr; Indonesian</p>
                                                    </td>
                                                    <td width="79">
                                                        <p><strong>A</strong></p>
                                                    </td>
                                                    <td width="214">
                                                        <p><strong>5000 </strong><strong>yen</strong></p>
                                                    </td>
                                                    <td width="104">
                                                        <p>/page</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="79">
                                                        <p><strong>B</strong></p>
                                                    </td>
                                                    <td width="214">
                                                        <p><strong>JPY</strong> 4500</p>
                                                    </td>
                                                    <td width="104">
                                                        <p>/page</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="79">
                                                        <p><strong>C</strong></p>
                                                    </td>
                                                    <td width="214">
                                                        <p><strong>4000 </strong><strong>yen</strong></p>
                                                    </td>
                                                    <td width="104">
                                                        <p>/page</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3" width="228">
                                                        <p>Japanese&hArr; English</p>
                                                    </td>
                                                    <td width="79">
                                                        <p><strong>A</strong></p>
                                                    </td>
                                                    <td width="214">
                                                        <p><strong>JPY </strong><strong>6000</strong></p>
                                                    </td>
                                                    <td width="104">
                                                        <p>/page</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="79">
                                                        <p><strong>B</strong></p>
                                                    </td>
                                                    <td width="214">
                                                        <p><strong>5000 </strong><strong>yen</strong></p>
                                                    </td>
                                                    <td width="104">
                                                        <p>/page</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="79">
                                                        <p><strong>C</strong></p>
                                                    </td>
                                                    <td width="214">
                                                        <p><strong>JPY</strong> 4500</p>
                                                    </td>
                                                    <td width="104">
                                                        <p>/page</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" width="625">
                                                        <p>※&nbsp;&nbsp; The minimum charge is&nbsp; 4000 yen.</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p><strong>・</strong><strong>All prices do not include tax. </strong></p>
                                        <p><strong>&nbsp;</strong></p>
                                        <p><strong>【</strong><strong>Translation Price List (Sworn Translation) Indonesian
                                                &hArr; Japanese</strong><strong>】</strong></p>
                                        <table width="625">
                                            <tbody>
                                                <tr>
                                                    <td width="228">
                                                        <p>kind</p>
                                                    </td>
                                                    <td width="76">
                                                        <p>degree of difficulty</p>
                                                    </td>
                                                    <td colspan="2" width="321">
                                                        <p>Unit Price (Completed Page)</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3" width="228">
                                                        <p>&nbsp;</p>
                                                        <p>Japanese &hArr; Indonesian</p>
                                                    </td>
                                                    <td width="76">
                                                        <p><strong>A</strong></p>
                                                    </td>
                                                    <td width="217">
                                                        <p><strong>7500</strong> yen</p>
                                                    </td>
                                                    <td width="104">
                                                        <p>/page</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="76">
                                                        <p><strong>B</strong></p>
                                                    </td>
                                                    <td width="217">
                                                        <p><strong>JPY 6500</strong></p>
                                                    </td>
                                                    <td width="104">
                                                        <p>/page</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="76">
                                                        <p><strong>C</strong></p>
                                                    </td>
                                                    <td width="217">
                                                        <p><strong>JPY 5000</strong></p>
                                                    </td>
                                                    <td width="104">
                                                        <p>/page</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" width="625">
                                                        <p>*The minimum charge is 5000 yen.</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p><strong>・</strong><strong>All prices do not include tax. </strong></p>
                                        <p><strong>&nbsp;</strong></p>
                                        <p><strong>◇Service Flow</strong></p>
                                        <table width="636">
                                            <tbody>
                                                <tr>
                                                    <td width="37">
                                                        <p><strong>&nbsp;</strong></p>
                                                    </td>
                                                    <td width="312">
                                                        <p><strong>interpreter</strong></p>
                                                    </td>
                                                    <td width="287">
                                                        <p><strong>Translation</strong></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="37">
                                                        <p><strong>1</strong></p>
                                                    </td>
                                                    <td colspan="2" width="598">
                                                        <p><strong>Requirement confirmation</strong></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="37">
                                                        <p><strong>2</strong></p>
                                                    </td>
                                                    <td colspan="2" width="598">
                                                        <p><strong>Estimate</strong></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="37">
                                                        <p><strong>3</strong></p>
                                                    </td>
                                                    <td colspan="2" width="598">
                                                        <p><strong>Ordering (interpretation and translation
                                                                arrangements)</strong></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="37">
                                                        <p><strong>4</strong></p>
                                                    </td>
                                                    <td width="312">
                                                        <p><strong>Pre-meeting</strong></p>
                                                    </td>
                                                    <td width="287">
                                                        <p><strong>Translation</strong></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="37">
                                                        <p><strong>5</strong></p>
                                                    </td>
                                                    <td width="312">
                                                        <p><strong>Interpretation</strong></p>
                                                    </td>
                                                    <td width="287">
                                                        <p><strong>Review &amp; Proofreading</strong></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="37">
                                                        <p><strong>6</strong></p>
                                                    </td>
                                                    <td width="312">
                                                        <p><strong>Termination confirmation</strong></p>
                                                    </td>
                                                    <td width="287">
                                                        <p><strong>Last modified</strong></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="37">
                                                        <p><strong>7</strong></p>
                                                    </td>
                                                    <td width="312">
                                                        <p><strong>　　　　　　　　　　　</strong></p>
                                                    </td>
                                                    <td width="287">
                                                        <p><strong>delivery of goods</strong></p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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
