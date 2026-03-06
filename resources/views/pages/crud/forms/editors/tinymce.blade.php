@extends('layouts.index')
@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            {{ trim($__env->yieldContent('title')) ?: getPageTitle() }}
        @endslot
        @slot('breadcrumb')
            @slot('li_1')
                Crud
            @endslot
            @slot('li_2')
                Forms
            @endslot
            @slot('li_3')
                Editors
            @endslot
        @endslot
    @endcomponent
@endsection
@section('content')
    <!--begin::Container-->
    <div class="container">
        <!--begin::Notice-->
        <div class="alert alert-custom alert-white alert-shadow gutter-b" role="alert">
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
            <div class="alert-text">TinyMCE is your best choice for building modern, internationalized and accessible
                content creation experiences.
                <br />For more info please visit the plugin's
                <a class="font-weight-bold" href="https://www.tiny.cloud/docs/demo/full-featured/" target="_blank">Demo
                    Page</a>or
                <a class="font-weight-bold" href="https://github.com/tinymce/tinymce" target="_blank">Github Repo</a>.
            </div>
        </div>
        <!--end::Notice-->
        <div class="row">
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Basic Demo</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <textarea id="kt-tinymce-1" name="kt-tinymce-1" class="tox-target">
													<h1>Quick and Simple TinyMCE 5 Integration</h1>
													<p>Here goes the&#160;
													<a href="#">Minitial content of the editor</a>. Lorem Ipsum is simply dummy text of the&#160;
													<em>printing and typesetting</em>&#160;industry.</p>
													<blockquote>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</blockquote>
													<h3 style="text-align: right;">Flexible &amp; Powerful</h3>
													<p style="text-align: right;">
													<strong>Lorem Ipsum has been the industry's</strong>&#160;standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
													<ul>
														<li>List item 1</li>
														<li>List item 2</li>
														<li>List item 3</li>
														<li>List item 4</li>
													</ul>
												</textarea>
                        <!--begin::Code-->
                        <div class="example-code mt-10">
                            <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#example_code_html">HTML</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#example_code_js">JS</a>
                                </li>
                            </ul>
                            <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            <div class="tab-content">
                                <div class="tab-pane active" id="example_code_html" role="tabpanel">
                                    <div class="example-highlight">
                                        <pre style="height:400px">
<code class="language-html">
                                &lt;div class="card card-custom"&gt;
                                    &lt;div class="card-header"&gt;
                                        &lt;h3 class="card-title"&gt;
                                            Basic Demo
                                        &lt;/h3&gt;
                                    &lt;/div&gt;
                                    &lt;div class="card-body"&gt;
                                        &lt;textarea id="kt-tinymce-1" name="kt-tinymce-1" class="tox-target"&gt;
                                            &lt;h1&gt;Quick and Simple TinyMCE 5 Integration&lt;/h1&gt;
                                            &lt;p&gt;Here goes the&amp;nbsp;&lt;a href="#"&gt;Minitial content of the editor&lt;/a&gt;. Lorem Ipsum is simply dummy text of the&amp;nbsp;&lt;em&gt;printing and typesetting&lt;/em&gt;&amp;nbsp;industry.&lt;/p&gt;
                                            &lt;blockquote&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry.&lt;/blockquote&gt;
                                            &lt;h3 style="text-align: right;"&gt;Flexible &amp;amp; Powerful&lt;/h3&gt;
                                            &lt;p style="text-align: right;"&gt;&lt;strong&gt;Lorem Ipsum has been the industry's&lt;/strong&gt;&amp;nbsp;standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.&lt;/p&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;List item 1&lt;/li&gt;
                                                &lt;li&gt;List item 2&lt;/li&gt;
                                                &lt;li&gt;List item 3&lt;/li&gt;
                                                &lt;li&gt;List item 4&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/textarea&gt;
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
                            // Class definition

                            var KTTinymce = function () {
                                // Private functions
                                var demos = function () {
                                    tinymce.init({
                                        selector: '#kt-tinymce-1',
                                        toolbar: false,
                                        statusbar: false
                                    });
                                }

                                return {
                                    // public functions
                                    init: function() {
                                        demos();
                                    }
                                };
                            }();

                            // Initialization
                            jQuery(document).ready(function() {
                                KTTinymce.init();
                            });
                </code>
</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Code-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">TinyMCE with Toolbar</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <textarea id="kt-tinymce-2" name="kt-tinymce-2" class="tox-target">
													<h1>Quick and Simple TinyMCE 5 Integration</h1>
													<p>Here goes the&#160;
													<a href="#">Minitial content of the editor</a>. Lorem Ipsum is simply dummy text of the&#160;
													<em>printing and typesetting</em>&#160;industry.</p>
													<blockquote>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</blockquote>
													<h3 style="text-align: right;">Flexible &amp; Powerful</h3>
													<p style="text-align: right;">
													<strong>Lorem Ipsum has been the industry's</strong>&#160;standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
													<ul>
														<li>List item 1</li>
														<li>List item 2</li>
														<li>List item 3</li>
														<li>List item 4</li>
													</ul>
												</textarea>
                        <!--begin::Code-->
                        <div class="example-code mt-10">
                            <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#example_code_html2">HTML</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#example_code_js2">JS</a>
                                </li>
                            </ul>
                            <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            <div class="tab-content">
                                <div class="tab-pane active" id="example_code_html2" role="tabpanel">
                                    <div class="example-highlight">
                                        <pre style="height:400px">
<code class="language-html">
                                &lt;div class="card card-custom"&gt;
                                    &lt;div class="card-header"&gt;
                                        &lt;h3 class="card-title"&gt;
                                            TinyMCE with Toolbar
                                        &lt;/h3&gt;
                                    &lt;/div&gt;
                                    &lt;div class="card-body"&gt;
                                        &lt;textarea id="kt-tinymce-2" name="kt-tinymce-2" class="tox-target"&gt;
                                            &lt;h1&gt;Quick and Simple TinyMCE 5 Integration&lt;/h1&gt;
                                            &lt;p&gt;Here goes the&amp;nbsp;&lt;a href="#"&gt;Minitial content of the editor&lt;/a&gt;. Lorem Ipsum is simply dummy text of the&amp;nbsp;&lt;em&gt;printing and typesetting&lt;/em&gt;&amp;nbsp;industry.&lt;/p&gt;
                                            &lt;blockquote&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry.&lt;/blockquote&gt;
                                            &lt;h3 style="text-align: right;"&gt;Flexible &amp;amp; Powerful&lt;/h3&gt;
                                            &lt;p style="text-align: right;"&gt;&lt;strong&gt;Lorem Ipsum has been the industry's&lt;/strong&gt;&amp;nbsp;standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.&lt;/p&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;List item 1&lt;/li&gt;
                                                &lt;li&gt;List item 2&lt;/li&gt;
                                                &lt;li&gt;List item 3&lt;/li&gt;
                                                &lt;li&gt;List item 4&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/textarea&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                </code>
</pre>
                                    </div>
                                </div>
                                <div class="tab-pane" id="example_code_js2">
                                    <div class="example-highlight">
                                        <pre style="height:400px">
<code class="language-js">
                            // Class definition

                            var KTTinymce = function () {
                                // Private functions
                                var demos = function () {
                                    tinymce.init({
                                        selector: '#kt-tinymce-2'
                                    });
                                }

                                return {
                                    // public functions
                                    init: function() {
                                        demos();
                                    }
                                };
                            }();

                            // Initialization
                            jQuery(document).ready(function() {
                                KTTinymce.init();
                            });
                </code>
</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Code-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-custom example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">TinyMCE with Plugins</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tinymce">
                            <textarea id="kt-tinymce-3" name="kt-tinymce-3" class="tox-target">
														<h1>Quick and Simple TinyMCE 5 Integration</h1>
														<p>Here goes the&#160;
														<a href="#">Minitial content of the editor</a>. Lorem Ipsum is simply dummy text of the&#160;
														<em>printing and typesetting</em>&#160;industry.</p>
														<blockquote>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</blockquote>
														<h3 style="text-align: right;">Flexible &amp; Powerful</h3>
														<p style="text-align: right;">
														<strong>Lorem Ipsum has been the industry's</strong>&#160;standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
														<ul>
															<li>List item 1</li>
															<li>List item 2</li>
															<li>List item 3</li>
															<li>List item 4</li>
														</ul>
													</textarea>
                        </div>
                        <!--begin::Code-->
                        <div class="example-code mt-10">
                            <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#example_code_html3">HTML</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#example_code_js3">JS</a>
                                </li>
                            </ul>
                            <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            <div class="tab-content">
                                <div class="tab-pane active" id="example_code_html3" role="tabpanel">
                                    <div class="example-highlight">
                                        <pre style="height:400px">
<code class="language-html">
                                &lt;div class="card card-custom"&gt;
                                    &lt;div class="card-header"&gt;
                                        &lt;h3 class="card-title"&gt;
                                            TinyMCE with Plugins
                                        &lt;/h3&gt;
                                    &lt;/div&gt;
                                    &lt;div class="card-body"&gt;
                                        &lt;div class="tinymce"&gt;
                                            &lt;textarea id="kt-tinymce-3" name="kt-tinymce-3" class="tox-target"&gt;
                                                &lt;h1&gt;Quick and Simple TinyMCE 5 Integration&lt;/h1&gt;
                                                &lt;p&gt;Here goes the&amp;nbsp;&lt;a href="#"&gt;Minitial content of the editor&lt;/a&gt;. Lorem Ipsum is simply dummy text of the&amp;nbsp;&lt;em&gt;printing and typesetting&lt;/em&gt;&amp;nbsp;industry.&lt;/p&gt;
                                                &lt;blockquote&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry.&lt;/blockquote&gt;
                                                &lt;h3 style="text-align: right;"&gt;Flexible &amp;amp; Powerful&lt;/h3&gt;
                                                &lt;p style="text-align: right;"&gt;&lt;strong&gt;Lorem Ipsum has been the industry's&lt;/strong&gt;&amp;nbsp;standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.&lt;/p&gt;
                                                &lt;ul&gt;
                                                    &lt;li&gt;List item 1&lt;/li&gt;
                                                    &lt;li&gt;List item 2&lt;/li&gt;
                                                    &lt;li&gt;List item 3&lt;/li&gt;
                                                    &lt;li&gt;List item 4&lt;/li&gt;
                                                &lt;/ul&gt;
                                            &lt;/textarea&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                </code>
</pre>
                                    </div>
                                </div>
                                <div class="tab-pane" id="example_code_js3">
                                    <div class="example-highlight">
                                        <pre style="height:400px">
<code class="language-js">
                            // Class definition

                            var KTTinymce = function () {
                                // Private functions
                                var demos = function () {
                                    tinymce.init({
                                        selector: '#kt-tinymce-3',
                                        toolbar: 'advlist | autolink | link image | lists charmap | print preview',
                                        plugins : 'advlist autolink link image lists charmap print preview'
                                    });
                                }

                                return {
                                    // public functions
                                    init: function() {
                                        demos();
                                    }
                                };
                            }();

                            // Initialization
                            jQuery(document).ready(function() {
                                KTTinymce.init();
                            });
                </code>
</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Code-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-custom example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">TinyMCE with Hidden Menubar</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tinymce">
                            <textarea id="kt-tinymce-4" name="kt-tinymce-4" class="tox-target">
														<h1>Quick and Simple TinyMCE 5 Integration</h1>
														<p>Here goes the&#160;
														<a href="#">Minitial content of the editor</a>. Lorem Ipsum is simply dummy text of the&#160;
														<em>printing and typesetting</em>&#160;industry.</p>
														<blockquote>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</blockquote>
														<h3 style="text-align: right;">Flexible &amp; Powerful</h3>
														<p style="text-align: right;">
														<strong>Lorem Ipsum has been the industry's</strong>&#160;standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
														<ul>
															<li>List item 1</li>
															<li>List item 2</li>
															<li>List item 3</li>
															<li>List item 4</li>
														</ul>
													</textarea>
                        </div>
                        <!--begin::Code-->
                        <div class="example-code mt-10">
                            <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#example_code_html4">HTML</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#example_code_js4">JS</a>
                                </li>
                            </ul>
                            <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            <div class="tab-content">
                                <div class="tab-pane active" id="example_code_html4" role="tabpanel">
                                    <div class="example-highlight">
                                        <pre style="height:400px">
<code class="language-html">
                                &lt;div class="card card-custom"&gt;
                                    &lt;div class="card-header"&gt;
                                        &lt;h3 class="card-title"&gt;
                                            TinyMCE with Hidden Menubar
                                        &lt;/h3&gt;
                                    &lt;/div&gt;
                                    &lt;div class="card-body"&gt;
                                        &lt;div class="tinymce"&gt;
                                            &lt;textarea id="kt-tinymce-4" name="kt-tinymce-4" class="tox-target"&gt;
                                                &lt;h1&gt;Quick and Simple TinyMCE 5 Integration&lt;/h1&gt;
                                                &lt;p&gt;Here goes the&amp;nbsp;&lt;a href="#"&gt;Minitial content of the editor&lt;/a&gt;. Lorem Ipsum is simply dummy text of the&amp;nbsp;&lt;em&gt;printing and typesetting&lt;/em&gt;&amp;nbsp;industry.&lt;/p&gt;
                                                &lt;blockquote&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry.&lt;/blockquote&gt;
                                                &lt;h3 style="text-align: right;"&gt;Flexible &amp;amp; Powerful&lt;/h3&gt;
                                                &lt;p style="text-align: right;"&gt;&lt;strong&gt;Lorem Ipsum has been the industry's&lt;/strong&gt;&amp;nbsp;standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.&lt;/p&gt;
                                                &lt;ul&gt;
                                                    &lt;li&gt;List item 1&lt;/li&gt;
                                                    &lt;li&gt;List item 2&lt;/li&gt;
                                                    &lt;li&gt;List item 3&lt;/li&gt;
                                                    &lt;li&gt;List item 4&lt;/li&gt;
                                                &lt;/ul&gt;
                                            &lt;/textarea&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                </code>
</pre>
                                    </div>
                                </div>
                                <div class="tab-pane" id="example_code_js4">
                                    <div class="example-highlight">
                                        <pre style="height:400px">
<code class="language-js">
                            // Class definition

                            var KTTinymce = function () {
                                // Private functions
                                var demos = function () {
                                    tinymce.init({
                                        selector: '#kt-tinymce-4',
                                        menubar: false,
                                        toolbar: ['styleselect fontselect fontsizeselect',
                                            'undo redo | cut copy paste | bold italic | link image | alignleft aligncenter alignright alignjustify',
                                            'bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code'],
                                        plugins : 'advlist autolink link image lists charmap print preview code'
                                    });
                                }

                                return {
                                    // public functions
                                    init: function() {
                                        demos();
                                    }
                                };
                            }();

                            // Initialization
                            jQuery(document).ready(function() {
                                KTTinymce.init();
                            });
                </code>
</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Code-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
        </div>
    </div>
    <!--end::Container-->
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/pages/crud/forms/editors/bootstrap-markdown.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/tinymce/tinymce.bundle.js') }}"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('assets/js/pages/crud/forms/editors/tinymce.js') }}"></script>
    <!--end::Page Scripts-->
@endsection
