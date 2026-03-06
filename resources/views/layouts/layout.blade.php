<!--begin::Main-->
@include('layouts.partials._header-mobile')

<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">

        @include('layouts.partials._aside')

        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

            @include('layouts.partials._header')

            <!--begin::Content-->
            <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">

                @yield('subheader')

                <!--begin::Entry-->
                <div class="d-flex flex-column-fluid">
                    @yield('content')
                </div>
                <!--end::Entry-->
            </div>
            <!--end::Content-->

            @include('layouts.partials._footer')
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Main-->
