<x-layout>
    @include('components.top-bar')
    <section class="home tw-flex tw-justify-center" id=home style="">
        <div class="tw-flex tw-flex-col tw-mx-auto tw-justify-center tw-items-center">
            <h1 class="tw-text-white tw-font-bold tw-text-4xl tw-w-3/5 tw-text-center tw-uppercase tw-leading-10">
                Empower accountability. Speak up against corruption. Report incidents confidentially.
            </h1>

            <a href="/report" class="tw-bg-white tw-mt-10 tw-px-7 tw-py-3 tw-font-medium tw-text-xl tw-rounded-lg">
                Report Case
            </a>
        </div>
    </section>
</x-layout>

<style>
    #home {
        height: 100vh;
        width: 100%;
        background: url("assets/images/bg.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
