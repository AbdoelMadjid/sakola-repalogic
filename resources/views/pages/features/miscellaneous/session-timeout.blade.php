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
            <div class="alert-text">Session timeout and keep-alive control with a nice Bootstrap warning dialog.
                <br />For more info please visit
                <a class="font-weight-bold" href="https://github.com/orangehill/bootstrap-session-timeout"
                    target="_blank">the Plugin's Github Repo</a>.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Card-->
        <div class="card card-custom example example-compact">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Session Timeout Demo</h3>
                </div>
                <div class="card-toolbar">
                    <div class="example-tools justify-content-center">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <p>After a set amount of time(10 seconds set for demo), a dialog is shown to the user with the option to
                    either log out now, or stay connected. If log out now is selected, the page is redirected to a logout
                    URL. If stay connected is selected, a keep-alive URL is requested through AJAX. If no options is
                    selected after another set amount of time, the page is automatically redirected to a timeout URL.</p>
                <!--begin::Code example-->
                <div class="example-code mt-5">
                    <div class="example-highlight">
                        <pre>
<code class="language-js">
            var KTSessionTimeoutDemo = function() {
                var initDemo = function() {
                    $.sessionTimeout({
                        title: "Session Timeout Notification",
                        message: "Your session is about to expire.",
                        keepAliveUrl: "HOST_URL + "/api/session-timeout/keepalive.php",
                        redirUrl: "#",
                        logoutUrl: "#",
                        warnAfter: 3000, //warn after 5 seconds
                        redirAfter: 35000, //redirect after 10 secons,
                        ignoreUserActivity: true,
                        countdownMessage: "Redirecting in {timer} seconds.",
                        countdownBar: true
                    });
                }

                return {
                    //main function to initiate the module
                    init: function() {
                        initDemo();
                    }
                };
            }();

            jQuery(document).ready(function() {
                KTSessionTimeoutDemo.init();
            });
            </code>
</pre>
                    </div>
                </div>
                <!--end::Code example-->
            </div>
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/pages/features/miscellaneous/session-timeout.js') }}"></script>
@endsection
