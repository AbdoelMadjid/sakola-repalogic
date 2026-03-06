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
                <code>Bootstrap Navs</code>component with a variety of options to provide unique looking Line Tab components
                that matches Metronic's design standards.
                <br />For more info please visit the plugin's
                <a class="font-weight-bold" href="https://getbootstrap.com/docs/4.5/components/navs/#tabs"
                    target="_blank">Documentation</a>.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Row-->
        <div class="row">
            <div class="col-xl-6">
                <!--begin::Example-->
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header card-header-tabs-line">
                        <div class="card-title">
                            <h3 class="card-label">Card Title</h3>
                        </div>
                        <div class="card-toolbar">
                            <ul class="nav nav-tabs nav-bold nav-tabs-line">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1_2">Week</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2_2">Month</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                        aria-haspopup="true" aria-expanded="false">Year</a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                        <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_3_2">Action</a>
                                        <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_3_2">Another
                                            action</a>
                                        <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_3_2">Something else
                                            here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_3_2">Separated
                                            link</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="kt_tab_pane_1_2" role="tabpanel">Lorem Ipsum is
                                simply dummy text of the printing and typesetting industry. Lorem Ipsum passages, and more
                                recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                                Ipsum. Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
                                PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry. with desktop publishing software like Aldus PageMaker
                                including versions of Lorem Ipsum. Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                            <div class="tab-pane fade" id="kt_tab_pane_2_2" role="tabpanel">Lorem Ipsum is simply dummy text
                                of the printing and typesetting industry. Lorem Ipsum passages, and more recently with
                                desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem
                                Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                                including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.</div>
                            <div class="tab-pane fade" id="kt_tab_pane_3_2" role="tabpanel">Lorem Ipsum is simply dummy text
                                of the printing and typesetting industry. Lorem Ipsum passages, and more recently with
                                desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem
                                Ipsum is simply dummy text of the printing and typesetting industry. with desktop publishing
                                software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum passages, and
                                more recently with desktop publishing software like Aldus PageMaker including versions of
                                Lorem Ipsum.</div>
                        </div>
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Code example-->
                <div class="example example-compact mt-1 gutter-b">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre style="height:300px">
<code class="language-html">
                &lt;div class="card card-custom"&gt;
                 &lt;div class="card-header card-header-tabs-line"&gt;
                  &lt;div class="card-title"&gt;
                   &lt;h3 class="card-label"&gt;Card Title&lt;/h3&gt;
                  &lt;/div&gt;
                  &lt;div class="card-toolbar"&gt;
                   &lt;ul class="nav nav-tabs nav-bold nav-tabs-line"&gt;
                    &lt;li class="nav-item"&gt;
                     &lt;a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1_2"&gt;Week&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li class="nav-item"&gt;
                     &lt;a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2_2"&gt;Month&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li class="nav-item dropdown"&gt;
                     &lt;a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"&gt;Year&lt;/a&gt;
                     &lt;div class="dropdown-menu dropdown-menu-sm dropdown-menu-right"&gt;
                      &lt;a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_3_2"&gt;Action&lt;/a&gt;
                      &lt;a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_3_2"&gt;Another action&lt;/a&gt;
                      &lt;a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_3_2"&gt;Something else here&lt;/a&gt;
                      &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
                      &lt;a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_3_2"&gt;Separated link&lt;/a&gt;
                     &lt;/div&gt;
                    &lt;/li&gt;
                   &lt;/ul&gt;
                  &lt;/div&gt;
                 &lt;/div&gt;
                 &lt;div class="card-body"&gt;
                  &lt;div class="tab-content"&gt;
                   &lt;div class="tab-pane fade show active" id="kt_tab_pane_1_2" role="tabpanel"&gt;
                    ...
                   &lt;/div&gt;
                   &lt;div class="tab-pane fade" id="kt_tab_pane_2_2" role="tabpanel"&gt;
                    ...
                   &lt;/div&gt;
                   &lt;div class="tab-pane fade" id="kt_tab_pane_3_2" role="tabpanel"&gt;
                    ...
                   &lt;/div&gt;
                  &lt;/div&gt;
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
                    <div class="card-header card-header-tabs-line">
                        <div class="card-title">
                            <h3 class="card-label">Card Title With Icons</h3>
                        </div>
                        <div class="card-toolbar">
                            <ul class="nav nav-tabs nav-bold nav-tabs-line">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1_3">
                                        <span class="nav-icon">
                                            <i class="flaticon2-chat-1"></i>
                                        </span>
                                        <span class="nav-text">Week</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2_3">
                                        <span class="nav-icon">
                                            <i class="flaticon2-drop"></i>
                                        </span>
                                        <span class="nav-text">Month</span>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                        role="button" aria-haspopup="true" aria-expanded="false">
                                        <span class="nav-icon">
                                            <i class="flaticon2-gear"></i>
                                        </span>
                                        <span class="nav-text">Year</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                        <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_3_3">Action</a>
                                        <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_3_3">Another
                                            action</a>
                                        <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_3_3">Something else
                                            here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_3_3">Separated
                                            link</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="kt_tab_pane_1_3" role="tabpanel"
                                aria-labelledby="kt_tab_pane_1_3">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum passages, and more recently with desktop publishing
                                software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum passages, and
                                more recently with desktop publishing software like Aldus PageMaker including versions of
                                Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. with
                                desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem
                                Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                                including versions of Lorem Ipsum.</div>
                            <div class="tab-pane fade" id="kt_tab_pane_2_3" role="tabpanel"
                                aria-labelledby="kt_tab_pane_2_3">Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum
                                passages, and more recently with desktop publishing software like Aldus PageMaker including
                                versions of Lorem Ipsum. Lorem Ipsum passages, and more recently with desktop publishing
                                software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                            <div class="tab-pane fade" id="kt_tab_pane_3_3" role="tabpanel"
                                aria-labelledby="kt_tab_pane_3_3">Aldus PageMaker including versions lorem Ipsum has been
                                the industry's standard. Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum passages, and more recently with desktop publishing software like
                                Aldus PageMaker including versions of Lorem Ipsum.</div>
                        </div>
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Code example-->
                <div class="example example-compact mt-1 gutter-b">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre style="height:300px">
<code class="language-html">
                &lt;div class="card card-custom"&gt;
                 &lt;div class="card-header card-header-tabs-line"&gt;
                  &lt;div class="card-title"&gt;
                   &lt;h3 class="card-label"&gt;Card Title With Icons&lt;/h3&gt;
                  &lt;/div&gt;
                  &lt;div class="card-toolbar"&gt;
                   &lt;ul class="nav nav-tabs nav-bold nav-tabs-line"&gt;
                    &lt;li class="nav-item"&gt;
                     &lt;a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1_3"&gt;
                         &lt;span class="nav-icon"&gt;&lt;i class="flaticon2-chat-1"&gt;&lt;/i&gt;&lt;/span&gt;
                         &lt;span class="nav-text"&gt;Week&lt;/span&gt;
                     &lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li class="nav-item"&gt;
                     &lt;a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2_3"&gt;
                         &lt;span class="nav-icon"&gt;&lt;i class="flaticon2-drop"&gt;&lt;/i&gt;&lt;/span&gt;
                         &lt;span class="nav-text"&gt;Month&lt;/span&gt;
                     &lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li class="nav-item dropdown"&gt;
                     &lt;a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"&gt;
                         &lt;span class="nav-icon"&gt;&lt;i class="flaticon2-gear"&gt;&lt;/i&gt;&lt;/span&gt;
                         &lt;span class="nav-text"&gt;Year&lt;/span&gt;
                     &lt;/a&gt;
                     &lt;div class="dropdown-menu dropdown-menu-sm dropdown-menu-right"&gt;
                      &lt;a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_3_3"&gt;Action&lt;/a&gt;
                      &lt;a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_3_3"&gt;Another action&lt;/a&gt;
                      &lt;a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_3_3"&gt;Something else here&lt;/a&gt;
                      &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
                      &lt;a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_3_3"&gt;Separated link&lt;/a&gt;
                     &lt;/div&gt;
                    &lt;/li&gt;
                   &lt;/ul&gt;
                  &lt;/div&gt;
                 &lt;/div&gt;
                 &lt;div class="card-body"&gt;
                  &lt;div class="tab-content"&gt;
                   &lt;div class="tab-pane fade show active" id="kt_tab_pane_1_3" role="tabpanel" aria-labelledby="kt_tab_pane_1_3"&gt;
                    ...
                   &lt;/div&gt;
                   &lt;div class="tab-pane fade" id="kt_tab_pane_2_3" role="tabpanel" aria-labelledby="kt_tab_pane_2_3"&gt;
                    ...
                   &lt;/div&gt;
                   &lt;div class="tab-pane fade" id="kt_tab_pane_3_3" role="tabpanel" aria-labelledby="kt_tab_pane_3_3"&gt;
                    ...
                   &lt;/div&gt;
                  &lt;/div&gt;
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
                    <div class="card-header card-header-tabs-line">
                        <div class="card-toolbar">
                            <ul class="nav nav-tabs nav-bold nav-tabs-line">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1_4">
                                        <span class="nav-icon">
                                            <i class="flaticon2-chat-1"></i>
                                        </span>
                                        <span class="nav-text">Week</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2_4">
                                        <span class="nav-icon">
                                            <i class="flaticon2-drop"></i>
                                        </span>
                                        <span class="nav-text">Month</span>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                        role="button" aria-haspopup="true" aria-expanded="false">
                                        <span class="nav-icon">
                                            <i class="flaticon2-gear"></i>
                                        </span>
                                        <span class="nav-text">Year</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-left">
                                        <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_3_4">Action</a>
                                        <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_3_4">Another
                                            action</a>
                                        <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_3_4">Something else
                                            here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_3_4">Separated
                                            link</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="card-toolbar">
                            <div class="dropdown dropdown-inline">
                                <button type="button" class="btn btn-hover-light-primary btn-icon btn-sm"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ki ki-bold-more-hor"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="kt_tab_pane_1_4" role="tabpanel"
                                aria-labelledby="kt_tab_pane_1_4">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum passages, and more recently with desktop publishing
                                software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum passages, and
                                more recently with desktop publishing software like Aldus PageMaker including versions of
                                Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. with
                                desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem
                                Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                                including versions of Lorem Ipsum.</div>
                            <div class="tab-pane fade" id="kt_tab_pane_2_4" role="tabpanel"
                                aria-labelledby="kt_tab_pane_2_4">Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum
                                passages, and more recently with desktop publishing software like Aldus PageMaker including
                                versions of Lorem Ipsum. Lorem Ipsum passages, and more recently with desktop publishing
                                software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                            <div class="tab-pane fade" id="kt_tab_pane_3_4" role="tabpanel"
                                aria-labelledby="kt_tab_pane_3_4">Aldus PageMaker including versions lorem Ipsum has been
                                the industry's standard. Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum passages, and more recently with desktop publishing software like
                                Aldus PageMaker including versions of Lorem Ipsum.</div>
                        </div>
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Code example-->
                <div class="example example-compact mt-1">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre style="height:300px">
<code class="language-html">
                &lt;div class="card card-custom"&gt;
                 &lt;div class="card-header card-header-tabs-line"&gt;
                  &lt;div class="card-toolbar"&gt;
                   &lt;ul class="nav nav-tabs nav-bold nav-tabs-line"&gt;
                    &lt;li class="nav-item"&gt;
                     &lt;a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1_4"&gt;
                     &lt;span class="nav-icon"&gt;&lt;i class="flaticon2-chat-1"&gt;&lt;/i&gt;&lt;/span&gt;
                     &lt;span class="nav-text"&gt;Week&lt;/span&gt;
                     &lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li class="nav-item"&gt;
                     &lt;a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2_4"&gt;
                     &lt;span class="nav-icon"&gt;&lt;i class="flaticon2-drop"&gt;&lt;/i&gt;&lt;/span&gt;
                     &lt;span class="nav-text"&gt;Month&lt;/span&gt;
                     &lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li class="nav-item dropdown"&gt;
                     &lt;a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"&gt;
                     &lt;span class="nav-icon"&gt;&lt;i class="flaticon2-gear"&gt;&lt;/i&gt;&lt;/span&gt;
                     &lt;span class="nav-text"&gt;Year&lt;/span&gt;
                     &lt;/a&gt;
                     &lt;div class="dropdown-menu dropdown-menu-sm dropdown-menu-left"&gt;
                      &lt;a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_3_4"&gt;Action&lt;/a&gt;
                      &lt;a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_3_4"&gt;Another action&lt;/a&gt;
                      &lt;a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_3_4"&gt;Something else here&lt;/a&gt;
                      &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
                      &lt;a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_3_4"&gt;Separated link&lt;/a&gt;
                     &lt;/div&gt;
                    &lt;/li&gt;
                   &lt;/ul&gt;
                  &lt;/div&gt;
                  &lt;div class="card-toolbar"&gt;
                   &lt;div class="dropdown dropdown-inline"&gt;
                    &lt;button type="button" class="btn btn-hover-light-primary btn-icon btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;
                    &lt;i class="ki ki-bold-more-hor "&gt;&lt;/i&gt;
                    &lt;/button&gt;
                    &lt;div class="dropdown-menu dropdown-menu-sm dropdown-menu-right"&gt;
                     &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
                     &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
                     &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
                     &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
                     &lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;
                    &lt;/div&gt;
                   &lt;/div&gt;
                  &lt;/div&gt;
                 &lt;/div&gt;
                 &lt;div class="card-body"&gt;
                  &lt;div class="tab-content"&gt;
                   &lt;div class="tab-pane fade show active" id="kt_tab_pane_1_4" role="tabpanel" aria-labelledby="kt_tab_pane_1_4"&gt;
                    ...
                   &lt;/div&gt;
                   &lt;div class="tab-pane fade" id="kt_tab_pane_2_4" role="tabpanel" aria-labelledby="kt_tab_pane_2_4"&gt;
                    ...
                   &lt;/div&gt;
                   &lt;div class="tab-pane fade" id="kt_tab_pane_3_4" role="tabpanel" aria-labelledby="kt_tab_pane_3_4"&gt;
                    ...
                   &lt;/div&gt;
                  &lt;/div&gt;
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
            <div class="col-xl-6">
                <!--begin::Example-->
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Card Title</h3>
                        </div>
                        <div class="card-toolbar">
                            <ul class="nav nav-bold nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_7_1">Week</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_7_2">Month</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                        role="button" aria-haspopup="true" aria-expanded="false">Year</a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                        <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_7_3">Action</a>
                                        <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_7_3">Another
                                            action</a>
                                        <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_7_3">Something else
                                            here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_7_3">Separated
                                            link</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="kt_tab_pane_7_1" role="tabpanel"
                                aria-labelledby="kt_tab_pane_7_1">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum passages, and more recently with desktop publishing
                                software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum passages, and
                                more recently with desktop publishing software like Aldus PageMaker including versions of
                                Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. with
                                desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem
                                Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                                including versions of Lorem Ipsum.</div>
                            <div class="tab-pane fade" id="kt_tab_pane_7_2" role="tabpanel"
                                aria-labelledby="kt_tab_pane_7_2">Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum
                                passages, and more recently with desktop publishing software like Aldus PageMaker including
                                versions of Lorem Ipsum. Lorem Ipsum passages, and more recently with desktop publishing
                                software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                            <div class="tab-pane fade" id="kt_tab_pane_7_3" role="tabpanel"
                                aria-labelledby="kt_tab_pane_7_3">Aldus PageMaker including versions lorem Ipsum has been
                                the industry's standard. Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum passages, and more recently with desktop publishing software like
                                Aldus PageMaker including versions of Lorem Ipsum.</div>
                        </div>
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Code example-->
                <div class="example example-compact mt-1 gutter-b">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre style="height:300px">
<code class="language-html">
                &lt;div class="card card-custom"&gt;
                 &lt;div class="card-header"&gt;
                  &lt;div class="card-title"&gt;
                   &lt;h3 class="card-label"&gt;Card Title&lt;/h3&gt;
                  &lt;/div&gt;
                  &lt;div class="card-toolbar"&gt;
                   &lt;ul class="nav nav-bold nav-pills"&gt;
                    &lt;li class="nav-item"&gt;
                     &lt;a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_7_1"&gt;Week&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li class="nav-item"&gt;
                     &lt;a class="nav-link" data-toggle="tab" href="#kt_tab_pane_7_2"&gt;Month&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li class="nav-item dropdown"&gt;
                     &lt;a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"&gt;
                         Year
                     &lt;/a&gt;
                     &lt;div class="dropdown-menu dropdown-menu-sm dropdown-menu-right"&gt;
                      &lt;a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_7_3"&gt;Action&lt;/a&gt;
                      &lt;a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_7_3"&gt;Another action&lt;/a&gt;
                      &lt;a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_7_3"&gt;Something else here&lt;/a&gt;
                      &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
                      &lt;a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_7_3"&gt;Separated link&lt;/a&gt;
                     &lt;/div&gt;
                    &lt;/li&gt;
                   &lt;/ul&gt;
                  &lt;/div&gt;
                 &lt;/div&gt;
                 &lt;div class="card-body"&gt;
                  &lt;div class="tab-content"&gt;
                   &lt;div class="tab-pane fade show active" id="kt_tab_pane_7_1" role="tabpanel" aria-labelledby="kt_tab_pane_7_1"&gt;
                    ...
                   &lt;/div&gt;
                   &lt;div class="tab-pane fade" id="kt_tab_pane_7_2" role="tabpanel" aria-labelledby="kt_tab_pane_7_2"&gt;
                    ...
                   &lt;/div&gt;
                   &lt;div class="tab-pane fade" id="kt_tab_pane_7_3" role="tabpanel" aria-labelledby="kt_tab_pane_7_3"&gt;
                    ...
                   &lt;/div&gt;
                  &lt;/div&gt;
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
                            <h3 class="card-label">Card Title With Icons</h3>
                        </div>
                        <div class="card-toolbar">
                            <ul class="nav nav-light-success nav-bold nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_4_1">
                                        <span class="nav-icon">
                                            <i class="flaticon2-chat-1"></i>
                                        </span>
                                        <span class="nav-text">Week</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_4_2">
                                        <span class="nav-icon">
                                            <i class="flaticon2-drop"></i>
                                        </span>
                                        <span class="nav-text">Month</span>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                        role="button" aria-haspopup="true" aria-expanded="false">
                                        <span class="nav-icon">
                                            <i class="flaticon2-gear"></i>
                                        </span>
                                        <span class="nav-text">Year</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                        <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_4_3">Action</a>
                                        <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_4_3">Another
                                            action</a>
                                        <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_4_3">Something else
                                            here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_4_3">Separated
                                            link</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="kt_tab_pane_4_1" role="tabpanel"
                                aria-labelledby="kt_tab_pane_4_1">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum passages, and more recently with desktop publishing
                                software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum passages, and
                                more recently with desktop publishing software like Aldus PageMaker including versions of
                                Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. with
                                desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem
                                Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                                including versions of Lorem Ipsum.</div>
                            <div class="tab-pane fade" id="kt_tab_pane_4_2" role="tabpanel"
                                aria-labelledby="kt_tab_pane_4_2">Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum
                                passages, and more recently with desktop publishing software like Aldus PageMaker including
                                versions of Lorem Ipsum. Lorem Ipsum passages, and more recently with desktop publishing
                                software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                            <div class="tab-pane fade" id="kt_tab_pane_4_3" role="tabpanel"
                                aria-labelledby="kt_tab_pane_4_3">Aldus PageMaker including versions lorem Ipsum has been
                                the industry's standard. Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum passages, and more recently with desktop publishing software like
                                Aldus PageMaker including versions of Lorem Ipsum.</div>
                        </div>
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Code example-->
                <div class="example example-compact mt-1 gutter-b">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre style="height:300px">
<code class="language-html">
                &lt;div class="card card-custom"&gt;
                 &lt;div class="card-header"&gt;
                  &lt;div class="card-title"&gt;
                   &lt;h3 class="card-label"&gt;Card Title With Icons&lt;/h3&gt;
                  &lt;/div&gt;
                  &lt;div class="card-toolbar"&gt;
                   &lt;ul class="nav nav-light-success nav-bold nav-pills"&gt;
                    &lt;li class="nav-item"&gt;
                     &lt;a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_4_1"&gt;
                         &lt;span class="nav-icon"&gt;&lt;i class="flaticon2-chat-1"&gt;&lt;/i&gt;&lt;/span&gt;
                         &lt;span class="nav-text"&gt;Week&lt;/span&gt;
                     &lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li class="nav-item"&gt;
                     &lt;a class="nav-link" data-toggle="tab" href="#kt_tab_pane_4_2"&gt;
                         &lt;span class="nav-icon"&gt;&lt;i class="flaticon2-drop"&gt;&lt;/i&gt;&lt;/span&gt;
                         &lt;span class="nav-text"&gt;Month&lt;/span&gt;
                     &lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li class="nav-item dropdown"&gt;
                     &lt;a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"&gt;
                         &lt;span class="nav-icon"&gt;&lt;i class="flaticon2-gear"&gt;&lt;/i&gt;&lt;/span&gt;
                         &lt;span class="nav-text"&gt;Year&lt;/span&gt;
                     &lt;/a&gt;
                     &lt;div class="dropdown-menu dropdown-menu-sm dropdown-menu-right"&gt;
                      &lt;a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_4_3"&gt;Action&lt;/a&gt;
                      &lt;a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_4_3"&gt;Another action&lt;/a&gt;
                      &lt;a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_4_3"&gt;Something else here&lt;/a&gt;
                      &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
                      &lt;a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_4_3"&gt;Separated link&lt;/a&gt;
                     &lt;/div&gt;
                    &lt;/li&gt;
                   &lt;/ul&gt;
                  &lt;/div&gt;
                 &lt;/div&gt;
                 &lt;div class="card-body"&gt;
                  &lt;div class="tab-content"&gt;
                   &lt;div class="tab-pane fade show active" id="kt_tab_pane_4_1" role="tabpanel" aria-labelledby="kt_tab_pane_4_1"&gt;
                    ...
                   &lt;/div&gt;
                   &lt;div class="tab-pane fade" id="kt_tab_pane_4_2" role="tabpanel" aria-labelledby="kt_tab_pane_4_2"&gt;
                    ...
                   &lt;/div&gt;
                   &lt;div class="tab-pane fade" id="kt_tab_pane_4_3" role="tabpanel" aria-labelledby="kt_tab_pane_4_3"&gt;
                    ...
                   &lt;/div&gt;
                  &lt;/div&gt;
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
                        <div class="card-toolbar">
                            <ul class="nav nav-light-danger nav-bold nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_5_1">
                                        <span class="nav-icon">
                                            <i class="flaticon2-chat-1"></i>
                                        </span>
                                        <span class="nav-text">Week</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_5_2">
                                        <span class="nav-icon">
                                            <i class="flaticon2-drop"></i>
                                        </span>
                                        <span class="nav-text">Month</span>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                        role="button" aria-haspopup="true" aria-expanded="false">
                                        <span class="nav-icon">
                                            <i class="flaticon2-gear"></i>
                                        </span>
                                        <span class="nav-text">Year</span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_5_3">Action</a>
                                        <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_5_3">Another
                                            action</a>
                                        <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_5_3">Something else
                                            here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_5_3">Separated
                                            link</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="card-toolbar">
                            <div class="dropdown dropdown-inline">
                                <button type="button" class="btn btn-hover-light-primary btn-icon btn-sm"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ki ki-bold-more-hor"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="kt_tab_pane_5_1" role="tabpanel"
                                aria-labelledby="kt_tab_pane_5_1">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum passages, and more recently with desktop publishing
                                software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum passages, and
                                more recently with desktop publishing software like Aldus PageMaker including versions of
                                Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. with
                                desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem
                                Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                                including versions of Lorem Ipsum.</div>
                            <div class="tab-pane fade" id="kt_tab_pane_5_2" role="tabpanel"
                                aria-labelledby="kt_tab_pane_5_2">Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum
                                passages, and more recently with desktop publishing software like Aldus PageMaker including
                                versions of Lorem Ipsum. Lorem Ipsum passages, and more recently with desktop publishing
                                software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                            <div class="tab-pane fade" id="kt_tab_pane_5_3" role="tabpanel"
                                aria-labelledby="kt_tab_pane_5_3">Aldus PageMaker including versions lorem Ipsum has been
                                the industry's standard. Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum passages, and more recently with desktop publishing software like
                                Aldus PageMaker including versions of Lorem Ipsum.</div>
                        </div>
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Code example-->
                <div class="example example-compact mt-1">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre style="height:300px">
<code class="language-html">
                &lt;div class="card card-custom"&gt;
                 &lt;div class="card-header"&gt;
                  &lt;div class="card-toolbar"&gt;
                   &lt;ul class="nav nav-light-danger nav-bold nav-pills"&gt;
                    &lt;li class="nav-item"&gt;
                     &lt;a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_5_1"&gt;
                         &lt;span class="nav-icon"&gt;&lt;i class="flaticon2-chat-1"&gt;&lt;/i&gt;&lt;/span&gt;
                         &lt;span class="nav-text"&gt;Week&lt;/span&gt;
                     &lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li class="nav-item"&gt;
                     &lt;a class="nav-link" data-toggle="tab" href="#kt_tab_pane_5_2"&gt;
                         &lt;span class="nav-icon"&gt;&lt;i class="flaticon2-drop"&gt;&lt;/i&gt;&lt;/span&gt;
                         &lt;span class="nav-text"&gt;Month&lt;/span&gt;
                     &lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li class="nav-item dropdown"&gt;
                     &lt;a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"&gt;
                         &lt;span class="nav-icon"&gt;&lt;i class="flaticon2-gear"&gt;&lt;/i&gt;&lt;/span&gt;
                         &lt;span class="nav-text"&gt;Year&lt;/span&gt;
                     &lt;/a&gt;
                     &lt;div class="dropdown-menu"&gt;
                      &lt;a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_5_3"&gt;Action&lt;/a&gt;
                      &lt;a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_5_3"&gt;Another action&lt;/a&gt;
                      &lt;a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_5_3"&gt;Something else here&lt;/a&gt;
                      &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
                      &lt;a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_5_3"&gt;Separated link&lt;/a&gt;
                     &lt;/div&gt;
                    &lt;/li&gt;
                   &lt;/ul&gt;
                  &lt;/div&gt;
                  &lt;div class="card-toolbar"&gt;
                   &lt;div class="dropdown dropdown-inline"&gt;
                    &lt;button type="button" class="btn btn-hover-light-primary btn-icon btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;
                         &lt;i class="ki ki-bold-more-hor "&gt;&lt;/i&gt;
                    &lt;/button&gt;
                    &lt;div class="dropdown-menu dropdown-menu-sm dropdown-menu-right"&gt;
                     &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
                     &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
                     &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
                     &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
                     &lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;
                    &lt;/div&gt;
                   &lt;/div&gt;
                  &lt;/div&gt;
                 &lt;/div&gt;
                 &lt;div class="card-body"&gt;
                  &lt;div class="tab-content"&gt;
                   &lt;div class="tab-pane fade show active" id="kt_tab_pane_5_1" role="tabpanel" aria-labelledby="kt_tab_pane_5_1"&gt;
                    ...
                   &lt;/div&gt;
                   &lt;div class="tab-pane fade" id="kt_tab_pane_5_2" role="tabpanel" aria-labelledby="kt_tab_pane_5_2"&gt;
                    ...
                   &lt;/div&gt;
                   &lt;div class="tab-pane fade" id="kt_tab_pane_5_3" role="tabpanel" aria-labelledby="kt_tab_pane_5_3"&gt;
                    ...
                   &lt;/div&gt;
                  &lt;/div&gt;
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
