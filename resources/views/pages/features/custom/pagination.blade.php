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
            <div class="alert-text">Advanced Pagination examples using Bootstap Buttons and Form Controls.</div>
        </div>
        <!--end::Notice-->
        <!--begin::Row-->
        <div class="row">
            <div class="col-lg-12">
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Basic Examples</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example example-basic">
                            <p>Use
                                <code>.btn</code>and
                                <code>form-control</code>to have extended pagination option.
                            </p>
                            <div class="example-preview">
                                <!--begin::Pagination-->
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="d-flex flex-wrap py-2 mr-3">
                                        <a href="#" class="btn btn-icon btn-sm btn-light mr-2 my-1">
                                            <i class="ki ki-bold-double-arrow-back icon-xs"></i>
                                        </a>
                                        <a href="#" class="btn btn-icon btn-sm btn-light mr-2 my-1">
                                            <i class="ki ki-bold-arrow-back icon-xs"></i>
                                        </a>
                                        <a href="#" class="btn btn-icon btn-sm border-0 btn-light mr-2 my-1">...</a>
                                        <a href="#" class="btn btn-icon btn-sm border-0 btn-light mr-2 my-1">23</a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-light btn-hover-primary active mr-2 my-1">24</a>
                                        <a href="#" class="btn btn-icon btn-sm border-0 btn-light mr-2 my-1">25</a>
                                        <a href="#" class="btn btn-icon btn-sm border-0 btn-light mr-2 my-1">26</a>
                                        <a href="#" class="btn btn-icon btn-sm border-0 btn-light mr-2 my-1">27</a>
                                        <a href="#" class="btn btn-icon btn-sm border-0 btn-light mr-2 my-1">28</a>
                                        <a href="#" class="btn btn-icon btn-sm border-0 btn-light mr-2 my-1">...</a>
                                        <a href="#" class="btn btn-icon btn-sm btn-light mr-2 my-1">
                                            <i class="ki ki-bold-arrow-next icon-xs"></i>
                                        </a>
                                        <a href="#" class="btn btn-icon btn-sm btn-light mr-2 my-1">
                                            <i class="ki ki-bold-double-arrow-next icon-xs"></i>
                                        </a>
                                    </div>
                                    <div class="d-flex align-items-center py-3">
                                        <div class="d-flex align-items-center">
                                            <div class="mr-2 text-muted">Loading...</div>
                                            <div class="spinner mr-10"></div>
                                        </div>
                                        <select class="form-control form-control-sm font-weight-bold mr-4 border-0 bg-light"
                                            style="width: 75px;">
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                        <span class="text-muted">Displaying 10 of 230 records</span>
                                    </div>
                                </div>
                                <!--end:: Pagination-->
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Code example-->
                        <div class="example example-compact mt-5">
                            <div class="example-tools">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                            <div class="example-code">
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;!--begin::Pagination--&gt;
                        &lt;div class="d-flex justify-content-between align-items-center flex-wrap"&gt;
                            &lt;div class="d-flex flex-wrap py-2 mr-3"&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm btn-light mr-2 my-1"&gt;&lt;i class="ki ki-bold-double-arrow-back icon-xs"&gt;&lt;/i&gt;&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm btn-light mr-2 my-1"&gt;&lt;i class="ki ki-bold-arrow-back icon-xs"&gt;&lt;/i&gt;&lt;/a&gt;

                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-light mr-2 my-1"&gt;...&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-light mr-2 my-1"&gt;23&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-light btn-hover-primary active mr-2 my-1"&gt;24&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-light mr-2 my-1"&gt;25&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-light mr-2 my-1"&gt;26&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-light mr-2 my-1"&gt;27&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-light mr-2 my-1"&gt;28&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-light mr-2 my-1"&gt;...&lt;/a&gt;

                                &lt;a href="#" class="btn btn-icon btn-sm btn-light mr-2 my-1"&gt;&lt;i class="ki ki-bold-arrow-next icon-xs"&gt;&lt;/i&gt;&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm btn-light mr-2 my-1"&gt;&lt;i class="ki ki-bold-double-arrow-next icon-xs"&gt;&lt;/i&gt;&lt;/a&gt;
                            &lt;/div&gt;
                            &lt;div class="d-flex align-items-center py-3"&gt;
                                &lt;div class="d-flex align-items-center"&gt;
                                    &lt;div class="mr-2 text-muted"&gt;Loading...&lt;/div&gt;
                                    &lt;div class="spinner mr-10"&gt;&lt;/div&gt;
                                &lt;/div&gt;

                                &lt;select class="form-control form-control-sm font-weight-bold mr-4 border-0 bg-light" style="width: 75px;"&gt;
                                    &lt;option value="10"&gt;10&lt;/option&gt;
                                    &lt;option value="20"&gt;20&lt;/option&gt;
                                    &lt;option value="30"&gt;30&lt;/option&gt;
                                    &lt;option value="50"&gt;50&lt;/option&gt;
                                    &lt;option value="100"&gt;100&lt;/option&gt;
                                &lt;/select&gt;
                                &lt;span class="text-muted"&gt;Displaying 10 of 230 records&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;!--end:: Pagination--&gt;
      </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Code example-->
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Color Options</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example example-basic">
                            <p>Use
                                <code>.btn-light-{color}</code>and
                                <code>.btn-hover-{color}</code>classes to pagination color options.
                            </p>
                            <div class="example-preview">
                                <!--begin::Pagination-->
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="d-flex flex-wrap py-2 mr-3">
                                        <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                                            <i class="ki ki-bold-double-arrow-back icon-xs"></i>
                                        </a>
                                        <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                                            <i class="ki ki-bold-arrow-back icon-xs"></i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">...</a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">23</a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-primary active mr-2 my-1">24</a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">25</a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">26</a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">27</a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">28</a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">...</a>
                                        <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                                            <i class="ki ki-bold-arrow-next icon-xs"></i>
                                        </a>
                                        <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                                            <i class="ki ki-bold-double-arrow-next icon-xs"></i>
                                        </a>
                                    </div>
                                    <div class="d-flex align-items-center py-3">
                                        <div class="d-flex align-items-center">
                                            <div class="mr-2 text-muted">Loading...</div>
                                            <div class="spinner spinner-primary mr-10"></div>
                                        </div>
                                        <select
                                            class="form-control form-control-sm text-primary font-weight-bold mr-4 border-0 bg-light-primary"
                                            style="width: 75px;">
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                        <span class="text-muted">Displaying 10 of 230 records</span>
                                    </div>
                                </div>
                                <!--end:: Pagination-->
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Code example-->
                        <div class="example example-compact mt-2">
                            <div class="example-tools">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                            <div class="example-code">
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="d-flex justify-content-between align-items-center flex-wrap"&gt;
                            &lt;div class="d-flex flex-wrap py-2 mr-3"&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1"&gt;&lt;i class="ki ki-bold-double-arrow-back icon-xs"&gt;&lt;/i&gt;&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1"&gt;&lt;i class="ki ki-bold-arrow-back icon-xs"&gt;&lt;/i&gt;&lt;/a&gt;

                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1"&gt;...&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1"&gt;23&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary active mr-2 my-1"&gt;24&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1"&gt;25&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1"&gt;26&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1"&gt;27&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1"&gt;28&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1"&gt;...&lt;/a&gt;

                                &lt;a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1"&gt;&lt;i class="ki ki-bold-arrow-next icon-xs"&gt;&lt;/i&gt;&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1"&gt;&lt;i class="ki ki-bold-double-arrow-next icon-xs"&gt;&lt;/i&gt;&lt;/a&gt;
                            &lt;/div&gt;
                            &lt;div class="d-flex align-items-center py-3"&gt;
                                &lt;div class="d-flex align-items-center"&gt;
                                    &lt;div class="mr-2 text-muted"&gt;Loading...&lt;/div&gt;
                                    &lt;div class="spinner spinner-primary mr-10"&gt;&lt;/div&gt;
                                &lt;/div&gt;

                                &lt;select class="form-control form-control-sm text-primary font-weight-bold mr-4 border-0 bg-light-primary" style="width: 75px;"&gt;
                                    &lt;option value="10"&gt;10&lt;/option&gt;
                                    &lt;option value="20"&gt;20&lt;/option&gt;
                                    &lt;option value="30"&gt;30&lt;/option&gt;
                                    &lt;option value="50"&gt;50&lt;/option&gt;
                                    &lt;option value="100"&gt;100&lt;/option&gt;
                                &lt;/select&gt;
                                &lt;span class="text-muted"&gt;Displaying 10 of 230 records&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
      </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Code example-->
                        <!--begin::Example-->
                        <div class="example example-basic mt-10">
                            <div class="example-preview">
                                <!--begin::Pagination-->
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="d-flex flex-wrap py-2 mr-3">
                                        <a href="#" class="btn btn-icon btn-sm btn-light-success mr-2 my-1">
                                            <i class="ki ki-bold-double-arrow-back icon-xs"></i>
                                        </a>
                                        <a href="#" class="btn btn-icon btn-sm btn-light-success mr-2 my-1">
                                            <i class="ki ki-bold-arrow-back icon-xs"></i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-success mr-2 my-1">...</a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-success mr-2 my-1">23</a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-success active mr-2 my-1">24</a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-success mr-2 my-1">25</a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-success mr-2 my-1">26</a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-success mr-2 my-1">27</a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-success mr-2 my-1">28</a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-success mr-2 my-1">...</a>
                                        <a href="#" class="btn btn-icon btn-sm btn-light-success mr-2 my-1">
                                            <i class="ki ki-bold-arrow-next icon-xs"></i>
                                        </a>
                                        <a href="#" class="btn btn-icon btn-sm btn-light-success mr-2 my-1">
                                            <i class="ki ki-bold-double-arrow-next icon-xs"></i>
                                        </a>
                                    </div>
                                    <div class="d-flex align-items-center py-3">
                                        <div class="d-flex align-items-center">
                                            <div class="mr-2 text-muted">Loading...</div>
                                            <div class="spinner spinner-success mr-10"></div>
                                        </div>
                                        <select
                                            class="form-control form-control-sm text-success font-weight-bold mr-4 border-0 bg-light-success"
                                            style="width: 75px;">
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                        <span class="text-muted">Displaying 10 of 230 records</span>
                                    </div>
                                </div>
                                <!--end:: Pagination-->
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Code example-->
                        <div class="example example-compact mt-2">
                            <div class="example-tools">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                            <div class="example-code">
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="d-flex justify-content-between align-items-center flex-wrap"&gt;
                            &lt;div class="d-flex flex-wrp py-2 mr-3"&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm btn-light-success mr-2 my-1"&gt;&lt;i class="ki ki-bold-double-arrow-back icon-xs"&gt;&lt;/i&gt;&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm btn-light-success mr-2 my-1"&gt;&lt;i class="ki ki-bold-arrow-back icon-xs"&gt;&lt;/i&gt;&lt;/a&gt;

                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-success mr-2 my-1"&gt;...&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-success mr-2 my-1"&gt;23&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-success active mr-2 my-1"&gt;24&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-success mr-2 my-1"&gt;25&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-success mr-2 my-1"&gt;26&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-success mr-2 my-1"&gt;27&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-success mr-2 my-1"&gt;28&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-success mr-2 my-1"&gt;...&lt;/a&gt;

                                &lt;a href="#" class="btn btn-icon btn-sm btn-light-success mr-2 my-1"&gt;&lt;i class="ki ki-bold-arrow-next icon-xs"&gt;&lt;/i&gt;&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm btn-light-success mr-2 my-1"&gt;&lt;i class="ki ki-bold-double-arrow-next icon-xs"&gt;&lt;/i&gt;&lt;/a&gt;
                            &lt;/div&gt;
                            &lt;div class="d-flex align-items-center py-3"&gt;
                                &lt;div class="d-flex align-items-center"&gt;
                                    &lt;div class="mr-2 text-muted"&gt;Loading...&lt;/div&gt;
                                    &lt;div class="spinner spinner-success mr-10"&gt;&lt;/div&gt;
                                &lt;/div&gt;

                                &lt;select class="form-control form-control-sm text-success font-weight-bold mr-4 border-0 bg-light-primary" style="width: 75px;"&gt;
                                    &lt;option value="10"&gt;10&lt;/option&gt;
                                    &lt;option value="20"&gt;20&lt;/option&gt;
                                    &lt;option value="30"&gt;30&lt;/option&gt;
                                    &lt;option value="50"&gt;50&lt;/option&gt;
                                    &lt;option value="100"&gt;100&lt;/option&gt;
                                &lt;/select&gt;
                                &lt;span class="text-muted"&gt;Displaying 10 of 230 records&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
      </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Code example-->
                        <!--begin::Example-->
                        <div class="example example-basic mt-10">
                            <div class="example-preview">
                                <!--begin::Pagination-->
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="d-flex flex-wrap py-2 mr-3">
                                        <a href="#" class="btn btn-icon btn-sm btn-light-danger mr-2 my-1">
                                            <i class="ki ki-bold-double-arrow-back icon-xs"></i>
                                        </a>
                                        <a href="#" class="btn btn-icon btn-sm btn-light-danger mr-2 my-1">
                                            <i class="ki ki-bold-arrow-back icon-xs"></i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-danger mr-2 my-1">...</a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-danger mr-2 my-1">23</a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-danger active mr-2 my-1">24</a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-danger mr-2 my-1">25</a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-danger mr-2 my-1">26</a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-danger mr-2 my-1">27</a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-danger mr-2 my-1">28</a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-danger mr-2 my-1">...</a>
                                        <a href="#" class="btn btn-icon btn-sm btn-light-danger mr-2 my-1">
                                            <i class="ki ki-bold-arrow-next icon-xs"></i>
                                        </a>
                                        <a href="#" class="btn btn-icon btn-sm btn-light-danger mr-2 my-1">
                                            <i class="ki ki-bold-double-arrow-next icon-xs"></i>
                                        </a>
                                    </div>
                                    <div class="d-flex align-items-center py-3">
                                        <div class="d-flex align-items-center">
                                            <div class="mr-2 text-muted">Loading...</div>
                                            <div class="spinner spinner-danger mr-10"></div>
                                        </div>
                                        <select
                                            class="form-control form-control-sm text-danger font-weight-bold mr-4 border-0 bg-light-danger"
                                            style="width: 75px;">
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                        <span class="text-muted">Displaying 10 of 230 records</span>
                                    </div>
                                </div>
                                <!--end:: Pagination-->
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Code example-->
                        <div class="example example-compact mt-2">
                            <div class="example-tools">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                            <div class="example-code">
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="d-flex justify-content-between align-items-center flex-wrap"&gt;
                            &lt;div class="d-flex flex-wrap py-2 mr-3"&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm btn-light-danger mr-2 my-1"&gt;&lt;i class="ki ki-bold-double-arrow-back icon-xs"&gt;&lt;/i&gt;&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm btn-light-danger mr-2 my-1"&gt;&lt;i class="ki ki-bold-arrow-back icon-xs"&gt;&lt;/i&gt;&lt;/a&gt;

                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-danger mr-2 my-1"&gt;...&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-danger mr-2 my-1"&gt;23&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-danger active mr-2 my-1"&gt;24&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-danger mr-2 my-1"&gt;25&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-danger mr-2 my-1"&gt;26&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-danger mr-2 my-1"&gt;27&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-danger mr-2 my-1"&gt;28&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-danger mr-2 my-1"&gt;...&lt;/a&gt;

                                &lt;a href="#" class="btn btn-icon btn-sm btn-light-danger mr-2 my-1"&gt;&lt;i class="ki ki-bold-arrow-next icon-xs"&gt;&lt;/i&gt;&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm btn-light-danger mr-2 my-1"&gt;&lt;i class="ki ki-bold-double-arrow-next icon-xs"&gt;&lt;/i&gt;&lt;/a&gt;
                            &lt;/div&gt;
                            &lt;div class="d-flex align-items-center py-3"&gt;
                                &lt;div class="d-flex align-items-center"&gt;
                                    &lt;div class="mr-2 text-muted"&gt;Loading...&lt;/div&gt;
                                    &lt;div class="spinner spinner-danger mr-10"&gt;&lt;/div&gt;
                                &lt;/div&gt;

                                &lt;select class="form-control form-control-sm text-danger font-weight-bold mr-4 border-0 bg-light-danger" style="width: 75px;"&gt;
                                    &lt;option value="10"&gt;10&lt;/option&gt;
                                    &lt;option value="20"&gt;20&lt;/option&gt;
                                    &lt;option value="30"&gt;30&lt;/option&gt;
                                    &lt;option value="50"&gt;50&lt;/option&gt;
                                    &lt;option value="100"&gt;100&lt;/option&gt;
                                &lt;/select&gt;
                                &lt;span class="text-muted"&gt;Displaying 10 of 230 records&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
      </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Code example-->
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
                        <div class="example example-basic">
                            <p>Use
                                <code>.btn</code>with
                                <code>.btn-sm</code>to have small pagination size.
                            </p>
                            <div class="example-preview">
                                <!--begin::Pagination-->
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="d-flex flex-wrap py-2 mr-3">
                                        <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                                            <i class="ki ki-bold-double-arrow-back icon-xs"></i>
                                        </a>
                                        <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                                            <i class="ki ki-bold-arrow-back icon-xs"></i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">...</a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">23</a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-primary active mr-2 my-1">24</a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">25</a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">26</a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">27</a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">28</a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">...</a>
                                        <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                                            <i class="ki ki-bold-arrow-next icon-xs"></i>
                                        </a>
                                        <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                                            <i class="ki ki-bold-double-arrow-next icon-xs"></i>
                                        </a>
                                    </div>
                                    <div class="d-flex align-items-center py-3">
                                        <div class="d-flex align-items-center">
                                            <div class="mr-2 text-muted">Loading...</div>
                                            <div class="spinner spinner-primary mr-10"></div>
                                        </div>
                                        <select
                                            class="form-control form-control-sm text-primary font-weight-bold mr-4 border-0 bg-light-primary"
                                            style="width: 75px;">
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                        <span class="text-muted">Displaying 10 of 230 records</span>
                                    </div>
                                </div>
                                <!--end:: Pagination-->
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Code example-->
                        <div class="example example-compact mt-2">
                            <div class="example-tools">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                            <div class="example-code">
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="d-flex justify-content-between align-items-center flex-wrap"&gt;
                            &lt;div class="d-flex flex-wrap py-2 mr-3"&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1"&gt;&lt;i class="ki ki-bold-double-arrow-back icon-xs"&gt;&lt;/i&gt;&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1"&gt;&lt;i class="ki ki-bold-arrow-back icon-xs"&gt;&lt;/i&gt;&lt;/a&gt;

                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1"&gt;...&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1"&gt;23&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary active mr-2 my-1"&gt;24&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1"&gt;25&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1"&gt;26&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1"&gt;27&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1"&gt;28&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1"&gt;...&lt;/a&gt;

                                &lt;a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1"&gt;&lt;i class="ki ki-bold-arrow-next icon-xs"&gt;&lt;/i&gt;&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1"&gt;&lt;i class="ki ki-bold-double-arrow-next icon-xs"&gt;&lt;/i&gt;&lt;/a&gt;
                            &lt;/div&gt;
                            &lt;div class="d-flex align-items-center py-3"&gt;
                                &lt;div class="d-flex align-items-center"&gt;
                                    &lt;div class="mr-2 text-muted"&gt;Loading...&lt;/div&gt;
                                    &lt;div class="spinner spinner-primary mr-10"&gt;&lt;/div&gt;
                                &lt;/div&gt;

                                &lt;select class="form-control form-control-sm text-primary font-weight-bold mr-4 border-0 bg-light-primary" style="width: 75px;"&gt;
                                    &lt;option value="10"&gt;10&lt;/option&gt;
                                    &lt;option value="20"&gt;20&lt;/option&gt;
                                    &lt;option value="30"&gt;30&lt;/option&gt;
                                    &lt;option value="50"&gt;50&lt;/option&gt;
                                    &lt;option value="100"&gt;100&lt;/option&gt;
                                &lt;/select&gt;
                                &lt;span class="text-muted"&gt;Displaying 10 of 230 records&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
      </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Code example-->
                        <!--begin::Example-->
                        <div class="example example-basic mt-2">
                            <p>Use
                                <code>.btn</code>to have default pagination size.
                            </p>
                            <div class="example-preview">
                                <!--begin::Pagination-->
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="d-flex flex-wrap py-2 mr-3">
                                        <a href="#" class="btn btn-icon btn-light-primary mr-2 my-1">
                                            <i class="ki ki-bold-double-arrow-back icon-xs"></i>
                                        </a>
                                        <a href="#" class="btn btn-icon btn-light-primary mr-2 my-1">
                                            <i class="ki ki-bold-arrow-back icon-xs"></i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon border-0 btn-hover-primary mr-2 my-1">...</a>
                                        <a href="#" class="btn btn-icon border-0 btn-hover-primary mr-2 my-1">23</a>
                                        <a href="#"
                                            class="btn btn-icon border-0 btn-hover-primary active mr-2 my-1">24</a>
                                        <a href="#" class="btn btn-icon border-0 btn-hover-primary mr-2 my-1">25</a>
                                        <a href="#" class="btn btn-icon border-0 btn-hover-primary mr-2 my-1">26</a>
                                        <a href="#" class="btn btn-icon border-0 btn-hover-primary mr-2 my-1">27</a>
                                        <a href="#" class="btn btn-icon border-0 btn-hover-primary mr-2 my-1">28</a>
                                        <a href="#"
                                            class="btn btn-icon border-0 btn-hover-primary mr-2 my-1">...</a>
                                        <a href="#" class="btn btn-icon btn-light-primary mr-2 my-1">
                                            <i class="ki ki-bold-arrow-next icon-xs"></i>
                                        </a>
                                        <a href="#" class="btn btn-icon btn-light-primary mr-2 my-1">
                                            <i class="ki ki-bold-double-arrow-next icon-xs"></i>
                                        </a>
                                    </div>
                                    <div class="d-flex align-items-center py-3">
                                        <div class="d-flex align-items-center">
                                            <div class="mr-2 text-muted">Loading...</div>
                                            <div class="spinner spinner-primary mr-10"></div>
                                        </div>
                                        <select
                                            class="form-control text-primary font-weight-bold mr-4 border-0 bg-light-primary"
                                            style="width: 75px;">
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                        <span class="text-muted">Displaying 10 of 230 records</span>
                                    </div>
                                </div>
                                <!--end:: Pagination-->
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Code example-->
                        <div class="example example-compact mt-2">
                            <div class="example-tools">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                            <div class="example-code">
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="d-flex justify-content-between align-items-center flex-wrap"&gt;
                            &lt;div class="d-flex flex-wrap py-2 mr-3"&gt;
                                &lt;a href="#" class="btn btn-icon btn-light-primary mr-2 my-1"&gt;&lt;i class="ki ki-bold-double-arrow-back icon-xs"&gt;&lt;/i&gt;&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-light-primary mr-2 my-1"&gt;&lt;i class="ki ki-bold-arrow-back icon-xs"&gt;&lt;/i&gt;&lt;/a&gt;

                                &lt;a href="#" class="btn btn-icon border-0 btn-hover-primary mr-2 my-1"&gt;...&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon border-0 btn-hover-primary mr-2 my-1"&gt;23&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon border-0 btn-hover-primary active mr-2 my-1"&gt;24&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon border-0 btn-hover-primary mr-2 my-1"&gt;25&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon border-0 btn-hover-primary mr-2 my-1"&gt;26&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon border-0 btn-hover-primary mr-2 my-1"&gt;27&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon border-0 btn-hover-primary mr-2 my-1"&gt;28&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon border-0 btn-hover-primary mr-2 my-1"&gt;...&lt;/a&gt;

                                &lt;a href="#" class="btn btn-icon btn-light-primary mr-2 my-1"&gt;&lt;i class="ki ki-bold-arrow-next icon-xs"&gt;&lt;/i&gt;&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-light-primary mr-2 my-1"&gt;&lt;i class="ki ki-bold-double-arrow-next icon-xs"&gt;&lt;/i&gt;&lt;/a&gt;
                            &lt;/div&gt;
                            &lt;div class="d-flex align-items-center py-3"&gt;
                                &lt;div class="d-flex align-items-center"&gt;
                                    &lt;div class="mr-2 text-muted"&gt;Loading...&lt;/div&gt;
                                    &lt;div class="spinner spinner-primary mr-10"&gt;&lt;/div&gt;
                                &lt;/div&gt;

                                &lt;select class="form-control text-primary font-weight-bold mr-4 border-0 bg-light-primary" style="width: 75px;"&gt;
                                    &lt;option value="10"&gt;10&lt;/option&gt;
                                    &lt;option value="20"&gt;20&lt;/option&gt;
                                    &lt;option value="30"&gt;30&lt;/option&gt;
                                    &lt;option value="50"&gt;50&lt;/option&gt;
                                    &lt;option value="100"&gt;100&lt;/option&gt;
                                &lt;/select&gt;
                                &lt;span class="text-muted"&gt;Displaying 10 of 230 records&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
      </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Code example-->
                        <!--begin::Example-->
                        <div class="example example-basic">
                            <p>Use
                                <code>.btn</code>with
                                <code>.btn-lg</code>to have large pagination size.
                            </p>
                            <div class="example-preview">
                                <!--begin::Pagination-->
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="d-flex flex-wrap py-2 mr-3">
                                        <a href="#" class="btn btn-icon btn-lg btn-light-primary mr-2 my-1">
                                            <i class="ki ki-bold-double-arrow-back icon-xs"></i>
                                        </a>
                                        <a href="#" class="btn btn-icon btn-lg btn-light-primary mr-2 my-1">
                                            <i class="ki ki-bold-arrow-back icon-xs"></i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-lg border-0 btn-hover-primary mr-2 my-1">...</a>
                                        <a href="#"
                                            class="btn btn-icon btn-lg border-0 btn-hover-primary mr-2 my-1">23</a>
                                        <a href="#"
                                            class="btn btn-icon btn-lg border-0 btn-hover-primary active mr-2 my-1">24</a>
                                        <a href="#"
                                            class="btn btn-icon btn-lg border-0 btn-hover-primary mr-2 my-1">25</a>
                                        <a href="#"
                                            class="btn btn-icon btn-lg border-0 btn-hover-primary mr-2 my-1">26</a>
                                        <a href="#"
                                            class="btn btn-icon btn-lg border-0 btn-hover-primary mr-2 my-1">27</a>
                                        <a href="#"
                                            class="btn btn-icon btn-lg border-0 btn-hover-primary mr-2 my-1">28</a>
                                        <a href="#"
                                            class="btn btn-icon btn-lg border-0 btn-hover-primary mr-2 my-1">...</a>
                                        <a href="#" class="btn btn-icon btn-lg btn-light-primary mr-2 my-1">
                                            <i class="ki ki-bold-arrow-next icon-xs"></i>
                                        </a>
                                        <a href="#" class="btn btn-icon btn-lg btn-light-primary mr-2 my-1">
                                            <i class="ki ki-bold-double-arrow-next icon-xs"></i>
                                        </a>
                                    </div>
                                    <div class="d-flex align-items-center py-3">
                                        <div class="d-flex align-items-center">
                                            <div class="mr-2 text-muted">Loading...</div>
                                            <div class="spinner spinner-primary mr-10"></div>
                                        </div>
                                        <select
                                            class="form-control form-control-lg text-primary font-weight-bold mr-4 border-0 bg-light-primary"
                                            style="width: 75px;">
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                        <span class="text-muted">Displaying 10 of 230 records</span>
                                    </div>
                                </div>
                                <!--end:: Pagination-->
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Code example-->
                        <div class="example example-compact mt-2">
                            <div class="example-tools">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                            <div class="example-code">
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="d-flex justify-content-between align-items-center flex-wrap"&gt;
                            &lt;div class="d-flex flex-wrap py-2 mr-3"&gt;
                                &lt;a href="#" class="btn btn-icon btn-lg btn-light-primary mr-2 my-1"&gt;&lt;i class="ki ki-bold-double-arrow-back icon-xs"&gt;&lt;/i&gt;&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-lg btn-light-primary mr-2 my-1"&gt;&lt;i class="ki ki-bold-arrow-back icon-xs"&gt;&lt;/i&gt;&lt;/a&gt;

                                &lt;a href="#" class="btn btn-icon btn-lg border-0 btn-hover-primary mr-2 my-1"&gt;...&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-lg border-0 btn-hover-primary mr-2 my-1"&gt;23&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-lg border-0 btn-hover-primary active mr-2 my-1"&gt;24&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-lg border-0 btn-hover-primary mr-2 my-1"&gt;25&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-lg border-0 btn-hover-primary mr-2 my-1"&gt;26&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-lg border-0 btn-hover-primary mr-2 my-1"&gt;27&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-lg border-0 btn-hover-primary mr-2 my-1"&gt;28&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-lg border-0 btn-hover-primary mr-2 my-1"&gt;...&lt;/a&gt;

                                &lt;a href="#" class="btn btn-icon btn-lg btn-light-primary mr-2 my-1"&gt;&lt;i class="ki ki-bold-arrow-next icon-xs"&gt;&lt;/i&gt;&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-lg btn-light-primary mr-2 my-1"&gt;&lt;i class="ki ki-bold-double-arrow-next icon-xs"&gt;&lt;/i&gt;&lt;/a&gt;
                            &lt;/div&gt;
                            &lt;div class="d-flex align-items-center py-3"&gt;
                                &lt;div class="d-flex align-items-center"&gt;
                                    &lt;div class="mr-2 text-muted"&gt;Loading...&lt;/div&gt;
                                    &lt;div class="spinner spinner-primary mr-10"&gt;&lt;/div&gt;
                                &lt;/div&gt;

                                &lt;select class="form-control form-control-lg text-primary font-weight-bold mr-4 border-0 bg-light-primary" style="width: 75px;"&gt;
                                    &lt;option value="10"&gt;10&lt;/option&gt;
                                    &lt;option value="20"&gt;20&lt;/option&gt;
                                    &lt;option value="30"&gt;30&lt;/option&gt;
                                    &lt;option value="50"&gt;50&lt;/option&gt;
                                    &lt;option value="100"&gt;100&lt;/option&gt;
                                &lt;/select&gt;
                                &lt;span class="text-muted"&gt;Displaying 10 of 230 records&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
      </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Code example-->
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Circle Buttons</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example example-basic">
                            <p>Use
                                <code>.btn</code>with
                                <code>.btn-circle</code>to have pagination with circle buttons.
                            </p>
                            <div class="example-preview">
                                <!--begin::Pagination-->
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="d-flex flex-wrap py-2 mr-3">
                                        <a href="#"
                                            class="btn btn-icon btn-circle btn-sm btn-light-primary mr-2 my-1">
                                            <i class="ki ki-bold-double-arrow-back icon-xs"></i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-circle btn-sm btn-light-primary mr-2 my-1">
                                            <i class="ki ki-bold-arrow-back icon-xs"></i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-circle btn-sm border-0 btn-hover-primary mr-2 my-1">...</a>
                                        <a href="#"
                                            class="btn btn-icon btn-circle btn-sm border-0 btn-hover-primary mr-2 my-1">23</a>
                                        <a href="#"
                                            class="btn btn-icon btn-circle btn-sm border-0 btn-hover-primary active mr-2 my-1">24</a>
                                        <a href="#"
                                            class="btn btn-icon btn-circle btn-sm border-0 btn-hover-primary mr-2 my-1">25</a>
                                        <a href="#"
                                            class="btn btn-icon btn-circle btn-sm border-0 btn-hover-primary mr-2 my-1">26</a>
                                        <a href="#"
                                            class="btn btn-icon btn-circle btn-sm border-0 btn-hover-primary mr-2 my-1">27</a>
                                        <a href="#"
                                            class="btn btn-icon btn-circle btn-sm border-0 btn-hover-primary mr-2 my-1">28</a>
                                        <a href="#"
                                            class="btn btn-icon btn-circle btn-sm border-0 btn-hover-primary mr-2 my-1">...</a>
                                        <a href="#"
                                            class="btn btn-icon btn-circle btn-sm btn-light-primary mr-2 my-1">
                                            <i class="ki ki-bold-arrow-next icon-xs"></i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-circle btn-sm btn-light-primary mr-2 my-1">
                                            <i class="ki ki-bold-double-arrow-next icon-xs"></i>
                                        </a>
                                    </div>
                                    <div class="d-flex align-items-center py-3">
                                        <div class="d-flex align-items-center">
                                            <div class="mr-2 text-muted">Loading...</div>
                                            <div class="spinner spinner-primary mr-10"></div>
                                        </div>
                                        <select
                                            class="form-control form-control-sm text-primary font-weight-bold mr-4 border-0 bg-light-primary"
                                            style="width: 75px;">
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                        <span class="text-muted">Displaying 10 of 230 records</span>
                                    </div>
                                </div>
                                <!--end:: Pagination-->
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Code example-->
                        <div class="example example-compact mt-5">
                            <div class="example-tools">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                            <div class="example-code">
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="d-flex justify-content-between align-items-center flex-wrap"&gt;
                            &lt;div class="d-flex flex-wrap py-2 mr-3"&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1"&gt;&lt;i class="ki ki-bold-double-arrow-back icon-xs"&gt;&lt;/i&gt;&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1"&gt;&lt;i class="ki ki-bold-arrow-back icon-xs"&gt;&lt;/i&gt;&lt;/a&gt;

                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1"&gt;...&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1"&gt;23&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary active mr-2 my-1"&gt;24&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1"&gt;25&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1"&gt;26&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1"&gt;27&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1"&gt;28&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1"&gt;...&lt;/a&gt;

                                &lt;a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1"&gt;&lt;i class="ki ki-bold-arrow-next icon-xs"&gt;&lt;/i&gt;&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1"&gt;&lt;i class="ki ki-bold-double-arrow-next icon-xs"&gt;&lt;/i&gt;&lt;/a&gt;
                            &lt;/div&gt;
                            &lt;div class="d-flex align-items-center py-3"&gt;
                                &lt;div class="d-flex align-items-center"&gt;
                                    &lt;div class="mr-2 text-muted"&gt;Loading...&lt;/div&gt;
                                    &lt;div class="spinner spinner-primary mr-10"&gt;&lt;/div&gt;
                                &lt;/div&gt;

                                &lt;select class="form-control form-control-sm text-primary font-weight-bold mr-4 border-0 bg-light-primary" style="width: 75px;"&gt;
                                    &lt;option value="10"&gt;10&lt;/option&gt;
                                    &lt;option value="20"&gt;20&lt;/option&gt;
                                    &lt;option value="30"&gt;30&lt;/option&gt;
                                    &lt;option value="50"&gt;50&lt;/option&gt;
                                    &lt;option value="100"&gt;100&lt;/option&gt;
                                &lt;/select&gt;
                                &lt;span class="text-muted"&gt;Displaying 10 of 230 records&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
      </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Code example-->
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Disabled Buttons</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example example-basic">
                            <p>Use
                                <code>.btn</code>with
                                <code>.btn-circle</code>to have pagination with circle buttons.
                            </p>
                            <div class="example-preview">
                                <!--begin::Pagination-->
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="d-flex flex-wrap py-2 mr-3">
                                        <a href="#"
                                            class="btn btn-icon btn-sm btn-light-primary mr-2 my-1 disabled">
                                            <i class="ki ki-bold-double-arrow-back icon-xs"></i>
                                        </a>
                                        <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                                            <i class="ki ki-bold-arrow-back icon-xs"></i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">...</a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">23</a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-primary active mr-2 my-1">24</a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">25</a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">26</a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">27</a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">28</a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">...</a>
                                        <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                                            <i class="ki ki-bold-arrow-next icon-xs"></i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-sm btn-light-primary mr-2 my-1 disabled">
                                            <i class="ki ki-bold-double-arrow-next icon-xs"></i>
                                        </a>
                                    </div>
                                    <div class="d-flex align-items-center py-3">
                                        <div class="d-flex align-items-center">
                                            <div class="mr-2 text-muted">Loading...</div>
                                            <div class="spinner spinner-primary mr-10"></div>
                                        </div>
                                        <select
                                            class="form-control form-control-sm text-primary font-weight-bold mr-4 border-0 bg-light-primary"
                                            style="width: 75px;">
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                        <span class="text-muted">Displaying 10 of 230 records</span>
                                    </div>
                                </div>
                                <!--end:: Pagination-->
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Code example-->
                        <div class="example example-compact mt-5">
                            <div class="example-tools">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                            <div class="example-code">
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="d-flex justify-content-between align-items-center flex-wrap"&gt;
                            &lt;div class="d-flex flex-wrap py-2 mr-3"&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1 disabled" disabled&gt;&lt;i class="ki ki-bold-double-arrow-back icon-xs"&gt;&lt;/i&gt;&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2"&gt;&lt;i class="ki ki-bold-arrow-back icon-xs"&gt;&lt;/i&gt;&lt;/a&gt;

                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1"&gt;...&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1"&gt;23&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary active mr-2 my-1"&gt;24&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1"&gt;25&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1"&gt;26&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1"&gt;27&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1"&gt;28&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1"&gt;...&lt;/a&gt;

                                &lt;a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1"&gt;&lt;i class="ki ki-bold-arrow-next icon-xs"&gt;&lt;/i&gt;&lt;/a&gt;
                                &lt;a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1 disabled" disabled&gt;&lt;i class="ki ki-bold-double-arrow-next icon-xs"&gt;&lt;/i&gt;&lt;/a&gt;
                            &lt;/div&gt;
                            &lt;div class="d-flex align-items-center py-3"&gt;
                                &lt;div class="d-flex align-items-center"&gt;
                                    &lt;div class="mr-2 text-muted"&gt;Loading...&lt;/div&gt;
                                    &lt;div class="spinner spinner-primary mr-10"&gt;&lt;/div&gt;
                                &lt;/div&gt;

                                &lt;select class="form-control form-control-sm text-primary font-weight-bold mr-4 border-0 bg-light-primary" style="width: 75px;"&gt;
                                    &lt;option value="10"&gt;10&lt;/option&gt;
                                    &lt;option value="20"&gt;20&lt;/option&gt;
                                    &lt;option value="30"&gt;30&lt;/option&gt;
                                    &lt;option value="50"&gt;50&lt;/option&gt;
                                    &lt;option value="100"&gt;100&lt;/option&gt;
                                &lt;/select&gt;
                                &lt;span class="text-muted"&gt;Displaying 10 of 230 records&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
      </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Code example-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
        </div>
    </div>
    <!--end::Container-->
@endsection
