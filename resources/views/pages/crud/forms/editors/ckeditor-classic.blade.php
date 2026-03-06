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
            <div class="alert-text">CKEditor is a proven, enterprise-grade WYSIWYG HTML editor with wide browser
                compatibility, including legacy browsers.
                <br />For more info please visit the plugin's
                <a class="font-weight-bold"
                    href="https://ckeditor.com/docs/ckeditor5/latest/examples/builds/classic-editor.html"
                    target="_blank">Demo Page</a>or
                <a class="font-weight-bold" href="https://github.com/ckeditor/ckeditor5" target="_blank">Github Repo</a>.
            </div>
        </div>
        <!--end::Notice-->
        <div class="row">
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Classic Default Classic Demo</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <textarea name="kt-ckeditor-1" id="kt-ckeditor-1">
													<h1>Quick and simple CKEditor 5 Integration</h1>
													<p>Here goes the initial content of the editor. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
													<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
													<h3>Flexible &amp; Powerful</h3>
													<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
													<p>Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper. Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper.</p>
													<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
												</textarea>
                        <!--begin: Code-->
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
                                        Classic Default Classic Demo
                                    &lt;/h3&gt;
                                &lt;/div&gt;
                                &lt;div class="card-body"&gt;
                                    &lt;textarea name="kt-ckeditor-1" id="kt-ckeditor-1"&gt;
                                        &lt;h1&gt;Quick and simple CKEditor 5 Integration&lt;/h1&gt;
                                        &lt;p&gt;Here goes the initial content of the editor. Lorem Ipsum is simply dummy text of the printing and typesetting industry.&lt;/p&gt;
                                        &lt;p&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry.&lt;/p&gt;
                                        &lt;h3&gt;Flexible &amp; Powerful&lt;/h3&gt;
                                        &lt;p&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.&lt;/p&gt;
                                        &lt;p&gt;Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper. Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper.&lt;/p&gt;
                                        &lt;p&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s&lt;/p&gt;
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

                            var KTCkeditor = function () {
                                // Private functions
                                var demos = function () {
                                    ClassicEditor
                                        .create( document.querySelector( '#kt-ckeditor-1' ) )
                                        .then( editor =&gt; {
                                            console.log( editor );
                                        } )
                                        .catch( error =&gt; {
                                            console.error( error );
                                        } );
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
                                KTCkeditor.init();
                            });
                            </code>
</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end: Code-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Classic Demo with multiple font styles</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <textarea name="kt-ckeditor-2" id="kt-ckeditor-2">
													<h1>Quick and simple CKEditor 5 Integration</h1>
													<p>Here goes the
													<a href="#">Minitial content of the editor</a>. Lorem Ipsum is simply dummy text of the
													<em>printing and typesetting</em>industry.</p>
													<blockquote>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</blockquote>
													<h3>Flexible &amp; Powerful</h3>
													<p>
													<strong>Lorem Ipsum has been the industry's</strong>standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
													<ul>
														<li>List item 1</li>
														<li>List item 2</li>
														<li>List item 3</li>
														<li>List item 4</li>
													</ul>
												</textarea>
                        <!--begin: Code-->
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
                                        Classic Demo with multiple font styles
                                    &lt;/h3&gt;
                                &lt;/div&gt;
                                &lt;div class="card-body"&gt;
                                    &lt;textarea name="kt-ckeditor-2" id="kt-ckeditor-2"&gt;
                                        &lt;h1&gt;Quick and simple CKEditor 5 Integration&lt;/h1&gt;
                                        &lt;p&gt;Here goes the &lt;a href="#"&gt;Minitial content of the editor&lt;/a&gt;. Lorem Ipsum is simply dummy text of the &lt;em&gt;printing and typesetting&lt;/em&gt; industry.&lt;/p&gt;
                                        &lt;blockquote&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry.&lt;/blockquote&gt;
                                        &lt;h3&gt;Flexible &amp; Powerful&lt;/h3&gt;
                                        &lt;p&gt;&lt;strong&gt;Lorem Ipsum has been the industry's&lt;/strong&gt; standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.&lt;/p&gt;
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

                            var KTCkeditor = function () {
                                // Private functions
                                var demos = function () {
                                    ClassicEditor
                                        .create( document.querySelector( '#kt-ckeditor-2' ) )
                                        .then( editor =&gt; {
                                            console.log( editor );
                                        } )
                                        .catch( error =&gt; {
                                            console.error( error );
                                        } );
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
                                KTCkeditor.init();
                            });
                            </code>
</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end: Code-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Classic Demo with images</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <textarea name="kt-ckeditor-4" id="kt-ckeditor-3">
												<h1>Quick and simple CKEditor 5 Integration</h1>
												<figure class="image">
													<img src="assets/media/stock-600x400/img-1.jpg" alt="Metronic CKEditor Demo" />
												</figure>Here goes the
												<a href="#">Minitial content of the editor</a>. Lorem Ipsum is simply dummy text of the
												<em>printing and typesetting</em>industry.</textarea>
                        <!--begin: Code-->
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
                                        Classic Demo with images
                                    &lt;/h3&gt;
                                &lt;/div&gt;
                                &lt;div class="card-body"&gt;
                                    &lt;textarea name="kt-ckeditor-4" id="kt-ckeditor-3"&gt;
                                        &lt;h1&gt;Quick and simple CKEditor 5 Integration&lt;/h1&gt;
                                        &lt;figure class="image"&gt;&lt;img src="&lt;?php echo Page::getMediaPath();?&gt;stock-600x400/img-1.jpg" alt="Metronic CKEditor Demo"/&gt;&lt;/figure&gt;
                                        Here goes the &lt;a href="#"&gt;Minitial content of the editor&lt;/a&gt;. Lorem Ipsum is simply dummy text of the &lt;em&gt;printing and typesetting&lt;/em&gt; industry.
                                    &lt;/textarea&gt;
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

                            var KTCkeditor = function () {
                                // Private functions
                                var demos = function () {
                                    ClassicEditor
                                        .create( document.querySelector( '#kt-ckeditor-3' ) )
                                        .then( editor =&gt; {
                                            console.log( editor );
                                        } )
                                        .catch( error =&gt; {
                                            console.error( error );
                                        } );
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
                                KTCkeditor.init();
                            });
                            </code>
</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end: Code-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Classic Demo with Videos</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <textarea name="kt-ckeditor-4" id="kt-ckeditor-4">
													<h1>Easy Media Embeds</h1>
													<figure class="symbol">
														<oembed url="https://www.youtube.com/watch?v=gMUbZMdDRCo"></oembed>
													</figure>
													<p>Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper. Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper.</p>
												</textarea>
                        <!--begin: Code-->
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
                                        Classic Demo with Videos
                                    &lt;/h3&gt;
                                &lt;/div&gt;
                                &lt;div class="card-body"&gt;
                                    &lt;textarea name="kt-ckeditor-4" id="kt-ckeditor-4"&gt;
                                        &lt;h1&gt;Easy Media Embeds&lt;/h1&gt;
                                        &lt;figure class="symbol"&gt;
                                            &lt;oembed url="https://www.youtube.com/watch?v=gMUbZMdDRCo"&gt;&lt;/oembed&gt;
                                        &lt;/figure&gt;
                                        &lt;p&gt;Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper. Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper.&lt;/p&gt;
                                    &lt;/textarea&gt;
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

                            var KTCkeditor = function () {
                                // Private functions
                                var demos = function () {
                                    ClassicEditor
                                        .create( document.querySelector( '#kt-ckeditor-4' ) )
                                        .then( editor =&gt; {
                                            console.log( editor );
                                        } )
                                        .catch( error =&gt; {
                                            console.error( error );
                                        } );
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
                                KTCkeditor.init();
                            });
                            </code>
</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end: Code-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!--begin::Card-->
                <div class="card card-custom example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Large Classic Demo</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <textarea name="kt-ckeditor-5" id="kt-ckeditor-5">
												<h1>Quick and simple CKEditor 5 Integration</h1>
												<p>Here goes the
												<a href="#">Minitial content of the editor</a>. Lorem Ipsum is simply dummy text of the
												<em>printing and typesetting</em>industry.</p>
												<blockquote>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</blockquote>
												<ul>
													<li>List item 1</li>
													<li>List item 2</li>
													<li>List item 3</li>
													<li>List item 4</li>
												</ul>
												<figure class="image">
													<img src="assets/media/stock-600x400/img-1.jpg" alt="Metronic CKEditor Demo" />
												</figure>Here goes the
												<a href="#">Minitial content of the editor</a>. Lorem Ipsum is simply dummy text of the
												<em>printing and typesetting</em>industry.
												<h1>Easy Media Embeds</h1>
												<figure class="symbol">
													<oembed url="https://www.youtube.com/watch?v=d-pSVf8Xazk"></oembed>
												</figure>
												<p>Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper. Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper.</p></textarea>
                        <!--begin: Code-->
                        <div class="example-code mt-10">
                            <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#example_code_html5">HTML</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#example_code_js5">JS</a>
                                </li>
                            </ul>
                            <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            <div class="tab-content">
                                <div class="tab-pane active" id="example_code_html5" role="tabpanel">
                                    <div class="example-highlight">
                                        <pre style="height:400px">
<code class="language-html">
                            &lt;div class="card card-custom"&gt;
                                &lt;div class="card-header"&gt;
                                    &lt;div class="card-title"&gt;
                                        &lt;h3 class="card-title"&gt;
                                            Large Classic Demo
                                        &lt;/h3&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;div class="card-body"&gt;
                                    &lt;textarea name="kt-ckeditor-5" id="kt-ckeditor-5"&gt;
                                        &lt;h1&gt;Quick and simple CKEditor 5 Integration&lt;/h1&gt;
                                        &lt;p&gt;Here goes the &lt;a href="#"&gt;Minitial content of the editor&lt;/a&gt;. Lorem Ipsum is simply dummy text of the &lt;em&gt;printing and typesetting&lt;/em&gt; industry.&lt;/p&gt;
                                        &lt;blockquote&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry.&lt;/blockquote&gt;
                                        &lt;ul&gt;
                                            &lt;li&gt;List item 1&lt;/li&gt;
                                            &lt;li&gt;List item 2&lt;/li&gt;
                                            &lt;li&gt;List item 3&lt;/li&gt;
                                            &lt;li&gt;List item 4&lt;/li&gt;
                                        &lt;/ul&gt;
                                        &lt;figure class="image"&gt;&lt;img src="&lt;?php echo Page::getMediaPath();?&gt;stock-600x400/img-1.jpg" alt="Metronic CKEditor Demo"/&gt;&lt;/figure&gt;
                                        Here goes the &lt;a href="#"&gt;Minitial content of the editor&lt;/a&gt;. Lorem Ipsum is simply dummy text of the &lt;em&gt;printing and typesetting&lt;/em&gt; industry.
                                        &lt;h1&gt;Easy Media Embeds&lt;/h1&gt;
                                        &lt;figure class="symbol"&gt;
                                            &lt;oembed url="https://www.youtube.com/watch?v=d-pSVf8Xazk"&gt;&lt;/oembed&gt;
                                        &lt;/figure&gt;
                                        &lt;p&gt;Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper. Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper.&lt;/p&gt;
                                    &lt;/textarea&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                </code>
</pre>
                                    </div>
                                </div>
                                <div class="tab-pane" id="example_code_js5">
                                    <div class="example-highlight">
                                        <pre style="height:400px">
<code class="language-js">
                            // Class definition

                            var KTCkeditor = function () {
                                // Private functions
                                var demos = function () {
                                    ClassicEditor
                                        .create( document.querySelector( '#kt-ckeditor-5' ) )
                                        .then( editor =&gt; {
                                            console.log( editor );
                                        } )
                                        .catch( error =&gt; {
                                            console.error( error );
                                        } );
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
                                KTCkeditor.init();
                            });
                            </code>
</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end: Code-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
        </div>
    </div>
    <!--end::Container-->
@endsection
@section('scripts')
    <script src="{{ asset('assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('assets/js/pages/crud/forms/editors/ckeditor-classic.js') }}"></script>
    <!--end::Page Scripts-->
@endsection
