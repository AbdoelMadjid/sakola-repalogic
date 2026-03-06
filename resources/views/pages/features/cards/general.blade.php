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
                Card
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
            <div class="alert-text">Metronic extends
                <code>Bootstrap Card</code>with
                <code>.card-custom</code>class to provide a wide range of options for multi-purpose cards.
                <br />For more info please visit Bootstrap Card's
                <a class="font-weight-bold" href="https://getbootstrap.com/docs/4.5/components/card/"
                    target="_blank">Documentation</a>.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Row-->
        <div class="row">
            <div class="col-lg-6">
                <!--begin::Example-->
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Basic Card
                                <small>sub title</small>
                            </h3>
                        </div>
                    </div>
                    <div class="card-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                        a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                        unknown printer took a galley of type and scrambled.</div>
                </div>
                <!--end::Card-->
                <!--begin::Code example-->
                <div class="example example-compact mt-2 gutter-b">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom gutter-b"&gt;
                 &lt;div class="card-header"&gt;
                  &lt;div class="card-title"&gt;
                   &lt;h3 class="card-label"&gt;
                    Basic Card
                    &lt;small&gt;sub title&lt;/small&gt;
                   &lt;/h3&gt;
                  &lt;/div&gt;
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
                <!--end::Example-->
                <!--begin::Example-->
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="card-icon">
                                <i class="flaticon2-line-chart text-primary"></i>
                            </span>
                            <h3 class="card-label">Card Icon
                                <small>sub title</small>
                            </h3>
                        </div>
                    </div>
                    <div class="card-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                        a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                        unknown printer took a galley of type and scrambled.</div>
                </div>
                <!--end::Card-->
                <!--begin::Code example-->
                <div class="example example-compact mt-2 gutter-b">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom gutter-b"&gt;
                 &lt;div class="card-header"&gt;
                  &lt;div class="card-title"&gt;
                   &lt;h3 class="card-label"&gt;
                    Basic Card
                    &lt;small&gt;sub title&lt;/small&gt;
                   &lt;/h3&gt;
                  &lt;/div&gt;
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
                <!--end::Example-->
                <!--begin::Example-->
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="card-icon">
                                <i class="flaticon2-chat-1 text-primary"></i>
                            </span>
                            <h3 class="card-label">Card Toolbar
                                <small>sub title</small>
                            </h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-sm btn-icon btn-light-danger mr-2">
                                <i class="flaticon2-drop"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-icon btn-light-success mr-2">
                                <i class="flaticon2-gear"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-icon btn-light-primary">
                                <i class="flaticon2-bell-2"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                        a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                        unknown printer took a galley of type and scrambled.</div>
                </div>
                <!--end::Card-->
                <!--begin::Code example-->
                <div class="example example-compact mt-2 gutter-b">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom gutter-b"&gt;
                 &lt;div class="card-header"&gt;
                  &lt;div class="card-title"&gt;
                   &lt;h3 class="card-label"&gt;
                    Basic Card
                    &lt;small&gt;sub title&lt;/small&gt;
                   &lt;/h3&gt;
                  &lt;/div&gt;
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
                <!--end::Example-->
                <!--begin::Example-->
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="card-icon">
                                <i class="flaticon-graphic-2 text-primary"></i>
                            </span>
                            <h3 class="card-label">Dropdown Example
                                <small>sub title</small>
                            </h3>
                        </div>
                        <div class="card-toolbar">
                            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions"
                                data-placement="left">
                                <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ki ki-bold-more-hor"></i>
                                </a>
                                <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                    <!--begin::Navigation-->
                                    <ul class="navi navi-hover">
                                        <li class="navi-header font-weight-bold py-4">
                                            <span class="font-size-lg">Choose Label:</span>
                                            <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip"
                                                data-placement="right" title="Click to learn more..."></i>
                                        </li>
                                        <li class="navi-separator mb-3 opacity-70"></li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-text">
                                                    <span
                                                        class="label label-xl label-inline label-light-success">Customer</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-text">
                                                    <span
                                                        class="label label-xl label-inline label-light-danger">Partner</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-text">
                                                    <span
                                                        class="label label-xl label-inline label-light-warning">Suplier</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-text">
                                                    <span
                                                        class="label label-xl label-inline label-light-primary">Member</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-text">
                                                    <span class="label label-xl label-inline label-light-dark">Staff</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="navi-separator mt-3 opacity-70"></li>
                                        <li class="navi-footer py-4">
                                            <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                <i class="ki ki-plus icon-sm"></i>Add new</a>
                                        </li>
                                    </ul>
                                    <!--end::Navigation-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                        a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                        unknown printer took a galley of type and scrambled.</div>
                </div>
                <!--end::Card-->
                <!--begin::Code example-->
                <div class="example example-compact mt-2 gutter-b">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom gutter-b"&gt;
                 &lt;div class="card-header"&gt;
                  &lt;div class="card-title"&gt;
                   &lt;h3 class="card-label"&gt;
                    Basic Card
                    &lt;small&gt;sub title&lt;/small&gt;
                   &lt;/h3&gt;
                  &lt;/div&gt;
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
                <!--end::Example-->
                <!--begin::Example-->
                <div class="bg-white rounded p-10">
                    <!--begin::Card-->
                    <div class="card card-custom card-border">
                        <div class="card-header">
                            <div class="card-title">
                                <span class="card-icon">
                                    <i class="flaticon2-mail text-primary"></i>
                                </span>
                                <h3 class="card-label">Bordered Style
                                    <small>sub title</small>
                                </h3>
                            </div>
                            <div class="card-toolbar">
                                <a href="#" class="btn btn-xs btn-icon btn-danger mr-2">
                                    <i class="flaticon2-drop"></i>
                                </a>
                                <a href="#" class="btn btn-xs btn-icon btn-success mr-2">
                                    <i class="flaticon2-gear"></i>
                                </a>
                                <a href="#" class="btn btn-xs btn-icon btn-primary">
                                    <i class="flaticon2-bell-2"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                            1500s, when an unknown printer took a galley of type and scrambled.</div>
                    </div>
                    <!--end::Card-->
                </div>
                <!--begin::Code example-->
                <div class="example example-compact mt-2 gutter-b">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom gutter-b"&gt;
                 &lt;div class="card-header"&gt;
                  &lt;div class="card-title"&gt;
                   &lt;h3 class="card-label"&gt;
                    Basic Card
                    &lt;small&gt;sub title&lt;/small&gt;
                   &lt;/h3&gt;
                  &lt;/div&gt;
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
                <!--end::Example-->
                <!--begin::Example-->
                <div class="bg-white rounded p-10">
                    <!--begin::Card-->
                    <div class="card card-custom card-fit card-border">
                        <div class="card-header">
                            <div class="card-title">
                                <span class="card-icon">
                                    <i class="flaticon2-pin text-primary"></i>
                                </span>
                                <h3 class="card-label">Semi-bordered Style
                                    <small>sub title</small>
                                </h3>
                            </div>
                            <div class="card-toolbar">
                                <a href="#" class="btn btn-sm btn-primary font-weight-bold">
                                    <i class="flaticon2-gear"></i>Settings</a>
                            </div>
                        </div>
                        <div class="card-body pt-2">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the
                            printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                            since the 1500s, when an unknown printer took a galley of type and scrambled.</div>
                    </div>
                    <!--end::Card-->
                </div>
                <!--begin::Code example-->
                <div class="example example-compact mt-2 gutter-b">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom gutter-b"&gt;
                 &lt;div class="card-header"&gt;
                  &lt;div class="card-title"&gt;
                   &lt;h3 class="card-label"&gt;
                    Basic Card
                    &lt;small&gt;sub title&lt;/small&gt;
                   &lt;/h3&gt;
                  &lt;/div&gt;
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
                <!--end::Example-->
            </div>
            <div class="col-lg-6">
                <!--begin::Example-->
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="card-icon">
                                <i class="flaticon2-chat-1 text-primary"></i>
                            </span>
                            <h3 class="card-label">Card Footer
                                <small>sub title</small>
                            </h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-sm btn-success font-weight-bold">
                                <i class="flaticon2-cube"></i>Reports</a>
                        </div>
                    </div>
                    <div class="card-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                        a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                        unknown printer took a galley of type and scrambled.</div>
                    <div class="card-footer d-flex justify-content-between">
                        <a href="#" class="btn btn-light-primary font-weight-bold">Manage</a>
                        <a href="#" class="btn btn-outline-secondary font-weight-bold">Learn more</a>
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Code example-->
                <div class="example example-compact mt-2 gutter-b">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom"&gt;
                 &lt;div class="card-header"&gt;
                  &lt;div class="card-title"&gt;
                            &lt;span class="card-icon"&gt;
                                &lt;i class="flaticon2-chat-1 text-primary"&gt;&lt;/i&gt;
                            &lt;/span&gt;
                   &lt;h3 class="card-label"&gt;
                    Card Footer
                    &lt;small&gt;sub title&lt;/small&gt;
                   &lt;/h3&gt;
                  &lt;/div&gt;
                        &lt;div class="card-toolbar"&gt;
                            &lt;a href="#" class="btn btn-sm btn-success font-weight-bold"&gt;
                                &lt;i class="flaticon2-cube"&gt;&lt;/i&gt; Reports
                            &lt;/a&gt;
                        &lt;/div&gt;
                 &lt;/div&gt;
                 &lt;div class="card-body"&gt;
                  ...
                 &lt;/div&gt;
                    &lt;div class="card-footer d-flex justify-content-between"&gt;
                        &lt;a href="#" class="btn btn-light-primary font-weight-bold"&gt;Manage&lt;/a&gt;
                        &lt;a href="#" class="btn btn-outline-secondary font-weight-bold"&gt;Learn more&lt;/a&gt;
                 &lt;/div&gt;
                &lt;/div&gt;
                </code>
</pre>
                        </div>
                    </div>
                </div>
                <!--end::Code example-->
                <!--end::Example-->
                <!--begin::Example-->
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="card-icon">
                                <i class="flaticon2-chat-1 text-primary"></i>
                            </span>
                            <h3 class="card-label">Scrollable Content</h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-sm btn-light-primary font-weight-bold">
                                <i class="flaticon2-cube"></i>Settings</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div data-scroll="true" data-height="200">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                1500s, when an unknown printer took a galley of type and scrambled.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                1500s, when an unknown printer took a galley of type and scrambled.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                1500s, when an unknown printer took a galley of type and scrambled.</p>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <a href="#" class="btn btn-light-primary font-weight-bold">Manage</a>
                        <a href="#" class="btn btn-outline-secondary font-weight-bold">Learn more</a>
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Code example-->
                <div class="example example-compact mt-2 gutter-b">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom"&gt;
                 &lt;div class="card-header"&gt;
                  &lt;div class="card-title"&gt;
                            &lt;span class="card-icon"&gt;
                                &lt;i class="flaticon2-chat-1 text-primary"&gt;&lt;/i&gt;
                            &lt;/span&gt;
                   &lt;h3 class="card-label"&gt;
                    Scrollable Content
                   &lt;/h3&gt;
                  &lt;/div&gt;
                        &lt;div class="card-toolbar"&gt;
                            &lt;a href="#" class="btn btn-sm btn-light-primary font-weight-bold"&gt;
                                &lt;i class="flaticon2-cube"&gt;&lt;/i&gt; Settings
                            &lt;/a&gt;
                        &lt;/div&gt;
                 &lt;/div&gt;
                 &lt;div class="card-body"&gt;
                        &lt;div data-scroll="true" data-height="200"&gt;
                      ....
                        &lt;/div&gt;
                 &lt;/div&gt;
                    &lt;div class="card-footer d-flex justify-content-between"&gt;
                        &lt;a href="#" class="btn btn-light-primary font-weight-bold"&gt;Manage&lt;/a&gt;
                        &lt;a href="#" class="btn btn-outline-secondary font-weight-bold"&gt;Learn more&lt;/a&gt;
                 &lt;/div&gt;
                &lt;/div&gt;
                </code>
</pre>
                        </div>
                    </div>
                </div>
                <!--end::Code example-->
                <!--end::Example-->
                <!--begin::Example-->
                <!--begin::Card-->
                <div class="card card-custom bg-primary">
                    <div class="card-header border-0">
                        <div class="card-title">
                            <span class="card-icon">
                                <i class="flaticon2-chat-1 text-white"></i>
                            </span>
                            <h3 class="card-label text-white">Primary Background Color</h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-sm btn-white">
                                <i class="flaticon2-cube"></i>Settings</a>
                        </div>
                    </div>
                    <div class="separator separator-solid separator-white opacity-20"></div>
                    <div class="card-body text-white">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                        unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s, when an unknown printer took a galley of type and scrambled.</div>
                </div>
                <!--end::Card-->
                <!--begin::Code example-->
                <div class="example example-compact mt-2 gutter-b">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom bg-primary"&gt;
                 &lt;div class="card-header border-0"&gt;
                  &lt;div class="card-title"&gt;
                            &lt;span class="card-icon"&gt;
                                &lt;i class="flaticon2-chat-1 text-white"&gt;&lt;/i&gt;
                            &lt;/span&gt;
                   &lt;h3 class="card-label text-white"&gt;
                    Primary Background Color
                   &lt;/h3&gt;
                  &lt;/div&gt;
                        &lt;div class="card-toolbar"&gt;
                            &lt;a href="#" class="btn btn-sm btn-white"&gt;
                                &lt;i class="flaticon2-cube"&gt;&lt;/i&gt; Settings
                            &lt;/a&gt;
                        &lt;/div&gt;
                 &lt;/div&gt;
                    &lt;div class="separator separator-solid separator-white opacity-20"&gt;&lt;/div&gt;
                 &lt;div class="card-body text-white"&gt;
                        ...
                    &lt;/div&gt;
                &lt;/div&gt;
                </code>
</pre>
                        </div>
                    </div>
                </div>
                <!--end::Code example-->
                <!--end::Example-->
                <!--begin::Example-->
                <!--begin::Card-->
                <div class="card card-custom bg-danger">
                    <div class="card-header border-0">
                        <div class="card-title">
                            <span class="card-icon">
                                <i class="flaticon2-chat-1 text-white"></i>
                            </span>
                            <h3 class="card-label text-white">Danger Background Color</h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-sm btn-white font-weight-bold">
                                <i class="flaticon2-cube"></i>Settings</a>
                        </div>
                    </div>
                    <div class="separator separator-solid separator-white opacity-20"></div>
                    <div class="card-body text-white">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                        unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s, when an unknown printer took a galley of type and scrambled.</div>
                </div>
                <!--end::Card-->
                <!--begin::Code example-->
                <div class="example example-compact mt-2 gutter-b">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">

                </code>
</pre>
                        </div>
                    </div>
                </div>
                <!--end::Code example-->
                <!--end::Example-->
                <!--begin::Example-->
                <!--begin::Card-->
                <div class="card card-custom bg-success">
                    <div class="card-header border-0">
                        <div class="card-title">
                            <span class="card-icon">
                                <i class="flaticon2-chat-1 text-white"></i>
                            </span>
                            <h3 class="card-label text-white">Success Background Color</h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-sm btn-white font-weight-bold">
                                <i class="flaticon2-cube"></i>Settings</a>
                        </div>
                    </div>
                    <div class="separator separator-solid separator-white opacity-20"></div>
                    <div class="card-body text-white">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                        unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s, when an unknown printer took a galley of type and scrambled.</div>
                </div>
                <!--end::Card-->
                <!--begin::Code example-->
                <div class="example example-compact mt-2 gutter-b">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom bg-success"&gt;
                 &lt;div class="card-header border-0"&gt;
                  &lt;div class="card-title"&gt;
                            &lt;span class="card-icon"&gt;
                                &lt;i class="flaticon2-chat-1 text-white"&gt;&lt;/i&gt;
                            &lt;/span&gt;
                   &lt;h3 class="card-label text-white"&gt;
                    Success Background Color
                   &lt;/h3&gt;
                  &lt;/div&gt;
                        &lt;div class="card-toolbar"&gt;
                            &lt;a href="#" class="btn btn-sm btn-white font-weight-bold"&gt;
                                &lt;i class="flaticon2-cube"&gt;&lt;/i&gt; Settings
                            &lt;/a&gt;
                        &lt;/div&gt;
                 &lt;/div&gt;
                    &lt;div class="separator separator-solid separator-white opacity-20"&gt;&lt;/div&gt;
                 &lt;div class="card-body text-white"&gt;
                        ...
                    &lt;/div&gt;
                &lt;/div&gt;
                </code>
</pre>
                        </div>
                    </div>
                </div>
                <!--end::Code example-->
                <!--end::Example-->
            </div>
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
@endsection
