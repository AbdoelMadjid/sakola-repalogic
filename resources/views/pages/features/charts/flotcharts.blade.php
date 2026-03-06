@extends('layouts.index')
@section('styles')
    <link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            {{ trim($__env->yieldContent('title')) ?: getPageTitle() }}
        @endslot
        @slot('breadcrumb')
            @slot('li_1')
                Features
            @endslot
            @slot('li_2')
                Charts
            @endslot
        @endslot
    @endcomponent
@endsection
@section('content')
    <!--begin::Container-->
    <div class="container">
        <!--begin::Notice-->
        <div class="alert alert-custom alert-white alert-shadow fade show gutter-b" role="alert">
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
            <div class="alert-text">Flot is a pure JavaScript plotting library for jQuery, with a focus on simple usage,
                attractive looks and interactive features. For more info please visit
                <a class="font-weight-bold" href="https://www.flotcharts.org/" target="_blank">Flotchart's Home</a>or
                <a class="font-weight-bold" href="https://github.com/flot/flot" target="_blank">Flotchart's Github Repo</a>.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Row-->
        <div class="row">
            <div class="col-lg-12">
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Basic Chart</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="kt_flotcharts_1" style="height: 300px;"></div>
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Axis Labels</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="kt_flotcharts_2" style="height: 300px;"></div>
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Tracking Curves</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="kt_flotcharts_3" style="height: 300px;"></div>
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Dynamic Chart</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="kt_flotcharts_4" style="height: 300px;"></div>
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Stack Chart Controls</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="kt_flotcharts_5" style="height:350px;"></div>
                        <div class="btn-toolbar my-10">
                            <div class="btn-group stackControls">
                                <input type="button" class="btn btn-success" value="With stacking" />
                                <input type="button" class="btn btn-danger" value="Without stacking" />
                            </div>&#160;&#160;&#160;
                            <div class="btn-group graphControls">
                                <input type="button" class="btn btn-primary" value="Bars" />
                                <input type="button" class="btn btn-primary" value="Lines" />
                                <input type="button" class="btn btn-warning" value="Lines with steps" />
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Interactive Chart</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="kt_flotcharts_6" style="height: 300px;"></div>
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Bar Chart</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="kt_flotcharts_7" style="height: 300px;"></div>
                    </div>
                </div>
                <!--end::Card-->
            </div>
        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row">
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Pie Chart 1</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="kt_flotcharts_8" style="height: 300px;"></div>
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Pie Chart 3</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="kt_flotcharts_9" style="height: 300px;"></div>
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Pie Chart 2</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="kt_flotcharts_10" style="height: 300px;"></div>
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Pie Chart 4</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Slightly more transparent label backgrounds and adjusted the radius values to place them within
                            the pie.</p>
                        <div id="kt_flotcharts_11" style="height: 300px;"></div>
                    </div>
                </div>
                <!--end::Card-->
            </div>
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
@endsection
@section('scripts')
    <script src="{{ asset('assets/plugins/custom/flot/flot.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/pages/features/charts/flotcharts.js') }}"></script>
@endsection
