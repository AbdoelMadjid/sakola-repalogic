<!--begin::Footer-->
@php
    $laravelVersion = app()->version();
    $phpVersion = PHP_VERSION;
    $mysqlVersion = '-';
    try {
        $mysqlVersion = DB::connection()->getPdo()->getAttribute(\PDO::ATTR_SERVER_VERSION);
    } catch (\Throwable $e) {
        $mysqlVersion = '-';
    }
@endphp
<div class="footer bg-white py-4 d-flex flex-lg-column " id="kt_footer">

    <!--begin::Container-->
    <div class=" container-fluid  d-flex flex-column flex-md-row align-items-center justify-content-between">

        <!--begin::Copyright-->
        <div class="text-dark order-2 order-md-1 d-flex align-items-center flex-wrap">
            <div>
                <span class="text-muted font-weight-bold mr-2">2025&copy;</span>
                <a href="http://keenthemes.com/metronic" target="_blank"
                    class="text-dark-75 text-hover-primary">Keenthemes</a>
            </div>
            <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
            <span class="text-muted font-size-sm mr-4">Laravel {{ $laravelVersion }}</span>
            <span class="text-muted font-size-sm mr-4">PHP {{ $phpVersion }}</span>
            <span class="text-muted font-size-sm">MySQL {{ $mysqlVersion }}</span>
        </div>

        <!--end::Copyright-->

        <!--begin::Nav-->
        <div class="nav nav-dark">
            <a href="http://keenthemes.com/metronic" target="_blank"
                class="nav-link pl-0 pr-5">{{ __('footer.about') }}</a>
            <a href="http://keenthemes.com/metronic" target="_blank"
                class="nav-link pl-0 pr-5">{{ __('footer.team') }}</a>
            <a href="http://keenthemes.com/metronic" target="_blank"
                class="nav-link pl-0 pr-0">{{ __('footer.contact') }}</a>
        </div>

        <!--end::Nav-->
    </div>

    <!--end::Container-->
</div>

<!--end::Footer-->
