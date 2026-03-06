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
                Custom
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
            <div class="alert-text">Metronic's custom
                <code>.spinner</code>pseudo element enables spinning effect for any component.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Row-->
        <div class="row">
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Base Examples</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Add
                                <code>.spinner</code>class to any element to have a pseudo spinner.
                            </p>
                            <div class="example-preview">
                                <div class="spinner"></div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="spinner"&gt;&lt;/div&gt;
                        </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Add
                                <code>.spinner-track</code>class to to have spinner with track bar.
                            </p>
                            <div class="example-preview">
                                <div class="spinner spinner-track"></div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="spinner"&gt;&lt;/div&gt;
                        </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Use
                                <code>.spinner-left</code>and
                                <code>.spinner-right</code>clases to set spinner aligment.
                            </p>
                            <div class="example-preview">
                                <div class="mb-10">
                                    <div class="spinner spinner-left"></div>
                                </div>
                                <div>
                                    <div class="spinner spinner-right"></div>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="spinner spinner-right"&gt;&lt;/div&gt;
                        &lt;div class="spinner spinner-left"&gt;&lt;/div&gt;
                        </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Add
                                <code>.spinner-{color}</code>class to have spinner color options.
                            </p>
                            <div class="example-preview">
                                <div class="d-flex mb-15">
                                    <div class="spinner spinner-primary mr-15"></div>
                                    <div class="spinner spinner-success mr-15"></div>
                                    <div class="spinner spinner-danger mr-15"></div>
                                    <div class="spinner spinner-warning mr-15"></div>
                                    <div class="spinner spinner-info mr-15"></div>
                                    <div class="spinner spinner-dark mr-15"></div>
                                </div>
                                <div class="d-flex">
                                    <div class="spinner spinner-track spinner-primary mr-15"></div>
                                    <div class="spinner spinner-track spinner-success mr-15"></div>
                                    <div class="spinner spinner-track spinner-danger mr-15"></div>
                                    <div class="spinner spinner-track spinner-warning mr-15"></div>
                                    <div class="spinner spinner-track spinner-info mr-15"></div>
                                    <div class="spinner spinner-track spinner-dark mr-15"></div>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="spinner spinner-primary mr-15"&gt;&lt;/div&gt;
                        &lt;div class="spinner spinner-success mr-15"&gt;&lt;/div&gt;
                        &lt;div class="spinner spinner-danger mr-15"&gt;&lt;/div&gt;
                        &lt;div class="spinner spinner-warning mr-15"&gt;&lt;/div&gt;
                        &lt;div class="spinner spinner-info mr-15"&gt;&lt;/div&gt;
                        &lt;div class="spinner spinner-dark mr-15"&gt;&lt;/div&gt;

                        &lt;div class="spinner spinner-track spinner-primary mr-15"&gt;&lt;/div&gt;
                        &lt;div class="spinner spinner-track spinner-success mr-15"&gt;&lt;/div&gt;
                        &lt;div class="spinner spinner-track spinner-danger mr-15"&gt;&lt;/div&gt;
                        &lt;div class="spinner spinner-track spinner-warning mr-15"&gt;&lt;/div&gt;
                        &lt;div class="spinner spinner-track spinner-info mr-15"&gt;&lt;/div&gt;
                        &lt;div class="spinner spinner-track spinner-dark mr-15"&gt;&lt;/div&gt;
                        </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Add
                                <code>.spinner-{sm|lg}</code>classes for spinner size options.
                            </p>
                            <div class="example-preview d-flex">
                                <div class="d-flex mr-10">
                                    <div class="spinner spinner-primary spinner-sm mr-15"></div>
                                    <div class="spinner spinner-primary mr-15"></div>
                                    <div class="spinner spinner-primary spinner-lg mr-15"></div>
                                </div>
                                <div class="d-flex">
                                    <div class="spinner spinner-track spinner-primary spinner-sm mr-15"></div>
                                    <div class="spinner spinner-track spinner-primary mr-15"></div>
                                    <div class="spinner spinner-track spinner-primary spinner-lg mr-15"></div>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="spinner spinner-primary spinner-sm mr-15"&gt;&lt;/div&gt;
                        &lt;div class="spinner spinner-primary mr-15"&gt;&lt;/div&gt;
                        &lt;div class="spinner spinner-primary spinner-lg mr-15"&gt;&lt;/div&gt;

                        &lt;div class="spinner spinner-track spinner-primary spinner-sm mr-15"&gt;&lt;/div&gt;
                        &lt;div class="spinner spinner-track spinner-primary mr-15"&gt;&lt;/div&gt;
                        &lt;div class="spinner spinner-track spinner-primary spinner-lg mr-15"&gt;&lt;/div&gt;
                        </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Spinners On Buttons</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Use with
                                <code>.btn</code>to add spinner effect to buttons and set the alignment with
                                <code>.spinner-right</code>and
                                <code>.spinner-left</code>classes.
                            </p>
                            <div class="example-preview">
                                <button type="button"
                                    class="btn btn-primary spinner spinner-white spinner-right mr-3">Primary</button>
                                <button type="button"
                                    class="btn btn-secondary spinner spinner-dark spinner-right mr-3">Secondary</button>
                                <button type="button"
                                    class="btn btn-light-success spinner spinner-darker-success spinner-left mr-3">Success</button>
                                <button type="button"
                                    class="btn btn-outline-danger spinner spinner-darker-danger spinner-left mr-3">Danger</button>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;button type="button" class="btn btn-primary spinner spinner-white spinner-right"&gt;
                            Primary
                        &lt;/button&gt;
                        &lt;button type="button" class="btn btn-secondary spinner spinner-dark spinner-right"&gt;
                            Secondary
                        &lt;/button&gt;
                        &lt;button type="button" class="btn btn-light-success spinner spinner-darker-success spinner-left mr-3"&gt;
                            Success
                        &lt;/button&gt;
                        &lt;button type="button" class="btn btn-outline-danger spinner spinner-darker-danger spinner-left mr-3"&gt;
                            Danger
                        &lt;/button&gt;
                        </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <p>Use
                            <code>KTUtil.btnWait()</code>and
                            <code>KTUtil.btnRelease()</code>utility functions to control button loading state with
                            Javscript. Click to see how the above functions work on the below buttons:
                        </p>
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <div class="example-preview">
                                <button type="button" class="btn btn-primary mr-3" id="kt_btn_1">Primary</button>
                                <button type="button" class="btn btn-secondary mr-3" id="kt_btn_2">Secondary</button>
                                <button type="button" class="btn btn-light-success mr-3" id="kt_btn_3">Success</button>
                                <button type="button" class="btn btn-outline-danger mr-3" id="kt_btn_4">Danger</button>
                            </div>
                            <div class="example-code">
                                <ul class="example-nav nav nav-tabs nav-tabs-line nav-tabs-line-2x nav-tabs-primary"
                                    id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#example_code_1_html">HTML</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#example_code_1_js">JS</a>
                                    </li>
                                </ul>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="example_code_1_html" role="tabpanel">
                                        <div class="example-highlight">
                                            <pre>
<code class="language-html">
                                &lt;button type="button" class="btn btn-primary mr-3" id="kt_btn_1"&gt;
                                    Primary
                                &lt;/button&gt;
                                &lt;button type="button" class="btn btn-secondary mr-3" id="kt_btn_2"&gt;
                                    Secondary
                                &lt;/button&gt;
                                &lt;button type="button" class="btn btn-light-success spinner-left mr-3" id="kt_btn_3"&gt;
                                    Success
                                &lt;/button&gt;
                                &lt;button type="button" class="btn btn-outline-danger  spinner-left mr-3" id="kt_btn_4"&gt;
                                    Danger
                                &lt;/button&gt;
                                </code>
</pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="example_code_1_js" role="tabpanel">
                                        <div class="example-highlight">
                                            <pre style="height:400px">
<code class="language-javascript">
                                    // Demo 1
                                    var btn = KTUtil.getById("kt_btn_1");

                                    KTUtil.addEvent(btn, "click", function() {
                                        KTUtil.btnWait(btn, "spinner spinner-right spinner-white pr-15", "Please wait");

                                        setTimeout(function() {
                                            KTUtil.btnRelease(btn);
                                        }, 1000);
                                    });

                                    // Demo 2
                                    var btn = KTUtil.getById("kt_btn_2");

                                    KTUtil.addEvent(btn, "click", function() {
                                        KTUtil.btnWait(btn, "spinner spinner-dark spinner-right pr-15", "Loading");

                                        setTimeout(function() {
                                            KTUtil.btnRelease(btn);
                                        }, 1000);
                                    });

                                    // Demo 3
                                    var btn = KTUtil.getById("kt_btn_3");

                                    KTUtil.addEvent(btn, "click", function() {
                                        KTUtil.btnWait(btn, "spinner spinner-left spinner-darker-success pl-15", "Disabled...");

                                        setTimeout(function() {
                                            KTUtil.btnRelease(btn);
                                        }, 1000);
                                    });

                                    // Demo 4
                                    var btn = KTUtil.getById("kt_btn_4");

                                    KTUtil.addEvent(btn, "click", function() {
                                        KTUtil.btnWait(btn, "spinner spinner-left spinner-darker-danger pl-15", "Please wait");

                                        setTimeout(function() {
                                            KTUtil.btnRelease(btn);
                                        }, 1000);
                                    });
                                </code>
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Spinners On Inputs</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Use with
                                <code>.form-control</code>to add spinner effect to form inputs and set the spinner alignment
                                with
                                <code>.spinner-right</code>and
                                <code>.spinner-left</code>classes.
                            </p>
                            <div class="example-preview">
                                <div class="spinner spinner-primary spinner-left">
                                    <input class="form-control mb-5" />
                                </div>
                                <div class="spinner spinner-success spinner-right">
                                    <input class="form-control" />
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="spinner spinner-primary spinner-left"&gt;
                            &lt;input class="form-control mb-5"/&gt;
                        &lt;/div&gt;

                        &lt;div class="spinner spinner-success spinner-right"&gt;
                            &lt;input class="form-control"/&gt;
                        &lt;/div&gt;
                        </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
@endsection
