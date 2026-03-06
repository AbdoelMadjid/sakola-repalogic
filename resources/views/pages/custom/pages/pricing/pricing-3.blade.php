@extends('layouts.index')
@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            {{ trim($__env->yieldContent('title')) ?: getPageTitle() }}
        @endslot
        @slot('breadcrumb')
            @slot('li_1')
                Apps
            @endslot
            @slot('li_2')
                Pricing Tables
            @endslot
        @endslot
    @endcomponent
@endsection
@section('content')
    <!--begin::Container-->
    <div class="container">
        <!--begin::Card-->
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <span class="card-icon">
                        <i class="flaticon2-chart text-primary"></i>
                    </span>
                    <h4 class="card-label">Pricing Table</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="row justify-content-center text-center my-0 my-md-25">
                    <!-- begin: Pricing-->
                    <div class="col-md-4 col-xxl-3 bg-white rounded-left shadow-sm">
                        <div class="pt-25 pb-25 pb-md-10 px-4">
                            <h4 class="mb-15">Basic</h4>
                            <span
                                class="px-7 py-3 font-size-h1 font-weight-bold d-inline-flex flex-center bg-primary-o-10 rounded-lg mb-15">Free</span>
                            <br />
                            <p class="mb-10 d-flex flex-column text-dark-50">
                                <span>Lorem ipsum dolor sit amet adipiscing elit</span>
                                <span>sed do eiusmod tempors labore et dolore</span>
                                <span>magna siad enim aliqua</span>
                            </p>
                            <button type="button"
                                class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Download</button>
                        </div>
                    </div>
                    <!-- end: Pricing-->
                    <!-- begin: Pricing-->
                    <div class="col-md-4 col-xxl-3 bg-primary my-md-n15 rounded shadow-sm">
                        <div class="pt-25 pt-md-37 pb-25 pb-md-10 py-md-28 px-4">
                            <h4 class="text-white mb-15">Professional</h4>
                            <span class="px-7 py-3 bg-white d-inline-flex flex-center rounded-lg mb-15 bg-white">
                                <span class="pr-2 text-primary opacity-70">$</span>
                                <span class="pr-2 font-size-h1 font-weight-bold text-primary">29</span>
                                <span class="text-primary opacity-70">/&#160;&#160;Per Installation</span>
                            </span>
                            <br />
                            <p class="text-white mb-10 d-flex flex-column">
                                <span>Lorem ipsum dolor sit amet adipiscing elit</span>
                                <span>sed do eiusmod tempors labore et dolore</span>
                                <span>magna siad enim aliqua</span>
                            </p>
                            <button type="button"
                                class="btn btn-white text-uppercase font-weight-bolder px-15 py-3">Purchase</button>
                        </div>
                    </div>
                    <!-- end: Pricing-->
                    <!-- begin: Pricing-->
                    <div class="col-md-4 col-xxl-3 bg-white rounded-right shadow-sm">
                        <div class="pt-25 pb-25 pb-md-10 px-4">
                            <h4 class="mb-15">Extended</h4>
                            <span class="px-7 py-3 d-inline-flex flex-center rounded-lg mb-15 bg-primary-o-10">
                                <span class="pr-2 opacity-70">$</span>
                                <span class="pr-2 font-size-h1 font-weight-bold">99</span>
                                <span class="opacity-70">/&#160;&#160;Per Installation</span>
                            </span>
                            <br />
                            <p class="mb-10 d-flex flex-column text-dark-50">
                                <span>Lorem ipsum dolor sit amet adipiscing elit</span>
                                <span>sed do eiusmod tempors labore et dolore</span>
                                <span>magna siad enim aliqua</span>
                            </p>
                            <button type="button"
                                class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Purchase</button>
                        </div>
                    </div>
                    <!-- end: Pricing-->
                </div>
            </div>
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
@endsection
