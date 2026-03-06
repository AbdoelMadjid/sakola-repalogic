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
                <code>.symbol</code>component comes with a variety of options to provide multi-purpose container for text,
                icon and image.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Row-->
        <div class="row">
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Base Examples</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Basic symbol elements with image.</p>
                            <div class="example-preview">
                                <div class="symbol-list d-flex flex-wrap">
                                    <div class="symbol mr-3">
                                        <img alt="Pic" src="assets/media/users/300_25.jpg" />
                                    </div>
                                    <div class="symbol mr-3">
                                        <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                    </div>
                                    <div class="symbol mr-3">
                                        <img alt="Pic" src="assets/media/users/300_22.jpg" />
                                    </div>
                                    <div class="symbol mr-3">
                                        <img alt="Pic" src="assets/media/users/300_23.jpg" />
                                    </div>
                                    <div class="symbol mr-3">
                                        <img alt="Pic" src="assets/media/users/300_18.jpg" />
                                    </div>
                                    <div class="symbol mr-3">
                                        <img alt="Pic" src="assets/media/users/300_17.jpg" />
                                    </div>
                                    <div class="symbol">
                                        <img alt="Pic" src="assets/media/users/300_24.jpg" />
                                    </div>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="symbol-list d-flex flex-wrap"&gt;
                            &lt;div class="symbol mr-3"&gt;
                                &lt;img alt="Pic" src="users/300_25.jpg"/&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol mr-3"&gt;
                                &lt;img alt="Pic" src="users/300_21.jpg"/&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol mr-3"&gt;
                                &lt;img alt="Pic" src="users/300_22.jpg"/&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol mr-3"&gt;
                                &lt;img alt="Pic" src="users/300_23.jpg"/&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol mr-3"&gt;
                                &lt;img alt="Pic" src="users/300_18.jpg"/&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol mr-3"&gt;
                                &lt;img alt="Pic" src="users/300_17.jpg"/&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol"&gt;
                                &lt;img alt="Pic" src="users/300_24.jpg"/&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Basic symbol elements with text labels.</p>
                            <div class="example-preview">
                                <div class="symbol-list d-flex flex-wrap">
                                    <div class="symbol mr-3">
                                        <span class="symbol-label font-size-h5">A</span>
                                    </div>
                                    <div class="symbol mr-3">
                                        <span class="symbol-label font-size-h5">CD</span>
                                    </div>
                                    <div class="symbol mr-3">
                                        <span class="symbol-label font-size-h5">MR</span>
                                    </div>
                                    <div class="symbol mr-3">
                                        <span class="symbol-label font-size-h5">A</span>
                                    </div>
                                    <div class="symbol mr-3">
                                        <span class="symbol-label font-size-h5">BD</span>
                                    </div>
                                    <div class="symbol mr-3">
                                        <span class="symbol-label font-size-h5">A.A</span>
                                    </div>
                                    <div class="symbol">
                                        <span class="symbol-label font-size-h5">T.J</span>
                                    </div>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="symbol-list d-flex flex-wrap"&gt;
                            &lt;div class="symbol mr-3"&gt;
                                &lt;span class="symbol-label font-size-h5"&gt;A&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol mr-3"&gt;
                                &lt;span class="symbol-label font-size-h5"&gt;CD&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol mr-3"&gt;
                                &lt;span class="symbol-label font-size-h5"&gt;MR&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol mr-3"&gt;
                                &lt;span class="symbol-label font-size-h5"&gt;A&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol"&gt;
                                &lt;span class="symbol-label font-size-h5"&gt;BD&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol mr-3"&gt;
                                &lt;span class="symbol-label font-size-h5"&gt;A.A&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol"&gt;
                                &lt;span class="symbol-label font-size-h5"&gt;T.J&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Example-->
                        <div class="example">
                            <p>Basic symbol elements with font icons.</p>
                            <div class="example-preview">
                                <div class="symbol-list d-flex flex-wrap">
                                    <div class="symbol mr-3">
                                        <span class="symbol-label">
                                            <i class="flaticon2-warning icon-lg"></i>
                                        </span>
                                    </div>
                                    <div class="symbol mr-3">
                                        <span class="symbol-label">
                                            <i class="flaticon2-tag" icon-lg=""></i>
                                        </span>
                                    </div>
                                    <div class="symbol mr-3">
                                        <span class="symbol-label">
                                            <i class="flaticon2-bell-5 icon-lg"></i>
                                        </span>
                                    </div>
                                    <div class="symbol mr-3">
                                        <span class="symbol-label">
                                            <i class="flaticon2-user-1 icon-lg"></i>
                                        </span>
                                    </div>
                                    <div class="symbol mr-3">
                                        <span class="symbol-label">
                                            <i class="flaticon2-drop icon-lg"></i>
                                        </span>
                                    </div>
                                    <div class="symbol mr-3">
                                        <span class="symbol-label">
                                            <i class="flaticon2-hangouts-logo icon-lg"></i>
                                        </span>
                                    </div>
                                    <div class="symbol">
                                        <span class="symbol-label">
                                            <i class="flaticon2-user-outline-symbol icon-lg"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="symbol-list d-flex flex-wrap"&gt;
                            &lt;div class="symbol mr-3"&gt;
                                &lt;span class="symbol-label"&gt;&lt;i class="flaticon2-warning icon-lg"&gt;&lt;/i&gt;&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol mr-3"&gt;
                                &lt;span class="symbol-label"&gt;&lt;i class="flaticon2-tag" icon-lg&gt;&lt;/i&gt;&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol mr-3"&gt;
                                &lt;span class="symbol-label"&gt;&lt;i class="flaticon2-bell-5 icon-lg"&gt;&lt;/i&gt;&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol mr-3"&gt;
                                &lt;span class="symbol-label"&gt;&lt;i class="flaticon2-user-1 icon-lg"&gt;&lt;/i&gt;&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol mr-3"&gt;
                                &lt;span class="symbol-label"&gt;&lt;i class="flaticon2-drop icon-lg"&gt;&lt;/i&gt;&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol mr-3"&gt;
                                &lt;span class="symbol-label"&gt;&lt;i class="flaticon2-hangouts-logo icon-lg"&gt;&lt;/i&gt;&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol"&gt;
                                &lt;span class="symbol-label"&gt;&lt;i class="flaticon2-user-outline-symbol  icon-lg"&gt;&lt;/i&gt;&lt;/span&gt;
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
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Sizes</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Use
                                <code>.symbol-{size}</code>classes to get it adjusted to your prefered sizes in pixel.
                                Accepted
                                <code>size</code>values are
                                <code>20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85, 90, 95, 100, 100, 120, 130,
                                    140, 150</code>.
                            </p>
                            <div class="example-preview">
                                <div class="symbol-list d-flex flex-wrap mb-10">
                                    <div class="symbol symbol-20 mr-3">
                                        <img alt="Pic" src="assets/media/users/300_18.jpg" />
                                    </div>
                                    <div class="symbol symbol-25 mr-3">
                                        <img alt="Pic" src="assets/media/users/300_19.jpg" />
                                    </div>
                                    <div class="symbol symbol-50 mr-3">
                                        <img alt="Pic" src="assets/media/users/300_20.jpg" />
                                    </div>
                                    <div class="symbol symbol-70 mr-3">
                                        <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                    </div>
                                    <div class="symbol symbol-90 mr-3">
                                        <img alt="Pic" src="assets/media/users/300_22.jpg" />
                                    </div>
                                </div>
                                <div class="symbol-list d-flex flex-wrap">
                                    <div class="symbol symbol-100 mr-3">
                                        <img alt="Pic" src="assets/media/users/300_23.jpg" />
                                    </div>
                                    <div class="symbol symbol-120 mr-3">
                                        <img alt="Pic" src="assets/media/users/300_24.jpg" />
                                    </div>
                                    <div class="symbol symbol-150 mr-3">
                                        <img alt="Pic" src="assets/media/users/300_25.jpg" />
                                    </div>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="d-flex align-items-center"&gt;
                            &lt;div class="symbol symbol-20 mr-3"&gt;
                                &lt;img alt="Pic" src="media/assets/users/300_18.jpg"/&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-25 mr-3"&gt;
                                &lt;img alt="Pic" src="media/assets/users/300_19.jpg"/&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-50 mr-3"&gt;
                                &lt;img alt="Pic" src="media/assets/users/300_20.jpg"/&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-70 mr-3"&gt;
                                &lt;img alt="Pic" src="media/assets/users/300_21.jpg"/&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-90 mr-3"&gt;
                                &lt;img alt="Pic" src="media/assets/users/300_22.jpg"/&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-100 mr-3"&gt;
                                &lt;img alt="Pic" src="media/assets/users/300_23.jpg"/&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-120 mr-3"&gt;
                                &lt;img alt="Pic" src="media/assets/users/300_24.jpg"/&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-150 mr-3"&gt;
                                &lt;img alt="Pic" src="media/assets/users/300_25.jpg"/&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Example-->
                        <div class="example">
                            <div class="example-preview">
                                <div class="symbol-list d-flex flex-wrap">
                                    <div class="symbol symbol-30 mr-3">
                                        <span class="symbol-label font-size-h6">A</span>
                                    </div>
                                    <div class="symbol symbol-35 mr-3">
                                        <span class="symbol-label font-size-h6">B</span>
                                    </div>
                                    <div class="symbol symbol-40 mr-3">
                                        <span class="symbol-label font-size-h6">C</span>
                                    </div>
                                    <div class="symbol symbol-45 mr-3">
                                        <span class="symbol-label font-size-h5">D</span>
                                    </div>
                                    <div class="symbol symbol-50 mr-3">
                                        <span class="symbol-label font-size-h5">E</span>
                                    </div>
                                    <div class="symbol symbol-55 mr-3">
                                        <span class="symbol-label font-size-h5">F</span>
                                    </div>
                                    <div class="symbol symbol-60 mr-3">
                                        <span class="symbol-label font-size-h5">G</span>
                                    </div>
                                    <div class="symbol symbol-65 mr-3">
                                        <span class="symbol-label font-size-h4">H</span>
                                    </div>
                                    <div class="symbol symbol-70 mr-3">
                                        <span class="symbol-label font-size-h4">L</span>
                                    </div>
                                    <div class="symbol symbol-75">
                                        <span class="symbol-label font-size-h4">G</span>
                                    </div>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="d-flex align-items-center"&gt;
                            &lt;div class="symbol symbol-30 mr-3"&gt;
                                &lt;span class="symbol-label font-size-h6"&gt;A&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-35 mr-3"&gt;
                                &lt;span class="symbol-label font-size-h6"&gt;B&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-40 mr-3"&gt;
                                &lt;span class="symbol-label font-size-h6"&gt;C&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-45 mr-3"&gt;
                                &lt;span class="symbol-label font-size-h5"&gt;D&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-50 mr-3"&gt;
                                &lt;span class="symbol-label font-size-h5"&gt;E&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-55 mr-3"&gt;
                                &lt;span class="symbol-label font-size-h5"&gt;F&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-60 mr-3"&gt;
                                &lt;span class="symbol-label font-size-h5"&gt;G&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-65 mr-3"&gt;
                                &lt;span class="symbol-label font-size-h4"&gt;H&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-70 mr-3"&gt;
                                &lt;span class="symbol-label font-size-h4"&gt;L&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-75"&gt;
                                &lt;span class="symbol-label font-size-h4"&gt;G&lt;/span&gt;
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
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Responsize Sizes</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example">
                            <p>Use
                                <code>.symbol</code>with
                                <code>.symbol-{sm|md|lg|xl|xxl}-{size}</code>to set different sizes for breakpoints.
                            </p>
                            <div class="example-preview">
                                <div class="symbol-list d-flex flex-wrap">
                                    <div class="symbol symbol-20 symbol-lg-30 symbol-circle mr-3">
                                        <img alt="Pic" src="assets/media/users/300_20.jpg" />
                                    </div>
                                    <div class="symbol symbol-30 symbol-lg-40 symbol-circle mr-3">
                                        <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                    </div>
                                    <div class="symbol symbol-40 symbol-lg-50 symbol-circle mr-3">
                                        <img alt="Pic" src="assets/media/users/300_22.jpg" />
                                    </div>
                                    <div class="symbol symbol-40 symbol-lg-50 symbol-circle mr-3">
                                        <img alt="Pic" src="assets/media/users/300_23.jpg" />
                                    </div>
                                    <div class="symbol symbol-50 symbol-lg-60 symbol-circle">
                                        <img alt="Pic" src="assets/media/users/300_18.jpg" />
                                    </div>
                                    <div class="symbol symbol-50 symbol-lg-60 symbol-circle">
                                        <img alt="Pic" src="assets/media/users/300_11.jpg" />
                                    </div>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="symbol-list d-flex flex-wrap"&gt;
                            &lt;div class="symbol symbol-20 symbol-lg-30 symbol-circle mr-3"&gt;
                                &lt;img alt="Pic" src="media/assets/users/300_20.jpg"/&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-30 symbol-lg-40 symbol-circle mr-3"&gt;
                                &lt;img alt="Pic" src="media/assets/users/300_21.jpg"/&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-40 symbol-lg-50 symbol-circle mr-3"&gt;
                                &lt;img alt="Pic" src="media/assets/users/300_22.jpg"/&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-40 symbol-lg-50 symbol-circle mr-3"&gt;
                                &lt;img alt="Pic" src="media/assets/users/300_23.jpg"/&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-50 symbol-lg-60 symbol-circle"&gt;
                                &lt;img alt="Pic" src="media/assets/users/300_18.jpg"/&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-50 symbol-lg-60 symbol-circle"&gt;
                                &lt;img alt="Pic" src="media/assets/users/300_11.jpg"/&gt;
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
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Circle Style</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example">
                            <p>Use
                                <code>.symbol</code>with
                                <code>.symbol-circle</code>to have circle style symbol elements.
                            </p>
                            <div class="example-preview">
                                <div class="symbol-list d-flex flex-wrap">
                                    <div class="symbol symbol-circle mr-3">
                                        <img alt="Pic" src="assets/media/users/300_25.jpg" />
                                    </div>
                                    <div class="symbol symbol-circle mr-3">
                                        <span class="symbol-label font-size-h5">A</span>
                                    </div>
                                    <div class="symbol symbol-circle mr-3">
                                        <img alt="Pic" src="assets/media/users/300_22.jpg" />
                                    </div>
                                    <div class="symbol symbol-circle mr-3">
                                        <span class="symbol-label font-size-h5">D</span>
                                    </div>
                                    <div class="symbol symbol-circle">
                                        <img alt="Pic" src="assets/media/users/300_18.jpg" />
                                    </div>
                                    <div class="symbol symbol-circle mr-3">
                                        <span class="symbol-label font-size-h5">F</span>
                                    </div>
                                    <div class="symbol symbol-circle">
                                        <img alt="Pic" src="assets/media/users/300_10.jpg" />
                                    </div>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="symbol-list d-flex flex-wrap"&gt;
                            &lt;div class="symbol symbol-circle mr-3"&gt;
                                &lt;img alt="Pic" src="&lt;?php echo Page::getMediaPath();?&gt;users/300_25.jpg"/&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-circle mr-3"&gt;
                                &lt;span class="symbol-label font-size-h5"&gt;A&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-circle mr-3"&gt;
                                &lt;img alt="Pic" src="&lt;?php echo Page::getMediaPath();?&gt;users/300_22.jpg"/&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-circle mr-3"&gt;
                                &lt;span class="symbol-label font-size-h5"&gt;D&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-circle"&gt;
                                &lt;img alt="Pic" src="&lt;?php echo Page::getMediaPath();?&gt;users/300_18.jpg"/&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-circle mr-3"&gt;
                                &lt;span class="symbol-label font-size-h5"&gt;F&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-circle"&gt;
                                &lt;img alt="Pic" src="&lt;?php echo Page::getMediaPath();?&gt;users/300_10.jpg"/&gt;
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
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Symbol Badges</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example">
                            <p>Use
                                <code>.symbol</code>with
                                <code>.symbol-badge</code>element to have symbol image with colorful badges.
                            </p>
                            <div class="example-preview">
                                <div class="symbol-list d-flex flex-wrap">
                                    <div class="symbol symbol-40 mr-3">
                                        <div class="symbol-label"
                                            style="background-image: url('assets/media/users/300_20.jpg')"></div>
                                        <i class="symbol-badge bg-danger"></i>
                                    </div>
                                    <div class="symbol symbol-40 symbol-circle mr-3">
                                        <img alt="Pic" src="assets/media/users/300_20.jpg" />
                                        <i class="symbol-badge bg-danger"></i>
                                    </div>
                                    <div class="symbol symbol-60 mr-3">
                                        <div class="symbol-label"
                                            style="background-image: url('assets/media/users/300_21.jpg')"></div>
                                        <i class="symbol-badge symbol-badge-bottom bg-success"></i>
                                    </div>
                                    <div class="symbol symbol-circle symbol-60 mr-3">
                                        <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                        <i class="symbol-badge symbol-badge-bottom bg-success"></i>
                                    </div>
                                    <div class="symbol symbol-75 mr-3 mr-3">
                                        <div class="symbol-label"
                                            style="background-image: url('assets/media/users/300_22.jpg')"></div>
                                        <i class="symbol-badge bg-primary"></i>
                                    </div>
                                    <div class="symbol symbol-circle symbol-75 mr-3">
                                        <img alt="Pic" src="assets/media/users/300_22.jpg" />
                                        <i class="symbol-badge bg-primary"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="symbol-list d-flex flex-wrap"&gt;
                            &lt;div class="symbol symbol-40 mr-3"&gt;
                                &lt;div class="symbol-label" style="background-image: url('assets/media/users/300_20.jpg')"&gt;&lt;/div&gt;
                                &lt;i class="symbol-badge bg-danger"&gt;&lt;/i&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-40 symbol-circle mr-3"&gt;
                                &lt;img alt="Pic" src="&lt;?php echo Page::getMediaPath();?&gt;users/300_20.jpg"/&gt;
                                &lt;i class="symbol-badge bg-danger"&gt;&lt;/i&gt;
                            &lt;/div&gt;

                            &lt;div class="symbol symbol-60 mr-3"&gt;
                                &lt;div class="symbol-label" style="background-image: url('assets/media/users/300_21.jpg')"&gt;&lt;/div&gt;
                                &lt;i class="symbol-badge symbol-badge-bottom bg-success"&gt;&lt;/i&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-circle symbol-60 mr-3"&gt;
                                &lt;img alt="Pic" src="&lt;?php echo Page::getMediaPath();?&gt;users/300_21.jpg"/&gt;
                                &lt;i class="symbol-badge symbol-badge-bottom bg-success"&gt;&lt;/i&gt;
                            &lt;/div&gt;

                            &lt;div class="symbol symbol-75 mr-3 mr-3"&gt;
                                &lt;div class="symbol-label" style="background-image: url('assets/media/users/300_22.jpg')"&gt;&lt;/div&gt;
                                &lt;i class="symbol-badge bg-primary"&gt;&lt;/i&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-circle symbol-75 mr-3"&gt;
                                &lt;img alt="Pic" src="&lt;?php echo Page::getMediaPath();?&gt;users/300_22.jpg"/&gt;
                                &lt;i class="symbol-badge bg-primary"&gt;&lt;/i&gt;
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
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Background Images</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Use
                                <code>.symbol</code>with
                                <code>.symbol-fixed</code>with background image to have nicely stretched symbol images.
                            </p>
                            <div class="example-preview">
                                <div class="symbol-list d-flex flex-wrap">
                                    <div class="symbol symbol-30 mr-3">
                                        <div class="symbol-label"
                                            style="background-image: url('assets/media/stock-600x400/img-1.jpg')"></div>
                                    </div>
                                    <div class="symbol symbol-35 mr-3">
                                        <div class="symbol-label"
                                            style="background-image: url('assets/media/stock-600x400/img-1.jpg')"></div>
                                    </div>
                                    <div class="symbol symbol-40 mr-3">
                                        <div class="symbol-label"
                                            style="background-image: url('assets/media/stock-600x400/img-1.jpg')"></div>
                                    </div>
                                    <div class="symbol symbol-45 mr-3">
                                        <div class="symbol-label"
                                            style="background-image: url('assets/media/stock-600x400/img-1.jpg')"></div>
                                    </div>
                                    <div class="symbol symbol-50 mr-3">
                                        <div class="symbol-label"
                                            style="background-image: url('assets/media/stock-600x400/img-1.jpg')"></div>
                                    </div>
                                    <div class="symbol symbol-55 mr-3">
                                        <div class="symbol-label"
                                            style="background-image: url('assets/media/stock-600x400/img-1.jpg')"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="symbol-list d-flex flex-wrap"&gt;
                            &lt;div class="symbol symbol-30 mr-3"&gt;
                                &lt;div class="symbol-label" style="background-image: url('assets/media/stock-600x400/img-1.jpg')"&gt;&lt;/div&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-35 mr-3"&gt;
                                &lt;div class="symbol-label" style="background-image: url('assets/media/stock-600x400/img-1.jpg')"&gt;&lt;/div&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-40 mr-3"&gt;
                                &lt;div class="symbol-label" style="background-image: url('assets/media/stock-600x400/img-1.jpg')"&gt;&lt;/div&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-45 mr-3"&gt;
                                &lt;div class="symbol-label" style="background-image: url('assets/media/stock-600x400/img-1.jpg')"&gt;&lt;/div&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-50 mr-3"&gt;
                                &lt;div class="symbol-label" style="background-image: url('assets/media/stock-600x400/img-1.jpg')"&gt;&lt;/div&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-55 mr-3"&gt;
                                &lt;div class="symbol-label" style="background-image: url('assets/media/stock-600x400/img-1.jpg')"&gt;&lt;/div&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-60 mr-3"&gt;
                                &lt;div class="symbol-label" style="background-image: url('assets/media/stock-600x400/img-1.jpg')"&gt;&lt;/div&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-65 mr-3"&gt;
                                &lt;div class="symbol-label" style="background-image: url('assets/media/stock-600x400/img-1.jpg')"&gt;&lt;/div&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-70 mr-3"&gt;
                                &lt;div class="symbol-label" style="background-image: url('assets/media/stock-600x400/img-1.jpg')"&gt;&lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Example-->
                        <div class="example">
                            <p>Use
                                <code>.symbol</code>with
                                <code>.symbol-2by3</code>to have background image with
                                <code>2X4</code>ratio.
                            </p>
                            <div class="example-preview">
                                <div class="symbol-list d-flex flex-wrap">
                                    <div class="symbol symbol-40 symbol-2by3 mr-3">
                                        <div class="symbol-label"
                                            style="background-image: url('assets/media/stock-600x400/img-6.jpg')"></div>
                                    </div>
                                    <div class="symbol symbol-50 symbol-2by3 mr-3">
                                        <div class="symbol-label"
                                            style="background-image: url('assets/media/stock-600x400/img-6.jpg')"></div>
                                    </div>
                                    <div class="symbol symbol-60 symbol-2by3 mr-3">
                                        <div class="symbol-label"
                                            style="background-image: url('assets/media/stock-600x400/img-6.jpg')"></div>
                                    </div>
                                    <div class="symbol symbol-70 symbol-2by3 mr-3">
                                        <div class="symbol-label"
                                            style="background-image: url('assets/media/stock-600x400/img-6.jpg')"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="symbol-list d-flex flex-wrap"&gt;
                            &lt;div class="symbol symbol-40 symbol-2by3 mr-3"&gt;
                                &lt;div class="symbol-label" style="background-image: url('assets/media/stock-600x400/img-6.jpg')"&gt;&lt;/div&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-50 symbol-2by3 mr-3"&gt;
                                &lt;div class="symbol-label" style="background-image: url('assets/media/stock-600x400/img-6.jpg')"&gt;&lt;/div&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-60 symbol-2by3 mr-3"&gt;
                                &lt;div class="symbol-label" style="background-image: url('assets/media/stock-600x400/img-6.jpg')"&gt;&lt;/div&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-70 symbol-2by3 mr-3"&gt;
                                &lt;div class="symbol-label" style="background-image: url('assets/media/stock-600x400/img-6.jpg')"&gt;&lt;/div&gt;
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
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Label Colors</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Use
                                <code>.symbol</code>with
                                <code>.symbol-{color}</code>to have colors options for symbol labels.
                            </p>
                            <div class="example-preview">
                                <div class="symbol-list d-flex flex-wrap">
                                    <div class="symbol mr-3">
                                        <span class="symbol-label font-size-h5">A</span>
                                    </div>
                                    <div class="symbol symbol-success mr-3">
                                        <span class="symbol-label font-size-h5">S</span>
                                    </div>
                                    <div class="symbol symbol-primary mr-3">
                                        <span class="symbol-label font-size-h5">B</span>
                                    </div>
                                    <div class="symbol symbol-danger mr-3">
                                        <span class="symbol-label font-size-h5">S</span>
                                    </div>
                                    <div class="symbol symbol-info mr-3">
                                        <span class="symbol-label font-size-h5">L</span>
                                    </div>
                                    <div class="symbol symbol-warning mr-3">
                                        <span class="symbol-label font-size-h5">X</span>
                                    </div>
                                    <div class="symbol symbol-dark mr-3">
                                        <span class="symbol-label font-size-h5">W</span>
                                    </div>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="symbol-list d-flex flex-wrap"&gt;
                            &lt;div class="symbol  mr-3"&gt;
                                &lt;span class="symbol-label font-size-h5"&gt;A&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-success mr-3"&gt;
                                &lt;span class="symbol-label font-size-h5"&gt;S&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-primary mr-3"&gt;
                                &lt;span class="symbol-label font-size-h5"&gt;B&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-danger mr-3"&gt;
                                &lt;span class="symbol-label font-size-h5"&gt;S&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-info mr-3"&gt;
                                &lt;span class="symbol-label font-size-h5"&gt;L&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-warning mr-3"&gt;
                                &lt;span class="symbol-label font-size-h5"&gt;X&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-dark mr-3"&gt;
                                &lt;span class="symbol-label font-size-h5"&gt;W&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Example-->
                        <div class="example">
                            <p>Use
                                <code>.symbol</code>with
                                <code>.symbol-light-{color}</code>to have colors options for symbol labels.
                            </p>
                            <div class="example-preview">
                                <div class="symbol-list d-flex flex-wrap">
                                    <div class="symbol mr-3">
                                        <span class="symbol-label font-size-h5">A</span>
                                    </div>
                                    <div class="symbol symbol-light-success mr-3">
                                        <span class="symbol-label font-size-h5">S</span>
                                    </div>
                                    <div class="symbol symbol-light-primary mr-3">
                                        <span class="symbol-label font-size-h5">B</span>
                                    </div>
                                    <div class="symbol symbol-light-danger mr-3">
                                        <span class="symbol-label font-size-h5">S</span>
                                    </div>
                                    <div class="symbol symbol-light-info mr-3">
                                        <span class="symbol-label font-size-h5">L</span>
                                    </div>
                                    <div class="symbol symbol-light-warning mr-3">
                                        <span class="symbol-label font-size-h5">X</span>
                                    </div>
                                    <div class="symbol symbol-light-dark mr-3">
                                        <span class="symbol-label font-size-h5">W</span>
                                    </div>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="symbol-list d-flex flex-wrap"&gt;
                            &lt;div class="symbol mr-3"&gt;
                                &lt;span class="symbol-label font-size-h5"&gt;A&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-light-success mr-3"&gt;
                                &lt;span class="symbol-label font-size-h5"&gt;S&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-light-primary mr-3"&gt;
                                &lt;span class="symbol-label font-size-h5"&gt;B&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-light-danger mr-3"&gt;
                                &lt;span class="symbol-label font-size-h5"&gt;S&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-light-info mr-3"&gt;
                                &lt;span class="symbol-label font-size-h5"&gt;L&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-light-warning mr-3"&gt;
                                &lt;span class="symbol-label font-size-h5"&gt;X&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-light-dark mr-3"&gt;
                                &lt;span class="symbol-label font-size-h5"&gt;W&lt;/span&gt;
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
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Symbol Group</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Use
                                <code>.symbol</code>inside
                                <code>.symbol-group</code>and
                                <code>.symbol-hover</code>to have hoverable stacked symbol elements.
                            </p>
                            <div class="example-preview">
                                <div class="symbol-group symbol-hover">
                                    <div class="symbol">
                                        <img alt="Pic" src="assets/media/users/300_25.jpg" />
                                    </div>
                                    <div class="symbol">
                                        <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                    </div>
                                    <div class="symbol">
                                        <img alt="Pic" src="assets/media/users/300_22.jpg" />
                                    </div>
                                    <div class="symbol">
                                        <img alt="Pic" src="assets/media/users/300_23.jpg" />
                                    </div>
                                    <div class="symbol">
                                        <img alt="Pic" src="assets/media/users/300_18.jpg" />
                                    </div>
                                    <div class="symbol symbol-light-primary">
                                        <span class="symbol-label font-weight-bold">10+</span>
                                    </div>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="symbol-group symbol-hover"&gt;
                            &lt;div class="symbol"&gt;
                                &lt;img alt="Pic" src="&lt;?php echo Page::getMediaPath();?&gt;users/300_25.jpg"/&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol"&gt;
                                &lt;img alt="Pic" src="&lt;?php echo Page::getMediaPath();?&gt;users/300_21.jpg"/&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol"&gt;
                                &lt;img alt="Pic" src="&lt;?php echo Page::getMediaPath();?&gt;users/300_22.jpg"/&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol"&gt;
                                &lt;img alt="Pic" src="&lt;?php echo Page::getMediaPath();?&gt;users/300_23.jpg"/&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol"&gt;
                                &lt;img alt="Pic" src="&lt;?php echo Page::getMediaPath();?&gt;users/300_18.jpg"/&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-light-primary"&gt;
                                &lt;span class="symbol-label font-weight-bold"&gt;10+&lt;/code&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Example-->
                        <div class="example">
                            <div class="example-preview">
                                <div class="symbol-group symbol-hover">
                                    <div class="symbol symbol-circle">
                                        <img alt="Pic" src="assets/media/users/300_25.jpg" />
                                    </div>
                                    <div class="symbol symbol-circle">
                                        <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                    </div>
                                    <div class="symbol symbol-circle">
                                        <img alt="Pic" src="assets/media/users/300_22.jpg" />
                                    </div>
                                    <div class="symbol symbol-circle">
                                        <img alt="Pic" src="assets/media/users/300_23.jpg" />
                                    </div>
                                    <div class="symbol symbol-circle">
                                        <img alt="Pic" src="assets/media/users/300_18.jpg" />
                                    </div>
                                    <div class="symbol symbol-circle symbol-light-danger">
                                        <span class="symbol-label font-weight-bold">5+</span>
                                    </div>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="symbol-group symbol-hover"&gt;
                            &lt;div class="symbol symbol-circle"&gt;
                                &lt;img alt="Pic" src="&lt;?php echo Page::getMediaPath();?&gt;users/300_25.jpg"/&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-circle"&gt;
                                &lt;img alt="Pic" src="&lt;?php echo Page::getMediaPath();?&gt;users/300_21.jpg"/&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-circle"&gt;
                                &lt;img alt="Pic" src="&lt;?php echo Page::getMediaPath();?&gt;users/300_22.jpg"/&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-circle"&gt;
                                &lt;img alt="Pic" src="&lt;?php echo Page::getMediaPath();?&gt;users/300_23.jpg"/&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-circle"&gt;
                                &lt;img alt="Pic" src="&lt;?php echo Page::getMediaPath();?&gt;users/300_18.jpg"/&gt;
                            &lt;/div&gt;
                            &lt;div class="symbol symbol-circle symbol-light-danger"&gt;
                                &lt;span class="symbol-label font-weight-bold"&gt;5+&lt;/span&gt;
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
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Advance Usage</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Use
                                <code>.symbol</code>with other Bootstrap elements to have any kind of UI elements.
                            </p>
                            <div class="example-preview d-flex justify-content-end">
                                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Memebr Profile"
                                    data-placement="top">
                                    <a href="#" class="d-flex align-items-center" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted font-weight-bold mr-1">Hi,</span>
                                        <span class="text-dark-75 font-weight-bold">Sean</span>
                                        <span class="symbol symbol-circle symbol-success symbol-30 ml-2">
                                            <img alt="Pic" src="assets/media/users/300_25.jpg" />
                                        </span>
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
                                                        <span
                                                            class="label label-xl label-inline label-light-dark">Staff</span>
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
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="dropdown dropdown-inline" data-toggle="tooltip" title="Memebr Profile" data-placement="top"&gt;
                            &lt;a href="#" class="d-flex align-items-center" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;
                                &lt;span class="text-muted font-weight-bold mr-1"&gt;Hi,&lt;/span&gt;
                                &lt;span class="text-dark-75 font-weight-bold"&gt;Sean&lt;/span&gt;
                                &lt;span class="symbol symbol-circle symbol-success symbol-30 ml-2"&gt;
                                    &lt;img alt="Pic" src="&lt;?php echo Page::getMediaPath();?&gt;users/300_25.jpg"/&gt;
                                &lt;/span&gt;
                            &lt;/a&gt;
                            &lt;div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right"&gt;
                                ...
                            &lt;/div&gt;
                        &lt;/div&gt;
                        </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <div class="example-preview d-flex justify-content-end">
                                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Memebr Profile"
                                    data-placement="top">
                                    <a href="#" class="d-flex align-items-center" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <div class="d-flex flex-column text-right">
                                            <span class="text-muted font-weight-bold">Hi</span>
                                            <span class="text-dark-75 font-weight-bold">Tony</span>
                                        </div>
                                        <div class="symbol symbol-success ml-2">
                                            <img alt="Pic" src="assets/media/users/300_24.jpg" />
                                        </div>
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
                                                        <span
                                                            class="label label-xl label-inline label-light-dark">Staff</span>
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
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="dropdown dropdown-inline" data-toggle="tooltip" title="Memebr Profile" data-placement="top"&gt;
                            &lt;a href="#" class="d-flex align-items-center" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;
                                &lt;div class="d-flex flex-column text-right"&gt;
                                    &lt;span class="text-muted font-weight-bold"&gt;Hi&lt;/span&gt;
                                    &lt;span class="text-dark-75 font-weight-bold"&gt;Tony&lt;/span&gt;
                                &lt;/div&gt;
                                &lt;div class="symbol symbol-success ml-2"&gt;
                                    &lt;img alt="Pic" src="&lt;?php echo Page::getMediaPath();?&gt;users/300_24.jpg"/&gt;
                                &lt;/div&gt;
                            &lt;/a&gt;
                            &lt;div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right"&gt;
                                ...
                            &lt;/div&gt;
                        &lt;/div&gt;
                        </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <div class="example-preview d-flex justify-content-end">
                                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Memebr Profile"
                                    data-placement="top">
                                    <a href="#" class="d-flex align-items-center" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <div class="symbol symbol-success mr-2">
                                            <img alt="Pic" src="assets/media/users/300_13.jpg" />
                                        </div>
                                        <div class="d-flex flex-column text-left">
                                            <span class="text-muted font-weight-bold">Hi</span>
                                            <span class="text-dark-75 font-weight-bold">Jhon</span>
                                        </div>
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
                                                        <span
                                                            class="label label-xl label-inline label-light-dark">Staff</span>
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
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="dropdown dropdown-inline" data-toggle="tooltip" title="Memebr Profile" data-placement="top"&gt;
                            &lt;a href="#" class="d-flex align-items-center" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;
                                &lt;div class="symbol symbol-success mr-2"&gt;
                                    &lt;img alt="Pic" src="&lt;?php echo Page::getMediaPath();?&gt;users/300_24.jpg"/&gt;
                                &lt;/div&gt;
                                &lt;div class="d-flex flex-column text-left"&gt;
                                    &lt;span class="text-muted font-weight-bold"&gt;Hi&lt;/span&gt;
                                    &lt;span class="text-dark-75 font-weight-bold"&gt;Tony&lt;/span&gt;
                                &lt;/div&gt;
                            &lt;/a&gt;
                            &lt;div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right"&gt;
                                ...
                            &lt;/div&gt;
                        &lt;/div&gt;
                        </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <div class="example-preview d-flex justify-content-end">
                                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Memebr Profile"
                                    data-placement="top">
                                    <a href="#" class="d-flex align-items-center" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <div class="d-flex flex-column text-right">
                                            <span class="text-muted font-weight-bold">Welcome</span>
                                            <span class="text-success font-weight-bold">Nina</span>
                                        </div>
                                        <div class="symbol symbol-circle symbol-success ml-2">
                                            <span class="symbol-label">N</span>
                                        </div>
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
                                                        <span
                                                            class="label label-xl label-inline label-light-dark">Staff</span>
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
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="dropdown dropdown-inline" data-toggle="tooltip" title="Memebr Profile" data-placement="top"&gt;
                            &lt;a href="#" class="d-flex align-items-center" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;
                                &lt;div class="d-flex flex-column text-right"&gt;
                                    &lt;span class="text-muted font-weight-bold"&gt;Welcome&lt;/span&gt;
                                    &lt;span class="text-success font-weight-bold"&gt;Nina&lt;/span&gt;
                                &lt;/div&gt;
                                &lt;div class="symbol symbol-circle symbol-success ml-2"&gt;
                                    &lt;span class="symbol-label"&gt;N&lt;/span&gt;
                                &lt;/div&gt;
                            &lt;/a&gt;
                            &lt;div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right"&gt;
                                ...
                            &lt;/div&gt;
                        &lt;/div&gt;
                        </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Example-->
                        <div class="example">
                            <div class="example-preview d-flex justify-content-end">
                                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Memebr Profile"
                                    data-placement="top">
                                    <a href="#" class="d-flex align-items-center" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <div class="d-flex flex-column text-right">
                                            <span class="text-muted font-weight-bold">Project Manager</span>
                                            <span class="font-weight-bold">Nick Stone</span>
                                        </div>
                                        <div class="symbol symbol-circle symbol-50 ml-3">
                                            <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                            <i class="symbol-badge bg-danger"></i>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover">
                                            <li class="navi-header font-weight-bold py-4">
                                                <span class="font-size-lg">Choose Label:</span>
                                                <i class="flaticon2-information icon-md text-muted"
                                                    data-toggle="tooltip" data-placement="right"
                                                    title="Click to learn more..."></i>
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
                                                        <span
                                                            class="label label-xl label-inline label-light-dark">Staff</span>
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
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="dropdown dropdown-inline" data-toggle="tooltip" title="Memebr Profile" data-placement="top"&gt;
                            &lt;a href="#" class="d-flex align-items-center" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;
                                &lt;div class="d-flex flex-column text-right"&gt;
                                    &lt;span class="text-muted font-weight-bold"&gt;Project Manager&lt;/span&gt;
                                    &lt;span class="font-weight-bold"&gt;Nick Stone&lt;/span&gt;
                                &lt;/div&gt;
                                &lt;div class="symbol symbol-circle symbol-50 mr-3"&gt;
                                    &lt;img alt="Pic" src="&lt;?php echo Page::getMediaPath();?&gt;users/300_21.jpg"/&gt;
                                    &lt;i class="symbol-badge bg-success"&gt;&lt;/i&gt;
                                &lt;/div&gt;
                            &lt;/a&gt;
                            &lt;div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right"&gt;
                                ...
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
    </div>
    <!--end::Container-->
@endsection



