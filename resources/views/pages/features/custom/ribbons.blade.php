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
                <code>.ribbon</code>element enables ribbon style labels on any block component such as card, alerts and
                container like components.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin: Row-->
        <div class="row mb-7">
            <div class="col-lg-4">
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header ribbon ribbon-right">
                        <div class="ribbon-target bg-primary" style="top: 10px; right: -2px;">Ribbon</div>
                        <h3 class="card-title">Default</h3>
                    </div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet
                        magna! Sed fusce fames tempus litora venenatis ad: Ac aliquet leo hendrerit taciti viverra? Nisl
                        suscipit potenti accumsan quis ipsum purus cursus. Suspendisse ultrices morbi in purus lectus dictum
                        porta; Commodo penatibus nec.</div>
                </div>
                <!--end::Card-->
                <!--begin::Code example-->
                <div class="example example-compact mt-2">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom"&gt;
                 &lt;div class="card-header ribbon ribbon-right"&gt;
                  &lt;div class="ribbon-target bg-primary" style="top: 10px; right: -2px;"&gt;Ribbon&lt;/div&gt;
                  &lt;h3 class="card-title"&gt;
                   Default
                  &lt;/h3&gt;
                 &lt;/div&gt;
                 &lt;div class="card-body"&gt;
                  ...
                 &lt;/div&gt;
                &lt;/div&gt;
    </code>
</pre>
                        </div>
                    </div>
                </div>
                <!--end::Code example-->
            </div>
            <div class="col-lg-4">
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header card-header-right ribbon ribbon-left">
                        <div class="ribbon-target bg-success" style="top: 10px; left: -2px;">Ribbon</div>
                        <h3 class="card-title">Left Aligned</h3>
                    </div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet
                        magna! Sed fusce fames tempus litora venenatis ad: Ac aliquet leo hendrerit taciti viverra? Nisl
                        suscipit potenti accumsan quis ipsum purus cursus. Suspendisse ultrices morbi in purus lectus dictum
                        porta; Commodo penatibus nec.</div>
                </div>
                <!--end::Card-->
                <!--begin::Code example-->
                <div class="example example-compact mt-2">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom"&gt;
                 &lt;div class="card-header card-header-right ribbon ribbon-left"&gt;
                  &lt;div class="ribbon-target bg-success" style="top: 10px; left: -2px;"&gt;Ribbon&lt;/div&gt;
                  &lt;h3 class="card-title"&gt;
                   Left Aligned
                  &lt;/h3&gt;
                 &lt;/div&gt;
                 &lt;div class="card-body"&gt;
                  ...
                 &lt;/div&gt;
                &lt;/div&gt;
    </code>
</pre>
                        </div>
                    </div>
                </div>
                <!--end::Code example-->
            </div>
            <div class="col-lg-4">
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header ribbon ribbon-top">
                        <div class="ribbon-target bg-danger" style="top: -2px; right: 20px;">Ribbon</div>
                        <h3 class="card-title">Custom Aligment</h3>
                    </div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet
                        magna! Sed fusce fames tempus litora venenatis ad: Ac aliquet leo hendrerit taciti viverra? Nisl
                        suscipit potenti accumsan quis ipsum purus cursus. Suspendisse ultrices morbi in purus lectus dictum
                        porta; Commodo penatibus nec.</div>
                </div>
                <!--end::Card-->
                <!--begin::Code example-->
                <div class="example example-compact mt-2">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom"&gt;
                 &lt;div class="card-header ribbon ribbon-top"&gt;
                  &lt;div class="ribbon-target bg-danger" style="top: -2px; right: 20px;"&gt;Ribbon&lt;/div&gt;
                  &lt;h3 class="card-title"&gt;
                   Custom Aligment
                  &lt;/h3&gt;
                 &lt;/div&gt;
                 &lt;div class="card-body"&gt;
                  ...
                 &lt;/div&gt;
                &lt;/div&gt;
    </code>
</pre>
                        </div>
                    </div>
                </div>
                <!--end::Code example-->
            </div>
        </div>
        <!--end: Row-->
        <!--begin: Row-->
        <div class="row mb-7">
            <div class="col-lg-4">
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header ribbon ribbon-top ribbon-ver">
                        <div class="ribbon-target bg-danger" style="top: -2px; right: 20px;">OK!</div>
                        <h3 class="card-title">Vertical</h3>
                    </div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet
                        magna! Sed fusce fames tempus litora venenatis ad: Ac aliquet leo hendrerit taciti viverra? Nisl
                        suscipit potenti accumsan quis ipsum purus cursus. Suspendisse ultrices morbi in purus lectus dictum
                        porta; Commodo penatibus nec.</div>
                </div>
                <!--end::Card-->
                <!--begin::Code example-->
                <div class="example example-compact mt-2">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom"&gt;
                 &lt;div class="card-header ribbon ribbon-top ribbon-ver"&gt;
                  &lt;div class="ribbon-target bg-danger" style="top: -2px; right: 20px;"&gt;
                   OK!
                  &lt;/div&gt;
                  &lt;h3 class="card-title"&gt;
                   Vertical
                  &lt;/h3&gt;
                 &lt;/div&gt;
                 &lt;div class="card-body"&gt;
                  ...
                 &lt;/div&gt;
                &lt;/div&gt;
    </code>
</pre>
                        </div>
                    </div>
                </div>
                <!--end::Code example-->
            </div>
            <div class="col-lg-4">
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header ribbon ribbon-top ribbon-ver">
                        <div class="ribbon-target bg-success" style="top: -2px; right: 20px;">
                            <i class="fa fa-star text-white"></i>
                        </div>
                        <h3 class="card-title">With Icon</h3>
                    </div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet
                        magna! Sed fusce fames tempus litora venenatis ad: Ac aliquet leo hendrerit taciti viverra? Nisl
                        suscipit potenti accumsan quis ipsum purus cursus. Suspendisse ultrices morbi in purus lectus dictum
                        porta; Commodo penatibus nec.</div>
                </div>
                <!--end::Card-->
                <!--begin::Code example-->
                <div class="example example-compact mt-2">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom"&gt;
                 &lt;div class="card-header ribbon ribbon-top ribbon-ver"&gt;
                  &lt;div class="ribbon-target bg-success" style="top: -2px; right: 20px;"&gt;
                   &lt;i class="fa fa-star text-white"&gt;&lt;/i&gt;
                  &lt;/div&gt;
                  &lt;h3 class="card-title"&gt;
                   With Icon
                  &lt;/h3&gt;
                 &lt;/div&gt;
                 &lt;div class="card-body"&gt;
                  ...
                 &lt;/div&gt;
                &lt;/div&gt;
    </code>
</pre>
                        </div>
                    </div>
                </div>
                <!--end::Code example-->
            </div>
            <div class="col-lg-4">
                <!--begin::Card-->
                <div class="card card-custom card-fit">
                    <div class="card-header ribbon ribbon-top ribbon-ver">
                        <div class="ribbon-target bg-warning" style="top: -2px; right: 20px;">
                            <i class="fa fa-star text-white"></i>
                        </div>
                        <h3 class="card-title">Vertical Ribbons</h3>
                    </div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet
                        magna! Sed fusce fames tempus litora venenatis ad: Ac aliquet leo hendrerit taciti viverra? Nisl
                        suscipit potenti accumsan quis ipsum purus cursus. Suspendisse ultrices morbi in purus lectus dictum
                        porta; Commodo penatibus nec.</div>
                </div>
                <!--end::Card-->
                <!--begin::Code example-->
                <div class="example example-compact mt-2">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom card-fit gutter-b"&gt;
                 &lt;div class="card-header ribbon ribbon-top ribbon-ver"&gt;
                  &lt;div class="ribbon-target bg-warning" style="top: -2px; right: 20px;"&gt;
                   &lt;i class="fa fa-star"&gt;&lt;/i&gt;
                  &lt;/div&gt;
                  &lt;h3 class="card-title"&gt;
                   Vertical Ribbons
                  &lt;/h3&gt;
                 &lt;/div&gt;
                 &lt;div class="card-body"&gt;
                  ...
                 &lt;/div&gt;
                &lt;/div&gt;
    </code>
</pre>
                        </div>
                    </div>
                </div>
                <!--end::Code example-->
            </div>
        </div>
        <!--end: Row-->
        <!--begin: Row-->
        <div class="row">
            <div class="col-lg-4">
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header card-header-right ribbon ribbon-clip ribbon-left">
                        <div class="ribbon-target" style="top: 12px;">
                            <span class="ribbon-inner bg-warning"></span>Ribbon
                        </div>
                        <h3 class="card-title">Clip Style</h3>
                    </div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet
                        magna! Sed fusce fames tempus litora venenatis ad: Ac aliquet leo hendrerit taciti viverra? Nisl
                        suscipit potenti accumsan quis ipsum purus cursus. Suspendisse ultrices morbi in purus lectus dictum
                        porta; Commodo penatibus nec.</div>
                </div>
                <!--end::Card-->
                <!--begin::Code example-->
                <div class="example example-compact">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom"&gt;
                 &lt;div class="card-header card-header-right ribbon ribbon-clip ribbon-left"&gt;
                  &lt;div class="ribbon-target" style="top: 12px;"&gt;
                   &lt;span class="ribbon-inner bg-warning"&gt;&lt;/span&gt;Ribbon
                  &lt;/div&gt;
                  &lt;h3 class="card-title"&gt;
                   Clip Style
                  &lt;/h3&gt;
                 &lt;/div&gt;
                 &lt;div class="card-body"&gt;
                  ...
                 &lt;/div&gt;
                &lt;/div&gt;
    </code>
</pre>
                        </div>
                    </div>
                </div>
                <!--end::Code example-->
            </div>
            <div class="col-lg-4">
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header ribbon ribbon-clip ribbon-right">
                        <div class="ribbon-target" style="top: 15px; height: 45px;">
                            <span class="ribbon-inner bg-success"></span>
                            <i class="fa fa-star text-white"></i>
                        </div>
                        <h3 class="card-title">Clip Style</h3>
                    </div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet
                        magna! Sed fusce fames tempus litora venenatis ad: Ac aliquet leo hendrerit taciti viverra? Nisl
                        suscipit potenti accumsan quis ipsum purus cursus. Suspendisse ultrices morbi in purus lectus dictum
                        porta; Commodo penatibus nec.</div>
                </div>
                <!--end::Card-->
                <!--begin::Code example-->
                <div class="example example-compact mt-2">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom"&gt;
                 &lt;div class="card-header ribbon ribbon-clip ribbon-right"&gt;
                  &lt;div class="ribbon-target" style="top: 15px; height: 45px;"&gt;
                   &lt;span class="ribbon-inner bg-success"&gt;&lt;/span&gt;&lt;i class="fa fa-star"&gt;&lt;/i&gt;
                  &lt;/div&gt;
                  &lt;h3 class="card-title"&gt;
                   Clip Style
                  &lt;/h3&gt;
                 &lt;/div&gt;
                 &lt;div class="card-body"&gt;
                  ...
                 &lt;/div&gt;
                &lt;/div&gt;
    </code>
</pre>
                        </div>
                    </div>
                </div>
                <!--end::Code example-->
            </div>
            <div class="col-lg-4">
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header ribbon ribbon-clip ribbon-right">
                        <div class="ribbon-target" style="top: 12px;">
                            <span class="ribbon-inner bg-warning"></span>Ribbon
                        </div>
                        <h3 class="card-title">Clip Style</h3>
                    </div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet
                        magna! Sed fusce fames tempus litora venenatis ad: Ac aliquet leo hendrerit taciti viverra? Nisl
                        suscipit potenti accumsan quis ipsum purus cursus. Suspendisse ultrices morbi in purus lectus dictum
                        porta; Commodo penatibus nec.</div>
                </div>
                <!--end::Card-->
                <!--begin::Code example-->
                <div class="example example-compact mt-2">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom"&gt;
                 &lt;div class="card-header ribbon ribbon-clip ribbon-right"&gt;
                  &lt;div class="ribbon-target" style="top: 12px;"&gt;
                   &lt;span class="ribbon-inner bg-warning"&gt;&lt;/span&gt;Ribbon
                  &lt;/div&gt;
                  &lt;h3 class="card-title"&gt;
                   Clip Style
                  &lt;/h3&gt;
                 &lt;/div&gt;
                 &lt;div class="card-body"&gt;
                  ...
                 &lt;/div&gt;
                &lt;/div&gt;
    </code>
</pre>
                        </div>
                    </div>
                </div>
                <!--end::Code example-->
            </div>
        </div>
        <!--end: Row-->
    </div>
    <!--end::Container-->
@endsection
