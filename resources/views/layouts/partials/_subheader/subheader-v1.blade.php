@php
    $menuTranslations = trans('menus');
    $asideTranslations = trans('aside');
    $breadcrumbTranslations = trans('breadcrumb');

    if (!is_array($menuTranslations)) {
        $menuTranslations = [];
    }

    if (!is_array($asideTranslations)) {
        $asideTranslations = [];
    }

    if (!is_array($breadcrumbTranslations)) {
        $breadcrumbTranslations = [];
    }

    $translateBreadcrumb = static function ($value) use (
        $menuTranslations,
        $asideTranslations,
        $breadcrumbTranslations,
    ) {
        if (!is_string($value)) {
            return $value;
        }

        $value = trim($value);

        if ($value === '') {
            return $value;
        }

        if (isset($breadcrumbTranslations[$value])) {
            return $breadcrumbTranslations[$value];
        }

        if (isset($menuTranslations[$value])) {
            return $menuTranslations[$value];
        }

        $asideKey = strtolower($value);

        if (isset($asideTranslations[$asideKey])) {
            return $asideTranslations[$asideKey];
        }

        return $value;
    };

    $dynamicBreadcrumbs = function_exists('getPageBreadcrumbs') ? getPageBreadcrumbs() : [];
    $slotBreadcrumbs = [];

    foreach (['li_1', 'li_2', 'li_3', 'li_4'] as $slotName) {
        if (isset($$slotName)) {
            $slotBreadcrumbs[] = $$slotName;
        }
    }

    // Jika route ditemukan di menu dinamis, gunakan breadcrumb otomatis dari URL.
    $resolvedBreadcrumbs = !empty($dynamicBreadcrumbs) ? $dynamicBreadcrumbs : $slotBreadcrumbs;
@endphp

@once
    <style>
        #kt_subheader .subheader-breadcrumb-fix.breadcrumb-dot .breadcrumb-item:first-child::before,
        #kt_subheader .subheader-breadcrumb-fix.breadcrumb-dot .breadcrumb-item:first-of-type::before {
            display: none !important;
            content: none !important;
        }
    </style>
@endonce

<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex flex-column align-items-start mr-2">
            <!--begin::Page Title-->
            <h5 class="text-dark font-weight-bold mt-2 mb-1 mr-0">
                @isset($title)
                    {{ $title }}
                @endisset
            </h5>
            <!--end::Page Title-->
            <!--begin::Actions-->
            @if (!empty($resolvedBreadcrumbs))
                <div class="mb-1">
                    <ul
                        class="breadcrumb breadcrumb-transparent breadcrumb-dot subheader-breadcrumb-fix font-weight-bold p-0 my-0 mr-0 font-size-sm">
                        @foreach (array_slice($resolvedBreadcrumbs, 0, 4) as $crumb)
                            <li class="breadcrumb-item">
                                <a href="" class="text-muted">{{ $translateBreadcrumb($crumb) }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!--end::Actions-->
        </div>
        <!--end::Info-->
        <!--begin::Toolbar-->
        @isset($action)
            <div class="d-flex align-items-center">
                @isset($other)
                    <div class="mr-4">{{ $other }}</div>
                @endisset
                {{ $action }}
            </div>
        @else
            <div class="d-flex align-items-center">
                @isset($other)
                    <div class="mr-4">{{ $other }}</div>
                @endisset
                {{-- <!--begin::Actions-->
                <a href="#" class="btn btn-light-primary font-weight-bolder btn-sm">Actions</a>
                <!--end::Actions-->
                <!--begin::Dropdown-->
                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left"
                    data-original-title="Quick actions">
                    <a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <span class="svg-icon svg-icon-success svg-icon-2x">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Files/File-plus.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                    <path
                                        d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z"
                                        fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                    <path
                                        d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z"
                                        fill="#000000"></path>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right p-0 m-0">
                        <!--begin::Navigation-->
                        <ul class="navi navi-hover">
                            <li class="navi-header font-weight-bold py-4">
                                <span class="font-size-lg">Choose Label:</span>
                                <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip"
                                    data-placement="right" title="" data-original-title="Click to learn more..."></i>
                            </li>
                            <li class="navi-separator mb-3 opacity-70"></li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-text">
                                        <span class="label label-xl label-inline label-light-success">Customer</span>
                                    </span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-text">
                                        <span class="label label-xl label-inline label-light-danger">Partner</span>
                                    </span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-text">
                                        <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                    </span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-text">
                                        <span class="label label-xl label-inline label-light-primary">Member</span>
                                    </span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-text">
                                        <span class="label label-xl label-inline label-light-dark">Staff</span>
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
                <!--end::Dropdown--> --}}
                {!! renderDate() !!}
            </div>
        @endisset
        <!--end::Toolbar-->
    </div>
</div>
