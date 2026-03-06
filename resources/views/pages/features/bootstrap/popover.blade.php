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
                Bootstrap
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
                <code>Bootstrap Popover</code>component with a variety of options to provide unique looking Popover
                components that matches Metronic's design standards.
                <br />For more info on Bootstrap Popover please visit the official
                <a class="font-weight-bold" href="https://getbootstrap.com/docs/4.5/components/popovers/"
                    target="_blank">Bootstrap Documentation</a>.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Row-->
        <div class="row">
            <div class="col-xl-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Base Example</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example">
                            <p>Initialize all popovers on a page by adding the
                                <code>data-toggle</code>attribute.
                            </p>
                            <div class="example-preview">
                                <button type="button" class="btn btn-primary" data-toggle="popover" data-trigger="click"
                                    title="Popover title"
                                    data-content="And here's some amazing content. It's very engaging. Right?">Click to
                                    toggle popover</button>
                            </div>
                            <div class="example-code">
                                <ul class="example-nav nav nav-tabs nav-tabs-line nav-tabs-line-2x nav-tabs-primary"
                                    id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#example_code_1_html">HTML</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#example_code_1_js">JS</a>
                                    </li>
                                </ul>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="example_code_1_html" role="tabpanel">
                                        <div class="example-highlight">
                                            <pre>
<code class="language-html">
                                &lt;button type="button" class="btn btn-primary" data-toggle="popover" data-trigger="click" title="Example content"&gt;
                                    Click to toggle popover
                                &lt;/button&gt;</code>
</pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="example_code_1_js" role="tabpanel">
                                        <div class="example-highlight">
                                            <pre>
<code class="language-javascript">
                                $(function () {
                                  $('[data-toggle="popover"]').popover()
                                })
                                </code>
</pre>
                                        </div>
                                    </div>
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
                            <h3 class="card-label">Directions</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example">
                            <p>Four options are available:
                                <strong>top</strong>,
                                <strong>right</strong>,
                                <strong>bottom</strong>, and
                                <strong>left</strong>aligned.
                            </p>
                            <div class="example-preview">
                                <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover"
                                    data-placement="top" data-content="Example content">Popover on top</button>
                                <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover"
                                    data-placement="right" data-content="Example content">Popover on right</button>
                                <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover"
                                    data-placement="bottom" data-content="Example content">Popover on bottom</button>
                                <button type="button" class="btn btn-secondary mt-1" data-container="body"
                                    data-toggle="popover" data-placement="left" data-content="Example content">Popover on
                                    left</button>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="top" data-content="Example content"&gt;
                            Popover on top
                        &lt;/button&gt;

                        &lt;button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="right" data-content="Example content"&gt;
                            Popover on right
                        &lt;/button&gt;

                        &lt;button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Example content"&gt;
                            Popover on bottom
                        &lt;/button&gt;

                        &lt;button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="left" data-content="Example content"&gt;
                            Popover on left
                        &lt;/button&gt;</code>
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
                            <h3 class="card-label">Disabled Elements</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example">
                            <p>Elements with the disabled attribute aren’t interactive, meaning users cannot hover or click
                                them to trigger a popover (or tooltip).</p>
                            <div class="example-preview">
                                <span class="d-inline-block" data-toggle="popover" data-content="Disabled popover">
                                    <button class="btn btn-primary" style="pointer-events: none;" type="button"
                                        disabled="disabled">Disabled button</button>
                                </span>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;span class="d-inline-block" data-toggle="popover" data-content="Disabled popover"&gt;
                            &lt;button class="btn btn-primary" style="pointer-events: none;" type="button" disabled&gt;Disabled button&lt;/button&gt;
                        &lt;/span&gt;</code>
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
                            <h3 class="card-label">Dismiss On Next Click</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example">
                            <p>Use the
                                <code>focus</code>trigger to dismiss popovers on the user’s next click of a different
                                element than the toggle element.
                            </p>
                            <div class="example-preview">
                                <button tabindex="0" class="btn btn-lg btn-success" role="button"
                                    data-toggle="popover" data-trigger="click" title="Dismissible popover"
                                    data-content="And here's some amazing content. It's very engaging. Right?">Dismissible
                                    popover</button>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;a tabindex="0" class="btn btn-primary" role="button" data-toggle="popover" data-trigger="click" title="Dismissible popover" data-content="Example content"&gt;
                            Dismissible popover
                        &lt;/a&gt;</code>
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
                            <h3 class="card-label">HTML Content</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example">
                            <p>Insert any HTML into the popover.</p>
                            <div class="example-preview">
                                <button type="button" class="btn btn-primary" data-toggle="popover"
                                    title="Popover title" data-html="true"
                                    data-content="And here's some amazing &lt;span class='label label-inline font-weight-bold label-light-primary'&gt;HTML&lt;/span&gt; content. It's very &lt;code&gt;engaging&lt;/code&gt;. Right?">Click
                                    me</button>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;button type="button" class="btn btn-primary" data-toggle="popover" title="Popover title" data-html="true" data-content="And here's some amazing &lt;span class='label label-inline font-weight-bold label-light-primary'&gt;HTML&lt;/span&gt; content. It's very &lt;code&gt;engaging&lt;/code&gt;. Right?"&gt;
                            Click me
                        &lt;/button&gt;</code>
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
                            <h3 class="card-label">Offset</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example">
                            <p>Offset of the popover relative to its target. For more information refer to
                                <a class="font-weight-bold" href="http://tether.io/#offset" target="_blank">Tether's
                                    offset docs.</a>
                            </p>
                            <div class="example-preview">
                                <button type="button" class="btn btn-primary mr-2" data-container="body"
                                    data-offset="20px 20px" data-toggle="popover" data-placement="top"
                                    data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Example
                                    1</button>
                                <button type="button" class="btn btn-success mr-2" data-container="body"
                                    data-offset="-20px -20px" data-toggle="popover" data-placement="top"
                                    data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Example
                                    2</button>
                                <button type="button" class="btn btn-danger" data-container="body"
                                    data-offset="60px 0px" data-toggle="popover" data-placement="top"
                                    data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Example
                                    3</button>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;button type="button" class="btn btn-primary mr-2" data-container="body" data-offset="20px 20px" data-toggle="popover" data-placement="top" data-content="Example content"&gt;
                            Example 1
                        &lt;/button&gt;
                        &lt;button type="button" class="btn btn-success mr-2" data-container="body" data-offset="-20px -20px" data-toggle="popover" data-placement="top" data-content="Example content"&gt;
                            Example 2
                        &lt;/button&gt;
                        &lt;button type="button" class="btn btn-danger" data-container="body" data-offset="60px 0px" data-toggle="popover" data-placement="top" data-content="Example content"&gt;
                            Example 3
                        &lt;/button&gt;</code>
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
    </div>
    <!--end::Container-->
@endsection
