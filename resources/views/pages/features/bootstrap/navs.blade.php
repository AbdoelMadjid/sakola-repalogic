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
                <code>Bootstrap Navs</code>component with a variety of options to provide unique looking Tab components that
                matches Metronic's design standards.
                <br />For more info on the original Bootstrap utilities please visit the official
                <a class="font-weight-bold" href="https://getbootstrap.com/docs/4.5/components/navs/"
                    target="_blank">Bootstrap Navs Documentation</a>.
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
                            <h3 class="card-label">Base Examples</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Navigation components in Bootstrap share some general markup and styles, from the base
                                <code>.nav</code>class to the active and disabled states.
                            </p>
                            <div class="example-preview">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">Active</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                            role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#" tabindex="-1"
                                            aria-disabled="true">Disabled</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;ul class="nav"&gt;
                            &lt;li class="nav-item"&gt;
                                &lt;a class="nav-link active" href="#"&gt;Active&lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="nav-item"&gt;
                                &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="nav-item dropdown"&gt;
                                &lt;a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"&gt;
                                    Dropdown
                                &lt;/a&gt;
                                &lt;div class="dropdown-menu"&gt;
                                    &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
                                    &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
                                    &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
                                    &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
                                    &lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;
                                &lt;/div&gt;
                             &lt;/li&gt;
                            &lt;li class="nav-item"&gt;
                                &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;Disabled&lt;/a&gt;
                            &lt;/li&gt;
                        &lt;/ul&gt;</code>
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
                            <h3 class="card-label">Font Weight Options</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example">
                            <p>Use
                                <code>.nav-bold</code>,
                                <code>.nav-bolder</code>and
                                <code>.nav-boldest</code>to set font weight to nav links.
                            </p>
                            <div class="example-preview">
                                <ul class="nav nav-bold mb-5">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">Active</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                            role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#" tabindex="-1"
                                            aria-disabled="true">Disabled</a>
                                    </li>
                                </ul>
                                <ul class="nav nav-bolder mb-5">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">Active</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                            role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#" tabindex="-1"
                                            aria-disabled="true">Disabled</a>
                                    </li>
                                </ul>
                                <ul class="nav nav-boldest">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">Active</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                            role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#" tabindex="-1"
                                            aria-disabled="true">Disabled</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;ul class="nav nav-bold"&gt;
                            ...
                        &lt;/ul&gt;
                        &lt;ul class="nav nav-bolder"&gt;
                            ...
                        &lt;/ul&gt;
                        &lt;ul class="nav nav-boldest"&gt;
                            ...
                        &lt;/ul&gt;
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
                            <h3 class="card-label">Alignments</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Change the horizontal alignment of your nav with
                                <a class="font-weight-bold"
                                    href="https://getbootstrap.com/docs/4.5/layout/grid/#horizontal-alignment"
                                    target="_blank">flexbox utilities</a>. flexbox utilities. By default, navs are
                                left-aligned, but you can easily change them to center or right aligned.
                                <br />Centered with
                                <code>.justify-content-center</code>:
                            </p>
                            <div class="example-preview">
                                <ul class="nav justify-content-center">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">Active</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                            role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#" tabindex="-1"
                                            aria-disabled="true">Disabled</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;ul class="nav justify-content-center"&gt;
                            ...
                        &lt;/ul&gt;</code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Right-aligned with
                                <code>.justify-content-end</code>:
                            </p>
                            <div class="example-preview">
                                <ul class="nav justify-content-end">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">Active</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#" tabindex="-1"
                                            aria-disabled="true">Disabled</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;ul class="nav justify-content-end"&gt;
                            ...
                        &lt;/ul&gt;</code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Stack your navigation by changing the flex item direction with the
                                <code>.flex-column</code>utility.
                            </p>
                            <div class="example-preview">
                                <ul class="nav flex-column" style="width: 175px">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">
                                            <span class="nav-icon">
                                                <i class="flaticon2-chat-1"></i>
                                            </span>
                                            <span class="nav-text">Active</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <span class="nav-icon">
                                                <i class="flaticon2-layers-1"></i>
                                            </span>
                                            <span class="nav-text">Link</span>
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                            role="button" aria-haspopup="true" aria-expanded="false">
                                            <span class="nav-icon">
                                                <i class="flaticon2-rocket-1"></i>
                                            </span>
                                            <span class="nav-text">Dropdown</span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">
                                            <span class="nav-icon">
                                                <i class="flaticon2-gear"></i>
                                            </span>
                                            <span class="nav-text">Disabled</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;ul class="nav flex-column"&gt;
                            ...
                        &lt;/ul&gt;</code>
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
                            <h3 class="card-label">Tabs</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example">
                            <p>Add the
                                <code>.nav-tabs</code>class to generate a tabbed interface. Use them to create tabbable
                                regions with the
                                <a class="font-weight-bold"
                                    href="https://getbootstrap.com/docs/4.5/components/navs/#javascript-behavior"
                                    target="_blank">Tab JavaScript plugin</a>.
                            </p>
                            <div class="example-preview">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home">
                                            <span class="nav-icon">
                                                <i class="flaticon2-chat-1"></i>
                                            </span>
                                            <span class="nav-text">Home</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                                            aria-controls="profile">
                                            <span class="nav-icon">
                                                <i class="flaticon2-layers-1"></i>
                                            </span>
                                            <span class="nav-text">Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                            role="button" aria-haspopup="true" aria-expanded="false">
                                            <span class="nav-icon">
                                                <i class="flaticon2-rocket-1"></i>
                                            </span>
                                            <span class="nav-text">Dropdown</span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact"
                                            aria-controls="contact">
                                            <span class="nav-icon">
                                                <i class="flaticon2-rocket-1"></i>
                                            </span>
                                            <span class="nav-text">Contact</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content mt-5" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                                        aria-labelledby="home-tab">Tab content 1</div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel"
                                        aria-labelledby="profile-tab">Tab content 2</div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel"
                                        aria-labelledby="contact-tab">Tab content 3</div>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;ul class="nav nav-tabs" id="myTab" role="tablist"&gt;
                            ...
                        &lt;/ul&gt;
                        &lt;div class="tab-content mt-5" id="myTabContent"&gt;
                            ...
                        &lt;/div&gt;</code>
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
                            <h3 class="card-label">Pills</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Add
                                <code>.nav-pills</code>within
                                <code>.nav-tabs</code>to create pill shape navs.
                            </p>
                            <div class="example-preview">
                                <ul class="nav nav-pills" id="myTab1" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab-1" data-toggle="tab" href="#home-1">
                                            <span class="nav-icon">
                                                <i class="flaticon2-chat-1"></i>
                                            </span>
                                            <span class="nav-text">Home</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab-1" data-toggle="tab" href="#profile-1"
                                            aria-controls="profile">
                                            <span class="nav-icon">
                                                <i class="flaticon2-layers-1"></i>
                                            </span>
                                            <span class="nav-text">Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                            role="button" aria-haspopup="true" aria-expanded="false">
                                            <span class="nav-icon">
                                                <i class="flaticon2-rocket-1"></i>
                                            </span>
                                            <span class="nav-text">Dropdown</span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab-1" data-toggle="tab" href="#contact-1"
                                            aria-controls="contact">
                                            <span class="nav-icon">
                                                <i class="flaticon2-rocket-1"></i>
                                            </span>
                                            <span class="nav-text">Contact</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content mt-5" id="myTabContent1">
                                    <div class="tab-pane fade show active" id="home-1" role="tabpanel"
                                        aria-labelledby="home-tab-1">Tab content 1</div>
                                    <div class="tab-pane fade" id="profile-1" role="tabpanel"
                                        aria-labelledby="profile-tab-1">Tab content 2</div>
                                    <div class="tab-pane fade" id="contact-1" role="tabpanel"
                                        aria-labelledby="contact-tab-1">Tab content 3</div>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;ul class="nav nav-pills" id="myTab" role="tablist"&gt;
                            ...
                        &lt;/ul&gt;
                        &lt;div class="tab-content mt-5" id="myTabContent"&gt;
                            ...
                        &lt;/div&gt;</code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Use the standard bootstrap state color classes
                                <code>nav-{color}</code>to change the active pill color.
                            </p>
                            <div class="example-preview">
                                <ul class="nav nav-success nav-pills" id="myTab2" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab-2" data-toggle="tab" href="#home-2">
                                            <span class="nav-icon">
                                                <i class="flaticon2-chat-1"></i>
                                            </span>
                                            <span class="nav-text">Home</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab-2" data-toggle="tab" href="#profile-2"
                                            aria-controls="profile">
                                            <span class="nav-icon">
                                                <i class="flaticon2-layers-1"></i>
                                            </span>
                                            <span class="nav-text">Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                            role="button" aria-haspopup="true" aria-expanded="false">
                                            <span class="nav-icon">
                                                <i class="flaticon2-rocket-1"></i>
                                            </span>
                                            <span class="nav-text">Dropdown</span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab-2" data-toggle="tab" href="#contact-2"
                                            aria-controls="contact">
                                            <span class="nav-icon">
                                                <i class="flaticon2-rocket-1"></i>
                                            </span>
                                            <span class="nav-text">Contact</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content mt-5" id="myTabContent2">
                                    <div class="tab-pane fade show active" id="home-2" role="tabpanel"
                                        aria-labelledby="home-tab-2">Tab content 1</div>
                                    <div class="tab-pane fade" id="profile-2" role="tabpanel"
                                        aria-labelledby="profile-tab-2">Tab content 2</div>
                                    <div class="tab-pane fade" id="contact-2" role="tabpanel"
                                        aria-labelledby="contact-tab-2">Tab content 3</div>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;ul class="nav nav-success nav-pills" id="myTab" role="tablist"&gt;
                            ...
                        &lt;/ul&gt;
                        &lt;div class="tab-content mt-5" id="myTabContent"&gt;
                            ...
                        &lt;/div&gt;</code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Use the standard bootstrap state color classes
                                <code>nav-light-{color}</code>to set the light pill color style.
                            </p>
                            <div class="example-preview">
                                <ul class="nav nav-light-success nav-pills" id="myTab3" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab-3" data-toggle="tab" href="#home-3">
                                            <span class="nav-icon">
                                                <i class="flaticon2-chat-1"></i>
                                            </span>
                                            <span class="nav-text">Home</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab-3" data-toggle="tab" href="#profile-3"
                                            aria-controls="profile">
                                            <span class="nav-icon">
                                                <i class="flaticon2-layers-1"></i>
                                            </span>
                                            <span class="nav-text">Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                            role="button" aria-haspopup="true" aria-expanded="false">
                                            <span class="nav-icon">
                                                <i class="flaticon2-rocket-1"></i>
                                            </span>
                                            <span class="nav-text">Dropdown</span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab-3" data-toggle="tab" href="#contact-3"
                                            aria-controls="contact">
                                            <span class="nav-icon">
                                                <i class="flaticon2-rocket-1"></i>
                                            </span>
                                            <span class="nav-text">Contact</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content mt-5" id="myTabContent3">
                                    <div class="tab-pane fade show active" id="home-3" role="tabpanel"
                                        aria-labelledby="home-tab-3">Tab content 1</div>
                                    <div class="tab-pane fade" id="profile-3" role="tabpanel"
                                        aria-labelledby="profile-tab-3">Tab content 2</div>
                                    <div class="tab-pane fade" id="contact-3" role="tabpanel"
                                        aria-labelledby="contact-tab-3">Tab content 3</div>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;ul class="nav nav-light-success nav-pills" id="myTab" role="tablist"&gt;
                            ...
                        &lt;/ul&gt;
                        &lt;div class="tab-content mt-5" id="myTabContent"&gt;
                            ...
                        &lt;/div&gt;</code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Use
                                <code>nav-fill</code>class to fill and justify.
                            </p>
                            <div class="example-preview">
                                <ul class="nav nav-pills nav-fill">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab-4" data-toggle="tab" href="#home-4">
                                            <span class="nav-icon">
                                                <i class="flaticon2-chat-1"></i>
                                            </span>
                                            <span class="nav-text">Home</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab-4" data-toggle="tab" href="#profile-4"
                                            aria-controls="profile">
                                            <span class="nav-icon">
                                                <i class="flaticon2-layers-1"></i>
                                            </span>
                                            <span class="nav-text">Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                            role="button" aria-haspopup="true" aria-expanded="false">
                                            <span class="nav-icon">
                                                <i class="flaticon2-rocket-1"></i>
                                            </span>
                                            <span class="nav-text">Dropdown</span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab-4" data-toggle="tab" href="#contact-4"
                                            aria-controls="contact">
                                            <span class="nav-icon">
                                                <i class="flaticon2-rocket-1"></i>
                                            </span>
                                            <span class="nav-text">Contact</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content mt-5" id="myTabContent4">
                                    <div class="tab-pane fade show active" id="home-4" role="tabpanel"
                                        aria-labelledby="home-tab-4">Tab content 1</div>
                                    <div class="tab-pane fade" id="profile-4" role="tabpanel"
                                        aria-labelledby="profile-tab-4">Tab content 2</div>
                                    <div class="tab-pane fade" id="contact-4" role="tabpanel"
                                        aria-labelledby="contact-tab-4">Tab content 3</div>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;ul class="nav nav-pills nav-fill"&gt;
                            ...
                        &lt;/ul&gt;</code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Add Bootstrap's
                                <code>.flex-column</code>class for vertical navs.
                            </p>
                            <div class="example-preview">
                                <div class="row">
                                    <div class="col-4">
                                        <ul class="nav flex-column nav-pills">
                                            <li class="nav-item mb-2">
                                                <a class="nav-link active" id="home-tab-5" data-toggle="tab"
                                                    href="#home-5">
                                                    <span class="nav-icon">
                                                        <i class="flaticon2-chat-1"></i>
                                                    </span>
                                                    <span class="nav-text">Home</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-2">
                                                <a class="nav-link" id="profile-tab-5" data-toggle="tab"
                                                    href="#profile-5" aria-controls="profile">
                                                    <span class="nav-icon">
                                                        <i class="flaticon2-layers-1"></i>
                                                    </span>
                                                    <span class="nav-text">Profile</span>
                                                </a>
                                            </li>
                                            <li class="nav-item dropdown mb-2">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                                    role="button" aria-haspopup="true" aria-expanded="false">
                                                    <span class="nav-icon">
                                                        <i class="flaticon2-position"></i>
                                                    </span>
                                                    <span class="nav-text">Dropdown</span>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="contact-tab-5" data-toggle="tab"
                                                    href="#contact-5" aria-controls="contact">
                                                    <span class="nav-icon">
                                                        <i class="flaticon2-rocket-1"></i>
                                                    </span>
                                                    <span class="nav-text">Contact</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-8">
                                        <div class="tab-content" id="myTabContent5">
                                            <div class="tab-pane fade show active" id="home-5" role="tabpanel"
                                                aria-labelledby="home-tab-5">Cillum ad ut irure tempor velit nostrud
                                                occaecat ullamco aliqua anim Lorem sint. Id id reprehenderit sit est eu
                                                aliqua occaecat quis et velit excepteur laborum mollit dolore eiusmod. Ipsum
                                                dolor in occaecat commodo et voluptate minim reprehenderit mollit pariatur.
                                            </div>
                                            <div class="tab-pane fade" id="profile-5" role="tabpanel"
                                                aria-labelledby="profile-tab-5">Cillum ad ut irure tempor velit nostrud
                                                occaecat ullamco aliqua anim Lorem sint. Id id reprehenderit sit est eu
                                                aliquad. Ipsum dolor in occaecat commodo et voluptate minim reprehenderit
                                                mollit pariatur.</div>
                                            <div class="tab-pane fade" id="contact-5" role="tabpanel"
                                                aria-labelledby="contact-tab-5">Cillum ad ut irure tempor velit nostrud
                                                occaecat ullamco aliqua anim Lorem sint. Ipsum dolor in occaecat commodo et
                                                voluptate minim reprehenderit mollit pariatur.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="row"&gt;
                            &lt;div class="col-4"&gt;
                                &lt;ul class="nav flex-column nav-pills"&gt;
                                    ...
                                &lt;/ul&gt;
                            &lt;/div&gt;
                            &lt;div class="col-8"&gt;
                                &lt;div class="tab-content" id="myTabContent"&gt;
                                    ...
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;</code>
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
