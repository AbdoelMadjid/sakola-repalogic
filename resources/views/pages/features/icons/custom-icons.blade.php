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
                Icons
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
            <div class="alert-text">Keenthemes Custom Icon set provides a large set of web font icons with line, solid, bold
                styles.</div>
        </div>
        <!--end::Notice-->
        <!--begin::Row-->
        <div class="row">
            <div class="col-xl-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b card-stretch">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Base Examples</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example">
                            <p>
                                <code>Keenthemes Icons</code>icons can be used as through class names as shown below.
                            </p>
                            <div class="example-preview">
                                <i class="ki ki-plus mr-5"></i>
                                <i class="ki ki-arrow-up mr-5"></i>
                                <i class="ki ki-round mr-5"></i>
                                <i class="ki ki-reload mr-5"></i>
                                <i class="ki ki-refresh mr-5"></i>
                                <i class="ki ki-solid-plus mr-5"></i>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;i class="ki ki-plus"&gt;&lt;/i&gt;
                        &lt;i class="ki ki-arrow-up"&gt;&lt;/i&gt;
                        &lt;i class="ki ki-round"&gt;&lt;/i&gt;
                        &lt;i class="ki ki-reload"&gt;&lt;/i&gt;
                        &lt;i class="ki ki-refresh"&gt;&lt;/i&gt;
                        &lt;i class="ki ki-solid-plus"&gt;&lt;/i&gt;
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
                <div class="card card-custom gutter-b card-stretch">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Color Options</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example">
                            <p>Use
                                <code>.text-{light|secondary|success|info|primary|warning|danger|white|dark|dark-75|dark-50|dark-25}</code>class
                                format to set different colors.
                            </p>
                            <div class="example-preview">
                                <i class="ki ki-plus text-success mr-5"></i>
                                <i class="ki ki-arrow-up text-primary mr-5"></i>
                                <i class="ki ki-round text-danger mr-5"></i>
                                <i class="ki ki-reload text-warning mr-5"></i>
                                <i class="ki ki-refresh text-info mr-5"></i>
                                <i class="ki ki-solid-plus text-dark mr-5"></i>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;i class="ki ki-plus text-success"&gt;&lt;/i&gt;
                        &lt;i class="ki ki-arrow-up text-primary"&gt;&lt;/i&gt;
                        &lt;i class="ki ki-round text-danger"&gt;&lt;/i&gt;
                        &lt;i class="ki ki-reload text-warning"&gt;&lt;/i&gt;
                        &lt;i class="ki ki-refresh text-info"&gt;&lt;/i&gt;
                        &lt;i class="ki ki-solid-plus text-dark"&gt;&lt;/i&gt;
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
        <!--begin::Row-->
        <div class="row">
            <div class="col-xl-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b card-stretch">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Sizes</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example">
                            <p>Use
                                <code>.icon-{size}</code>class format to set different sizes.
                            </p>
                            <div class="example-preview">
                                <i class="ki ki-solid-plus icon-xs mr-5"></i>
                                <i class="ki ki-solid-plus icon-sm mr-5"></i>
                                <i class="ki ki-solid-plus icon-nm mr-5"></i>
                                <i class="ki ki-solid-plus icon-md mr-5"></i>
                                <i class="ki ki-solid-plus icon-lg mr-5"></i>
                                <i class="ki ki-solid-plus icon-xl mr-5"></i>
                                <i class="ki ki-solid-plus icon-2x mr-5"></i>
                                <i class="ki ki-solid-plus icon-3x mr-5"></i>
                                <i class="ki ki-solid-plus icon-4x mr-5"></i>
                                <i class="ki ki-solid-plus icon-5x mr-5"></i>
                                <i class="ki ki-solid-plus icon-6x mr-5"></i>
                                <i class="ki ki-solid-plus icon-7x mr-5"></i>
                                <i class="ki ki-solid-plus icon-8x mr-5"></i>
                                <i class="ki ki-solid-plus icon-9x mr-5"></i>
                                <i class="ki ki-solid-plus icon-10x mr-5"></i>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre style="height:150px">
<code class="language-html">
                        &lt;i class="ki ki-solid-plus icon-xs"&gt;&lt;/i&gt;
                        &lt;i class="ki ki-solid-plus icon-sm"&gt;&lt;/i&gt;
                        &lt;i class="ki ki-solid-plus icon-nm"&gt;&lt;/i&gt;
                        &lt;i class="ki ki-solid-plus icon-md"&gt;&lt;/i&gt;
                        &lt;i class="ki ki-solid-plus icon-lg"&gt;&lt;/i&gt;
                        &lt;i class="ki ki-solid-plus icon-xl"&gt;&lt;/i&gt;
                        &lt;i class="ki ki-solid-plus icon-2x"&gt;&lt;/i&gt;
                        &lt;i class="ki ki-solid-plus icon-3x"&gt;&lt;/i&gt;
                        &lt;i class="ki ki-solid-plus icon-4x"&gt;&lt;/i&gt;
                        &lt;i class="ki ki-solid-plus icon-5x"&gt;&lt;/i&gt;
                        &lt;i class="ki ki-solid-plus icon-6x"&gt;&lt;/i&gt;
                        &lt;i class="ki ki-solid-plus icon-7x"&gt;&lt;/i&gt;
                        &lt;i class="ki ki-solid-plus icon-8x"&gt;&lt;/i&gt;
                        &lt;i class="ki ki-solid-plus icon-9x"&gt;&lt;/i&gt;
                        &lt;i class="ki ki-solid-plus icon-10x"&gt;&lt;/i&gt;
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
                <div class="card card-custom gutter-b card-stretch">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Integration</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example">
                            <p>You can use KeenthemesIcons literally with any element within Metronic.</p>
                            <div class="example-preview">
                                <a href="#" class="btn btn-success font-weight-bold mr-2">
                                    <i class="ki ki-plus icon-sm"></i>Button</a>
                                <a href="#" class="btn btn-light-danger font-weight-bold mr-2">
                                    <i class="ki ki-bold-close icon-sm"></i>Button 2</a>
                                <div class="dropdown dropdown-inline">
                                    <a href="#" class="btn btn-light-primary font-weight-bold dropdown-toggle"
                                        data-toggle="dropdown" aria-expanded="false">
                                        <i class="ki ki-outline-info icon-md"></i>Dropdown</a>
                                    <div class="dropdown-menu dropdown-menu-md py-5" style="">
                                        <ul class="navi navi-hover">
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="ki ki-gear text-danger"></i>
                                                    </span>
                                                    <span class="navi-text">Messages</span>
                                                    <span
                                                        class="label label-light-danger font-weight-bold label-inline">new</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="ki ki-info text-warning"></i>
                                                    </span>
                                                    <span class="navi-text">Settings</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="ki ki-wrench text-success"></i>
                                                    </span>
                                                    <span class="navi-text">Tasks</span>
                                                    <span class="navi-label">
                                                        <span class="label label-warning label-rounded">5</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-file text-primary"></i>
                                                    </span>
                                                    <span class="navi-text">Orders</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre style="height:400px">
<code class="language-html">
                        &lt;a href="#" class="btn btn-success font-weight-bold mr-2"&gt;
                            &lt;i class="ki ki-plus icon-sm"&gt;&lt;/i&gt; Button example
                        &lt;/a&gt;

                        &lt;a href="#" class="btn btn-light-danger font-weight-bold mr-2"&gt;
                            &lt;i class="ki ki-bold-close icon-sm"&gt;&lt;/i&gt; Button example 2
                        &lt;/a&gt;

                        &lt;div class="dropdown dropdown-inline"&gt;
                            &lt;a href="#" class="btn btn-light-primary font-weight-bold dropdown-toggle" data-toggle="dropdown" aria-expanded="false"&gt;
                                &lt;i class="ki ki-outline-info icon-md"&gt;&lt;/i&gt; Dropdown example
                            &lt;/a&gt;
                            &lt;div class="dropdown-menu dropdown-menu-md py-5"&gt;
                                &lt;ul class="navi navi-hover"&gt;
                                    &lt;li class="navi-item"&gt;
                                        &lt;a class="navi-link" href="#"&gt;
                                            &lt;span class="navi-icon"&gt;&lt;i class="ki ki-gear text-danger"&gt;&lt;/i&gt;&lt;/span&gt;
                                            &lt;span class="navi-text"&gt;Messages&lt;/span&gt;
                                            &lt;span class="label label-light-danger font-weight-bold label-inline"&gt;new&lt;/span&gt;
                                        &lt;/a&gt;
                                    &lt;/li&gt;
                                    &lt;li class="navi-item"&gt;
                                        &lt;a class="navi-link" href="#"&gt;
                                            &lt;span class="navi-icon"&gt;&lt;i class="ki ki-info text-warning"&gt;&lt;/i&gt;&lt;/span&gt;
                                            &lt;span class="navi-text"&gt;Settings&lt;/span&gt;
                                        &lt;/a&gt;
                                    &lt;/li&gt;
                                    &lt;li class="navi-item"&gt;
                                        &lt;a class="navi-link" href="#"&gt;
                                            &lt;span class="navi-icon"&gt;&lt;i class="ki ki-wrench text-success"&gt;&lt;/i&gt;&lt;/span&gt;
                                            &lt;span class="navi-text"&gt;Tasks&lt;/span&gt;
                                            &lt;span class="navi-label"&gt;
                                                &lt;span class="label label-warning label-rounded"&gt;5&lt;/span&gt;
                                            &lt;/span&gt;
                                        &lt;/a&gt;
                                    &lt;/li&gt;
                                    &lt;li class="navi-item"&gt;
                                        &lt;a class="navi-link" href="#"&gt;
                                            &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-file  text-primary"&gt;&lt;/i&gt;&lt;/span&gt;
                                            &lt;span class="navi-text"&gt;Orders&lt;/span&gt;
                                        &lt;/a&gt;
                                    &lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/div&gt;
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
        <div class="row">
            <div class="col-md-12">
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Custom Icons</h3>
                        </div>
                        <div class="card-toolbar">
                            <span class="text-muted font-size-sm" id="custom_count_text">Klik icon untuk copy
                                snippet</span>
                        </div>
                    </div>
                    <div class="card-body" id="kt_custom_icons_collection">
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-double-arrow-next"></i>
                                    </div>
                                    <div class="text-muted">ki-double-arrow-next</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-double-arrow-back"></i>
                                    </div>
                                    <div class="text-muted">ki-double-arrow-back</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-double-arrow-down"></i>
                                    </div>
                                    <div class="text-muted">ki-double-arrow-down</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-double-arrow-up"></i>
                                    </div>
                                    <div class="text-muted">ki-double-arrow-up</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-long-arrow-back"></i>
                                    </div>
                                    <div class="text-muted">ki-long-arrow-back</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-arrow-next"></i>
                                    </div>
                                    <div class="text-muted">ki-arrow-next</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-arrow-back"></i>
                                    </div>
                                    <div class="text-muted">ki-arrow-back</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-long-arrow-next"></i>
                                    </div>
                                    <div class="text-muted">ki-long-arrow-next</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-check"></i>
                                    </div>
                                    <div class="text-muted">ki-check</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-arrow-down"></i>
                                    </div>
                                    <div class="text-muted">ki-arrow-down</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-minus"></i>
                                    </div>
                                    <div class="text-muted">ki-minus</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-long-arrow-down"></i>
                                    </div>
                                    <div class="text-muted">ki-long-arrow-down</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-long-arrow-up"></i>
                                    </div>
                                    <div class="text-muted">ki-long-arrow-up</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-plus"></i>
                                    </div>
                                    <div class="text-muted">ki-plus</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-arrow-up"></i>
                                    </div>
                                    <div class="text-muted">ki-arrow-up</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-round"></i>
                                    </div>
                                    <div class="text-muted">ki-round</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-reload"></i>
                                    </div>
                                    <div class="text-muted">ki-reload</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-refresh"></i>
                                    </div>
                                    <div class="text-muted">ki-refresh</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-solid-plus"></i>
                                    </div>
                                    <div class="text-muted">ki-solid-plus</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-bold-close"></i>
                                    </div>
                                    <div class="text-muted">ki-bold-close</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-solid-minus"></i>
                                    </div>
                                    <div class="text-muted">ki-solid-minus</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-hide"></i>
                                    </div>
                                    <div class="text-muted">ki-hide</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-code"></i>
                                    </div>
                                    <div class="text-muted">ki-code</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-copy"></i>
                                    </div>
                                    <div class="text-muted">ki-copy</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-up-and-down"></i>
                                    </div>
                                    <div class="text-muted">ki-up-and-down</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-left-and-right"></i>
                                    </div>
                                    <div class="text-muted">ki-left-and-right</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-bold-triangle-bottom"></i>
                                    </div>
                                    <div class="text-muted">ki-bold-triangle-bottom</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-bold-triangle-right"></i>
                                    </div>
                                    <div class="text-muted">ki-bold-triangle-right</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-bold-triangle-top"></i>
                                    </div>
                                    <div class="text-muted">ki-bold-triangle-top</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-bold-triangle-left"></i>
                                    </div>
                                    <div class="text-muted">ki-bold-triangle-left</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-bold-double-arrow-up"></i>
                                    </div>
                                    <div class="text-muted">ki-bold-double-arrow-up</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-bold-double-arrow-next"></i>
                                    </div>
                                    <div class="text-muted">ki-bold-double-arrow-next</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-bold-double-arrow-back"></i>
                                    </div>
                                    <div class="text-muted">ki-bold-double-arrow-back</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-bold-double-arrow-down"></i>
                                    </div>
                                    <div class="text-muted">ki-bold-double-arrow-down</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-bold-arrow-down"></i>
                                    </div>
                                    <div class="text-muted">ki-bold-arrow-down</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-bold-arrow-next"></i>
                                    </div>
                                    <div class="text-muted">ki-bold-arrow-next</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-bold-arrow-back"></i>
                                    </div>
                                    <div class="text-muted">ki-bold-arrow-back</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-bold-arrow-up"></i>
                                    </div>
                                    <div class="text-muted">ki-bold-arrow-up</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-bold-check"></i>
                                    </div>
                                    <div class="text-muted">ki-bold-check</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-bold-wide-arrow-down"></i>
                                    </div>
                                    <div class="text-muted">ki-bold-wide-arrow-down</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-bold-wide-arrow-up"></i>
                                    </div>
                                    <div class="text-muted">ki-bold-wide-arrow-up</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-bold-wide-arrow-next"></i>
                                    </div>
                                    <div class="text-muted">ki-bold-wide-arrow-next</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-bold-wide-arrow-back"></i>
                                    </div>
                                    <div class="text-muted">ki-bold-wide-arrow-back</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-bold-long-arrow-up"></i>
                                    </div>
                                    <div class="text-muted">ki-bold-long-arrow-up</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-bold-long-arrow-down"></i>
                                    </div>
                                    <div class="text-muted">ki-bold-long-arrow-down</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-bold-long-arrow-back"></i>
                                    </div>
                                    <div class="text-muted">ki-bold-long-arrow-back</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-bold-long-arrow-next"></i>
                                    </div>
                                    <div class="text-muted">ki-bold-long-arrow-next</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-bold-check-1"></i>
                                    </div>
                                    <div class="text-muted">ki-bold-check-1</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-close"></i>
                                    </div>
                                    <div class="text-muted">ki-close</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-more-ver"></i>
                                    </div>
                                    <div class="text-muted">ki-more-ver</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-bold-more-ver"></i>
                                    </div>
                                    <div class="text-muted">ki-bold-more-ver</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-more-hor"></i>
                                    </div>
                                    <div class="text-muted">ki-more-hor</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-bold-more-hor"></i>
                                    </div>
                                    <div class="text-muted">ki-bold-more-hor</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-bold-menu"></i>
                                    </div>
                                    <div class="text-muted">ki-bold-menu</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-drag"></i>
                                    </div>
                                    <div class="text-muted">ki-drag</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-bold-sort"></i>
                                    </div>
                                    <div class="text-muted">ki-bold-sort</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-eye"></i>
                                    </div>
                                    <div class="text-muted">ki-eye</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-outline-info"></i>
                                    </div>
                                    <div class="text-muted">ki-outline-info</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-menu"></i>
                                    </div>
                                    <div class="text-muted">ki-menu</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-menu-grid"></i>
                                    </div>
                                    <div class="text-muted">ki-menu-grid</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-wrench"></i>
                                    </div>
                                    <div class="text-muted">ki-wrench</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-gear"></i>
                                    </div>
                                    <div class="text-muted">ki-gear</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-info"></i>
                                    </div>
                                    <div class="text-muted">ki-info</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-calendar-2"></i>
                                    </div>
                                    <div class="text-muted">ki-calendar-2</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-calendar"></i>
                                    </div>
                                    <div class="text-muted">ki-calendar</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-calendar-today"></i>
                                    </div>
                                    <div class="text-muted">ki-calendar-today</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-clock"></i>
                                    </div>
                                    <div class="text-muted">ki-clock</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 ki ki-dots"></i>
                                    </div>
                                    <div class="text-muted">ki-dots</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Card-->
            </div>
        </div>
    </div>
    <!--end::Container-->
@endsection

@section('scripts')
    <script>
        (function() {
            function initIconTools(options) {
                var listContainer = options.container;
                var cardHeader = options.header;
                if (!listContainer || !cardHeader) {
                    return;
                }

                var toolbar = document.createElement('div');
                toolbar.className = 'mb-8';
                toolbar.innerHTML =
                    '<div class="row align-items-end">' +
                    '<div class="col-md-5 mb-4 mb-md-0"><label class="font-weight-bold mb-2 d-block">Pencarian Icon</label><input type="text" id="' +
                    options.prefix + '_search_input" class="form-control" placeholder="' + options.searchPlaceholder +
                    '" autocomplete="off"></div>' +
                    '<div class="col-md-3 col-sm-6 mb-4 mb-md-0"><label class="font-weight-bold mb-2 d-block">Ukuran Icon</label><select id="' +
                    options.prefix +
                    '_size_input" class="form-control"><option value="12">12</option><option value="16">16</option><option value="20">20</option><option value="24" selected>24</option><option value="28">28</option><option value="32">32</option><option value="40">40</option><option value="48">48</option><option value="56">56</option><option value="64">64</option></select></div>' +
                    '<div class="col-md-2 col-sm-6 mb-4 mb-md-0"><label class="font-weight-bold mb-2 d-block">Warna Icon</label><input type="color" id="' +
                    options.prefix +
                    '_color_input" class="form-control p-1" value="#000000" style="height:38px;"></div>' +
                    '<div class="col-md-2 d-flex justify-content-md-end"><button type="button" id="' + options.prefix +
                    '_reset_btn" class="btn btn-light-dark w-100">Reset</button></div>' +
                    '</div>';

                var snippetPanel = document.createElement('div');
                snippetPanel.className = 'mb-8 p-5 rounded';
                snippetPanel.style.background = '#F4F6FA';
                snippetPanel.innerHTML =
                    '<div class="row align-items-start">' +
                    '<div class="col-lg-3 mb-4 mb-lg-0"><label class="font-weight-bold mb-2 d-block">Preview</label><div class="d-flex align-items-center justify-content-center rounded" style="min-height:94px;background:#fff;border:1px dashed #d9dee7;"><i id="' +
                    options.prefix + '_preview_icon"></i></div></div>' +
                    '<div class="col-lg-6 mb-4 mb-lg-0"><label class="font-weight-bold mb-2 d-block">Hasil Copy Snippet</label><textarea id="' +
                    options.prefix +
                    '_snippet_code" class="form-control font-size-sm" rows="3" readonly style="height:94px;resize:none;"></textarea></div>' +
                    '<div class="col-lg-3 d-flex flex-column"><label class="font-weight-bold mb-2 d-block">Aksi</label><div class="d-flex w-100"><button type="button" id="' +
                    options.prefix +
                    '_copy_snippet_btn" class="btn btn-primary flex-fill mr-2" disabled>Copy</button><button type="button" id="' +
                    options.prefix +
                    '_clear_selected_btn" class="btn btn-light-danger flex-fill" disabled>Reset</button></div><div class="mt-3 text-center" style="min-height:22px;"><span id="' +
                    options.prefix +
                    '_copy_status" class="text-muted small"></span></div><div class="mt-2 d-flex justify-content-center" style="min-height:32px;"><span id="' +
                    options.prefix +
                    '_icon_badge" class="label label-inline label-light-primary font-weight-bold" style="visibility:hidden;"></span></div></div>' +
                    '</div>';

                var countText = document.getElementById(options.prefix + '_count_text');
                var searchInput = document.getElementById(options.prefix + '_search_input');
                var sizeInput = document.getElementById(options.prefix + '_size_input');
                var colorInput = document.getElementById(options.prefix + '_color_input');
                var resetBtn = document.getElementById(options.prefix + '_reset_btn');
                var previewIcon = document.getElementById(options.prefix + '_preview_icon');
                var iconBadge = document.getElementById(options.prefix + '_icon_badge');
                var snippetCode = document.getElementById(options.prefix + '_snippet_code');
                var copySnippetBtn = document.getElementById(options.prefix + '_copy_snippet_btn');
                var clearSelectedBtn = document.getElementById(options.prefix + '_clear_selected_btn');
                var copyStatus = document.getElementById(options.prefix + '_copy_status');

                var iconCards = Array.prototype.slice.call(listContainer.querySelectorAll(
                    '.col-md-2.d-flex.align-items-stretch'));
                var compactRow = document.createElement('div');
                compactRow.className = 'row';
                for (var c = 0; c < iconCards.length; c++) {
                    compactRow.appendChild(iconCards[c]);
                }
                listContainer.innerHTML = '';
                listContainer.appendChild(toolbar);
                listContainer.appendChild(snippetPanel);
                listContainer.appendChild(compactRow);
                countText = document.getElementById(options.prefix + '_count_text');
                searchInput = document.getElementById(options.prefix + '_search_input');
                sizeInput = document.getElementById(options.prefix + '_size_input');
                colorInput = document.getElementById(options.prefix + '_color_input');
                resetBtn = document.getElementById(options.prefix + '_reset_btn');
                previewIcon = document.getElementById(options.prefix + '_preview_icon');
                iconBadge = document.getElementById(options.prefix + '_icon_badge');
                snippetCode = document.getElementById(options.prefix + '_snippet_code');
                copySnippetBtn = document.getElementById(options.prefix + '_copy_snippet_btn');
                clearSelectedBtn = document.getElementById(options.prefix + '_clear_selected_btn');
                copyStatus = document.getElementById(options.prefix + '_copy_status');

                var totalIcons = iconCards.length;
                var currentQuery = '';
                var defaultSize = 24;
                var defaultColor = '#000000';
                var currentSize = defaultSize;
                var currentColor = defaultColor;
                var selectedIconClass = '';
                var selectedIconLabel = '';

                function normalizeSize(value) {
                    var parsed = parseInt(value, 10);
                    var allowedSizes = [12, 16, 20, 24, 28, 32, 40, 48, 56, 64];
                    return allowedSizes.indexOf(parsed) !== -1 ? parsed : defaultSize;
                }

                for (var idx = 0; idx < iconCards.length; idx++) {
                    var nameEl = iconCards[idx].querySelector('.text-muted');
                    var iconName = nameEl ? nameEl.textContent.trim() : '';
                    var iconEl = iconCards[idx].querySelector('i');
                    var iconRenderClass = iconEl ? iconEl.className : '';
                    iconRenderClass = iconRenderClass.replace(/\bicon-\S+\b/g, '').replace(/\btext-\S+\b/g, '').replace(
                        /\bla\b/g, '').replace(/\s+/g, ' ').trim();
                    iconCards[idx].setAttribute('data-icon-name', iconName.toLowerCase());
                    iconCards[idx].setAttribute('data-icon-label', iconName);
                    iconCards[idx].setAttribute('data-icon-class', iconRenderClass || (options.defaultPrefixClass +
                        ' ' + iconName).trim());
                    iconCards[idx].style.cursor = 'pointer';
                }

                function applyIconAppearance() {
                    for (var i = 0; i < iconCards.length; i++) {
                        var iconEl = iconCards[i].querySelector('i');
                        if (!iconEl) continue;
                        iconEl.style.setProperty('font-size', currentSize + 'px', 'important');
                        iconEl.style.setProperty('color', currentColor, 'important');
                    }
                    if (selectedIconClass) {
                        previewIcon.style.setProperty('font-size', '64px', 'important');
                        previewIcon.style.setProperty('color', currentColor, 'important');
                    }
                }

                function highlightSelectedCard() {
                    for (var i = 0; i < iconCards.length; i++) {
                        var card = iconCards[i].querySelector('.bg-hover-light');
                        if (!card) continue;
                        if (iconCards[i].getAttribute('data-icon-label') === selectedIconLabel) {
                            card.classList.add('bg-light-primary');
                            card.style.setProperty('border', '1px solid #3699ff');
                        } else {
                            card.classList.remove('bg-light-primary');
                            card.style.removeProperty('border');
                        }
                    }
                }

                function clearCopiedBadges() {
                    for (var i = 0; i < iconCards.length; i++) {
                        var badge = iconCards[i].querySelector('.' + options.prefix + '-copied-badge');
                        if (badge) badge.remove();
                    }
                }

                function getCurrentSnippet() {
                    if (!selectedIconClass) return '';
                    return '<i class="' + selectedIconClass + '" style="font-size: ' + currentSize + 'px; color: ' +
                        currentColor + ';"></i>';
                }

                function updateSnippetPanel() {
                    if (!selectedIconClass) {
                        previewIcon.className = '';
                        iconBadge.textContent = '';
                        iconBadge.style.visibility = 'hidden';
                        snippetCode.value = '';
                        copySnippetBtn.disabled = true;
                        clearSelectedBtn.disabled = true;
                        return;
                    }
                    previewIcon.className = selectedIconClass;
                    iconBadge.textContent = selectedIconLabel;
                    iconBadge.style.visibility = 'visible';
                    snippetCode.value = getCurrentSnippet();
                    copySnippetBtn.disabled = false;
                    clearSelectedBtn.disabled = false;
                }

                function clearSelection() {
                    selectedIconClass = '';
                    selectedIconLabel = '';
                    copyStatus.textContent = '';
                    clearCopiedBadges();
                    highlightSelectedCard();
                    updateSnippetPanel();
                }

                function showCopiedBadgeOnSelectedCard() {
                    if (!selectedIconClass) return;
                    clearCopiedBadges();
                    for (var i = 0; i < iconCards.length; i++) {
                        if (iconCards[i].getAttribute('data-icon-label') !== selectedIconLabel) continue;
                        var card = iconCards[i].querySelector('.bg-hover-light');
                        if (!card) continue;
                        card.style.position = 'relative';
                        var badge = document.createElement('span');
                        badge.className = options.prefix + '-copied-badge';
                        badge.textContent = 'Copied';
                        badge.style.cssText =
                            'position:absolute;top:6px;right:6px;background:#1BC5BD;color:#fff;padding:2px 8px;border-radius:999px;font-size:11px;font-weight:700;line-height:1.4;';
                        card.appendChild(badge);
                        break;
                    }
                }

                function showCopyToast(message) {
                    var toast = document.getElementById(options.prefix + '_copy_toast');
                    if (!toast) {
                        toast = document.createElement('div');
                        toast.id = options.prefix + '_copy_toast';
                        toast.style.cssText =
                            'position:fixed;top:20px;right:20px;z-index:2000;background:#1BC5BD;color:#fff;padding:10px 14px;border-radius:6px;font-weight:600;font-size:12px;box-shadow:0 4px 12px rgba(0,0,0,.2);opacity:0;transform:translateY(-8px);transition:all .2s ease;';
                        document.body.appendChild(toast);
                    }
                    toast.textContent = message;
                    toast.style.opacity = '1';
                    toast.style.transform = 'translateY(0)';
                    clearTimeout(toast._timer);
                    toast._timer = setTimeout(function() {
                        toast.style.opacity = '0';
                        toast.style.transform = 'translateY(-8px)';
                    }, 1400);
                }

                function render() {
                    var filteredCards = iconCards.filter(function(card) {
                        var iconName = card.getAttribute('data-icon-name') || '';
                        return iconName.indexOf(currentQuery) !== -1;
                    });
                    for (var i = 0; i < iconCards.length; i++) {
                        iconCards[i].style.setProperty('display', 'none', 'important');
                    }
                    for (var j = 0; j < filteredCards.length; j++) {
                        filteredCards[j].style.setProperty('display', 'flex', 'important');
                    }
                    countText.textContent = 'Menampilkan ' + filteredCards.length + ' dari ' + totalIcons + ' icon';
                }

                searchInput.addEventListener('input', function(e) {
                    currentQuery = (e.target.value || '').toLowerCase().trim();
                    render();
                });

                sizeInput.addEventListener('change', function(e) {
                    currentSize = normalizeSize(e.target.value);
                    sizeInput.value = currentSize;
                    applyIconAppearance();
                    updateSnippetPanel();
                });

                colorInput.addEventListener('input', function(e) {
                    currentColor = e.target.value || defaultColor;
                    applyIconAppearance();
                    updateSnippetPanel();
                });

                resetBtn.addEventListener('click', function() {
                    searchInput.value = '';
                    sizeInput.value = defaultSize;
                    colorInput.value = defaultColor;
                    currentQuery = '';
                    currentSize = defaultSize;
                    currentColor = defaultColor;
                    clearSelection();
                    applyIconAppearance();
                    render();
                });

                clearSelectedBtn.addEventListener('click', function() {
                    clearSelection();
                });

                for (var clickIdx = 0; clickIdx < iconCards.length; clickIdx++) {
                    iconCards[clickIdx].addEventListener('click', function() {
                        selectedIconClass = this.getAttribute('data-icon-class') || '';
                        selectedIconLabel = this.getAttribute('data-icon-label') || '';
                        copyStatus.textContent = '';
                        highlightSelectedCard();
                        updateSnippetPanel();
                        applyIconAppearance();
                        showCopiedBadgeOnSelectedCard();
                        var top = cardHeader.getBoundingClientRect().top + window.pageYOffset - 120;
                        window.scrollTo({
                            top: Math.max(top, 0),
                            behavior: 'smooth'
                        });
                    });
                }

                copySnippetBtn.addEventListener('click', function() {
                    var snippet = getCurrentSnippet();
                    if (!snippet) return;
                    if (navigator.clipboard && navigator.clipboard.writeText) {
                        navigator.clipboard.writeText(snippet).then(function() {
                            copyStatus.textContent = 'Snippet copied';
                            showCopyToast('Snippet copied');
                        });
                        return;
                    }
                    snippetCode.select();
                    document.execCommand('copy');
                    copyStatus.textContent = 'Snippet copied';
                    showCopyToast('Snippet copied');
                });

                applyIconAppearance();
                updateSnippetPanel();
                render();
            }

            function initCustomIconsPage() {
                var cardLabel = null;
                var labels = document.querySelectorAll('.card.card-custom .card-label');
                for (var i = 0; i < labels.length; i++) {
                    if ((labels[i].textContent || '').trim() === 'Custom Icons') {
                        cardLabel = labels[i];
                        break;
                    }
                }
                if (!cardLabel) return;
                var header = cardLabel.closest('.card-header');
                var body = header ? header.nextElementSibling : null;
                if (!body) return;
                initIconTools({
                    container: body,
                    header: header,
                    prefix: 'custom',
                    defaultPrefixClass: 'ki',
                    searchPlaceholder: 'Cari icon, contoh: ki-arrow'
                });
            }

            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', initCustomIconsPage);
            } else {
                initCustomIconsPage();
            }
        })();
    </script>
@endsection
