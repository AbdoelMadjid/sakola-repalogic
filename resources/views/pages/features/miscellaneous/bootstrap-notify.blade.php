@extends('layouts.index')
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
                Miscellaneous
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
            <div class="alert-text">This plugin helps to turn standard bootstrap alerts into "growl" like notifications.
                <br />For more info please visit the plugin's
                <a class="font-weight-bold" href="http://bootstrap-notify.remabledesigns.com/" target="_blank">Home</a>or
                <a class="font-weight-bold" href="https://github.com/mouse0270/bootstrap-notify/" target="_blank">Github
                    Repo</a>.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Card-->
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Bootstrap Notify Demo</h3>
                </div>
            </div>
            <!--begin::Form-->
            <form>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-right">Placement</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="row">
                                <div class="col">
                                    <select class="form-control" id="kt_notify_placement_from">
                                        <option value="top">Top</option>
                                        <option value="bottom">Bottom</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-control" id="kt_notify_placement_align">
                                        <option value="left">Left</option>
                                        <option value="right" selected="selected">Right</option>
                                        <option value="center">Center</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-right">Animation</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="row">
                                <div class="col">
                                    <select class="form-control" id="kt_notify_animate_enter">
                                        <optgroup label="Attention Seekers">
                                            <option value="bounce">bounce</option>
                                            <option value="flash">flash</option>
                                            <option value="pulse">pulse</option>
                                            <option value="rubberBand">rubberBand</option>
                                            <option value="shake">shake</option>
                                            <option value="swing">swing</option>
                                            <option value="tada">tada</option>
                                            <option value="wobble">wobble</option>
                                            <option value="jello">jello</option>
                                        </optgroup>
                                        <optgroup label="Bouncing Entrances">
                                            <option value="bounceIn">bounceIn</option>
                                            <option value="bounceInDown">bounceInDown</option>
                                            <option value="bounceInLeft">bounceInLeft</option>
                                            <option value="bounceInRight">bounceInRight</option>
                                            <option value="bounceInUp">bounceInUp</option>
                                        </optgroup>
                                        <optgroup label="Bouncing Exits">
                                            <option value="bounceOut">bounceOut</option>
                                            <option value="bounceOutDown">bounceOutDown</option>
                                            <option value="bounceOutLeft">bounceOutLeft</option>
                                            <option value="bounceOutRight">bounceOutRight</option>
                                            <option value="bounceOutUp">bounceOutUp</option>
                                        </optgroup>
                                        <optgroup label="Fading Entrances">
                                            <option value="fadeIn">fadeIn</option>
                                            <option value="fadeInDown">fadeInDown</option>
                                            <option value="fadeInDownBig">fadeInDownBig</option>
                                            <option value="fadeInLeft">fadeInLeft</option>
                                            <option value="fadeInLeftBig">fadeInLeftBig</option>
                                            <option value="fadeInRight">fadeInRight</option>
                                            <option value="fadeInRightBig">fadeInRightBig</option>
                                            <option value="fadeInUp">fadeInUp</option>
                                            <option value="fadeInUpBig">fadeInUpBig</option>
                                        </optgroup>
                                        <optgroup label="Fading Exits">
                                            <option value="fadeOut">fadeOut</option>
                                            <option value="fadeOutDown">fadeOutDown</option>
                                            <option value="fadeOutDownBig">fadeOutDownBig</option>
                                            <option value="fadeOutLeft">fadeOutLeft</option>
                                            <option value="fadeOutLeftBig">fadeOutLeftBig</option>
                                            <option value="fadeOutRight">fadeOutRight</option>
                                            <option value="fadeOutRightBig">fadeOutRightBig</option>
                                            <option value="fadeOutUp">fadeOutUp</option>
                                            <option value="fadeOutUpBig">fadeOutUpBig</option>
                                        </optgroup>
                                        <optgroup label="Flippers">
                                            <option value="flip">flip</option>
                                            <option value="flipInX">flipInX</option>
                                            <option value="flipInY">flipInY</option>
                                            <option value="flipOutX">flipOutX</option>
                                            <option value="flipOutY">flipOutY</option>
                                        </optgroup>
                                        <optgroup label="Lightspeed">
                                            <option value="lightSpeedIn">lightSpeedIn</option>
                                            <option value="lightSpeedOut">lightSpeedOut</option>
                                        </optgroup>
                                        <optgroup label="Rotating Entrances">
                                            <option value="rotateIn">rotateIn</option>
                                            <option value="rotateInDownLeft">rotateInDownLeft</option>
                                            <option value="rotateInDownRight">rotateInDownRight</option>
                                            <option value="rotateInUpLeft">rotateInUpLeft</option>
                                            <option value="rotateInUpRight">rotateInUpRight</option>
                                        </optgroup>
                                        <optgroup label="Rotating Exits">
                                            <option value="rotateOut">rotateOut</option>
                                            <option value="rotateOutDownLeft">rotateOutDownLeft</option>
                                            <option value="rotateOutDownRight">rotateOutDownRight</option>
                                            <option value="rotateOutUpLeft">rotateOutUpLeft</option>
                                            <option value="rotateOutUpRight">rotateOutUpRight</option>
                                        </optgroup>
                                        <optgroup label="Sliding Entrances">
                                            <option value="slideInUp">slideInUp</option>
                                            <option value="slideInDown">slideInDown</option>
                                            <option value="slideInLeft">slideInLeft</option>
                                            <option value="slideInRight">slideInRight</option>
                                        </optgroup>
                                        <optgroup label="Sliding Exits">
                                            <option value="slideOutUp">slideOutUp</option>
                                            <option value="slideOutDown">slideOutDown</option>
                                            <option value="slideOutLeft">slideOutLeft</option>
                                            <option value="slideOutRight">slideOutRight</option>
                                        </optgroup>
                                        <optgroup label="Zoom Entrances">
                                            <option value="zoomIn">zoomIn</option>
                                            <option value="zoomInDown">zoomInDown</option>
                                            <option value="zoomInLeft">zoomInLeft</option>
                                            <option value="zoomInRight">zoomInRight</option>
                                            <option value="zoomInUp">zoomInUp</option>
                                        </optgroup>
                                        <optgroup label="Zoom Exits">
                                            <option value="zoomOut">zoomOut</option>
                                            <option value="zoomOutDown">zoomOutDown</option>
                                            <option value="zoomOutLeft">zoomOutLeft</option>
                                            <option value="zoomOutRight">zoomOutRight</option>
                                            <option value="zoomOutUp">zoomOutUp</option>
                                        </optgroup>
                                        <optgroup label="Specials">
                                            <option value="hinge">hinge</option>
                                            <option value="rollIn">rollIn</option>
                                            <option value="rollOut">rollOut</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-control" id="kt_notify_animate_exit">
                                        <optgroup label="Attention Seekers">
                                            <option value="bounce">bounce</option>
                                            <option value="flash">flash</option>
                                            <option value="pulse">pulse</option>
                                            <option value="rubberBand">rubberBand</option>
                                            <option value="shake">shake</option>
                                            <option value="swing">swing</option>
                                            <option value="tada">tada</option>
                                            <option value="wobble">wobble</option>
                                            <option value="jello">jello</option>
                                        </optgroup>
                                        <optgroup label="Bouncing Entrances">
                                            <option value="bounceIn">bounceIn</option>
                                            <option value="bounceInDown">bounceInDown</option>
                                            <option value="bounceInLeft">bounceInLeft</option>
                                            <option value="bounceInRight">bounceInRight</option>
                                            <option value="bounceInUp">bounceInUp</option>
                                        </optgroup>
                                        <optgroup label="Bouncing Exits">
                                            <option value="bounceOut">bounceOut</option>
                                            <option value="bounceOutDown">bounceOutDown</option>
                                            <option value="bounceOutLeft">bounceOutLeft</option>
                                            <option value="bounceOutRight">bounceOutRight</option>
                                            <option value="bounceOutUp">bounceOutUp</option>
                                        </optgroup>
                                        <optgroup label="Fading Entrances">
                                            <option value="fadeIn">fadeIn</option>
                                            <option value="fadeInDown">fadeInDown</option>
                                            <option value="fadeInDownBig">fadeInDownBig</option>
                                            <option value="fadeInLeft">fadeInLeft</option>
                                            <option value="fadeInLeftBig">fadeInLeftBig</option>
                                            <option value="fadeInRight">fadeInRight</option>
                                            <option value="fadeInRightBig">fadeInRightBig</option>
                                            <option value="fadeInUp">fadeInUp</option>
                                            <option value="fadeInUpBig">fadeInUpBig</option>
                                        </optgroup>
                                        <optgroup label="Fading Exits">
                                            <option value="fadeOut">fadeOut</option>
                                            <option value="fadeOutDown">fadeOutDown</option>
                                            <option value="fadeOutDownBig">fadeOutDownBig</option>
                                            <option value="fadeOutLeft">fadeOutLeft</option>
                                            <option value="fadeOutLeftBig">fadeOutLeftBig</option>
                                            <option value="fadeOutRight">fadeOutRight</option>
                                            <option value="fadeOutRightBig">fadeOutRightBig</option>
                                            <option value="fadeOutUp">fadeOutUp</option>
                                            <option value="fadeOutUpBig">fadeOutUpBig</option>
                                        </optgroup>
                                        <optgroup label="Flippers">
                                            <option value="flip">flip</option>
                                            <option value="flipInX">flipInX</option>
                                            <option value="flipInY">flipInY</option>
                                            <option value="flipOutX">flipOutX</option>
                                            <option value="flipOutY">flipOutY</option>
                                        </optgroup>
                                        <optgroup label="Lightspeed">
                                            <option value="lightSpeedIn">lightSpeedIn</option>
                                            <option value="lightSpeedOut">lightSpeedOut</option>
                                        </optgroup>
                                        <optgroup label="Rotating Entrances">
                                            <option value="rotateIn">rotateIn</option>
                                            <option value="rotateInDownLeft">rotateInDownLeft</option>
                                            <option value="rotateInDownRight">rotateInDownRight</option>
                                            <option value="rotateInUpLeft">rotateInUpLeft</option>
                                            <option value="rotateInUpRight">rotateInUpRight</option>
                                        </optgroup>
                                        <optgroup label="Rotating Exits">
                                            <option value="rotateOut">rotateOut</option>
                                            <option value="rotateOutDownLeft">rotateOutDownLeft</option>
                                            <option value="rotateOutDownRight">rotateOutDownRight</option>
                                            <option value="rotateOutUpLeft">rotateOutUpLeft</option>
                                            <option value="rotateOutUpRight">rotateOutUpRight</option>
                                        </optgroup>
                                        <optgroup label="Sliding Entrances">
                                            <option value="slideInUp">slideInUp</option>
                                            <option value="slideInDown">slideInDown</option>
                                            <option value="slideInLeft">slideInLeft</option>
                                            <option value="slideInRight">slideInRight</option>
                                        </optgroup>
                                        <optgroup label="Sliding Exits">
                                            <option value="slideOutUp">slideOutUp</option>
                                            <option value="slideOutDown">slideOutDown</option>
                                            <option value="slideOutLeft">slideOutLeft</option>
                                            <option value="slideOutRight">slideOutRight</option>
                                        </optgroup>
                                        <optgroup label="Zoom Entrances">
                                            <option value="zoomIn">zoomIn</option>
                                            <option value="zoomInDown">zoomInDown</option>
                                            <option value="zoomInLeft">zoomInLeft</option>
                                            <option value="zoomInRight">zoomInRight</option>
                                            <option value="zoomInUp">zoomInUp</option>
                                        </optgroup>
                                        <optgroup label="Zoom Exits">
                                            <option value="zoomOut">zoomOut</option>
                                            <option value="zoomOutDown">zoomOutDown</option>
                                            <option value="zoomOutLeft">zoomOutLeft</option>
                                            <option value="zoomOutRight">zoomOutRight</option>
                                            <option value="zoomOutUp">zoomOutUp</option>
                                        </optgroup>
                                        <optgroup label="Specials">
                                            <option value="hinge">hinge</option>
                                            <option value="rollIn">rollIn</option>
                                            <option value="rollOut">rollOut</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-right">Icon</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control" id="kt_notify_icon">
                                <option value="">None</option>
                                <option value="la la-cloud-download">la la-cloud-download</option>
                                <option value="la la-warning">la la-warning</option>
                                <option value="fa fa-warning">fa fa-warning</option>
                                <option value="fa fa-cloud-download">fa fa-cloud-download</option>
                                <option value="flaticon-exclamation-2">flaticon-exclamation-2</option>
                                <option value="flaticon-signs">flaticon-signs</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-right">URL Clickable</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input data-switch="true" type="checkbox" data-on-color="brand" id="kt_notify_url" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-right">Allow dismiss</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input data-switch="true" type="checkbox" checked="checked" data-on-color="brand"
                                id="kt_notify_dismiss" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-right">Pause on hover</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input data-switch="true" type="checkbox" data-on-color="brand" id="kt_notify_pause" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-right">Newest on top</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input data-switch="true" type="checkbox" data-on-color="brand" id="kt_notify_top" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-right">Show Title</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input data-switch="true" type="checkbox" data-on-color="brand" id="kt_notify_title" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-right">Show Progress</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input data-switch="true" type="checkbox" data-on-color="brand" id="kt_notify_progress" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-right">Spacing</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input type="number" class="form-control" value="10" id="kt_notify_spacing" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-right">Offset X</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input type="number" class="form-control" value="30" id="kt_notify_offset_x" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-right">Offset Y</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input type="number" class="form-control" value="30" id="kt_notify_offset_y" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-right">Delay</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input type="number" class="form-control" value="1000" id="kt_notify_delay" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-right">Timer</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input type="number" class="form-control" value="2000" id="kt_notify_timer" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-right">Z-Index</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input type="number" class="form-control" value="10000" id="kt_notify_zindex" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-right">State</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control" id="kt_notify_state">
                                <option value="success">Success</option>
                                <option value="danger">Danger</option>
                                <option value="warning">Warning</option>
                                <option value="info">Info</option>
                                <option value="primary">Primary</option>
                                <option value="dark">Dark</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-9 ml-lg-auto">
                            <a href="javascript:;" id="kt_notify_btn" class="btn btn-success">Display</a>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/pages/features/miscellaneous/bootstrap-notify.js') }}"></script>
@endsection
