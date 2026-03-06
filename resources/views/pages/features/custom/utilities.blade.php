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
            <div class="alert-text">Custom Bootstrap color utility classes created for Metronic.</div>
        </div>
        <!--end::Notice-->
        <!--begin::Row-->
        <div class="row">
            <div class="col-xl-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Background Colors</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example">
                            <p>Standard and custom Bootstrap background color utilities:</p>
                            <div class="example-preview">
                                <p class="bg-primary text-white py-2 px-4">.bg-primary</p>
                                <p class="bg-secondary py-2 px-4">.bg-secondary</p>
                                <p class="bg-success text-white py-2 px-4">.bg-success</p>
                                <p class="bg-danger text-white py-2 px-4">.bg-danger</p>
                                <p class="bg-warning text-white py-2 px-4">.bg-warning</p>
                                <p class="bg-info text-white py-2 px-4">.bg-info</p>
                                <p class="bg-light text-dark py-2 px-4">.bg-light</p>
                                <p class="bg-dark text-white py-2 px-4">.bg-dark</p>
                                <p class="bg-gray-100 text-dark-50 py-2 px-4">.bg-gray-100</p>
                                <p class="bg-gray-200 text-dark-50 py-2 px-4">.bg-gray-200</p>
                                <p class="bg-gray-300 text-dark-50 py-2 px-4">.bg-gray-300</p>
                                <p class="bg-gray-400 text-dark-50 py-2 px-4">.bg-gray-400</p>
                                <p class="bg-gray-500 text-dark-50 py-2 px-4">.bg-gray-500</p>
                                <p class="bg-gray-600 text-white py-2 px-4">.bg-gray-600</p>
                                <p class="bg-gray-700 text-white py-2 px-4">.bg-gray-700</p>
                                <p class="bg-gray-800 text-white py-2 px-4">.bg-gray-800</p>
                                <p class="bg-gray-900 text-white py-2 px-4">.bg-gray-900</p>
                                <p class="bg-white text-dark py-2 px-4">.bg-white</p>
                                <p class="bg-transparent text-dark py-2 px-4">.bg-transparent</p>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;p class="bg-primary text-white py-2 px-4"&gt;.bg-primary&lt;/p&gt;
                        &lt;p class="bg-secondary py-2 px-4"&gt;.bg-secondary&lt;/p&gt;
                        &lt;p class="bg-success text-white py-2 px-4"&gt;.bg-success&lt;/p&gt;
                        &lt;p class="bg-danger text-white py-2 px-4"&gt;.bg-danger&lt;/p&gt;
                        &lt;p class="bg-warning text-white py-2 px-4"&gt;.bg-warning&lt;/p&gt;
                        &lt;p class="bg-info text-white py-2 px-4"&gt;.bg-info&lt;/p&gt;
                        &lt;p class="bg-light text-dark py-2 px-4"&gt;.bg-light&lt;/p&gt;
                        &lt;p class="bg-dark text-white py-2 px-4"&gt;.bg-dark&lt;/p&gt;
                        &lt;p class="bg-gray-100 text-dark-50 py-2 px-4"&gt;.bg-gray-100&lt;/p&gt;
                        &lt;p class="bg-gray-200 text-dark-50 py-2 px-4"&gt;.bg-gray-200&lt;/p&gt;
                        &lt;p class="bg-gray-300 text-dark-50 py-2 px-4"&gt;.bg-gray-300&lt;/p&gt;
                        &lt;p class="bg-gray-400 text-dark-50 py-2 px-4"&gt;.bg-gray-400&lt;/p&gt;
                        &lt;p class="bg-gray-500 text-dark-50 py-2 px-4"&gt;.bg-gray-500&lt;/p&gt;
                        &lt;p class="bg-gray-600 text-white py-2 px-4"&gt;.bg-gray-600&lt;/p&gt;
                        &lt;p class="bg-gray-700 text-white py-2 px-4"&gt;.bg-gray-700&lt;/p&gt;
                        &lt;p class="bg-gray-800 text-white py-2 px-4"&gt;.bg-gray-800&lt;/p&gt;
                        &lt;p class="bg-gray-900 text-white py-2 px-4"&gt;.bg-gray-900&lt;/p&gt;
                        &lt;p class="bg-white text-dark py-2 px-4"&gt;.bg-white&lt;/p&gt;
                        &lt;p class="bg-transparent text-dark py-2 px-4"&gt;.bg-transparent&lt;/p&gt;
                        </code>
</pre>
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
                            <h3 class="card-label">Hover Background Colors</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example mb-15">
                            <p>Use custom
                                <code>.bg-hover-{color}</code>class to set a hover background color:
                            </p>
                            <div class="example-preview">
                                <div class="d-flex">
                                    <div
                                        class="bg-gray-200 bg-hover-primary d-flex flex-center w-100px h-100px mr-5 mb-1 mb-md-0">
                                    </div>
                                    <div
                                        class="bg-gray-200 bg-hover-success d-flex flex-center w-100px h-100px mr-5 mb-1 mb-md-0">
                                    </div>
                                    <div
                                        class="bg-gray-200 bg-hover-danger d-flex flex-center w-100px h-100px mr-5 mb-1 mb-md-0">
                                    </div>
                                    <div
                                        class="bg-gray-200 bg-hover-warning d-flex flex-center w-100px h-100px mr-5 mb-1 mb-md-0">
                                    </div>
                                    <div
                                        class="bg-gray-200 bg-hover-dark d-flex flex-center w-100px h-100px mr-5 mb-1 mb-md-0">
                                    </div>
                                    <div class="bg-gray-200 bg-hover-info d-flex flex-center w-100px h-100px"></div>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="bg-gray-200 bg-hover-primary"&gt;&lt;/div&gt;
                        &lt;div class="bg-gray-200 bg-hover-success"&gt;&lt;/div&gt;
                        &lt;div class="bg-gray-200 bg-hover-danger"&gt;&lt;/div&gt;
                        &lt;div class="bg-gray-200 bg-hover-warning"&gt;&lt;/div&gt;
                        &lt;div class="bg-gray-200 bg-hover-dark"&gt;&lt;/div&gt;
                        &lt;div class="bg-gray-200 bg-hover-info"&gt;&lt;/div&gt;</code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Example-->
                        <div class="example">
                            <p>Use custom
                                <code>.bg-hover-state-{color}</code>class to set a darken hover background color:
                            </p>
                            <div class="example-preview">
                                <div class="d-flex">
                                    <div
                                        class="bg-gray-200 bg-hover-state-primary d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0">
                                    </div>
                                    <div
                                        class="bg-gray-200 bg-hover-state-success d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0">
                                    </div>
                                    <div
                                        class="bg-gray-200 bg-hover-state-danger d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0">
                                    </div>
                                    <div
                                        class="bg-gray-200 bg-hover-state-warning d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0">
                                    </div>
                                    <div
                                        class="bg-gray-200 bg-hover-state-dark d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0">
                                    </div>
                                    <div class="bg-gray-200 bg-hover-state-info d-flex flex-center w-75px h-75px"></div>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="bg-gray-200 bg-hover-state-primary"&gt;&lt;/div&gt;
                        &lt;div class="bg-gray-200 bg-hover-state-success"&gt;&lt;/div&gt;
                        &lt;div class="bg-gray-200 bg-hover-state-danger"&gt;&lt;/div&gt;
                        &lt;div class="bg-gray-200 bg-hover-state-warning"&gt;&lt;/div&gt;
                        &lt;div class="bg-gray-200 bg-hover-state-dark"&gt;&lt;/div&gt;
                        &lt;div class="bg-gray-200 bg-hover-state-info"&gt;&lt;/div&gt;
                        </code>
</pre>
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
                            <h3 class="card-label">Custom Border Radius Utilities</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example mb-15">
                            <p>Metronic adds 2 new
                                <code>rounded-sm</code>and
                                <code>rounded-lg</code>border radius classes to enable more sizing options for border
                                radius:
                            </p>
                            <div class="example-preview">
                                <div class="d-flex">
                                    <div
                                        class="bg-gray-200 d-flex flex-center w-100px h-100px mr-5 mb-1 mb-md-0 rounded-sm">
                                    </div>
                                    <div class="bg-gray-200 d-flex flex-center w-100px h-100px mr-5 mb-1 mb-md-0 rounded">
                                    </div>
                                    <div
                                        class="bg-gray-200 d-flex flex-center w-100px h-100px mr-5 mb-1 mb-md-0 rounded-lg">
                                    </div>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="bg-gray-200 rounded-sm"&gt;&lt;/div&gt;
                        &lt;div class="bg-gray-200 rounded"&gt;&lt;/div&gt;
                        &lt;div class="bg-gray-200 rounded-lg"&gt;&lt;/div&gt;</code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Example-->
                        <div class="example">
                            <p>Subtractive border radius classes:</p>
                            <div class="example-preview">
                                <div class="d-flex">
                                    <div
                                        class="bg-gray-200 d-flex flex-center w-100px h-100px mr-5 mb-1 mb-md-0 rounded-lg rounded-top-0">
                                    </div>
                                    <div
                                        class="bg-gray-200 d-flex flex-center w-100px h-100px mr-5 mb-1 mb-md-0 rounded-lg rounded-bottom-0">
                                    </div>
                                    <div
                                        class="bg-gray-200 d-flex flex-center w-100px h-100px mr-5 mb-1 mb-md-0 rounded-lg rounded-left-0">
                                    </div>
                                    <div
                                        class="bg-gray-200 d-flex flex-center w-100px h-100px mr-5 mb-1 mb-md-0 rounded-lg rounded-right-0">
                                    </div>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="bg-gray-200 rounded-lg rounded-top-0"&gt;&lt;/div&gt;
                        &lt;div class="bg-gray-200 rounded-lg rounded-bottom-0"&gt;&lt;/div&gt;
                        &lt;div class="bg-gray-200 rounded-lg rounded-left-0"&gt;&lt;/div&gt;
                        &lt;div class="bg-gray-200 rounded-lg rounded-right-0"&gt;&lt;/div&gt;</code>
</pre>
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
                            <h3 class="card-label">Background Radial Gradient Color</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example">
                            <p>Use
                                <code>bg-radial-gradient-{color}</code>class format to set a background radial gradient
                                color.
                            </p>
                            <div class="example-preview">
                                <div class="d-flex mb-5">
                                    <div
                                        class="bg-radial-gradient-primary d-flex flex-center w-150px h-150px mr-5 mb-1 mb-md-0">
                                    </div>
                                    <div
                                        class="bg-radial-gradient-success d-flex flex-center w-150px h-150px mr-5 mb-1 mb-md-0">
                                    </div>
                                    <div
                                        class="bg-radial-gradient-info d-flex flex-center w-150px h-150px mr-5 mb-1 mb-md-0">
                                    </div>
                                </div>
                                <div class="d-flex mb-5">
                                    <div
                                        class="bg-radial-gradient-danger d-flex flex-center w-150px h-150px mr-5 mb-1 mb-md-0">
                                    </div>
                                    <div
                                        class="bg-radial-gradient-warning d-flex flex-center w-150px h-150px mr-5 mb-1 mb-md-0">
                                    </div>
                                    <div class="bg-radial-gradient-dark d-flex flex-center w-150px h-150px mr-5"></div>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="bg-radial-gradient-primary"&gt;&lt;/div&gt;
                        &lt;div class="bg-radial-gradient-success"&gt;&lt;/div&gt;
                        &lt;div class="bg-radial-gradient-info"&gt;&lt;/div&gt;
                        &lt;div class="bg-radial-gradient-danger"&gt;&lt;/div&gt;
                        &lt;div class="bg-radial-gradient-warning"&gt;&lt;/div&gt;
                        &lt;div class="bg-radial-gradient-dark"&gt;&lt;/div&gt;
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
                            <h3 class="card-label">Background Color With Opacity</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example">
                            <p>Use
                                <code>bg-{color}-o-{opacity}</code>class format to set a background color with opacity level
                                in range
                                <code>1 to 20(0.5 - 1)</code>. For example,
                                <code>bg-primary-o-10</code>sets primary background color with
                                <code>opacity: 0.1</code>.
                            </p>
                            <div class="example-preview">
                                <div class="d-flex mb-5">
                                    <div class="bg-primary-o-10 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                    <div class="bg-primary-o-20 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                    <div class="bg-primary-o-30 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                    <div class="bg-primary-o-40 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                    <div class="bg-primary-o-50 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                    <div class="bg-primary d-flex flex-center w-75px h-75px mr-5"></div>
                                </div>
                                <div class="d-flex mb-5">
                                    <div class="bg-success-o-10 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                    <div class="bg-success-o-20 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                    <div class="bg-success-o-30 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                    <div class="bg-success-o-40 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                    <div class="bg-success-o-50 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                    <div class="bg-success d-flex flex-center w-75px h-75px mr-5"></div>
                                </div>
                                <div class="d-flex mb-5">
                                    <div class="bg-warning-o-10 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                    <div class="bg-warning-o-20 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                    <div class="bg-warning-o-30 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                    <div class="bg-warning-o-40 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                    <div class="bg-warning-o-50 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                    <div class="bg-warning d-flex flex-center w-75px h-75px mr-5"></div>
                                </div>
                                <div class="d-flex">
                                    <div class="bg-danger-o-10 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                    <div class="bg-danger-o-20 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                    <div class="bg-danger-o-30 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                    <div class="bg-danger-o-40 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                    <div class="bg-danger-o-50 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                    <div class="bg-danger d-flex flex-center w-75px h-75px mr-5"></div>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="bg-primary-o-10"&gt;&lt;/div&gt;
                        &lt;div class="bg-primary-o-20"&gt;&lt;/div&gt;
                        &lt;div class="bg-primary-o-30"&gt;&lt;/div&gt;
                        &lt;div class="bg-primary-o-40"&gt;&lt;/div&gt;
                        &lt;div class="bg-primary-o-50"&gt;&lt;/div&gt;
                        &lt;div class="bg-primary"&gt;&lt;/div&gt;

                        &lt;div class="bg-success-o-10"&gt;&lt;/div&gt;
                        &lt;div class="bg-success-o-20"&gt;&lt;/div&gt;
                        &lt;div class="bg-success-o-30"&gt;&lt;/div&gt;
                        &lt;div class="bg-success-o-40"&gt;&lt;/div&gt;
                        &lt;div class="bg-success-o-50"&gt;&lt;/div&gt;
                        &lt;div class="bg-success"&gt;

                        &lt;div class="bg-warning-o-10"&gt;&lt;/div&gt;
                        &lt;div class="bg-warning-o-20"&gt;&lt;/div&gt;
                        &lt;div class="bg-warning-o-30"&gt;&lt;/div&gt;
                        &lt;div class="bg-warning-o-40"&gt;&lt;/div&gt;
                        &lt;div class="bg-warning-o-50"&gt;&lt;/div&gt;
                        &lt;div class="bg-warning"&gt;

                        &lt;div class="bg-danger-o-10"&gt;&lt;/div&gt;
                        &lt;div class="bg-danger-o-20"&gt;&lt;/div&gt;
                        &lt;div class="bg-danger-o-30"&gt;&lt;/div&gt;
                        &lt;div class="bg-danger-o-40"&gt;&lt;/div&gt;
                        &lt;div class="bg-danger-o-50"&gt;&lt;/div&gt;
                        &lt;div class="bg-danger"&gt;&lt;/div&gt;</code>
</pre>
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
                            <h3 class="card-label">Diagonal Background Colors</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example">
                            <p>Use
                                <code>.bg-diagonal</code>,
                                <code>.bg-diagonal-{color}</code>and
                                <code>.bg-diagonal-r-{color}</code>class format to set diagonal background colors.
                            </p>
                            <div class="example-preview">
                                <div class="bg-diagonal bg-diagonal-primary bg-diagonal-r-light rounded h-150px mb-5">
                                </div>
                                <div class="bg-diagonal bg-diagonal-success bg-diagonal-r-danger rounded h-150px mb-5">
                                </div>
                                <div class="bg-diagonal bg-diagonal-info bg-diagonal-r-warning rounded h-150px"></div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="bg-diagonal bg-diagonal-primary bg-diagonal-r-light rounded h-150px"&gt;&lt;/div&gt;
                        &lt;div class="bg-diagonal bg-diagonal-success bg-diagonal-r-danger rounded h-150px"&gt;&lt;/div&gt;
                        &lt;div class="bg-diagonal bg-diagonal-info bg-diagonal-r-warning rounded h-150px"&gt;&lt;/div&gt;
                        </code>
</pre>
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
                            <h3 class="card-label">Predefined Height &amp; Width Responsive Classes</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example mb-15">
                            <ul class="px-5">
                                <li class="py-2">Use
                                    <code>.h-{size}px</code>and
                                    <code>.w-{size}px</code>class format to set fixed height and width in pixels to any
                                    element.
                                </li>
                                <li class="py-2">Use
                                    <code>.min-h-{size}px</code>and
                                    <code>.min-w-{size}px</code>class format to set minimum height and width in pixels to
                                    any element.
                                </li>
                                <li class="py-2">Use
                                    <code>.max-w-{size}px</code>and
                                    <code>.max-w-{size}px</code>class format to set maximum height and width in pixels to
                                    any element.
                                </li>
                                <li class="py-2">Size
                                    <code>{size}</code>accepts values in range
                                    <code>1,2,3,4,5,10,15,20,25,30 ... 95,100,125,150,175,200,225 ... 500,550,600,650
                                        ...1000</code>.
                                </li>
                            </ul>
                            <div class="example-preview">
                                <div class="d-flex">
                                    <div class="bg-gray-100 w-75px h-75px mr-2"></div>
                                    <div class="bg-gray-100 min-w-100px min-h-100px mr-2"></div>
                                    <div class="bg-gray-100 max-w-125px max-h-125px">Lorem Ipsum is simply dummy text of
                                        the printing Lorem Ipsum is simply Lorem Ipsum is simply m Ipsum is simply</div>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="bg-gray-100 w-75px h-75px mr-2"&gt;&lt;/div&gt;
                        &lt;div class="bg-gray-100 min-w-100px min-h-100px mr-2"&gt;&lt;/div&gt;
                        &lt;div class="bg-gray-100 max-w-125px max-h-125px"&gt;
                            Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply  Lorem Ipsum is simply m Ipsum is simply
                        &lt;/div&gt;
                        </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Example-->
                        <div class="example">For responsive variations for each breakpoint
                            <code>sm,md,lg,xl,xxl</code>
                            <ul class="px-5">
                                <li class="py-2">Use
                                    <code>.h-{breakpoint}-{size}px</code>and
                                    <code>.w-{breakpoint}-{size}px</code>class format to set fixed height and width in
                                    pixels to any element.
                                </li>
                                <li class="py-2">Use
                                    <code>.min-h-{breakpoint}-{size}px</code>and
                                    <code>.min-w-{breakpoint}-{size}px</code>class format to set minimum height and width in
                                    pixels to any element.
                                </li>
                                <li class="py-2">Use
                                    <code>.max-w-{breakpoint}-{size}px</code>and
                                    <code>.max-w-{breakpoint}-{size}px</code>class format to set maximum height and width in
                                    pixels to any element.
                                </li>
                            </ul>
                            <div class="example-preview">
                                <div class="d-flex">
                                    <div class="bg-gray-100 w-50px h-50px w-lg-75px h-lg-75px mr-2"></div>
                                    <div class="bg-gray-100 min-w-50px min-h-50px min-w-lg-100px min-h-lg-100px mr-2">
                                    </div>
                                    <div class="bg-gray-100 max-w-75px max-h-75px max-w-125px max-h-125px">Lorem Ipsum is
                                        simply dummy text of the printing Lorem Ipsum is simply Lorem Ipsum is simply m
                                        Ipsum is simply</div>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="bg-gray-100 w-50px h-50px w-lg-75px h-lg-75px mr-2"&gt;&lt;/div&gt;
                        &lt;div class="bg-gray-100 min-w-50px min-h-50px min-w-lg-100px min-h-lg-100px mr-2"&gt;&lt;/div&gt;
                        &lt;div class="bg-gray-100 max-w-75px max-h-75px max-w-125px max-h-125px"&gt;
                            Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply  Lorem Ipsum is simply m Ipsum is simply
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
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Extended Bootstrap Spacing Classes</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Metronic extends
                            <a class="font-weight-bold" href="https://getbootstrap.com/docs/4.5/utilities/spacing/"
                                target="_blank">Bootstrap Spacing Classes</a>to support spacing classes from
                            <code>1</code>to
                            <code>40</code>to provide requied spacing option according to the Metronic design principles.
                        </p>
                        <!--begin::Example-->
                        <div class="example mb-15">
                            <div class="example-preview">
                                <div class="d-flex align-items-center">
                                    <span class="p-5 bg-light mr-2">.p-5</span>
                                    <span class="p-10 bg-light mr-2">.p-10</span>
                                    <span class="p-15 bg-light mr-2">.p-15</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="m-5 p-5 bg-light">.m-5</span>
                                    <span class="m-10 p-5 bg-light">.m-10</span>
                                    <span class="m-15 p-5 bg-light">.m-15</span>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                            &lt;div class="d-flex align-items-center"&gt;
                                &lt;span class="p-5 bg-light mr-2"&gt;
                                    .p-5
                                &lt;/span&gt;
                                &lt;span class="p-10 bg-light mr-2"&gt;
                                    .p-10
                                &lt;/span&gt;
                                &lt;span class="p-15 bg-light mr-2"&gt;
                                    .p-15
                                &lt;/span&gt;
                            &lt;/div&gt;

                            &lt;div class="d-flex align-items-center"&gt;
                                &lt;span class="m-5 p-5 bg-light"&gt;
                                    .m-5
                                &lt;/span&gt;
                                &lt;span class="m-10 p-5 bg-light"&gt;
                                    .m-10
                                &lt;/span&gt;
                                &lt;span class="m-15 p-5 bg-light"&gt;
                                    .m-15
                                &lt;/span&gt;
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
