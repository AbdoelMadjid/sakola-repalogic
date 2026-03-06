@extends('layouts.index', ['isAuth' => true])
@section('styles')
    <link href="{{ asset('assets/css/pages/error/error-2.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <!--begin::Error-->
    <div class="d-flex flex-row-fluid bgi-size-cover bgi-position-center"
        style="background-image: url(assets/media/error/bg2.jpg);">
        <!--begin::Content-->
        <div class="d-flex flex-row-fluid flex-column justify-content-end align-items-center text-center text-white pb-40">
            <h1 class="display-1 font-weight-bold">OOPS!</h1>
            <span class="display-4 font-weight-boldest mb-8">Something went wrong here</span>
        </div>
        <!--end::Content-->
    </div>
    <!--end::Error-->
@endsection
