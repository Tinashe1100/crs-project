<x-layout>
    <header class="tw-flex tw-container tw-mx-auto tw-bg-white tw-py-6 tw-justify-between tw-items-center">
        <a href="/" class="tw-w-1/6">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Corruption Reporting System logo" class="">
        </a>

        <div class="tw-flex tw-justify-between tw-items-center  tw-space-x-3">
            <p class="tw-font-medium tw-font-2xl">
                Let's Take Action For A Corruption-free Society
            </p>

            <a href="{{ route('signup') }}"
                class="tw-bg-red-500 tw-px-3 tw-py-2 tw-rounded-md tw-text-white tw-font-medium">Sign up</a>
        </div>


    </header>
</x-layout>
