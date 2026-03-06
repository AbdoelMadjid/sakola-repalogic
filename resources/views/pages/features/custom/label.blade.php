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
            <div class="alert-text">Custom Label component for count and labeling purposes.</div>
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
                                <span class="label mr-2">1</span>
                                <span class="label mr-2">2</span>
                                <span class="label mr-2">5</span>
                                <span class="label mr-2">9</span>
                                <span class="label mr-2">10</span>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">&lt;span class="label"&gt;1&lt;/span&gt;</code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Rounded label examples.</p>
                            <div class="example-preview">
                                <span class="label label-rounded mr-2">1</span>
                                <span class="label label-rounded mr-2">2</span>
                                <span class="label label-rounded mr-2">5</span>
                                <span class="label label-rounded mr-2">9</span>
                                <span class="label label-rounded mr-2">10</span>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">&lt;span class="label label-rounded"&gt;10&lt;/span&gt;</code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Square label examples.</p>
                            <div class="example-preview">
                                <span class="label label-square mr-2">1</span>
                                <span class="label label-square mr-2">2</span>
                                <span class="label label-square mr-2">5</span>
                                <span class="label label-square mr-2">9</span>
                                <span class="label label-square mr-2">10</span>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">&lt;span class="label label-square"&gt;10&lt;/span&gt;</code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Inline label examples.</p>
                            <div class="example-preview">
                                <span class="label label-inline mr-2">Pending</span>
                                <span class="label label-inline mr-2">Done</span>
                                <span class="label label-inline mr-2">Sent</span>
                                <span class="label label-inline mr-2">In process</span>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">&lt;span class="label label-inline"&gt;Pending&lt;/span&gt;</code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Pill label examples.</p>
                            <div class="example-preview">
                                <span class="label label-pill label-inline mr-2">Pending</span>
                                <span class="label label-pill label-inline mr-2">Done</span>
                                <span class="label label-pill label-inline mr-2">Sent</span>
                                <span class="label label-pill label-inline mr-2">In process</span>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">&lt;span class="label label-pill label-inline"&gt;10&lt;/span&gt;</code>
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
                            <h3 class="card-label">Contextual Examples</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Solid style</p>
                            <div class="example-preview">
                                <span class="label label-rounded label-success mr-2">3</span>
                                <span class="label label-rounded label-primary mr-2">12</span>
                                <span class="label label-danger mr-2">5</span>
                                <span class="label label-warning mr-2">11</span>
                                <span class="label label-danger label-pill label-inline mr-2">New</span>
                                <span class="label label-warning label-pill label-inline mr-2">Pending</span>
                                <span class="label label-dark label-inline mr-2">Done</span>
                                <span class="label label-info label-inline mr-2">In process</span>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;span class="label label-rounded label-success mr-2"&gt;3&lt;/span&gt;
                        &lt;span class="label label-rounded label-primary mr-2"&gt;12&lt;/span&gt;
                        &lt;span class="label label-danger mr-2"&gt;5&lt;/span&gt;
                        &lt;span class="label label-warning mr-2"&gt;11&lt;/span&gt;
                        &lt;span class="label label-danger label-pill label-inline mr-2"&gt;New&lt;/span&gt;
                        &lt;span class="label label-warning label-pill label-inline mr-2"&gt;Pending&lt;/span&gt;
                        &lt;span class="label label-dark label-inline mr-2"&gt;Done&lt;/span&gt;
                        &lt;span class="label label-info label-inline mr-2"&gt;In process&lt;/span&gt;
                        </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Outline style</p>
                            <div class="example-preview">
                                <span class="label label-rounded label-outline-success mr-2">3</span>
                                <span class="label label-rounded label-outline-primary mr-2">12</span>
                                <span class="label label-outline-danger mr-2">5</span>
                                <span class="label label-outline-warning mr-2">11</span>
                                <span class="label label-outline-danger label-pill label-inline mr-2">New</span>
                                <span class="label label-outline-warning label-pill label-inline mr-2">Pending</span>
                                <span class="label label-outline-dark label-inline mr-2">Done</span>
                                <span class="label label-outline-info label-inline mr-2">In process</span>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;span class="label label-rounded label-success mr-2"&gt;3&lt;/span&gt;
                        &lt;span class="label label-rounded label-primary mr-2"&gt;12&lt;/span&gt;
                        &lt;span class="label label-danger mr-2"&gt;5&lt;/span&gt;
                        &lt;span class="label label-warning mr-2"&gt;11&lt;/span&gt;
                        &lt;span class="label label-danger label-pill label-inline mr-2"&gt;New&lt;/span&gt;
                        &lt;span class="label label-warning label-pill label-inline mr-2"&gt;Pending&lt;/span&gt;
                        &lt;span class="label label-dark label-inline mr-2"&gt;Done&lt;/span&gt;
                        &lt;span class="label label-info label-inline mr-2"&gt;In process&lt;/span&gt;
                        </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Light style</p>
                            <div class="example-preview">
                                <span class="label label-light-success label-rounded mr-2">3</span>
                                <span class="label label-light-primary label-rounded mr-2">12</span>
                                <span class="label label-light-danger mr-2">5</span>
                                <span class="label label-light-warning mr-2">11</span>
                                <span class="label label-light-danger label-pill label-inline mr-2">New</span>
                                <span class="label label-light-warning label-pill label-inline mr-2">Pending</span>
                                <span class="label label-light-dark label-inline mr-2">Done</span>
                                <span class="label label-light-info label-inline mr-2">In process</span>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;span class="label label-rounded label-success mr-2"&gt;3&lt;/span&gt;
                        &lt;span class="label label-rounded label-primary mr-2"&gt;12&lt;/span&gt;
                        &lt;span class="label label-danger mr-2"&gt;5&lt;/span&gt;
                        &lt;span class="label label-warning mr-2"&gt;11&lt;/span&gt;
                        &lt;span class="label label-danger label-pill label-inline mr-2"&gt;New&lt;/span&gt;
                        &lt;span class="label label-warning label-pill label-inline mr-2"&gt;Pending&lt;/span&gt;
                        &lt;span class="label label-dark label-inline mr-2"&gt;Done&lt;/span&gt;
                        &lt;span class="label label-info label-inline mr-2"&gt;In process&lt;/span&gt;
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
                            <h3 class="card-label">Font Weight</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Set font weight using
                                <code>.font-weight-{lighter|light|normal|bold|bolder|boldest}</code>class.
                            </p>
                            <div class="example-preview">
                                <span class="label label-primary label-inline font-weight-lighter mr-2">Lighter</span>
                                <span class="label label-primary label-inline font-weight-light mr-2">Light</span>
                                <span class="label label-primary label-inline font-weight-normal mr-2">Normal</span>
                                <span class="label label-primary label-inline font-weight-bold mr-2">Bold</span>
                                <span class="label label-primary label-inline font-weight-bolder mr-2">Bolder</span>
                                <span class="label label-primary label-inline font-weight-boldest mr-2">Boldest</span>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;span class="label label-primary label-inline font-weight-lighter mr-2"&gt;Lighter&lt;/span&gt;
                        &lt;span class="label label-primary label-inline font-weight-light mr-2"&gt;Light&lt;/span&gt;
                        &lt;span class="label label-primary label-inline font-weight-normal mr-2"&gt;Normal&lt;/span&gt;
                        &lt;span class="label label-primary label-inline font-weight-bold mr-2"&gt;Bold&lt;/span&gt;
                        &lt;span class="label label-primary label-inline font-weight-bolder mr-2"&gt;Bolder&lt;/span&gt;
                        &lt;span class="label label-primary label-inline font-weight-boldest mr-2"&gt;Boldest&lt;/span&gt;
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
                            <h3 class="card-label">Sizes</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Label size options</p>
                            <div class="example-preview">
                                <div class="pt-4">
                                    <span class="label label-sm label-rounded label-success mr-2">3</span>
                                    <span class="label label-sm label-rounded label-primary mr-2">12</span>
                                    <span class="label label-sm label-danger mr-2">5</span>
                                    <span class="label label-sm label-warning mr-2">11</span>
                                    <span class="label label-sm label-danger label-pill label-inline mr-2">New</span>
                                    <span class="label label-sm label-warning label-pill label-inline mr-2">Pending</span>
                                    <span class="label label-sm label-dark label-inline mr-2">Done</span>
                                    <span class="label label-sm label-info label-inline mr-2">In process</span>
                                </div>
                                <div class="pt-4">
                                    <span class="label label-rounded label-success mr-2">3</span>
                                    <span class="label label-rounded label-primary mr-2">12</span>
                                    <span class="label label-danger mr-2">5</span>
                                    <span class="label label-warning mr-2">11</span>
                                    <span class="label label-danger label-pill label-inline mr-2">New</span>
                                    <span class="label label-warning label-pill label-inline mr-2">Pending</span>
                                    <span class="label label-dark label-inline mr-2">Done</span>
                                    <span class="label label-info label-inline mr-2">In process</span>
                                </div>
                                <div class="pt-4">
                                    <span class="label label-lg label-rounded label-success mr-2">3</span>
                                    <span class="label label-lg label-rounded label-primary mr-2">12</span>
                                    <span class="label label-lg label-danger mr-2">5</span>
                                    <span class="label label-lg label-warning mr-2">11</span>
                                    <span class="label label-lg label-danger label-pill label-inline mr-2">New</span>
                                    <span class="label label-lg label-warning label-pill label-inline mr-2">Pending</span>
                                    <span class="label label-lg label-dark label-inline mr-2">Done</span>
                                    <span class="label label-lg label-info label-inline mr-2">In process</span>
                                </div>
                                <div class="py-4">
                                    <span class="label label-xl label-rounded label-success mr-2">3</span>
                                    <span class="label label-xl label-rounded label-primary mr-2">12</span>
                                    <span class="label label-xl label-danger mr-2">5</span>
                                    <span class="label label-xl label-warning mr-2">11</span>
                                    <span class="label label-xl label-danger label-pill label-inline mr-2">New</span>
                                    <span class="label label-xl label-warning label-pill label-inline mr-2">Pending</span>
                                    <span class="label label-xl label-dark label-inline mr-2">Done</span>
                                    <span class="label label-xl label-info label-inline mr-2">In process</span>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">&lt;span class="label label-sm label-rounded label-success"&gt;3&lt;/span&gt;
&lt;span class="label label-md font-weight-bold label-rounded label-success"&gt;3&lt;/span&gt;
&lt;span class="label label-lg font-weight-bolder label-rounded label-success"&gt;3&lt;/span&gt;
&lt;span class="label label-xl font-weight-boldest label-rounded label-success"&gt;3&lt;/span&gt;</code>
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
                            <h3 class="card-label">Dot Style</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Font weight options</p>
                            <div class="example-preview">
                                <div>
                                    <span class="label label-sm label-dot label-success mr-2"></span>
                                    <span class="label label-sm label-dot label-primary mr-2"></span>
                                    <span class="label label-sm label-dot label-danger mr-2"></span>
                                    <span class="label label-sm label-dot label-warning mr-2"></span>
                                    <span class="label label-sm label-dot label-dark mr-2"></span>
                                    <span class="label label-sm label-dot label-info mr-2"></span>
                                </div>
                                <div class="pt-4">
                                    <span class="label label-dot label-success mr-2"></span>
                                    <span class="label label-dot label-primary mr-2"></span>
                                    <span class="label label-dot label-danger mr-2"></span>
                                    <span class="label label-dot label-warning mr-2"></span>
                                    <span class="label label-dot label-dark mr-2"></span>
                                    <span class="label label-dot label-info mr-2"></span>
                                </div>
                                <div class="pt-4">
                                    <span class="label label-lg label-dot label-success mr-2"></span>
                                    <span class="label label-lg label-dot label-primary mr-2"></span>
                                    <span class="label label-lg label-dot label-danger mr-2"></span>
                                    <span class="label label-lg label-dot label-warning mr-2"></span>
                                    <span class="label label-lg label-dot label-dark mr-2"></span>
                                    <span class="label label-lg label-dot label-info mr-2"></span>
                                </div>
                                <div class="pt-4">
                                    <span class="label label-xl label-dot label-success mr-2"></span>
                                    <span class="label label-xl label-dot label-primary mr-2"></span>
                                    <span class="label label-xl label-dot label-danger mr-2"></span>
                                    <span class="label label-xl label-dot label-warning mr-2"></span>
                                    <span class="label label-xl label-dot label-dark mr-2"></span>
                                    <span class="label label-xl label-dot label-info mr-2"></span>
                                </div>
                                <div class="pt-4">
                                    <p>Dot label style
                                        <span class="label label-sm label-dot label-success"></span>example
                                    </p>
                                    <p>Dot label style
                                        <span class="label label-dot label-primary"></span>example
                                    </p>
                                    <p>Dot label style
                                        <span class="label label-lg label-dot label-danger"></span>example
                                    </p>
                                    <p>Dot label style
                                        <span class="label label-xl label-dot label-warning"></span>example
                                    </p>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">&lt;span class="label label-dot label-success"&gt;&lt;/span&gt;

Dot label style &lt;span class="label label-dot label-success"&gt;&lt;/span&gt; example</code>
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
                            <h3 class="card-label">Using In Buttons</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Font weight options</p>
                            <div class="example-preview">
                                <p>
                                    <button class="btn font-weight-bold btn-primary mr-2">Button label
                                        <span class="label label-sm label-white ml-2">5</span></button>
                                    <button class="btn font-weight-bold btn-light-success mr-2">Button label
                                        <span class="label label-danger ml-2">5</span></button>
                                    <button class="btn font-weight-bold btn-lg btn-outline-danger">Button label
                                        <span class="label label-lg label-warning ml-2">5</span></button>
                                </p>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">&lt;button class="btn font-weight-bold btn-primary mr-2"&gt;Button label &lt;span class="label label-sm label-white ml-2"&gt;5&lt;/span&gt;&lt;/button&gt;
&lt;button class="btn font-weight-bold btn-light-success mr-2"&gt;Button label &lt;span class="label label-danger ml-2"&gt;5&lt;/span&gt;&lt;/button&gt;
&lt;button class="btn font-weight-bold btn-lg btn-outline-danger"&gt;Button label &lt;span class="label label-lg label-warning ml-2"&gt;5&lt;/span&gt;&lt;/button&gt;</code>
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
