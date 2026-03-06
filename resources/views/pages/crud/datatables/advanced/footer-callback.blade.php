@extends('layouts.index')
@section('styles')
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            {{ trim($__env->yieldContent('title')) ?: getPageTitle() }}
        @endslot
        @slot('breadcrumb')
            @slot('li_1')
                Crud
            @endslot
            @slot('li_2')
                Datatables
            @endslot
            @slot('li_3')
                Advanced
            @endslot
        @endslot
    @endcomponent
@endsection
@section('content')
    <!--begin::Container-->
    <div class="container">
        <!--begin::Notice-->
        <div class="alert alert-custom alert-white alert-shadow gutter-b" role="alert">
            <div class="alert-icon">
                <span class="svg-icon svg-icon-primary svg-icon-xl">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path
                                d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z"
                                fill="#000000" opacity="0.3" />
                            <path
                                d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z"
                                fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </div>
            <div class="alert-text">Through the use of the header and footer callback manipulation functions provided by
                DataTables (headerCallback and footerCallback), it is possible to perform some powerful and useful data
                manipulation functions, such as summarising data in the table. See official documentation
                <a class="font-weight-bold" href="https://datatables.net/examples/advanced_init/footer_callback.html"
                    target="_blank">here</a>.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Card-->
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <span class="card-icon">
                        <i class="flaticon2-download text-primary"></i>
                    </span>
                    <h3 class="card-label">Footer Callback</h3>
                </div>
                <div class="card-toolbar">
                    <!--begin::Dropdown-->
                    <div class="dropdown dropdown-inline mr-2">
                        <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="la la-download"></i>Export</button>
                        <!--begin::Dropdown Menu-->
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                            <ul class="nav flex-column nav-hover">
                                <li class="nav-header font-weight-bolder text-uppercase text-primary pb-2">Choose an option:
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon la la-print"></i>
                                        <span class="nav-text">Print</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon la la-copy"></i>
                                        <span class="nav-text">Copy</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon la la-file-excel-o"></i>
                                        <span class="nav-text">Excel</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon la la-file-text-o"></i>
                                        <span class="nav-text">CSV</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon la la-file-pdf-o"></i>
                                        <span class="nav-text">PDF</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!--end::Dropdown Menu-->
                    </div>
                    <!--end::Dropdown-->
                    <!--begin::Button-->
                    <a href="#" class="btn btn-primary font-weight-bolder">
                        <i class="la la-plus"></i>New Record</a>
                    <!--end::Button-->
                </div>
            </div>
            <div class="card-body">
                <!--begin: Datatable-->
                <table class="table table-separate table-head-custom table-foot-custom table-checkable" id="kt_datatable">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Ship Country</th>
                            <th>Ship City</th>
                            <th>Ship Address</th>
                            <th>Company Agent</th>
                            <th>Company Name</th>
                            <th>Total Payment</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>64616-103</td>
                            <td>BR</td>
                            <td>São Félix do Xingu</td>
                            <td>698 Oriole Pass</td>
                            <td>Hayes Boule</td>
                            <td>Casper-Kerluke</td>
                            <td>$563997.38</td>
                        </tr>
                        <tr>
                            <td>54868-3377</td>
                            <td>VN</td>
                            <td>Bình Minh</td>
                            <td>8998 Delaware Court</td>
                            <td>Humbert Bresnen</td>
                            <td>Hodkiewicz and Sons</td>
                            <td>$582935.03</td>
                        </tr>
                        <tr>
                            <td>0998-0355</td>
                            <td>PH</td>
                            <td>Palagao Norte</td>
                            <td>91796 Sutteridge Road</td>
                            <td>Jareb Labro</td>
                            <td>Kuhlman Inc</td>
                            <td>$925080.02</td>
                        </tr>
                        <tr>
                            <td>55154-6876</td>
                            <td>CN</td>
                            <td>Jiannan</td>
                            <td>8 Muir Drive</td>
                            <td>Krishnah Tosspell</td>
                            <td>Prosacco-Kessler</td>
                            <td>$144042.68</td>
                        </tr>
                        <tr>
                            <td>49349-069</td>
                            <td>US</td>
                            <td>Shawnee Mission</td>
                            <td>782 Mallory Lane</td>
                            <td>Dale Kernan</td>
                            <td>Bernier and Sons</td>
                            <td>$504245.54</td>
                        </tr>
                        <tr>
                            <td>53499-0393</td>
                            <td>UA</td>
                            <td>Kozel’shchyna</td>
                            <td>02 Briar Crest Parkway</td>
                            <td>Halley Bentham</td>
                            <td>Schoen-Metz</td>
                            <td>$431379.80</td>
                        </tr>
                        <tr>
                            <td>43074-105</td>
                            <td>PH</td>
                            <td>De la Paz</td>
                            <td>643 Mayer Road</td>
                            <td>Burgess Penddreth</td>
                            <td>DuBuque, Stanton and Stanton</td>
                            <td>$254072.66</td>
                        </tr>
                        <tr>
                            <td>76328-333</td>
                            <td>PT</td>
                            <td>Sobreira</td>
                            <td>6715 Dakota Parkway</td>
                            <td>Cob Sedwick</td>
                            <td>Homenick-Nolan</td>
                            <td>$1070878.82</td>
                        </tr>
                        <tr>
                            <td>21130-054</td>
                            <td>FR</td>
                            <td>Roissy Charles-de-Gaulle</td>
                            <td>4942 Darwin Hill</td>
                            <td>Tabby Callaghan</td>
                            <td>Daugherty-Considine</td>
                            <td>$234343.18</td>
                        </tr>
                        <tr>
                            <td>68788-9890</td>
                            <td>DO</td>
                            <td>Cristóbal</td>
                            <td>854 Dapin Terrace</td>
                            <td>Broddy Jarry</td>
                            <td>Walter Group</td>
                            <td>$101388.34</td>
                        </tr>
                        <tr>
                            <td>68428-740</td>
                            <td>MA</td>
                            <td>Tidili Mesfioua</td>
                            <td>67 Talisman Drive</td>
                            <td>Marjorie McGougan</td>
                            <td>Littel and Sons</td>
                            <td>$1107527.60</td>
                        </tr>
                        <tr>
                            <td>43269-779</td>
                            <td>YE</td>
                            <td>Az Zāhir</td>
                            <td>5583 Walton Hill</td>
                            <td>Edsel Sprigging</td>
                            <td>Kulas, Huels and Strosin</td>
                            <td>$467654.78</td>
                        </tr>
                        <tr>
                            <td>0573-0174</td>
                            <td>AM</td>
                            <td>Doghs</td>
                            <td>7024 Eagan Court</td>
                            <td>Jess Gouldeby</td>
                            <td>Moen Group</td>
                            <td>$309518.30</td>
                        </tr>
                        <tr>
                            <td>67868-117</td>
                            <td>ID</td>
                            <td>Pakemitan</td>
                            <td>141 Spaight Avenue</td>
                            <td>Marys Matzl</td>
                            <td>Emard-Gerhold</td>
                            <td>$878639.99</td>
                        </tr>
                        <tr>
                            <td>0641-6114</td>
                            <td>KZ</td>
                            <td>Shu</td>
                            <td>601 Chinook Street</td>
                            <td>Gabrila Franscioni</td>
                            <td>Gusikowski LLC</td>
                            <td>$200145.16</td>
                        </tr>
                        <tr>
                            <td>63629-4970</td>
                            <td>TH</td>
                            <td>Chang Klang</td>
                            <td>7109 Ilene Place</td>
                            <td>Cozmo Booker</td>
                            <td>Dickinson-Klein</td>
                            <td>$425460.86</td>
                        </tr>
                        <tr>
                            <td>59528-4456</td>
                            <td>CA</td>
                            <td>Melfort</td>
                            <td>141 Aberg Pass</td>
                            <td>Arlie Larking</td>
                            <td>Rosenbaum Group</td>
                            <td>$1163008.07</td>
                        </tr>
                        <tr>
                            <td>0054-0080</td>
                            <td>IS</td>
                            <td>Sandgerði</td>
                            <td>4 Derek Alley</td>
                            <td>Yorker Scogings</td>
                            <td>Gorczany LLC</td>
                            <td>$656684.18</td>
                        </tr>
                        <tr>
                            <td>28475-810</td>
                            <td>ID</td>
                            <td>Keleng</td>
                            <td>49 Swallow Court</td>
                            <td>Dominick Muscott</td>
                            <td>Swaniawski-Sipes</td>
                            <td>$1194485.27</td>
                        </tr>
                        <tr>
                            <td>53645-1070</td>
                            <td>RU</td>
                            <td>Tugulym</td>
                            <td>611 Hintze Place</td>
                            <td>Laurette Kynforth</td>
                            <td>Torp-Satterfield</td>
                            <td>$486108.46</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Order ID</th>
                            <th>Ship Country</th>
                            <th>Ship City</th>
                            <th>Ship Address</th>
                            <th>Company Agent</th>
                            <th>Company Name</th>
                            <th>Total Payment</th>
                        </tr>
                    </tfoot>
                </table>
                <!--end: Datatable-->
            </div>
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
@endsection
@section('scripts')
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/pages/crud/datatables/advanced/footer-callback.js') }}"></script>
@endsection
