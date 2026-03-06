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
            <div class="alert-text">Metronic's
                <code>card</code>custom components handles basic tools (reload, toggle, remove) that can be activated
                through
                <code>data-card="true"</code>,
                <code>data-card-tool="toggle"</code>,
                <code>data-card-tool="reload"</code>and
                <code>data-card-tool="remove"</code>HTML attributes. For more info please check out our
                <a class="font-weight-bold"
                    href="https://keenthemes.com/metronic/?page=docs&amp;section=html/components/card" target="_blank">Card
                    Documentation.</a>
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Row-->
        <div class="row">
            <div class="col-lg-6">
                <!--begin::Example-->
                <!--begin::Card-->
                <div class="card card-custom" data-card="true" id="kt_card_1">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Card Tools</h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1"
                                data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                                <i class="ki ki-arrow-down icon-nm"></i>
                            </a>
                            <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1"
                                data-card-tool="reload" data-toggle="tooltip" data-placement="top" title="Reload Card">
                                <i class="ki ki-reload icon-nm"></i>
                            </a>
                            <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary" data-card-tool="remove"
                                data-toggle="tooltip" data-placement="top" title="Remove Card">
                                <i class="ki ki-close icon-nm"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Standard dummy text ever since the 1500s, when an unknown printer took a galley of
                            type and scrambled.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Standard dummy text
                            ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum
                            is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text
                            of the printing and typesetting industry.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Standard dummy text ever since the 1500s, when an unknown printer took a galley of
                            type and scrambled.</p>
                    </div>
                </div>
                <!--end::Card-->
                <!--begin: Code-->
                <div class="example example-compact mt-2 gutter-b">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#example_code_html">HTML</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#example_code_js">JS</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="example_code_html" role="tabpanel">
                                <div class="example-highlight">
                                    <pre style="height:300px">
<code class="language-html">
                        &lt;div class="card card-custom" id="kt_card_1"&gt;
                         &lt;div class="card-header"&gt;
                          &lt;div class="card-title"&gt;
                           &lt;h3 class="card-label"&gt;Card Title&lt;/h3&gt;
                          &lt;/div&gt;
                          &lt;div class="card-toolbar"&gt;
                           &lt;a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card"&gt;
                           &lt;i class="ki ki-arrow-down icon-nm"&gt;&lt;/i&gt;
                           &lt;/a&gt;
                           &lt;a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="reload" data-toggle="tooltip" data-placement="top" title="Reload Card"&gt;
                           &lt;i class="ki ki-reload icon-nm"&gt;&lt;/i&gt;
                           &lt;/a&gt;
                           &lt;a href="#" class="btn btn-icon btn-sm btn-hover-light-primary" data-card-tool="remove" data-toggle="tooltip" data-placement="top" title="Remove Card"&gt;
                           &lt;i class="ki ki-close icon-nm"&gt;&lt;/i&gt;
                           &lt;/a&gt;
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
                            <div class="tab-pane" id="example_code_js">
                                <div class="example-highlight">
                                    <pre style="height:300px">
<code class="language-js">
                        // This card is lazy initialized using data-card="true" attribute. You can access to the card object as shown below and override its behavior
                        var card = new KTCard('kt_card_1');

                        // Toggle event handlers
                        card.on('beforeCollapse', function (card) {
                         setTimeout(function () {
                          toastr.info('Before collapse event fired!');
                         }, 100);
                        });

                        card.on('afterCollapse', function (card) {
                         setTimeout(function () {
                          toastr.warning('Before collapse event fired!');
                         }, 2000);
                        });

                        card.on('beforeExpand', function (card) {
                         setTimeout(function () {
                          toastr.info('Before expand event fired!');
                         }, 100);
                        });

                        card.on('afterExpand', function (card) {
                         setTimeout(function () {
                          toastr.warning('After expand event fired!');
                         }, 2000);
                        });

                        // Remove event handlers
                        card.on('beforeRemove', function (card) {
                         toastr.info('Before remove event fired!');

                         return confirm('Are you sure to remove this card ?'); // remove card after user confirmation
                        });

                        card.on('afterRemove', function (card) {
                         setTimeout(function () {
                          toastr.warning('After remove event fired!');
                         }, 2000);
                        });

                        // Reload event handlers
                        card.on('reload', function (card) {
                         toastr.info('Leload event fired!');

                         KTApp.block(card.getSelf(), {
                          overlayColor: '#ffffff',
                          type: 'loader',
                          state: 'primary',
                          opacity: 0.3,
                          size: 'lg'
                         });

                         // update the content here

                         setTimeout(function () {
                          KTApp.unblock(card.getSelf());
                         }, 2000);
                        });
                        </code>
</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end: Code-->
                <!--end::Example-->
                <!--begin::Example-->
                <!--begin::Card-->
                <div class="card card-custom" data-card="true" data-card-tooltips="false" id="kt_card_2">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Card Tools</h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-icon btn-sm btn-primary mr-1" data-card-tool="toggle"
                                data-toggle="tooltip" data-placement="top" title="Toggle Card">
                                <i class="ki ki-arrow-down icon-nm"></i>
                            </a>
                            <a href="#" class="btn btn-icon btn-sm btn-success mr-1" data-card-tool="reload"
                                data-toggle="tooltip" data-placement="top" title="Reload Card">
                                <i class="ki ki-reload icon-nm"></i>
                            </a>
                            <a href="#" class="btn btn-icon btn-sm btn-warning" data-card-tool="remove"
                                data-toggle="tooltip" data-placement="top" title="Remove Card">
                                <i class="ki ki-close icon-nm"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Standard dummy text ever since the 1500s, when an unknown printer took a galley of
                            type and scrambled.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Standard dummy text
                            ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum
                            is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text
                            of the printing and typesetting industry.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Standard dummy text ever since the 1500s, when an unknown printer took a galley of
                            type and scrambled.</p>
                    </div>
                </div>
                <!--end::Card-->
                <!--begin: Code-->
                <div class="example example-compact mt-2 gutter-b">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#example_code_html_2">HTML</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#example_code_js_2">JS</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="example_code_html_2" role="tabpanel">
                                <div class="example-highlight">
                                    <pre style="height:300px">
<code class="language-html">
                        &lt;div class="card card-custom" id="kt_card_2"&gt;
                         &lt;div class="card-header"&gt;
                          &lt;div class="card-title"&gt;
                           &lt;h3 class="card-label"&gt;Card Title&lt;/h3&gt;
                          &lt;/div&gt;
                          &lt;div class="card-toolbar"&gt;
                           &lt;a href="#" class="btn btn-icon btn-sm btn-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card"&gt;
                           &lt;i class="ki ki-arrow-down icon-nm"&gt;&lt;/i&gt;
                           &lt;/a&gt;
                           &lt;a href="#" class="btn btn-icon btn-sm btn-success mr-1" data-card-tool="reload" data-toggle="tooltip" data-placement="top" title="Reload Card"&gt;
                           &lt;i class="ki ki-reload icon-nm"&gt;&lt;/i&gt;
                           &lt;/a&gt;
                           &lt;a href="#" class="btn btn-icon btn-sm btn-warning" data-card-tool="remove" data-toggle="tooltip" data-placement="top" title="Remove Card"&gt;
                           &lt;i class="ki ki-close icon-nm"&gt;&lt;/i&gt;
                           &lt;/a&gt;
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
                            <div class="tab-pane" id="example_code_js_2">
                                <div class="example-highlight">
                                    <pre style="height:300px">
<code class="language-js">
                        // This card is lazy initialized using data-card="true" attribute. You can access to the card object as shown below and override its behavior
                        var card = new KTCard('kt_card_1');

                        // Toggle event handlers
                        card.on('beforeCollapse', function (card) {
                         setTimeout(function () {
                          toastr.info('Before collapse event fired!');
                         }, 100);
                        });

                        card.on('afterCollapse', function (card) {
                         setTimeout(function () {
                          toastr.warning('Before collapse event fired!');
                         }, 2000);
                        });

                        card.on('beforeExpand', function (card) {
                         setTimeout(function () {
                          toastr.info('Before expand event fired!');
                         }, 100);
                        });

                        card.on('afterExpand', function (card) {
                         setTimeout(function () {
                          toastr.warning('After expand event fired!');
                         }, 2000);
                        });

                        // Remove event handlers
                        card.on('beforeRemove', function (card) {
                         toastr.info('Before remove event fired!');

                         return confirm('Are you sure to remove this card ?'); // remove card after user confirmation
                        });

                        card.on('afterRemove', function (card) {
                         setTimeout(function () {
                          toastr.warning('After remove event fired!');
                         }, 2000);
                        });

                        // Reload event handlers
                        card.on('reload', function (card) {
                         toastr.info('Leload event fired!');

                         KTApp.block(card.getSelf(), {
                          overlayColor: '#ffffff',
                          type: 'loader',
                          state: 'primary',
                          opacity: 0.3,
                          size: 'lg'
                         });

                         // update the content here

                         setTimeout(function () {
                          KTApp.unblock(card.getSelf());
                         }, 2000);
                        });
                        </code>
</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end: Code-->
                <!--end::Example-->
            </div>
            <div class="col-lg-6">
                <!--begin::Example-->
                <!--begin::Card-->
                <div class="card card-custom" data-card="true" id="kt_card_3">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Card Tools</h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-icon btn-circle btn-sm btn-light-primary mr-1"
                                data-card-tool="toggle">
                                <i class="ki ki-arrow-down icon-nm"></i>
                            </a>
                            <a href="#" class="btn btn-icon btn-circle btn-sm btn-light-success mr-1"
                                data-card-tool="reload">
                                <i class="ki ki-reload icon-nm"></i>
                            </a>
                            <a href="#" class="btn btn-icon btn-circle btn-sm btn-light-danger"
                                data-card-tool="remove">
                                <i class="ki ki-close icon-nm"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Standard dummy text ever since the 1500s, when an unknown printer took a galley of
                            type and scrambled.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Standard dummy text
                            ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum
                            is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text
                            of the printing and typesetting industry.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Standard dummy text ever since the 1500s, when an unknown printer took a galley of
                            type and scrambled.</p>
                    </div>
                </div>
                <!--end::Card-->
                <!--begin: Code-->
                <div class="example example-compact mt-2 gutter-b">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#example_code_html_3">HTML</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#example_code_js_3">JS</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="example_code_html_3" role="tabpanel">
                                <div class="example-highlight">
                                    <pre style="height:400px">
<code class="language-html">
                        &lt;div class="card card-custom" id="kt_card_3"&gt;
                         &lt;div class="card-header"&gt;
                          &lt;div class="card-title"&gt;
                           &lt;h3 class="card-label"&gt;Card Title&lt;/h3&gt;
                          &lt;/div&gt;
                          &lt;div class="card-toolbar"&gt;
                           &lt;a href="#" class="btn btn-icon btn-circle btn-sm btn-light-primary mr-1" data-card-tool="toggle"&gt;
                           &lt;i class="ki ki-arrow-down icon-nm"&gt;&lt;/i&gt;
                           &lt;/a&gt;
                           &lt;a href="#" class="btn btn-icon btn-circle btn-sm btn-light-success mr-1" data-card-tool="reload"&gt;
                           &lt;i class="ki ki-reload icon-nm"&gt;&lt;/i&gt;
                           &lt;/a&gt;
                           &lt;a href="#" class="btn btn-icon btn-circle btn-sm btn-light-danger" data-card-tool="remove"&gt;
                           &lt;i class="ki ki-close icon-nm"&gt;&lt;/i&gt;
                           &lt;/a&gt;
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
                            <div class="tab-pane" id="example_code_js_3">
                                <div class="example-highlight">
                                    <pre style="height:400px">
<code class="language-js">
                        // This card is lazy initialized using data-card="true" attribute. You can access to the card object as shown below and override its behavior
                        var card = new KTCard('kt_card_3');

                        // Toggle event handlers
                        card.on('beforeCollapse', function (card) {
                         setTimeout(function () {
                          toastr.info('Before collapse event fired!');
                         }, 100);
                        });

                        card.on('afterCollapse', function (card) {
                         setTimeout(function () {
                          toastr.warning('Before collapse event fired!');
                         }, 2000);
                        });

                        card.on('beforeExpand', function (card) {
                         setTimeout(function () {
                          toastr.info('Before expand event fired!');
                         }, 100);
                        });

                        card.on('afterExpand', function (card) {
                         setTimeout(function () {
                          toastr.warning('After expand event fired!');
                         }, 2000);
                        });

                        // Remove event handlers
                        card.on('beforeRemove', function (card) {
                         toastr.info('Before remove event fired!');

                         return confirm('Are you sure to remove this card ?'); // remove card after user confirmation
                        });

                        card.on('afterRemove', function (card) {
                         setTimeout(function () {
                          toastr.warning('After remove event fired!');
                         }, 2000);
                        });

                        // Reload event handlers
                        card.on('reload', function (card) {
                         toastr.info('Leload event fired!');

                         KTApp.block(card.getSelf(), {
                          overlayColor: '#ffffff',
                          type: 'loader',
                          state: 'primary',
                          opacity: 0.3,
                          size: 'lg'
                         });

                         // update the content here

                         setTimeout(function () {
                          KTApp.unblock(card.getSelf());
                         }, 2000);
                        });
                        </code>
</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end: Code-->
                <!--end::Example-->
                <!--begin::Example-->
                <!--begin::Card-->
                <div class="card card-custom card-collapsed" data-card="true" id="kt_card_4">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Default Collapsed</h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-1" data-card-tool="toggle">
                                <i class="ki ki-arrow-down icon-nm"></i>
                            </a>
                            <a href="#" class="btn btn-icon btn-sm btn-light-success mr-1" data-card-tool="reload">
                                <i class="ki ki-reload icon-nm"></i>
                            </a>
                            <a href="#" class="btn btn-icon btn-sm btn-light-danger" data-card-tool="remove">
                                <i class="ki ki-close icon-nm"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Standard dummy text ever since the 1500s, when an unknown printer took a galley of
                            type and scrambled.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Standard dummy text
                            ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum
                            is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text
                            of the printing and typesetting industry.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Standard dummy text ever since the 1500s, when an unknown printer took a galley of
                            type and scrambled.</p>
                    </div>
                </div>
                <!--end::Card-->
                <!--begin: Code-->
                <div class="example example-compact mt-2 gutter-b">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#example_code_html_4">HTML</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#example_code_js_4">JS</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="example_code_html_4" role="tabpanel">
                                <div class="example-highlight">
                                    <pre style="height:400px">
<code class="language-html">
                        &lt;div class="card card-custom card-collapsed" data-card="true" id="kt_card_4"&gt;
                         &lt;div class="card-header"&gt;
                          &lt;div class="card-title"&gt;
                           &lt;h3 class="card-label"&gt;Card Title&lt;/h3&gt;
                          &lt;/div&gt;
                          &lt;div class="card-toolbar"&gt;
                           &lt;a href="#" class="btn btn-icon btn-sm btn-light-primary mr-1" data-card-tool="toggle"&gt;
                           &lt;i class="ki ki-arrow-down icon-nm"&gt;&lt;/i&gt;
                           &lt;/a&gt;
                           &lt;a href="#" class="btn btn-icon btn-sm btn-light-success mr-1" data-card-tool="reload"&gt;
                           &lt;i class="ki ki-reload icon-nm"&gt;&lt;/i&gt;
                           &lt;/a&gt;
                           &lt;a href="#" class="btn btn-icon btn-sm btn-light-danger" data-card-tool="remove"&gt;
                           &lt;i class="ki ki-close icon-nm"&gt;&lt;/i&gt;
                           &lt;/a&gt;
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
                            <div class="tab-pane" id="example_code_js_4">
                                <div class="example-highlight">
                                    <pre style="height:400px">
<code class="language-js">
                        // This card is lazy initialized using data-card="true" attribute. You can access to the card object as shown below and override its behavior
                        var card = new KTCard('kt_card_4');

                        // Toggle event handlers
                        card.on('beforeCollapse', function (card) {
                         setTimeout(function () {
                          toastr.info('Before collapse event fired!');
                         }, 100);
                        });

                        card.on('afterCollapse', function (card) {
                         setTimeout(function () {
                          toastr.warning('Before collapse event fired!');
                         }, 2000);
                        });

                        card.on('beforeExpand', function (card) {
                         setTimeout(function () {
                          toastr.info('Before expand event fired!');
                         }, 100);
                        });

                        card.on('afterExpand', function (card) {
                         setTimeout(function () {
                          toastr.warning('After expand event fired!');
                         }, 2000);
                        });

                        // Remove event handlers
                        card.on('beforeRemove', function (card) {
                         toastr.info('Before remove event fired!');

                         return confirm('Are you sure to remove this card ?'); // remove card after user confirmation
                        });

                        card.on('afterRemove', function (card) {
                         setTimeout(function () {
                          toastr.warning('After remove event fired!');
                         }, 2000);
                        });

                        // Reload event handlers
                        card.on('reload', function (card) {
                         toastr.info('Leload event fired!');

                         KTApp.block(card.getSelf(), {
                          overlayColor: '#ffffff',
                          type: 'loader',
                          state: 'primary',
                          opacity: 0.3,
                          size: 'lg'
                         });

                         // update the content here

                         setTimeout(function () {
                          KTApp.unblock(card.getSelf());
                         }, 2000);
                        });
                        </code>
</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end: Code-->
                <!--end::Example-->
            </div>
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/pages/features/cards/tools.js') }}"></script>
@endsection
