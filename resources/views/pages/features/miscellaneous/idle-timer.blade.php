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
            <div class="alert-text">jQuery Idle Timer fires a custom event when the user is "idle".
                <br />For more info please visit
                <a class="font-weight-bold" href="https://github.com/thorst/jquery-idletimer" target="_blank">the Plugin's
                    Github Repo</a>.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Card-->
        <div class="card card-custom gutter-b">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">jQuery Idle Timer</h3>
                </div>
            </div>
            <div class="card-body">The idle timer is built on jQuery and provides two events:
                <code>idle.idleTimer</code>and
                <code>active.idleTimer</code>, which fire when the user's idle state has changed. When you move your mouse
                over the page or start typing, you're considered
                <code>active</code>. On this page we have two idle timers. One for the entire document. Another for the text
                area on the right (or bottom if your on mobile).
            </div>
        </div>
        <!--end::Card-->
        <!--begin::Row-->
        <div class="row">
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Document Demo
                                <small>
                                    <span id="docTimeout"></span>second timeout</small>
                            </h3>
                        </div>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="btn-group mb-10">
                            <a href="javascript:;" id="btPause" class="btn btn-outline-secondary">Pause</a>
                            <a href="javascript:;" id="btResume" class="btn btn-outline-secondary">Resume</a>
                            <a href="javascript:;" id="btElapsed" class="btn btn-outline-secondary">Elapsed</a>
                            <a href="javascript:;" id="btInit" class="btn btn-outline-secondary">Init</a>
                            <a href="javascript:;" id="btDestroy" class="btn btn-outline-secondary">Destroy</a>
                        </div>
                        <textarea rows="10" cols="30" id="docStatus" class="form-control"></textarea>
                        <br />
                        <!--begin::Code example-->
                        <div class="example-code mt-10">
                            <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#example_code_html">HTML</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#example_code_js">JS</a>
                                </li>
                            </ul>
                            <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            <div class="tab-content">
                                <div class="tab-pane active" id="example_code_html" role="tabpanel">
                                    <div class="example-highlight">
                                        <pre>
<code class="language-html">
                            &lt;div class="btn-group mb-10"&gt;
                                &lt;a href="javascript:;" id="btPause" class="btn btn-outline-secondary"&gt;Pause&lt;/a&gt;
                                &lt;a href="javascript:;" id="btResume" class="btn btn-outline-secondary"&gt;Resume&lt;/a&gt;
                                &lt;a href="javascript:;" id="btElapsed" class="btn btn-outline-secondary"&gt;Elapsed&lt;/a&gt;
                                &lt;a href="javascript:;" id="btInit" class="btn btn-outline-secondary"&gt;Init&lt;/a&gt;
                                &lt;a href="javascript:;" id="btDestroy" class="btn btn-outline-secondary"&gt;Destroy&lt;/a&gt;
                            &lt;/div&gt;
                            &lt;textarea rows="10" cols="30" id="docStatus" class="form-control"&gt;&lt;/textarea&gt;&lt;br /&gt;
       </code>
</pre>
                                    </div>
                                </div>
                                <div class="tab-pane" id="example_code_js">
                                    <div class="example-highlight">
                                        <pre style="height:500px">
<code class="language-js">
                            var KTIdleTimerDemo = function() {
                                var _init = function() {
                                    //Define default
                                    var docTimeout = 5000;

                                    /*
                                    Handle raised idle/active events
                                    */
                                    $(document).on("idle.idleTimer", function(event, elem, obj) {
                                        $("#docStatus")
                                            .val(function(i, v) {
                                                return v + "Idle @ " + moment().format() + " \n";
                                            })
                                            .removeClass("alert-success")
                                            .addClass("alert-warning")
                                            .scrollTop($("#docStatus")[0].scrollHeight);
                                    });
                                    $(document).on("active.idleTimer", function(event, elem, obj, e) {
                                        $("#docStatus")
                                            .val(function(i, v) {
                                                return v + "Active [" + e.type + "] [" + e.target.nodeName + "] @ " + moment().format() + " \n";
                                            })
                                            .addClass("alert-success")
                                            .removeClass("alert-warning")
                                            .scrollTop($("#docStatus")[0].scrollHeight);
                                    });

                                    /*
                                    Handle button events
                                    */
                                    $("#btPause").click(function() {
                                        $(document).idleTimer("pause");
                                        $("#docStatus")
                                            .val(function(i, v) {
                                                return v + "Paused @ " + moment().format() + " \n";
                                            })
                                            .scrollTop($("#docStatus")[0].scrollHeight);
                                        $(this).blur();
                                        return false;
                                    });
                                    $("#btResume").click(function() {
                                        $(document).idleTimer("resume");
                                        $("#docStatus")
                                            .val(function(i, v) {
                                                return v + "Resumed @ " + moment().format() + " \n";
                                            })
                                            .scrollTop($("#docStatus")[0].scrollHeight);
                                        $(this).blur();
                                        return false;
                                    });
                                    $("#btElapsed").click(function() {
                                        $("#docStatus")
                                            .val(function(i, v) {
                                                return v + "Elapsed (since becoming active): " + $(document).idleTimer("getElapsedTime") + " \n";
                                            })
                                            .scrollTop($("#docStatus")[0].scrollHeight);
                                        $(this).blur();
                                        return false;
                                    });
                                    $("#btDestroy").click(function() {
                                        $(document).idleTimer("destroy");
                                        $("#docStatus")
                                            .val(function(i, v) {
                                                return v + "Destroyed: @ " + moment().format() + " \n";
                                            })
                                            .removeClass("alert-success")
                                            .removeClass("alert-warning")
                                            .scrollTop($("#docStatus")[0].scrollHeight);
                                        $(this).blur();
                                        return false;
                                    });
                                    $("#btInit").click(function() {
                                        // for demo purposes show init with just object
                                        $(document).idleTimer({
                                            timeout: docTimeout
                                        });
                                        $("#docStatus")
                                            .val(function(i, v) {
                                                return v + "Init: @ " + moment().format() + " \n";
                                            })
                                            .scrollTop($("#docStatus")[0].scrollHeight);

                                        //Apply classes for default state
                                        if ($(document).idleTimer("isIdle")) {
                                            $("#docStatus")
                                                .removeClass("alert-success")
                                                .addClass("alert-warning");
                                        } else {
                                            $("#docStatus")
                                                .addClass("alert-success")
                                                .removeClass("alert-warning");
                                        }
                                        $(this).blur();
                                        return false;
                                    });

                                    //Clear old statuses
                                    $("#docStatus").val("");

                                    //Start timeout, passing no options
                                    //Same as $.idleTimer(docTimeout, docOptions);
                                    $(document).idleTimer(docTimeout);

                                    //For demo purposes, style based on initial state
                                    if ($(document).idleTimer("isIdle")) {
                                        $("#docStatus")
                                            .val(function(i, v) {
                                                return v + "Initial Idle State @ " + moment().format() + " \n";
                                            })
                                            .removeClass("alert-success")
                                            .addClass("alert-warning")
                                            .scrollTop($("#docStatus")[0].scrollHeight);
                                    } else {
                                        $("#docStatus")
                                            .val(function(i, v) {
                                                return v + "Initial Active State @ " + moment().format() + " \n";
                                            })
                                            .addClass("alert-success")
                                            .removeClass("alert-warning")
                                            .scrollTop($("#docStatus")[0].scrollHeight);
                                    }


                                    //For demo purposes, display the actual timeout on the page
                                    $("#docTimeout").text(docTimeout / 1000);
                                }

                                return {
                                    //main function to initiate the module
                                    init: function() {
                                        _init();
                                    }
                                };
                            }();

                            jQuery(document).ready(function() {
                                KTIdleTimerDemo.init();
                            });
       </code>
</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Code example-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Element Demo
                                <small>
                                    <span id="elTimeout"></span>second timeout</small>
                            </h3>
                        </div>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="btn-group mb-10">
                            <a href="javascript:;" id="btReset" class="btn btn-outline-secondary">Reset</a>
                            <a href="javascript:;" id="btLastActive" class="btn btn-outline-secondary">Last Active</a>
                            <a href="javascript:;" id="btRemaining" class="btn btn-outline-secondary">Remaining</a>
                            <a href="javascript:;" id="btState" class="btn btn-outline-secondary">State</a>
                        </div>
                        <textarea rows="10" cols="30" id="elStatus" class="form-control"></textarea>
                        <br />
                        <!--begin::Code example-->
                        <div class="example-code mt-10">
                            <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#example_code_2_html">HTML</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#example_code_2_js">JS</a>
                                </li>
                            </ul>
                            <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            <div class="tab-content">
                                <div class="tab-pane active" id="example_code_2_html" role="tabpanel">
                                    <div class="example-highlight">
                                        <pre>
<code class="language-html">
                            &lt;div class="btn-group mb-10"&gt;
                                &lt;a href="javascript:;" id="btReset" class="btn btn-outline-secondary"&gt;Reset&lt;/a&gt;
                                &lt;a href="javascript:;" id="btLastActive" class="btn btn-outline-secondary"&gt;Last Active&lt;/a&gt;
                                &lt;a href="javascript:;" id="btRemaining" class="btn btn-outline-secondary"&gt;Remaining&lt;/a&gt;
                                &lt;a href="javascript:;" id="btState" class="btn btn-outline-secondary"&gt;State&lt;/a&gt;
                            &lt;/div&gt;
                            &lt;textarea rows="10" cols="30" id="elStatus" class="form-control"&gt;&lt;/textarea&gt;&lt;br /&gt;
       </code>
</pre>
                                    </div>
                                </div>
                                <div class="tab-pane" id="example_code_2_js">
                                    <div class="example-highlight">
                                        <pre style="height:500px">
<code class="language-js">
                            var KTIdleTimerDemo = function() {
                                var _init = function() {
                                    //Define textarea settings
                                    var
                                        taTimeout = 3000;

                                    /*
                                    Handle raised idle/active events
                                    */
                                    $("#elStatus").on("idle.idleTimer", function(event, elem, obj) {
                                        //If you dont stop propagation it will bubble up to document event handler
                                        event.stopPropagation();

                                        $("#elStatus")
                                            .val(function(i, v) {
                                                return v + "Idle @ " + moment().format() + " \n";
                                            })
                                            .removeClass("alert-success")
                                            .addClass("alert-warning")
                                            .scrollTop($("#elStatus")[0].scrollHeight);

                                    });
                                    $("#elStatus").on("active.idleTimer", function(event) {
                                        //If you dont stop propagation it will bubble up to document event handler
                                        event.stopPropagation();

                                        $("#elStatus")
                                            .val(function(i, v) {
                                                return v + "Active @ " + moment().format() + " \n";
                                            })
                                            .addClass("alert-success")
                                            .removeClass("alert-warning")
                                            .scrollTop($("#elStatus")[0].scrollHeight);
                                    });

                                    /*
                                    Handle button events
                                    */
                                    $("#btReset").click(function() {
                                        $("#elStatus")
                                            .idleTimer("reset")
                                            .val(function(i, v) {
                                                return v + "Reset @ " + moment().format() + " \n";
                                            })
                                            .scrollTop($("#elStatus")[0].scrollHeight);

                                        //Apply classes for default state
                                        if ($("#elStatus").idleTimer("isIdle")) {
                                            $("#elStatus")
                                                .removeClass("alert-success")
                                                .addClass("alert-warning");
                                        } else {
                                            $("#elStatus")
                                                .addClass("alert-success")
                                                .removeClass("alert-warning");
                                        }
                                        $(this).blur();
                                        return false;
                                    });
                                    $("#btRemaining").click(function() {
                                        $("#elStatus")
                                            .val(function(i, v) {
                                                return v + "Remaining: " + $("#elStatus").idleTimer("getRemainingTime") + " \n";
                                            })
                                            .scrollTop($("#elStatus")[0].scrollHeight);
                                        $(this).blur();
                                        return false;
                                    });
                                    $("#btLastActive").click(function() {
                                        $("#elStatus")
                                            .val(function(i, v) {
                                                return v + "LastActive: " + $("#elStatus").idleTimer("getLastActiveTime") + " \n";
                                            })
                                            .scrollTop($("#elStatus")[0].scrollHeight);
                                        $(this).blur();
                                        return false;
                                    });
                                    $("#btState").click(function() {
                                        $("#elStatus")
                                            .val(function(i, v) {
                                                return v + "State: " + ($("#elStatus").idleTimer("isIdle") ? "idle" : "active") + " \n";
                                            })
                                            .scrollTop($("#elStatus")[0].scrollHeight);
                                        $(this).blur();
                                        return false;
                                    });

                                    //Clear value if there was one cached &amp; start time
                                    $("#elStatus").val("").idleTimer(taTimeout);

                                    //For demo purposes, show initial state
                                    if ($("#elStatus").idleTimer("isIdle")) {
                                        $("#elStatus")
                                            .val(function(i, v) {
                                                return v + "Initial Idle @ " + moment().format() + " \n";
                                            })
                                            .removeClass("alert-success")
                                            .addClass("alert-warning")
                                            .scrollTop($("#elStatus")[0].scrollHeight);
                                    } else {
                                        $("#elStatus")
                                            .val(function(i, v) {
                                                return v + "Initial Active @ " + moment().format() + " \n";
                                            })
                                            .addClass("alert-success")
                                            .removeClass("alert-warning")
                                            .scrollTop($("#elStatus")[0].scrollHeight);
                                    }

                                    // Display the actual timeout on the page
                                    $("#elTimeout").text(taTimeout / 1000);

                                }

                                return {
                                    //main function to initiate the module
                                    init: function() {
                                        _init();
                                    }
                                };
                            }();

                            jQuery(document).ready(function() {
                                KTIdleTimerDemo.init();
                            });
       </code>
</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Code example-->
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
    <script src="{{ asset('assets/js/pages/features/miscellaneous/idle-timer.js') }}"></script>
@endsection
