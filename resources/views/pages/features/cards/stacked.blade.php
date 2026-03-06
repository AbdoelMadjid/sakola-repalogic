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
            <div class="alert-text">Use Boostrap cards with
                <code>.card-stretch</code>and
                <code>.card-stretch-{half|third|fourth}</code>classes to have stretch cards in Bootstrap Grid.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Example-->
        <!--begin::Row-->
        <div class="row">
            <div class="col-lg-4">
                <!--begin::Card-->
                <div class="card card-custom card-stretch">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Card Title
                                <small>same height cards</small>
                            </h3>
                        </div>
                    </div>
                    <div class="card-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                        a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.</div>
                </div>
                <!--end::Card-->
            </div>
            <div class="col-lg-4">
                <!--begin::Card-->
                <div class="card card-custom card-stretch">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Card Title
                                <small>same height cards</small>
                            </h3>
                        </div>
                    </div>
                    <div class="card-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                        a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.</div>
                </div>
                <!--end::Card-->
            </div>
            <div class="col-lg-4">
                <!--begin::Card-->
                <div class="card card-custom card-stretch">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Card Title
                                <small>same height cards</small>
                            </h3>
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
        <!--end::Row-->
        <!--begin::Code example-->
        <div class="example example-compact mt-2 mb-10">
            <div class="example-tools justify-content-center">
                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
            </div>
            <div class="example-code">
                <div class="example-highlight">
                    <pre style="height:350px">
<code class="language-html">
        &lt;div class="row"&gt;
            &lt;div class="col-lg-4"&gt;
                &lt;!--begin::Card--&gt;
                &lt;div class="card card-custom card-stretch"&gt;
                    &lt;div class="card-header"&gt;
                        &lt;div class="card-title"&gt;
                            &lt;h3 class="card-label"&gt;Card Title &lt;small&gt;same height cards&lt;/small&gt;&lt;/h3&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="card-body"&gt;
                        ...
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;!--end::Card--&gt;
            &lt;/div&gt;
            &lt;div class="col-lg-4"&gt;
                &lt;!--begin::Card--&gt;
                &lt;div class="card card-custom card-stretch"&gt;
                    &lt;div class="card-header"&gt;
                        &lt;div class="card-title"&gt;
                            &lt;h3 class="card-label"&gt;Card Title &lt;small&gt;same height cards&lt;/small&gt;&lt;/h3&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="card-body"&gt;
                        ...
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;!--end::Card--&gt;
            &lt;/div&gt;
            &lt;div class="col-lg-4"&gt;
                &lt;!--begin::Card--&gt;
                &lt;div class="card card-custom card-stretch"&gt;
                    &lt;div class="card-header"&gt;
                        &lt;div class="card-title"&gt;
                            &lt;h3 class="card-label"&gt;Card Title &lt;small&gt;same height cards&lt;/small&gt;&lt;/h3&gt;
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
        </div>
        <!--end::Code example-->
        <!--end::Example-->
        <!--begin::Example-->
        <!--begin::Row-->
        <div class="row">
            <div class="col-lg-4">
                <!--begin::Card-->
                <div class="card card-custom card-stretch">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Card Title
                                <small>full height card</small>
                            </h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled.</p>
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <div class="col-lg-4">
                <!--begin::Card-->
                <div class="card card-custom card-stretch card-stretch-half gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Card Title
                                <small>half height card</small>
                            </h3>
                        </div>
                    </div>
                    <div class="card-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                        a galley of type and scrambled. Lorem Ipsum.</div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom card-stretch card-stretch-half">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Card Title
                                <small>half height card</small>
                            </h3>
                        </div>
                    </div>
                    <div class="card-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                        a galley of type and scrambled. Lorem Ipsum.</div>
                </div>
                <!--end::Card-->
            </div>
            <div class="col-lg-4">
                <!--begin::Card-->
                <div class="card card-custom card-stretch">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Card Title
                                <small>full height card</small>
                            </h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled.</p>
                    </div>
                </div>
                <!--end::Card-->
            </div>
        </div>
        <!--end::Row-->
        <!--begin::Code example-->
        <div class="example example-compact mt-2 mb-10">
            <div class="example-tools justify-content-center">
                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
            </div>
            <div class="example-code">
                <div class="example-highlight">
                    <pre style="height:350px">
<code class="language-html">
        &lt;div class="row"&gt;
            &lt;div class="col-lg-4"&gt;
                &lt;!--begin::Card--&gt;
                &lt;div class="card card-custom card-stretch"&gt;
                    &lt;div class="card-header"&gt;
                        &lt;div class="card-title"&gt;
                            &lt;h3 class="card-label"&gt;Card Title &lt;small&gt;full height card&lt;/small&gt;&lt;/h3&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="card-body"&gt;
                        ...
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;!--end::Card--&gt;
            &lt;/div&gt;
            &lt;div class="col-lg-4"&gt;
                &lt;!--begin::Card--&gt;
                &lt;div class="card card-custom card-stretch card-stretch-half gutter-b"&gt;
                    &lt;div class="card-header"&gt;
                        &lt;div class="card-title"&gt;
                            &lt;h3 class="card-label"&gt;Card Title &lt;small&gt;half height card&lt;/small&gt;&lt;/h3&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="card-body"&gt;
                        ...
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;!--end::Card--&gt;

                &lt;!--begin::Card--&gt;
                &lt;div class="card card-custom card-stretch card-stretch-half"&gt;
                    &lt;div class="card-header"&gt;
                        &lt;div class="card-title"&gt;
                            &lt;h3 class="card-label"&gt;Card Title &lt;small&gt;half height card&lt;/small&gt;&lt;/h3&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="card-body"&gt;
                        ...
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;!--end::Card--&gt;
            &lt;/div&gt;
            &lt;div class="col-lg-4"&gt;
                &lt;!--begin::Card--&gt;
                &lt;div class="card card-custom card-stretch"&gt;
                    &lt;div class="card-header"&gt;
                        &lt;div class="card-title"&gt;
                            &lt;h3 class="card-label"&gt;Card Title &lt;small&gt;full height card&lt;/small&gt;&lt;/h3&gt;
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
        </div>
        <!--end::Code example-->
        <!--end::Example-->
        <!--begin::Example-->
        <!--begin::Row-->
        <div class="row">
            <div class="col-lg-4">
                <!--begin::Card-->
                <div class="card card-custom card-stretch">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Card Title
                                <small>full height card</small>
                            </h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled.</p>
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <div class="col-lg-4">
                <!--begin::Card-->
                <div class="card card-custom card-stretch card-stretch-third gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Card Title
                                <small>third height card</small>
                            </h3>
                        </div>
                    </div>
                    <div class="card-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                        a galley of type and scrambled. Lorem Ipsum.</div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom card-stretch card-stretch-third gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Card Title
                                <small>third height card</small>
                            </h3>
                        </div>
                    </div>
                    <div class="card-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                        a galley of type and scrambled. Lorem Ipsum.</div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom card-stretch card-stretch-third">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Card Title
                                <small>third height card</small>
                            </h3>
                        </div>
                    </div>
                    <div class="card-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                        a galley of type and scrambled. Lorem Ipsum.</div>
                </div>
                <!--end::Card-->
            </div>
            <div class="col-lg-4">
                <!--begin::Card-->
                <div class="card card-custom card-stretch card-stretch-half gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Card Title
                                <small>half height card</small>
                            </h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled.</p>
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom card-stretch card-stretch-half">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Card Title
                                <small>half height card</small>
                            </h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled.</p>
                    </div>
                </div>
                <!--end::Card-->
            </div>
        </div>
        <!--end::Row-->
        <!--begin::Code example-->
        <div class="example example-compact mt-2 mb-10">
            <div class="example-tools justify-content-center">
                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
            </div>
            <div class="example-code">
                <div class="example-highlight">
                    <pre style="height:350px">
<code class="language-html">
        &lt;div class="row"&gt;
            &lt;div class="col-lg-4"&gt;
                &lt;!--begin::Card--&gt;
                &lt;div class="card card-custom card-stretch"&gt;
                    &lt;div class="card-header"&gt;
                        &lt;div class="card-title"&gt;
                            &lt;h3 class="card-label"&gt;Card Title &lt;small&gt;full height card&lt;/small&gt;&lt;/h3&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="card-body"&gt;
                        ...
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;!--end::Card--&gt;
            &lt;/div&gt;
            &lt;div class="col-lg-4"&gt;
                &lt;!--begin::Card--&gt;
                &lt;div class="card card-custom card-stretch card-stretch-third gutter-b"&gt;
                    &lt;div class="card-header"&gt;
                        &lt;div class="card-title"&gt;
                            &lt;h3 class="card-label"&gt;Card Title &lt;small&gt;third height card&lt;/small&gt;&lt;/h3&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="card-body"&gt;
                        ...
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;!--end::Card--&gt;

                &lt;!--begin::Card--&gt;
                &lt;div class="card card-custom card-stretch card-stretch-third gutter-b"&gt;
                    &lt;div class="card-header"&gt;
                        &lt;div class="card-title"&gt;
                            &lt;h3 class="card-label"&gt;Card Title &lt;small&gt;third height card&lt;/small&gt;&lt;/h3&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="card-body"&gt;
                        ...
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;!--end::Card--&gt;

                &lt;!--begin::Card--&gt;
                &lt;div class="card card-custom card-stretch card-stretch-third"&gt;
                    &lt;div class="card-header"&gt;
                        &lt;div class="card-title"&gt;
                            &lt;h3 class="card-label"&gt;Card Title &lt;small&gt;third height card&lt;/small&gt;&lt;/h3&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="card-body"&gt;
                        ...
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;!--end::Card--&gt;
            &lt;/div&gt;
            &lt;div class="col-lg-4"&gt;
                &lt;!--begin::Card--&gt;
                &lt;div class="card card-custom card-stretch card-stretch-half gutter-b"&gt;
                    &lt;div class="card-header"&gt;
                        &lt;div class="card-title"&gt;
                            &lt;h3 class="card-label"&gt;Card Title &lt;small&gt;half height card&lt;/small&gt;&lt;/h3&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="card-body"&gt;
                        ...
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;!--end::Card--&gt;

                &lt;!--begin::Card--&gt;
                &lt;div class="card card-custom card-stretch card-stretch-half"&gt;
                    &lt;div class="card-header"&gt;
                        &lt;div class="card-title"&gt;
                            &lt;h3 class="card-label"&gt;Card Title &lt;small&gt;half height card&lt;/small&gt;&lt;/h3&gt;
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
        </div>
        <!--end::Code example-->
        <!--end::Example-->
        <!--begin::Example-->
        <!--begin::Row-->
        <div class="row">
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-custom card-stretch card-stretch-fourth gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Card Title
                                <small>fourth height card</small>
                            </h3>
                        </div>
                    </div>
                    <div class="card-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                        a galley of type and scrambled. Lorem Ipsum.</div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom card-stretch card-stretch-fourth gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Card Title
                                <small>fourth height card</small>
                            </h3>
                        </div>
                    </div>
                    <div class="card-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                        a galley of type and scrambled. Lorem Ipsum.</div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom card-stretch card-stretch-fourth gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Card Title
                                <small>fourth height card</small>
                            </h3>
                        </div>
                    </div>
                    <div class="card-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                        a galley of type and scrambled. Lorem Ipsum.</div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom card-stretch card-stretch-fourth">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Card Title
                                <small>fourth height card</small>
                            </h3>
                        </div>
                    </div>
                    <div class="card-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                        a galley of type and scrambled. Lorem Ipsum.</div>
                </div>
                <!--end::Card-->
            </div>
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-custom card-stretch card-stretch-half gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Card Title
                                <small>full height card</small>
                            </h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled.</p>
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom card-stretch card-stretch-half">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Card Title
                                <small>full height card</small>
                            </h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled.</p>
                    </div>
                </div>
                <!--end::Card-->
            </div>
        </div>
        <!--end::Row-->
        <!--begin::Code example-->
        <div class="example example-compact mt-2 mb-10">
            <div class="example-tools justify-content-center">
                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
            </div>
            <div class="example-code">
                <div class="example-highlight">
                    <pre style="height:350px">
<code class="language-html">
        &lt;div class="row"&gt;
            &lt;div class="col-lg-6"&gt;
                &lt;!--begin::Card--&gt;
                &lt;div class="card card-custom card-stretch card-stretch-fourth gutter-b"&gt;
                    &lt;div class="card-header"&gt;
                        &lt;div class="card-title"&gt;
                            &lt;h3 class="card-label"&gt;Card Title &lt;small&gt;fourth height card&lt;/small&gt;&lt;/h3&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="card-body"&gt;
                        ...
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;!--end::Card--&gt;

                &lt;!--begin::Card--&gt;
                &lt;div class="card card-custom card-stretch card-stretch-fourth gutter-b"&gt;
                    &lt;div class="card-header"&gt;
                        &lt;div class="card-title"&gt;
                            &lt;h3 class="card-label"&gt;Card Title &lt;small&gt;fourth height card&lt;/small&gt;&lt;/h3&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="card-body"&gt;
                        ...
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;!--end::Card--&gt;

                &lt;!--begin::Card--&gt;
                &lt;div class="card card-custom card-stretch card-stretch-fourth gutter-b"&gt;
                    &lt;div class="card-header"&gt;
                        &lt;div class="card-title"&gt;
                            &lt;h3 class="card-label"&gt;Card Title &lt;small&gt;fourth height card&lt;/small&gt;&lt;/h3&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="card-body"&gt;
                        ...
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;!--end::Card--&gt;

                &lt;!--begin::Card--&gt;
                &lt;div class="card card-custom card-stretch card-stretch-fourth"&gt;
                    &lt;div class="card-header"&gt;
                        &lt;div class="card-title"&gt;
                            &lt;h3 class="card-label"&gt;Card Title &lt;small&gt;fourth height card&lt;/small&gt;&lt;/h3&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="card-body"&gt;
                        ...
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;!--end::Card--&gt;
            &lt;/div&gt;
            &lt;div class="col-lg-6"&gt;
                &lt;!--begin::Card--&gt;
                &lt;div class="card card-custom card-stretch card-stretch-half gutter-b"&gt;
                    &lt;div class="card-header"&gt;
                        &lt;div class="card-title"&gt;
                            &lt;h3 class="card-label"&gt;Card Title &lt;small&gt;full height card&lt;/small&gt;&lt;/h3&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="card-body"&gt;
                        ...
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;!--end::Card--&gt;

                &lt;!--begin::Card--&gt;
                &lt;div class="card card-custom card-stretch card-stretch-half"&gt;
                    &lt;div class="card-header"&gt;
                        &lt;div class="card-title"&gt;
                            &lt;h3 class="card-label"&gt;Card Title &lt;small&gt;full height card&lt;/small&gt;&lt;/h3&gt;
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
        </div>
        <!--end::Code example-->
        <!--end::Example-->
    </div>
    <!--end::Container-->
@endsection
