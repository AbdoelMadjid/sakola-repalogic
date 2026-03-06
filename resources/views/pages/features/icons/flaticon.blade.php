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
            <div class="alert-text">Flaticon set provides a large set of web font icons with line, solid, bold styles.</div>
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
                                <code>Flaticon</code>icons can be used as through class names as shown below.
                            </p>
                            <div class="example-preview">
                                <i class="flaticon2-bell-4 mr-5"></i>
                                <i class="flaticon2-gear mr-5"></i>
                                <i class="flaticon2-pen mr-5"></i>
                                <i class="flaticon2-open-box mr-5"></i>
                                <i class="flaticon2-hourglass-1 mr-5"></i>
                                <i class="flaticon2-graph-1"></i>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;i class="flaticon2-bell-4"&gt;&lt;/i&gt;
                        &lt;i class="flaticon2-gear"&gt;&lt;/i&gt;
                        &lt;i class="flaticon2-pen"&gt;&lt;/i&gt;
                        &lt;i class="flaticon2-open-box"&gt;&lt;/i&gt;
                        &lt;i class="flaticon2-hourglass-1"&gt;&lt;/i&gt;
                        &lt;i class="flaticon2-graph-1"&gt;&lt;/i&gt;
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
                                <i class="flaticon2-bell-4 text-success mr-5"></i>
                                <i class="flaticon2-gear text-primary mr-5"></i>
                                <i class="flaticon2-pen text-danger mr-5"></i>
                                <i class="flaticon2-open-box text-warning mr-5"></i>
                                <i class="flaticon2-hourglass-1 text-info mr-5"></i>
                                <i class="flaticon2-graph-1 text-dark"></i>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;i class="flaticon2-bell-4 text-success"&gt;&lt;/i&gt;
                        &lt;i class="flaticon2-gear text-primary"&gt;&lt;/i&gt;
                        &lt;i class="flaticon2-pen text-danger"&gt;&lt;/i&gt;
                        &lt;i class="flaticon2-open-box text-warning"&gt;&lt;/i&gt;
                        &lt;i class="flaticon2-hourglass-1 text-info"&gt;&lt;/i&gt;
                        &lt;i class="flaticon2-graph-1 text-dark"&gt;&lt;/i&gt;
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
                                <i class="flaticon2-hourglass-1 icon-xs mr-5"></i>
                                <i class="flaticon2-hourglass-1 icon-sm mr-5"></i>
                                <i class="flaticon2-hourglass-1 icon-nm mr-5"></i>
                                <i class="flaticon2-hourglass-1 icon-md mr-5"></i>
                                <i class="flaticon2-hourglass-1 icon-lg mr-5"></i>
                                <i class="flaticon2-hourglass-1 icon-xl mr-5"></i>
                                <i class="flaticon2-hourglass-1 icon-2x mr-5"></i>
                                <i class="flaticon2-hourglass-1 icon-3x mr-5"></i>
                                <i class="flaticon2-hourglass-1 icon-4x mr-5"></i>
                                <i class="flaticon2-hourglass-1 icon-5x mr-5"></i>
                                <i class="flaticon2-hourglass-1 icon-6x mr-5"></i>
                                <i class="flaticon2-hourglass-1 icon-7x mr-5"></i>
                                <i class="flaticon2-hourglass-1 icon-8x mr-5"></i>
                                <i class="flaticon2-hourglass-1 icon-9x mr-5"></i>
                                <i class="flaticon2-hourglass-1 icon-10x mr-5"></i>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre style="height:150px">
<code class="language-html">
                        &lt;i class="flaticon2-hourglass-1 icon-xs"&gt;&lt;/i&gt;
                        &lt;i class="flaticon2-hourglass-1 icon-sm"&gt;&lt;/i&gt;
                        &lt;i class="flaticon2-hourglass-1 icon-nm"&gt;&lt;/i&gt;
                        &lt;i class="flaticon2-hourglass-1 icon-md"&gt;&lt;/i&gt;
                        &lt;i class="flaticon2-hourglass-1 icon-lg"&gt;&lt;/i&gt;
                        &lt;i class="flaticon2-hourglass-1 icon-xl"&gt;&lt;/i&gt;
                        &lt;i class="flaticon2-hourglass-1 icon-2x"&gt;&lt;/i&gt;
                        &lt;i class="flaticon2-hourglass-1 icon-3x"&gt;&lt;/i&gt;
                        &lt;i class="flaticon2-hourglass-1 icon-4x"&gt;&lt;/i&gt;
                        &lt;i class="flaticon2-hourglass-1 icon-5x"&gt;&lt;/i&gt;
                        &lt;i class="flaticon2-hourglass-1 icon-6x"&gt;&lt;/i&gt;
                        &lt;i class="flaticon2-hourglass-1 icon-7x"&gt;&lt;/i&gt;
                        &lt;i class="flaticon2-hourglass-1 icon-8x"&gt;&lt;/i&gt;
                        &lt;i class="flaticon2-hourglass-1 icon-9x"&gt;&lt;/i&gt;
                        &lt;i class="flaticon2-hourglass-1 icon-10x"&gt;&lt;/i&gt;
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
                            <p>You can use Flaticons literally with any element within Metronic.</p>
                            <div class="example-preview">
                                <a href="#" class="btn btn-success font-weight-bold mr-2">
                                    <i class="flaticon2-bell-4"></i>Button</a>
                                <a href="#" class="btn btn-light-danger font-weight-bold mr-2">
                                    <i class="flaticon2-open-box"></i>Button 2</a>
                                <div class="dropdown dropdown-inline">
                                    <a href="#" class="btn btn-light-primary font-weight-bold dropdown-toggle"
                                        data-toggle="dropdown" aria-expanded="false">
                                        <i class="flaticon2-graph-1"></i>Dropdown</a>
                                    <div class="dropdown-menu dropdown-menu-md py-5" style="">
                                        <ul class="navi navi-hover">
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-analytics text-danger"></i>
                                                    </span>
                                                    <span class="navi-text">Messages</span>
                                                    <span
                                                        class="label label-light-danger font-weight-bold label-inline">new</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-pie-chart-2 text-warning"></i>
                                                    </span>
                                                    <span class="navi-text">Settings</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-box-1 text-success"></i>
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
                            &lt;i class="flaticon2-bell-4"&gt;&lt;/i&gt; Button example
                        &lt;/a&gt;

                        &lt;a href="#" class="btn btn-light-danger font-weight-bold mr-2"&gt;
                            &lt;i class="flaticon2-open-box"&gt;&lt;/i&gt; Button example 2
                        &lt;/a&gt;

                        &lt;div class="dropdown dropdown-inline"&gt;
                            &lt;a href="#" class="btn btn-light-primary font-weight-bold dropdown-toggle" data-toggle="dropdown" aria-expanded="false"&gt;
                                &lt;i class="flaticon2-graph-1"&gt;&lt;/i&gt; Dropdown example
                            &lt;/a&gt;
                            &lt;div class="dropdown-menu dropdown-menu-md py-5"&gt;
                                &lt;ul class="navi navi-hover"&gt;
                                    &lt;li class="navi-item"&gt;
                                        &lt;a class="navi-link" href="#"&gt;
                                            &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-analytics text-danger"&gt;&lt;/i&gt;&lt;/span&gt;
                                            &lt;span class="navi-text"&gt;Messages&lt;/span&gt;
                                            &lt;span class="label label-light-danger font-weight-bold label-inline"&gt;new&lt;/span&gt;
                                        &lt;/a&gt;
                                    &lt;/li&gt;
                                    &lt;li class="navi-item"&gt;
                                        &lt;a class="navi-link" href="#"&gt;
                                            &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-pie-chart-2  text-warning"&gt;&lt;/i&gt;&lt;/span&gt;
                                            &lt;span class="navi-text"&gt;Settings&lt;/span&gt;
                                        &lt;/a&gt;
                                    &lt;/li&gt;
                                    &lt;li class="navi-item"&gt;
                                        &lt;a class="navi-link" href="#"&gt;
                                            &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-box-1  text-success"&gt;&lt;/i&gt;&lt;/span&gt;
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
                            <h3 class="card-label">Flaticon Icons</h3>
                        </div>
                        <div class="card-toolbar">
                            <span class="text-muted font-size-sm" id="flaticon_count_text">Menampilkan 0 dari 0 icon</span>
                        </div>
                    </div>
                    <div class="px-6 pt-4">
                        <div class="form-row">
                            <div class="col-md-5 mb-3">
                                <label class="font-weight-bold mb-2" for="flaticon_search_input">Pencarian Icon</label>
                                <input type="text" id="flaticon_search_input" class="form-control"
                                    placeholder="Cari nama icon, contoh: calendar, user, arrow">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="font-weight-bold mb-2" for="flaticon_size_input">Ukuran Icon (px)</label>
                                <select id="flaticon_size_input" class="form-control">
                                    <option value="12">12</option>
                                    <option value="16">16</option>
                                    <option value="20">20</option>
                                    <option value="24" selected>24</option>
                                    <option value="28">28</option>
                                    <option value="32">32</option>
                                    <option value="40">40</option>
                                    <option value="48">48</option>
                                    <option value="56">56</option>
                                    <option value="64">64</option>
                                </select>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label class="font-weight-bold mb-2" for="flaticon_color_input">Warna Icon</label>
                                <input type="color" id="flaticon_color_input" class="form-control p-1" value="#000000">
                            </div>
                            <div class="col-md-2 mb-3 d-flex align-items-end">
                                <button type="button" class="btn btn-light-primary font-weight-bold w-100" id="flaticon_reset_btn">Reset</button>
                            </div>
                        </div>
                        <div class="border rounded p-4 mb-4 bg-light">
                            <div class="row align-items-start">
                                <div class="col-md-3 mb-3 mb-md-0">
                                    <label class="font-weight-bold mb-2 d-block">Preview</label>
                                    <div class="border rounded bg-white d-flex align-items-center justify-content-center" style="min-height: 94px;">
                                        <i id="flaticon_preview_icon" style="font-size: 64px;"></i>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label class="font-weight-bold mb-2 d-block">Hasil Copy Snippet</label>
                                    <textarea id="flaticon_snippet_code" class="form-control" rows="3"
                                        style="height: 94px; min-height: 94px; resize: none;" readonly></textarea>
                                </div>
                                <div class="col-md-3">
                                    <label class="font-weight-bold mb-2 d-block">Aksi</label>
                                    <div class="row mx-n1 mb-2">
                                        <div class="col-6 px-1">
                                            <button type="button" class="btn btn-primary font-weight-bold w-100"
                                                id="flaticon_copy_snippet_btn" disabled>Copy</button>
                                        </div>
                                        <div class="col-6 px-1">
                                            <button type="button" class="btn btn-light-primary font-weight-bold w-100"
                                                id="flaticon_clear_selected_btn" disabled>Reset</button>
                                        </div>
                                    </div>
                                    <div class="text-center" style="min-height: 20px;">
                                        <span id="flaticon_copy_status" class="text-muted small"></span>
                                    </div>
                                    <div class="text-center mt-2" style="min-height: 28px;">
                                        <span id="flaticon_icon_badge"
                                            style="display: inline-flex; visibility: hidden; align-items: center; justify-content: center; padding: 0.35rem 0.75rem; border-radius: 999px; background: #e1f0ff; color: #3699ff; font-weight: 600; font-size: 0.85rem; line-height: 1;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" id="flaticon_rows_container">
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-email-black-circular-button"></i>
                                    </div>
                                    <div class="text-muted">flaticon-email-black-circular-button</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-map"></i>
                                    </div>
                                    <div class="text-muted">flaticon-map</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-alert-off"></i>
                                    </div>
                                    <div class="text-muted">flaticon-alert-off</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-alert"></i>
                                    </div>
                                    <div class="text-muted">flaticon-alert</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-computer"></i>
                                    </div>
                                    <div class="text-muted">flaticon-computer</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-responsive"></i>
                                    </div>
                                    <div class="text-muted">flaticon-responsive</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-presentation"></i>
                                    </div>
                                    <div class="text-muted">flaticon-presentation</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-arrows"></i>
                                    </div>
                                    <div class="text-muted">flaticon-arrows</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-rocket"></i>
                                    </div>
                                    <div class="text-muted">flaticon-rocket</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-reply"></i>
                                    </div>
                                    <div class="text-muted">flaticon-reply</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-gift"></i>
                                    </div>
                                    <div class="text-muted">flaticon-gift</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-confetti"></i>
                                    </div>
                                    <div class="text-muted">flaticon-confetti</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-piggy-bank"></i>
                                    </div>
                                    <div class="text-muted">flaticon-piggy-bank</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-support"></i>
                                    </div>
                                    <div class="text-muted">flaticon-support</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-delete"></i>
                                    </div>
                                    <div class="text-muted">flaticon-delete</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-eye"></i>
                                    </div>
                                    <div class="text-muted">flaticon-eye</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-multimedia"></i>
                                    </div>
                                    <div class="text-muted">flaticon-multimedia</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-whatsapp"></i>
                                    </div>
                                    <div class="text-muted">flaticon-whatsapp</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-multimedia-2"></i>
                                    </div>
                                    <div class="text-muted">flaticon-multimedia-2</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-email"></i>
                                    </div>
                                    <div class="text-muted">flaticon-email</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-presentation-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon-presentation-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-trophy"></i>
                                    </div>
                                    <div class="text-muted">flaticon-trophy</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-psd"></i>
                                    </div>
                                    <div class="text-muted">flaticon-psd</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-layer"></i>
                                    </div>
                                    <div class="text-muted">flaticon-layer</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-doc"></i>
                                    </div>
                                    <div class="text-muted">flaticon-doc</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-file"></i>
                                    </div>
                                    <div class="text-muted">flaticon-file</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-network"></i>
                                    </div>
                                    <div class="text-muted">flaticon-network</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-bus-stop"></i>
                                    </div>
                                    <div class="text-muted">flaticon-bus-stop</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-globe"></i>
                                    </div>
                                    <div class="text-muted">flaticon-globe</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-upload"></i>
                                    </div>
                                    <div class="text-muted">flaticon-upload</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-squares"></i>
                                    </div>
                                    <div class="text-muted">flaticon-squares</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-technology"></i>
                                    </div>
                                    <div class="text-muted">flaticon-technology</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-up-arrow"></i>
                                    </div>
                                    <div class="text-muted">flaticon-up-arrow</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-browser"></i>
                                    </div>
                                    <div class="text-muted">flaticon-browser</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-speech-bubble"></i>
                                    </div>
                                    <div class="text-muted">flaticon-speech-bubble</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-coins"></i>
                                    </div>
                                    <div class="text-muted">flaticon-coins</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-open-box"></i>
                                    </div>
                                    <div class="text-muted">flaticon-open-box</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-speech-bubble-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon-speech-bubble-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-attachment"></i>
                                    </div>
                                    <div class="text-muted">flaticon-attachment</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-photo-camera"></i>
                                    </div>
                                    <div class="text-muted">flaticon-photo-camera</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-skype-logo"></i>
                                    </div>
                                    <div class="text-muted">flaticon-skype-logo</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-linkedin-logo"></i>
                                    </div>
                                    <div class="text-muted">flaticon-linkedin-logo</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-twitter-logo"></i>
                                    </div>
                                    <div class="text-muted">flaticon-twitter-logo</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-facebook-letter-logo"></i>
                                    </div>
                                    <div class="text-muted">flaticon-facebook-letter-logo</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-calendar-with-a-clock-time-tools"></i>
                                    </div>
                                    <div class="text-muted">flaticon-calendar-with-a-clock-time-tools</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-youtube"></i>
                                    </div>
                                    <div class="text-muted">flaticon-youtube</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-add-circular-button"></i>
                                    </div>
                                    <div class="text-muted">flaticon-add-circular-button</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-more-v2"></i>
                                    </div>
                                    <div class="text-muted">flaticon-more-v2</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-search"></i>
                                    </div>
                                    <div class="text-muted">flaticon-search</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-search-magnifier-interface-symbol"></i>
                                    </div>
                                    <div class="text-muted">flaticon-search-magnifier-interface-symbol</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-questions-circular-button"></i>
                                    </div>
                                    <div class="text-muted">flaticon-questions-circular-button</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-refresh"></i>
                                    </div>
                                    <div class="text-muted">flaticon-refresh</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-logout"></i>
                                    </div>
                                    <div class="text-muted">flaticon-logout</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-event-calendar-symbol"></i>
                                    </div>
                                    <div class="text-muted">flaticon-event-calendar-symbol</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-laptop"></i>
                                    </div>
                                    <div class="text-muted">flaticon-laptop</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-tool"></i>
                                    </div>
                                    <div class="text-muted">flaticon-tool</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-graphic"></i>
                                    </div>
                                    <div class="text-muted">flaticon-graphic</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-symbol"></i>
                                    </div>
                                    <div class="text-muted">flaticon-symbol</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-graphic-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon-graphic-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-clock"></i>
                                    </div>
                                    <div class="text-muted">flaticon-clock</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-squares-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon-squares-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-black"></i>
                                    </div>
                                    <div class="text-muted">flaticon-black</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-book"></i>
                                    </div>
                                    <div class="text-muted">flaticon-book</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-cogwheel"></i>
                                    </div>
                                    <div class="text-muted">flaticon-cogwheel</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-exclamation"></i>
                                    </div>
                                    <div class="text-muted">flaticon-exclamation</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-add-label-button"></i>
                                    </div>
                                    <div class="text-muted">flaticon-add-label-button</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-delete-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon-delete-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-interface"></i>
                                    </div>
                                    <div class="text-muted">flaticon-interface</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-more"></i>
                                    </div>
                                    <div class="text-muted">flaticon-more</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-warning-sign"></i>
                                    </div>
                                    <div class="text-muted">flaticon-warning-sign</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-calendar"></i>
                                    </div>
                                    <div class="text-muted">flaticon-calendar</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-instagram-logo"></i>
                                    </div>
                                    <div class="text-muted">flaticon-instagram-logo</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-linkedin"></i>
                                    </div>
                                    <div class="text-muted">flaticon-linkedin</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-facebook-logo-button"></i>
                                    </div>
                                    <div class="text-muted">flaticon-facebook-logo-button</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-twitter-logo-button"></i>
                                    </div>
                                    <div class="text-muted">flaticon-twitter-logo-button</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-cancel"></i>
                                    </div>
                                    <div class="text-muted">flaticon-cancel</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-exclamation-square"></i>
                                    </div>
                                    <div class="text-muted">flaticon-exclamation-square</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-buildings"></i>
                                    </div>
                                    <div class="text-muted">flaticon-buildings</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-danger"></i>
                                    </div>
                                    <div class="text-muted">flaticon-danger</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-technology-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon-technology-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-letter-g"></i>
                                    </div>
                                    <div class="text-muted">flaticon-letter-g</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-interface-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon-interface-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-circle"></i>
                                    </div>
                                    <div class="text-muted">flaticon-circle</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-pin"></i>
                                    </div>
                                    <div class="text-muted">flaticon-pin</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-close"></i>
                                    </div>
                                    <div class="text-muted">flaticon-close</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-clock-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon-clock-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-apps"></i>
                                    </div>
                                    <div class="text-muted">flaticon-apps</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-user"></i>
                                    </div>
                                    <div class="text-muted">flaticon-user</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-menu-button"></i>
                                    </div>
                                    <div class="text-muted">flaticon-menu-button</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-settings"></i>
                                    </div>
                                    <div class="text-muted">flaticon-settings</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-home"></i>
                                    </div>
                                    <div class="text-muted">flaticon-home</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-clock-2"></i>
                                    </div>
                                    <div class="text-muted">flaticon-clock-2</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-lifebuoy"></i>
                                    </div>
                                    <div class="text-muted">flaticon-lifebuoy</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-cogwheel-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon-cogwheel-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-paper-plane"></i>
                                    </div>
                                    <div class="text-muted">flaticon-paper-plane</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-statistics"></i>
                                    </div>
                                    <div class="text-muted">flaticon-statistics</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-diagram"></i>
                                    </div>
                                    <div class="text-muted">flaticon-diagram</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-line-graph"></i>
                                    </div>
                                    <div class="text-muted">flaticon-line-graph</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-customer"></i>
                                    </div>
                                    <div class="text-muted">flaticon-customer</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-visible"></i>
                                    </div>
                                    <div class="text-muted">flaticon-visible</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-shopping-basket"></i>
                                    </div>
                                    <div class="text-muted">flaticon-shopping-basket</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-price-tag"></i>
                                    </div>
                                    <div class="text-muted">flaticon-price-tag</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-businesswoman"></i>
                                    </div>
                                    <div class="text-muted">flaticon-businesswoman</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-medal"></i>
                                    </div>
                                    <div class="text-muted">flaticon-medal</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-like"></i>
                                    </div>
                                    <div class="text-muted">flaticon-like</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-edit"></i>
                                    </div>
                                    <div class="text-muted">flaticon-edit</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-avatar"></i>
                                    </div>
                                    <div class="text-muted">flaticon-avatar</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-download"></i>
                                    </div>
                                    <div class="text-muted">flaticon-download</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-home-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon-home-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-mail"></i>
                                    </div>
                                    <div class="text-muted">flaticon-mail</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-mail-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon-mail-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-warning"></i>
                                    </div>
                                    <div class="text-muted">flaticon-warning</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-cart"></i>
                                    </div>
                                    <div class="text-muted">flaticon-cart</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-bag"></i>
                                    </div>
                                    <div class="text-muted">flaticon-bag</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-pie-chart"></i>
                                    </div>
                                    <div class="text-muted">flaticon-pie-chart</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-graph"></i>
                                    </div>
                                    <div class="text-muted">flaticon-graph</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-interface-2"></i>
                                    </div>
                                    <div class="text-muted">flaticon-interface-2</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-chat"></i>
                                    </div>
                                    <div class="text-muted">flaticon-chat</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-envelope"></i>
                                    </div>
                                    <div class="text-muted">flaticon-envelope</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-chat-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon-chat-1</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-interface-3"></i>
                                    </div>
                                    <div class="text-muted">flaticon-interface-3</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-background"></i>
                                    </div>
                                    <div class="text-muted">flaticon-background</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-file-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon-file-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-interface-4"></i>
                                    </div>
                                    <div class="text-muted">flaticon-interface-4</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-multimedia-3"></i>
                                    </div>
                                    <div class="text-muted">flaticon-multimedia-3</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-list"></i>
                                    </div>
                                    <div class="text-muted">flaticon-list</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-time"></i>
                                    </div>
                                    <div class="text-muted">flaticon-time</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-profile"></i>
                                    </div>
                                    <div class="text-muted">flaticon-profile</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-imac"></i>
                                    </div>
                                    <div class="text-muted">flaticon-imac</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-medical"></i>
                                    </div>
                                    <div class="text-muted">flaticon-medical</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-music"></i>
                                    </div>
                                    <div class="text-muted">flaticon-music</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-plus"></i>
                                    </div>
                                    <div class="text-muted">flaticon-plus</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-exclamation-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon-exclamation-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-info"></i>
                                    </div>
                                    <div class="text-muted">flaticon-info</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-menu-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon-menu-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-menu-2"></i>
                                    </div>
                                    <div class="text-muted">flaticon-menu-2</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-share"></i>
                                    </div>
                                    <div class="text-muted">flaticon-share</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-interface-5"></i>
                                    </div>
                                    <div class="text-muted">flaticon-interface-5</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-signs"></i>
                                    </div>
                                    <div class="text-muted">flaticon-signs</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-tabs"></i>
                                    </div>
                                    <div class="text-muted">flaticon-tabs</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-multimedia-4"></i>
                                    </div>
                                    <div class="text-muted">flaticon-multimedia-4</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-upload-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon-upload-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-web"></i>
                                    </div>
                                    <div class="text-muted">flaticon-web</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-placeholder"></i>
                                    </div>
                                    <div class="text-muted">flaticon-placeholder</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-placeholder-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon-placeholder-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-layers"></i>
                                    </div>
                                    <div class="text-muted">flaticon-layers</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-interface-6"></i>
                                    </div>
                                    <div class="text-muted">flaticon-interface-6</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-interface-7"></i>
                                    </div>
                                    <div class="text-muted">flaticon-interface-7</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-interface-8"></i>
                                    </div>
                                    <div class="text-muted">flaticon-interface-8</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-tool-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon-tool-1</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-settings-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon-settings-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-alarm"></i>
                                    </div>
                                    <div class="text-muted">flaticon-alarm</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-search-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon-search-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-time-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon-time-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-stopwatch"></i>
                                    </div>
                                    <div class="text-muted">flaticon-stopwatch</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-folder"></i>
                                    </div>
                                    <div class="text-muted">flaticon-folder</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-folder-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon-folder-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-folder-2"></i>
                                    </div>
                                    <div class="text-muted">flaticon-folder-2</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-folder-3"></i>
                                    </div>
                                    <div class="text-muted">flaticon-folder-3</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-file-2"></i>
                                    </div>
                                    <div class="text-muted">flaticon-file-2</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-list-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon-list-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-list-2"></i>
                                    </div>
                                    <div class="text-muted">flaticon-list-2</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-calendar-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon-calendar-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-time-2"></i>
                                    </div>
                                    <div class="text-muted">flaticon-time-2</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-interface-9"></i>
                                    </div>
                                    <div class="text-muted">flaticon-interface-9</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-app"></i>
                                    </div>
                                    <div class="text-muted">flaticon-app</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-suitcase"></i>
                                    </div>
                                    <div class="text-muted">flaticon-suitcase</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-grid-menu-v2"></i>
                                    </div>
                                    <div class="text-muted">flaticon-grid-menu-v2</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-more-v6"></i>
                                    </div>
                                    <div class="text-muted">flaticon-more-v6</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-more-v5"></i>
                                    </div>
                                    <div class="text-muted">flaticon-more-v5</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-add"></i>
                                    </div>
                                    <div class="text-muted">flaticon-add</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-multimedia-5"></i>
                                    </div>
                                    <div class="text-muted">flaticon-multimedia-5</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-more-v4"></i>
                                    </div>
                                    <div class="text-muted">flaticon-more-v4</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-placeholder-2"></i>
                                    </div>
                                    <div class="text-muted">flaticon-placeholder-2</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-map-location"></i>
                                    </div>
                                    <div class="text-muted">flaticon-map-location</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-users"></i>
                                    </div>
                                    <div class="text-muted">flaticon-users</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-profile-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon-profile-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-lock"></i>
                                    </div>
                                    <div class="text-muted">flaticon-lock</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-sound"></i>
                                    </div>
                                    <div class="text-muted">flaticon-sound</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-star"></i>
                                    </div>
                                    <div class="text-muted">flaticon-star</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-placeholder-3"></i>
                                    </div>
                                    <div class="text-muted">flaticon-placeholder-3</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-bell"></i>
                                    </div>
                                    <div class="text-muted">flaticon-bell</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-paper-plane-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon-paper-plane-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-users-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon-users-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-more-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon-more-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-up-arrow-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon-up-arrow-1</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-grid-menu"></i>
                                    </div>
                                    <div class="text-muted">flaticon-grid-menu</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-alarm-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon-alarm-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-earth-globe"></i>
                                    </div>
                                    <div class="text-muted">flaticon-earth-globe</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-alert-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon-alert-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-internet"></i>
                                    </div>
                                    <div class="text-muted">flaticon-internet</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-user-ok"></i>
                                    </div>
                                    <div class="text-muted">flaticon-user-ok</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-user-add"></i>
                                    </div>
                                    <div class="text-muted">flaticon-user-add</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-user-settings"></i>
                                    </div>
                                    <div class="text-muted">flaticon-user-settings</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-truck"></i>
                                    </div>
                                    <div class="text-muted">flaticon-truck</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-analytics"></i>
                                    </div>
                                    <div class="text-muted">flaticon-analytics</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-notes"></i>
                                    </div>
                                    <div class="text-muted">flaticon-notes</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-tea-cup"></i>
                                    </div>
                                    <div class="text-muted">flaticon-tea-cup</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-exclamation-2"></i>
                                    </div>
                                    <div class="text-muted">flaticon-exclamation-2</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-technology-2"></i>
                                    </div>
                                    <div class="text-muted">flaticon-technology-2</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-location"></i>
                                    </div>
                                    <div class="text-muted">flaticon-location</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-edit-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon-edit-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-home-2"></i>
                                    </div>
                                    <div class="text-muted">flaticon-home-2</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-dashboard"></i>
                                    </div>
                                    <div class="text-muted">flaticon-dashboard</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-information"></i>
                                    </div>
                                    <div class="text-muted">flaticon-information</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-light"></i>
                                    </div>
                                    <div class="text-muted">flaticon-light</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-car"></i>
                                    </div>
                                    <div class="text-muted">flaticon-car</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-business"></i>
                                    </div>
                                    <div class="text-muted">flaticon-business</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-squares-2"></i>
                                    </div>
                                    <div class="text-muted">flaticon-squares-2</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-signs-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon-signs-1</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-mark"></i>
                                    </div>
                                    <div class="text-muted">flaticon-mark</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-squares-3"></i>
                                    </div>
                                    <div class="text-muted">flaticon-squares-3</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-comment"></i>
                                    </div>
                                    <div class="text-muted">flaticon-comment</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-shapes"></i>
                                    </div>
                                    <div class="text-muted">flaticon-shapes</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-clipboard"></i>
                                    </div>
                                    <div class="text-muted">flaticon-clipboard</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-squares-4"></i>
                                    </div>
                                    <div class="text-muted">flaticon-squares-4</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-delete-2"></i>
                                    </div>
                                    <div class="text-muted">flaticon-delete-2</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-bell-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon-bell-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-list-3"></i>
                                    </div>
                                    <div class="text-muted">flaticon-list-3</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-infinity"></i>
                                    </div>
                                    <div class="text-muted">flaticon-infinity</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-chat-2"></i>
                                    </div>
                                    <div class="text-muted">flaticon-chat-2</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-calendar-2"></i>
                                    </div>
                                    <div class="text-muted">flaticon-calendar-2</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-signs-2"></i>
                                    </div>
                                    <div class="text-muted">flaticon-signs-2</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-time-3"></i>
                                    </div>
                                    <div class="text-muted">flaticon-time-3</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-calendar-3"></i>
                                    </div>
                                    <div class="text-muted">flaticon-calendar-3</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-interface-10"></i>
                                    </div>
                                    <div class="text-muted">flaticon-interface-10</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-interface-11"></i>
                                    </div>
                                    <div class="text-muted">flaticon-interface-11</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-folder-4"></i>
                                    </div>
                                    <div class="text-muted">flaticon-folder-4</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-alert-2"></i>
                                    </div>
                                    <div class="text-muted">flaticon-alert-2</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-cogwheel-2"></i>
                                    </div>
                                    <div class="text-muted">flaticon-cogwheel-2</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-graphic-2"></i>
                                    </div>
                                    <div class="text-muted">flaticon-graphic-2</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-rotate"></i>
                                    </div>
                                    <div class="text-muted">flaticon-rotate</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-feed"></i>
                                    </div>
                                    <div class="text-muted">flaticon-feed</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-safe-shield-protection"></i>
                                    </div>
                                    <div class="text-muted">flaticon-safe-shield-protection</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-security"></i>
                                    </div>
                                    <div class="text-muted">flaticon-security</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-download-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon-download-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-pie-chart-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon-pie-chart-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon-notepad"></i>
                                    </div>
                                    <div class="text-muted">flaticon-notepad</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-notification"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-notification</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-settings"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-settings</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-search"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-search</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-delete"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-delete</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-psd"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-psd</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-list"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-list</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-box"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-box</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-download"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-download</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-shield"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-shield</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-paperplane"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-paperplane</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-avatar"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-avatar</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-bell"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-bell</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-fax"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-fax</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-chart2"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-chart2</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-supermarket"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-supermarket</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-phone"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-phone</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-envelope"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-envelope</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-pin"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-pin</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-chat"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-chat</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-chart"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-chart</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-infographic"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-infographic</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-grids"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-grids</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-menu"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-menu</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-plus"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-plus</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-list-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-list-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-talk"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-talk</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-file"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-file</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-user"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-user</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-line-chart"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-line-chart</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-percentage"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-percentage</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-menu-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-menu-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-paper-plane"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-paper-plane</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-menu-2"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-menu-2</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-shopping-cart"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-shopping-cart</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-pie-chart"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-pie-chart</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-box-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-box-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-map"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-map</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-favourite"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-favourite</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-checking"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-checking</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-safe"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-safe</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-heart-rate-monitor"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-heart-rate-monitor</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-layers"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-layers</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-delivery-package"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-delivery-package</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-sms"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-sms</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-image-file"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-image-file</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-plus-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-plus-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-send"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-send</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-graphic-design"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-graphic-design</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-cup"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-cup</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-website"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-website</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-gift"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-gift</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-chronometer"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-chronometer</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-browser"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-browser</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-digital-marketing"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-digital-marketing</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-calendar"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-calendar</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-calendar-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-calendar-1</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-rocket"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-rocket</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-analytics"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-analytics</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-pie-chart-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-pie-chart-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-pie-chart-2"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-pie-chart-2</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-analytics-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-analytics-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-google-drive-file"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-google-drive-file</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-pie-chart-3"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-pie-chart-3</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-poll-symbol"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-poll-symbol</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-gear"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-gear</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-magnifier-tool"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-magnifier-tool</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-add"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-add</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-cube"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-cube</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-gift-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-gift-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-list-2"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-list-2</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-shopping-cart-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-shopping-cart-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-calendar-2"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-calendar-2</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-laptop"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-laptop</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-cube-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-cube-1</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-layers-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-layers-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-chat-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-chat-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-copy"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-copy</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-paper"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-paper</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-hospital"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-hospital</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-calendar-3"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-calendar-3</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-speaker"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-speaker</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-pie-chart-4"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-pie-chart-4</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-schedule"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-schedule</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-expand"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-expand</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-menu-3"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-menu-3</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-download-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-download-1</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-help"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-help</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-list-3"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-list-3</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-notepad"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-notepad</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-graph"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-graph</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-browser-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-browser-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-photograph"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-photograph</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-browser-2"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-browser-2</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-hourglass"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-hourglass</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-mail"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-mail</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-cardiogram"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-cardiogram</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-document"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-document</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-contract"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-contract</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-graph-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-graph-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-graphic"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-graphic</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-position"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-position</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-soft-icons"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-soft-icons</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-circle-vol-2"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-circle-vol-2</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-rocket-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-rocket-1</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-lorry"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-lorry</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-cd"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-cd</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-file-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-file-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-reload"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-reload</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-placeholder"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-placeholder</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-refresh"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-refresh</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-medical-records"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-medical-records</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-rectangular"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-rectangular</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-medical-records-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-medical-records-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-indent-dots"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-indent-dots</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-search-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-search-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-edit"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-edit</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-new-email"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-new-email</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-calendar-4"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-calendar-4</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-console"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-console</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-open-text-book"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-open-text-book</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-download-2"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-download-2</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-zig-zag-line-sign"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-zig-zag-line-sign</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-tools-and-utensils"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-tools-and-utensils</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-crisp-icons"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-crisp-icons</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-trash"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-trash</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-lock"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-lock</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-bell-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-bell-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-setup"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-setup</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-menu-4"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-menu-4</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-architecture-and-city"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-architecture-and-city</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-shelter"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-shelter</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-add-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-add-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-checkmark"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-checkmark</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-circular-arrow"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-circular-arrow</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-user-outline-symbol"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-user-outline-symbol</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-rhombus"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-rhombus</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-crisp-icons-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-crisp-icons-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-soft-icons-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-soft-icons-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-hexagonal"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-hexagonal</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-time"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-time</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-contrast"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-contrast</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-telegram-logo"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-telegram-logo</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-hangouts-logo"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-hangouts-logo</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-analytics-2"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-analytics-2</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-wifi"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-wifi</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-protected"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-protected</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-drop"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-drop</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-mail-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-mail-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-delivery-truck"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-delivery-truck</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-writing"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-writing</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-calendar-5"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-calendar-5</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-protection"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-protection</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-calendar-6"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-calendar-6</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-calendar-7"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-calendar-7</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-calendar-8"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-calendar-8</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-bell-2"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-bell-2</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-hourglass-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-hourglass-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-next"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-next</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-chat-2"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-chat-2</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-correct"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-correct</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-photo-camera"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-photo-camera</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-fast-next"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-fast-next</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-fast-back"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-fast-back</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-down"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-down</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-back"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-back</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-up"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-up</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-arrow-down"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-arrow-down</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-arrow-up"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-arrow-up</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-accept"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-accept</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-sort"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-sort</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-arrow"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-arrow</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-back-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-back-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-add-square"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-add-square</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-quotation-mark"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-quotation-mark</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-clip-symbol"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-clip-symbol</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-check-mark"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-check-mark</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-folder"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-folder</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-cancel-music"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-cancel-music</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-cross"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-cross</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-pen"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-pen</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-email"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-email</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-graph-2"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-graph-2</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-open-box"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-open-box</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-files-and-folders"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-files-and-folders</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-ui"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-ui</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-sheet"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-sheet</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-dashboard"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-dashboard</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-user-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-user-1</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-group"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-group</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-black-back-closed-envelope-shape"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-black-back-closed-envelope-shape</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-left-arrow"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-left-arrow</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-sort-alphabetically"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-sort-alphabetically</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-sort-down"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-sort-down</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-rubbish-bin"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-rubbish-bin</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-rubbish-bin-delete-button"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-rubbish-bin-delete-button</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-calendar-9"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-calendar-9</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-tag"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-tag</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-refresh-button"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-refresh-button</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-refresh-arrow"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-refresh-arrow</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-reload-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-reload-1</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-refresh-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-refresh-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-left-arrow-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-left-arrow-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-reply"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-reply</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-reply-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-reply-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-printer"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-printer</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-print"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-print</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-shrink"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-shrink</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-resize"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-resize</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-arrow-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-arrow-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-size"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-size</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-arrow-2"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-arrow-2</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-cancel"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-cancel</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-exclamation"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-exclamation</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-line"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-line</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-warning"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-warning</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-information"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-information</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-layers-2"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-layers-2</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-file-2"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-file-2</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-bell-3"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-bell-3</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-bell-4"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-bell-4</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-bell-5"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-bell-5</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-bell-alarm-symbol"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-bell-alarm-symbol</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-world"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-world</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-graphic-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-graphic-1</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-send-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-send-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-location"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-location</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-pin-1"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-pin-1</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-start-up"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-start-up</div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-stretch">
                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                        <i class="icon-2x text-dark-50 flaticon2-right-arrow"></i>
                                    </div>
                                    <div class="text-muted">flaticon2-right-arrow</div>
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
            function initFlaticonLoadMore() {
                var container = document.getElementById('flaticon_rows_container');
                var countText = document.getElementById('flaticon_count_text');
                var searchInput = document.getElementById('flaticon_search_input');
                var sizeInput = document.getElementById('flaticon_size_input');
                var colorInput = document.getElementById('flaticon_color_input');
                var resetBtn = document.getElementById('flaticon_reset_btn');
                var previewIcon = document.getElementById('flaticon_preview_icon');
                var iconBadge = document.getElementById('flaticon_icon_badge');
                var snippetCode = document.getElementById('flaticon_snippet_code');
                var copySnippetBtn = document.getElementById('flaticon_copy_snippet_btn');
                var clearSelectedBtn = document.getElementById('flaticon_clear_selected_btn');
                var copyStatus = document.getElementById('flaticon_copy_status');
                var flaticonCardTitle = null;
                var flaticonCardHeader = null;
                var cardLabels = document.querySelectorAll('.card.card-custom .card-label');
                for (var labelIdx = 0; labelIdx < cardLabels.length; labelIdx++) {
                    if ((cardLabels[labelIdx].textContent || '').trim() === 'Flaticon Icons') {
                        flaticonCardTitle = cardLabels[labelIdx];
                        flaticonCardHeader = cardLabels[labelIdx].closest('.card-header');
                        break;
                    }
                }

                if (!container || !countText || !searchInput || !sizeInput || !colorInput || !resetBtn ||
                    !previewIcon || !iconBadge || !snippetCode || !copySnippetBtn || !clearSelectedBtn || !copyStatus) {
                    return;
                }

                var iconCards = Array.prototype.slice.call(
                    container.querySelectorAll('.col-md-2.d-flex.align-items-stretch')
                );
                var compactRow = document.createElement('div');
                compactRow.className = 'row';
                for (var c = 0; c < iconCards.length; c++) {
                    compactRow.appendChild(iconCards[c]);
                }
                container.innerHTML = '';
                container.appendChild(compactRow);

                var totalIcons = iconCards.length;
                var currentQuery = '';
                var defaultSize = 24;
                var defaultColor = '#000000';
                var currentSize = parseInt(sizeInput.value || defaultSize, 10);
                var currentColor = colorInput.value || defaultColor;
                var selectedIconClass = '';

                function normalizeSize(value) {
                    var parsed = parseInt(value, 10);
                    if (isNaN(parsed)) {
                        parsed = defaultSize;
                    }
                    var allowedSizes = [12, 16, 20, 24, 28, 32, 40, 48, 56, 64];
                    return allowedSizes.indexOf(parsed) !== -1 ? parsed : defaultSize;
                }

                for (var idx = 0; idx < iconCards.length; idx++) {
                    var nameEl = iconCards[idx].querySelector('.text-muted');
                    var iconName = nameEl ? nameEl.textContent.trim() : '';
                    iconCards[idx].setAttribute('data-icon-name', iconName.toLowerCase());
                    iconCards[idx].setAttribute('data-icon-class', iconName);
                    iconCards[idx].style.cursor = 'pointer';
                }

                function applyIconAppearance() {
                    for (var i = 0; i < iconCards.length; i++) {
                        var iconEl = iconCards[i].querySelector('i');
                        if (!iconEl) {
                            continue;
                        }

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
                        if (!card) {
                            continue;
                        }

                        if (iconCards[i].getAttribute('data-icon-class') === selectedIconClass) {
                            card.classList.add('bg-light-primary');
                            card.style.setProperty('border', '1px solid #3699ff');
                        } else {
                            card.classList.remove('bg-light-primary');
                            card.style.removeProperty('border');
                        }
                    }
                }

                function getCurrentSnippet() {
                    if (!selectedIconClass) {
                        return '';
                    }

                    return '<i class="' + selectedIconClass + '" style="font-size: ' + currentSize + 'px; color: ' + currentColor + ';"></i>';
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
                    iconBadge.textContent = selectedIconClass;
                    iconBadge.style.visibility = 'visible';
                    snippetCode.value = getCurrentSnippet();
                    copySnippetBtn.disabled = false;
                    clearSelectedBtn.disabled = false;
                }

                function clearSelection() {
                    selectedIconClass = '';
                    copyStatus.textContent = '';
                    clearCopiedBadges();
                    highlightSelectedCard();
                    updateSnippetPanel();
                }

                function clearCopiedBadges() {
                    for (var i = 0; i < iconCards.length; i++) {
                        var badge = iconCards[i].querySelector('.flaticon-copied-badge');
                        if (badge) {
                            badge.remove();
                        }
                    }
                }

                function showCopiedBadgeOnSelectedCard() {
                    if (!selectedIconClass) {
                        return;
                    }

                    clearCopiedBadges();
                    for (var i = 0; i < iconCards.length; i++) {
                        if (iconCards[i].getAttribute('data-icon-class') !== selectedIconClass) {
                            continue;
                        }

                        var card = iconCards[i].querySelector('.bg-hover-light');
                        if (!card) {
                            continue;
                        }

                        card.style.position = 'relative';
                        var badge = document.createElement('span');
                        badge.className = 'flaticon-copied-badge';
                        badge.textContent = 'Copied';
                        badge.style.cssText = 'position:absolute;top:6px;right:6px;background:#1BC5BD;color:#fff;padding:2px 8px;border-radius:999px;font-size:11px;font-weight:700;line-height:1.4;';
                        card.appendChild(badge);
                        break;
                    }
                }

                function showCopyToast(message) {
                    var toast = document.getElementById('flaticon_copy_toast');
                    if (!toast) {
                        toast = document.createElement('div');
                        toast.id = 'flaticon_copy_toast';
                        toast.style.cssText = 'position:fixed;top:20px;right:20px;z-index:2000;background:#1BC5BD;color:#fff;padding:10px 14px;border-radius:6px;font-weight:600;font-size:12px;box-shadow:0 4px 12px rgba(0,0,0,.2);opacity:0;transform:translateY(-8px);transition:all .2s ease;';
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
                        copyStatus.textContent = '';
                        highlightSelectedCard();
                        updateSnippetPanel();
                        applyIconAppearance();
                        showCopiedBadgeOnSelectedCard();
                        if (flaticonCardHeader || flaticonCardTitle) {
                            var targetEl = flaticonCardHeader || flaticonCardTitle;
                            var top = targetEl.getBoundingClientRect().top + window.pageYOffset - 120;
                            window.scrollTo({
                                top: Math.max(top, 0),
                                behavior: 'smooth'
                            });
                        }
                    });
                }

                copySnippetBtn.addEventListener('click', function() {
                    var snippet = getCurrentSnippet();
                    if (!snippet) {
                        return;
                    }

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

            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', initFlaticonLoadMore);
            } else {
                initFlaticonLoadMore();
            }
        })();
    </script>
@endsection



