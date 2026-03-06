<!--begin::Header-->
@php
    $currentUser = auth()->user();
    $displayName = $currentUser?->name ?? 'User';
    $displayEmail = $currentUser?->email ?? '-';
    $profilePhoto = $currentUser?->avatar_url ?? asset('assets/media/users/default.jpg');
@endphp
<div class="position-relative d-flex align-items-center justify-content-between flex-wrap p-8 bgi-size-cover bgi-no-repeat rounded-top"
    style="background-image: url(assets/media/misc/bg-1.jpg)">
    <div class="d-flex align-items-center mr-2" style="padding-bottom: 1.5rem;">

        <!--begin::Symbol-->
        <div class="symbol symbol-50 mr-3">
            <img alt="{{ $displayName }}" src="{{ $profilePhoto }}" class="rounded-circle" />
        </div>

        <!--end::Symbol-->

        <!--begin::Text-->
        <div class="m-0 flex-grow-1 mr-3">
            <div class="text-white font-size-h5">{{ $displayName }}</div>
            <div class="text-white-50 font-size-sm">{{ $displayEmail }}</div>
        </div>

        <!--end::Text-->
    </div>
    <span class="label label-success label-lg font-weight-bold label-inline position-absolute"
        style="right: 1.5rem; bottom: 0.55rem;">
        {{ __('user_dropdown.messages_count', ['count' => 3]) }}
    </span>
</div>

<!--end::Header-->

<!--begin::Nav-->
<div class="navi navi-spacer-x-0 pt-5">

    <!--begin::Item-->
    <a href="/custom/apps/profile/profile-1/personal-information" class="navi-item px-8">
        <div class="navi-link">
            <div class="navi-icon mr-2">
                <i class="flaticon2-calendar-3 text-success"></i>
            </div>
            <div class="navi-text">
                <div class="font-weight-bold">
                    {{ __('user_dropdown.my_profile') }}
                </div>
                <div class="text-muted">
                    {{ __('user_dropdown.account_settings') }}
                    <span
                        class="label label-light-danger label-inline font-weight-bold">{{ __('user_dropdown.update') }}</span>
                </div>
            </div>
        </div>
    </a>

    <!--end::Item-->

    <!--begin::Item-->
    <a href="/custom/apps/inbox" class="navi-item px-8">
        <div class="navi-link">
            <div class="navi-icon mr-2">
                <i class="flaticon2-mail text-warning"></i>
            </div>
            <div class="navi-text">
                <div class="font-weight-bold">
                    {{ __('user_dropdown.my_messages') }}
                </div>
                <div class="text-muted">
                    {{ __('user_dropdown.inbox_and_tasks') }}
                </div>
            </div>
        </div>
    </a>

    <!--end::Item-->

    <!--begin::Item-->
    <a href="custom/apps/profile/profile-2" class="navi-item px-8">
        <div class="navi-link">
            <div class="navi-icon mr-2">
                <i class="flaticon2-rocket-1 text-danger"></i>
            </div>
            <div class="navi-text">
                <div class="font-weight-bold">
                    {{ __('user_dropdown.my_activities') }}
                </div>
                <div class="text-muted">
                    {{ __('user_dropdown.logs_and_notifications') }}
                </div>
            </div>
        </div>
    </a>

    <!--end::Item-->

    <!--begin::Item-->
    <a href="/custom/apps/todo/tasks" class="navi-item px-8">
        <div class="navi-link">
            <div class="navi-icon mr-2">
                <i class="flaticon2-hourglass text-primary"></i>
            </div>
            <div class="navi-text">
                <div class="font-weight-bold">
                    {{ __('user_dropdown.my_tasks') }}
                </div>
                <div class="text-muted">
                    {{ __('user_dropdown.latest_tasks_and_projects') }}
                </div>
            </div>
        </div>
    </a>

    <!--end::Item-->

    <!--begin::Footer-->
    <div class="navi-separator mt-3"></div>
    <div class="navi-footer  px-8 py-5">
        <a href="/custom/pages/pricing/pricing-2"
            class="btn btn-clean font-weight-bold">{{ __('user_dropdown.upgrade_plan') }}</a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <a href="{{ route('logout') }}" target="_blank" class="btn btn-light-primary font-weight-bold"
                onclick="event.preventDefault(); this.closest('form').submit();">{{ __('user_dropdown.sign_out') }}</a>
        </form>


    </div>

    <!--end::Footer-->
</div>

<!--end::Nav-->
