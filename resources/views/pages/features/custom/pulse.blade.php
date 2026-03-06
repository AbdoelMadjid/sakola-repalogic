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
                <span class="svg-icon svg-icon-xl svg-icon-primary">
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
            <div class="alert-text">Custom Pulse component for indication purposes.</div>
        </div>
        <!--end::Notice-->
        <!--begin::Row-->
        <div class="row">
            <div class="col-xl-6">
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
                            <p>Default label examples.</p>
                            <div class="example-preview">
                                <span class="label pulse mr-10">
                                    <span class="position-relative">1</span>
                                    <span class="pulse-ring"></span>
                                </span>
                                <span class="label pulse mr-10">
                                    <span class="position-relative">2</span>
                                    <span class="pulse-ring"></span>
                                </span>
                                <span class="label pulse mr-10">
                                    <span class="position-relative">5</span>
                                    <span class="pulse-ring"></span>
                                </span>
                                <span class="label pulse mr-10">
                                    <span class="position-relative">9</span>
                                    <span class="pulse-ring"></span>
                                </span>
                                <span class="label pulse">
                                    <span class="position-relative">10</span>
                                    <span class="pulse-ring"></span>
                                </span>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre style="height:400px">
<code class="language-html">
                        &lt;span class="label pulse mr-10"&gt;
                            &lt;span class="position-relative"&gt;1&lt;/span&gt;
                            &lt;span class="pulse-ring"&gt;&lt;/span&gt;
                        &lt;/span&gt;
                        &lt;span class="label pulse mr-10"&gt;
                            &lt;span class="position-relative"&gt;2&lt;/span&gt;
                            &lt;span class="pulse-ring"&gt;&lt;/span&gt;
                        &lt;/span&gt;
                        &lt;span class="label pulse mr-10"&gt;
                            &lt;span class="position-relative"&gt;5&lt;/span&gt;
                            &lt;span class="pulse-ring"&gt;&lt;/span&gt;
                        &lt;/span&gt;
                        &lt;span class="label pulse mr-10"&gt;
                            &lt;span class="position-relative"&gt;9&lt;/span&gt;
                            &lt;span class="pulse-ring"&gt;&lt;/span&gt;
                        &lt;/span&gt;
                        &lt;span class="label pulse"&gt;
                            &lt;span class="position-relative"&gt;10&lt;/span&gt;
                            &lt;span class="pulse-ring"&gt;&lt;/span&gt;
                        &lt;/span&gt;
                        </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Use
                                <code>.pulse-{success|primary|danger|warning|info|dark|white|success}</code>class to have
                                color pulse options.
                            </p>
                            <div class="example-preview">
                                <span class="label pulse pulse-success mr-10">
                                    <span class="position-relative">1</span>
                                    <span class="pulse-ring"></span>
                                </span>
                                <span class="label pulse pulse-danger mr-10">
                                    <span class="position-relative">2</span>
                                    <span class="pulse-ring"></span>
                                </span>
                                <span class="label pulse pulse-warning mr-10">
                                    <span class="position-relative">5</span>
                                    <span class="pulse-ring"></span>
                                </span>
                                <span class="label pulse pulse-primary mr-10">
                                    <span class="position-relative">9</span>
                                    <span class="pulse-ring"></span>
                                </span>
                                <span class="label pulse pulse-info">
                                    <span class="position-relative">10</span>
                                    <span class="pulse-ring"></span>
                                </span>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre style="height:400px">
<code class="language-html">
                        &lt;span class="label pulse pulse-success mr-10"&gt;
                            &lt;span class="position-relative"&gt;1&lt;/span&gt;
                            &lt;span class="pulse-ring"&gt;&lt;/span&gt;
                        &lt;/span&gt;
                        &lt;span class="label pulse pulse-danger mr-10"&gt;
                            &lt;span class="position-relative"&gt;2&lt;/span&gt;
                            &lt;span class="pulse-ring"&gt;&lt;/span&gt;
                        &lt;/span&gt;
                        &lt;span class="label pulse pulse-warning mr-10"&gt;
                            &lt;span class="position-relative"&gt;5&lt;/span&gt;
                            &lt;span class="pulse-ring"&gt;&lt;/span&gt;
                        &lt;/span&gt;
                        &lt;span class="label pulse pulse-primary mr-10"&gt;
                            &lt;span class="position-relative"&gt;9&lt;/span&gt;
                            &lt;span class="pulse-ring"&gt;&lt;/span&gt;
                        &lt;/span&gt;
                        &lt;span class="label pulse pulse-info"&gt;
                            &lt;span class="position-relative"&gt;10&lt;/span&gt;
                            &lt;span class="pulse-ring"&gt;&lt;/span&gt;
                        &lt;/span&gt;
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
            <div class="col-xl-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Advance Examples</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Using with buttons and icons:</p>
                            <div class="example-preview">
                                <a href="#" class="btn btn-icon btn-light-primary pulse pulse-primary mr-5">
                                    <i class="flaticon2-bell-5"></i>
                                    <span class="pulse-ring"></span>
                                </a>
                                <a href="#" class="btn btn-icon btn-light-success pulse pulse-success mr-5">
                                    <i class="flaticon2-protected"></i>
                                    <span class="pulse-ring"></span>
                                </a>
                                <a href="#" class="btn btn-icon btn-light-danger pulse pulse-danger mr-5">
                                    <i class="flaticon2-information"></i>
                                    <span class="pulse-ring"></span>
                                </a>
                                <a href="#" class="btn btn-icon btn-light-warning pulse pulse-warning mr-5">
                                    <i class="flaticon2-gear"></i>
                                    <span class="pulse-ring"></span>
                                </a>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;a href="#" class="btn btn-icon btn-light-primary pulse pulse-primary mr-5"&gt;
                            &lt;i class="flaticon2-bell-5"&gt;&lt;/i&gt;
                            &lt;span class="pulse-ring"&gt;&lt;/span&gt;
                        &lt;/a&gt;

                        &lt;a href="#" class="btn btn-icon btn-light-success pulse pulse-success mr-5"&gt;
                            &lt;i class="flaticon2-protected"&gt;&lt;/i&gt;
                            &lt;span class="pulse-ring"&gt;&lt;/span&gt;
                        &lt;/a&gt;

                        &lt;a href="#" class="btn btn-icon btn-light-danger pulse pulse-danger mr-5"&gt;
                            &lt;i class="flaticon2-information"&gt;&lt;/i&gt;
                            &lt;span class="pulse-ring"&gt;&lt;/span&gt;
                        &lt;/a&gt;

                        &lt;a href="#" class="btn btn-icon btn-light-warning pulse pulse-warning mr-5"&gt;
                            &lt;i class="flaticon2-gear"&gt;&lt;/i&gt;
                            &lt;span class="pulse-ring"&gt;&lt;/span&gt;
                        &lt;/a&gt;
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
