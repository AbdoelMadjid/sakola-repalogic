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
            <div class="alert-text">Draggable Cards powered with
                <code>Shopify Draggable Plugin</code>, a modern drag and drop JavaScript library.
                <br />For more info please check out
                <a class="font-weight-bold" href="https://shopify.github.io/draggable" target="_blank">the official
                    documentation.</a>
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Card-->
        <div class="card card-custom gutter-b">
            <div class="card-body">
                <div class="example example-basic">Wrap draggable zone with
                    <code>.draggable-zone</code>and define draggable elements with
                    <code>.draggable</code>and let drag &amp; drop through
                    <code>.draggable-handle</code>element.
                </div>
                <!--begin: Example-->
                <div class="example example-compact mt-5">
                    <div class="example-tools justify-content-center">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#example_code_includes">Includes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#example_code_html">HTML</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#example_code_js">JS</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="example_code_includes" role="tabpanel">
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;!-- used--&gt;
                        &lt;script src="assets/plugins/custom/draggable/draggable.bundle.js" type="text/javascript"&gt;&lt;/script&gt;
                        </code>
</pre>
                                </div>
                            </div>
                            <div class="tab-pane" id="example_code_html" role="tabpanel">
                                <div class="example-highlight">
                                    <pre style="height:400px">
<code class="language-html">
                        &lt;div class="row"&gt;
                         &lt;div class="col-lg-6 draggable-zone"&gt;
                          &lt;!--begin::Card--&gt;
                          &lt;div class="card card-custom gutter-b draggable"&gt;
                           &lt;div class="card-header"&gt;
                            &lt;div class="card-title"&gt;
                             &lt;h3 class="card-label"&gt;Card 1 &lt;/h3&gt;
                            &lt;/div&gt;
                            &lt;div class="card-toolbar"&gt;
                             &lt;a href="#" class="btn btn-icon btn-sm btn-hover-light-primary draggable-handle"&gt;
                             &lt;i class="ki ki-menu "&gt;&lt;/i&gt;
                             &lt;/a&gt;
                            &lt;/div&gt;
                           &lt;/div&gt;
                           &lt;div class="card-body"&gt;
                            ...
                           &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;!--end::Card--&gt;
                          &lt;!--begin::Card--&gt;
                          &lt;div class="card card-custom gutter-b draggable"&gt;
                           &lt;div class="card-header"&gt;
                            &lt;div class="card-title"&gt;
                             &lt;h3 class="card-label"&gt;Card 2&lt;/h3&gt;
                            &lt;/div&gt;
                            &lt;div class="card-toolbar"&gt;
                             &lt;a href="#" class="btn btn-icon btn-hover-light-primary draggable-handle"&gt;
                             &lt;i class="ki ki-menu "&gt;&lt;/i&gt;
                             &lt;/a&gt;
                            &lt;/div&gt;
                           &lt;/div&gt;
                           &lt;div class="card-body"&gt;
                            ...
                           &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;!--end::Card--&gt;
                          &lt;!--begin::Card--&gt;
                          &lt;div class="card card-custom gutter-b draggable"&gt;
                           &lt;div class="card-header"&gt;
                            &lt;div class="card-title"&gt;
                             &lt;h3 class="card-label"&gt;Card 3&lt;/h3&gt;
                            &lt;/div&gt;
                            &lt;div class="card-toolbar"&gt;
                             &lt;a href="#" class="btn btn-icon btn-hover-light-primary draggable-handle"&gt;
                             &lt;i class="ki ki-menu "&gt;&lt;/i&gt;
                             &lt;/a&gt;
                            &lt;/div&gt;
                           &lt;/div&gt;
                           &lt;div class="card-body"&gt;
                            ...
                           &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;!--end::Card--&gt;
                          &lt;!--begin::Card--&gt;
                          &lt;div class="card card-custom gutter-b draggable"&gt;
                           &lt;div class="card-header"&gt;
                            &lt;div class="card-title"&gt;
                             &lt;h3 class="card-label"&gt;Card 4&lt;/h3&gt;
                            &lt;/div&gt;
                            &lt;div class="card-toolbar"&gt;
                             &lt;a href="#" class="btn btn-icon btn-hover-light-primary draggable-handle"&gt;
                             &lt;i class="ki ki-menu "&gt;&lt;/i&gt;
                             &lt;/a&gt;
                            &lt;/div&gt;
                           &lt;/div&gt;
                           &lt;div class="card-body"&gt;
                            ...
                           &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;!--end::Card--&gt;
                          &lt;!--begin::Card--&gt;
                          &lt;div class="card card-custom gutter-b draggable"&gt;
                           &lt;div class="card-header"&gt;
                            &lt;div class="card-title"&gt;
                             &lt;h3 class="card-label"&gt;Card 5&lt;/h3&gt;
                            &lt;/div&gt;
                            &lt;div class="card-toolbar"&gt;
                             &lt;a href="#" class="btn btn-icon btn-hover-light-primary draggable-handle"&gt;
                             &lt;i class="ki ki-menu "&gt;&lt;/i&gt;
                             &lt;/a&gt;
                            &lt;/div&gt;
                           &lt;/div&gt;
                           &lt;div class="card-body"&gt;
                            ...
                           &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;!--end::Card--&gt;
                         &lt;/div&gt;
                         &lt;div class="col-lg-6 draggable-zone"&gt;
                          &lt;!--begin::Card--&gt;
                          &lt;div class="card card-custom gutter-b draggable"&gt;
                           &lt;div class="card-header"&gt;
                            &lt;div class="card-title"&gt;
                             &lt;h3 class="card-label"&gt;Card 6&lt;/h3&gt;
                            &lt;/div&gt;
                            &lt;div class="card-toolbar"&gt;
                             &lt;a href="#" class="btn btn-icon btn-hover-light-primary draggable-handle"&gt;
                             &lt;i class="ki ki-menu "&gt;&lt;/i&gt;
                             &lt;/a&gt;
                            &lt;/div&gt;
                           &lt;/div&gt;
                           &lt;div class="card-body"&gt;
                            ...
                           &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;!--end::Card--&gt;
                          &lt;!--begin::Card--&gt;
                          &lt;div class="card card-custom gutter-b draggable"&gt;
                           &lt;div class="card-header"&gt;
                            &lt;div class="card-title"&gt;
                             &lt;h3 class="card-label"&gt;Card 7&lt;/h3&gt;
                            &lt;/div&gt;
                            &lt;div class="card-toolbar"&gt;
                             &lt;a href="#" class="btn btn-icon btn-hover-light-primary draggable-handle"&gt;
                             &lt;i class="ki ki-menu "&gt;&lt;/i&gt;
                             &lt;/a&gt;
                            &lt;/div&gt;
                           &lt;/div&gt;
                           &lt;div class="card-body"&gt;
                            ...
                           &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;!--end::Card--&gt;
                          &lt;!--begin::Card--&gt;
                          &lt;div class="card card-custom gutter-b draggable"&gt;
                           &lt;div class="card-header"&gt;
                            &lt;div class="card-title"&gt;
                             &lt;h3 class="card-label"&gt;Card 8&lt;/h3&gt;
                            &lt;/div&gt;
                            &lt;div class="card-toolbar"&gt;
                             &lt;a href="#" class="btn btn-icon btn-hover-light-primary draggable-handle"&gt;
                             &lt;i class="ki ki-menu "&gt;&lt;/i&gt;
                             &lt;/a&gt;
                            &lt;/div&gt;
                           &lt;/div&gt;
                           &lt;div class="card-body"&gt;
                            ...
                           &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;!--end::Card--&gt;
                          &lt;!--begin::Card--&gt;
                          &lt;div class="card card-custom gutter-b draggable"&gt;
                           &lt;div class="card-header"&gt;
                            &lt;div class="card-title"&gt;
                             &lt;h3 class="card-label"&gt;Card 9&lt;/h3&gt;
                            &lt;/div&gt;
                            &lt;div class="card-toolbar"&gt;
                             &lt;a href="#" class="btn btn-icon btn-hover-light-primary draggable-handle"&gt;
                             &lt;i class="ki ki-menu "&gt;&lt;/i&gt;
                             &lt;/a&gt;
                            &lt;/div&gt;
                           &lt;/div&gt;
                           &lt;div class="card-body"&gt;
                            ...
                           &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;!--end::Card--&gt;
                          &lt;!--begin::Card--&gt;
                          &lt;div class="card card-custom gutter-b draggable"&gt;
                           &lt;div class="card-header"&gt;
                            &lt;div class="card-title"&gt;
                             &lt;h3 class="card-label"&gt;Card 10&lt;/h3&gt;
                            &lt;/div&gt;
                            &lt;div class="card-toolbar"&gt;
                             &lt;a href="#" class="btn btn-icon btn-hover-light-primary draggable-handle"&gt;
                             &lt;i class="ki ki-menu "&gt;&lt;/i&gt;
                             &lt;/a&gt;
                            &lt;/div&gt;
                           &lt;/div&gt;
                           &lt;div class="card-body"&gt;
                            ...
                           &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;!--end::Card--&gt;
                         &lt;/div&gt;
                        &lt;/div&gt;
                        </code>
</pre>
                                </div>
                            </div>
                            <div class="tab-pane" id="example_code_js">
                                <div class="example-highlight">
                                    <pre style="height:400px">
<code class="language-js">
                            var KTCardDraggable = function () {
                             return {
                              //main function to initiate the module
                              init: function () {
                               var containers = document.querySelectorAll('.draggable-zone');

                               if (containers.length === 0) {
                                return false;
                               }

                               var swappable = new Sortable.default(containers, {
                                draggable: '.draggable',
                                handle: '.draggable .draggable-handle',
                                mirror: {
                                 appendTo: 'body',
                                 constrainDimensions: true
                                }
                               });
                              }
                             };
                            }();

                            jQuery(document).ready(function () {
                             KTCardDraggable.init();
                            });
                        </code>
</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end: Example-->
            </div>
        </div>
        <!--end::Card-->
        <!--begin::Row-->
        <div class="row">
            <div class="col-lg-6 draggable-zone">
                <!--begin::Card-->
                <div class="card card-custom gutter-b draggable">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Card 1</h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary draggable-handle">
                                <i class="ki ki-menu"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                        a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.</div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b draggable">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Card 2</h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-icon btn-hover-light-primary draggable-handle">
                                <i class="ki ki-menu"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                        a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.</div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b draggable">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Card 3</h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-icon btn-hover-light-primary draggable-handle">
                                <i class="ki ki-menu"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                        a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.</div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b draggable">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Card 4</h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-icon btn-hover-light-primary draggable-handle">
                                <i class="ki ki-menu"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                        a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.</div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b draggable">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Card 5</h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-icon btn-hover-light-primary draggable-handle">
                                <i class="ki ki-menu"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                        a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.</div>
                </div>
                <!--end::Card-->
            </div>
            <div class="col-lg-6 draggable-zone">
                <!--begin::Card-->
                <div class="card card-custom gutter-b draggable">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Card 6</h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-icon btn-hover-light-primary draggable-handle">
                                <i class="ki ki-menu"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                        a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.</div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b draggable">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Card 7</h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-icon btn-hover-light-primary draggable-handle">
                                <i class="ki ki-menu"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                        a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.</div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b draggable">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Card 8</h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-icon btn-hover-light-primary draggable-handle">
                                <i class="ki ki-menu"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                        a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.</div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b draggable">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Card 9</h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-icon btn-hover-light-primary draggable-handle">
                                <i class="ki ki-menu"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                        a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.</div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b draggable">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Card 10</h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-icon btn-hover-light-primary draggable-handle">
                                <i class="ki ki-menu"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                        a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.</div>
                </div>
                <!--end::Card-->
            </div>
        </div>
        <!--end:: Row-->
    </div>
    <!--end::Container-->
@endsection
@section('scripts')
    <script src="{{ asset('assets/plugins/custom/draggable/draggable.bundle.js') }}"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('assets/js/pages/features/cards/draggable.js') }}"></script>
@endsection
