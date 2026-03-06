@php
    $locale = app()->getLocale();
@endphp

<!--begin::Nav-->
<ul class="navi navi-hover py-4">
    <li class="navi-item {{ $locale === 'en' ? 'active' : '' }}">
        <a href="{{ route('locale.switch', 'en') }}" class="navi-link">
            <span class="symbol symbol-20 mr-3">
                <img src="assets/media/svg/flags/226-united-states.svg" alt="English" />
            </span>
            <span class="navi-text">{{ __('locale.english') }}</span>
        </a>
    </li>

    <li class="navi-item {{ $locale === 'id' ? 'active' : '' }}">
        <a href="{{ route('locale.switch', 'id') }}" class="navi-link">
            <span class="symbol symbol-20 mr-3">
                <img src="assets/media/svg/flags/004-indonesia.svg" alt="Bahasa Indonesia" />
            </span>
            <span class="navi-text">{{ __('locale.indonesian') }}</span>
        </a>
    </li>
</ul>
<!--end::Nav-->
